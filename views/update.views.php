<?php
$id = $_POST['updateid'];
$sql = "select * from users where id=$id";
$query = $conn->prepare($sql);
$query->execute();

$users = $query->fetchAll(PDO::FETCH_ASSOC);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<div class="container my-5">
    <?php
    foreach ($users as $user){
    ?>
        <div class="mb-3">
            <form method="post" action="../functions/updateUser.php">
            <input type="hidden" name="updateid" value="<?= $id?>">
            <label> name
                <input type="text" class="form-control" placeholder="enter your name" name="name" autocomplete="off" value="<?= $user['firstname'] ?>">
            </label>
        </div>
        <div class="mb-3">
            <label> Email
                <input type="email" class="form-control" placeholder="enter your email" name="email" autocomplete="off" value="<?= $user['email'] ?>">
            </label>
        </div>
        <div class="mb-3">
            <label> Mobile
                <input type="text" class="form-control" placeholder="enter your phonenumber" name="mobile" autocomplete="off" value="<?= $user['mobile'] ?>">
            </label>
        </div>
        <div class="mb-3">
            <label> Password
                <input  class="form-control" placeholder="enter your password" name="password" autocomplete="off" value="<?= $user['password'] ?>">
            </label>
        </div>
        <button type="submit" class="btn btn-primary" name="submit">update</button>
    </form>
    <?php }?>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
<?php
?>