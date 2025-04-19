<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5">
    <a href="{{ url('/') }}" class="navbar-brand d-flex align-items-center">
        <h1 class="m-0">Beratan Dairy</h1>
    </a>
    <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="{{ url('/') }}" class="nav-item nav-link {{ request()->is('/') ? 'active' : '' }}">Beranda</a>
            <a href="{{ url('about') }}" class="nav-item nav-link {{ request()->is('about') ? 'active' : '' }}">Tentang Kami</a>
            <a href="{{ url('service') }}" class="nav-item nav-link {{ request()->is('service') ? 'active' : '' }}">Layanan</a>
            <a href="{{ url('product') }}" class="nav-item nav-link {{ request()->is('product') ? 'active' : '' }}">Produk</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Halaman</a>
                <div class="dropdown-menu bg-light m-0">
                    <a href="{{ url('gallery') }}" class="dropdown-item">Galeri</a>
                    <a href="{{ url('blog') }}" class="dropdown-item">Artikel</a>
                </div>
            </div>
            <a href="{{ url('contact') }}" class="nav-item nav-link {{ request()->is('contact') ? 'active' : '' }}">Kontak</a>
        </div>
        <div class="border-start ps-4 d-none d-lg-block">
            <button type="button" class="btn btn-sm p-0"><i class="fa fa-search"></i></button>
        </div>
    </div>
</nav>
