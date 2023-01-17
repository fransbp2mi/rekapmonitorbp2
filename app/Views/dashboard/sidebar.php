<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-white" id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-dark opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard " target="_blank">
            <img src="<?= base_url() ?>/assets/img/bp2mi-ch-sq.png" class="navbar-brand-img h-100" alt="main_logo">
            <span class="ms-1 font-weight-bold text-dark">Monitoring BP2MI</span>
        </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link text-dark <?php if ($method == 'home') {
                                                    echo 'bg-gradient-info active';
                                                } ?>" href="<?= base_url() ?>">
                    <div class="text-dark text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">dashboard</i>
                    </div>
                    <span class="nav-link-text ms-1">Papan Instrumen </span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark <?php if ($method == 'paparan') {
                                                    echo 'bg-gradient-info active';
                                                } ?>" href="pages/virtual-reality.html">
                    <div class="text-dark text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">co_present</i>
                    </div>
                    <span class="nav-link-text ms-1">Paparan Kepala Badan</span>
                </a>
            </li>
            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">SISKOP2MI</h6>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark <?php if ($method == 'siskop2mi') {
                                                    echo 'bg-gradient-info active';
                                                } ?>" href="pages/virtual-reality.html">
                    <div class="text-dark text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">devices</i>
                    </div>
                    <span class="nav-link-text ms-1">Monitoring SISKOP2MI</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark <?php if ($method == 'gtog') {
                                                    echo 'bg-gradient-info active';
                                                } ?>" href="pages/virtual-reality.html">
                    <div class="text-dark text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">factory</i>
                    </div>
                    <span class="nav-link-text ms-1">G to G Korea</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark <?php if ($method == 'pegawai') {
                                                    echo 'bg-gradient-info active';
                                                } ?>" href="pages/tables.html">
                    <div class="text-dark text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">account_circle</i>
                    </div>
                    <span class="nav-link-text ms-1">Kepegawaian</span>
                </a>
            </li>
            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Preferensi</h6>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark <?php if ($method == 'about') {
                                                    echo 'bg-gradient-info active';
                                                } ?>" href="aboutus">
                    <div class="text-dark text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">person</i>
                    </div>
                    <span class="nav-link-text ms-1">Tentang Kami</span>
                </a>
            </li>
        </ul>
    </div>
</aside>