@extends('template.templat')

@section('content')
<!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">


{{--
             "<div class='col-md-10 col-sm-12 col-xs-12 ml-5 mt-5'>"
                "<div class='alert alert-danger mt-4 ml-5' role='alert'>"
               "<p><center>Maaf Data Ini Tidak Tersedia</center></p>"
                  "</div>"
                "</div>" --}}




              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
              <h6 class="m-0 font-weight-bold text-primary">Info Detail Siswa:</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
              <!-- Content Row -->
  <div class="row ml-5">
    <div class="col-md-10 col-sm-12 col-xs-12">
      <h2><center>Info Detail Siswa</center></h2>
    <table class="table">


      <tr>
        <td>No.Rekening </td>
        <td>: {{$id->no_rekening}}</td>
      </tr>
      <tr>
        <td>Nama Siswa </td>
        <td>: {{$id->nama_siswa}}</td>
      </tr>
      <tr>
        <td>Kelas </td>
        <td>: {{$id->kelas->nama}}</td>
      </tr>
      <tr>
        <td>Alamat </td>
        <td>: {{$id->alamat}}</td>
      </tr>
      <tr>
        <td> Jenis Kelamin </td>
        <td>: {{$id->jk}}</td>
      </tr>
      <tr>
        <td> No Telepon </td>
        <td>: {{$id->no_hp}}</td>
      </tr>


  </table>
  </div>
  </div>
   <div class="row">
   <div class="col-md-9">

   </div>
   <div class="col-md-3">

   <a href="/daftar_siswa"><button type="button" class="btn btn-light">Kembali</button></a>
   </div>


 </div>
 </div>


</div>



        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

@endsection
