<?php
    session_start();
    $server = "192.168.1.11";
    $username="usera";
    $password="passa";
    $dbname="qrcodedb";
	
    $conn = new mysqli($server,$username,$password,$dbname);

    if($conn->connect_error){
        die("Connection failed" .$conn->connect_error);
    }

	

    if(isset($_POST['studentID'])){
        
        $studentID =$_POST['studentID'];
		
		$date = date('Y-m-d');
		$time = date('H:i:s A', strtotime($time.'+6 hour'));

		$sql = "SELECT * FROM visitor WHERE IDNUM = '$studentID'";
		$query = $conn->query($sql);

		if($query->num_rows < 1){
			$_SESSION['error'] = 'Cannot find QRCode number'.$studentID;
		}else{
				$row = $query->fetch_assoc();
				$id = $row['IDNUM'];
				$sql ="SELECT * FROM attendance WHERE STUDENTID='$id' AND LOGDATE='$date' AND STATUS='1'";
				$query=$conn->query($sql);
				if($query->num_rows>0){
				$sql = "UPDATE attendance SET TIMEOUT='$time', STATUS='1' WHERE STUDENTID='$studentID' AND LOGDATE='$date'";
				$query=$conn->query($sql);
				$_SESSION['success'] = 'Successfuly Time Out: '.$row['FIRSTNAME'].' '.$row['LASTNAME'];
			}else{
					$location = $_POST['LOCATION'];
					$sql = "INSERT INTO attendance(STUDENTID,TIMEIN,LOGDATE,LOCATION,STATUS) VALUES('$studentID','$time','$date','$location','0')";
					if($conn->query($sql) ===TRUE){
					 $_SESSION['success'] = 'Successfuly Time In: '.$row['FIRSTNAME'].' '.$row['LASTNAME'];
			 }else{
			  $_SESSION['error'] = $conn->error;
		   }	
		}
	}

	}else{
		$_SESSION['error'] = 'Please scan your QR Code number';
}
header("location: main.php");
	   
$conn->close();
?>