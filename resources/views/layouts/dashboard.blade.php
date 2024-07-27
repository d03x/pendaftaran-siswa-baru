<x-base-layout bodyClass="layout-fixed sidebar-expand-lg bg-body-tertiary">
    <!-- begin:app-wrapper -->
    <div class="app-wrapper">
        <x-dashboard.top-nav />
        <x-dashboard.sidebar />
        <main class="app-main">
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
