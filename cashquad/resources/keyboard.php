<!DOCTYPE html>
<html  lang="en">
<head>

<meta charset="utf-8">

<title>keyboard</title>

<style media="screen">
body {
    /*background-color:#f0f0f0;*/
 }
#keyboard {
    display:inline-block;
    padding:10px 15px;
    border:1px solid #009;
    border-radius:10px;
    background-color:#87cdf9;
    text-align:center;
    box-shadow:4px 4px 4px #999;
 }
#keyboard div {
    margin:5px 0;
 }
#space {
    width:184px;
 }
#keyboard label {
    margin-top:20px;
    font-family:serif;
    text-decoration:underline;
 }
#keyboard input {
    box-shadow:2px 2px 2px #666;
 }
#keyboard input[type="text"] {
    margin-top:20px;
    border:1px solid #666;
    border-radius:4px;
    box-shadow:none;
 }
</style>

<script>
(function() {
   'use strict';
   var i,c;
function init(){ 
   i=document.getElementById('keyboard').getElementsByTagName('input');
for(c=0;c<i.length;c++) {
if(i[c].type==='button') {
   i[c].addEventListener('onclick',makeClickHandler(c));
   }
  }

document.getElementById('clear').onclick=function() {
   document.getElementById('text').value='';
  }
 }

function makeClickHandler(c) {
   i[c].onclick=function() {
   document.getElementById('text').value+=this.value.toLowerCase();
  };
 }

   window.addEventListener?
   window.addEventListener('load',init,false):
   window.attachEvent('onload',init);
})();
</script>

</head>
<body>

<div id="keyboard">
<input id="text" type="text" readonly="readonly">
<div>
<div>
 <input type="button" value="A">
 <input type="button" value="S">
 <input type="button" value="D">
 <input type="button" value="F">
 <input type="button" value="G">
 <input type="button" value="H">
 <input type="button" value="J">
 <input type="button" value="K">
 <input type="button" value="L">
</div><div>
 <input type="button" value="Z">
 <input type="button" value="X">
 <input type="button" value="C">
 <input type="button" value="V">
 <input type="button" value="B">
 <input type="button" value="N">
 <input type="button" value="M">
</div>
 <input type="button" value="0">
 <input type="button" value="1">
 <input type="button" value="2">
 <input type="button" value="3">
 <input type="button" value="4">
 <input type="button" value="5">
 <input type="button" value="6">
 <input type="button" value="7">
 <input type="button" value="8">
 <input type="button" value="9">
</div>
<div>
 <input id="space" type="button" value=" ">
 <input id="clear" type="reset" value="clear">
</div><div>
<!-- <label>Track Search</label> -  -->
</div>

</div><!-- end #keyboard -->

</body>
</html>