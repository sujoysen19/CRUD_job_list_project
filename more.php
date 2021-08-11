<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>Details</title>
  </head>
  <body>
  <h1 class="text-center my-4"><u>Job details</u></h1>

  <?php

       include "config.php";

       $id = $_GET['id'];

       $sql = "SELECT * FROM `job` WHERE id = {$id}";

       $result = mysqli_query($conn,$sql);

       if(mysqli_num_rows($result)>0)
       {
           while($row = mysqli_fetch_assoc($result))
           {


    ?>

  <div class="container">
    <div class="card">
        <div class="card-header">
        <?php  echo $row['subject'];   ?>
        </div>
        <div class="card-body">
            <h5 class="card-title"><?php  echo $row['eligible'];   ?></h5>
            <p class="card-text"><?php  echo $row['details'];   ?></p>
            <a href="index.php" class="btn btn-primary">Main page.</a>
        </div>
        <div class="card-footer text-muted">
        <?php  echo $row['dt'];   ?>
        </div>
    </div>
  </div>


  <?php

           }
        }

  ?>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    -->
  </body>
</html>