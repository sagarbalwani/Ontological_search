<?php
include('lock.php');
$uname=$_POST['uname'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$password=$_POST['rpassword'];
$cpassword=$_POST['cpassword'];
if(preg_match("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^", $email)!=1) 
{		$_SESSION['errregister']="invalid email id";
}

else if($cpassword!=$password)
{		$_SESSION['errregister']="passwords dont match";}

else
{
                $sqreg="insert into admin values ('$uname','$fname','$lname','$email','$password','p','us')";                                    
		$result=mysql_query($sqreg);
		if(!$result)
		{
			$_SESSION['errregister']="register unsucessful";
		}
		else{
		$_SESSION['errregister']="";}
}                              	
header("Location: login.php");
?>	
