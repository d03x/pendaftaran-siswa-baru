<aside class="app-sidebar bg-white" data-bs-theme="light">
    <!--begin::Sidebar Brand-->
    <div class="sidebar-brand">
        <!--begin::Brand Link-->
        <a href="{{ route('dashboard.index') }}" class="brand-link">
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
            @if (auth()->user()->isSiswa())
                @include('components.dashboard.menu-siswa')
            @else
                @include('components.dashboard.menu-admin')
            @endif
            <!--end::Sidebar Menu-->
        </nav>
    </div>
    <!--end::Sidebar Wrapper-->
</aside>
