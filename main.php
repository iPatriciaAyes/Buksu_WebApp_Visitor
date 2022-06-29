<?php session_start();?>
<html>
    <head>
	  <meta charset="utf-8">
	  <meta http-equiv="X-UA-Compatible" content="IE=edge">
	  <title>QR Code | Log in</title>
	  <!-- Tell the browser to be responsive to screen width -->
	  <meta name="viewport" content="width=device-width, initial-scale=1">

		<script type="text/javascript" src="js/instascan.min.js"></script>
		<!-- DataTables -->
		<link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
		<link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link href="/css/bootstrap.icon-large.min.css" rel="stylesheet">
		<style>
		#divvideo{
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
    <body style='background:#0D1983'>
	
        <nav class="navbar" style="background:#eee">
		  <div class="container-fluid">
			<div class="navbar-header">
			  <a class="navbar-brand" href="#" style = "color:#0D1983; font-family:Lucida Console"style = "color:white"> <i class="glyphicon glyphicon-qrcode"></i>  BukSU Visitor Log Monitoring</a>
			</div>
		<ul class="nav navbar-nav">
			  <li class="active"><a href="#" style = "color:#0D1983; font-family:Courier"><span class="glyphicon glyphicon-home"></span> Home</a></li>
			  <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#" style = "color:#0D1983; font-family:Courier"><span class="glyphicon glyphicon-user"></span> Add User <span class="caret"></span></a>
				<ul class="dropdown-menu">  
				  <li><a href="adduser.php"><span class="glyphicon glyphicon-user"style = "color:#0D1983; font-family:Courier" ></span> Add New Visitor</a></li>
				</ul>
			  </li>


			  <li><a href="dataanalysis.php" style = "color:#0D1983; font-family:Courier"><span class="glyphicon glyphicon-signal"></span> Data Analysis</a></li>

			  


			  

			  <li><a href="Data.php" style = "color:#0D1983; font-family:Courier"><span class="glyphicon glyphicon-map-marker"></span> Data Log</a></li>
			  <li><a href="#" style = "color:#0D1983; font-family:Courier"><span class="glyphicon glyphicon-time"></span> Scan a QR-Code</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
                    <!--<li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>-->
                    <li><a href="index.html" style="color:#0D1983;font-family:Courier "><span class=" glyphicon
                            glyphicon-log-in"></span> Log Out</a></li>
                </ul>
		  </div>
		</nav>
		
       <div class="container">
		   
            <div class="row">
				
                <div class="col-md-4" style="padding:10px;background:#fff;border-radius: 5px;" id="divvideo">
					<p class="login-box-msg"> </p></center>
					
                    <video id="preview" width="100%" height="50%" style="border-radius:10px;"></video>
					
					<br>
					
					<br>
					
					<?php
					if(isset($_SESSION['error'])){
					  echo "
						<div class='alert alert-danger alert-dismissible' style='background:red;color:#fff'>
						  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
						  <h4><i class='icon fa fa-warning'></i> Error!</h4>
						  ".$_SESSION['error']."
						</div>
					  ";
					  unset($_SESSION['error']);
					}
					if(isset($_SESSION['success'])){
					  echo "
						<div class='alert alert-success alert-dismissible' style='background:green;color:#fff'>
						  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
						  <h4><i class='icon fa fa-check'></i> Success!</h4>
						  ".$_SESSION['success']."
						</div>
					  ";
					  unset($_SESSION['success']);
					  
					}
				  ?>
					<img src="img/buksu.png" alt="BUKSU LOGO" style="display: block;margin-left:auto;margin-right:auto;width: 20%;">
                </div>
				<video autoplay muted loop id="myVideo">
		<source src="img/buksu.mp4" type="video/mp4">
	  </video>
                <div class="col-md-8">
					
                <form action="CheckInOut.php" method="post" class="form-horizontal" style="border-radius: 5px;padding:10px;background:#fff;" id="divvideo">
				
						
					<i class="glyphicon glyphicon-qrcode"></i> <label>SCAN QR CODE</label> <p id="time"></p>
                    <input type="text" name="studentID" id="text" placeholder="scan qrcode" class="form-control"   autofocus>
					
					
					
					
					<input type="radio"  id="text" name="LOCATION" value="Main Gate" style="margin:15px 5px">Main Gate
					<input type="radio"  id="text" name="LOCATION" value="Admin Building" style="margin:15px 5px">Admin Building
					<input type="radio"  id="text" name="LOCATION" value="College of Technology" style="margin:15px 5px">College of Technology
					<input type="radio"  id="text" name="LOCATION" value="College of Nursing" style="margin:15px 5px">College of Nursing
					<input type="radio"  id="text" name="LOCATION" value="Exit Gate" style="margin:15px 5px">Exit Gate

				</form>
				<div style="border-radius: 5px;padding:10px;background:#fff;" id="divvideo">
                  <table id="example1" class="table table-bordered">
                    <thead>
                        <tr>
						<td>NAME</td>
						<td>VISITOR ID</td>
						<td>TIME IN</td>
						<td>LOCATION</td>
						<td>LOGDATE</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $server = "192.168.1.11";
                        $username="usera";
                        $password="passa";
                        $dbname="qrcodedb";
                    
                        $conn = new mysqli($server,$username,$password,$dbname);
						$date = date('Y-m-d');
						
                        if($conn->connect_error){
                            die("Connection failed" .$conn->connect_error);
                        }
                           $sql ="SELECT * FROM attendance LEFT JOIN visitor ON attendance.STUDENTID=visitor.IDNUM WHERE LOGDATE='$date'";
                           $query = $conn->query($sql);
                           while ($row = $query->fetch_assoc()){
                        ?>
                            <tr>
                                <td><?php echo $row['LASTNAME'].', '.$row['FIRSTNAME'].' '.$row['MNAME'];?></td>
                                <td><?php echo $row['IDNUM'];?></td>
                                <td><?php echo $row['TIMEIN'];?></td>
                                <td><?php echo $row['LOCATION'];?></td>
                                <td><?php echo $row['LOGDATE'];?></td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                  </table>
				  
                </div>
				
                </div>
				
            </div>
			
	</div>		
        </div>
		<script>
			function Export()
			{
				var conf = confirm("Please confirm if you wish to proceed in exporting the attendance in to Excel File");
				if(conf == true)
				{
					window.open("export.php",'_blank');
				}
			}
		</script>				
        <script>
           let scanner = new Instascan.Scanner({ video: document.getElementById('preview')});
           Instascan.Camera.getCameras().then(function(cameras){
               if(cameras.length > 0 ){
                   scanner.start(cameras[0]);
               } else{
                   alert('No cameras found');
               }

           }).catch(function(e) {
               console.error(e);
           });

           scanner.addListener('scan',function(c){
               document.getElementById('text').value=c;
               document.forms[0].submit();
           });
        </script>
		<script type="text/javascript">
		var timestamp = '<?=time();?>';
		function updateTime(){
		  $('#time').html(Date(timestamp));
		  timestamp++;
		}
		$(function(){
		  setInterval(updateTime, 1000);
		});
		</script>
		<script src="plugins/jquery/jquery.min.js"></script>
		<script src="plugins/bootstrap/js/bootstrap.min.js"></script>
		<script src="plugins/datatables/jquery.dataTables.min.js"></script>
		<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
		<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
		<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

		<script>
		  $(function () {
			$("#example1").DataTable({
			  "responsive": true,
			  "autoWidth": false,
			});
			$('#example2').DataTable({
			  "paging": true,
			  "lengthChange": false,
			  "searching": false,
			  "ordering": true,
			  "info": true,
			  "autoWidth": false,
			  "responsive": true,
			});
		  });
		</script>
		
    </body>
</html>