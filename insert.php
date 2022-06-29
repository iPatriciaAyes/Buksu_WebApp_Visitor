<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $dbname = "qrcodedb";

    $conn = mysqli_connect ($server,$username,$password,$dbname);

    if (isset($_POST['submit'])){

        if(!empty($_POST['STUDENTID']) && !empty($_POST['FIRSTNAME']) && !empty($_POST['MNAME']) && 
        !empty($_POST['LASTNAME']) && !empty($_POST['AGE']) && !empty($_POST['GENDER']) && 
        !empty($_POST['PURPOSE']) &&!empty($_POST['TEMPERATURE']) &&
        !empty($_POST['q1']) && !empty($_POST['q2']) && !empty($_POST['q3']) && !empty($_POST['q4']) 
        && !empty($_POST['q5']) && !empty($_POST['q6'])){

            $STUDENTID = $_POST['STUDENTID'];
            $FIRSTNAME = $_POST['FIRSTNAME'];
            $MNAME = $_POST['MNAME'];
            $LASTNAME = $_POST['LASTNAME'];
            $AGE = $_POST['AGE'];
            $GENDER = $_POST['GENDER'];
            $PURPOSE = $_POST['PURPOSE'];
            $TEMPERATURE = $_POST['TEMPERATURE'];
            $q1 = $_POST['q1'];
            $q2 = $_POST['q2'];
            $q3 = $_POST['q3'];
            $q4 = $_POST['q4'];
            $q5 = $_POST['q5'];
            $q6 = $_POST['q6'];

            $query = "insert into visitor (STUDENTID, FIRSTNAME, MNAME, LASTNAME, AGE, GENDER,PURPOSE,TEMPERATURE,q1,q2,q3,q4,q5,q6) values ('$STUDENTID','$FIRSTNAME','$MNAME','$LASTNAME','$AGE','$GENDER','$PURPOSE','$TEMPERATURE','$q1','$q2','$q3','$q4','$q5','$q6')";
        
            $run = mysqli_query($conn,$query) or die(myqsli_error());
            
            if ($run){
                include('generate.php');
                
                
            }

            else {
                echo "form not submitted";
            }
        }

    else {
        
        echo "<script>alert('All Fields Required');history.go(-1);</script>";
        
    }

}

?>