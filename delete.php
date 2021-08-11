<?php  

    include "config.php";

    $id = $_GET['id'];  

    $sql = "DELETE FROM `job` WHERE id = {$id}";

    $result = mysqli_query($conn,$sql);

    header("location: index.php");

    mysqli_close($conn);

?>