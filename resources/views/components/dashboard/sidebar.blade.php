<aside class="app-sidebar bg-white" data-bs-theme="light">
    <!--begin::Sidebar Brand-->
    <div class="sidebar-brand">
        <!--begin::Brand Link-->
        <a href="./index.html" class="brand-link">
            <!--begin::Brand Image-->
            <img src="{{ asset('images/logo-tut-wuri.png') }}" alt="PPDB SMK IFSU" class="brand-image opacity-75" />
            <!--end::Brand Image-->
            <!--begin::Brand Text-->
            <span class="brand-text fw-light">PPDB ONLINE</span>
            <!--end::Brand Text-->
        </a>
        <!--end::Brand Link-->
    </div>
    <!--end::Sidebar Brand-->
    <!--begin::Sidebar Wrapper-->
    <div class="sidebar-wrapper">
        <nav class="mt-2">
            <!--begin::Sidebar Menu-->
            <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
                <x-nav-item icon="bi bi-speedometer" href="{{ route('dashboard.index') }}">Dashboard</x-nav-item>
                <x-nav-item icon="bi bi-journal-bookmark" href="{{ url('dashboard/app') }}">
                    <span>Pendaftar Baru</span>
                    <span class="nav-badge badge text-bg-primary me-3">19</span>
                </x-nav-item>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon bi bi-database-gear"></i>
                        <p>
                            Data Master
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="./widgets/info-box.html" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Data Sekolah</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./widgets/small-box.html" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Jurusan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./widgets/info-box.html" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Jalur Pendaftaran</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./widgets/cards.html" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Siswa</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon bi bi-book-half"></i>
                        <p>
                            PPDB
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="./layout/unfixed-sidebar.html" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Gelombang Pendaftaran</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./layout/fixed-sidebar.html" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Pendaftar Terbaru</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./layout/fixed-complete.html" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Verifikasi</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./layout/fixed-complete.html" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Archive</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon bi bi-printer"></i>
                        <p>
                            Laporan
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="./forms/general.html" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>General Elements</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <x-nav-item icon="bi bi-bar-chart" href="{{ url('statistik') }}">Statistik</x-nav-item>
                <li class="nav-header">Admin Aksess</li>
                <x-nav-item icon="bi bi-gear" href="{{ url('pengaturan') }}">Pengaturan Sekolah</x-nav-item>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon bi bi-person-circle"></i>
                        <p>
                            Manajemen User
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="./examples/login-v2.html" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Login</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./examples/register-v2.html" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Register</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <x-nav-item icon="bi bi-box-arrow-in-right text-error" href="{{ url('logout') }}">Logout</x-nav-item>

            </ul>
            <!--end::Sidebar Menu-->
        </nav>
    </div>
    <!--end::Sidebar Wrapper-->
</aside>
