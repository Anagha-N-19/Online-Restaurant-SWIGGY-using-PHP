<?php
session_start();
?>
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
<h3>LOGIN</h3>
<form method="post" action="prj5.php">
<center>
<table>
<font face="Times New Roman" size="55">
<tr><td>
Enter User Id</td>
<td><input type="text" name="uid"/></td>
</tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr>
<td>Enter Password</td>
<td><input type="password" name="pwd"/></td>
</tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr><td></td><td>
<input type="submit" value="Login" name="s2"/></td>
</tr>
</font>
</table>
</center>
<center><input type="submit" value="To remove from cart" name="s8"/></center>
</form>
<?php
?>
</body>
</html>

