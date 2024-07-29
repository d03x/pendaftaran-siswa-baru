<x-base-layout bodyClass="layout-fixed sidebar-expand-lg bg-body-tertiary">
    <div class="modal fade" id="reviewModal" tabindex="-1" aria-labelledby="reviewModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="reviewModalLabel">Review</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" modal-review-content>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <!-- begin:app-wrapper -->
    <div class="app-wrapper">
        <x-dashboard.top-nav />
        <x-dashboard.sidebar />
        <main class="app-main">
            <div class="app-content-header mb-0 p-0 pt-3 px-2"> <!--begin::Container-->
                <div class="container-fluid"> <!--begin::Row-->
                    <div class="row">
                        <div class="col-sm-6">
                            <h3 class="mb-0">
                                {{ $pageTitle ?? config('app.name') }}
                            </h3>
                        </div>
                        <div class="col-sm-6">
                            <x-dashboard.bread-crumb />
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
