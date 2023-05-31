<?php
    include 'db.php';
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Line Chart</title>
    <script src="Chart.js"></script>
    <style type="text/css">
            .container {
                width: 100%;
                margin: 15px auto;
            }
    </style>
  </head>
  <body>

    <div class="container">
        <canvas id="linechart" width="100" height="100"></canvas>
    </div>

  </body>
</html>

<script  type="text/javascript">
  var ctx = document.getElementById("linechart").getContext("2d");
  var data = {
 labels: ["Honda HRV","Mitsubishi Xpander","Toyota Fortuner","Honda Brio","Toyota Avanza","Mitsubishi Pajero Sport","Toyota Kijang Innova"],
            datasets: [
            {
              label: '',
              data: [                     
<?php
$jumlah_TKI = mysqli_query($conn,"SELECT * from tb_penjualan WHERE
Product='2'");
echo mysqli_num_rows($jumlah_TKI);
?>,
<?php
$jumlah_MPS = mysqli_query($conn,"SELECT * from tb_penjualan WHERE
Product='3'");
echo mysqli_num_rows($jumlah_MPS);
?>,
<?php
$jumlah_TA = mysqli_query($conn,"SELECT * from tb_penjualan WHERE
Product='4'");
echo mysqli_num_rows($jumlah_TA);
?>,
<?php
$jumlah_HB = mysqli_query($conn,"SELECT * from tb_penjualan WHERE
Product='5'");
echo mysqli_num_rows($jumlah_HB);
?>,
<?php
$jumlah_TF = mysqli_query($conn,"SELECT * from tb_penjualan WHERE
Product='6'");
echo mysqli_num_rows($jumlah_TF);
?>,
<?php
$jumlah_MX = mysqli_query($conn,"SELECT * from tb_penjualan WHERE
Product='7'");
echo mysqli_num_rows($jumlah_MX);
?>,
<?php
$jumlah_HRV = mysqli_query($conn,"SELECT * from tb_penjualan WHERE
Product='8'");
echo mysqli_num_rows($jumlah_HRV);
?>                    
],
    lineTension: 0,
    fill: false,
    borderColor: 'orange',
    backgroundColor: 'transparent',
    borderDash: [5, 5],
    pointBorderColor: 'orange',
    pointBackgroundColor: 'rgba(255,150,0,0.5)',
    pointRadius: 5,
    pointHoverRadius: 10,
    pointHitRadius: 30,
    pointBorderWidth: 2,
    pointStyle: 'rectRounded'
            }
            ]
            };

  var myBarChart = new Chart(ctx, {
            type: 'line',
            data: data
        });
</script>