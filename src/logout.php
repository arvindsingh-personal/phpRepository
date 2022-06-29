<?php
session_start();
session_unset();
header('location: ./blog_homepage.php');
?>