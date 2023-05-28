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
#cr{

font-size:15px;
}
</style>
</head>
<body bgcolor="#ffe6cc">
<h3>OUR SPECIALS</h3>
<form method="post" action="prj4.php">
<center>

<font face="Times New Roman">
Enter serial no
<input type="number" value="slno" name="slno"/>
<br><br><br>
Today's Specials
<select name="fname" id="cr">
					<option value="" selected>--- Hungry? ---</option>
					<option value="CB">CB</option>
					<option value="VB">VB</option>
					<option value="Paneer">Paneer</option>
				</select>
<br><br><br><br>
<br><br><br>

Enter no of packets
<input type="number" value="no" name="no"/>
<br><br><br>

<input type="submit" value="Proceed" name="s3"/>

</font>
</center>
</form>
<?php
?>
</body>
</html>

