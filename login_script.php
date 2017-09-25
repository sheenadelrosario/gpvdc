<?php
include ('config.php');
$username = $_GET['un'];
$password = $_GET['pwd'];
session_start();
$sql = "select * from login where username='$username' and password='$password'";
$result = mysql_query($sql);
$count = mysql_num_rows($result);

if ($count == 1)
{
	$_SESSION['login_user']=$username;
	?>
	<script type=text/javascript>
	alert("Welcome!");
	window.location='patient_home.php';
	</script>
	<?php
}
else
{
	$_SESSION['login_msg']=1;
	?>
	<script type=text/javascript>
	alert("wrong username and password");
	window.location='login_patient.php';
	</script>
	<?php
}
?>