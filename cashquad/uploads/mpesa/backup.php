<?php 
/*File originally by Yusuf Kiprop
  yusufkiprop97@gmail.com
  yusufkiprop97@hotmail.com
  Created on 23/07/2016 at Moi University Main Campus(Kenya)
*/
session_start();
include_once'dbconfig.php';
$fp = fopen("mpesa.htm", "a");
fwrite($fp, "From:$_POST[from]\tMessage_id:$_POST[message_id]\tMessage:$_POST[message]\tSent_timestamp:$_POST[sent_timestamp]\tSent_to:$_POST[sent_to]\tDevice_id:$_POST[device_id]");
$message=$_POST['message'];
$pieces=explode(" ", $message);
$id=$pieces[0];
$date=$pieces[3];
$sender=$pieces[12];
$amount=$pieces[7];
$time=$pieces[5];
//
function phone($sender){
	preg_match_all('/([\d]+)/', $amount, $you);
	return $you;
}
$sender1=extract_numbers($sender);
$phone=$sender1[0][0];
//
function extract_numbers($amount){
	preg_match_all('/([\d]+)/', $amount, $you);
	return $you;
}
$amount=$amount;
$amount1=extract_numbers($amount);
$money=$amount1[0][0];
//
$_SESSION['idd']=$id;
$_SESSION['phone']=$phone;
$_SESSION['date']=$date;
$_SESSION['time']=$time;
$_SESSION['table']=$table;
$_SESSION['money']=$money;
//
?>


