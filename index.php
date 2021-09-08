<?php

session_start();

$username = "";
$email    = "";

$db = mysqli_connect('localhost', 'root', 'ismayilmi', 'hellophp');
$username = mysqli_real_escape_string($db, $_POST['username']);
$password = mysqli_real_escape_string($db, $_POST['password']);

$queryname = $_POST['username'];
$myqueryy = "SELECT * FROM users WHERE (username = '$queryname' And password = '$querypassword')";
$usernamefromdb = mysqli_query($db, $myqueryy);

if (mysqli_num_rows($usernamefromdb)) {

    // $_SESSION['username'] = $username;
    $_SESSION['success'] = "You are now logged in";
    echo var_dump($myquery);
    header('location: add.php');
} else {

    $query = "INSERT INTO users (username,password) 
  			  VALUES('$username', '$password')";
    mysqli_query($db, $query);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/index.css">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="POST">
        <input type="text" name="username" key="username">

        <input type="password" name="password" key="username">

        <button type="submit">submit here</button>


    </form>

</body>

</html>