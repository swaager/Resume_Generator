<?php
	
	if(isset($_POST['submit']))
	{
require('fpdf/fpdf.php');
	$name  =$_POST['username'];
	$email      =$_POST['email'];
	$contact    =$_POST['contact'];
	$city    =$_POST['city'];
	$state   =$_POST['state'];
	$birth =$_POST['date'];
	$facebooK =$_POST['facebook'];
	$github =$_POST['github'];
	$school =$_POST['school'];
	$college =$_POST['college'];
 $photo=$_FILES['image']['name'];
    $tmp=$_FILES['image']['tmp_name'];
	$about  =$_POST['about'];
	 if(move_uploaded_file($tmp,"image/".$photo))
  {



$image="image/".$photo;
$fpdf=new FPDF();
$fpdf->AddPage();


$fpdf->setFont("Arial","I",25);
$fpdf->Cell(0,10,"Resume",0,0,"C");


$fpdf->Cell(15,40," ",0,0,"C");
 $fpdf->Cell(15,50," ",1,1,"C");
$fpdf-> Image($image,83,22,35,35);

$fpdf->setFont("Arial","B",16);
$fpdf->Cell(95,15,"Name:",1,0,"C");
$fpdf->Cell(95,15,$name,1,1,"C");

$fpdf->Cell(95,15,"Email Id:",1,0,"C");
$fpdf->Cell(95,15,$email,1,1,"C");

$fpdf->Cell(95,15,"Contact Number:",1,0,"C");
$fpdf->Cell(95,15,$contact,1,1,"C");

$fpdf->Cell(95,15,"Date of Birth:",1,0,"C");
$fpdf->Cell(95,15,$birth,1,1,"C");

$fpdf->Cell(95,15,"About Me:",1,0,"C");
$fpdf->Cell(95,15,$about,1,1,"C");


$fpdf->Cell(95,15,"School:",1,0,"C");
$fpdf->Cell(95,15,$school,1,1,"C");


$fpdf->Cell(95,15,"college:",1,0,"C");
$fpdf->Cell(95,15,$college,1,1,"C");

$fpdf->Cell(95,15,"City:",1,0,"C");
$fpdf->Cell(95,15,$city,1,1,"C");

$fpdf->Cell(95,15,"State:",1,0,"C");
$fpdf->Cell(95,15,$state,1,1,"C");


$fpdf->Cell(95,15,"Facebook:",1,0,"C");
$fpdf->Cell(95,15,$facebooK,1,1,"C");

$fpdf->Cell(95,15,"Github:",1,0,"C");
$fpdf->Cell(95,15,$github,1,1,"C");



$fpdf->output();
  }

}
?>