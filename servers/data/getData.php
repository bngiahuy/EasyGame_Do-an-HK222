<?php
    require_once("../connection/connection.php");
    if(!empty($_POST['datasend']))
    { 
        $datasend1=$_POST['datasend'];
	    $value_mahoa=explode(";",$datasend1);

        $x1=$value_mahoa[0];
        $x2=$value_mahoa[1];
        $x3=$value_mahoa[2];
        $x4=$value_mahoa[3];
        $x5=$value_mahoa[4];
        $x6=$value_mahoa[5];
        $x7=$value_mahoa[6];
        $x8=$value_mahoa[7];
        $x9=$value_mahoa[8];
        $x10=$value_mahoa[9];

        $sql = "UPDATE STATUS SET Trang_thai_den = $x1";
        if ($res = $mysqli->query($sql)) {$result -> free_result();}

        $sql = "UPDATE STATUS SET Trang_thai_phunsuong = $x2";
        if ($res = $mysqli->query($sql)) {$result -> free_result();}

        $sql = "UPDATE STATUS SET Trang_thai_maybom = $x3";
        if ($res = $mysqli->query($sql)) {$result -> free_result();}

        $sql = "UPDATE STATUS SET Trang_thai_RC = $x4";
        if ($res = $mysqli->query($sql)) {$result -> free_result();}


       
        $sql = "UPDATE DISPLAY SET Temperature = $x6";
        if ($res = $mysqli->query($sql)) {$result -> free_result();}

        $sql = "UPDATE DISPLAY SET Humidity = $x7";
        if ($res = $mysqli->query($sql)) {$result -> free_result();}

        $sql = "UPDATE DISPLAY SET Light = $x8";
        if ($res = $mysqli->query($sql)) {$result -> free_result();}

        $sql = "UPDATE DISPLAY SET Mois = $x9";
        if ($res = $mysqli->query($sql)) {$result -> free_result();}

        date_default_timezone_set('Asia/Jakarta');
        $d = date("Y/m/d-H:i:s");
        
        $gardenID_example = 1;
        

        $sql = "INSERT INTO DEVICE_DATA VALUES ()";
        
        $sql = "INSERT INTO temperature1 (value,date) VALUES ('".$x6."','".$d."')"; 
        if ($conn->query($sql) === TRUE) {
            echo "OK";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        };

        $sql = "INSERT INTO humidity1 (value,date) VALUES ('".$x7."','".$d."')"; 
        if ($conn->query($sql) === TRUE) {
            echo "OK";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        };

        $sql = "INSERT INTO light1 (value,date) VALUES ('".$x8."','".$d."')"; 
        if ($conn->query($sql) === TRUE) {
            echo "OK";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        };

        $sql = "INSERT INTO mois1 (value,date) VALUES ('".$x9."','".$d."')"; 
        if ($conn->query($sql) === TRUE) {
            echo "OK";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        };
	}
	$conn->close();
?>