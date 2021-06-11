<?php

session_start();

$db = mysqli_connect('localhost','root', '','userdata');


mysqli_select_db($con, 'userinfodata');



$user = $_POST['user'];
$email = $_POST['email'];
$comment = $_POST['comment'];


$query = " inset into userinfodata(user, email, comment)
values('$user','$email', '$comment')";


echo "$query";

mysqli_query($db, $query);

header('location:index.php');



?>