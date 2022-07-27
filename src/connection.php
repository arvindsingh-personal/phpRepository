<?php
$servername = 'mysql-server';
$username = 'root';
$password = 'secret';
$dbname = "arvindsignup";
//create connection
$conn = mysqli_connect($servername, $username, $password);
if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
} 
//create database
$sql = 'CREATE DATABASE IF NOT EXISTS '.$dbname;

mysqli_select_db($conn, $dbname);
//create table users
$sql = 'CREATE TABLE IF NOT EXISTS users(user_id int(10) AUTO_INCREMENT PRIMARY KEY, usefullname VARCHAR(30) NOT NULL, email VARCHAR(30) NOT NULL, _password VARCHAR(30) NOT NULL)';
$result = mysqli_query($conn, $sql);
?>
