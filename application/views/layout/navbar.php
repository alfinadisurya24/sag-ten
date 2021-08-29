<!-- partial:partials/_navbar.html -->
<nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
        <div class="me-3">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
                <span class="icon-menu"></span>
            </button>
        </div>
        <div>
            <a class="navbar-brand brand-logo d-flex" href="/">
                <img src="<?= base_url('assets/images/logo.png') ?>" style="height: 50px;" alt="logo" />
                <h3 class="text" style="font-weight:800; padding-left: 1rem;">Sag-ten</h3>
            </a>
            <a class="navbar-brand brand-logo-mini" href="/">
                <img src="<?= base_url('assets/images/logo.png') ?>" alt="logo" />
            </a>
        </div>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-top border-bottom">
        <ul class="navbar-nav">
            <li class="nav-item font-weight-semibold d-none d-lg-block ms-0">
                <h1 class="welcome-text">Hello, <span class="text-black fw-bold"><?= ucfirst($_SESSION['nama']) ?></span></h1>
            </li>
        </ul>
        <ul class="navbar-nav ms-auto">
            <li class="nav-item dropdown d-none d-lg-block user-dropdown">
                <a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="mdi mdi-36px mdi-account-circle"></i></a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                    <div class="dropdown-header text-center">
                        <i class="mdi mdi-36px mdi-account-circle"></i>
                        <p class="mb-1 font-weight-semibold"><?= ucfirst($_SESSION['nama']) ?></p>
                        <p class="fw-light text-muted mb-0"><?= $_SESSION['email'] ?></p>
                    </div>
                    <!-- <a class="dropdown-item"><i
                            class="dropdown-item-icon mdi mdi-account-outline text-primary me-2"></i> My Profile
                        <span class="badge badge-pill badge-danger">1</span></a> -->
                    <?= form_open('main/logout')?>
                        <button type="submit" class="dropdown-item">
                            <i class="dropdown-item-icon mdi mdi-power text-danger me-2"></i> Sign Out
                        </button>
                    <?= form_close()?>
                </div>
            </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
            data-bs-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
        </button>
    </div>
</nav>
<!-- partial -->