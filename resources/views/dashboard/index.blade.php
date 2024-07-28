<x-dashboard-layout pageTitle="Dashboard" title="Dashboard">

    @if (!$user->isSiswa())
        <div class="row">
            <div class="col-12">
                @include('dashboard.sections.statistik-ppdb')
            </div>
            <div class="col-12">
                @include('dashboard.sections.statistik-pencapaian-gelombang')
            </div>
        </div>
    @else
        @include('dashboard.sections.dashboard-siswa')
    @endif

</x-dashboard-layout>
