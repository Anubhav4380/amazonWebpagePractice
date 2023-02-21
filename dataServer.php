<?php 
    $host="localhost";
    $port=3306;
    $socket="";
    $user="root";
    $password="";
    $dbname="CRIS_DB_Sample";
    $con = new mysqli($host, $user, $password, $dbname, $port, $socket) or die ('Could not connect to the database server' . mysqli_connect_error());
    $query = "select * from inventoryData";
    $result = mysqli_query($con, $query);

    $data_arr = array();
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            array_push($data_arr, $row);
        } 
    }

    echo json_encode($data_arr); 
?>