<?php
session_start();
if(empty($_SESSION['email'])){
    //array_push($errors,"You cannot access this page! please login first");
    header('location: login.php');
 }
require'php/dbh.php';
 if (isset($_SESSION['record_num'])) {
    $record_num = $_SESSION['record_num'];
      $queryfetch=mysqli_query($conn,"SELECT * FROM thematic_area_tbl WHERE record_num='$record_num' ");
            $data=mysqli_fetch_array($queryfetch);
            $tid=$data['tid'];
            $record_num=$data['record_num'];
            $thematic_area=$data['thematic_area'];
            $thematic_code=$data['thematic_code'];
 }else{
            $tid="";
            $record_num="";
            $thematic_area="";

 }

  if (isset($_SESSION['record_nu'])) {
    $record_nu = $_SESSION['record_nu'];
      $queryfetch=mysqli_query($conn,"SELECT * FROM key_intervention_tbl WHERE record_nu='$record_nu' ");
            $data=mysqli_fetch_array($queryfetch);
            $kid=$data['kid'];
            $record_nu=$data['record_nu'];
            $key_intervention=$data['key_intervention'];
           
 }else{
            $kid="";
            $record_nu="";
            $key_intervention="";

 }

 if (isset($_SESSION['record_n'])) {
    $record_n = $_SESSION['record_n'];
      $queryfetch=mysqli_query($conn,"SELECT * FROM activity_tbl WHERE record_n='$record_n' ");
            $data=mysqli_fetch_array($queryfetch);
            $aid=$data['aid'];
            $record_n=$data['record_n'];
            $activity=$data['activity'];
            $activity_code=$data['activity_code'];
           
 }else{
            $aid="";
            $record_n="";
            $activity_code="";
            $activity="";

 }


  if (isset($_SESSION['record_'])) {
    $record_ = $_SESSION['record_'];
      $queryfetch=mysqli_query($conn,"SELECT * FROM budget_tbl WHERE record_='$record_' ");
            $data=mysqli_fetch_array($queryfetch);
            $bid=$data['bid'];
            $record_=$data['record_'];
            $budget=$data['budget'];
            $budget_code=$data['budget_code'];
           
 }else{
            $bid="";
            $record_="";
            $budget_code="";
            $budget="";

 }
?>