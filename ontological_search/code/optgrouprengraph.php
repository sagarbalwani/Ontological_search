<?php
include('lock.php');

$whichgraph=$_SESSION['whichgraph'];//tells which graph has to be updated.....
$update=$_POST['update'];//what is to be updated Node or edge??

$from=$_POST['from'];
$to=$_POST['to'];

$fromnode=$_POST['fromnode'];
$tonode=$_POST['tonode'];
echo "entered";

if($update=='node'){
	$sql3="select * from entity where flag <> 2";
	$result3=mysql_query($sql3);
	if (!$result3) {
		echo 'MySQL Error: ' . mysql_error();
	}
	else{
		$flag=0;
		while ($row = mysql_fetch_row($result3)) {
			if($row[0]==$to){
				$flag=1;
				break;
			}
		}
		if($flag==0){
			echo "node not in dictionary";
		}
		else if($flag==1){
			$sql6="select * from $whichgraph where entity1='$to' or entity2='$to' ";
			$result6=mysql_query($sql6);
			if(!$result6){
				echo "something went wrong" . mysql_error();
			}
			else{
				$count=mysql_num_rows($result6);
				echo "count is ".$count;
			}
			if($count!=0){
				echo "cannot change since node already exists in graph....";
			}
			else{
				$sql4="select * from $whichgraph where entity1='$from' or entity2='$from' ";
				$result4=mysql_query($sql4);

				if(!$result4){
					echo "something went wrong" . mysql_error();
				}
				else{
					echo "right here too";
					while($row= mysql_fetch_row($result4)){
						if($row[0]==$from){
							echo "entered to change";
							$sql5="update $whichgraph set entity1='$to' where entity1='$row[0]' and entity2='$row[2]' and relation='$row[1]' ";
							$result5=mysql_query($sql5);
							if(!$result5){
								echo "error : " . mysql_error();
							}
							else{
								echo "updated";
							}

						}
						if($row[2]==$from){
							echo "entered to change";
							$sql5="update $whichgraph set entity2='$to' where entity1='$row[0]' and entity2='$row[2]' and relation='$row[1]' ";
							$result5=mysql_query($sql5);
							if(!$result5){
								echo "error : " . mysql_error();
							}
							else{
								echo "updated";
							}

						}		
					}
				}
			}
		}
	}
}

else if($update=='edge'){
	echo "entered edge";
	$sql="select * from entity where flag=2";
	$result=mysql_query($sql);
	if (!$result) {
		echo 'MySQL Error: ' . mysql_error();
	}
	else{
		$flag=0;//tells whether the edge is in dictionary or not
		while ($row = mysql_fetch_row($result)) {
			echo "trying to find";
			if($row[0]==$to){
				echo "found";
				$flag=1;
				$sql2="update $whichgraph set relation='$to' where relation='$from' and entity1='$fromnode' and entity2='$tonode' ";
				$result2=mysql_query($sql2);
				if(!$result2){
					echo "could not update for unknow reason" . mysql_error();
				}
				else{
					echo " graph is update ... name of node is changed ";
				}
			}
			if($flag==1){
				break;
			}	
		}
		if($flag==0){
			echo " cannot update as relationship (or edge) not in dictionary... ";
		}

	}
}
//header("Location: .php");
?>
