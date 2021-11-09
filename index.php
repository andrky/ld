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

<style
#container {
    height: 500px;
    min-width: 310px;
    max-width: 800px;
    margin: 0 auto;
}

.loading {
    margin-top: 10em;
    text-align: center;
    color: gray;
}

></style>

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
        case 'sumut':
          include "halaman/sumut.php";
          break;
        case 'riau':
          include "halaman/riau.php";
          break;
        case 'kepri':
          include "halaman/kepri.php";
          break;
        case 'jambi':
          include "halaman/jambi.php";
          break;
        case 'bengkulu':
          include "halaman/bengkulu.php";
          break;
        case 'sumsel':
          include "halaman/sumsel.php";
          break;
        case 'kbb':
          include "halaman/kbb.php";
          break;
        case 'lampung':
          include "halaman/lampung.php";
          break;
        case 'jakarta':
          include "halaman/jakarta.php";
          break;
        case 'banten':
          include "halaman/banten.php";
          break;
        case 'jabar':
          include "halaman/jabar.php";
          break;
        case 'jateng':
          include "halaman/jateng.php";
          break;
        case 'jogja':
          include "halaman/jogja.php";
          break;
        case 'jatim':
          include "halaman/jatim.php";
          break;
        case 'bali':
          include "halaman/bali.php";
          break;
        case 'ntb':
          include "halaman/ntb.php";
          break;
        case 'ntt':
          include "halaman/ntt.php";
          break;
        case 'kalbar':
          include "halaman/kalbar.php";
          break;
        case 'kalteng':
          include "halaman/kalteng.php";
          break;
        case 'kalsel':
          include "halaman/kalsel.php";
          break;
        case 'kaltim':
          include "halaman/kaltim.php";
          break;
        case 'kalut':
          include "halaman/kalut.php";
          break;
        case 'sulut':
          include "halaman/sulut.php";
          break;
        case 'gorontalo':
          include "halaman/gorontalo.php";
          break;
        case 'sulteng':
          include "halaman/sulteng.php";
          break;
        case 'sulbar':
          include "halaman/sulbar.php";
          break;
        case 'sulsel':
          include "halaman/sulsel.php";
          break;
        case 'sultenggara':
          include "halaman/sultenggara.php";
          break;
        case 'malukut':
          include "halaman/malukut.php";
          break;
        case 'maluku':
          include "halaman/maluku.php";
          break;
        case 'papuabarat':
          include "halaman/papuabarat.php";
          break;
        case 'papua':
          include "halaman/papua.php";
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
  <script>
  // Prepare demo data
// Data is joined to map using value of 'hc-key' property by default.
// See API docs for 'joinBy' for more info on linking data and map.
var data = [
    {
      "hc-key": "id-3700", 
      "value": 0,
      "url": "#" //Default maps
    },
    {
      "hc-key": "id-ac", 
      "value": 1,
      "url": "index.php?page=aceh" //Aceh
    },
    {
      "hc-key": "id-jt", 
      "value": 2,
      "url": "index.php?page=jateng" //Jawa Tengah
    },
    {
      "hc-key": "id-be", 
      "value": 3,
      "url": "index.php?page=bengkulu" //Bengkulu
    },
    {
      "hc-key": "id-bt", 
      "value": 4,
      "url": "index.php?page=banten" //Banten
    },
    {
      "hc-key": "id-kb", 
      "value": 5,
      "url": "index.php?page=kalbar" //Kalimantan Barat
    },
    {
      "hc-key": "id-bb", 
      "value": 6,
      "url": "index.php?page=kbb" //Bangka Belitung
    },
    {
      "hc-key": "id-ba", 
      "value": 7,
      "url": "index.php?page=bali" //Bali
    },
    {
      "hc-key": "id-ji", 
      "value": 8,
      "url": "index.php?page=jatim" //Jawa Timur
    },
    {
      "hc-key": "id-ks", 
      "value": 9,
      "url": "index.php?page=kalsel" //Kalimantan Selatan
    },
    {
      "hc-key": "id-nt", 
      "value": 10,
      "url": "index.php?page=ntt" //NTT
    },
    {
      "hc-key": "id-se", 
      "value": 11,
      "url": "index.php?page=sulses" //Sulawesi Selatan
    },
    {
      "hc-key": "id-kr", 
      "value": 12,
      "url": "index.php?page=kepri" //Kepulauan Riau
    },
    {
      "hc-key": "id-ib", 
      "value": 13,
      "url": "index.php?page=papuabarat" //Irian Jaya Barat
    },
    {
      "hc-key": "id-su", 
      "value": 14,
      "url": "index.php?page=sumut" //Sumatera Utara
    },
    {
      "hc-key": "id-ri", 
      "value": 15,
      "url": "index.php?page=riau" //Riau
    },
    {
      "hc-key": "id-sw", 
      "value": 16,
      "url": "index.php?page=sulut" //Sulawesi Utara
    },
    {
      "hc-key": "id-ku", 
      "value": 17,
      "url": "index.php?page=kalut" //Kalimantan Utara
    },
    {
      "hc-key": "id-la", 
      "value": 18,
      "url": "index.php?page=malukut" //Maluku Utara
    },
    {
      "hc-key": "id-sb", 
      "value": 19,
      "url": "index.php?page=sumbar" //Sumatera Barat
    },
    {
      "hc-key": "id-ma", 
      "value": 20,
      "url": "index.php?page=maluku" //Maluku
    },
    {
      "hc-key": "id-nb", 
      "value": 21,
      "url": "index.php?page=ntb" //NTB
    },
    {
      "hc-key": "id-sg", 
      "value": 22,
      "url": "index.php?page=sultenggara" //Sulawesi Tenggara
    },
    {
      "hc-key": "id-st", 
      "value": 23,
      "url": "index.php?page=sulteng" //Sulawesi Tengah
    },
    {
      "hc-key": "id-pa", 
      "value": 24,
      "url": "index.php?page=papua" //Papua
    },
    {
      "hc-key": "id-jr", 
      "value": 25,
      "url": "index.php?page=jabar" //Jawa Barat
    },
    {
      "hc-key": "id-ki", 
      "value": 26,
      "url": "index.php?page=kaltim" //Kalimantan Timur
    },
    {
      "hc-key": "id-1024", 
      "value": 27,
      "url": "index.php?page=lampung" //Lampung
    },
    {
      "hc-key": "id-jk", 
      "value": 28,
      "url": "index.php?page=jakarta" //Jakarta
    },
    {
      "hc-key": "id-go", 
      "value": 29,
      "url": "index.php?page=gorontalo" //Gorontalo
    },
    {
      "hc-key": "id-yo", 
      "value": 30,
      "url": "index.php?page=jogja" //Yogyakarta
    },
    {
      "hc-key": "id-sl", 
      "value": 31,
      "url": "index.php?page=sumsel" //Sumatera Selatan
    },
    {
      "hc-key": "id-sr", 
      "value": 32,
      "url": "index.php?page=sulbar" //Sulawesi Barat
    },
    {
      "hc-key": "id-ja", 
      "value": 33,
      "url": "index.php?page=jambi" //Jambi
    },
    {
      "hc-key": "id-kt", 
      "value": 34,
      "url": "index.php?page=kalteng" //Kalimantan Tengah
    },
  ];

// Create the chart
Highcharts.mapChart('container', {
    chart: {
        map: 'countries/id/id-all'
    },

    title: {
        text: 'Provinsi Indonesia'
    },

    subtitle: {
        text: ''
    },

    mapNavigation: {
        enabled: true,
        buttonOptions: {
            verticalAlign: 'bottom'
        }
    },
    plotOptions: {
    series: {
      events: {
        click: function(e) {
          const url = e.target.point.url;
          window.open(url);
        }
      }
    }
  },
credits: {
    enabled: false
},
    colorAxis: {
        min: 0
    },

    series: [{
        data: data,
        name: 'Provinsi',
        states: {
            hover: {
                color: '#ffcccc'
            }
        },
        dataLabels: {
            enabled: true,
            format: '{point.name}'
        }
    }]
});
</script>
</body>

</html>