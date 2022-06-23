<!-- Sidebar -->
<ul class="navbar-nav bg-white sidebar sidebar-dark accordion " id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex text-dark" href="#" style="margin-left: 35px">
        <div class="sidebar-brand-icon">
            <img src="../../assets/img/logo-amplas.png" width="80" height="80" class="d-inline-block align-top ml-3">
        </div>
    </a>
    <br>
    <br>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block bg-dark">

    <!-- Nav Item - Pembatalan -->
    <li class="nav-item pl-sm-3 {{ ($title === " Profil" ? 'active' : '' ) }}">
        <a class="nav-link " href="{{ route('tukang.profile') }}">
            <span class="{{ ($title === " Profil" ? 'text-primary' : 'text-dark' ) }}">Profil</span></a>
    </li>
    <li class="nav-item pl-sm-3 {{ ($title === " Portofolio" ? 'active' : '' ) }}">
        <a class="nav-link " href="{{ route('tukang.portofolio') }}">
            <span class="{{ ($title === " Portofolio" ? 'text-primary' : 'text-dark' ) }}">Portofolio</span></a>
    </li>
    <li class="nav-item pl-sm-3 {{ ($title === " Job Masuk" ? 'active' : '' ) }}">
        <a class="nav-link " href="{{ route('tukang.order_proses') }}">
            <span class="{{ ($title === " Job Masuk" ? 'text-primary' : 'text-dark' ) }}">Job Masuk</span></a>
    </li>
    <li class="nav-item pl-sm-3 {{ ($title === " Job Terselesaikan" ? 'active' : '' ) }}">
        <a class="nav-link " href="{{ route('tukang.order_selesai') }}">
            <span class="{{ ($title === " Job Terselesaikan" ? 'text-primary' : 'text-dark' ) }}">Job
                Terselesaikan</span></a>
    </li>

</ul>
<!-- End of Sidebar -->