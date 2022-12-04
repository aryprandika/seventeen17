
<?php
    require "..//admin/session.php";
    require "../koneksi.php";

    $query = mysqli_query($con, "SELECT a.*, b.name AS nama_kategori FROM produk a JOIN kategori b ON a. kategori_id=b.id");
    $jumlahProduk = mysqli_num_rows($query);

    $queryKategori = mysqli_query($con, "SELECT * FROM kategori");

    function generateRandomString($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="..//bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href=".//index.css">
    <link rel="stylesheet" type="text/css" href="../fontawesome/css/all.min.css">

    <title>Pesanan</title>
  <!-- Navbar -->
  <?php require "..//admin/navbar.php";?>
  <!-- Akhir Navbar -->

  <!-- Menu -->
  <div class=" container mt-3 mb-5">
        <div class="table-responsive mt-3">
            <table class="table">
        <h3 class="text-center font-weight-bold">DATA PESANAN</h3>
        
      </div>
	<style>
		body{
			font-family: 'Roboto';
            background-color: cadetblue;
		}
		table {
			border-collapse: collapse;
		}
 
		table, th, td {
			border: 1px solid black;
			padding: 10px;
		}
	</style>
	
 
	<?php
	// https://www.malasngoding.com
	// menghubungkan dengan koneksi database
	include '../koneksi.php';
 
	// mengambil data barang dengan kode paling besar
	$queryBarang = mysqli_query($con, "SELECT max(kode) as kodeTerbesar FROM barang");
	$data = mysqli_fetch_array($queryBarang);
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
    <table class="table table-bordered table-striped" id="example">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Kode</th>
            <th scope="col">Nama Barang</th>
            <th scope="col">Jumlah</th>
            <th scope="col">Harga</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
		<tbody>
			
			<?php 
			$queryBarang = mysqli_query($con,"SELECT * FROM barang");
			$query = mysqli_query($con, "SELECT * FROM produk WHERE id!='$data[nama]'");
			if($data = mysqli_fetch_array($query)){
			while($data = mysqli_fetch_array($queryBarang)){
				?>
				
				<tr>
					<td><?php echo $data['kode']; ?></td>
					<td><?php echo $data['nama']; ?></td>
					<td><?php echo $data['jumlah']; ?></td>
                    <td>Rp. <?php echo number_format ($data['harga']) ?></td>
                    <td> <input type="checkbox" class="chech-box text-center"><span>&emsp;Oke</span></td>
                    
				</tr>
				<?php 
			}
		}

        ?>
		</form>

    	</tbody>
	</table>
	<script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../fontawesome/js/all.min.js"></script>
</body>
</html>