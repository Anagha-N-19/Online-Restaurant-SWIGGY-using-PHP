<html>
<head><b><center>LOGIN PAGE</center></b>
</head>
<body>
<?php
$un=$_POST['uid'];
$pw=$_POST['pwd'];
if(($un=="Anagha")&&($pw==19))
header("Location: p3.php");
else
header("Location: p4.php");
?>
</body>
</html>