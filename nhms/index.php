<html>
<body>
<div class="about-pic">
		 			<img class="img-responsive" src="images/nursing.jpg" alt="" width="80" height="90"/>
		 		</div>
</body>
</html>

<?php 
    $title = 'Index';
    require_once 'includes/header.php';
    require_once 'db/conn.php';

 ?>

<h1 style="background-color:DodgerBlue; style="border:green; border-width:5px; border-style:solid;" class="text-center">Nursing Home Management System</h1>
 
<br>
<br>
<br>
<br>
<?php
$string=      "Our Nursing home is a shelter place for senior citizen! <br>
    Home away from home which brings peace, comfort and relaxation." ;

//Change the font color using PHP, HTML and css through echo

echo '<span style="color:blue ; font-size: 30px;"> ' . $string.  ' <a href="something.php"/>';
echo '<body style="background-color:skyblue">';
?>


</form><br/><br/><br/><br><br>
<?php require_once 'includes/footer.php'; ?>