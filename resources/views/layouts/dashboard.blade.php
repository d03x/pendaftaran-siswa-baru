<x-base-layout bodyClass="layout-fixed sidebar-expand-lg bg-body-tertiary">
    <!-- begin:app-wrapper -->
    <div class="app-wrapper">
        <x-dashboard.top-nav />
        <x-dashboard.sidebar />
        <main class="app-main">
            <div class="app-content-header"> <!--begin::Container-->
                <div class="container-fluid"> <!--begin::Row-->
                    <div class="row">
                        <div class="col-sm-6">
                            <h3 class="mb-0">Dashboard v2</h3>
                        </div>
                        <div class="col-sm-6">
                            <x-dashboard.bread-crumb/>
                        </div>
                    </div> <!--end::Row-->
                </div> <!--end::Container-->
            </div>
            <!-- begin:app-content -->
            <div class="app-content">
                <div class="container-fluid">
                    <div class="mt-3">
                        {{ $slot }}
                    </div>
                </div>
            </div>
            <!-- end:app-content -->
        </main>
        <x-dashboard.footer />
    </div>
    <!-- end:app-wrapper -->
</x-base-layout>
