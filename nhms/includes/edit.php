   
<?php 
     $title= 'Edit Record';
     require_once 'includes/header.php'; 
     require_once 'includes/auth_check.php';
     require_once 'db/conn.php';

     //Get Specialties
     $results = $crud->getdisabilities();

     if(!isset($_GET['id']))
     {
        include 'includes/errormessage.php';
        header("location: patient.php");
     }
     else{
        $id = $_GET['id'];
        $patient = $crud->getpatientDetails($id);
     

?>

    <h1 class="text-center" >Edit Record</h1>

        <form method="post" action ="editpost.php">
            <input type = "hidden" name= "id" value = "<?php echo $patient ['patient_id'] ?>" />
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputfirstname">First Name</label>
                    <input type="text" class="form-control" value = "<?php echo $patient ['firstname'] ?>" id="firstname"  name="firstname">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputlastname">Last Name</label>
                    <input type="text" class="form-control" value = "<?php echo $patient ['lastname'] ?>" id="lastname"  name="lastname">
                </div>
            </div>
                <div class="form-group">
                    <label for="dob">Date of Birth</label>
                    <input type="text" class="form-control" value = "<?php echo $patient ['dateofbirth'] ?>" id="dateofbirth"  name="dateofbirth">
                </div>
                <div class="form-group">
                        <label for="Disability">Disability</label>
                        <select class="form-control" id="disability" name="disability">
                            <?php while ($r = $results ->fetch (PDO::FETCH_ASSOC)) {?>
                                <option value= "<?php echo $r['disability_id'] ?>" <?php if($r['disability_id']==$patient['disability_id']) echo 'selected'?>>
                                <?php echo $r['name']; ?>
                            
                            </option>

                            <?php }?>
                        </select>
                </div>
            
                <div class="form-group">
                    <label for="inputEmail4">Email Address</label>
                    <input type="email" class="form-control" value = "<?php echo $patient ['emailaddress'] ?>" id="emailaddress" name="emailaddress">
                    <small id="emailHelp" class="form-text text-muted"> We will never share your Email with anyone else.</small>
                </div>
                <div class="form-group">
                        <label for="phone">Contact Number</label>
                        <input type="text" class="form-control"value = "<?php echo $patient ['contactnumber'] ?>" id="contactnumber" name="contactnumber">
                        <small id="phoneHelp" class="form-text text-muted"> We will never share your number with anyone else.</small>
                </div>
        
            

    
        <br>
        <a href= "viewrecords.php" class="btn btn-info">Back to List</a>
        <button type="Register" name="Register" class="btn btn-success btn-block" class="d-grid gap-2">Save Changes</button>
    </form>

<?php }?>
    
<br>
<br>
<br>
<br>
<br>
<?php require_once 'includes/footer.php'; ?>