<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- Bootstrap -->
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <title>WPU-HUT | Menu Minuman</title>
</head>
<body>
  
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="assets/img/logo.png" width="120">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-item nav-link" href="index.php">All Menu</a>
          <a class="nav-item nav-link" href="pizza.php">Pizza</a>
          <a class="nav-item nav-link" href="nasi.php">Nasi</a>
          <a class="nav-item nav-link active" href="minuman.php">Minuman</a>
          <a class="nav-item nav-link" href="pasta.php">Pasta</a>
        </div>
      </div>
    </div>
  </nav>
  
  <div class="container">
    <div class="row">
      <div class="col">
        <h4 class="mt-3">Minuman</h4>
      </div>
    </div>
    
    <div class="row">
      
      <?php
        $data = file_get_contents('assets/json/pizza.json');
        $menu = json_decode($data, true);
        $menu = $menu['menu'];
      ?>
      
      <?php foreach($menu as $row) : ?>
      <?php if($row['kategori'] == 'minuman') : ?>
      <div class="col-md-4">
        <div class="card mt-3">
          <img src="assets/img/menu/<?= $row['gambar'] ?>" class="card-img-top">
          <div class="card-body">
            <form action="">
              <div class="form-group row">
                <label class="col-lg-2 col-form-label">Kategori:</label>
                <div class="col-lg-10">
                  <input type="text" class="form-control text-capitalize" disabled value="<?= $row['kategori'] ?>">
                </div>
              </div>
              
              <div class="form-group row">
                <label class="col-lg-2 col-form-label">Nama Menu:</label>
                <div class="col-lg-10">
                  <input type="text" class="form-control" disabled value="<?= $row['nama'] ?>">
                </div>
              </div>
              
              <?php if($row['deskripsi'] !== '') : ?>
                <div class="form-group row">
                  <label class="col-lg-2 col-form-label">Deskripsi:</label>
                  <div class="col-lg-10">
                    <textarea rows="4" class="form-control" disabled><?= $row['deskripsi'] ?></textarea>
                  </div>
                </div>
              <?php endif; ?>
              
              <div class="form-group row">
                <label class="col-lg-2 col-form-label">Harga:</label>
                <div class="col-lg-10">
                  <input type="text" class="form-control" disabled value="Rp. <?= number_format($row['harga'],2,',','.') ?>">
                </div>
              </div>
              
              <button class="btn btn-primary btn-block mt-3">
                beli sekarang
              </button>
            </form>
          </div>
        </div>
      </div>
      <?php endif; ?>
      <?php endforeach; ?>
      
    </div>
    
  </div>
  
  <!-- Jquery -->
  <script src="assets/bootstrap/js/jquery-3.4.1.min.js"></script>
  <!-- Popper -->
  <script src="assets/bootstrap/js/popper.min.js"></script>
  <!-- Bootstrap -->
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>