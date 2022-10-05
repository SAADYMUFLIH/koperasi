<?php
 include 'koneksi.php';

 $id_barang = $_GET['id_barang'];
 $sql = "SELECT * FROM transaksi WHERE id_barang='$id_barang'";
 $query = mysqli_query($connect, $sql);
 $pel = mysqli_fetch_assoc($query);

 if(mysqli_num_rows($query) < 1){
    die ("data tidak ditemukan");
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tambahdatauser</title>
    <!-- css -->
    <link rel="stylesheet" href="tambahdatatabungan.css">

    <!-- font goole -->
    <link rel="preconnect" href="https://fonts.googleapis.com"> 
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;1,300;1,400&family=Quicksand:wght@600;700&display=swap" rel="stylesheet">
    <!--Icon-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   
</head>
    <!--Navbar-->
<body>
    <div class="container">
        <div class="navbar">
          <img src="assets/tb.png" alt="eror"> <p>KOPERASI SMK TARUNA BHAKTI DEPOK</p>
        </div>
        <!-- Side bar -->
      <div class="sidebar">
        <ul>
          <a href=""><p > <i class="fa-solid fa-house"></i>Dasboard</p></a>  
           <a href=""><p><i class="fa-solid fa-user"></i>Admin</p> </a>
           <a href="tampildatapemasukan.php"><p><i class="fa-solid fa-box"></i>Data Pemasukan</p></a>
           <a href="tampildatabarang"><p><i class="fa-solid fa-database"></i>Data Barang</p></a>
        </ul>
    </div>
    </div>
    <div class="container-2">
        <form action="edit-barang" method="POST">
            <div class="tambah-berita">
                <h3>Edit Data Barang</h3>
            </div>
            <div class="data1">
                <label>ID Barang</label>
                <input  value="<?php echo $pel ['id_barang']?>" required="required" type="number" name="id_barang">
            <div class="data2">
                <label>Nama Barang</label>
               <input value="<?php echo $pel ['nama_barang']?>" required="required" type="text" name="nama_barang">
            </div>
            <div class="data3">
                <label>Harga Barang</label>
                <input value="<?php echo $pel ['harga_barang']?>" required="required" type="text" name="harga_barang">
            </div>
            <div class="data4">
                <label>Stok Barang</label>
                <input value="<?php echo $pel ['stok_barang']?>" required="required" type="number" name="stok_barang">
            </div>
            <div class="simpan-berita">
                <input type="submit" name="simpan" value="simpan">
            </div>
        </form>
        </div>

</body>
</html>