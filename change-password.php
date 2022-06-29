<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Change Password</title>
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
		  <div >
    <form action="change-p.php" method="post">
	<img src="img/buksu.png" alt="BUKSU LOGO" style="display: block;
	margin-left: auto;
	margin-right: auto;
	width: 15%;">
     	<h2>Change Password</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

     	<?php if (isset($_GET['success'])) { ?>
            <p class="success"><?php echo $_GET['success']; ?></p>
        <?php } ?>

     	<label>Old Password</label>
     	<input type="password" 
     	       name="op" 
     	       placeholder="Old Password">
     	       <br>

     	<label>New Password</label>
     	<input type="password" 
     	       name="np" 
     	       placeholder="New Password">
     	       <br>

     	<label>Confirm New Password</label>
     	<input type="password" 
     	       name="c_np" 
     	       placeholder="Confirm New Password">
     	       <br>

     	<button type="submit">CHANGE</button>
          <a href="home.php" class="ca">Cancel</a>
     </form>
</body>
</html>

<?php 
}else{
     header("Location: start.php");
     exit();
}
 ?>