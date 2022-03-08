<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="./style2.css">

<form action="form_belanja.php" method="POST" class="container">
<div><h1>Belanja Online</h1></div>
  <div class="form-group">
    <label for="customer">Customer</label> 
    <input id="customer" name="customer" placeholder="Nama Customer" type="text" class="form-control">
  </div>
  <div class="form-group">
    <label>Pilih Produk</label> 
    <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_0" type="radio" required="required" class="custom-control-input" value="tv"> 
        <label for="produk_0" class="custom-control-label">TV</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_1" type="radio" required="required" class="custom-control-input" value="kulkas"> 
        <label for="produk_1" class="custom-control-label">Kulkas</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_2" type="radio" required="required" class="custom-control-input" value="mesin_cuci"> 
        <label for="produk_2" class="custom-control-label">Mesin Cuci</label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <label for="jumlah">Jumlah</label> 
    <input id="jumlah" name="jumlah" placeholder="Jumlah" type="number" required="required" class="form-control">
  </div> 
  <div class="form-group">
    <button name="submit" type="submit" class="btn btn-primary">Kirim</button>
  </div>
</form>

<?php
$proses = $_POST['submit'];
$cust = $_POST['customer'];
$produk = $_POST['produk'];
$jumlah = $_POST['jumlah'];

$harga_produk;
if ($produk == "kulkas") {
    $harga = "3100000";
} else if ($produk == "tv") {
    $harga = "4200000";
} else if ($produk == "mesin_cuci") {
    $harga = "3800000";
}else {
    $harga = "";
}

$total_harga = $harga * $jumlah;
// $total_harga += ((int)$jumlah * (int)$harga);

echo 'Proses : '.$proses;
echo '<br/> Nama Customer : '.$cust;
echo '<br/>Nama Produk  : '.$produk;
echo '<br/>Jumlah Beli : '.$jumlah;
echo '<br/>Total Belanja : '.number_format($total_harga,2,'.',',');

?>