@extends('template.templat')

@section('content')
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
          <div class="row">
            <div class="col-xl-1">

            </div>

            <!-- Area Chart -->
            <div class="col-xl-10 col-lg-10">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
  <h6 class="m-0 font-weight-bold text-primary">Profile:</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">

        <center><img class="mt-2" src="{{asset('img/123.png')}}" alt="Profile" width="200px" height="200px"></center>

        <p><b><center>{{Auth::user()->nama}}</center></b></p>

                </div>
              </div>
            </div>

          </div>



        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      @endsection
