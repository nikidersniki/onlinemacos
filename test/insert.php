<?php
session_start();

$app = $_GET['app'];
$img = $_GET['img'];
echo $app;
$tbname = $_GET['dtname'];
echo $tbname;
$con = new mysqli($servername, $username, $password, $dbname);
$stmt = $con->prepare("INSERT INTO $tbname (name, img) VALUES (?, ?)");
$stmt->bind_param("ss", $app, $img);
$stmt->execute();
header('Location: https://onlinemacos.dev/test/index.php?name=' . $tbname);
?>
