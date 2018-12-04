<?php
	if(isset($_POST['demo']))
	{	
		$name=$_POST['name'];
		$fname=$_POST['fname'];
		header("location:card.php?name=".$name."&fname=".$fname);
	}
if(isset($_POST['sbt']))
{
 $url = "http://www.vinitshahdeo.com/projects/HappyNewYear/index.php?msg=".urlencode($_POST['name']);    
 $to =$_POST['femail'];
 $subject = $_POST['name']." has sent you an
 eCard!";
 $name=$_POST['name'];
 $fname=$_POST['fname'];
 $link= "card.php?name=.$name&fname=$fname";
 $body = "Please click on this link to view your card: ".$url;
 if (mail($to, $subject, $body)) {
 echo "<script>alert('E-card sent successfully')</script>";
 } else {
 echo "<h1 style='color:red'>Kindly copy the link <a href='$link'>$link</a> and send to your loved ones!</h1>";
 }
}
if(isset($_POST['sbt']))
{
 $name=$_POST['name'];
 $fname=$_POST['fname'];
 $link= "http://www.vinitshahdeo.com/projects/HappyNewYear/card.php?name=$name&fname=$fname";
 echo "<center>";
 echo "<h1 style='color:#a61715;font-family:verdana'>Kindly copy the link and send to your loved ones!</h1>";
 echo "<h3 style='color:#1BC8C5; font-family:arial'><a href='$link'>$link</a></h3>";
 echo "</center>";
}
?>