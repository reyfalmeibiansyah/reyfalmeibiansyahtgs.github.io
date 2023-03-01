<?php

    require 'controller.php';

    $students = query("SELECT * FROM students"); 

    if ( isset($_POST["cari"] )) {
        $students = cari($_POST["keyword"]);
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>connection data base</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <style>
        body{
            background-color:#9DC08B ;
        }
        .ttble{
            background-color:white ;
        }
        .atas{
            background-color:#40513B;
        }
        .tabel {
            width:100px;
        }

    </style>
</head>
<body>
<nav class="navbar bg-body-tertiary" class="atas" >
  <div class="container-fluid">
    <a class="navbar-brand">Daftar Bio Data Siswa</a>
    <form class="d-flex" role="search" action="" method="post">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="keyword"
                autofocus autocomplete="off">
            <button class="btn btn-outline-success" type="submit" name="cari">Search</button>
    </form>
  </div>
</nav>
    <div class="position-absolute top-50 start-50 translate-middle">
        <p>
    <a href="input data.php" class="btn btn-primary">input data</a>
</p>
    <table class="table table-striped ttble" class=:tabel;>

        <tr>
            <th>No</th>
            <th>foto</th>
            <th>Nama</th>
            <th>Nis</th>
            <th>Rombel</th>
            <th>Rayon</th>
            <th>Status</th>
            <th>Aksi</th>
            <th>Aksi</th>
        </tr>
        <tbody>
        
            <?php $i=1; ?>
            <?php foreach ($students as $student ) { ?>
              <tr>
                  <td><?= $i; ?></td>

                  <td><img src="img/<?= $student ["foto"]?>" alt="" style="width: 70px;";></td>
                  <td><?= $student ["nama"]?></td>
                  <td><?= $student ["nis"]?></td>
                  <td><?= $student ["rombel"]?></td>
                  <td><?= $student ["rayon"]?></td>
                  <td><?= $student ["status"]?></td>
                  <td>
                  <a href="delete.php?id=<?= $student["id"]?>"onclick="return confirm('yakin data ingin di hapus?')">hapus</a>
                  </td>
                  <td>
                  <a href="update.php?id=<?= $student["id"]?>"onclick="return confirm('yakin data ingin di uba?')">ubah</a>
                  </td>

                </tr></div>


             <?php $i++; ?>
            <?php } ?>
            </div>
        </tbody>
    </table>

</body>
</html>