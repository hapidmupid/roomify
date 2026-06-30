<nav class="navbar admin-navbar">
    <div class="container-fluid px-3">
        <div class="d-flex align-items-center gap-3">
            <button class="sidebar-toggle-btn d-lg-none" id="sidebarToggle">
                <i class="fas fa-bars"></i>
            </button>
            <a class="navbar-brand" href="{{ route('admin.dashboard') }}">
                <img src="{{ asset('img/Logo Roomify_B.png') }}" alt="Logo">
                <span>Roomify</span>
            </a>
        </div>
        <div class="d-flex align-items-center gap-3">
            <span class="admin-badge">
                <i class="fas fa-shield-alt me-1"></i> Admin Panel
            </span>
        </div>
    </div>
</nav>
