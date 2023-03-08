<?php
require 'controller.php';

//apakah button submit
if(isset($_POST["submit"])){

    if(input($_POST)>0){
       echo "<script>
            alert ('data berhasil di tambahkan');
            document.location.href= 'index.php';
            </script>" ;
        }else{
         echo "<script>
            alert ('data gagal di tambahkan');
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
        <label for="">Nama</label>
        <br>
        <input type="text" name="nama" id="" require>
        <br>
        <label for="">Nis</label>
        <br>
        <input type="text" name="nis" id=""  require>
        <br>
        <label for="">Rayon</label>
        <br>
        <input type="text" name="rayon" id=""  require>
        <br>
        <label for="">Rombel</label>
        <br>
        <input type="text" name="rombel" id=""  require>
        <br>
        <label for="">Status</label>
        <br>
        <input type="text" name="status" id=""  require>
        <br>
        <label for="">Hobi</label>
        <br>
        <input type="text" name="hobi" id=""  require>
        <br>
        <label for="">Alamat</label>
        <br>
        <input type="text" name="alamat" id=""  require>
        <br>
        <label for="">Merk_laptop</label>
        <br>
        <input type="text" name="merk_laptop" id=""  require>
        <br>
        <label for="">Cita_cita</label>
        <br>
        <input type="text" name="cita_cita" id=""  require>
        <br>
        <label for="">Gambar</label>
        <br>
        <input type="file" name="gambar" id=""  require>
        <br>
        <br>
        <button type="submit" name="submit">Kirim</button>
    </form>
    </div>
    </center>
</body>
</html>