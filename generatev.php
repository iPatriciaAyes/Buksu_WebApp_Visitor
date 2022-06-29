
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generated!</title>
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
<body>
<video autoplay muted loop id="myVideo">
		<source src="img/buksu.mp4" type="video/mp4">
	  </video>
     <form action="loginv.php" method="post">
	 <img src="img/buksu.png" alt="BUKSU LOGO" style="display: block;
	margin-left: auto;
	margin-right: auto;
	width: 20%;">
<div style="text-align:center">
    <?php 
    
                
                include('phpqrcode/qrlib.php');
                

                // how to save PNG codes to server
                
                $tempDir = "qrcodes/";
                
                $codeContents = "".$conn-> insert_id.$STUDENTID = $_POST['STUDENTID'].$FIRSTNAME = $_POST['FIRSTNAME'].$MNAME = $_POST['MNAME'].$LASTNAME = $_POST['LASTNAME'];
                
                // we need to generate filename somehow, 
                // with md5 or with database ID used to obtains $codeContents...
                $fileName = '005_file_'.md5($codeContents).'.png';
                
                $pngAbsoluteFilePath = $tempDir.$fileName;
                $urlRelativeFilePath = $tempDir.$fileName;
                
                // generating
                if (!file_exists($pngAbsoluteFilePath)) {
                    QRcode::png($codeContents, $pngAbsoluteFilePath);
                    echo '<hr />';
                    echo ' Please download or take picture of your QR code';
                    echo '<hr />';
                } else {
                    echo 'File already generated! We can use this cached file to speed up site on common codes!';
                    echo '<hr />';
                }
                
                
                
                
                // displaying
                echo '<img src="'.$urlRelativeFilePath.'" /></br>'; 
                echo '<a id="download" style="align:center" href="'.$urlRelativeFilePath.'" download="'.$urlRelativeFilePath.'">Download</a></br></br>';
                echo '<a href="homev.php" style="float:right">Home</a>';
                ?>
                </div>
                
</body>
</html>
