<?php 
 
session_start();
error_reporting(0);
include 'db.php';
if($_SESSION['status_login'] != true){
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
 
    <title>RoadPass</title>
</head>
<body>
    <header>
        <div class="container">
            <h2><a href="dashboard.php">RoadPass</a></h2>
            <ul>
            <li><a href="dashboard.php">Dashboard</a></li>
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
            <h3>PAYMENT</h3>
            <div class="box">
                   <div class="search">
                <div class="container">
                    <form action="payment.php">
                        <input type="text" name="search" placeholder="Search Payment">
                        <input type="submit" name="cari" value="Search">
                    </form>
                </div>
            </div>
                <table border="1" cellspacing="0" class="table">
                    <thead>
                        <tr>
                            <th width="35px">No</th>
                            <th width="150px">Name</th>
                            <th width="150px">Bank</th>
                            <th width="150px">Payment</th>
                            <th width="350px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            if($_GET['search'] != ''){
                            $where = "AND nama LIKE '%".$_GET['search']."%' ";
                            }
                            $no = 1;
                            $payment = mysqli_query($conn, "SELECT * FROM tb_bayar WHERE id_bayar $where ORDER BY id_bayar");
                            if(mysqli_num_rows($payment) > 0){
                            while($row = mysqli_fetch_array($payment)){    
                            ?>
                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $row['nama'] ?></td>
                            <td><?php echo $row['bank'] ?></td>
                            <td><a href="upload/<?php echo $row['image'] ?>" target="_blank"><img src="upload/<?php echo $row['image'] ?>" width="100px"></a></td>
                            <td>
                                <a href="edit4.php?id=<?php echo $row['id_bayar'] ?>"><button name="submit" class="btn2">Update</button></a> 
                                <a href="delete4.php?idu=<?php echo $row['id_bayar'] ?>"><button name="submit" class="btn1" onclick="return confirm ('Are you sure want to delete?')">Delete</button></a> 
                            </td>
                        </tr>
                        <?p<?php }}else{ ?>
                            <tr>
                                <td colspan="5">No Data</td>
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
