<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Output Pertemuan 6</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <style>
    form{
        width: 100vw;
    }
    h1{
      font-weight: bold;
      color: #AF0171;
      font-family: Monospace;
    }
    label{
      font-weight: bold;
      color: #FA7070;
      font-family: Monospace;
      margin-top:20px;
      margin-right:30px;
      margin-bottom:50px;
      margin-left:40px;
    }
    
  </style>
  <body>
    <h1 align="center">Form Tambah Mahasiswa</h1>
    <form action="data_mhs.php" method="post" align="center">
    <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">ID Mahasiswa</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nama">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama Mahasiswa</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nama">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama Prodi</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nama">
        </div>

      
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Alamat Mahasiswa</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="alamat">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>