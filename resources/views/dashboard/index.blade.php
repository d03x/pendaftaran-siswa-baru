<x-dashboard-layout pageTitle="Dashboard" title="Dashboard">

    @if (!$user->isSiswa())
        @include('dashboard.admin.dashboard')
    @else
        @include('dashboard.siswa.dashboard')
    @endif

</x-dashboard-layout>
