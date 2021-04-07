<?php 
session_start();
	$_SESSION["username"] = "";
	
	//header("location: login.php");
	header("Location:index.php");
	session_destroy();
?>
<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <title>Logout</title>
  <script type="text/javascript">
  window.history.forward();
	function noback()
	{
		window.history.forward();
	}
  
  </script>
 </head>
 <body>
  
 </body>
</html>