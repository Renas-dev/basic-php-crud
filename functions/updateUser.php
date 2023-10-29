<?php
require_once '../connect.php';
$id = $_POST['updateid'];

if(isset($_POST['submit'])) {
    $name = ($_POST['name']);
    $email = ($_POST['email']);
    $mobile = ($_POST['mobile']);
    $password = ($_POST['password']);

    $sql = "update users set firstname='$name', email='$email',mobile= '$mobile ',password= '$password' where id=$id";

    if ($conn->exec($sql)) {

        header('location: /home');
    } else
        echo "oops something went wrong!";
}
?>