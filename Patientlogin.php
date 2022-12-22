<?php 
     $title= 'Patient Login';
     require_once 'includes/header.php'; 
     require_once 'db/conn.php';

if(isset($_POST['submit']))
{
     $emailaddess= $_POST['email'];
      $password = $_POST['password'];

     $isSuccess = $crud->getpatientlogin($emailaddress, $password);
	
}

?>

<h1 class= "text-center"><?php echo $title ?></h1>

<form action= "about.php" method="post">
     <table class="table table-sm">
          <tr>
               <td><label for="emailaddress" >Email Address: *</label></td>
               <td><input type="text" name= "email" class="form-control" id="email">
               </td>
          
          <tr>
     </table><br/><br/>

           <div class="d-grid gap-2">
          <input type= "submit" name="submit" id="submit"  value= "Login" class= "btn btn-info btn-block"> <br/>
           </div>
           
          <a href = "#">Forgot Password</a>
     
 
</form><br/><br/><br/><br><br>

<?php require_once 'includes/footer.php'; ?>