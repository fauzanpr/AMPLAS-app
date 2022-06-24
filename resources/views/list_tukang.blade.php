<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Untitled</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/list-tukang.css">
    <link href="../../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="../../assets/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="../../assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="../../assets/css/tukang-profile.css" rel="stylesheet">
</head>

<body>

    @include('layouts.partials.navbar')

    <div class="container-fluid">
        <div class="container">
            <div class="row height d-flex justify-content-center align-items-center ">
                <div class="col-md-7">
                    <div class="search d-flex mb-4 mt-4">
                        <input type="text" class="form-control" placeholder="Username atau Nama Pengguna">
                        <button class="btn btn-primary ml-3">Search</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mx-5">
            <div class="col-md-3 col-lg-3 item mb-3">
                <a href="{{  route('klien.tukang.about') }}" style="text-decoration:none;">
                    <div class="card shadow" style="background-color: #e3e3e3; border: gray 1px;">
                        <div class="pl-3 pb-2 mt-2">
                            <i class="fa fa-trophy pl-5" style="margin-left: 100px" aria-hidden="true"></i>
                            <span style="font-weight: bold; padding-left:20px">Silver</span>
                        </div>
                        <div class="d-flex">
                            <img class="rounded-circle ml-3 mb-2" src="{{ asset('assets/faces/face1.jpg') }}"
                                style="max-width: 100px; max-height:100px; margin-right: 10px;">
                            <div class="mt-3" align="left">
                                <h3 class="text-dark">Angga Syahputra</h3>
                                <h6 class="text-dark">Tukang Elektronik</h6>
                            </div>
                        </div>
                        <div class="d-flex mb-2 justify-content-start">
                            <div class="col-7 ml-0"><i class="fa fa-map-marker pr-3" aria-hidden="true"></i>Nganjuk
                            </div>
                            <div class="col-5 pl-3"><i class="fa fa-star pr-3 text-warning" aria-hidden="true"></i>3/5
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-lg-3 item mb-3">
                <a href="{{  route('klien.tukang.about') }}" style="text-decoration:none;">
                    <div class="card shadow" style="background-color: #e3e3e3; border: gray 1px;">
                        <div class="pl-3 pb-2 mt-2">
                            <i class="fa fa-trophy pl-5" style="margin-left: 100px" aria-hidden="true"></i>
                            <span style="font-weight: bold; padding-left:20px">Bronze</span>
                        </div>
                        <div class="d-flex">
                            <img class="rounded-circle ml-3 mb-2" src="{{ asset('assets/faces/face3.jpg') }}"
                                style="max-width: 100px; max-height:100px; margin-right: 10px;">
                            <div class="mt-3" align="left">
                                <h3 class="text-dark">Ahmad Kurniawan</h3>
                                <h6 class="text-dark">Tukang Air</h6>
                            </div>
                        </div>
                        <div class="d-flex mb-2 justify-content-start">
                            <div class="col-7 ml-0"><i class="fa fa-map-marker pr-3" aria-hidden="true"></i>Kediri
                            </div>
                            <div class="col-5 pl-3"><i class="fa fa-star pr-3 text-warning" aria-hidden="true"></i>4/5
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-lg-3 item mb-3">
                <a href="{{  route('klien.tukang.about') }}" style="text-decoration:none;">
                    <div class="card shadow" style="background-color: #e3e3e3; border: gray 1px;">
                        <div class="pl-3 pb-2 mt-2">
                            <i class="fa fa-trophy pl-5" style="margin-left: 100px" aria-hidden="true"></i>
                            <span style="font-weight: bold; padding-left:20px">Gold</span>
                        </div>
                        <div class="d-flex">
                            <img class="rounded-circle ml-3 mb-2" src="{{ asset('assets/faces/face4.jpg') }}"
                                style="max-width: 100px; max-height:100px; margin-right: 10px;">
                            <div class="mt-3" align="left">
                                <h3 class="text-dark">Ariansyah Dwi</h3>
                                <h6 class="text-dark">Tukang Elektronik</h6>
                            </div>
                        </div>
                        <div class="d-flex mb-2 justify-content-start">
                            <div class="col-7 ml-0"><i class="fa fa-map-marker pr-3" aria-hidden="true"></i>Jombang
                            </div>
                            <div class="col-5 pl-3"><i class="fa fa-star pr-3 text-warning" aria-hidden="true"></i>3/5
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-lg-3 item mb-3">
                <a href="{{  route('klien.tukang.about') }}" style="text-decoration:none;">
                    <div class="card shadow" style="background-color: #e3e3e3; border: gray 1px;">
                        <div class="pl-3 pb-2 mt-2">
                            <i class="fa fa-trophy pl-5" style="margin-left: 100px" aria-hidden="true"></i>
                            <span style="font-weight: bold; padding-left:20px">Silver</span>
                        </div>
                        <div class="d-flex">
                            <img class="rounded-circle ml-3 mb-2" src="{{ asset('assets/faces/face2.jpg') }}"
                                style="max-width: 100px; max-height:100px; margin-right: 10px;">
                            <div class="mt-3" align="left">
                                <h3 class="text-dark">Anita Dewi Saputri</h3>
                                <h6 class="text-dark">Tukang Elektronik</h6>
                            </div>
                        </div>
                        <div class="d-flex mb-2 justify-content-start">
                            <div class="col-7 ml-0"><i class="fa fa-map-marker pr-3" aria-hidden="true"></i>Nganjuk
                            </div>
                            <div class="col-5 pl-3"><i class="fa fa-star pr-3 text-warning" aria-hidden="true"></i>5/5
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-lg-3 item mb-3">
                <a href="{{  route('klien.tukang.about') }}" style="text-decoration:none;">
                    <div class="card shadow" style="background-color: #e3e3e3; border: gray 1px;">
                        <div class="pl-3 pb-2 mt-2">
                            <i class="fa fa-trophy pl-5" style="margin-left: 100px" aria-hidden="true"></i>
                            <span style="font-weight: bold; padding-left:20px">Silver</span>
                        </div>
                        <div class="d-flex">
                            <img class="rounded-circle ml-3 mb-2" src="{{ asset('assets/faces/face6.jpg') }}"
                                style="max-width: 100px; max-height:100px; margin-right: 10px;">
                            <div class="mt-3" align="left">
                                <h3 class="text-dark">Nadya Putri Laksani</h3>
                                <h6 class="text-dark">Tukang Air</h6>
                            </div>
                        </div>
                        <div class="d-flex mb-2 justify-content-start">
                            <div class="col-7 ml-0"><i class="fa fa-map-marker pr-3" aria-hidden="true"></i>Kediri
                            </div>
                            <div class="col-5 pl-3"><i class="fa fa-star pr-3 text-warning" aria-hidden="true"></i>3/5
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-lg-3 item mb-3">
                <a href="{{  route('klien.tukang.about') }}" style="text-decoration:none;">
                    <div class="card shadow" style="background-color: #e3e3e3; border: gray 1px;">
                        <div class="pl-3 pb-2 mt-2">
                            <i class="fa fa-trophy pl-5" style="margin-left: 100px" aria-hidden="true"></i>
                            <span style="font-weight: bold; padding-left:20px">Gold</span>
                        </div>
                        <div class="d-flex">
                            <img class="rounded-circle ml-3 mb-2" src="{{ asset('assets/faces/face7.jpg') }}"
                                style="max-width: 100px; max-height:100px; margin-right: 10px;">
                            <div class="mt-3" align="left">
                                <h3 class="text-dark">Yoga Anggara</h3>
                                <h6 class="text-dark">Tukang Bangunan</h6>
                            </div>
                        </div>
                        <div class="d-flex mb-2 justify-content-start">
                            <div class="col-7 ml-0"><i class="fa fa-map-marker pr-3" aria-hidden="true"></i>Jombang
                            </div>
                            <div class="col-5 pl-3"><i class="fa fa-star pr-3 text-warning" aria-hidden="true"></i>4/5
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-lg-3 item mb-3">
                <a href="{{  route('klien.tukang.about') }}" style="text-decoration:none;">
                    <div class="card shadow" style="background-color: #e3e3e3; border: gray 1px;">
                        <div class="pl-3 pb-2 mt-2">
                            <i class="fa fa-trophy pl-5" style="margin-left: 100px" aria-hidden="true"></i>
                            <span style="font-weight: bold; padding-left:20px">Bronze</span>
                        </div>
                        <div class="d-flex">
                            <img class="rounded-circle ml-3 mb-2" src="{{ asset('assets/faces/face8.jpg') }}"
                                style="max-width: 100px; max-height:100px; margin-right: 10px;">
                            <div class="mt-3" align="left">
                                <h3 class="text-dark">Joko Sudarsono</h3>
                                <h6 class="text-dark">Tukang Bangunan</h6>
                            </div>
                        </div>
                        <div class="d-flex mb-2 justify-content-start">
                            <div class="col-7 ml-0"><i class="fa fa-map-marker pr-3" aria-hidden="true"></i>Tulungagung
                            </div>
                            <div class="col-5 pl-3"><i class="fa fa-star pr-3 text-warning" aria-hidden="true"></i>4/5
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-lg-3 item mb-3">
                <a href="{{  route('klien.tukang.about') }}" style="text-decoration:none;">
                    <div class="card shadow" style="background-color: #e3e3e3; border: gray 1px;">
                        <div class="pl-3 pb-2 mt-2">
                            <i class="fa fa-trophy pl-5" style="margin-left: 100px" aria-hidden="true"></i>
                            <span style="font-weight: bold; padding-left:20px">Gold</span>
                        </div>
                        <div class="d-flex">
                            <img class="rounded-circle ml-3 mb-2" src="{{ asset('assets/faces/face9.jpg') }}"
                                style="max-width: 100px; max-height:100px; margin-right: 10px;">
                            <div class="mt-3" align="left">
                                <h3 class="text-dark">Ahmad Syaifudin</h3>
                                <h6 class="text-dark">Tukang Elektronik</h6>
                            </div>
                        </div>
                        <div class="d-flex mb-2 justify-content-start">
                            <div class="col-7 ml-0"><i class="fa fa-map-marker pr-3" aria-hidden="true"></i>Trenggalek
                            </div>
                            <div class="col-5 pl-3"><i class="fa fa-star pr-3 text-warning" aria-hidden="true"></i>5/5
                            </div>
                        </div>
                    </div>
                </a>
            </div>
    
    
        </div>
    </div>
    @include('layouts.partials.footer')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js">
    </script>
</body>

</html>