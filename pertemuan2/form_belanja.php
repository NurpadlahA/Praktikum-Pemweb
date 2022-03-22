<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Belanja</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-9">
			<h3>
				Belanja Online
			</h3>
<form method="POST" action="form_belanja.php">
  <div class="form-group row">
    <label for="customer" class="col-4 col-form-label">Customer</label> 
    <div class="col-8">
      <input id="customer" name="customer" placeholder="Nama Customer" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Pilih Produk</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="Produk" id="Produk_0" type="radio" class="custom-control-input" value="TV"> 
        <label for="Produk_0" class="custom-control-label">TV</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="Produk" id="Produk_1" type="radio" class="custom-control-input" value="Kulkas">
        <label for="Produk_1" class="custom-control-label">Kulkas</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="Produk" id="Produk_2" type="radio" class="custom-control-input" value="Mesin Cuci"> 
        <label for="Produk_2" class="custom-control-label">Mesin cuci</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
    <div class="col-8">
      <input id="jumlah" name="jumlah" placeholder="Jumlah" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="proses" type="submit" value="proses" class="btn btn-success">Kirim</button>
    </div>
  </div>
</form>
		</div>
		<div class="col-md-3">
			<div class="list-group">
				 <a href="#" class="list-group-item list-group-item-action active">Daftar Harga</a>
				<div class="list-group-item">
					TV = 4.200.000
				</div>
				<div class="list-group-item">
					Kulkas = 3.100.000
				</div>
                <div class="list-group-item">
					Mesin Cuci = 3.800.000
				</div>
				</div> <a href="#" class="list-group-item list-group-item-action active justify-content-between">Harga dapat berubah setiap saat</a>
			</div>
		</div>
	</div>
</div>
<?php
$nama = $_POST['customer'];
$pilih_produk = $_POST['Produk'];
$jumlah_barang = $_POST['jumlah'];
if($pilih_produk == "TV"){
  $harga_produk = 4200000;
}elseif($pilih_produk == "Kulkas"){
  $harga_produk = 3100000;
}elseif($pilih_produk == "Mesin Cuci" ){
  $harga_produk = 3800000;
}else{
  $harga_produk = "I(tidak ada nilai)";
}
$total = $harga_produk*$jumlah_barang;

echo "Nama Customer : $nama";
echo "</br>Produk Pilihan : $pilih_produk";
echo "</br>Jumlah Beli : $jumlah_barang";
echo "</br>Total Belanja : $total";

?>
</body>
</html>