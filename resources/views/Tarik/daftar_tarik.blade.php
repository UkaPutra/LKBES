@extends('template.templat')
@section('content')
<!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">



                                  <div class="card shadow mb-4">
                                    <!-- Card Header - Dropdown -->
                                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                       <h6 class="m-0 font-weight-bold text-primary">Data Penarikan :</h6>
                                    </div>
                                    <!-- Card Body -->
                                    <div class="card-body">

                                      <!-- $jumlah_cos=mysqli_query($conn,"SELECT COUNT(*) as id from kas");
                                      $row = mysqli_fetch_array($jumlah_cos);
                                      $jum = $row['id'];


                                      $hmm= $jum;
                                      $hal= 8;
                                      $page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
                                      $start = ($page - 1) * $hal;
                                      $kap = $hal * $hal; -->

                                       <div class="row mt-3">


                                       <div class="col-md-8  mt-4">


                               {{-- <h7 class="m-0 font-weight-bold">Kapasitas Kas Di Tabel: 100</h7><br> --}}
                               <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm mt-1"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>

                                       </div>


                                       </div>
                    <!-- if(isset($_GET['hapus'])){
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

                    } -->
                                       <div class="table-responsive service">
                                       <table class="table table-bordered table-hover  mt-3 text-nowrap css-serial">
                                       <thead>
                                         <tr>
                                           <th scope="col"><center>

                                               No
                                           </center>
                                        </th>
                                           <th scope="col">
                                            <center>

                                                Nama Anggota
                                            </center>
                                        </th>
                                           <th scope="col"><center> Jumlah</center>
                                           </th>
                                           <th scope="col"><center>Tanggal Tarik</center></th>
                                           <th scope="col"><center>Aksi</center></th>
                                          </tr>

                                       </thead>
                                       <!-- if(isset($_GET['cari'])){
                                        $cari=mysqli_real_escape_string($conn, $_GET['cari']);
                                        $brg=mysqli_query($conn, "select * from kas where id like '%".$cari."%' or nama like '%".$cari."%'  ");

                                     if(mysqli_num_rows($brg) > 0){
                                             echo "<div class='col-md-10 col-sm-12 col-xs-12 ml-5'>";
                                             echo "<div class='alert alert-primary mt-4 ml-5' role='alert'>";
                                             echo "<p><center>Data Yang Anda Cari  Ditemukan</center></p>";
                                             echo   "</div>";
                                             echo "</div>";

                                     }else{

                                           echo "<div class='col-md-10 col-sm-12 col-xs-12 ml-5'>";
                                           echo "<div class='alert alert-danger mt-4 ml-5' role='alert'>";
                                           echo "<p><center>$cari Yang Anda Cari Tidak Ditemukan</center></p>";
                                           echo   "</div>";
                                           echo "</div>";


                                     }




                                      }else{
                                        $brg=mysqli_query($conn, "select * from kas limit $start, $hal");
                                      }




                                     if(mysqli_num_rows($brg)){

                                          while($row = mysqli_fetch_array($brg)){
 -->

                                       <tbody>
                                        @forelse ($tariks as $tarik)

                                        <tr>
                                          <th scope="row"><center>{{$loop->iteration}}</center></th>
                                          <td><center>{{$tarik->siswa->nama_siswa}}</center></td>
                                          <td><center>Rp. {{number_format($tarik->tarik)}}</center></td>
                                          <td><center>{{\Carbon\Carbon::parse( $tarik->tgl_tarik)->format('d-m-Y')}}</center></td>
                                          <td><center>&nbsp;<a href="/edit_tarik/{{$tarik->id}}"><button type="button" class="btn btn-success">Edit</button></a> &nbsp; <a href="/hapus_tarik/{{$tarik->id}}"><button type="button" class="btn btn-danger">Hapus</button></a> &nbsp;</center></td>

                                        </tr>
                                        @empty

                                        <div class='col-md-10 col-sm-12 col-xs-12 ml-5'>
                                        <div class='alert alert-danger mt-4 ml-5' role='alert'>
                                        <p><center>Data Anda Masih Kosong</center></p>
                                        </div>
                                        </div>
                                        @endforelse

                                       </tbody>







                                     </table>



                                     <nav aria-label="Page navigation example">
                                     <ul class="pagination">
                                       <!-- for($x=1;$x<=$hal ;$x++){
                                         ?>
                                         <li class="page-item"><a class="page-link" href=""</a></li>
                                       }
 -->
                                        {{$tariks->links()}}


                                     </ul>
                                     </nav>
                                     </div>



                                    </div>
                                  </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
@endsection
