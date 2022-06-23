<!-- Sidebar -->
<ul class="navbar-nav bg-white sidebar sidebar-dark accordion " id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex text-dark" href="index.html">
        <div class="sidebar-brand-icon">
            <img src="https://asset.kompas.com/crops/SV5q4gPkeD8YJTuzO31BqTr9DEI=/192x128:1728x1152/750x500/data/photo/2021/03/06/60436a28b258b.jpg" class="img-fluid" alt="...">
        </div>
        <div>
            <div class="mx-4 ">Hafizh</div>
            <div class="mx-4">Tukang</div>
        </div>
    </a>
    <br>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block bg-dark">

    <!-- Nav Item - Pembatalan -->
    <li class="nav-item pl-sm-3 {{ ($title === "Profil" ? 'active' : '' ) }}">
        <a class="nav-link " href="/tukang/profile">
            <span class="{{ ($title === "Profil" ? 'text-primary' : 'text-dark' ) }}">Profil</span></a>
    </li>
    <li class="nav-item pl-sm-3 {{ ($title === "Portofolio" ? 'active' : '' ) }}">
        <a class="nav-link " href="/tukang/profile_portofolio">
            <span class="{{ ($title === "Portofolio" ? 'text-primary' : 'text-dark' ) }}">Portofolio</span></a>
    </li>
    <li class="nav-item pl-sm-3 {{ ($title === "Job Masuk" ? 'active' : '' ) }}">
        <a class="nav-link " href="/tukang/jobMasuk">
            <span class="{{ ($title === "Job Masuk" ? 'text-primary' : 'text-dark' ) }}">Job Masuk</span></a>
    </li>
    <li class="nav-item pl-sm-3 {{ ($title === "Job Terselesaikan" ? 'active' : '' ) }}">
        <a class="nav-link " href="/tukang/jobTerselesaikan">
            <span class="{{ ($title === "Job Terselesaikan" ? 'text-primary' : 'text-dark' ) }}">Job Terselesaikan</span></a>
    </li>
    <li class="nav-item pl-sm-3 {{ ($title === "Log Out" ? 'active' : '' ) }}">
        <a class="nav-link " href="/login">
            <span class="{{ ($title === "Log Out" ? 'text-primary' : 'text-dark' ) }}">Log Out</span></a>
    </li>

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->