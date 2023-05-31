<?php
    include 'db.php';
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Bar Chart</title>
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
        <canvas id="barchart" width="100" height="100"></canvas>
    </div>

  </body>
</html>

<script  type="text/javascript">
  var ctx = document.getElementById("barchart").getContext("2d");
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
              backgroundColor: [
                '#29B0D0',
                '#2A516E',
                '#F07124',
                '#CBE0E3',
                '#979193',
                '#7C3E66',
                '#4C3575'
                
              ]
            }
            ]
            };

  var myBarChart = new Chart(ctx, {
            type: 'bar',
            data: data,
            options: {
            legend: {
              display: false
            },
            barValueSpacing: 20,
            scales: {
              yAxes: [{
                  ticks: {
                      min: 0,
                  }
              }],
              xAxes: [{
                          gridLines: {
                              color: "rgba(0, 0, 0, 0)",
                          }
                      }]
              }
          }
        });
</script>