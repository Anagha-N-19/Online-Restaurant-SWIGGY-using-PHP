<html>
<body bgcolor="#ffe6cc">
<form method="post">
<?php


$con=new mysqli("localhost","root","","restaurant");
$serial=$_POST['fno'];
if($con->connect_errno)
echo "Failed";
$sql="delete from rdetails where slno='$serial';";
$result=$con->query($sql);
echo "Deleted the item";

?>


</form>
</body>
</html>
