<?php
include '../connect.php';

if(isset($_POST['submit'])) {
    $name = ($_POST['name']);
    $email = ($_POST['email']);
    $mobile = ($_POST['mobile']);
    $password = ($_POST['password']);

    $sql = "insert into users (firstname,email,mobile,password)
            values ('$name', '$email', '$mobile', '$password');";

    if ($conn->exec($sql)) {

        header('location: /');
    } else
        echo "oops something went wrong!";
}
?>