<?php

if (isset($_POST['unname']) && isset($_POST['password'])) {

    function validate ($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $uname = $_POST['unname'];
    $pass = $_POST['password'];

    if (empty($uname)) {
        header("location: index.php?error=Username is required");
        exit();
    } else if (empty($pass)) {
        header("location: index.php?error=Password is required");
        exit();
    } else {
        echo "valid input";
    }
} else {
    header("location: index.php");
    exit();
}