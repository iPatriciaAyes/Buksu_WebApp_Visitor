<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select</title>

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
}
.zoom {
  transition: transform .2s; /* Animation */
  width: 300px;
  height: 200px;
  margin: 0 auto;
}

.zoom:hover {
  transform: scale(1.2); 
  }</style>
</head>
<body >
    <div style="background-color: white;padding:80px;border-radius: 15px;">
    <div class="zoom">
    <a href="index.html"><img src="img/buksu.png" alt="BUKSU LOGO" style="display: block;
	margin-left: auto;
	margin-right: auto;
	width: 70%;"></a>
  </div>
    <h1 style="color: black;">Log in or Register </h1>
     <nav class="home-nav" style="text-align:center">
     	<a href="visitor.php" >Visitor</a>
       <a href="visitor.php">Employee</a>
        <a href="start.php">Admin</a>
     </nav></div>
     
     <video autoplay muted loop id="myVideo">
		<source src="img/buksu.mp4" type="video/mp4">
	  </video>
</body>
</html>