@extends('template.templat')

@section('content')

        <div class="container-fluid">


<div class="card shadow mb-4">
  <!-- Card Header - Dropdown -->
  <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
<h6 class="m-0 font-weight-bold text-primary">Data Saldo Siswa:</h6>
  </div>
  <!-- Card Body -->
  <div class="card-body">

    {{-- $jumlah_cos=mysqli_query($conn,"SELECT COUNT(*) as id from siswa");
    $row = mysqli_fetch_array($jumlah_cos);
    $jum = $row['id'];


    $hmm= $jum;
    $hal= 10;
    $page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
    $start = ($page - 1) * $hal;
    $kap = $hal * $hal; --}}

     <div class="row mt-3">


     <div class="col-md-8  mt-4">


<h7 class="m-0 font-weight-bold"></h7><br>
<a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm mt-1"><i class="fas fa-download fa-sm text-white-50"></i> Unduh Laporan</a>

     </div>

     <div class="col-md-4 mt-5 ">
       <form class="form-inline my-2 my-lg-0" action="cari_siswa.php" method="get" name='cari'>
             <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name='cari'  required>
             <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
           </form>
     </div>

     </div>
{{-- if(isset($_GET['hapus'])){
$pesan= addslashes($_GET['hapus']);

if($pesan=="sukses"){

echo "<div class='col-md-10 col-sm-12 col-xs-12 ml-5'>";
echo "<div class='alert alert-danger mt-4 ml-5' role='alert'>";
echo "<p><center>Sukses Menghapus</center></p>";
echo   "</div>";
echo "</div>";




}else{

echo "<div class='col-md-10 col-sm-12 col-xs-12 ml-5'>";
echo "<div class='alert alert-danger mt-4 ml-5' role='alert'>";
echo "<p><center>Gagal Menghapus</center></p>";
echo   "</div>";
echo "</div>";
}

} --}}

     <div class="table-responsive service">
     <table class="table table-bordered table-hover  mt-3 text-nowrap css-serial">
     <thead>
       <tr>
         <th scope="col"><center>No</center></th>
         <th scope="col"><center>No.Rekening</center></th>
         <th scope="col"><center>Nama Siswa</center></th>
         <th scope="col"><center>Saldo</center></th>
         {{-- <th scope="col"><center>Aksi</center></th> --}}
        </tr>

     </thead>
   {{-- //  if(isset($_GET['cari'])){
    //   $cari=mysqli_real_escape_string($conn, $_GET['cari']);
    //   $brg=mysqli_query($conn, "select * from siswa where id like '%".$cari."%' or nama like '%".$cari."%' or alamat like '%".$cari."%' ");

//    if(mysqli_num_rows($brg) > 0){
//            echo "<div class='col-md-10 col-sm-12 col-xs-12 ml-5'>";
//            echo "<div class='alert alert-primary mt-4 ml-5' role='alert'>";
//            echo "<p><center>Data Yang Anda Cari Ditemukan</center></p>";
//            echo   "</div>";
//            echo "</div>";

//    }else{

//          echo "<div class='col-md-10 col-sm-12 col-xs-12 ml-5'>";
//          echo "<div class='alert alert-danger mt-4 ml-5' role='alert'>";
//          echo "<p><center>$cari Data Yang Anda Cari Tidak Ditemukan</center></p>";
//          echo   "</div>";
//          echo "</div>";


//    }




//     }else{
//       $brg=mysqli_query($conn, "select * from saldo limit $start, $hal");
//     }




//    if(mysqli_num_rows($brg)){
//     $nomor=1;
//         while($row = mysqli_fetch_array($brg)){ --}}

     <tbody>
         @forelse ($students as $student)
       <tr>

        <th scope="row"><center>{{$loop->iteration}}</center></th>
        <td><center>{{$student->no_rekening}}</center></td>
        <td><center>{{$student->nama_siswa}}</center></td>
        @php
           $tariks = DB::table('tariks')->where('siswa_id',$student->id)->sum('tarik');
           $setors = DB::table('setors')->where('siswa_id', $student->id)->sum('setor');
           $saldo = $setors - $tariks;
        @endphp
        <td><center>Rp. {{number_format($saldo)}}</center></td>
        {{-- <td><center>
            <a href="/detail_saldo/{{$student->id}}"><button type="button" class="btn btn-warning">Detail</button></a>
        </center>
         </td> --}}

        </tr>
        @empty
    kontol
        @endforelse

     </tbody>




   </table>



   <nav aria-label="Page navigation example">
   <ul class="pagination">
     {{-- for($x=1;$x<=$hal ;$x++){ --}}

       {{-- <li class="page-item"><a class="page-link" href="?page=</a></li> --}}




   </ul>
   </nav>
   </div>



  </div>
</div>



</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

@endsection
