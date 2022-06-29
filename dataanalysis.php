
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Analysis</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script type="text/javascript" src="js/instascan.min.js"></script>
    <!-- DataTables -->
    <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <style>
    #divvideo {
        box-shadow: 0px 0px 1px 1px rgba(0, 0, 0, 0.1);
    }
    #myVideo {
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
    </style>


</head>

<body style='background:white'>
<video autoplay muted loop id="myVideo">
		<source src="img/buksu.mp4" type="video/mp4">
	  </video>
    <div class="main" >
        <nav class="navbar" style="background:#eee">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#" style="color:#0D1983; font-family:Lucida Console"> <i
                            class="glyphicon glyphicon-qrcode"></i> BukSU Visitor Log Monitoring</a>
                </div>
                <ul class="nav navbar-nav">
			  <li class="active"><a href="#" style = "color:#0D1983; font-family:Courier"><span class="glyphicon glyphicon-home"></span> Home</a></li>
			  <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="adduser.php" style = "color:#0D1983; font-family:Courier"><span class="glyphicon glyphicon-user"></span> Add User<span class="caret"></span></a>
				<ul class="dropdown-menu">  
				  <li><a href="adduser.php"><span class="glyphicon glyphicon-user"style = "color:#0D1983; font-family:Courier" ></span> Add New Visitor</a></li>
				</ul>
			  </li>
			  <li><a href="#" style = "color:#0D1983; font-family:Courier"><span class="glyphicon glyphicon-signal"></span> Data Analysis</a></li>
			  <li><a href="Data.php" style = "color:#0D1983; font-family:Courier"><span class="glyphicon glyphicon-map-marker"></span> Data Log</a></li>
			  <li><a href="main.php" style = "color:#0D1983; font-family:Courier"><span class="glyphicon glyphicon-time"></span> Scan a QR-Code</a></li>
			</ul>
                
            </div>
        </nav>

    </div>
    
    <div class="tables" style="margin: 5% 5% 5% 5%">
    <iframe src="gender.php" width="33%" height="310px" style="border-radius: 15px;" ></iframe>
    <iframe src="travel.php" width="33%" height="310px" style="border-radius: 15px;" ></iframe>
    <iframe src="fever.php" width="33%" height="310px" style="border-radius: 15px;" ></iframe>
    <iframe src="cough.php" width="33%" height="310px" style="border-radius: 15px;" ></iframe>
    <iframe src="taste.php" width="33%" height="310px" style="border-radius: 15px;" ></iframe>
    <iframe src="underlying.php" width="33%" height="310px" style="border-radius: 15px;" ></iframe>
    <iframe src="probable.php" width="33%" height="310px" style="border-radius: 15px;" ></iframe>
    <iframe src="visited.php" width="33%" height="310px" style="border-radius: 15px;" ></iframe>



    </div>
    
</body>
</html>