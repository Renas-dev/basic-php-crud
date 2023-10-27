<?php require 'connect.php'?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crud view</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
<div class="container">
<button class="btn btn-primary my-5">
    <a href="user.php" class="text-light">ADD user</a>
</button>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">FirstName</th>
            <th scope="col">Email</th>
            <th scope="col">Phone-number</th>
            <th scope="col">Password</th>
            <th scope="col">Created_at</th>
            <th scope="col">Updated_at</th>
            <th scope="col">operations</th>
        </tr>
        </thead>
        <tbody>

        <?php
        $sql="select * from users";
        $query = $conn->prepare($sql);
        $query->execute();

        $users = $query->fetchAll(PDO::FETCH_ASSOC);

        foreach ($users as $user){
        ?>
        <tr>
            <td><?= $user['id']?></td>
            <td><?= $user['firstname']?></td>
            <td><?= $user['email']?></td>
            <td><?= $user['mobile']?></td>
            <td><?= $user['password']?></td>
            <td><?= $user['created_at']?></td>
            <td><?=$user['updated_at']?></td>
            <td>
                <button class="btn btn-primary"><a href="update.php?updateid=<?= $user['id']?>" class="text-light">Update</a></button>
                <button class="btn btn-danger"><a href="delete.php?deleteid=<?= $user['id']?>" class="text-light">Delete</a></button>
            </td>

        </tr>
        <?php }?>
        </tbody>
    </table>
</div>
</body>
</html>