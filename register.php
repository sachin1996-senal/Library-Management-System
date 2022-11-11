<?php
include("setting.php");
$name=$_POST['name'];
$email=$_POST['email'];
$year=$_POST['year'];
$departement=$_POST['departement'];
$sid=$_POST['sid'];
$pas=sha1($_POST['pass']);
if($name==NULL || $email==NULL || $year==NULL || $departement==NULL || $sid==NULL || $_POST['pass']==NULL)
{
	//
}
else
{
	$sql=mysqli_query($set,"INSERT INTO students(sid,name,departement,year,password,email) VALUES('$sid','$name','$departement','$year','$pas','$email')");
	if($sql)
	{
		$msg="Successfully Registered";
	}
	else
	{
		$msg="User Already Exists";
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Library Management System</title>
<link href="stylesheet.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="banner">
<span class="head">Library Management System</span><br />
<marquee class="clg" direction="right" behavior="alternate" scrollamount="1">University Of Sabaragamuwa</marquee>
<marquee class="clg" direction="left" behavior="alternate" scrollamount="1">Faculty Of Applied sciences</marquee>
</div>
<br />

<div align="center">
<div id="wrapper">
<br />
<br />

<span class="SubHead">Student Registration</span>
<br />
<br />
<form method="post" action="">
<table border="0" cellpadding="4" cellspacing="4" class="table">
<tr><td colspan="2" align="center" class="msg"><?php echo $msg;?></td></tr>
<tr><td class="labels">Name : </td><td><input type="text" name="name" class="fields" placeholder="Enter Full name" required="required" size="25" /></td></tr>
<tr><td class="labels">Email ID : </td><td><input type="email" name="email" class="fields" placeholder="Enter Email ID" required="required" size="25" /></td></tr>
<tr><td class="labels">year : </td>
<td>
<select name="year" class="fields" required>
<option value="" disabled="disabled" selected="selected">- - Select year - -</option>
<option value="1">First year</option>
<option value="2">Second year</option>
<option value="3">Third year</option>
<option value="4">Fourth year</option>
</select>
</td></tr>

<tr><td class="labels">departement: </td>
<td>
<select name="departement" class="fields" required>
<option value="" disabled="disabled" selected="selected">- - Select departement - -</option>
<option value="Computing and Information System">Computing and Information System</option>
<option value="Natural Resources">Natural Resources</option>
<option value="Food Science And Technology ">Food Science And Technology</option>
<option value="Physical Science Technology">Physical Science Technology</option>
<option value="Sport Science">Sport Science</option>
</select>
</td></tr>
<tr><td class="labels">Student ID : </td><td><input type="text" name="sid" class="fields" placeholder="Enter Student ID" required="required" size="25" /></td></tr>
<tr><td class="labels">Password : </td><td><input type="password" name="pass" class="fields" placeholder="Enter Password" required="required" size="25" /></td></tr>
<tr><td colspan="2" align="center"><input type="submit" value="Register" class="fields" /></td></tr>
</table>
</form><br />
<br />
<a href="index.php" class="link">Go Back</a>
<br />
<br />

</div>
</div>
</body>
</html>