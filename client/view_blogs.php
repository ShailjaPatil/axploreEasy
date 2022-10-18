<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    
    <title>Travel Blogs</title>
 <style>
    .card-head
        {
            width:1000px;
            box-shadow: -8px 6px 16px 0px rgba(46,48,46,1);
        }
        .card-head:hover
        {
            /* transform:rotate(360deg); */
            box-shadow: -8px 6px 16px 0px rgba(8,24,86,1);
            transition:0.1s all;
        }
        .card-img
        {
            width:inherit;
            height:200px;
        }
        .card-title{
            color:rgb(8, 24, 86);
        }
        .card-price
        {
            font-size:22px;
            font-weight:900;
        }
        .rupee
        {
            font-size:18px;
            color:grey;
        }
        .container {
        overflow: hidden;
        }
        .bg {
        width:100%;
        color:white;
        height: 200px;
        border-radius: 0 0 100% 100%;
        background-color: rgb(8, 24, 86);
        margin-top:-130px;
        }

        body {
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        
        }

        .foo1{
           
            border-radius: 10px;
            height: 200px;
            width: 99%;
            background-color: rgb(8, 24, 86);
            
            color:white;
        }
        .foo2{
           
           height: 20%;
           width: 99%;
           border-radius: 10px;
           background: rgba(8, 24, 86, 0.272); 
           backdrop-filter: blur(3px);
           color:rgb(8, 24, 86);
           
       }
        th{
            width:300px;
            height: 60px;
        }
        td{
            width:300px;
            
           
        }
        .button1{
           background:rgba(36, 40, 53, 0.272);; 
           /* backdrop-filter: blur(3px); */
           border:none;
           color:rgb(8, 24, 86);
           border-radius: 3px;
           width: 100px;
           height:30px;
        }
        .bg1{
            height: 100%;
            background-image: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0,0.6));
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }


 </style>
</head>

<body background="../banner2.jpg" class="bg1 conatiner" >
<div class="mt-5" >
    <div class=' d-flex justify-content-center  ml-2'>
        <div class='mt-4 btn '>
        <a href='selectOpt.php'><button class='button1'>Home</button></a>
        <a href='addBlogs.html'><button class='button1'>Add Blogs</button></a>
        <a href='login.html'><button class='button1'>Login</button></a>
        <a href='logout.php'><button class='button1'>Logout</button></a>
    </div>
    <h3 class='mt-4 ml-5' style="color:white;" >Blogging made easy, Download the app now !!</h3>
    </div>
    </div>

    <div class="">
    </div>
    <div class=" mt-3 d-flex justify-content-center align-items-center">
    <img   src="shoplogo1.jpg" alt="" style="height:70px ;width: 70px;border-radius:10% ">
    <h2 class="ml-1" style="font-family:Georgia, 'Times New Roman', Times, serif;">Blog in your own way!</h2>
    </div>
    
</body>
</html>



<?php
include '../shared/boot.html';
include_once '../shared/connect.php';
$sql_obj=mysqli_query($conn,"select * from blogs");

$total_rows=mysqli_num_rows($sql_obj);

// echo "$total";
echo "<div class='ml-5 mr-2 d-flex flex-wrap justify-content-start'>";

for($i=0; $i<$total_rows; $i++){
    $row=mysqli_fetch_assoc($sql_obj);
    // print_r($row);
    // echo "<br>"; 


    $aid=$row['article_id'];
    $atitle=$row['article_title'];
    $acontent=$row['article_content'];
    $adate=$row['article_date'];
    $name="Friend";

    echo "
             
            <div class='m-4 card card-head' >
            
                <div class='card-body'>

                <div class='d-flex justify-content-between p-1'>
                    <h4 class='m-0 card-title'>$atitle</h4>
    
                    </a> 
                </div>

                <div class='d-flex justify-content-between p-1'>
                    <p class='m-0 card-price text-danger'> 
                        <span class='rupee'></span> $adate</p>
                    
                        <i style= 'color:red; height:20px; width:20px;' class='fa fa-edit'></i>
                    </a>
                </div>

                <p class='m-0 card-text'>$acontent</p>
                <h6 class='m-0 card-title'>$name</h6>
                    
                </div>
            </div>
        ";

    //     echo "
             
    //     <div class='m-4 card card-head' >
    //     <div class='card-body'>
        
    //             <h4 class='m-0 card-title'>$name</h4>
                
    //     </div>
    //          <img class='card-img-top card-img' src='$impath' >
            
    //     </div>
    // ";
}

echo "<div class='mt-3 p-4 d-flex  foo1'>
    
      <table style='width=100%' class='ml-2 mt-0'>

        <tr>
            <th >Get to Know Us</th>
            <th >Connect with Us</th>
            <th >Make Money with Us</th>
            <th >Let Us Help You</th>
        </tr>

        <tr>
            <td ><a href='#' style='color:white;'>About US</a></td>
            <td ><a href='#' style='color:white;'>Facebook</a></td>
            <td ><a href='#' style='color:white;'>Sell on DRIPPING</a></td>
            <td ><a href='#' style='color:white;'>Covid-19 and DRIPPING</a></td>
        </tr>

        <tr>
            <td ><a href='#' style='color:white;'>Carrers</a></td>
            <td ><a href='#' style='color:white;'>Twitter</a></td>
            <td ><a href='#' style='color:white;'>DRIPPING Global selling</a></td>
            <td ><a href='#' style='color:white;'>Return Center</a></td>
        </tr>
        <tr>
            <td ><a href='#' style='color:white;'>Press Releases</a></td>
            <td ><a href='#' style='color:white;'>Instagram</a></td>
            <td ><a href='#' style='color:white;'>Become an Affiliate</a></td>
            <td><a href='#' style='color:white;'>100% Purchase Protection</a></td>
        </tr>

    </table>

 </div>
 
 <div class='foo2 p-1'>
 <div class=' mt-2 d-flex justify-content-center align-items-center'>
 <img   src='shoplogo1.jpg'style='height:70px ;width: 70px;border-radius:10% '>
 <h2 class='ml-1' style='font-family:Georgia, 'Times New Roman', Times, serif;'>Shop in your own way!</h2>
 </div>
 

 </div>";



?>
