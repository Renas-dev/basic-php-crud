<?php
include './connect.php';

$id = $_POST['updateid'];
$sql = "DELETE FROM users WHERE id=$id;";
$conn->exec($sql);
header('location: /');