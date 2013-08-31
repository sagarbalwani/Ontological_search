<?php
include('lock.php');

$whichgraph=$_SESSION['whichgraph'];//tells which graph has to be updated.....
//$update=$_POST['update'];//what is to be updated Node or edge??

$from=$_POST['from'];
$to=$_POST['to'];

$fromnode=$_POST['fromnode'];
$tonode=$_POST['tonode'];
//echo $whichgraph.$from . $to . $fromnode . $tonode;
//echo "entered edge";
$sql="select * from entity where flag=2 and name='$to'";
$result=mysql_query($sql);
if (!$result) {
	$_SESSION['errenamerelationgraph']="something went wrong";
	echo 'MySQL Error: ' . mysql_error();
}
else{
	$flag=0;//tells whether the edge is in dictionary or not
	while ($row = mysql_fetch_row($result)) 
		{
			echo "trying to find";
//			$flag=0;
			if($row[0]==$to)
				{
					echo "found";
					$flag=1;
					$sql2="update $whichgraph set relation='$to' where relation='$from' and entity1='$fromnode' and entity2='$tonode' ";
					$result2=mysql_query($sql2);
					if(!$result2)
						{
							$_SESSION['errenamerelationgraph']="something went wrong";
							echo "could not update for unknow reason" . mysql_error();
						}
					else	
						{
							if(mysql_affected_rows()==0)
								{
									$_SESSION['errenamerelationgraph']="no such pair of nodes/edge exists";
									echo "asj";	
								}
							else
								{	
									$_SESSION['errenamerelationgraph']="";
									echo " graph is update ... name of node is changed ";
			 				        }
						 }
				}
			if($flag==1)
				{
					break;
				}	
		}
	if($flag==0){
		$_SESSION['errenamerelationgraph']="cannot update edge not in dictionary";
		echo " cannot update as relationship (or edge) not in dictionary... ";
	}

}
header("Location: renamegraph.php");
?>
