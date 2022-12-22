<?php 
    $title = 'Eligibility';
    require_once 'includes/header.php';
    require_once 'db/conn.php';
    

 ?>

<h1 style="background-color:red; style="border:green; border-width:5px; border-style:solid;" class="text-center">Nursing Home Management System</h1>
 
<br>
<br>
<br>
<br>
<?php
$string=        "ELIGIBILITY FOR PATIENTS <br>
                *Minimum Age Required is 50 years.<br>
                *Person should not be suffering from any infectious disease.<br>
                *The Person should be free from addiction of any kind. " ;

//Change the font color using PHP, HTML and css through echo

echo '<span style="color:red; font-size: 35px;"> ' . $string.  ' <a href="something.php"/>';
echo '<body style="background-color:skyblue">';
?>

<?php require_once 'includes/footer.php'; ?>