@extends('template.templat')
@section('content')
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
          </div>

          <!-- Content Row -->
          <div class="row">

          <!-- Earnings (Monthly) Card Example -->
          <a href="/daftar_siswa">
          <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Jumlah Siswa</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{$student}} Orang</div>
                    </a>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-laugh-wink fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <a href="/daftar_setor">
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Jumlah Setoran</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">Rp. {{number_format($setor)}}</div>
                    </a></div>
                    <div class="col-auto">
                      <i class="fas fa-credit-card fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <a href="/daftar_tarik">
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Jumlah Penarikan</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">Rp. {{number_format($tarik)}}</div>
</a>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-list-alt fa-2x text-gray-300 ml-1"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>




          <!-- Content Row -->
          <div class="row">


          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <!-- End of Footer -->

    </div>
@endsection
