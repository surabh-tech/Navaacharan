<?php $currentPage = basename($_SERVER['PHP_SELF']); ?>
<header>
    <!-- start navigation -->
    <nav class="navbar navbar-expand-lg header-transparent bg-transparent sticky" data-header-hover="dark">
        <div class="container-fluid px-4 px-lg-5">

            <!-- Logo -->
            <a class="navbar-brand" href="index.php">
                <img src="images/labs/headlogo1.png" data-at2x="images/labs/headlogo1.png" alt="Navaacharan" class="default-logo">
                <img src="images/labs/headlogo1.png" data-at2x="images/labs/headlogo1.png" alt="Navaacharan" class="alt-logo">
                <img src="images/labs/headlogo1.png" data-at2x="images/labs/headlogo1.png" alt="Navaacharan" class="mobile-logo">
            </a>

            <!-- Mobile toggler -->
            <button class="navbar-toggler ms-auto me-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-line"></span>
                <span class="navbar-toggler-line"></span>
                <span class="navbar-toggler-line"></span>
                <span class="navbar-toggler-line"></span>
            </button>

            <!-- Nav links -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav alt-font mx-auto">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link<?= $currentPage === 'index.php' ? ' active' : '' ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="who-we-are.php" class="nav-link<?= $currentPage === 'who-we-are.php' ? ' active' : '' ?>">Who We Are</a>
                    </li>
                    <li class="nav-item">
                        <a href="services.php" class="nav-link<?= $currentPage === 'services.php' ? ' active' : '' ?>">Services</a>
                    </li>
                    <li class="nav-item">
                        <a href="clients.php" class="nav-link<?= $currentPage === 'clients.php' ? ' active' : '' ?>">Clients</a>
                    </li>
                </ul>

                <!-- CTA -->
                <div class="d-flex align-items-center ms-lg-4 mt-3 mt-lg-0 pb-3 pb-lg-0">
                    <a href="contact.php" class="btn btn-small btn-gradient-emerald-blue-emerald-green btn-round-edge btn-hover-animation-switch">
                        <span>
                            <span class="btn-text">Get in Touch</span>
                            <span class="btn-icon"><i class="feather icon-feather-arrow-right"></i></span>
                        </span>
                    </a>
                </div>
            </div>

        </div>
    </nav>
    <!-- end navigation -->

    <style>
    /* Active nav link */
    .navbar-nav .nav-link.active { color: #19e089 !important; }
    .navbar-nav .nav-link:hover  { color: #19e089 !important; }

    /* Sticky — dark glass on scroll */
    header.sticky.sticky-active .navbar {
        background-color: rgba(10, 14, 30, 0.96) !important;
        backdrop-filter: blur(12px);
        -webkit-backdrop-filter: blur(12px);
        box-shadow: 0 4px 24px rgba(0,0,0,0.2);
    }

    /* Mobile */
    @media (max-width: 991px) {
        /* theme data-header-hover=dark sets bg-dark on mobile navbar & collapse — we just refine */
        .navbar-nav .nav-link {
            padding: 13px 4px !important;
            border-bottom: 1px solid rgba(255,255,255,0.08) !important;
            font-size: 15px !important;
        }
        .navbar-nav .nav-item:last-child .nav-link { border-bottom: none !important; }

        /* CTA button full-width with breathing room */
        .navbar-collapse .d-flex { padding: 10px 12px 6px; }
        .navbar-collapse .btn {
            width: 100%;
            justify-content: center;
            text-align: center;
        }
    }
    </style>
</header>
