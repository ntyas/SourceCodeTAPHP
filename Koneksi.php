<?php
    date_default_timezone_set('Asia/Jakarta');
    $sql = new mysqli('localhost','aquaponik','mypa2aryz','iotcenter_aquaponik');
    if (mysqli_connect_error()){
        echo "Failed Connect to MySQL Server". mysqli_connect_error();
    }