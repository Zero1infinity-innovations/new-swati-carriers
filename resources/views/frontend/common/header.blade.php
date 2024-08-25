<div id="spinner"
    class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>
<!-- Spinner End -->


<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light shadow border-top border-5 border-primary sticky-top p-0">
    <a href="" class="navbar-brand bg-primary d-flex align-items-center px-4 px-lg-5">
        <h2 class="mb-2 text-white">New Swati Carriers</h2>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="{{ route('home') }}" class="nav-item nav-link {{ Route::currentRouteName() == 'home' ? 'active' : '' }} ">Home</a>
            <a href="{{ route('about') }}" class="nav-item nav-link {{ Route::currentRouteName() == 'about' ? 'active' : '' }} ">About</a>
            <a href="" class="nav-item nav-link <?= basename($_SERVER['PHP_SELF']) == 'service' ? 'active' : '' ?>">Services</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle <?= in_array(basename($_SERVER['PHP_SELF']), ['price.php', 'feature.php', 'quote.php', 'team.php', 'testimonial.php', '404.php']) ? 'active' : '' ?>"
                    data-bs-toggle="dropdown">Pages</a>
                <div class="dropdown-menu fade-up m-0">
                    <a href="" class="dropdown-item <?= basename($_SERVER['PHP_SELF']) == 'price.php' ? 'active' : '' ?>">Pricing
                        Plan</a>
                    <a href="" class="dropdown-item <?= basename($_SERVER['PHP_SELF']) == 'feature.php' ? 'active' : '' ?>">Features</a>
                    <a href="" class="dropdown-item <?= basename($_SERVER['PHP_SELF']) == 'quote.php' ? 'active' : '' ?>">Free
                        Quote</a>
                    <a href="" class="dropdown-item <?= basename($_SERVER['PHP_SELF']) == 'team.php' ? 'active' : '' ?>">Our
                        Team</a>
                    <a href="" class="dropdown-item <?= basename($_SERVER['PHP_SELF']) == 'testimonial.php' ? 'active' : '' ?>">Testimonial</a>
                </div>
            </div>
            <a href="" class="nav-item nav-link <?= basename($_SERVER['PHP_SELF']) == 'contact.php' ? 'active' : '' ?>">Contact</a>
        </div>
        <h6 class="m-0 pe-lg-5 d-none d-lg-block"><i class="fa fa-phone text-primary me-3"></i>+91 9695137922, 8795958890</h6>
    </div>
</nav>
