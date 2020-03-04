<?php 
/*File originally by Yusuf Kiprop
  yusufkiprop97@gmail.com
  yusufkiprop97@hotmail.com
  Created on 23/07/2016 at Moi University Main Campus(Kenya)
*/
$fp = fopen("mpesa1.htm", "a");//CREATE FILE TO STORE ALL INCOMING MESSAGES
fwrite($fp, "$_POST[message]\t<br>");//ADD INCOMING MESSAGE TO THE FILE
$message=$_POST['message'];
$pieces=explode(" ", $message);//EXPLODE MESSAGE TO SINGLE OUT VALUES (Array values depends on the mpesa message type whether private/paybill/buy goods)
$id=$pieces[0];
$date=$pieces[3];
$sender=$pieces[12];
$amount=$pieces[7];
$time=$pieces[5];
//
function phone($sender){//THIS FUNCTION EXTRACTS PHONE NUMBER FROM THE FULL STOP AT THE END OF THE MPESA MESSAGE (254724206400.)
	preg_match_all('/([\d]+)/', $amount, $you);
	return $you;
}
$sender1=extract_numbers($sender);
$phone=$sender1[0][0];
//
function extract_numbers($amount){//THIS FUNCTION EXTRACTS VALUE OF MONEY FROM (Ksh20.00)
	preg_match_all('/([\d]+)/', $amount, $you);
	return $you;
}
$from=$_POST['from'];
$amount=$amount;
$amount1=extract_numbers($amount);
$money=$amount1[0][0];
if ($from=='MPESA' && $money>='20') {//SET THE VALUE ACCORDING TO YOUR PRICE PLANS IN THIS CASE (kSH 20) IS MY PLAN.
	//
if(!file_exists("payment")){
		mkdir("payment",0777,true);
	}
$fp = fopen("payment/$phone.htm", "a");
fwrite($fp, "$id|$phone|$date|$time|$money<br>");
//
}
?>

