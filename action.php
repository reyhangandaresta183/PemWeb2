<?php

$nama = $_GET['name'];
$email = $_GET['email'];
$password = $_GET['password'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Form</title>
</head>
<body>
    <div class="container">
        <header>
            <h1>Hasil Pendaftaran</h1>
        </header>
        <main>
            <form action="index.php" method="get">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" value="<?php
                echo $nama;
                ?>" disabled>
                <label for="email">Email</label>
                <input type="email" name="email" id="email" value="<?php
                echo $email;
                ?>" disabled>
                <label for="password">Password</label>
                <input type="password" name="password" id="password" value="<?php
                echo $password;
                ?>" disabled>
                <input type="submit" value="Kembali" id="btn">
            </form>
        </main>
    </div>
</body>
</html>