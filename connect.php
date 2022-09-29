<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    $conn = mysqli_connect('localhost', 'root', null, 'test1') or die('Connection failed:' . mysqli_connect_error());
    if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['bgroup'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $bgroup = $_POST['bgroup'];

        $sql = "INSERT INTO `users` (`name`, `email`,`phone`,`bgroup`) VALUES ('$name','$email','$phone','$bgroup')";

        $query = mysqli_query($conn, $sql);
        $id = mysqli_insert_id($conn);

        if ($query) {
            session_start(['email'=> $email, 'phone'=> $phone, 'id'=>$id]);
        } else {
            echo 'An error occurred';
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>learning</title>
    <style>
        body {
            background: #E5E4E2;
        }
    </style>
</head>

<body>
    <?php if ($query) : ?>
        <h1><?= 'Welcome to my page ' . $name ?></h1>
        <div>
            <h2><?php print_r($_SESSION)?></h2>
        </div>

    <?php else : ?>
        <div>
            <h2>REGISTRATION FORM</h2>
        </div>
    <?php endif; ?>
</body>

</html>