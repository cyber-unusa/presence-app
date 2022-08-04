<?php

$con = mysqli_connect('localhost', 'root', '', 'absensi');
// $con = mysqli_connect('sql104.byethost17.com', 'b17_32304009', 'test04', 'b17_32304009_app');

// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
  }
