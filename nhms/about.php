<?php 
    $title = 'About';
    require_once 'includes/header.php';
    require_once 'db/conn.php';
    

 ?>

<h1 style="border:green; border-width:5px; border-style:solid;" class="text-center">Nursing Home Management System</h1>
 
<br>
<br>
<br>
<br>
<?php
$string=      "We care for our elders and that is why we are here to help you and your loved ones face the difficulties in going about their daily routines. The elderly of the house need constant attention and care post-surgery or during the recuperating period. You cannot stay by their side every day, and there is nowhere else they would rather be than in the comforts of their own home." ;

//Change the font color using PHP, HTML and css through echo

echo '<span style="color:green ; font-size: 30px;"> ' . $string.  ' <a href="something.php"/>';
echo '<body style="background-color:skyblue">';
?>
<br>
<br>
<br>
<br>
<?php require_once 'includes/footer.php'; ?>