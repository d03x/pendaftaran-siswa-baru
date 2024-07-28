<ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
    <li class="nav-header">.::Menu Siswa::.</li>
    <x-nav-item icon="bi bi-speedometer" href="{{ route('dashboard.index') }}">Dashboard</x-nav-item>

    <li class="nav-item">
        <a href="#" class="nav-link">
            <i class="nav-icon bi bi-input-cursor-text"></i>
            <p>
                Formulir
                <i class="nav-arrow bi bi-chevron-right"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="./examples/login-v2.html" class="nav-link">
                    <i class="nav-icon bi bi-circle"></i>
                    <p>Bidata Siswa</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="./examples/register-v2.html" class="nav-link">
                    <i class="nav-icon bi bi-circle"></i>
                    <p>Biodata Orang Tua / Wali</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="./examples/register-v2.html" class="nav-link">
                    <i class="nav-icon bi bi-circle"></i>
                    <p>Nilai Rapot</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="./examples/register-v2.html" class="nav-link">
                    <i class="nav-icon bi bi-circle"></i>
                    <p>Upload Berkas</p>
                </a>
            </li>
        </ul>
    </li>    
     
    <x-nav-item icon="bi bi-bell" href="{{ url('dashboard/app') }}">
        <span>Pengumuman</span>
        <span class="nav-badge badge text-bg-primary me-3">19</span>
    </x-nav-item>
    <x-nav-item icon="bi bi-clipboard-check" href="{{ url('pengaturan') }}">Status Pendaftaran</x-nav-item>

    <x-nav-item icon="bi bi-box-arrow-in-right text-error" href="{{ url('logout') }}">Logout</x-nav-item>

</ul>
