<?php
include('lock.php');
$name=$_POST['name'];
$act=$_POST['act'];
$flag=$_POST['flag'];
echo $flag;
echo $name;
echo $act;
$sql="update admin set status='$act',flag='$flag' where username='$name'";
$result=mysql_query($sql);
if(!$result)
{echo "hi";}
header("Location: admin2.php");
?>

