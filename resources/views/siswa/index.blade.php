<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>TAMBAH SISWA | ADMIN</title>
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
        <div id="spinner"
            class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
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
                    <a href="{{ route('dashboard') }}" class="nav-item nav-link "><i
                            class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <div class="nav-item dropdown">
                        <a href="{{ route('siswaa') }}" class="nav-item nav-link"><i
                                class="fa fa-user me-2"></i>USER</a>
                        <a href="{{ route('kelas.index') }}" class="nav-item nav-link"><i
                                class="fa fa-keyboard me-2"></i>KELAS</a>
                        <a href="{{ route('siswa.index') }}" class="nav-item nav-link active"><i
                                class="fa fa-user-plus me-2"></i>SISWA</a>
                        <a href="{{ route('jenispelanggaran.index') }}" class="nav-item nav-link"><i
                                class="fa fa-table me-2"></i>JENIS</a>
                        <a href="{{ route('pelanggaran.index') }}" class="nav-item nav-link"><i
                                class="fa fa-table me-2"></i>PELANGGARAN</a>
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
                    {{-- <div class="nav-item dropdown">
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
                    </div> --}}
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="img/user.jpg" alt=""
                                style="width: 40px; height: 40px;">
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

                    <!-- Modal -->
                    <!-- Select2 CSS -->
                    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css"
                        rel="stylesheet" />

                    <!-- jQuery -->
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
                    <!-- Select2 -->
                    <link rel="stylesheet" href="{{ asset('dist/libs/select2/dist/css/select2.min.css') }}">
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

                    <button type="button" class="btn rounded-pill btn-primary" style="margin-top: 1em"
                        data-toggle="modal" data-target="#myModal">Tambah</button>
                    <!-- The Modal -->
                    <div class="modal" id="myModal">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title">Tambah Data</h4>
                                    <button type="button" class="close btn btn-light"
                                        data-dismiss="modal">&times;</button>
                                </div>

                                <!-- Modal body -->
                                <div class="modal-body">

                                    <form action="{{ route('siswa.store') }}" enctype="multipart/form-data"
                                        method="POST">
                                        @csrf

                                        <div class="mb-3">
                                            <label>Nis</label>
                                            <div class="">
                                                <select id="single" class="form-select">
                                                    @foreach ($nis as $item)
                                                        <option value="{{ $item->nis }}" data-name="{{ $item->name }}">
                                                            {{ $item->nis }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                <script>
                                                        $("#single").select2({
                                                            dropdownParent: $("#myModal")
                                                        });
                                                </script>
                                                <!-- error message untuk jenis -->
                                                @error('nis')
                                                    <div class="alert alert-danger mt-2">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label fw-bold">Nama</label>
                                            <div class="mb-3">
                                                <select name="name" id="name" class="form-control" readonly>
                                                    <option value=""></option>
                                                </select>
                                                <!-- error message untuk title -->
                                                @error('name')
                                                    <div class="alert alert-danger mt-2">
                                                        Harap di isi
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>



                                        <div class="mb-3">
                                            <label class="form-label fw-bold">Kelas </label>
                                            <div class="mb-3">
                                                <select name="kelas" id="kelas" class="form-select">
                                                    @forelse ($kelas as $item)
                                                    <option disabled selected>Pilih Kelas</option>
                                                    <option value="{{ $item->kelas }}"
                                                        @if ($item->kelas == old('kelas', $data->kelas ?? '')) selected @endif>
                                                        {{ $item->kelas }}</option>
                                                    @empty
                                                        <option value="" disabled selected>Data kelas kosong</option>
                                                    @endforelse
                                                </select>
                                                <!-- error message untuk idkelas -->
                                                @error('kelas')
                                                    <div class="alert alert-danger mt-2">
                                                        Idkelas tidak boleh kosong!
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label fw-bold">Jenis Kelamin</label><br>
                                            <input type="radio" value="laki-laki" name="kelamin">&nbsp;
                                            laki-laki &nbsp;
                                            <input type="radio" value="perempuan" name="kelamin">&nbsp;
                                            perempuan &nbsp;
                                            <!-- error message untuk title -->
                                            @error('kelamin')
                                                <div class="alert alert-danger mt-2">
                                                    Input data dengan benar!
                                                </div>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label>No Tlp</label>
                                            <input type="text" name="notlp"
                                                class="form-control @error('notlp') is-invalid @enderror"
                                                placeholder="Masukkan No Tlp Anda"
                                                value="{{ old('notlp', $data->notlp ?? '') }}">
                                            @error('notlp')
                                                <div class="alert alert-danger mt-2">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>

                                        <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
                                        <script>
                                            CKEDITOR.replace('content');

                                            // Menambahkan event listener pada select NIS
                                            document.getElementById('nis').addEventListener('change', function() {
                                                // Mendapatkan data dari barang yang dipilih
                                                var selectedOption = this.options[this.selectedIndex];
                                                var name = selectedOption.getAttribute('data-name');

                                                // Mengisi value pada select Nama, Kelas, dan Jurusan
                                                document.getElementById('name').innerHTML = '<option value="' + name + '">' + name + '</option>';
                                            });
                                        </script>


                                </div>

                                <!-- Modal footer -->
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">SIMPAN</button>
                                    <button type="reset" class="btn btn-warning">RESET</button>
                                    {{-- <a href="http://127.0.0.1:8000/barang" class="btn btn-danger">CANCEL</a> --}}
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- Include Bootstrap JS and jQuery -->
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
                    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
                    <table class="table table-striped mt-4">

                        <tr>
                            <th>NIS</th>
                            <th>NAMA</th>
                            <th>KELAS</th>
                            <th>JENIS KELAMIN</th>
                            <th>NO TELEPHONE</th>
                            <th>AKSI</th>
                        </tr>
                        <tr>
                            @forelse ($siswa as $item )
                                <td>{{ $item->nis }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->kelas }}</td>
                                <td>{{ $item->kelamin }}</td>
                                <td>{{ $item->notlp }}</td>
                                <td>

                                    <form action="{{ route('siswa.destroy', $item->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-sm">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                                            data-target="#myModal1{{ $item->id }}">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                    </form>
                        </tr>
                        <!-- The Modal -->
                        <div class="modal" id="myModal1{{ $item->id }}">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title">Edit Data</h4>
                                        <button type="button" class="close btn btn-light"
                                            data-dismiss="modal">&times;</button>
                                    </div>


                                    <!-- Modal body -->
                                    <div class="modal-body">

                                        <body>
                                            <form action="{{ route('siswa.update', $item->id) }}"
                                                enctype="multipart/form-data" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <div class="mb-3">
                                                    <label>NIS</label>
                                                    <div class="mb-3">
                                                        <input type="number" name="nis"
                                                            value="{{ old('nis', $item->nis) }}"
                                                            class="form-control @error('nis')is-invalid @enderror"
                                                            placeholder="masukkan nis anda">
                                                        @error('nis')
                                                            <div class="alert alert-danger mt-2">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label>Nama</label>
                                                    <div class="mb-3">
                                                        <input type="text" name="nama"
                                                            value="{{ old('nama', $item->nama) }}"
                                                            class="form-control @error('nama')is-invalid @enderror"
                                                            placeholder="masukkan nama anda">
                                                        @error('nama')
                                                            <div class="alert alert-danger mt-2">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>


                                                <div class="mb-3">
                                                    <label class="form-label fw-bold">Kelas</label>
                                                    <div class="mb-3">
                                                        <select name="kelas" id="kelas" class="form-select">
                                                            <option disabled>Pilih Kelas</option>
                                                            @foreach ($kelas as $jenisItem)
                                                                <option value="{{ $jenisItem->kelas }}"
                                                                    {{ $jenisItem->kelas == $item->kelas ? 'selected' : '' }}>
                                                                    {{ $jenisItem->kelas }}</option>
                                                            @endforeach
                                                        </select>
                                                        @error('kelas')
                                                            <div class="alert alert-danger mt-2">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div>



                                                        <div class="mb-3">
                                                            <label class="form-label fw-bold">Jenis Kelamin</label><br>
                                                            <input type="radio" value="laki-laki" name="kelamin"
                                                                {{ old('kelamin', $item->kelamin) == 'laki-laki' ? 'checked' : '' }}>&nbsp;
                                                            laki-laki &nbsp;
                                                            <input type="radio" value="perempuan" name="kelamin"
                                                                {{ old('kelamin', $item->kelamin) == 'perempuan' ? 'checked' : '' }}>&nbsp;
                                                            perempuan &nbsp;
                                                            <!-- error message untuk kelamin -->
                                                            @error('kelamin')
                                                                <div class="alert alert-danger mt-2">
                                                                    Input data dengan benar!
                                                                </div>
                                                            @enderror
                                                        </div>

                                                        <div class="mb-3">
                                                            <label>No Telephone</label>
                                                            <div class="mb-3">
                                                                <input type="text" name="notlp"
                                                                    value="{{ old('notlp', $item->notlp) }}"
                                                                    class="form-control @error('notlp')is-invalid @enderror"
                                                                    placeholder="masukkan notlp">
                                                                @error('notlp')
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
                            </td>
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

                    </table>
                </div>

            </div>


            <!-- Back to Top -->
            <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i
                    class="bi bi-arrow-up"></i></a>
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
