<?php

    $id = $_POST['id'];
    $subject = $_POST['subject'];
    $eligible = $_POST['eligible'];
    $details = $_POST['details'];
    

    include "config.php";

    $sql = "UPDATE `job` SET `subject`='{$subject}',`eligible`='{$eligible}',`details`='{$details}' WHERE id={$id}";

    $result = mysqli_query($conn,$sql);

    header("location: index.php");

    mysqli_close($conn);

?>