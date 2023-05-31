<!DOCTYPE html>
<html>
<head>
  <title>Grafik-RoadPass</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap.min.css"> 
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
 
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
<div class="container">
  <h3>GRAFIK PENYEWAAN ROADPASS</h3>
  <div class="row">
    <div class="col-sm-6">
      <div class="panel-group">
        <div class="panel panel-default">
          <div class="panel-heading">Bar Chart</div>
          <div class="panel-body"><iframe src="barchart.php" width="100%" height="400"></iframe></div>
        </div>
      </div>
    </div>

    <div class="col-sm-6">
      <div class="panel-group">
        <div class="panel panel-default">
          <div class="panel-heading">Line Chart</div>
          <div class="panel-body"><iframe src="linechart.php" width="100%" height="400"></iframe></div>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-sm-6">
      <div class="panel-group">
        <div class="panel panel-default">
          <div class="panel-heading">Pie Chart</div>
          <div class="panel-body"><iframe src="piechart.php" width="100%" height="400"></iframe></div>
        </div>
      </div>
    </div>

    <div class="col-sm-6">
      <div class="panel-group">
        <div class="panel panel-default">
          <div class="panel-heading">Doughnut Chart</div>
          <div class="panel-body"><iframe src="doughnutchart.php" width="100%" height="400"></iframe></div>
        </div>
      </div>
    </div>
  </div>
</div>

</body>
</html>