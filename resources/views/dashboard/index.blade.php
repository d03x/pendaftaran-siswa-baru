<x-dashboard-layout pageTitle="Dashboard" title="Dashboard">

    <div class="row">
        <div class="col-12">
            @include('dashboard.sections.statistik-ppdb')
        </div>
        <div class="col-12">
            @include('dashboard.sections.statistik-pencapaian-gelombang')
        </div>
    </div>
   
</x-dashboard-layout>
