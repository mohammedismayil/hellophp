<?php


// Include config file
// require_once "config.php";
session_start();

// initializing variables
$username = "";
$email    = "";


// connect to the database
$db = mysqli_connect('localhost', 'root', 'ismayilmi', 'hellophp');
$username = mysqli_real_escape_string($db, $_POST['username']);
$password = mysqli_real_escape_string($db, $_POST['password']);


// echo var_dump($_POST['username']);
// echo var_dump($username);
// echo var_dump($password);

$queryname = "jack";
echo var_dump($queryname);
$myqueryy = "SELECT username FROM `users` WHERE `username` = $queryname ";
$usernamefromdb = mysqli_query($db, $myqueryy);

echo var_dump($usernamefromdb);
// echo var_dump(mysqli_num_rows($usernamefromdb));
// if(mysqli_num_rows($usernamefromdb)) {


//     $query = "INSERT INTO users (username,password) 
//   			  VALUES('$username', '$password')";
// mysqli_query($db, $query);
// $query =  "SELECT 'username' FROM `users`";
// $myquery = mysqli_query($db, $query);
// // echo json_encode($myquery);
// echo var_dump($myquery);
// }else {
//     $_SESSION['username'] = $username;
//     $_SESSION['success'] = "You are now logged in";
//     header('location: add.php');

// }







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