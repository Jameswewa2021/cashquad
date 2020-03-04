<?php
include('dbh.php'); 
//Deleting customer file
if(isset($_GET['kid']))
{
	
     $kid=$_GET['kid'];
	
	 $sql="DELETE FROM key_intervention_tbl WHERE kid='$kid'";
	
      if ($conn->query($sql) === TRUE) {
  
      	echo "success";
		} else {
		  
			echo "error";
		}
}



//Deleting order
if(isset($_GET['aid']))
{
	
     $aid=$_GET['aid'];
	
	 $sql="DELETE FROM activity_tbl WHERE aid='$aid'";
	
      if ($conn->query($sql) === TRUE) {
  
      	echo "success";
		} else {
		  
			echo "error";
		}
}


//Deleting order
if(isset($_GET['bid']))
{
	
     $bid=$_GET['bid'];
	
	 $sql="DELETE FROM budget_tbl WHERE bid='$bid'";
	
      if ($conn->query($sql) === TRUE) {
  
      	echo "success";
		} else {
		  
			echo "error";
		}
}



//Deleting order
if(isset($_GET['qid']))
{
	
     $qid=$_GET['qid'];
	
	 $sql="DELETE FROM quater_tbl WHERE qid='$qid'";
	
      if ($conn->query($sql) === TRUE) {
  
      	echo "success";
		} else {
		  
			echo "error";
		}
}



?>