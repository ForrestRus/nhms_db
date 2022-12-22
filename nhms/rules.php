<?php 
    $title = 'eligibility';
    require_once 'includes/header.php';
    require_once 'db/conn.php';
    

 ?>

<h1 style="border:violet; border-width:5px; border-style:solid;" class="text-center">Nursing Home Management System</h1>
 
<br>
<br>
<br>
<?php
$string=        "RULES!!!! <br><br>

* Firearms and weapons are not allowed in premises.<br><br>
* Keeping pets are not allowed in premises .<br><br>
* Non Vegetarian Food is Prohibited<br><br>
* All residents shall maintain discipline and ensure that other residents are not disturbed by any act.<br><br>
* Our minimum lock in period is six month and after six month if discharge require than minimum two month notice require for refund of security.<br><br><br><br>

RULES FOR VISITORS!!! <br><br>

* Visiting hours for the guest will be from 10am to 6pm and only identified guests are allowed inside the home.<br><br>

* Guests are not allowed to stay overnight in their residents without the permission from the management.<br><br>


In case of Emergency / Mishappening<br><br>

The management shall take steps to contact the relatives/ next of kin immediately. We will also take the necessary steps as per the protocol to control the situation in a safe and respected manner.";

//Change the font color using PHP, HTML and css through echo

echo '<span style="color:black; font-size: 20px;"> ' . $string.  ' <a href="rules.php"/>';
echo '<body style="background-color:skyblue">';
?>
<br>
<br>
<br>
<br>
<br>
<br>
<?php require_once 'includes/footer.php'; ?>