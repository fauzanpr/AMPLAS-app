<head>
    <link href="../../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="../../assets/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="../../assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="../../assets/css/tukang-profile.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <title>Klien | {{ $title }}</title>
</head>

<body>
    @include('layouts.partials.navbar')
    <div>
        <div>
            <!-- Profile widget -->
            <div class="bg-white overflow-hidden">
                <div class="cover">
                    <div class="media align-items-end profile-head ml-5">
                        <div class="profile mr-3"><img src="{{ asset('assets/faces/face1.jpg') }}" alt="..." width="130"
                                class="rounded-circle img-thumbnail"></div>
                        <div class="mb-0 text-white">
                            <h2 class="mt-0 mb-3">Angga Syahputra</h2>
                            <h5 class="mt-3 mb-2 text-dark">Tukang Elektronik</h5>
                            <p class="small mb-4 text-primary">Nganjuk</p>
                        </div>
                    </div>
                </div>
                <div class="ml-4 p-4 d-flex justify-content-end text-center">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item">
                            <a href="#" class="btn btn-primary btn-sm btn-block pl-3 pr-3 pt-3 pb-3 " data-toggle="modal" data-target="#form1">Ajukan
                                Pekerjaan</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#"
                                class="btn btn-outline-primary btn-sm btn-block pl-3 pr-3 pt-3 pb-3 " data-toggle="modal" data-target="#form2">Laporkan</a>
                        </li>
                    </ul>
                </div>
                <div class="ml-4 p-4 d-flex justify-content-start text-center">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item">
                            <a href="{{ route('klien.tukang.about') }}"
                                class="btn btn-outline-primary btn-sm btn-block pl-3 pr-3 pt-3 pb-3 ">Tentang</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="{{ route('klien.tukang.portofolio') }}"
                                class="btn btn-outline-primary btn-sm btn-block pl-3 pr-3 pt-3 pb-3">Portofolio</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="{{ route('klien.tukang.rating') }}"
                                class="btn btn-outline-primary btn-sm btn-block pl-3 pr-3 pt-3 pb-3">Penilaian</a>
                        </li>
                    </ul>
                </div>
                {{-- Ajukan Pekerjaan modal --}}
                <div class="modal fade" id="form1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="text-right cross d-flex">
                                <h3 class="text-dark col-11 justify-content-left" align="left">Form Pekerjaan</h3>
                                <i class="fa fa-times ml-3 mt-1"></i>
                            </div>
                            <div class="card-body text-center">
                                <div class="comment-box text-left">
                                    <form action="">
                                        <div class="form-group">
                                            <label for="job_name" class="text-dark">Nama Pekerjaan</label>
                                            <input type="text" class="form-control" name="job_name" id="job_name" placeholder="Masukkan nama pekerjaan yang diajukan">
                                        </div>
                                        <div class="form-group">
                                            <label for="damage" class="text-dark">Kerusakan</label>
                                            <input type="text" class="form-control" name="damage" id="damage" placeholder="Masukkan kerusakan yang perlu diperbaiki">
                                        </div>
                                        <div class="form-group">
                                            <label for="desc" class="text-dark">Deskripsi Pekerjaan</label>
                                            <textarea name="desc" class="form-control" placeholder="Masukkan deskripsi pekerjaan" rows="4"></textarea>
                                        </div>
                                        <div class="text-center mt-4 "> <button
                                                class="btn btn-primary send px-5 font-weight-bold">Kirim</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Laporkan modal --}}
                <div class="modal fade" id="form2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="text-right cross d-flex">
                                <h3 class="text-dark col-11 justify-content-left" align="left">Form Laporkan</h3>
                                <i class="fa fa-times ml-3 mt-1"></i>
                            </div>
                            <div class="card-body text-center">
                                <div class="comment-box text-center">
                                    <form action="">
                                        <div class="comment-area">
                                            <textarea class="form-control" name="report" placeholder="Masukkan pelanggaran yang dilakukan tukang" rows="6"></textarea>
                                        </div>
                                        <div class="text-center mt-4 "> <button
                                                class="btn btn-primary send px-5 font-weight-bold">Kirim</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                @yield('container')

            </div>
        </div>
</body>