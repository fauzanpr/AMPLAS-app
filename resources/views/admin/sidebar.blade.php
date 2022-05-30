<!-- Sidebar -->
<ul class="navbar-nav bg-white sidebar sidebar-dark accordion " id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex text-dark" href="index.html">
        <div class="sidebar-brand-icon">
            <img src="https://asset.kompas.com/crops/SV5q4gPkeD8YJTuzO31BqTr9DEI=/192x128:1728x1152/750x500/data/photo/2021/03/06/60436a28b258b.jpg" class="img-fluid"  alt="...">
        </div>
        <div>
            <div class="mx-4 ">Egar</div>
            <div class="mx-4">Admin</div>
        </div>
    </a>
    <br>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block bg-dark">

    <!-- Nav Item - Pembatalan -->
    <li class="nav-item pl-sm-3 {{ ($title === "Pembatalan" ? 'active' : '' ) }}">
        <a class="nav-link " href="/admin/pembatalan">
            <span class="{{ ($title === "Pembatalan" ? 'text-primary' : 'text-dark' ) }}">Pembatalan</span></a>
    </li>

    <!-- Nav Item - Pelaporan -->
    <li class="nav-item pl-sm-3 {{ ($title === "Pelaporan" ? 'active' : '' ) }}">
        <a class="nav-link " href="/admin/pelaporan">
            <span class="{{ ($title === "Pelaporan" ? 'text-primary' : 'text-dark' ) }}">Pelaporan</span></a>
    </li>

    <!-- Nav Item - Pembayaran -->
    <li class="nav-item pl-sm-3 {{ ($title === "Pembayaran" ? 'active' : '' ) }}">
        <a class="nav-link" href="/admin/pembayaran">
            <span class="{{ ($title === "Pembayaran" ? 'text-primary' : 'text-dark' ) }}">Pembayaran</span></a>
    </li>

    <!-- Nav Item - Pendaftaran -->
    <li class="nav-item pl-sm-3 {{ ($title === "Pendaftaran" ? 'active' : '' ) }}">
        <a class="nav-link " href="/admin/pendaftaran">
            <span class="{{ ($title === "Pendaftaran" ? 'text-primary' : 'text-dark' ) }}">Pendaftaran</span></a>
    </li>



    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->