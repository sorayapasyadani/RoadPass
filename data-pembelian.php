<?php
    error_reporting(0);
    include 'db.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
 
    <title>Form-Pemesanan</title>
</head>
<body>
    <header>
        <div class="container">
            <h2><a href="dashboard.php">RoadPass</a></h2>
            <ul>
            <li><a href="produk.php">Produk</a></li>
                <li><a href="data-pembelian.php">Form Penyewaan</a></li>
                <li><a href="upload.php">Form Pembayaran</a></li>
                <li><a href="login.php">Admin</a></li>
            </ul>
        </div>
    </header>
  <div class="section">
        <div class="container">
            <h3>FORM PENYEWAAN</h3>
            <div class="box">
                <form action="" method="POST">
                    <input type="text" placeholder="Name" name="nama" class="input-control" value="<?php echo $nama ?>" required>
                    <input type="text" placeholder="Address" name="alamat" class="input-control" value="<?php echo $alamat ?>" required>
                    <input type="text" placeholder="Number Phone" name="telp"  class="input-control" value="<?php echo $telp ?>" required>
                    <select class="input-control" name="product" required>
                        <option value="">--Pesanan--</option>
                        <?php
                            $product = mysqli_query($conn, "SELECT * FROM tb_product ORDER BY product_id");
                            while($s = mysqli_fetch_array($product)){
                        ?>
                            <option value="<?php echo $s['product_id']?>"><?php echo $s['product_name']?></option>
                          <?php } ?>
                    </select>
                    <button name="submit" class="btn">ORDER</button>
                </form>
                
                <?php
                if(isset($_POST['submit'])){
                    $nama=$_POST['nama'];
                    $alamat=$_POST['alamat'];
                    $telp=$_POST['telp'];
                    $product=$_POST['product'];
                    
                    $insert = mysqli_query($conn, "INSERT INTO tb_penjualan VALUES (
                                           null,
                                           '$nama',
                                           '$alamat',
                                           '$telp',
                                           '$product'
                                        )");
                        
                        if($insert){
                            echo "<script>alert('Congratulation, Your Order was Successfull')</script>";
                            
                        }else{
                            echo "<script>alert('Your Order Failed!')</script>";
                        }
    
                    }

                    ?>
            </div>
        </div>
      <footer>
        <div class="container">
            <small>Copyright &copy; 2022 - RoadPass</small>
        </div>
    </footer>
    </div>
</body>
</html>