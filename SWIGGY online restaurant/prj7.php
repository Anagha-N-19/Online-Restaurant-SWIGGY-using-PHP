<html>
<head>
</head>
<body bgcolor="#ffe6cc">
<br><br><br><br>
<form method="post" action="prj1.php">

<?php

$con=new mysqli("localhost","root","","restaurant");
if($con->connect_errno)
echo "Failed";
else
echo "<center>Your order has been recorded.<br>The food will be delivered soon.</center>";


?>
<br><br><br><br><br>
<center><font size="30" color="#ff4d4d">Thank You</font></center>
<br><br><br><br><br>
<center><input type="submit" value="Back to homepage"/></center>
</form>
</body>
</html>