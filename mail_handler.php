<?php
if(isset($_POST['submit'])){
	$firstname=$_POST['firstname'];
	$lname=$_POST['lname'];
	$strt1=$_POST['strt1'];
	$strt2=$_POST['strt2'];
	$city=$_POST['city'];
	$state=$_POST['state'];
	$postalcode=$_POST['postalcode'];
	$country=$_POST['country'];
	$areaCode=$_POST['areaCode'];
	$phNumber=$_POST['phNumber'];
	$areaofinterest=$_POST['areaofinterest'];
	$skills=$_POST['skills'];

	$to= 'katif3029@gmail.com';
	$subject= 'Form Submission';
	$message= " Submit a Resume "."\n"."First Name : ".$firstname."\n"."Last Name : ".$lastname."\n"."Street Adress 1 : ".$strt1."\n"."Street Adress 2 : ".$strt2."\n"."City : ".$city."\n"."Province/State : ".$state."\n"."Postal Code : ".$postalcode."\n"."Country : ".$country."\n"."Area Code : ".$areaCode."\n"."Phone Number : ".$phNumber."\n"."Area of Interest : ".$areaofinterest."\n"."Skills : ".$skills;
	$headers= "From : ".$email;

	if(mail($to, $subject, $message, $headers)){
		echo "<h1>Sent Sunccessfully! Thank You"." ".$firstname.",  Your response has been submitted. We will contact you shortly!</h1>";
	}

	else
	{
		echo "Something went wrong!!";
	}


}
?>