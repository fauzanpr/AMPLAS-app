<!-- Sidebar -->
<ul class="navbar-nav bg-white sidebar sidebar-dark accordion " id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex text-dark" href="index.html">
        <div class="sidebar-brand-icon ml-5 pl-3">
            <img src="../../../assets/img/logo-amplas.png" width="75px" class="img-fluid"  alt="...">
        </div>
    </a>
    <br>
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

    <!-- Nav Item - portofolio -->
    <li class="nav-item pl-sm-3 {{ ($title === "Portofolio" ? 'active' : '' ) }}">
        <a class="nav-link " href="/admin/portofolio">
            <span class="{{ ($title === "Portofolio" ? 'text-primary' : 'text-dark' ) }}">Portofolio</span></a>
    </li>



    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->