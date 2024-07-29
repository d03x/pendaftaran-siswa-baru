<ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
    <li class="nav-header">.::Menu Siswa::.</li>
    <x-nav-item icon="bi bi-speedometer" href="{{ route('dashboard.index') }}">Dashboard</x-nav-item>
    <!-- begin:treeview formulir -->
    <x-nav-treeview label="Formulir" icon="bi bi-input-cursor-text">
        <x-nav-item href="{{route('dashboard.biodata-siswa')}}">Biodata</x-nav-item>
        <x-nav-item href="">Biodata Orang Tua</x-nav-item>
        <x-nav-item href="">Nilai Rapot</x-nav-item>
        <x-nav-item href="">Upload Berkas</x-nav-item>
    </x-nav-treeview>
    <!-- end:treeview formulir -->
    <x-nav-item icon="bi bi-bell" href="{{ url('dashboard/app') }}">
        <span>Pengumuman</span>
        <span class="nav-badge badge text-bg-primary me-3">19</span>
    </x-nav-item>
    <x-nav-item icon="bi bi-clipboard-check" href="{{ url('pengaturan') }}">Status Pendaftaran</x-nav-item>

    <x-nav-item icon="bi bi-box-arrow-in-right text-error" href="{{ url('logout') }}">Logout</x-nav-item>

</ul>
