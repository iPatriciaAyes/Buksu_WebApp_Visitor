<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AddUser</title>
    
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

<body style='background:grey;'>
    <div class="main">
        <nav class="navbar" style="background:#eee">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#" style="color:#0D1983; font-family:Lucida Console"> <i
                            class="glyphicon glyphicon-qrcode"></i> BukSU Visitor Log Monitoring</a>
                </div>
                <ul class="nav navbar-nav">
			  <li class="active"><a href="#" style = "color:#0D1983; font-family:Courier"><span class="glyphicon glyphicon-home"></span> Home</a></li>
			  <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#" style = "color:#0D1983; font-family:Courier"><span class="glyphicon glyphicon-user"></span> Access <span class="caret"></span></a>
				<ul class="dropdown-menu">  
				  <li><a href="#"><span class="glyphicon glyphicon-user"style = "color:#0D1983; font-family:Courier" ></span> Add New Visitor</a></li>
				</ul>
			  </li>
			  <li><a href="#" style = "color:#0D1983; font-family:Courier"><span class="glyphicon glyphicon-signal"></span> Data Analysis</a></li>
			  <li><a href="#" style = "color:#0D1983; font-family:Courier"><span class="glyphicon glyphicon-map-marker"></span> Data Log</a></li>
			  <li><a href="#" style = "color:#0D1983; font-family:Courier"><span class="glyphicon glyphicon-time"></span> Scan a QR-Code</a></li>
			</ul>
            <ul class="nav navbar-nav navbar-right">
            <li><a href="homev.php" style="color:#0D1983;font-family:Courier;"><span class=" glyphicon
                            glyphicon-log-in"></span> Home</a></li>
</ul>
            </div>
        </nav>

    </div>
    <video autoplay muted loop id="myVideo">
		<source src="img/buksu.mp4" type="video/mp4">
	  </video>
      
    <div class="container" className='home' style='font-family:Kaushan Script; color:black;
					 font-size: 20px;  padding: 30px 50px;  margin: auto;background-color:white;
						width: 50%;height: auto;border-radius: 10px 10px 10px 10px;'>
                        <img src="img/buksu.png" alt="BUKSU LOGO" style="display: block;
	margin-left: auto;
	margin-right: auto;
	width: 20%;">
        <div name="registration	">
            <h1 style="font-size:30px;text-align:center">REGISTER FOR QR CODE</h1>
        </div>
        <form action="insertv.php" method="post">
            <hr>
            <div class="form-group">
                <label>Email: </label><input type="text" name="STUDENTID" placeholder="E-Mail" style="float:right;width: 100%;padding: 5px 20px;margin: 8px 0;box-sizing: border-box;border-radius: 10px 10px 10px 10px; ">
            </div>
            <div class="form-group">
                <label>First Name: </label><input type="text" name="FIRSTNAME" placeholder="First Name" style="float:right;width: 100%;padding: 5px 20px;margin: 8px 0;box-sizing: border-box;border-radius: 10px 10px 10px 10px; " >
            </div>
            <div class="form-group">
                <label>Middle Name: </label><input type="text" name="MNAME" placeholder="Middle Name" style="float:right;width: 100%;padding: 5px 20px;margin: 8px 0;box-sizing: border-box;border-radius: 10px 10px 10px 10px; " >
            </div>
            <div class="form-group">
                <label>Last Name: </label><input type="text" name="LASTNAME" placeholder="Last Name"  style="float:right;width: 100%;padding: 5px 20px;margin: 8px 0;box-sizing: border-box;border-radius: 10px 10px 10px 10px; ">
            </div>
            <div class="form-group">
                <label>Age: </label><input type="text" name="AGE" placeholder="Age"  style="float:right;width: 100%;padding: 5px 20px;margin: 8px 0;box-sizing: border-box;border-radius: 10px 10px 10px 10px; " >
            </div>
            <div class="form-group">
                <label>Gender: </label>
                <label class="radio-inline" style="align:center;margin-left:30px">
                    <input type='radio' name='GENDER' value='MALE' />MALE</br>
                </label>
                <label class="radio-inline" style="align:center;margin-left:30px">
                    <input type='radio' name='GENDER' value='FEMALE' />FEMALE</br>
                </label>
            </div>
            <div class="form-group">
                <label>Purpose Of Visit: </label><input type="text" name="PURPOSE" placeholder="Purpose Of Visit" style="float:right;width: 100%;padding: 5px 20px;margin: 8px 0;box-sizing: border-box;border-radius: 10px 10px 10px 10px;">
            </div>
            <div class="form-group">
                <label>Temperature: </label><input type="text" name="TEMPERATURE" placeholder="Temperature"  style="float:right;width: 100%;padding: 5px 20px;margin: 8px 0;box-sizing: border-box;border-radius: 10px 10px 10px 10px; ">
            </div>
            <h1 style="text-align: center;"></br></br>Contact Tracing form</h1>
			<ul style="list-style: none">
            <div class="form-group" style="font-size:1.7vw;">
                <li >1. Have you travel outside the country for the past few months?</li>
                <label class="radio-inline" style="align:center;margin-left:30px">
                    <input type='radio' name='q1' value='yes' />YES</br>
                </label>
                <label class="radio-inline"style="align:center;margin-left:30px">
                    <input type='radio' name='q1' value='no' />NO</br>
                </label>
            </div>
            <div class="form-group" style="font-size:1.7vw;">
                <li >2. Do you have Fever above 37.8C?</li>
                <label class="radio-inline"style="align:center;margin-left:30px">
                    <input type='radio' name='q2' value='yes' />YES</br>
                </label>
                <label class="radio-inline"style="align:center;margin-left:30px">
                    <input type='radio' name='q2' value='no' />NO</br>
                </label>
            </div>
            <div class="form-group"style="font-size:1.7vw;">
                <li >3. Do you have Dry Cough and/or Cold?</li>
                <label class="radio-inline"style="align:center;margin-left:30px">
                    <input type='radio' name='q3' value='yes' />YES</br>
                </label>
                <label class="radio-inline"style="align:center;margin-left:30px">
                    <input type='radio' name='q3' value='no' />NO</br>
                </label>
            </div>
            <div class="form-group" style="font-size:1.7vw;">
                <li >4. Do you have Loss of Taste or Smell?</li>
                <label class="radio-inline"style="align:center;margin-left:30px">
                    <input type='radio' name='q4' value='yes' />YES</br>
                </label>
                <label class="radio-inline"style="align:center;margin-left:30px">
                    <input type='radio' name='q4' value='no' />NO</br>
                </label>
            </div>
            <div class="form-group" style="font-size:1.7vw;">
                <li >5. Have you been diagnosed with Underlying Conditions like Bronchial Asthma/Congenital Heart Disease/Diabetes Mellitus?</li>
                <label class="radio-inline"style="align:center;margin-left:30px">
                    <input type='radio' name='q5' value='yes' />YES</br>
                </label>
                <label class="radio-inline"style="align:center;margin-left:30px">
                    <input type='radio' name='q5' value='no' />NO</br>
                </label>
            </div>
            <div class="form-group" style="font-size:1.7vw;width:100%">
                <li >6. Have you been exposed to persons with PROBABLE or POSITIVE case of COVID-19?</li>
                <label class="radio-inline"style="align:center;margin-left:30px">
                    <input type='radio' name='q6' value='yes' />YES</br>
                </label>
                <label class="radio-inline"style="align:center;margin-left:30px">
                    <input type='radio' name='q6' value='no' />NO</br>
                </label>
            </div>
            <p><input type="checkbox" style="font-size:1.7vw;">  I hereby certify that the information that I have given above are true, accurate and complete.</p>
            
            </ul>
            <button type="submit" name="submit" class="btn btn-success" style="float:right"> Submit </button>
            </hr>
        </form>
    </div>



    </div>


</body>

</html>