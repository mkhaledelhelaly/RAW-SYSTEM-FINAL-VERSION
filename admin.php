<?php
// Initialize session
session_start();

// if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] === false) {
//     header('location: login.php');
//     exit;
// }

// Check if the user is admin and redirect to admin.php
if ($_SESSION['username'] === 'admin') {
    header('location: admin.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>helllo</h1>
</body>
</html>