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
 
    <title>RoadPass</title>
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
            <h3>FORM PAYMENT</h3>
            <div class="box">
                <form action="" method="POST" enctype="multipart/form-data">
                     <input type="text" placeholder="Name" name="nama" class="input-control" required>
                     <input type="text" placeholder="Name Bank" name="bank" class="input-control" required>
                     <input type="file" name="image" class="input-control" required>
                    <button name="submit" class="btn">SUBMIT</button>
                </form>
                
                <?php
                if(isset($_POST['submit'])){
                    //print_r($_FILES['image']);
                    // menampung inputan form
                    $nama=$_POST['nama'];
                    $bank=$_POST['bank'];
                    
                    // menampung data file yang diupload
                    $filename = $_FILES['image']['name'];
                    $tmp_name = $_FILES['image']['tmp_name'];
                    
                    $temp = explode(".", $filename);
                    $temp2 = $temp[1];
        
                    
                    // menampung data format file yang diizinkan
                    $allowedExts = array('jpg', 'jpeg', 'png', 'gif');
                    
                    // validasi format file
                    if(!in_array($temp2, $allowedExts)){
                        //jika format file tidak ada di dalam array tipe diizinkan
                        echo "<script>alert('Format not allowed!')</script>";
                        
                    }else{
                     //jika format file sesuai dengan yang ada di dalam array tipe diizinkan
                    // proses upload file sekaligus insert ke database
                        move_uploaded_file($tmp_name, './upload/.' . $filename);
                        
                        $insert = mysqli_query($conn, "INSERT INTO tb_bayar VALUES (
                                           null,
                                           '$nama',
                                           '$bank',
                                           '$filename'
                                        )");
                        
                        if($insert){
                            echo "<script>alert('Payment was Successfully!')</script>";
                            
                        }else{
                            echo "<script>alert('Your Payment Failed!')</script>";
                        }
    
                    }
                    

                }
                    ?>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="container">
            <h4>Address</h4>
            <p>Surabaya , Jawa Timur </p>
            
            <h4>Email</h4>
            <p>sorayapasyadh@gmail.com</p>
            
            <h4>Number Phone</h4>
            <p>085850410115</p>
            <small>Copyright &copy; 2022 - RoadPass</small>
        </div>
    </div>
</body>
</html>
