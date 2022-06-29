<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="style.css">
     <style>#myVideo {
			width: 100vw;
  height: 100vh;
  object-fit: cover;
  position: fixed;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
  z-index: -1;
  filter: blur(4px);
  -webkit-filter: blur(4px);
}</style>
</head>
<body style="background-color: #2101d3">
<video autoplay muted loop id="myVideo">
		     <source src="img/buksu.mp4" type="video/mp4">
	      </video>
           <div style="background-color:white;padding: 40px;border-radius:15px"><img src="img/buksu.png" alt="BUKSU LOGO" style="display: block;
	margin-left: auto;
	margin-right: auto;
	width: 15%;">
     <h1 style="color:black;">Hello, <?php echo $_SESSION['name']; ?></h1>
     <nav class="home-nav">
     	
        <a href="logout.php">Logout</a>
        <a href="change-password.php">Change Password</a>
        <a href="signup.php" >Create a new Admin</a>
        <a href="main.php">Visitor Monitoring</a>
     </nav>
     
</body>
</html>

<?php 
}else{
     header("Location: start.php");
     exit();
}
 ?>