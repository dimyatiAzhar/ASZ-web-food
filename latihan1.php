<?php 

$data_menu = file_get_contents('data/pizza.json');
$menu = json_decode($data_menu, true);
// var_dump($menu);
// var_dump($menu["menu"][0]["nama"]);

$menu = $menu["menu"]; //menimpa variable menu dengan menu sebelumnya, untuk menghilangkan key index menu pada jason.
// echo $menu[0]["nama"]; data sudah bisa tampil, berupa array asosiative. Tinggal kita looping.
 
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>ASZ Hut</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="img/logo.png" alt="Logo Toko" class="src" width="120">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link" href="#">All Menu</a>
                <a class="nav-item nav-link" href="#">Pizza</a>
                <a class="nav-item nav-link" href="#">Pasta</a>
                <a class="nav-item nav-link" href="#">Nasi</a>
                <a class="nav-item nav-link" href="#">Minuman</a>
            </div>
        </div>
    </div>
  </nav>

<div class="container">
    <div class="row mt-3">
        <div class="col">
            <h1>All Menu</h1>
        </div>
    </div>

    <div class="row">
    <?php foreach($menu as $m) : ?>
        <div class="col-md-4">
            <div class="card mb-3">
                <img class="card-img-top" src="img/menu/<?= $m['gambar']; ?>" alt="American Favourite">
                <div class="card-body">
                    <h5 class="card-title"><?= $m['nama']; ?></h5>
                    <p class="card-text"><?= $m['deskripsi']; ?></p>
                    <h5 class="card-title">Rp. <?= $m['harga']; ?></h5>
                    <a href="#" class="btn btn-primary">Pesan Sekarang</a>
                </div>
            </div>
        </div>
    <?php endforeach ?>
    </div>
</div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
    <script
    src="http://code.jquery.com/jquery-3.5.1.min.js"
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
    crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>