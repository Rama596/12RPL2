<?php

require 'function.php';
$username = $_POST["username"];
$password = $_POST["password"];

$query_sql ="INSERT INTO user (username,password) VALUES ('$username','$password')";

if(mysqli_query($conn, $query_sql)){
	header("form login daftar.html");
} else{
	echo "login gagal : " . mysqli_error($conn);
}
?>