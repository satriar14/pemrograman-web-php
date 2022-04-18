 <!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./style2.css">
  </head>
  <body>
    <div class="container">
    <div><h1>Form Nilai</h1></div>
    <form>
      <div class="form-group row">
        <label for="nama" class="col-4 col-form-label">Nama Lengkap</label> 
        <div class="col-8">
          <input id="nama" name="nama" placeholder="Nama Lengkap" type="text" class="form-control">
        </div>
      </div>
      <div class="form-group row">
        <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
        <div class="col-8">
          <select id="matkul" name="matkul" class="custom-select">
            <option value="Dasar_Dasar_Pemrograman">Dasar Dasar pemrograman</option>
            <option value="Basis_Data">Basis Data I</option>
            <option value="WEB1">Pemrograman Web</option>
          </select>
        </div>
      </div>
      <div class="form-group row">
        <label for="uts" class="col-4 col-form-label">Nilai UTS</label> 
        <div class="col-8">
          <input id="uts" name="uts" placeholder="Nilai UTS" type="number" class="form-control">
        </div>
      </div>
      <div class="form-group row">
        <label for="uas" class="col-4 col-form-label">Nilai UAS</label> 
        <div class="col-8">
          <input id="uas" name="uas" placeholder="Nilai UAS" type="number" class="form-control">
        </div>
      </div>
      <div class="form-group row">
        <label for="tugas" class="col-4 col-form-label">Nilai Tugas/Praktikum</label> 
        <div class="col-8">
          <input id="tugas" name="tugas" placeholder="Nilai Tugas" type="number" class="form-control">
        </div>
      </div> 
      <div class="form-group row">
        <div class="offset-4 col-8">
          <button name="simpan" type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </div>
    </form>
  </div>
  </body>
</html>

<!-- Script PHP -->
<?php
$simpan = $_GET['simpan'];
$nama = $_GET['nama'];
$matkul = $_GET['matkul'];
$nilai_uts = $_GET['uts'];
$nilai_uas = $_GET['uas'];
$nilai_tugas = $_GET['tugas'];

echo 'proses : '.$simpan;
echo '<br/>Nama  : '.$nama;
echo '<br/>Mata Kuliah : '.$matkul;
echo '<br/>Nilai UTS : '.$nilai_uts;
echo '<br/>Nilai UAS : '.$nilai_uas;
echo '<br/>Nilai Tugas Praktikum : '.$nilai_tugas;
?>
