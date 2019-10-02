<?php
  $conn = mysqli_connect('localhost', 'root', '', 'Users');
  mysqli_set_charset($conn,"utf8");
  $myArray = array();
  if ($result = mysqli_query($conn ,"SELECT * FROM User")) {
    while($row = mysqli_fetch_assoc($result)) {
            $myArray[] = $row;
    }
    echo json_encode($myArray);
  }
