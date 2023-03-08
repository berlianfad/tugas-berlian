<?php
  require 'controller.php';

  $id = $_GET["id"];

  $student = query("SELECT * FROM students WHERE id = $id ")[0];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="lihat.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>TUGAS</title>
    <style>
        img{
            width:300px;
        }
    </style>
</head>
<body style="background-color: #EEEEEE;">
<style>
    .card{
        box-shadow: 3px 3px 7px black;
        background-color: #E5D1FA;
    }
</style>
<body style="background-color:#ECF2FF;"
>
    <div class="card" style=" position:absolute; top:50%; left:50%; transform: translate(-50%, -50%);">
    <div class="card-body">
        <img src="img/<?=$student["gambar"]?>">
        <h5 class="card-title"><?= $student["nama"]?></h5>
        <lu><p class="card-text">
        <ul>
            
            <li><?= $student["nis"]?></li>
            <li><?= $student["rombel"]?></li>
            <li><?= $student["rayon"]?></li>
            <li><?= $student["status"]?></li>
            <li><?= $student["hobi"]?></li>
            <li><?= $student["alamat"]?></li> 
            <li><?= $student["merk_laptop"]?></li> 
            <li><?= $student["cita_cita"]?></li> 
            <li><?= $student["gambar"]?></li>    
             
        </ul>
    <a href="index.php" class="btn btn-primary">Kembali</a>
  </div>
</div>

</body>
</html>