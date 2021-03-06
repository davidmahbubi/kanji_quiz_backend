<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-light-navy elevation-2">
    <!-- Brand Logo -->
    <a href="{{ url('/') }}" class="brand-link">
        <img src="{{ asset('img/logo.png') }}" alt="" class="brand-image" style="opacity: .8">
        <span class="brand-text font-weight-light">KanjiQuiz Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('img/profiles/' . Auth::user()->picture) }}" class="img-circle elevation-1"
                    alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ Auth::user()->name ?? 'Unknown' }}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{ url('/') }}" class="nav-link {{ !Request::segment(2) ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-header">QUIZ</li>
                <li class="nav-item">
                    <a href="{{ url('admin/soal') }}" class="nav-link {{ Request::segment(2) === 'soal' ? 'active' : '' }}">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Soal
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('admin/level') }}" class="nav-link {{ Request::segment(2) === 'level' ? 'active' : '' }}">
                        <i class="fas fa-lightbulb nav-icon"></i>
                        <p>
                            Level
                        </p>
                    </a>
                </li>
                <li class="nav-header">SESI</li>
                <li class="nav-item">
                    <a href="{{ url('admin/auth/logout') }}" class="nav-link">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>
                            Sign Out
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
