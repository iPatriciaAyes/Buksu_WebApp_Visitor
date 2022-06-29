<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
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
     <form action="login.php" method="post">
	 <img src="img/buksu.png" alt="BUKSU LOGO" style="display: block;
	margin-left: auto;
	margin-right: auto;
	width: 30%;">
     	<h2>Login as Admin</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>User Name</label>
     	<input type="text" name="uname" placeholder="User Name"><br>

     	<label>Password</label>
     	<input type="password" name="password" placeholder="Password"><br>

     	<button type="submit">Login</button>
		 <a href="select.php" class="ca">Return</a>
          
		  
     </form>
</body>
</html>