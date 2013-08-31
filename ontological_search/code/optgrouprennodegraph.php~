<?php
include('lock.php');

$whichgraph=$_SESSION['whichgraph'];//tells which graph has to be updated.....
$from=$_POST['from'];
$to=$_POST['to'];


$sql3="select * from entity where flag <> 2";
$result3=mysql_query($sql3);
if (!$result3) {
	$_SESSION['errenamenodegraph']="something went wrong";
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
		$_SESSION['errenamenodegraph']="to node not in dictionary";
		echo "node not in dictionary";
	}
	else if($flag==1){
		$sql6="select * from $whichgraph where entity1='$to' or entity2='$to' ";
		$result6=mysql_query($sql6);
		if(!$result6){
			$_SESSION['errenamenodegraph']="something went wrong";
			echo "something went wrong" . mysql_error();
		}
		else{
			$count=mysql_num_rows($result6);
			echo "count is ".$count;
		}
		if($count!=0){
			$_SESSION['errenamenodegraph']="to node already in graph";
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
						$_SESSION['errenamenodegraph']="something went wrong";
							echo "error : " . mysql_error();
						}
						else{
						$_SESSION['errenamenodegraph']="";
							echo "updated";
						}

					}
					if($row[2]==$from){
						echo "entered to change";
						$sql5="update $whichgraph set entity2='$to' where entity1='$row[0]' and entity2='$row[2]' and relation='$row[1]' ";
						$result5=mysql_query($sql5);
						if(!$result5){$_SESSION['errenamenodegraph']="something went wrong";
							echo "error : " . mysql_error();
						}
						else{
						$_SESSION['errenamenodegraph']="";
							echo "updated";
						}

					}		
				}
			}
		}
	}
}
header("Location: renamegraph.php");
?>
