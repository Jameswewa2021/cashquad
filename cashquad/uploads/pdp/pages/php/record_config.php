<?php

include('dbh.php'); 
$target="files/";
$_SESSION['success']="";
$_SESSION['empty']="";


if (isset($_POST['save_thematic'])) {
 	$thematic_area = $_POST['thematic_area'];
 	$thematic_code ="1.1.";


 	 $a = mt_rand(100000000,999999999);
 	 $b="#";
 	 $record_num = $b.$a;
	$query_order_num = "SELECT * FROM thematic_area_tbl WHERE record_num='$record_num'";
	$result_order_num=mysqli_query($conn, $query_order_num);

	while (mysqli_num_rows($result_order_num) ==1) {

		$query_order_num = "SELECT * FROM thematic_area_tbl WHERE record_num='$record_num'";
		$result_order_num=mysqli_query($conn, $query_order_num);
		$a = mt_rand(100000000,999999999);
		$b ="#";
		$record_num = $b.$a;
		}
 	

 	if (empty($thematic_area)) {
 		$_SESSION['empty'] = "Provide Thematic area";
 		
 	}else{

 		$sql="INSERT INTO thematic_area_tbl (record_num,thematic_code,thematic_area) VALUES 
	    ('$record_num','$thematic_code','$thematic_area')";
	    $query=mysqli_query($conn,$sql);

		if($query) {

			  $queryfetch=mysqli_query($conn,"SELECT * FROM thematic_area_tbl WHERE record_num='$record_num' ");
    		$data=mysqli_fetch_array($queryfetch);
    		$tid=$data['tid'];
    		$record_num=$data['record_num'];
    		$thematic_area=$data['thematic_area'];


	     	$_SESSION['record_num'] = $record_num;
	     	$_SESSION['thematic_area'] = $thematic_area;

			$_SESSION['success'] = "REGISTERED SUCCESSFULLY";
			header('location:page_1.php');
  		  }
   			 else{
       		 $_SESSION['empty'] = "ERROR OCCURED";
   			 }
 	}

 	
	
}



//PAGE 1
if (isset($_POST['add_key_intervention'])) {
	$record_num = $_POST['record_num'];
 	$key_intervention = $_POST['key_intervention'];

 	$a = mt_rand(100000000,999999999);
 	 $b="#k";
 	 $record_nu = $b.$a;
	$query_order_num = "SELECT * FROM key_intervention_tbl WHERE record_nu='$record_nu'";
	$result_order_num=mysqli_query($conn, $query_order_num);

	while (mysqli_num_rows($result_order_num) ==1) {

		$query_order_num = "SELECT * FROM key_intervention_tbl WHERE record_nu='$record_nu'";
		$result_order_num=mysqli_query($conn, $query_order_num);
		$a = mt_rand(100000000,999999999);
		$b ="#k";
		$record_nu = $b.$a;
		}
 	

 	

 	if (empty($key_intervention)) {
 		$_SESSION['empty'] = "Provide key intervention";
 		
 	}else{

 		$sql="INSERT INTO key_intervention_tbl (record_nu,record_num,key_intervention) VALUES 
	    ('$record_nu','$record_num','$key_intervention')";
	    $query=mysqli_query($conn,$sql);

		if($query) {

			  $queryfetch=mysqli_query($conn,"SELECT * FROM key_intervention_tbl WHERE record_nu='$record_nu' ");
    		$data=mysqli_fetch_array($queryfetch);
    		$kid=$data['kid'];
    		$record_nu=$data['record_nu'];
    		$key_intervention=$data['key_intervention'];


	     	$_SESSION['record_nu'] = $record_nu;
	     	$_SESSION['key_intervention'] = $key_intervention;

			$_SESSION['success'] = "REGISTERED SUCCESSFULLY";
			header('location:page_2.php');
  		  }
   			 else{
       		 $_SESSION['empty'] = "ERROR OCCURED";
   			 }
 	}

 	
	
}



//page 2
if (isset($_POST['add_activity'])) {
	$record_num = $_POST['record_num'];
	$record_nu = $_POST['record_nu'];
 	$activity = $_POST['activity'];
 	$activity_code = "1.1.1.";

 	$a = mt_rand(100000000,999999999);
 	 $b="#ka";
 	 $record_n = $b.$a;
	$query_order_num = "SELECT * FROM activity_tbl WHERE record_n='$record_n'";
	$result_order_num=mysqli_query($conn, $query_order_num);

	while (mysqli_num_rows($result_order_num) ==1) {

		$query_order_num = "SELECT * FROM activity_tbl WHERE record_n='$record_n'";
		$result_order_num=mysqli_query($conn, $query_order_num);
		$a = mt_rand(100000000,999999999);
		$b ="#ka";
		$record_n = $b.$a;
		}
 	

 	

 	if (empty($activity)) {
 		$_SESSION['empty'] = "Provide Activity";
 		
 	}else{

 		$sql="INSERT INTO activity_tbl (record_n,record_nu,record_num,activity_code,activity) VALUES 
	    ('$record_n','$record_nu','$record_num','$activity_code','$activity')";
	    $query=mysqli_query($conn,$sql);

		if($query) {

			  $queryfetch=mysqli_query($conn,"SELECT * FROM activity_tbl WHERE record_n='$record_n' ");
    		$data=mysqli_fetch_array($queryfetch);
    		$aid=$data['aid'];
    		$record_n=$data['record_n'];
    		$activity=$data['activity'];


	     	$_SESSION['record_n'] = $record_n;
	     	$_SESSION['activity'] = $activity;

			$_SESSION['success'] = "REGISTERED SUCCESSFULLY";
			header('location:page_3.php');
  		  }
   			 else{
       		 $_SESSION['empty'] = "ERROR OCCURED";
   			 }
 	}

 	
	
}



//page 3
if (isset($_POST['add_budget'])) {
	$record_num = $_POST['record_num'];
	$record_nu = $_POST['record_nu'];
	$record_n = $_POST['record_n'];
 	$budget = $_POST['budget'];
 	$budget_code = "1.1.1.1.";
 	$pu = $_POST['pu'];
 	$no_days = $_POST['no_days'];
 	$cpu = $_POST['cpu'];
 	$fpq = $_POST['fpq'];

 	$a = mt_rand(100000000,999999999);
 	 $b="#kab";
 	 $record_ = $b.$a;
	$query_order_num = "SELECT * FROM budget_tbl WHERE record_='$record_'";
	$result_order_num=mysqli_query($conn, $query_order_num);

	while (mysqli_num_rows($result_order_num) ==1) {

		$query_order_num = "SELECT * FROM budget_tbl WHERE record_='$record_'";
		$result_order_num=mysqli_query($conn, $query_order_num);
		$a = mt_rand(100000000,999999999);
		$b ="#kab";
		$record_ = $b.$a;
		}
 	

 	

 	if (empty($budget)) {
 		$_SESSION['empty'] = "Provide A Budget";
 		
 	}else{

 		$sql="INSERT INTO budget_tbl (record_,record_n,record_nu,record_num,budget_code,budget,pax_unit,number_of_days,cost_per_unit,frequency_per_quater) VALUES 
	    ('$record_','$record_n','$record_nu','$record_num','$budget_code','$budget','$pu','$no_days','$cpu','$fpq')";
	    $query=mysqli_query($conn,$sql);

		if($query) {

			  $queryfetch=mysqli_query($conn,"SELECT * FROM budget_tbl WHERE record_='$record_' ");
    		$data=mysqli_fetch_array($queryfetch);
    		$bid=$data['bid'];
    		$record_=$data['record_'];
    		$budget=$data['budget'];


	     	$_SESSION['record_'] = $record_;
	     	$_SESSION['budget'] = $budget;

			$_SESSION['success'] = "REGISTERED SUCCESSFULLY";
			header('location:page_4.php');
  		  }
   			 else{
       		 $_SESSION['empty'] = "ERROR OCCURED";
   			 }
 	}

 	
	
}



//page 4
if (isset($_POST['add_q'])) {
	$record_num = $_POST['record_num'];
	$record_nu = $_POST['record_nu'];
	$record_n = $_POST['record_n'];
	$record_ = $_POST['record_'];
	$q_type = $_POST['q_type'];
	$bid = $_POST['bid'];
 	$usd = $_POST['usd'];
 	$ksh = $_POST['ksh'];
 	
 	

 	

 	if (empty($q_type)) {
 		$_SESSION['empty'] = "Provide A Quater";
 		
 	}else{

 		$sql="INSERT INTO quater_tbl (record_n,bid,q_type,usd,ksh) VALUES 
	    ('$record_n','$bid','$q_type','$usd','$ksh')";
	    $query=mysqli_query($conn,$sql);

		if($query) {

			  $queryfetch=mysqli_query($conn,"SELECT * FROM budget_tbl WHERE record_='$record_' ");
    		$data=mysqli_fetch_array($queryfetch);
    		$bid=$data['bid'];
    		$record_=$data['record_'];
    		$budget=$data['budget'];


	     	$_SESSION['record_'] = $record_;
	     	$_SESSION['budget'] = $budget;

			$_SESSION['success'] = "Record Added Successfully";
			header('location:page_4.php');
  		  }
   			 else{
       		 $_SESSION['empty'] = "ERROR OCCURED";
   			 }
 	}

 	
	
}






?>