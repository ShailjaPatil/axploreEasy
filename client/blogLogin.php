<?php
include_once '../shared/connect.php';
    session_start();
    $username=$_POST['username'];
    $password=$_POST['password'];
    $mobile=$_POST['mobile'];
    $cmd="select * from users where username='$username' and password='$password'";
    $sql_obj=mysqli_query($conn,$cmd);
    $row_count=mysqli_num_rows($sql_obj);
    if($row_count==0){
        $_SESSION['login_status']='failed';
        echo "<h3>Invalid credentials</h3>
        <br>
        <a href='blogLogin.html'>Try Again </a>";
        die;
    }
    echo "Login success";
    $_SESSION['login_status']='success';
    $_SESSION['username']=$username;
    $_SESSION['cart']=array();
    header('location:../saksham/templates/event.html');
?>