<!-- Start Jumbotron -->
<section id="jumbotron">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2 class="text-center mb-5">Peta Negara Kesatuan Republik Indonesia</h2>
		</div>
		</div>
	</div>
</section>
<!-- End Jumbotron -->
<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Selamat Datang di Virtual Jelajah Indonesia!</h5>
        <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
      </div>
      <div class="modal-body">
	  Virtual Jelajah Indonesia (VJI) merupakan sebuah literature digital yang bertujuan untuk mengenalkan budaya Indonesia.
      </div>
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal" value="PLAY" onclick="play()">Lanjutkan</button>
      </div>
    </div>
  </div>
</div>
<!-- Maps Indonesia -->
<script src="https://code.highcharts.com/maps/highmaps.js"></script>
<script src="https://code.highcharts.com/maps/modules/exporting.js"></script>
<script src="https://code.highcharts.com/mapdata/countries/id/id-all.js"></script>

<div id="container"></div>

<!-- Start Infografis -->
<section id="infografis">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center mb-5">
				<h2>Infografis</h2>
			</div>
		</div>
		<div class="row justify-content-evenly">
			<div class="col mb-3">
				<a href="index.php?page=aceh" class="text-decoration-none">
					<div class="card border-light shadow p-3 h-100">
						<img src="img/aceh/aceh.png" class="card-img-top img-fluid" alt="Gambar Logo Provinsi Aceh" />
						<div class="card-body">
							<p class="card-text text-center">Aceh</p>
						</div>
					</div>
				</a>
			</div>
			<div class="col col-md-2 mb-3">
				<a href="index.php?page=sumut" class="text-decoration-none">
					<div class="card border-light shadow p-3 h-100">
						<img src="img/sumut/sumut.png" class="card-img-top img-fluid" alt="Gambar Logo Provinsi Sumatera Utara" />
						<div class="card-body">
							<p class="card-text text-center">Sumatera Utara</p>
						</div>
					</div>
				</a>
			</div>
			<div class="col col-md-2 mb-3">
				<a href="index.php?page=sumbar" class="text-decoration-none">
					<div class="card border-light shadow p-3 h-100">
						<img src="img/sumbar/sumbar.png" class="card-img-top img-fluid" alt="Gambar Logo Provinsi Sumatera Barat" />
						<div class="card-body">
							<p class="card-text text-center">Sumatera Barat</p>
						</div>
					</div>
				</a>
			</div>
			<div class="col col-md-2 mb-3">
				<a href="index.php?page=riau" class="text-decoration-none">
					<div class="card border-light shadow p-3 h-100">
						<img src="img/riau/riau.png" class="card-img-top img-fluid" alt="Gambar Logo Provinsi Riau" />
						<div class="card-body">
							<p class="card-text text-center">Riau</p>
						</div>
					</div>
				</a>
			</div>
			<div class="col col-md-2 mb-3">
				<a href="index.php?page=kepri" class="text-decoration-none">
					<div class="card border-light shadow p-3 h-100">
						<img src="img/kepri/kepri.png" class="card-img-top img-fluid" alt="Gambar Logo Provinsi Kepulauan Riau" />
						<div class="card-body">
							<p class="card-text text-center">Kepulauan Riau</p>
						</div>
					</div>
				</a>
			</div>
			<div class="col col-md-2 mb-3">
				<a href="index.php?page=jambi" class="text-decoration-none">
					<div class="card border-light shadow p-3 h-100">
						<img src="img/jambi/jambi.png" class="card-img-top img-fluid" alt="Gambar Logo Provinsi Jambi" />
						<div class="card-body">
							<p class="card-text text-center">Jambi</p>
						</div>
					</div>
				</a>
			</div>
			<div class="col col-md-2 mb-3">
				<a href="index.php?page=bengkulu" class="text-decoration-none">
					<div class="card border-light shadow p-3 h-100">
						<img src="img/bengkulu/bengkulu.png" class="card-img-top img-fluid" alt="Gambar Logo Provinsi Bengkulu" />
						<div class="card-body">
							<p class="card-text text-center">Bengkulu</p>
						</div>
					</div>
				</a>
			</div>
			<div class="col col-md-2 mb-3">
				<a href="index.php?page=sumsel" class="text-decoration-none">
					<div class="card border-light shadow p-3 h-100">
						<img src="img/sumsel/sumsel.png" class="card-img-top img-fluid" alt="Gambar Logo Provinsi Sumatera Selatan" />
						<div class="card-body">
							<p class="card-text text-center">Sumatera Selatan</p>
						</div>
					</div>
				</a>
			</div>
			<div class="col col-md-2 mb-3">
				<a href="index.php?page=kbb" class="text-decoration-none">
					<div class="card border-light shadow p-3 h-100">
						<img src="img/kbb/kbb.png" class="card-img-top img-fluid" alt="Gambar Logo Provinsi Kepulauan Bangka Belitung" />
						<div class="card-body">
							<p class="card-text text-center">Kepulauan Bangka Belitung</p>
						</div>
					</div>
				</a>
			</div>
			<div class="col col-md-2 mb-3">
				<a href="index.php?page=lampung" class="text-decoration-none">
					<div class="card border-light shadow p-3 h-100">
						<img src="img/lampung/lampung.png" class="card-img-top img-fluid" alt="Gambar Logo Provinsi Lampung" />
						<div class="card-body">
							<p class="card-text text-center">Lampung</p>
						</div>
					</div>
				</a>
			</div>
			<div class="col col-md-2 mb-3">
				<a href="index.php?page=jakarta" class="text-decoration-none">
					<div class="card border-light shadow p-3 h-100">
						<img src="img/jakarta/jakarta.png" class="card-img-top img-fluid" alt="Gambar Logo Provinsi Jakarta" />
						<div class="card-body">
							<p class="card-text text-center">DKI Jakarta</p>
						</div>
					</div>
				</a>
			</div>
			<div class="col col-md-2 mb-3">
				<a href="index.php?page=banten" class="text-decoration-none">
					<div class="card border-light shadow p-3 h-100">
						<img src="img/banten/banten.png" class="card-img-top img-fluid" alt="Gambar Logo Provinsi Banten" />
						<div class="card-body">
							<p class="card-text text-center">Banten</p>
						</div>
					</div>
				</a>
			</div>
			<div class="col col-md-2 mb-3">
				<a href="index.php?page=jabar" class="text-decoration-none">
					<div class="card border-light shadow p-3 h-100">
						<img src="img/jabar/jabar.png" class="card-img-top img-fluid" alt="Gambar Logo Provinsi Jawa Barat" />
						<div class="card-body">
							<p class="card-text text-center">Jawa Barat</p>

						</div>
					</div>
				</a>
			</div>
			<div class="col col-md-2 mb-3">
				<a href="index.php?page=jateng" class="text-decoration-none">
					<div class="card border-light shadow p-3 h-100">
						<img src="img/jateng/jateng.png" class="card-img-top img-fluid" alt="Gambar Logo Provinsi Jawa Tengah" />
						<div class="card-body">
							<p class="card-text text-center">Jawa Tengah</p>
						</div>
					</div>
				</a>
			</div>
			<div class="col col-md-2 mb-3">
				<a href="index.php?page=jogja" class="text-decoration-none">
					<div class="card border-light shadow p-3 h-100">
						<img src="img/jogja/jogja.png" class="card-img-top img-fluid" alt="Gambar Logo Provinsi Yogyakarta" />
						<div class="card-body">
							<p class="card-text text-center">Daerah Istimewa Yogyakarta</p>
						</div>
					</div>
				</a>
			</div>
			<div class="col col-md-2 mb-3">
				<a href="index.php?page=jatim" class="text-decoration-none">
					<div class="card border-light shadow p-3 h-100">
						<img src="img/jatim/jatim.png" class="card-img-top img-fluid" alt="Gambar Logo Provinsi Jawa Timur" />
						<div class="card-body">
							<p class="card-text text-center">Jawa Timur</p>
						</div>
					</div>
				</a>
			</div>
			<div class="col col-md-2 mb-3">
				<a href="index.php?page=bali" class="text-decoration-none">
					<div class="card border-light shadow p-3 h-100">
						<img src="img/bali/bali.png" class="card-img-top img-fluid" alt="Gambar Logo Provinsi Bali" />
						<div class="card-body">
							<p class="card-text text-center">Bali</p>
						</div>
					</div>
				</a>
			</div>
			<div class="col col-md-2 mb-3">
				<a href="index.php?page=ntb" class="text-decoration-none">
					<div class="card border-light shadow p-3 h-100">
						<img src="img/ntb/ntb.png" class="card-img-top img-fluid" alt="Gambar Logo Provinsi Nusa Tenggara Barat" />
						<div class="card-body">
							<p class="card-text text-center">Nusa Tenggara Barat</p>
						</div>
					</div>
				</a>
			</div>
			<div class="col col-md-2 mb-3">
				<a href="index.php?page=ntt" class="text-decoration-none">
					<div class="card border-light shadow p-3 h-100">
						<img src="img/ntt/ntt.png" class="card-img-top img-fluid" alt="Gambar Logo Provinsi Nusa Tenggara Timur" />
						<div class="card-body">
							<p class="card-text text-center">Nusa Tenggara Timur</p>
						</div>
					</div>
				</a>
			</div>
			<div class="col col-md-2 mb-3">
				<a href="index.php?page=kalbar" class="text-decoration-none">
					<div class="card border-light shadow p-3 h-100">
						<img src="img/kalbar/kalbar.png" class="card-img-top img-fluid" alt="Gambar Logo Provinsi Kalimantan Barat" />
						<div class="card-body">
							<p class="card-text text-center">Kalimantan Barat</p>
						</div>
					</div>
				</a>
			</div>
			<div class="col col-md-2 mb-3">
				<a href="index.php?page=kalteng" class="text-decoration-none">
					<div class="card border-light shadow p-3 h-100">
						<img src="img/kalteng/kalteng.png" class="card-img-top img-fluid" alt="Gambar Logo Provinsi Kalimantan Tengah" />
						<div class="card-body">
							<p class="card-text text-center">Kalimantan Tengah</p>
						</div>
					</div>
				</a>
			</div>
			<div class="col col-md-2 mb-3">
				<a href="index.php?page=kalsel" class="text-decoration-none">
					<div class="card border-light shadow p-3 h-100">
						<img src="img/kalsel/kalsel.png" class="card-img-top img-fluid" alt="Gambar Logo Provinsi Kalimantan Selatan" />
						<div class="card-body">
							<p class="card-text text-center">Kalimantan Selatan</p>
						</div>
					</div>
				</a>
			</div>
			<div class="col col-md-2 mb-3">
				<a href="index.php?page=kaltim" class="text-decoration-none">
					<div class="card border-light shadow p-3 h-100">
						<img src="img/kaltim/kaltim.png" class="card-img-top img-fluid" alt="Gambar Logo Provinsi Kalimantan Timur" />
						<div class="card-body">
							<p class="card-text text-center">Kalimantan Timur</p>
						</div>
					</div>
				</a>
			</div>
			<div class="col col-md-2 mb-3">
				<a href="index.php?page=kalut" class="text-decoration-none">
					<div class="card border-light shadow p-3 h-100">
						<img src="img/kalut/kalut.png" class="card-img-top img-fluid" alt="Gambar Logo Provinsi Kalimantan Utara" />
						<div class="card-body">
							<p class="card-text text-center">Kalimantan Utara</p>
						</div>
					</div>
				</a>
			</div>
			<div class="col col-md-2 mb-3">
				<a href="index.php?page=sulut" class="text-decoration-none">
					<div class="card border-light shadow p-3 h-100">
						<img src="img/sulut/sulut.png" class="card-img-top img-fluid" alt="Gambar Logo Provinsi Sulawesi Utara" />
						<div class="card-body">
							<p class="card-text text-center">Sulawesi Utara</p>
						</div>
					</div>
				</a>
			</div>
			<div class="col col-md-2 mb-3">
				<a href="index.php?page=gorontalo" class="text-decoration-none">
					<div class="card border-light shadow p-3 h-100">
						<img src="img/gorontalo/gorontalo.png" class="card-img-top img-fluid" alt="Gambar Logo Provinsi Gorontalo" />
						<div class="card-body">
							<p class="card-text text-center">Gorontalo</p>
						</div>
					</div>
				</a>
			</div>
			<div class="col col-md-2 mb-3">
				<a href="index.php?page=sulteng" class="text-decoration-none">
					<div class="card border-light shadow p-3 h-100">
						<img src="img/sultengah/sulteng.png" class="card-img-top img-fluid" alt="Gambar Logo Provinsi Sulawesi Tengah" />
						<div class="card-body">
							<p class="card-text text-center">Sulawesi Tengah</p>
						</div>
					</div>
				</a>
			</div>
			<div class="col col-md-2 mb-3">
				<a href="index.php?page=sulbar" class="text-decoration-none">
					<div class="card border-light shadow p-3 h-100">
						<img src="img/sulbar/sulbar.png" class="card-img-top img-fluid" alt="Gambar Logo Provinsi Sulawesi Barat" />
						<div class="card-body">
							<p class="card-text text-center">Sulawesi Barat</p>
						</div>
					</div>
				</a>
			</div>
			<div class="col col-md-2 mb-3">
				<a href="index.php?page=sulsel" class="text-decoration-none">
					<div class="card border-light shadow p-3 h-100">
						<img src="img/sulsel/sulsel.png" class="card-img-top img-fluid" alt="Gambar Logo Provinsi Sulawesi Selatan" />
						<div class="card-body">
							<p class="card-text text-center">Sulawesi Selatan</p>
						</div>
					</div>
				</a>
			</div>
			<div class="col col-md-2 mb-3">
				<a href="index.php?page=sultenggara" class="text-decoration-none">
					<div class="card border-light shadow p-3 h-100">
						<img src="img/sultenggara/sultenggara.png" class="card-img-top img-fluid" alt="Gambar Logo Provinsi Sulawesi Tenggara" />
						<div class="card-body">
							<p class="card-text text-center">Sulawesi Tenggara</p>
						</div>
					</div>
				</a>
			</div>
			<div class="col col-md-2 mb-3">
				<a href="index.php?page=malukut" class="text-decoration-none">
					<div class="card border-light shadow p-3 h-100">
						<img src="img/malukut/malukut.png" class="card-img-top img-fluid" alt="Gambar Logo Provinsi Maluku Utara" />
						<div class="card-body">
							<p class="card-text text-center">Maluku Utara</p>
						</div>
					</div>
				</a>
			</div>
			<div class="col col-md-2 mb-3">
				<a href="index.php?page=maluku" class="text-decoration-none">
					<div class="card border-light shadow p-3 h-100">
						<img src="img/maluku/maluku.png" class="card-img-top img-fluid" alt="Gambar Logo Provinsi Maluku" />
						<div class="card-body">
							<p class="card-text text-center">Maluku</p>
						</div>
					</div>
				</a>
			</div>
			<div class="col col-md-2 mb-3">
				<a href="index.php?page=papuabarat" class="text-decoration-none">
					<div class="card border-light shadow p-3 h-100">
						<img src="img/papuabarat/pb.png" class="card-img-top img-fluid" alt="Gambar Logo Provinsi Papua Barat" />
						<div class="card-body">
							<p class="card-text text-center">Papua Barat</p>
						</div>
					</div>
				</a>
			</div>
			<div class="col col-md-2 mb-3">
				<a href="index.php?page=papua" class="text-decoration-none">
					<div class="card border-light shadow p-3 h-100">
						<img src="img/papua/papua.png" class="card-img-top img-fluid" alt="Gambar Logo Provinsi Papua" />
						<div class="card-body">
							<p class="card-text text-center">Papua</p>
						</div>
					</div>
				</a>
			</div>
		</div>
	</div>
	<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
		<path fill="#ffcccc" fill-opacity="1" d="M0,160L40,165.3C80,171,160,181,240,160C320,139,400,85,480,74.7C560,64,640,96,720,90.7C800,85,880,43,960,37.3C1040,32,1120,64,1200,74.7C1280,85,1360,75,1400,69.3L1440,64L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path>
	</svg>
</section>
<!-- End Infografis -->

<!-- About -->
<section id="about">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center mb-5">
				<h2>About Me</h2>
			</div>
		</div>
		<div class="row justify-content-center" style="text-align: justify">
			<div class="col-md-5 mb-3 fs-5">
				<h3 class="text-center mb-3">Virtual Jelajah Indonesia</h3>
				Virtual Jelajah Indonesia (VJI) merupakan sebuah literature digital yang bertujuan untuk mengenalkan budaya Indonesia.
			</div>
			<div class="col-md-5 mb-3 fs-5">
				<div class="row">
					<div class="col">
						<h3 class="text-center mb-3">Follow Me</h3>
					</div>
				</div>
				<div class="row justify-content-center">
					<div class="col-md-4 ms-5">
						<ul class="ps-0">
							<li style="list-style: none"></i><a href="index.php?page=" class="text-decoration-none" style="color: black"><i class="fab fa-instagram-square fa-lg pe-3"></i></i>Instagram</li></a>
						</ul>
						<ul class="ps-0">
							<li style="list-style: none"></i><a href="index.php?page=" class="text-decoration-none" style="color: black"><i class="fab fa-youtube fa-lg pe-2"></i>Youtube</li></a>
						</ul>
						<ul class="ps-0">
							<li style="list-style: none"></i><a href="index.php?page=" class="text-decoration-none" style="color: black"><i class="fab fa-facebook fa-lg pe-2"></i> Facebook</li></a>
						</ul>
					</div>
					<div class="col-md-4 ms-5">
						<ul class="ps-0">
							<li style="list-style: none"></i><a href="index.php?page=" class="text-decoration-none" style="color: black"><i class="fab fa-twitter fa-lg pe-2"></i>Twitter</li></a>
						</ul>
						<ul class="ps-0">
							<li style="list-style: none"></i><a href="index.php?page=" class="text-decoration-none" style="color: black"><i class="fab fa-line fa-lg pe-2"></i> Line</li></a>
						</ul>
						<ul class="ps-0">
							<li style="list-style: none"></i><a href="index.php?page=" class="text-decoration-none" style="color: black"><i class="fab fa-tiktok fa-lg pe-2"></i> Tiktok</li></a>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
		<path fill="white" fill-opacity="1" d="M0,160L40,160C80,160,160,160,240,133.3C320,107,400,53,480,74.7C560,96,640,192,720,218.7C800,245,880,203,960,192C1040,181,1120,203,1200,192C1280,181,1360,139,1400,117.3L1440,96L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path>
	</svg>
</section>
<!-- Akhir About-->

<!-- Start Contact -->
<section id="contact">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center mb-5">
				<h2>Contact Me</h2>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-md-6">
				<form>
					<div class="mb-3">
						<label for="name" class="form-label">Name</label>
						<input type="text" class="form-control" id="name" aria-describedby="name" />
					</div>
					<div class="mb-3">
						<label for="email" class="form-label">Email</label>
						<input type="email" class="form-control" id="email" aria-describedby="email" />
					</div>
					<div class="mb-3">
						<label for="message" class="form-label">Message</label>
						<textarea class="form-control" id="message" rows="3"></textarea>
					</div>
					<button type="send" class="btn" style="background-color: #ffcccc; color: black">Send</button>
				</form>
			</div>
		</div>
	</div>
	<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
		<path fill="rgb(255,0,0)" fill-opacity="1" d="M0,256L40,250.7C80,245,160,235,240,224C320,213,400,203,480,181.3C560,160,640,128,720,112C800,96,880,96,960,117.3C1040,139,1120,181,1200,213.3C1280,245,1360,267,1400,277.3L1440,288L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path>
	</svg>
</section>
<!-- Akhir Contact -->
<script type="text/javascript">
    $(window).on('load', function() {
        $('#staticBackdrop').modal('show');
    });
</script>