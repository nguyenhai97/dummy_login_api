<?php
  $entityBody = file_get_contents('php://input');
  $txtphp = json_decode($entityBody, true);

  $conn = mysqli_connect('localhost', 'root', '', 'Users');
  mysqli_set_charset($conn,"utf8");
  $myArray = array();
  $query = "DELETE FROM `User` WHERE id = '".$txtphp['id']."'";
  $result = mysqli_query($conn, $query);