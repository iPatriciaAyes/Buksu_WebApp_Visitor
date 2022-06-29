<?php  
 $connect = mysqli_connect("localhost", "root", "", "qrcodedb");  
 $query = "SELECT LOCATION, count(*) as number FROM attendance GROUP BY LOCATION";  
 $result = mysqli_query($connect, $query);  
 ?>
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
    </style>

<script type="text/javascript" src="js/instascan.min.js"></script>
           <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  

          
          <script type="text/javascript"> 
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['LOCATION', 'Number'],  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo "['".$row["LOCATION"]."', ".$row["number"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                      title: 'Percentage of Departments Most Visited',  
                      //is3D:true,  
                      pieHole: 0.4  
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart'));  
                chart.draw(data, options);  
           }  
           </script>
</head>

<body >
    
    <div >  
                 
                <div id="piechart" style="width: 100%; height: 300px;"></div>  
           </div>  
</body>
</html>