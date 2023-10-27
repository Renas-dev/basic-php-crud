<?php
include 'connect.php';

if (isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];
    $sql = "delete from users where id=$id";
    $conn->exec($sql);
    header('location: /display.php');
} else {
    echo "oops something went wrong!";
}
?>
