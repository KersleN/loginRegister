<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Google Project</title>
</head>
<body background="goat.jpg">

	<a style="color:red" href="logout.php">Logout</a>
	<h1 style="color:red">Testing Maps</h1>
	<?php 
	print"<font color='red'>Welcome " . $_SESSION['username'].""
	?>
<br>
<iframe src="https://www.google.com/maps/d/embed?mid=1ZsFTe7nnNZ9UVlrNJvAsMMuSNRbQEqnt&ehbc=2E312F" style="position:relative;left:500px"; width="640" height="480"></iframe>

</body>
</html>