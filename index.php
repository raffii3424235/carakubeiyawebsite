<?php include 'assets/php/sendemail.php'; ?>

<?php
  $url = file_get_contents('https://api.kawalcorona.com/indonesia');
  $data = json_decode($url, true);
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>CARAKUBEIYA OFFICIAL</title>
  <meta content="Carakubeiya merupakan komunitas game free fire.yang di buat pada 22/08/2018." name="description">
  <meta content="carakubeiya, cbi, gabung cbi, caraku be iya" name="keywords">
  <link href="assets/img/logokiri.png" rel="icon">
  <link href="assets/img/logokiri.png" rel="logokiri">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
  <header id="header" class="fixed-top ">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-xl-9 d-flex align-items-center justify-content-lg-between">
          <a href="#home" class="logo me-auto me-lg-0 scrollto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>
          <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
              <li><a class="nav-link scrollto active" href="#home">BERANDA</a></li>
              <li><a class="nav-link scrollto" href="#stats">STATISTIK</a></li>
              <li><a class="nav-link scrollto" href="#changename">CHANGENAME</a></li>
              <li><a class="nav-link scrollto " href="#peraturan">PERATURAN</a></li>
              <li><a class="nav-link scrollto" href="#gabung">GABUNG</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
          </nav>
        </div>
      </div>
    </div>
  </header>

  <section id="home" class="d-flex flex-column justify-content-center">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xl-8">
          <h1 class="up-swiper">#CARAKUBEIYA</h1>
          <h2 class="up-swiper">Carakubeiya merupakan komunitas game free fire.yang di buat pada 22/08/2018.</h2>
          <h2 class="up-swiper">Carakubeiya dipimpin oleh <a href="https://www.tiktok.com/@anshukooo?" class="tiktok">Anshuko</a>. Anda ingin bergabung bersama kami?</h2>
          <a href="#gabung" class="copy-btn scrollto up-swiper">JOIN</a>
        </div>
      </div>
    </div>
  </section>

  <main id="main">

    <section id="stats" class="stats">
      <div class="container">
        <div class="section-title">
          <h3 class="text-stats show-left">
            <span class="line-stats"></span>
            <span class="line-stats-2"></span>
            <span class="rounded-stats"></span>
            <strong class="cbi-stats">#CARAKUBEIYA</strong>
          </h3>
          <h2 class="title-stats show-left">Status Guild</h2>
            <div class="row-stats">
              <div class="col-stats">
                <span data-purecounter-start="0" data-purecounter-end="30" data-purecounter-duration="1" class="purecounter show-bottom-late"></span>
                <p class="up-swiper">Laki-Laki</p>
              </div>

              <div class="col-stats">
                <span data-purecounter-start="0" data-purecounter-end="10" data-purecounter-duration="1" class="purecounter show-bottom-late"></span>
                <p class="up-swiper">Perempuan</p>
              </div>

              <div class="col-stats">
                <span data-purecounter-start="0" data-purecounter-end="40" data-purecounter-duration="1" class="purecounter show-bottom-late"></span>
                <p class="up-swiper">Member</p>
              </div>
            </div>
          </div>
        </div>
    </section>
    
    <section id="changename" class="changename">
      <div class="container">
        <div class="section-title">
          <h3 class="text-stats show-left">
            <span class="line-stats"></span>
            <span class="line-stats-2"></span>
            <span class="rounded-stats"></span>
            <strong class="cbi-stats">#CARAKUBEIYA</strong>
          </h3>
          <h2 class="title-stats show-left">Format Nick</h2>
        </div>
          <div class="row-cn">
            <div class="slideshow show-left">
              <img src="assets/img/ff_1.jpg" class="slides">
              <img src="assets/img/ff_2.jpg" class="slides">
              <img src="assets/img/ff_3.jpg" class="slides">
              <img src="assets/img/ff_4.jpg" class="slides">
            </div>
            <div class="cn-form">
              <h2 class="title-cn up-swiper">Copy Format Nick Di Bawah</h2>
                <div class="btn-cn up-swiper">
                  <p class="copy-cn" id="nick">(nick)ㅤCBI</p>
                  <button class="copy-btn" onclick="copyToClipboard('#nick')">COPY</button>
                </div>
                <p class="contoh-cn up-swiper">Klik tombol COPY untuk menyalin format nick name</p>
            </div>
          </div> 
      </div>
    </section>
<script>
  function copyToClipboard(element){
    var $temp = $("<input>");
    $("body").append($temp);
    $temp.val($(element).text()).select();
    document.execCommand("copy");
    $temp.remove();
    alert('Nick Berhasil Di Copy');
    }
</script>

    <section id="peraturan" class="rules">
      <div class="container">
        <div class="section-title">
          <h3 class="text-stats show-left">
            <span class="line-stats"></span>
            <span class="line-stats-2"></span>
            <span class="rounded-stats"></span>
            <strong class="cbi-stats">#CARAKUBEIYA</strong>
          </h3>
          <h2 class="title-stats show-left">Peraturan</h2>
        </div>
        <div class="row">
          <div class="col-lg-6 order-2 order-lg-1">
            <div class="icon-box mt-5 mt-lg-0 show-left">
              <i class="bx bx-joystick"></i>
              <h4>Utamakan Mabar Guild</h4>
              <p>Perbanyak main bersama teman teman guild.</p>
            </div>
            <div class="icon-box mt-5 show-left">
              <i class="bx bx-microphone"></i>
              <h4>On Mic Saat In Game</h4>
              <p>Menyalakan microphone dan berbicara saat di dalam game.</p>
            </div>
            <div class="icon-box mt-5 show-left">
              <i class="bx bx-like"></i>
              <h4>Good Attitude</h4>
              <p>Mengikuti rules,mengikuti acara yang diadakan oleh leader dan officer.</p>
            </div>
            <div class="icon-box mt-5 show-left">
              <i class="bx bx-game"></i>
              <h4>Toxic Sewajarnya</h4>
              <p>Toxic tidak membawa-bawa Ras,Suku,Agama,dan Budaya.</p>
            </div>
            <div class="icon-box mt-5 show-left">
              <i class="bx bx-purchase-tag"></i>
              <h4>Push Dog Tag</h4>
              <p>Wajib push dog tag guild minimal 150/member setiap hari jumat.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

<?php echo $alert; ?>
    <section id="gabung" class="join">
      <div class="container">
        <div class="section-title">
          <h3 class="text-stats show-left">
            <span class="line-stats"></span>
            <span class="line-stats-2"></span>
            <span class="rounded-stats"></span>
            <strong class="cbi-stats">#CARAKUBEIYA</strong>
          </h3>
          <h2 class="title-stats show-left">Gabung</h2>
        </div>
        <div class="row-join">
          <h1 class="up-swiper">ISI FORMULIR DIBAWAH INI</h1>
          <p class="note-join show-bottom">Sebelum anda mendaftar baca <a class="scrollto" href="#peraturan"><strong>rules</strong></a> terlebih dahulu!!!</p>
          <form class="form" action="" method="post" enctype="multipart/form-data">
            <p class="up-swiper">NAMA LENGKAP</p>
            <input type="text" name="nama" class="text-box up-swiper" placeholder="*Raffi Fariz" required>
            <p class="up-swiper">ALAMAT</p>
            <input type="text" name="alamat" class="text-box up-swiper" placeholder="Provinsi,Kota" required>
            <p class="up-swiper">NOMOR WHATSAPP</p>
            <input type="number" name="whatsapp" class="text-box up-swiper" placeholder="08xxxxxxxxxxx" required>
            <p class="up-swiper">UMUR</p>
            <input type="number" name="umur" class="text-box up-swiper" placeholder="*10" required>
            <p class="up-swiper">JENIS KELAMIN</p>
            <select name="jeniskelamin" id="jeniskelamin" class="text-box up-swiper" aria-placeholder="Jenis Kelamin">
                <option value="tidak ada jawaban" aria-required="true">--PILIH JAWABAN--</option required>
		        <option value="laki-laki" aria-required="true">Laki-Laki</option>
		        <option value="perempuan" aria-required="true">Perempuan</option>
            </select>
            <p class="up-swiper">SIAP UNTUK CHANGE NAME</p>
            <select name="questcn" id="questcn" class="text-box up-swiper" aria-placeholder="pertanyaan">
                <option value="tidak ada jawaban" aria-required="true">--PILIH JAWABAN--</option required>
                <option value="siap" aria-required="true">IYA</option>
                <option value="tidak" aria-required="true">TIDAK</option>
            </select>
            <p class="up-swiper">ON MIC SAAT IN GAME</p>
            <select name="questonmic" id="questonmic" class="text-box up-swiper" aria-placeholder="pertanyaan">
                <option value="tidak ada jawaban" aria-required="true">--PILIH JAWABAN--</option required>
                <option value="siap" aria-required="true">IYA</option>
                <option value="tidak" aria-required="true">TIDAK</option>
            </select>
            <p class="up-swiper">SCREENSHOT KD LIFETIME</p>
            <input type="file" name="screenshot" class="text-box file-ss up-swiper" placeholder="screenshot" required>
            <input type="submit" name="submit" class="send-btn show-right" onclick="alertBtn()" value="KIRIM">
          </form>
        </div>
      </div>
    </section>
<script>
   function alertBtn() {
     confirm("Anda Sudah Yakin Dengan Data Anda?");
   }

</script>

    <section id="counts" class="counts">
      <div class="container">
        <div class="text-center title">
          <h3 class="up-swiper">Data Covid-19</h3>
          <p class="up-swiper">Stay At Home</p>
        </div>
        <div class="row counters position-relative">
          <div class="col-lg-3 col-6 text-center">
            <span class="up-swiper"><?= $data[0]['positif']; ?></span>
            <p class="up-swiper-late">Positif</p>
          </div>
          <div class="col-lg-3 col-6 text-center">
            <span class="up-swiper"><?= $data[0]['sembuh']; ?></span>
            <p class="up-swiper-late">Sembuh</p>
          </div>
          <div class="col-lg-3 col-6 text-center">
            <span class="up-swiper"><?= $data[0]['meninggal']; ?></span>
            <p class="up-swiper-late">Meninggal</p>
          </div>
          <div class="col-lg-3 col-6 text-center">
            <span class="up-swiper"><?= $data[0]['dirawat']; ?></span>
            <p class="up-swiper-late">Dirawat</p>
          </div>
        </div>
      </div>
    </section>

  </main>

  <footer id="footer">
    <div class="container">
      <h3>CarakuBeIya</h3>
      <p>Carakubeiya merupakan komunitas game free fire,yang di buat pada 22/08/2018.</p>
      <div class="social-links">
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="discord"><i class="bx bxl-discord"></i></a>
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span>CarakuBeIya</span></strong>. All Rights Reserved
      </div>
    </div>
  </footer>

  <div id="preloader"></div>
  <a href="#home" class="back-to-top d-flex align-items-center justify-content-center scrollto"><i class="bi bi-arrow-up-short"></i></a>

  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>



  <script src="assets/js/main.js"></script>
  <script src="assets/js/scrollreveal.min.js"></script>
<script>
  const sr = ScrollReveal({
    origin: 'top',
    distance: '60px',
    duration: 2500,
    delay: 400,
    // reset: true
  })

  sr.reveal(`.up-swiper`)
  sr.reveal(`.up-swiper-late`,{duration: 3500},{delay: 600})
  sr.reveal(`.show-left`,{origin: 'left'})
  sr.reveal(`.show-right`,{origin: 'right'})
  sr.reveal(`.show-bottom`,{origin: 'bottom'})
  sr.reveal(`.show-bottom-late`,{origin: 'bottom'},{delay: 700})
</script>

</body>
</html>
