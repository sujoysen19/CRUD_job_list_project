<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>Updating data</title>
  </head>
  <body>
  <h1 class="text-center my-4"><u>Update the record</u></h1>

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
  <form action="update.php" method="POST">
  <div class="mb-3">
    <input type="hidden" class="form-control" id="exampleInputEmail1" name="id" aria-describedby="emailHelp" value="<?php  echo $row['id'];   ?>">
  </div>
  <div class="mb-3">
    <label for="subject1" class="form-label">Enter the subject</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="subject" aria-describedby="emailHelp" value="<?php  echo $row['subject'];   ?>">
  </div>
  <div class="mb-3">
    <label for="eligible1" class="form-label">Enter the eligibility criteria</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="eligible" value="<?php  echo $row['eligible'];   ?>">
  </div>
  <div class="form-group">
    <label for="detail1">Enter the details</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="6" name="details"><?php  echo $row['details'];   ?></textarea>
  </div>
  <br>
 <center> <button type="submit" class="btn btn-primary">Update</button> </center>
</form>
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