
<html>
<head>
<style>
h3{
background-color: #ffcc99;
font-size:35px;
font-family:Times new roman;
text-shadow: 2px 2px 5px #ffb366;
text-align: center;
}
</style>
</head>
<body bgcolor="#ffe6cc">
<h3>Your choice</h3>

<?php
$k=$_POST['slno'];
$s=$_POST['fname'];
$n=$_POST['no'];
$con=new mysqli("localhost","root","","restaurant");
if($con->connect_errno)
echo "Failed";


$sql="insert into rdetails values($k,'$s',$n);";
$res=$con->query($sql);


echo "<br><br> Your cart has: <br>";
$sql="select * from rdetails;";
$res=$con->query($sql);
while($row=$res->fetch_assoc()){
 echo "<br>"."Item Name :".$row['fname']."    Number of packets :".$row['no'];}


?>
<form method="post" action="prj7.php">
<br>


<br>


<input type="submit" value="Proceed" name="s5"/>
</form>
</body>
</html>

