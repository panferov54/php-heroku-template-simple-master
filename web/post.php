<?php
session_start();
$user=trim($_POST["user"]);
$_SESSION["user"]=$user;

header('location:index.php');