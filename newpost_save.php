<?php 
$cat_id = $_POST['cat_id '];
$user_id = $_POST['user_id'];
$post_date = $_POST['post_date'];
$content = $_POST['content'];
$title = $_POST['title'];

$conn = new PDO("mysql:host=localhost;dbname=webboard;charset=utf8","root","");

$sql = "INSERT INTO user (login, password, name, gender, email, role) VALUES ('$login','$passwd','$name','$gender','$email','m')";

$conn->exec($sql);
$conn = null;

    header("location:login.php");




?>