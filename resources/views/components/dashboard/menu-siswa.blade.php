<ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
    <li class="nav-header">.::Menu Siswa::.</li>
    <x-nav-item icon="bi bi-speedometer" href="{{ route('dashboard.index') }}">Dashboard</x-nav-item>

    <x-nav-item icon="bi bi-bar-chart" href="{{ url('statistik') }}">Isi Formulir</x-nav-item>
    <x-nav-item icon="bi bi-journal-bookmark" href="{{ url('dashboard/app') }}">
        <span>Pengumuman</span>
        <span class="nav-badge badge text-bg-primary me-3">19</span>
    </x-nav-item>

    <x-nav-item icon="bi bi-gear" href="{{ url('pengaturan') }}">Status Pendaftaran</x-nav-item>

    <x-nav-item icon="bi bi-box-arrow-in-right text-error" href="{{ url('logout') }}">Logout</x-nav-item>

</ul>
