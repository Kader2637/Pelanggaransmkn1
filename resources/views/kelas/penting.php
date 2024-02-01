<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>WEB KEDISPLINAN</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/x.png" rel="icon">

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
                    <a href="{{ route('dashboard') }}" class="nav-item nav-link "><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <div class="nav-item dropdown">
                    <a href="{{ route('siswaa') }}" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>USER</a>
                    <a href="{{ route('kelas.index') }}" class="nav-item nav-link active"><i class="fa fa-keyboard me-2"></i>KELAS</a>
                    <a href="{{ route('siswa.index') }}" class="nav-item nav-link"><i class="fa fa-th me-2"></i>SISWA</a>
                    <a href="{{ route('jenispelanggaran.index') }}" class="nav-item nav-link"><i class="fa fa-table me-2"></i>JENIS</a>
                    <a href="{{ route('pelanggaran.index') }}" class="nav-item nav-link"><i class="fa fa-table me-2"></i>PELANGGARAN</a>
                    {{-- <a href="chart.html" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>JENIS PELANGGARAN</a> --}}
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
                            <i class="fa fa-envelope me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Message</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/x.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/x.png" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/x.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">See all message</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-bell me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Notificatin</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Profile updated</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">New user added</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Password changed</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">See all notifications</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex">AndreJr</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">My Profile</a>
                            <a href="#" class="dropdown-item">Settings</a>
                            <a href="#" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->

            <div class="content-wrapper">

                <div class="container-fluid">
                    <!-- The Modal -->
                <div class="modal" id="myModal">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Tambah Data</h4>
                                <button type="button" class="close btn btn-light" data-dismiss="modal">&times;</button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                <body>
                                    <form action="{{ route('kelas.store') }}" enctype="multipart/form-data" method="POST">
                                    @csrf
                                    <div class="mb-3">
                                        <label>ID Kelas</label>
                                        <div class="mb-3">
                                            <input type="number" name="idkelas" class="form-control @error('idkelas')is-invalid @enderror" placeholder="masukkan idkelas anda">
                                            @error('idkelas')
                                                <div class="alert alert-danger mt-2">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label>kelas</label>
                                        <div class="mb-3">
                                            <input type="text" name="kelas" class="form-control @error('kelas')is-invalid @enderror" placeholder="masukkan kelas anda">
                                            @error('kelas')
                                                <div class="alert alert-danger mt-2">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                </div>

                                <!-- Modal footer -->
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">SIMPAN</button>
                                    <button type="reset" class="btn btn-warning">RESET</button>
                                    {{-- <a href="http://127.0.0.1:8000/barang" class="btn btn-danger">CANCEL</a> --}}
                                </div>
                            </form>
                            </body>

                        </div>
                    </div>
                </div>
                <!-- Include Bootstrap JS and jQuery -->
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
                <div class="d-flex justify-content-between mt-3">
                    <div class="">
                        <h5>
                            Data Kelas
                        </h5>
                    </div>
                    <div class="">
                        <button type="button" class="btn btn-outline-primary" style="margin-left: 1em" data-toggle="modal" data-target="#myModal">TAMBAH</button>
                    </div>
                </div>
{{-- <table class="table table-striped mt-4" >
    <thead style="background-color: rgb(173, 216, 230)">

        <tr>
            <th>ID KELAS</th>
            <th>KELAS</th>
            <th>AKSI</th>
        </tr>
    </thead> --}}
    {{-- <tbody>
    <tr>
        @forelse ($kelas as $item )
        <td>{{ $item->idkelas }}</td>
        <td>{{ $item->kelas }}</td>
        <td>
            <form action="{{ route('kelas.destroy', $item->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm">
                    <i class="fas fa-trash"></i>
                </button>
            <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#myModal12{{ $item->id }}">
                <i class="fas fa-edit"></i>
            </button>
            </form> --}}
                  <!-- The Modal -->
                  {{-- <div class="modal" id="myModal12{{ $item->id }}">
                    <div class="modal-dialog">
                        <div class="modal-content"> --}}
                            <!-- Modal Header -->
                            {{-- <div class="modal-header">
                                <h4 class="modal-title">Edit Data</h4>
                                <button type="button" class="close btn btn-light" data-dismiss="modal">&times;</button>
                            </div> --}}


                            <!-- Modal body -->
                            {{-- <div class="modal-body">
                                <body>
                                    <form action="{{ route('kelas.update', $item->id) }}" enctype="multipart/form-data" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="mb-3">
                                        <label>ID KELAS</label>
                                        <div class="mb-3">
                                            <input type="number" name="idkelas" value="{{ old('idkelas', $item->idkelas) }}" class="form-control @error('idkelas')is-invalid @enderror" placeholder="masukkan idkelas anda">
                                            @error('idkelas')
                                                <div class="alert alert-danger mt-2">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label>KELAS</label>
                                        <div class="mb-3">
                                            <input type="text" name="kelas" value="{{ old('kelas', $item->kelas) }}" class="form-control @error('kelas')is-invalid @enderror" placeholder="masukkan kelas anda">
                                            @error('kelas')
                                                <div class="alert alert-danger mt-2">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <!-- Modal footer -->
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">SIMPAN</button>
                                    <button type="reset" class="btn btn-warning">RESET</button> --}}
                                    {{-- <a href="http://127.0.0.1:8000/barang" class="btn btn-danger">CANCEL</a> --}}
                                {{-- </div>
                            </form>
                            </body>

                        </div>
                    </div>
                </div>
        </td>
        </tr>
        @empty
<tr>
    <td colspan="6">
        <div class="alert alert-danger mt-2">
data tidak tersedia!
        </div>
    </td>
</tr>
        @endforelse

    </tr>
</tbody>

</table> --}}
<div class="row mt-3">
    @forelse ($kelas as $data)
    <div class="col-lg-4">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="70" height="57"
                                        viewBox="0 0 94 57" fill="none">
                                        <g clip-path="url(#clip0_3654_3388)">
                                            <path
                                                d="M64.8108 3.03665C65.0628 2.34326 65.5174 1.74303 66.1148 1.31498C66.712 0.88693 67.4237 0.651132 68.1565 0.638621H91.028C91.4231 0.623732 91.8168 0.696409 92.1811 0.85153C92.5454 1.00665 92.8714 1.24043 93.1363 1.53638C93.4011 1.83232 93.5983 2.18322 93.714 2.56431C93.8294 2.94539 93.8605 3.34742 93.8051 3.74195L87.8965 53.6918C87.7711 54.5422 87.3497 55.3198 86.7074 55.8857C86.0651 56.4517 85.244 56.7689 84.3908 56.7807H11.8194C11.4255 56.796 11.0331 56.7237 10.6699 56.5697C10.3066 56.4154 9.9813 56.1831 9.71681 55.8886C9.45236 55.5941 9.25513 55.2449 9.13907 54.8652C9.02304 54.4858 8.99096 54.085 9.0451 53.6918L13.9994 11.7248C14.1248 10.8745 14.5463 10.0968 15.1886 9.53091C15.8308 8.965 16.652 8.64775 17.5051 8.63589H56.9965C58.7077 8.6065 60.3702 8.05587 61.7648 7.05647C63.1597 6.05707 64.2214 4.65568 64.8108 3.03665Z"
                                                fill="url(#paint0_linear_3654_3388)" />
                                            <path
                                                d="M64.8108 3.03665C65.0628 2.34326 65.5174 1.74303 66.1148 1.31498C66.712 0.88693 67.4237 0.651132 68.1565 0.638621H91.028C91.4231 0.623732 91.8168 0.696409 92.1811 0.85153C92.5454 1.00665 92.8714 1.24043 93.1363 1.53638C93.4011 1.83232 93.5983 2.18322 93.714 2.56431C93.8294 2.94539 93.8605 3.34742 93.8051 3.74195L87.8965 53.6918C87.7711 54.5422 87.3497 55.3198 86.7074 55.8857C86.0651 56.4517 85.244 56.7689 84.3908 56.7807H11.8194C11.4255 56.796 11.0331 56.7237 10.6699 56.5697C10.3066 56.4154 9.9813 56.1831 9.71681 55.8886C9.45236 55.5941 9.25513 55.2449 9.13907 54.8652C9.02304 54.4858 8.99096 54.085 9.0451 53.6918L13.9994 11.7248C14.1248 10.8745 14.5463 10.0968 15.1886 9.53091C15.8308 8.965 16.652 8.64775 17.5051 8.63589H56.9965C58.7077 8.6065 60.3702 8.05587 61.7648 7.05647C63.1597 6.05707 64.2214 4.65568 64.8108 3.03665Z"
                                                fill="white" fill-opacity="0.15" />
                                            <path d="M10.3516 54.4817H86.183L90.503 3.07227H14.6744L10.3516 54.4817Z"
                                                fill="#F0F0F0" />
                                            <path d="M10.3516 54.4817H86.183L89.3087 3.07227H14.6744L10.3516 54.4817Z"
                                                fill="#E0E0E0" />
                                            <path d="M10.3516 54.4811H86.183L88.7887 1.43945H12.9601L10.3516 54.4811Z"
                                                fill="#F0F0F0" />
                                            <path d="M10.3516 54.4811H86.183L87.2144 1.43945H12.9601L10.3516 54.4811Z"
                                                fill="#E0E0E0" />
                                            <path d="M10.3516 54.4811H86.183L86.6344 0H10.8058L10.3516 54.4811Z"
                                                fill="#F0F0F0" />
                                            <path d="M10.3509 54.4817H86.1823L84.6252 1.03125H9.28516L10.3509 54.4817Z"
                                                fill="#E0E0E0" />
                                            <path d="M10.3501 54.4811H86.1816L83.9301 1.43945H8.10156L10.3501 54.4811Z"
                                                fill="#F0F0F0" />
                                            <path d="M10.3524 54.4816H86.1838L82.5981 2.24023H6.76953L10.3524 54.4816Z"
                                                fill="#E0E0E0" />
                                            <path d="M10.3496 54.4807H86.181L82.0239 2.68555H6.19531L10.3496 54.4807Z"
                                                fill="#F0F0F0" />
                                            <path
                                                d="M48.3254 6.28055C48.3297 5.94652 48.4006 5.61679 48.534 5.31094C48.6671 5.00513 48.8603 4.72943 49.1014 4.50033C49.3428 4.27121 49.6274 4.09333 49.9383 3.97732C50.2491 3.8613 50.58 3.80945 50.9111 3.82494H73.7826C74.668 3.8592 75.5171 4.18876 76.1968 4.7619C76.8763 5.33504 77.3477 6.11931 77.5369 6.99161L86.574 53.628C86.9111 55.3754 85.7797 56.7946 84.0454 56.7946H11.474C9.73684 56.7946 8.04541 55.3754 7.71684 53.628L0.262555 15.1818C-0.0745883 13.4343 1.05684 12.0151 2.79113 12.0151H42.2854C45.714 12.0151 48.2083 9.63721 48.3254 6.28055Z"
                                                fill="url(#paint1_linear_3654_3388)" />
                                        </g>
                                        <defs>
                                            <linearGradient id="paint0_linear_3654_3388" x1="11.3432" y1="8.9709"
                                                x2="97.5406" y2="31.6767" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#51B6FF" />
                                                <stop offset="1" stop-color="#4F7CFF" />
                                            </linearGradient>
                                            <linearGradient id="paint1_linear_3654_3388" x1="2.57108" y1="11.6854"
                                                x2="89.4731" y2="36.4111" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#51B6FF" />
                                                <stop offset="1" stop-color="#4F7CFF" />
                                            </linearGradient>
                                            <clipPath id="clip0_3654_3388">
                                                <rect width="94" height="57" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                    </div>
                    <div class="">
                        <div class="dropdown">
                            <a class="btn btn-transparant " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                                    <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                                  </svg>
                            </a>

                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="#">Action</a></li>
                              <li><a class="dropdown-item" href="#">Another action</a></li>
                              <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                          </div>
                    </div>
                </div>
                <div class="">
                    <p class="fs-9  text-center mt-4" style="font-weight: 700">
                        {{ $data->kelas }}
                    </p>
                </div>
            </div>
        </div>
    </div>
    @empty

    @endforelse
</div>
</div>

</div>


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
