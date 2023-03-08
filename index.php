<?php

 $conn = mysqli_connect("localhost","root","","db_studentss");

  $students = mysqli_query($conn,"SELECT * from students");

?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <title>TUGAS</title>
        <center>
    <h1>DATA SISWA</h1>
    <br>
    </center>
    </head>
    <style>
    .card{
        box-shadow: 3px 3px 7px black;
        background-color: #E5D1FA;
    }
</style>
<body style="background-color:#ECF2FF;"
>
    <body style="background-color: #EEEEEE;">

         <a href= "input.php"  class="btn btn-primary">Tambah data siswa </a>
         <br>
     
    <table class="table">
        <thead>
         <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Nis</th>
            <th>Rombel</th>
            <th>Rayon</th>
            <th>Status</th>
            <th>Hobi</th>
            <th>Alamat</th>
            <th>Merk-laptop</th>
            <th>Cita-cita</th>
            <th>Aksi</th>
        </tr>
        <thead>
        <tbody>
     
            <?php $i = 1; ?>
        <?php foreach ($students as $s){ ?>
    <tr>
        <td><?=$i?></td>
        <td><?=$s["nama"]?></td>
        <td><?=$s["nis"]?></td>
        <td><?=$s["rombel"]?></td>
        <td><?=$s["rayon"]?></td>
        <td><?=$s["status"]?></td>  
        <td><?=$s["hobi"]?></td>  
        <td><?=$s["alamat"]?></td> 
        <td><?=$s["merk_laptop"]?></td> 
        <td><?=$s["cita_cita"]?></td> 
        <td><?=$s["gambar"]?></td> 

        <td>
            <a class="btn btn-primary" href="hapus.php?id=<?= $s["id"] ?>" onclick ="return confirm ('bener nih mau di hapus?');">Delete</a> | <a  class="btn btn-primary" href="ubah.php?id=<?= $s['id'] ?>">Update</a> |  <a  class="btn btn-primary" href="lihat.php?id=<?= $s['id'] ?>">lihat</a>
        </td>  
    </tr>
<?php $i++;?>

<?php } ?>
</tbody>
    </table>
</body>
</html>