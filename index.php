<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Main page</title>
  </head>
  <body>
    <h1 class="text-center my-4"><u>All job list</u></h1>

    <?php

       include "config.php";

       $sql = "SELECT * FROM `job`";

       $result = mysqli_query($conn,$sql);

       if(mysqli_num_rows($result)>0)
       {
           $no = 0;  // It is for serial number. I'll not show the id number.
           while($row = mysqli_fetch_assoc($result))
           {
               $no = $no + 1;   // Serial number will automatically increase by 1.

    ?>

    <div class="container">
        <div class="card">
            <div class="card-header">
                <?php  echo $no;   ?>   <!-- Here I am displaying the serial number -->
            </div>
            <div class="card-body">
                <h5 class="card-title"><?php  echo $row['subject'];   ?></h5>
                <p class="card-text"><?php  echo $row['eligible'];   ?></p>
                <a href="more.php?id=<?php  echo $row['id'];   ?>" class="btn btn-success">Read More</a>
                <a href="edit.php?id=<?php  echo $row['id'];   ?>" class="btn btn-primary">Edit</a>
                <a href="delete.php?id=<?php  echo $row['id'];   ?>" class="btn btn-danger">Delete</a>
            </div>
            <div class="card-footer text-muted">
            <?php  echo $row['dt'];   ?>
            </div>
        </div>
    </div>
    <br>


    <?php

               }
       }
       else
       {
           echo "No record found";
       }

       mysqli_close($conn);



    ?>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>