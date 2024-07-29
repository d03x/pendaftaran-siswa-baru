<div class="row">
    <!-- Left col -->
    <section class="col-lg-6 connectedSortable">
        <!-- Custom tabs (Charts with tabs)-->
        <div class="card shadow-sm border-0">
            <div class="card-header">
                <h3 class="card-title">
                    <i class="fas fa-chart-pie mr-1"></i>
                    Informasi
                </h3>
            </div><!-- /.card-header -->
            <div class="card-body">
                <div class="tab-content p-0">
                    <!-- Morris chart - Sales -->
                    <div class="row">
                        <div class="col-md-12">
                            <p class="alert alert-success border-success">Gelombang Sekarang <b>Gelombang 2 - Tahun Ajaran 2024/2025</b></p>

                        </div>
                    </div>
                </div>
            </div><!-- /.card-body -->
        </div>
        <!-- /.card -->
    </section>
    <section class="col-lg-6 connectedSortable">
        <!-- Custom tabs (Charts with tabs)-->
        <div class="card shadow-sm border-0">
            <div class="card-header">
                <h3 class="card-title">
                    <i class="fas fa-chart-pie mr-1"></i>
                   Informasi & Status
                </h3>
            </div><!-- /.card-header -->
            <div class="card-body">
                <div class="tab-content p-0">
                    <!-- Morris chart - Sales -->
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Nama: {{ $user->name }}</li>
                                <li class="list-group-item">No.Pendaftaran: <span class="badge bg-danger">Belum Keluar</span></li>
                                <li class="list-group-item">Status Formulir: <span class="badge bg-danger">Belum Diverifikasi</span></li>
                                <li class="list-group-item">Status Diterima: <span class="badge bg-warning">Pending</span></li>
                              </ul>
                        </div>
                    </div>
                </div>
            </div><!-- /.card-body -->
        </div>
        <!-- /.card -->
    </section>
    <!-- /.Left col -->
</div>
<!-- /.row (main row) -->