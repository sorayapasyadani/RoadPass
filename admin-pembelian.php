<?php
    session_start();
    include 'db.php';
    if($_SESSION['status_login'] != true){
        echo '<script>window.location="login.php"</script>';
    }

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
 
    <title>Data-Pemesanan</title>
</head>
<body>
    <header>
        <div class="container">
            <h2><a href="dashboard.php">RoadPass</a></h2>
            <ul>
               <a href="dashboard.php">Dashboard</a></li>
                <li><a href="profil.php">Profil</a></li>
                <li><a href="data-kategori.php">Data Kategori</a></li>
                <li><a href="data-produk.php">Data Produk</a></li>
                <li><a href="admin-pembelian.php">Data Pesanan</a></li>
                <li><a href="payment.php">Payment</a></li>
                <li><a href="grafik.php">Grafik</a></li>
                <li><a href="keluar.php">Keluar</a></li>
            </ul>
        </div>
    </header>
    <div class="section">
        <div class="container">
            <h3>Data Pesanan</h3>
            <div class="box">
                <table border="1" cellspacing="0" class="table">
                    <thead>
                        <tr>
                            <th width="35px">No</th>
                            <th width="150px">Nama</th>
                            <th width="150px">Alamat</th>
                            <th width="150px">Telepon</th>
                            <th width="150px">Produk</th>
                            <th width="450px">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $no = 1;
                            $custom = mysqli_query($conn, "SELECT * FROM tb_penjualan ORDER BY id_penjualan DESC");
                            if(mysqli_num_rows($custom) > 0){
                            while($row = mysqli_fetch_array($custom)){    
                            ?>
                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $row['Nama'] ?></td>
                            <td><?php echo $row['Alamat'] ?></td>
                            <td><?php echo $row['No Hp'] ?></td>
                            <td><?php echo $row['Product'] ?></td>
                            <td>
                                <a href="edit-cust.php?id=<?php echo $row['id_penjualan'] ?>"><button name="submit" class="btn-edit">Update</button></a> 
                                <a href="proses-hapus.php?idu=<?php echo $row['id_penjualan'] ?>"><button name="submit" class="btn-delete" onclick="return confirm ('Are you sure want to delete?')">Delete</button></a> 
                            </td>
                        </tr>
                         <?php }}else{ ?>
                            <tr>
                                <td colspan="8">Tidak Ada Data</td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
        </div>
    </div>
    </div>
    <footer>
        <div class="container">
            <small>Copyright &copy; 2022 - RoadPass</small>
        </div>
    </footer>
</body>
</html>