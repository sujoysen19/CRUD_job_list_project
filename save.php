<?php

    $subject = $_POST['subject'];
    $eligible = $_POST['eligible'];
    $details = $_POST['details'];
    

    include "config.php";

    $sql = "INSERT INTO `job`(`subject`, `eligible`, `details`) VALUES ('{$subject}','{$eligible}','{$details}')";

    $result = mysqli_query($conn,$sql);

    header("location: index.php");

    mysqli_close($conn);

?>