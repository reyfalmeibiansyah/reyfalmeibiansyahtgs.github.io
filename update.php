<?php

require 'controller.php';

$id = $_GET["id"];
$student = query("SELECT * FROM students WHERE id = $id")[0];

if( isset($_POST["submit"]) ){
    
    if( ubahData($_POST) > 0 ){
        echo "
        <script>
            alert('data berhasil diubah');
            document.location.href = 'table.php';
        </script>
    ";

    }else{
    echo "
        <script>
            alert('data gagal diubah');
            document.location.href = 'table.php';
        </script>
    ";
    }

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data Siswa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <style>
        body{
            background-color:#9DC08B ;
        }
        .ttble{
            background-color:white ;
        }

    </style>
</head>
<body>
<div class="position-absolute top-50 start-50 translate-middle">
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Edit</h5>
    <p class="card-text"> 
        <form action="" method="post">
            <p>
                <input type="hidden" name="id" id="" value="<?= $student["id"]?>">
            </p>
            <p>
                <label for="">Nama</label>
                <input type="text" name="nama" id="" value="<?= $student["nama"]?>">
            </p>      
            <p>
                <label for="">Nis</label>
                <input type="text" name="nis" id="" value="<?= $student["nis"]?>">
            </p>
            <p>
                <label for="">Rombel</label>
                <input type="text" name="rombel" id="" value="<?= $student["rombel"]?>">
            </p>
            <p>
                <label for="">Rayon</label>
                <input type="text" name="rayon" id="" value="<?= $student["rayon"]?>">
            </p>
            <p>
                <label for="">Status</label>
                <input type="text" name="status" id="" value="<?= $student["status"]?>">
            </p> 
            
            <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Foto</label>
                            <input type="file" class="form-control" id="exampleInputPassword1" name="foto"
                                value="<?= $student["foto"] ?>">
                        </div>
            
            <button type="submit" name="submit">Masukkan Data Anda</button>
        </form>
    </p>
    <a href="table.php" class="btn btn-primary">Kembali</a>
  </div>
</div>
</div>
</body>
</html>