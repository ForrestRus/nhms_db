<?php 
     $title= 'Patients';
     require_once 'includes/header.php'; 
     require_once 'includes/auth_check.php';
     require_once 'db/conn.php';
     
     //Get Attendees
     $results = $crud->getpatient();
?>


    <table class="table">
        <tr>
            <th>#</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Disability</th>
            <th>Actions</th>

        </tr>

        <?php while ($r = $results-> fetch(PDO::FETCH_ASSOC)) {?>

       
            <tr>
                <td><?php echo $r['patient_id'] ?></td>
                <td><?php echo $r['firstname'] ?></td>
                <td><?php echo $r['lastname'] ?></td>
                <td><?php echo $r['name'] ?></td>
                <td>
                    <a href= "view.php?id=<?php echo $r['patient_id'] ?>" class="btn btn-info">View</a>
                    <a href= "edit.php?id=<?php echo $r['patient_id'] ?>" class="btn btn-warning">Edit</a>
                    <a onclick ="return confirm ('Are you sure you want to delete record?');"
                    href= "delete.php?id=<?php echo $r['patient_id'] ?>" class="btn btn-danger">Delete</a>
                
                </td>

            </tr>
        <?php }?>
    </table>

<br>
<br>
<br>
<br>
<br>
<?php require_once 'includes/footer.php'; ?>