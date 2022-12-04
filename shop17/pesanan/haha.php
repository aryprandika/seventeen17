<?php
    require "..//admin/session.php";
    require "../koneksi.php";

    $id = $_GET['p'];

    $query = mysqli_query($con, "SELECT a.*, b.name AS nama_kategori FROM produk a JOIN kategori b ON a. kategori_id=b.id WHERE a.id='$id'");
    $data = mysqli_fetch_array($query);
    $queryNamaProduk = mysqli_query($con, "SELECT * FROM produk WHERE id!='$data[nama]'");
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href=".//index.css">
	<link rel="stylesheet" href="../Toko/style2.css">
    <link rel="stylesheet" type="text/css" href="../fontawesome/css/all.min.css">

    <title>Payment</title>
  <!-- Navbar -->
  <nav>
        <div class="logo">
            <h4>Seventeen 17</h4>
        </div>
        <ul class="nav-links">
            <li><a href="http://localhost/shop17/toko/index.php">Home</a>
            </li>
            <li><a href="http://localhost/shop17/toko/shop.php">Shop</a>
            </li>
            <li><a href="about.html">About</a>
            </li>
            <li><a href="Contact.html">Contact</a>
            </li>
        </ul>
        <div class="burger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
    </nav>
  <!-- Akhir Navbar -->

  <!-- Menu -->
  <div class=" container mt-3 mb-5">
        <div class="table-responsive mt-3">
            <table class="table">
        <h3 class="text-center font-weight-bold">Payment</h3>
        
      </div>
	<style>
		body{
			font-family: 'Roboto';
            background-color: white;
		}
		table {
			border-collapse: collapse;
		}
 
		table, th, td {
			border: 1px solid black;
			padding: 10px;
		}

		no-decoration{
			text-decoration: none;
		}
	</style>
	
 
	<?php
	// https://www.malasngoding.com
	// menghubungkan dengan koneksi database
	include '../koneksi.php';
 
	// mengambil data barang dengan kode paling besar
	$query = mysqli_query($con, "SELECT max(kode) as kodeTerbesar FROM barang");
	$data = mysqli_fetch_array($query);
	$kodeBarang = $data['kodeTerbesar'];
 
	// mengambil angka dari kode barang terbesar, menggunakan fungsi substr
	// dan diubah ke integer dengan (int)
	$urutan = (int) substr($kodeBarang, 3, 3);
 
	// bilangan yang diambil ini ditambah 1 untuk menentukan nomor urut berikutnya
	$urutan++;
 
	// membentuk kode barang baru
	// perintah sprintf("%03s", $urutan); berguna untuk membuat string menjadi 3 karakter
	// misalnya perintah sprintf("%03s", 15); maka akan menghasilkan '015'
	// angka yang diambil tadi digabungkan dengan kode huruf yang kita inginkan, misalnya BRG 
	$huruf = "BRG";
	$kodeBarang = $huruf . sprintf("%03s", $urutan);
	?>
 <div class="main d-flex flex-column justify-content-center align-items-center container mt-3">
        <div class="col-12 col-md-6 mb-5">
	<form method="POST" action="../pesanan/simpan.php">
		<label>Kode Barang</label><br/>
		<input type="text" class="form-control" name="kode" required="required" value="<?php echo $kodeBarang ?>" readonly>
 
		<br>
 
		<div>
		<div>
                <label for="name">Nama</label>
                <input type="text" id="nama" name="nama" value="<?php echo $data['nama']; ?>" class="form-control" autocomplete="off" required>
            </div>
            </div>
		
		<br>
 
		<label>Jumlah</label><br/>
		<input type="number" class="form-control" name="jumlah" required="required">
 
		<br>
 
		<label>Harga</label><br/>
		<input type="number" class="form-control" name="harga" required="required">
 
		<br>
		<input type="submit" value="Checkout" <a href="">
		<div class="mt-4" id="liveAlertPlaceholder"></div>
<button type="button" class="btn btn-primary" id="liveAlertBtn">Status Pemesanan</button>

<script>
    const alertPlaceholder = document.getElementById('liveAlertPlaceholder')

const alert = (message, type) => {
  const wrapper = document.createElement('div')
  wrapper.innerHTML = [
    `<div class="alert alert-${type} alert-dismissible" role="alert">`,
    `   <div>${message}</div>`,
    '   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>',
    '</div>'
  ].join('')

  alertPlaceholder.append(wrapper)
}

const alertTrigger = document.getElementById('liveAlertBtn')
if (alertTrigger) {
  alertTrigger.addEventListener('click', () => {
    alert('Pesanan Anda Berhasil!', 'success')
	
  })
}
</script>
		

    </div>
	</form>
	<br>
	<script src="../Toko/app.js"></script>
    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../fontawesome/js/all.min.js"></script>
</body>
</html>