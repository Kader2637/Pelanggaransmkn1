<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Dashboard | Siswa</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/x.png" rel="icon">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx" crossorigin="anonymous" />
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative" style="margin-left: 4em">
                        <img src="img/x.png" alt="" style="width: 90px; height: 110px;">
                        {{-- <div class="bg-success roun/ded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div> --}}
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="{{ route('indexmurid') }}" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <div class="nav-item dropdown">
                    <a href="{{ route('pelanggaranmurid') }}" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>PELANGGARAN</a>
                    <a href="{{ route('jenispelanggar') }}" class="nav-item nav-link"><i class="fa fa-table me-2"></i>JENIS</a>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <form class="d-none d-md-flex ms-4">
                    <input class="form-control border-0" type="search" placeholder="Search">
                </form>
                <div class="navbar-nav align-items-center ms-auto">

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="{{ asset('img/'. $admin->profil) }}" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex">{{ Auth::user()->name }}</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item" id="profile-btn" data-bs-toggle="modal" data-bs-target="#mymodal">My Profile</a>
                            {{-- <a href="#" class="dropdown-item">Settings</a> --}}
                            <a href="{{ route('sigout') }}" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->
            <style>
                .profile {
                position: relative;
                display: inline-block;
              }

              .profile-image {
                width: 200px;
                height: 200px;
                object-fit: cover;
              }

              .change-profile-button {
                position: absolute;
                bottom: 10px;
                right: 6em;
                background-color: #fff;
                border-radius: 50%;
                padding: 8px;
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
              }
              </style>


                {{-- profile --}}

<style>
    .profile-modal {
        width: 400px;
    }
</style>

<div class="modal fade" data-bs-backdrop="static" id="mymodal" aria-hidden="true" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered profile-modal">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5">My Profile</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="margin-right: 1em; margin-top: 1em"></button>

            </div>
            <div class="modal-body">
                <!-- Isi konten profil Anda di sini -->
                <form action="{{ route('updateProfile') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="profile d-flex justify-content-center">
                        <img src="{{ asset('img/' . $admin->profil) }}" class="rounded-circle profile-image" id="profile-pic" />
                        <label for="fileInputA" class="change-profile-button d-flex justify-content-center" id="chooseFileButtonA">
                            <i class="fas fa-image text-primary"></i>
                        </label>
                        <input type="file" id="fileInputA" name="fileInputA" style="display:none" accept=".jpg,.png,.pdf">
                    </div>
                    <script>
                        let gambar = document.getElementById("profile-pic");
                        let inputFile = document.getElementById("fileInputA");

                        inputFile.onchange = function(){
                          gambar.src = URL.createObjectURL(inputFile.files[0]);
                        }
                      </script>

                    <div class="mb-1">
                        <label for="exampleFormControlInput1" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="name" value="{{ Auth::user()->name }}">
                    </div>

                    <div class="mb-1">
                        <label for="exampleFormControlInput2" class="form-label">Email</label>
                        <input type="email" class="form-control" id="exampleFormControlInput2" name="email" value="{{ Auth::user()->email }}">
                    </div>

                    <div class="modal-footer">
                        <button class="btn btn-danger" class="btn-close" data-bs-dismiss="modal" type="button">Batal</button>
                        <button class="btn btn-primary" type="submit" id="saveProfileButton">Simpan</button>
                    </div>
                </form>
            </div>
            <script>
                document.getElementById('chooseFileButtonA').addEventListener('click', function() {
                    document.getElementById('fileInputA').click();
                });

                document.getElementById('fileInputA').addEventListener('change', function() {
                    var selectedFile = this.files[0];
                    // Lakukan sesuatu dengan file yang dipilih, misalnya mengunggahnya ke server
                    console.log('Selected file:', selectedFile);
                });

                $(document).ready(function() {
                    $('.change-profile-button').on('click', function(e) {
                        e.preventDefault();
                        // Tambahkan kode yang ingin Anda jalankan ketika tombol perubahan profil diklik
                        // Misalnya, tampilkan dialog atau tampilkan form perubahan profil
                    });
                });

                document.getElementById("fileInputA").addEventListener("change", function(event) {
                    var input = event.target;
                    if (input.files && input.files[0]) {
                        var reader = new FileReader();
                        reader.onload = function(e) {
                            document.getElementById("profile-image").setAttribute("src", e.target.result);
                        };
                        reader.readAsDataURL(input.files[0]);
                    }
                });
            </script>
        </div>
    </div>
    </div>
            {{-- end profile --}}


            <!-- Sale & Revenue Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-line fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Point</p>
                                <h6 class="mb-0">75</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-bar fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Pelanggaran</p>
                                <h6 class="mb-0">5</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-area fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Alpha</p>
                                <h6 class="mb-0">12</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-pie fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Telat</p>
                                <h6 class="mb-0">10</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sale & Revenue End -->


            <!-- Sales Chart Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light text-center rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0">Rekap Keseluruhan</h6>
                            </div>
                            @if($murid)
                            {{-- @if($hadir || $ijin || $sakit || $alpha) --}}
                            <div id="chartContainer" style="margin-left: 2cm"></div>
                            <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
                            <script>
                                document.addEventListener("DOMContentLoaded", function () {
                                    var data = [
                                        {
                                            jenis: "Point",
                                            jumlah: 75
                                        },
                                        {
                                            jenis: "Pelanggar",
                                            jumlah: 5
                                        },
                                        {
                                            jenis: "Alpha",
                                            jumlah: 12
                                        },
                                        {
                                            jenis: "Telat",
                                            jumlah: 10
                                        }
                                    ];

                                    var labels = data.map(function (item) {
                                        return item.jenis;
                                    });

                                    var series = data.map(function (item) {
                                        return item.jumlah;
                                    });

                                    var options = {
                                        chart: {
                                            type: 'pie',
                                            height: 350
                                        },
                                        labels: labels,
                                        series: series,
                                        responsive: [{
                                            breakpoint: 480,
                                            options: {
                                                chart: {
                                                    width: 200
                                                },
                                                legend: {
                                                    position: 'bottom'
                                                }
                                            }
                                        }]
                                    }

                                    var chart = new ApexCharts(
                                        document.querySelector("#chartContainer"),
                                        options
                                    );

                                    chart.render();
                                });
                            </script>
                        @else
                            <div class="d-flex flex-column h-100 justify-content-center align-items-center" style="margin-top: -3em">
                                <img src="gambar/empty-icon/empty-directory.png" class="w-25">
                                <p>Tidak ada data tersedia</p>
                            </div>
                        @endif
                        </div>
                    </div>
                    <style>
           /* Gaya tambahan untuk tampilan chat */
           .chat-container {
            max-height: 400px;
            overflow-y: auto;
            border: 1px solid #ccc;
            border-radius: 10px;
            padding: 10px;
        }

        .chat-message {
            margin: 10px 0;
            padding: 10px;
            border-radius: 10px;
        }

        .sender {
            background-color: #f2f2f2;
            color: #333;
        }

        .receiver {
            background-color: #4caf50;
            color: #fff;
        }

        /* Animasi untuk pesan baru */
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        .new-message {
            animation: fadeIn 0.5s ease-in-out;
        }
    </style>
                   <div class="col-sm-12 col-xl-6">
                    <div class="bg-light text-center rounded p-4">
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <h6 class="mb-0">Hubungi Kami</h6>
                        </div>
                        <!-- Tampilan chat -->
                        <div class="chat-container">
                            <div class="chat-message sender">Haloo Teman-teman</div>
                            <div class="chat-message receiver new-message">Hai! bagaimana Saya Bisa Membantu Anda?</div>
                            <!-- Tambahkan pesan chat sesuai kebutuhan -->
                        </div>
                        <!-- Form untuk menambahkan pesan baru -->
                        <form class="mt-3">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Ketik pesan...">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-primary"><i class="fas fa-paper-plane"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js"></script>
            <!-- Sales Chart End -->



            {{-- <!-- Footer Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="#">Your Site Name</a>, All Right Reserved.
                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-end">
                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            Designed By <a href="https://htmlcodex.com">HTML Codex</a>
                        </br>
                        Distributed By <a class="border-bottom" href="https://themewagon.com" target="_blank">ThemeWagon</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End --> --}}
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
