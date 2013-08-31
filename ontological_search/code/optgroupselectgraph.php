<!-- takes a new graph or loads graph and passes its name to page-->
<?php
include('lock.php');
$table1=$_POST['table1'];
$table2=$_POST['table2'];
echo "yyy" .$table1;
echo "xxx" .$table2;
$flag=0;
if($table1!=null)
{
	$sql="create table $table1( entity1 varchar(100) not null, relation varchar(100) not null, entity2 varchar(100) not null, foreign key(entity1) references entity(name) on delete cascade on update cascade , foreign key(entity2) references entity(name) on delete cascade on update cascade , foreign key(relation) references entity(name) on delete cascade on update cascade, primary key(entity1,relation,entity2))";
$result=mysql_query($sql);
//$count=mysql_num_rows($result);
	if(!$result)
	{
		$_SESSION['ernewgraph']="this graph already exist";
		echo "this graph already exist";
		$_SESSION['whichgraph']="";
		header("Location: graph.php");	
	}
	else
	{
		$_SESSION['ernewgraph']="";
		$_SESSION['whichgraph']=$table1;
		header("Location: editgraph.php");
	}
echo " SESSION IS" . $_SESSION['whichgraph'] ;
$_SESSION['erloadgraph']="";
}

else
{
$_SESSION['ernewgraph']="";
echo " i am in else";


//include('lock.php');
//mysql_select_db("testphp") or die("Unable");

	$sql = "SHOW TABLES FROM testphp";	
	$result = mysql_query($sql);

	if (!$result) 
	{
	$_SESSION['erloadgraph']="something went wrong";
   	 echo "DB Error, could not list tables\n";
   	 echo 'MySQL Error: ' . mysql_error();
	 header("Location: graph.php");
	}

	else
	{
		echo "no error";
		while ($row = mysql_fetch_row($result)) 
		{
			if($row[0] == $table2)
			{	
				$flag=1;
				$_SESSION['erloadgraph']="";
				$_SESSION['whichgraph']=$table2;
				header("Location: editgraph.php");				
				break;	
			}
		}
	
		if ($flag==0)
		{	$_SESSION['erloadgraph']="graph doesn't exist";
			$_SESSION['whichgraph']="";	
			echo "table doesn't exist";
			header("Location: graph.php");
		}
		
    	}
}
//header("Location: editgraph.php");
?>
