<?php 
     $title= 'Success';
	 
     require_once 'includes/header.php'; 
     require_once 'db\conn.php';
      require_once 'sendemail.php';

     

     if (isset($_POST['submit'])){

      $firstname = $_POST['firstname'];
      $lastname = $_POST['lastname'];
      $dateofbirth = $_POST['dateofbirth'];
      $emailaddress = $_POST['emailaddress'];
      $contactnumber = $_POST['contactnumber'];
      $disability = $_POST['disability'];
      //$Password= $_POST['Password'];

      $orig_file = $_FILES["avatar"]["tmp_name"];
        $ext = pathinfo($_FILES["avatar"]["name"], PATHINFO_EXTENSION);
        $target_dir = 'uploads/';
        $destination = "$target_dir$patient.$ext";
        move_uploaded_file($orig_file,$destination);

      $isSuccess = $crud->insertpatient($firstname,$lastname, $dateofbirth, $emailaddress, $contactnumber, $disability, $Password);
      $disabilityName = $crud->getdisabilityById($disability);
      


      if ($isSuccess){
        // SendEmail::SendMail($email, 'Thanks for being here');
 
       
        echo "<script>alert('patients record inserted successfully...');</script>";
        echo "<script>window.location='Patientlogin.php';</script>";	
        //include 'includes/successmessage.php';

       }
       else {
         
         include 'includes/errormessage.php';
      }


     }
?>

<h1 class="text-center text-"> You Have Been Registered!</h1>

   <img src="" echo$Password; class= "rounded-circle" style="width: 20%; height: 20%" />

<div class="card" style="width: 25rem;">
  <div class="card-body">
    <h5 class="card-title">
       Your name is : <?php echo $_POST['firstname'] . ' '. $_POST['lastname']; ?>
     </h5>
     <br>
    <h6 class="card-subtitle mb-2 text-muted">
    Your Disability is : <?php echo $disabilityName['name']; ?>
    </h6>
    <br>
    <p class="card-text">
        Date of Birth: <?php echo $_POST['dateofbirth']; ?>
    </p>
    <p class="card-text">
       Email Address: <?php echo $_POST['emailaddress']; ?>
       
    </p>
    <p class="card-text">
        Contact Number: <?php echo $_POST['contactnumber']; ?>
    </p>
   
  </div>
</div>
<br>
<br>
<br>
<br>
<br>


<?php require_once 'includes/footer.php'; ?>