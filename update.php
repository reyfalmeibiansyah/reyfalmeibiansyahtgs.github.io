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

    <p>
        <input type="hidden" name="id" id="" value="<?= $student["id"]?>">
    </p>

    <div class="position-absolute top-50 start-50 translate-middle">
<div class="card" style="width: 25rem;">
  <div class="card-body">
    <h5 class="card-title">ubah bio data</h5>
    <p class="card-text"><ul>
        <form action="" method="post">
        <p>
                <input type="hidden" name="id" id="" value="<?= $student["id"]?>">
            </p>
            <p>
            <h6 class="card-subtitle mb-2 text-muted"> <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nama</label>
    <input type="text" class="form-control"name="nama" value="<?= $student["nama"]?>">
    <div id="emailHelp" class="form-text"></div>
            </p>
           
            <p>
            <h6 class="card-subtitle mb-2 text-muted"> <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nis</label>
    <input type="text" class="form-control"name="nis" value="<?= $student["nis"]?>">
    <div id="emailHelp" class="form-text"></div>
            </p>
            <p>
            <h6 class="card-subtitle mb-2 text-muted"> <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Rombel</label>
    <input type="text" class="form-control"name="rombel" value="<?= $student["rombel"]?>">
    <div id="emailHelp" class="form-text"></div>
            </p>
            <p>
            <h6 class="card-subtitle mb-2 text-muted"> <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Rayon</label>
    <input type="text" class="form-control"name="rayon" value="<?= $student["rayon"]?>">
    <div id="emailHelp" class="form-text"></div>
            </p>
            <p>
            <h6 class="card-subtitle mb-2 text-muted"> <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Status</label>
    <input type="text" class="form-control"name="status" value="<?= $student["status"]?>">
    <div id="emailHelp" class="form-text"></div>

    <div class="mb-3">
        <label for="formFileDisabled" class="form-label">Foto</label>
        <input class="form-control" type="file" id="formFileDisabled" name="foto">
    </div>

            </p>
            <button type="submit" class="btn btn-primary" name="submit">Masukan data</button>
        </form>
    </ul></p>
    <a href="table.php" class="btn btn-primary">Kembali</a>
  </div>
</div>
</div>
  </div>
</div>
</div>
</body>
</html>