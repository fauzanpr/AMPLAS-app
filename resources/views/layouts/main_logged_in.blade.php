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

                <!-- Footer -->
                <div class="container-fluid mt-5 bg-primary mb-5">
                    <div class="bg-primary text-white mx-5 pt-5 mb-5">
                        <div class="row mb-5">
                            <div class="col-md-6 col-sm-4 col-xs-4 mb-5">
                                <div class="footer-text pull-left">
                                    <div class="d-flex mb-4">
                                        <h1 class="font-weight-bold">Ingin Mencari Tukang Professional?
                                        </h1>
                                    </div>
                                    <p class="card-text mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        Commodi non
                                        pariatur
                                        numquam animi nam at impedit odit nisi.</p>
                                    <a href="#"
                                        class="btn bg-light text-primary btn-sm btn-block pl-3 pr-3 pt-2 pb-2 w-25 font-weight-bold">Get
                                        Started</a>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-2 col-xs-2 mb-5">
                                <h5 class="heading">Services</h5>
                                <ul>
                                    <li class="mb-2">IT Consulting</li>
                                    <li class="mb-2">Development</li>
                                    <li class="mb-2">Cloud</li>
                                    <li class="mb-2">Support</li>
                                </ul>
                            </div>
                            <div class="col-md-2 col-sm-2 col-xs-2 mb-5">
                                <h5 class="heading">Industries</h5>
                                <ul class="card-text">
                                    <li class="mb-2">Finance</li>
                                    <li class="mb-2">Public Sector</li>
                                    <li class="mb-2">Smart Office</li>
                                    <li class="mb-2">Retail</li>
                                    <li class="mb-2">Retail</li>
                                </ul>
                            </div>
                            <div class="col-md-2 col-sm-2 col-xs-2 mb-5">
                                <h5 class="heading">Company</h5>
                                <ul class="card-text">
                                    <li class="mb-2">About Us</li>
                                    <li class="mb-2">Blog</li>
                                    <li class="mb-2">Contact</li>
                                    <li class="mb-2">Join Us</li>
                                    <li class="mb-2">Join Us</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>