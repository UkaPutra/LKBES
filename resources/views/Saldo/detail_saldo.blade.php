@extends('template.templat')

@section('content')
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
<h6 class="m-0 font-weight-bold text-primary">Detail Saldo Siswa:</h6>
            </div>
            <!-- Card Body -->
            <div class="card-body">

               <div class="row mt-3">


               <div class="col-md-8  mt-4">

        <a href="export_saldo.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm mt-1"><i class="fas fa-download fa-sm text-white-50"></i> Unduh Laporan</a><br>
        <h7 class="m-0 font-weight-bold">Nama Siswa: {{$id->nama_siswa}}</h7>

               </div>

               </div>

               <div class="table-responsive service">
               <table class="table table-bordered table-hover  mt-3 text-nowrap css-serial">
               <thead>
                 <tr>
                   <th scope="col"><center>No. Rekening</th>
                   <th scope="col"><center>Jumlah Tarik</th>
                   <th scope="col"><center>Jumlah Setor</th>
                   <th scope="col"><center>Saldo</th>
                  </tr>

               </thead>

               <tbody>
                @foreach ($students as $student)
                @php
                $tariks = DB::table('tariks')->where('siswa_id',$student->id)->sum('tarik');
                $setors = DB::table('setors')->where('siswa_id', $student->id)->sum('setor');
                $saldo = $setors - $tariks;
             @endphp

                @endforeach
                 <tr>
                   <td>{{$id->no_rekening}}</td>
                   <td>{{$tariks}}</td>
                   <td>{{$setors}}</td>
                   <td>{{$saldo}}</td>
                 </tr>

               </tbody>
             </table>
             </div>
            </div>
          </div>



        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
@endsection
