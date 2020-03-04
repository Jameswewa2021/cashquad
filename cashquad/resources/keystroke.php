<!DOCTYPE html>
<html>
<head>
	<title></title>
  <script src="../js/jquery-3.3.1.min.js"></script>
</head>
<body>

<iframe src="https://www.brokenbrowser.com/" id="ifr"></iframe>

<script type="text/javascript">
window.focus();
window.addEventListener('blur', function(e){
  if(document.activeElement == document.getElementById('ifr'))
   {
    alert('iframe click!');
   }
});
</script>

</body>
</html>