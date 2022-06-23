<!-- Sidebar -->
<ul class="navbar-nav bg-white sidebar sidebar-dark accordion " id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex text-dark" href="{{ route('klien.list_tukang') }}" style="margin-left: 35px">
        <div class="sidebar-brand-icon">
            <img src="../../assets/img/logo-amplas.png" width="80" height="80" class="d-inline-block align-top ml-3">
        </div>
    </a>
    <br>
    <br>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block bg-dark">

    <!-- Nav Item - Pembatalan -->
    <li class="nav-item pl-sm-3 {{ ($title === "Profil" ? 'active' : '' ) }}">
        <a class="nav-link " href="/klien/profile">
            <span class="{{ ($title === "Profil" ? 'text-primary' : 'text-dark' ) }}">Profil</span></a>
    </li>
    <li class="nav-item pl-sm-3 {{ ($title === "Order Proses" ? 'active' : '' ) }}">
        <a class="nav-link " href="/klien/proses">
            <span class="{{ ($title === "Order Proses" ? 'text-primary' : 'text-dark' ) }}">Order Proses</span></a>
    </li>
    <li class="nav-item pl-sm-3 {{ ($title === "Order Selesai" ? 'active' : '' ) }}">
        <a class="nav-link " href="/klien/selesai">
            <span class="{{ ($title === "Order Selesai" ? 'text-primary' : 'text-dark' ) }}">Order Selesai</span></a>
    </li>



    <!-- Nav Item - Pelaporan -->
    <!-- <li class="nav-item pl-sm-3 {{ ($title === "Pelaporan" ? 'active' : '' ) }}">
        <a class="nav-link " href="/admin/pelaporan">
            <span class="{{ ($title === "Pelaporan" ? 'text-primary' : 'text-dark' ) }}">Pelaporan</span></a>
    </li> -->

    <!-- Nav Item - Pembayaran -->
    <!-- <li class="nav-item pl-sm-3 {{ ($title === "Pembayaran" ? 'active' : '' ) }}">
        <a class="nav-link" href="/admin/pembayaran">
            <span class="{{ ($title === "Pembayaran" ? 'text-primary' : 'text-dark' ) }}">Pembayaran</span></a>
    </li> -->

    <!-- Nav Item - Pendaftaran -->
    <!-- <li class="nav-item pl-sm-3 {{ ($title === "Pendaftaran" ? 'active' : '' ) }}">
        <a class="nav-link " href="/admin/pendaftaran">
            <span class="{{ ($title === "Pendaftaran" ? 'text-primary' : 'text-dark' ) }}">Pendaftaran</span></a>
    </li> -->



    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->