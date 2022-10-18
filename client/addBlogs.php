<?php
include_once '../shared/connect.php';
$title=$_POST['title'];
$date=$_POST['date'];
$content=$_POST['content'];
date_default_timezone_set('Asia/Kolkata');

$cmd="insert into blogs(article_title, article_content, article_date) values('$title','$content','$date')";
$sql_result=mysqli_query($conn,$cmd);
echo "cmd=$cmd";
if($sql_result){
    echo "Blog added successfully!";
     header('location:addBlogs.html');
}
else {
    echo "Error in adding blog";
}
?>