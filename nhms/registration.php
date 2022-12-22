
 <?php 
    $title = 'Registration';
    require_once 'includes/header.php';
    require_once 'db/conn.php';
   $results = $crud->getdisabilities();
 ?>

<script>

function checklen()
{
    var pass1 = document.getElementById("password");  
    if(pass1.value.length<6){  
        alert("Password must be at least 6 characters long. Try again!");  
        return false;  
  }  
}
  </script>

    <h1 class="text-center">Registration</h1>
    
    <form method ="post" action="success.php" enctype="multipart/form-data">
    <div class="form-group">
    <label for="firstname" >First Name</label>
    <input required type="text" class="form-control" id="firstname" name="firstname">
  </div>
   <br>
  <div class="form-group">
    <label for="lastname" >Last Name</label>
    <input required type="text" class="form-control" id="lastname" name="lastname">
  </div>
  <br>
  <div class="form-group">
    <label for="dob" >Date of Birth</label>
    <input type="text" class="form-control" id="dob" name="dateofbirth">
  </div>
    <br>
  <div class="form-group">
    <label for="disability" >Disability</label>
    <select class="form-control" id="disability" name="disability">
    <option selected class = "form-text">Select Option</option>  
    <?php while($r = $results->fetch(PDO::FETCH_ASSOC)) {?>
       <option value="<?php echo $r['disability_id'] ?>"><?php echo $r['name']; ?></option>
                <?php }?>
</select>
  </div>
  <br>
    <div class="form-group">
    <label for="email">Email address</label>
    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name ="emailaddress">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small name="email">
  </div>
   <br>

    <div class="form-group">
    <label for="Password">Password</label>
    <input type="Password" class="form-control" id="Password" aria-describedby="Password" name ="Password" onkeyup='checklen();' required>
    <small id="Password" class="form-text text-muted">We'll never share your Password with anyone else.</small name="Password">
  </div>
   <br>

  <div class="form-group">
    <label for="phone">Contact Number</label>
    <input type="text" class="form-control" id="contactnumber" aria-describedby="phoneHelp" name = "contactnumber">
    <small id="phoneHelp" class="form-text text-muted">We'll never share your number with anyone else.</small name="phone">
  </div>
  <br>
   <div class="d-grid gap-2">
  <button type="submit" name="submit" class="btn btn-info btn-block"  onclick="return checklen();" >Submit</button>
  </div>
 
</form>
<br>
<br>
<br>
<br>
<br>

    <?php require_once 'includes/footer.php';?>
