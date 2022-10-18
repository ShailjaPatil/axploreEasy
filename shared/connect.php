<?php
$conn= new mysqli('localhost','root','','blog1checck');
if($conn->connect_error){
    echo "Connection Failed";
    die;
}
?>