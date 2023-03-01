<?php

    require 'controller.php';

    if( isset($_POST["submit"])){

        if(tambahdata($_POST) > 0 ){
            echo "
                <script>
                    alert('data berhasil dimasukan');
                    document.location.href = 'table.php';
                </script>
            ";
        }else{
            echo "
                <script>
                    alert('data gagal dimasukan');
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
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <style>
        body{
            background-color:#9DC08B ;
        }
    </style>

</head>
<body>
<div class="position-absolute top-50 start-50 translate-middle">
<div class="card" style="width: 25rem;">
  <div class="card-body">
    <h5 class="card-title">input data</h5>
    <p class="card-text"><ul>
        <form action="" method="post">
            <p>
            <h6 class="card-subtitle mb-2 text-muted"> <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nama</label>
    <input type="text" class="form-control"name="nama" >
    <div id="emailHelp" class="form-text"></div>
            </p>
           
            <p>
            <h6 class="card-subtitle mb-2 text-muted"> <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nis</label>
    <input type="text" class="form-control"name="nis" >
    <div id="emailHelp" class="form-text"></div>
            </p>
            <p>
            <h6 class="card-subtitle mb-2 text-muted"> <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Rombel</label>
    <input type="text" class="form-control"name="rombel" >
    <div id="emailHelp" class="form-text"></div>
            </p>
            <p>
            <h6 class="card-subtitle mb-2 text-muted"> <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Rayon</label>
    <input type="text" class="form-control"name="rayon" >
    <div id="emailHelp" class="form-text"></div>
            </p>
            <p>
            <h6 class="card-subtitle mb-2 text-muted"> <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Status</label>
    <input type="text" class="form-control"name="status" >
    <div id="emailHelp" class="form-text"></div>

    <div class="mb-3">
        <label for="formFileDisabled" class="form-label">Foto</label>
        <input class="form-control" type="file" id="formFileDisabled" name="foto">
    </div>

            </p>
            <button type="submit" class="btn btn-primary" name="submit">Kirim</button>
        </form>
    </ul></p>
    <a href="table.php" class="btn btn-primary">Kembali</a>
  </div>
</div>
</div>
</body>
</html>