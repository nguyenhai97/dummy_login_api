<?php
  $entityBody = file_get_contents('php://input');
  $txtphp = json_decode($entityBody, true);
  $query = "INSERT INTO `User`(`name`, `pass`, `un`) VALUES ('".$txtphp['username']."', '".$txtphp['password']."', '".$txtphp['username']."')";
  $query2 = "SELECT * FROM User WHERE un = '".$txtphp['username']."'";
  
  $conn = mysqli_connect('localhost', 'root', '', 'Users');
  mysqli_set_charset($conn,"utf8");
  $myArray = array();
  $result = mysqli_query($conn, $query2);
  if(mysqli_num_rows($result) < 1) {
    mysqli_query($conn, $query);
    echo $query;
  } else {
    http_response_code(301);
  }