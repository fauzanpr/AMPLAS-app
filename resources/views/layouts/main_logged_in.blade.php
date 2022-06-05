<head>
    <link href="../../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="../../assets/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="../../assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="../../assets/css/tukang-profile.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div>
        <div>
            <!-- Profile widget -->
            <div class="bg-white overflow-hidden">
                <div class="cover">
                    <div class="media align-items-end profile-head ml-5">
                        <div class="profile mr-3"><img src="../../assets/img/undraw_profile.svg" alt="..." width="130"
                                class="rounded-circle img-thumbnail"></div>
                        <div class="mb-0 text-white">
                            <h2 class="mt-0 mb-3">Mark Williams</h2>
                            <h5 class="mt-3 mb-2 text-dark">Tukang Kayu</h5>
                            <p class="small mb-4 text-primary">New York</p>
                        </div>
                    </div>
                </div>
                <div class="ml-4 p-4 d-flex justify-content-end text-center">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item">
                            <a href="#" class="btn btn-primary btn-sm btn-block pl-3 pr-3 pt-3 pb-3 ">Ajukan
                                Pekerjaan</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#"
                                class="btn btn-outline-primary btn-sm btn-block pl-3 pr-3 pt-3 pb-3 ">Laporkan</a>
                        </li>
                    </ul>
                </div>
                <div class="ml-4 p-4 d-flex justify-content-start text-center">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item">
                            <a href="/tukang/profile_about"
                                class="btn btn-outline-primary btn-sm btn-block pl-3 pr-3 pt-3 pb-3 ">About</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="/tukang/profile_portofolio"
                                class="btn btn-outline-primary btn-sm btn-block pl-3 pr-3 pt-3 pb-3">Portofolio</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="/tukang/profile_rating"
                                class="btn btn-outline-primary btn-sm btn-block pl-3 pr-3 pt-3 pb-3">Ratings</a>
                        </li>
                    </ul>
                </div>

                @yield('container')

            </div>
        </div>
</body>