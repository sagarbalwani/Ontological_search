<?php
include('config.php');
session_start();
$user_check=$_SESSION['login_user'];
//echo $user_check;
$ses_sql=mysql_query("select username from admin where username='$user_check' and username <> '' ");

$row=mysql_fetch_array($ses_sql);

$login_session=$row['username'];

if(!isset($login_session))
{
header("Location: login.php");
}
?>