<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
  <!-- My Css -->
  <link rel="stylesheet" href="css/style.css" />
  <!-- Bootstrap Icon -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css" />
  <!-- Font Awesome Icon -->
  <script src="https://kit.fontawesome.com/61496211f5.js" crossorigin="anonymous"></script>
  <title>Literature Digital</title>
</head>
<body id="home">
  <!-- Start Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark shadow-sm fixed-top" style="background-color: rgb(255, 0, 0)">
    <div class="container-fluid">
      <a class="navbar-brand ms-5 me-5" href="index.php?page=home">Literature Digital</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <form class="d-flex col-md-6">
        <input class="form-control ms-5 me-5 rounded-pill" type="search" placeholder="Search" aria-label="Search" />
      </form>
      <div class="collapse navbar-collapse ms-5 me-5 " id="navbarTogglerDemo02">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php?page=home#home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?page=home#infografis">Infografis</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?page=home#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?page=home#contact">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->
  <!-- Start Isi -->
  <div id="isi">
    <?php
    if (isset($_GET['page'])) {
      $page = $_GET['page'];

      switch ($page) {
        case 'home':
          include "halaman/home.php";
          break;
        case 'aceh':
          include "halaman/aceh.php";
          break;
        case 'sumbar':
          include "halaman/sumbar.php";
          break;
        default:
          echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
          break;
      }
    } else {
      include "halaman/home.php";
    }

    ?>
  </div>
  <!-- End Isi -->

  <!-- Footer -->
  <footer class="text-light pb-1 text-center" style="background-color: rgb(255, 0, 0)">
    <p>Powered with <i class="bi bi-heart-fill" style="color: white"></i> by <a href="#home" class="text-light fw-bold text-decoration-none">Literature Digital</a></p>
  </footer>
  <!-- Akhir Foooter -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
  </script>
</body>

</html>