<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>WEB SEKOLAH</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: SoftLand
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/softland-bootstrap-app-landing-page-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex justify-content-between align-items-center">

      <div class="logo">
        <h1><a href="index.html">SMKN 1 KRAKSAAN</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="active " href="#">Home</a></li>
          {{-- <li><a href="pricing.html">Pricing</a></li> --}}
          {{-- <li><a href="blog.html">Blog</a></li>
          <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li> --}}
          <li>
            <a href="https://wa.me/6285330718240?text=Halo%20!">Contact Us</a></li>
            {{-- <li><a href="http://127.0.0.1:8000/loginsemua" class="btn btn-primary"> Login</a></li> --}}
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section class="hero-section" id="hero" style="background-image: url('assets/img/6.jpg'); background-size: cover; background-position: center; height: 100vh;">
    <div class="wave">
        {{-- Konten lainnya --}}
    </div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 hero-text-image text-center">
                <h1 data-aos="fade-right" class="single-line">Selamat Datang Di Web Kedisplinan</h1>
                <p class="mb-5" data-aos="fade-right" data-aos-delay="100">Web Kedisplinan Smkn 1 Kraksaan</p>
                <p data-aos="fade-right" data-aos-delay="200" data-aos-offset="-500"><a href="{{ route('loginsemua') }}" class="btn btn-outline-white">Get started</a></p>
            </div>
        </div>
    </div>
</section>


  </section><!-- End Hero -->

  {{-- <main id="main"> --}}

    <!-- ======= Home Section ======= -->


    <section class="section">

      <div class="container">
        <div class="row justify-content-center text-center mb-5" data-aos="fade">
          <div class="col-md-6 mb-5">
            <img src="assets/img/j.png" alt="Image" class="img-fluid">
          </div>
        </div>
         <section class="section">
      <div class="container">

        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-5" data-aos="fade-up">
            <h2 class="section-heading">Tata Tertib Sekolah</h2>
          </div>
        </div>

        <div class="row">
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="">
            <div class="feature-1 text-center">
              <div class="">
                {{-- <i class="bi bi-people"></i> --}}
              </div>
              <h3 class="mb-3">Explore Your Team</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, optio.</p>
            </div>
          </div>
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
            <div class="feature-1 text-center">
              <div class="wrap-icon icon-1">
                <i class="bi bi-brightness-high"></i>
              </div>
              <h3 class="mb-3">Digital Whiteboard</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, optio.</p>
            </div>
          </div>
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
            <div class="feature-1 text-center">
              <div class="wrap-icon icon-1">
                <i class="bi bi-bar-chart"></i>
              </div>
              <h3 class="mb-3">Design To Development</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, optio.</p>
            </div>
          </div>
        </div>

      </div>
    </section>


        <div class="row">
          <div class="col-md-4">
            <div class="step">
              <h4>A.Kelakuan</h4>
              <p>1.Mengedarkan/mengkomsumsi miras/narkoba dan sejenisnya di sekolah (100)</p>
              <p>2.Membuat/membawa/menyebarkan dan memutar barang porno sejenis buku,flim,dll disekolah (100)</p>
              <p>3.Melakukan tindakan/kegiatan/perbuatan asusial berzina (100)</p>
              <p>4.Menganiaya/membuly/mengitimidasi guru,murid,karyawan (100)</p>
              <p>5.Melakukan tindakan pidana/terlibat tindak pidana pencopetan pemerasan dll (100)</p>
              <p>6.Mencuri/merampas hak orang lain (75)</p>
              <p>7.Berkelahi menggunakan senjata tajam dan sejenisnya (75)</p>
              <p>8.Berjudi/taruhan dan sejenisnya dilingkungan sekolah (75)</p>
              <p>9.Menonton vidio porno/vidio kekerasan (50)</p>
              <p>10.Berkelahi/terlebat dalam perkelahian tidak menggunakan senjata tajam (50)</p>
              <p>11.Memalsukan tanda tangan kepala sekolah,guru,karyawa dan setempel sekolah (50)</p>
              <p>12.Mengikuti atau menjadi anggota organisasi terlarang (50)</p>
              <p>13.Menerobos atau meloncat pagar sekolah (25)</p>
              <p>14.Mencemarkan nama baik kepala sekolah,guru,karyawan dan siswa (25)</p>
              <p>15.Berbicara/bertindak laku tidak sopan terhadap kepala sekolah,guru dankaryawan (25)</p>
              <p>16.Merusan sarana prasarana sekolah atau milik warga sekolah (25)</p>
              <p>17.Merokok/membawa rokok dan korek api disekolah (25)</p>
              <p>18.Membuat pernyataan bohong,dusta atau palsu (25)</p>
              <p>19.meninggalkan kelas/pembelajaran tampa izin guru (20)</p>
              <p>20.Mengabaikan surat panggilan  dari sekolah (20)</p>
              <p>21.Mengabaikan panggilan kepala sekolah,guru dan karyawan (20)</p>
              <p>22.Membuat gaduh atau mengganggu pembelajaran (15)</p>
              <p>23.Mencoret sarana prasarana sekolah (10)</p>
              <p>24.Berada di kantin atau di parkiran saat pelajaran tanpa seizin guru (10)</p>
              <p>25.Bermain kartu dan sejenisnya yang tidak terkait dengan pembelajaran (10)</p>
              <p>26.Meletakkan sampah tidak pada tempatnya/meludah sembarangan/merusak tanaman (5)</p>
              <p>27.Tidak memarkirkan kedaraan dengan tempat yg telah ditentukan (5)</p>
              <p>28.Menggunakan laptop/music player pada saat pembelajaran tanpa seizin guru(5)</p>
              <p>29.Mengendarai kendaraan dalam lingkungan sekolah (5)</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="step">
              <h4>B.Kerajinan</h4>
              <p>1.Tidak mengukuti upacara/atau tanpa izin (15)</p>
              <p>2.Tidak masuk sekolah tanpa keterangan (5)</p>
              <p>3.Tidak mengukuti kegiatan sekolah selain item B.1 yg telah ditentukan (5)</p>
              <p>4.Tidak mengikuti extrakulikuler wajib,pramuka tanpa keterangan (3)</p>
              <p>5.Terlambat masuk kelas (2)</p>
              <p>6.Terlambat masuk sekolah (2)</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="step">
              <h4>C.Kerapian</h4>
              <p>1.Bertato/bertindik/piercing dan sejenisnya (100)</p>
              <p>2.Memelihara rambut tidak sesuai dengan ketentuan model dan bentuk/membuat/menyusun rambuat sebagai hiasan kepala (15)</p>
              <p>3.Mengecet rambuat selain warna hitam (15)</p>
              <p>4.Memakai pakaian/bentuk pakaian kelengkapan sekolah tidak sesuai dengan ketentuan/atribut tidak lengkap (5)</p>
              <p>5.Memakai ikat pinggang/kaos kaki/sepatu tidak sesuai ketentuan (5)</p>
              <p>6.perserta didik mengunakan perhiasan gelang kalung dan sejenisnya (2)</p>
              <p>7.Siswa putri menggunakan perhiasan dan make up (2)</p>
              <p>8.Memelihara dan mewarnai kuku (2)</p>
              <p>9.Membawa jaket/sweter dalam ligkungan sekolah kecuali izin (2)</p>
            </div>
          </div>
        </div>
      </div>

    </section>

    <section class="section">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-6 ms-auto order-md-1">
              <h2 class="mb-4">Sikap Kedisiplinan</h2>
              <h4 class="mb-4">15 Contoh Sikap Kedisiplinan</h4>
              <ul class="list-group">
                <li class="list-group-item">1. Selalu tiba tepat waktu untuk mengikuti pelajaran dan kegiatan sekolah</li>
                <li class="list-group-item">2. Mengenakan seragam sekolah sesuai aturan yang berlaku</li>
                <li class="list-group-item">3. Mengerjakan tugas dan pekerjaan rumah secara tepat waktu</li>
                <li class="list-group-item">4. Membawa alat tulis dan buku pelajaran yang lengkap</li>
                <li class="list-group-item">5. Menghargai guru dan anggota staf sekolah dengan sikap sopan dan hormat</li>
                <li class="list-group-item">6. Tidak mengganggu ketenangan dan konsentrasi teman sekelas selama pelajaran berlangsung </li>
                <li class="list-group-item">7. Menjaga kebersihan dan kerapihan area kelas dan lingkungan sekolah </li>
                <li class="list-group-item">8.Mengikuti peraturan sekolah tentang penggunaan telepon seluler di lingkungan sekolah </li>
                <li class="list-group-item">9. Tidak terlibat dalam perilaku bullying atau menyakiti orang lain secara fisik atau emosional   </li>
                <li class="list-group-item">10.Mengikuti petunjuk dan arahan dari guru dan staf sekolah </li>
                <li class="list-group-item">11. Menghormati hak dan kebebasan teman sekelas tanpa memaksakan pendapat atau memaksa mereka untuk melakukan sesuatu yang tidak diinginkan</li>
                <li class="list-group-item">12. Tidak mencontek atau melakukan kecurangan selama ujian </li>
                <li class="list-group-item">13. Membantu menjaga ketertiban di kelas dan mendorong partisipasi aktif dalam pembelajaran </li>
                <li class="list-group-item">14. Tidak terlibat dalam perilaku merokok, minum-minuman beralkohol, atau menggunakan narkoba di sekolah</li>
                <li class="list-group-item">15. Menggunakan bahasa yang sopan dan tidak menggunakan kata-kata kasar atau kata-kata yang tidak pantas</li>
              </ul>
            </div>
            <div class="col-md-6" data-aos="fade-right" style="margin-top: -26em">
                <img src="assets/img/kedisplinan.jpg" alt="Image" class="img-fluid">
              </div>
          </div>
        </div>
        <div class="col-md-5" data-aos="fade-right" style="margin-top: -29em; margin-left: 9%;">
            <img src="assets/img/kedisplinan2.jpg" alt="Image" class="img-fluid">
          </div>
            </section>

    <section class="section">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-4 ms-auto order-2">
            <h2 class="mb-4">Gather Feedback</h2>
            <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur at reprehenderit optio,
              laudantium eius quod, eum maxime molestiae porro omnis. Dolores aspernatur delectus impedit incidunt
              dolore mollitia esse natus beatae.</p>
            <p><a href="#" class="btn btn-primary">Download Now</a></p>
          </div>
          <div class="col-md-6" data-aos="fade-right">
            <img src="assets/img/undraw_svg_3.svg" alt="Image" class="img-fluid">
          </div>
        </div>
      </div>
    </section>

    <!-- ======= Testimonials Section ======= -->
    <section class="section border-top border-bottom">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-4">
            <h2 class="section-heading">Review From Our Users</h2>
          </div>
        </div>
        <div class="row justify-content-center text-center">
          <div class="col-md-7">

            <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
              <div class="swiper-wrapper">

                <div class="swiper-slide">
                  <div class="review text-center">
                    <p class="stars">
                      <span class="bi bi-star-fill"></span>
                      <span class="bi bi-star-fill"></span>
                      <span class="bi bi-star-fill"></span>
                      <span class="bi bi-star-fill"></span>
                      <span class="bi bi-star-fill muted"></span>
                    </p>
                    <h3>Excellent App!</h3>
                    <blockquote>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius ea delectus pariatur, numquam
                        aperiam dolore nam optio dolorem facilis itaque voluptatum recusandae deleniti minus animi,
                        provident voluptates consectetur maiores quos.</p>
                    </blockquote>

                    <p class="review-user">
                      <img src="assets/img/person_1.jpg" alt="Image" class="img-fluid rounded-circle mb-3">
                      <span class="d-block">
                        <span class="text-black">Jean Doe</span>, &mdash; App User
                      </span>
                    </p>

                  </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                  <div class="review text-center">
                    <p class="stars">
                      <span class="bi bi-star-fill"></span>
                      <span class="bi bi-star-fill"></span>
                      <span class="bi bi-star-fill"></span>
                      <span class="bi bi-star-fill"></span>
                      <span class="bi bi-star-fill muted"></span>
                    </p>
                    <h3>This App is easy to use!</h3>
                    <blockquote>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius ea delectus pariatur, numquam
                        aperiam dolore nam optio dolorem facilis itaque voluptatum recusandae deleniti minus animi,
                        provident voluptates consectetur maiores quos.</p>
                    </blockquote>

                    <p class="review-user">
                      <img src="assets/img/person_2.jpg" alt="Image" class="img-fluid rounded-circle mb-3">
                      <span class="d-block">
                        <span class="text-black">Johan Smith</span>, &mdash; App User
                      </span>
                    </p>

                  </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                  <div class="review text-center">
                    <p class="stars">
                      <span class="bi bi-star-fill"></span>
                      <span class="bi bi-star-fill"></span>
                      <span class="bi bi-star-fill"></span>
                      <span class="bi bi-star-fill"></span>
                      <span class="bi bi-star-fill muted"></span>
                    </p>
                    <h3>Awesome functionality!</h3>
                    <blockquote>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius ea delectus pariatur, numquam
                        aperiam dolore nam optio dolorem facilis itaque voluptatum recusandae deleniti minus animi,
                        provident voluptates consectetur maiores quos.</p>
                    </blockquote>

                    <p class="review-user">
                      <img src="assets/img/person_3.jpg" alt="Image" class="img-fluid rounded-circle mb-3">
                      <span class="d-block">
                        <span class="text-black">Jean Thunberg</span>, &mdash; App User
                      </span>
                    </p>

                  </div>
                </div><!-- End testimonial item -->

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= CTA Section ======= -->
    <section class="section cta-section">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6 me-auto text-center text-md-start mb-5 mb-md-0">
            <h2>SMK Negeri 1 Kraksaan</h2>
          </div>
          <div class="col-md-5 text-center text-md-end">
            <p><a href="#" class="btn d-inline-flex align-items-center"><i class="bx bxl-apple"></i><span>App store</span></a> <a href="#" class="btn d-inline-flex align-items-center"><i class="bx bxl-play-store"></i><span>Google play</span></a></p>
          </div>
        </div>
      </div>
    </section><!-- End CTA Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer class="footer" role="contentinfo">
    <div class="container">
      <div class="row">
        <div class="col-md-4 mb-4 mb-md-0">
          <h3>Jalan Tenis No.10(Telp.0335-841306)</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius ea delectus pariatur, numquam aperiam
            dolore nam optio dolorem facilis itaque voluptatum recusandae deleniti minus animi.</p>
          <p class="social">
            <a href="#"><span class="bi bi-twitter"></span></a>
            <a href="#"><span class="bi bi-facebook"></span></a>
            <a href="#"><span class="bi bi-instagram"></span></a>
            <a href="#"><span class="bi bi-linkedin"></span></a>
          </p>
        </div>
        <div class="col-md-7 ms-auto">
          <div class="row site-section pt-0">
            <div class="col-md-4 mb-4 mb-md-0">
              <h3>Navigation</h3>
              <ul class="list-unstyled">
                <li><a href="smkn1kraksaan.sch.id">Pricing</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Contact</a></li>
              </ul>
            </div>
            <div class="col-md-4 mb-4 mb-md-0">
              <h3>Services</h3>
              <ul class="list-unstyled">
                <li><a href="#">Team</a></li>
                <li><a href="#">Collaboration</a></li>
                <li><a href="#">Todos</a></li>
                <li><a href="#">Events</a></li>
              </ul>
            </div>
            <div class="col-md-4 mb-4 mb-md-0">
              <h3>Downloads</h3>
              <ul class="list-unstyled">
                <li><a href="#">Get from the App Store</a></li>
                <li><a href="#">Get from the Play Store</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <div class="row justify-content-center text-center">
        <div class="col-md-7">
          <p class="copyright">&copy; Copyright SoftLand. All Rights Reserved</p>
          <div class="credits">
            <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=SoftLand
          -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
          </div>
        </div>
      </div>

    </div>
  </footer>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
