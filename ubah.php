<?php
require 'controller.php';

$id = $_GET["id"];
$student= query("SELECT * FROM students WHERE id= $id")[0];

//apakah button submit
if(isset($_POST["submit"])){

    if(update($_POST)>0){
       echo "<script>
            alert ('data berhasil di ubah');
            document.location.href= 'index.php';
            </script>" ;
        }else{
         echo "<script>
            alert ('data gagal di ubah');
            document.location.href= 'index.php';
            </script>" ;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="input.css">
    <title>TUGAS</title>
</head>
<body>
    <center>
    <div class="input">
            <h2>Masukan Data</h2>
            <br>
    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $student["id"]?>">
        <label for="">Nama</label>
        <br>
        <input type="text" name="nama" id="nama" value="<?= $student["nama"]?>" required>
        <br>
        <label for="">Nis</label>
        <br>
        <input type="text" name="nis" id="Nis"  value="<?= $student["nis"]?>" required>
        <br>
        <label for="">Rayon</label>
        <br>
        <input type="text" name="rayon" id="Rayon"  value="<?= $student["rayon"]?>" required>
        <br>
        <label for="">Rombel</label>
        <br>
        <input type="text" name="rombel" id="Rombel"  value="<?= $student["rombel"]?>" required> 
        <br>
        <label for="">Status</label>
        <br>
        <input type="text" name="status" id="Status"  value="<?= $student["status"]?>" required>
        <br>
        <label for="">Hobi</label>
        <br>
        <input type="text" name="hobi" id="hobi"  value="<?= $student["hobi"]?>" required>
        <br>
        <label for="">Alamat</label>
        <br>
        <input type="text" name="alamat" id="Status"  value="<?= $student["alamat"]?>" required>
        <br>
        <label for="">Merk laptop</label>
        <br>
        <input type="text" name="alamat" id="Status"  value="<?= $student["merk_laptop"]?>" required>
        <br>
        <label for="">Cita-cita</label>
        <br>
        <input type="text" name="alamat" id="Status"  value="<?= $student["cita_cita"]?>" required>
        <br>
        <label for="">Gambar</label>
        <br>
        <input type="file" name="gambar" id="Status"  value="<?= $student["gambar"]?>" required>
        <br>
        <button type="submit" name="submit">Kirim</button>
    </form>
    </div>
    </center>
</body>
</html