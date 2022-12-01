

@extends('template.templat')

@section('content')


<!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">


                        <div class="card shadow mb-4">
                          <!-- Card Header - Dropdown -->
                          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
             <h6 class="m-0 font-weight-bold text-primary">Data Siswa:</h6>
                          </div>
                          <!-- Card Body -->
                          <div class="card-body">

                            {{-- $jumlah_cos=mysqli_query($conn,"SELECT COUNT(*) as id_siswa from siswa");
                            $row = mysqli_fetch_array($jumlah_cos);
                            $jum = $row['id_siswa'];


                            $hmm= $jum;
                            $hal= 10;
                            $page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
                            $start = ($page - 1) * $hal;
                            $kap = $hal * $hal; --}}

                             <div class="row mt-3">


                             <div class="col-md-5  ">


                     {{-- <h7 class=" font-weight-bold"></h7><br> --}}
                     <a href="/export_siswa" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm mt-1"><i class="fas fa-download fa-sm text-white-50"></i> Unduh Laporan</a>

                    </div>
                    <div class="col-md-8 mt-1">
                        <select class="form-control selectpicker" name="pilihKelas" required style="width: 150px">
                            <option value="" selected disabled>PILIH KELAS</option>
                            @foreach($students as $student)
                            <button type="button" value="{{$student->kelas_id}}">{{$student->kelas->nama}}</button>
                            <option value="{{$student->kelas_id}}">{{$student->kelas->nama}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-4">
                        <form class="form-inline my-2 my-lg-0" action="/daftar_siswa" method="get">
                            @csrf
                            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name='search' value="{{request('search')}}">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                            <a href="/daftar_siswa" class="btn btn-outline-primary" style="margin-left: 5px">Refresh</a>
                        </form>
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
                                 <th scope="col"><center>No</th>
                                 {{-- <th scope="col"><center>NIS</th> --}}
                                 <th scope="col"><center>No Rekening</th>
                                 <th scope="col"><center>Nama Siswa</th>
                                 <th scope="col"><center>Kelas</th>
                                 <th scope="col"><center>Alamat</th>
                                 <th scope="col"><center>Jenis Kelamin</th>
                                 <th scope="col"><center>No Telepon</th>
                                 <th scope="col"><center>Aksi</th>
                                </tr>
                             </thead>
                             <!-- if(isset($_GET['cari'])){
                              $cari=mysqli_real_escape_string($conn, $_GET['cari']);
                              $brg=mysqli_query($conn, "SELECT * FROM tabungan INNER JOIN siswa ON tabungan.id_siswa = siswa.id_siswa WHERE jk like '%".$cari."%' or kelas like '%".$cari."%' or nis like '%".$cari."%' or no_rekening like '%".$cari."%' or nama_siswa like '%".$cari."%' ");
                           if(mysqli_num_rows($brg) > 0){
                                   echo "<div class='col-md-10 col-sm-12 col-xs-12 ml-5'>";
                                   echo "<div class='alert alert-primary mt-4 ml-5' role='alert'>";
                                   echo "<p><center>Data Yang Anda Cari Ditemukan</center></p>";
                                   echo   "</div>";
                                   echo "</div>";

                           }else{

                                 echo "<div class='col-md-10 col-sm-12 col-xs-12 ml-5'>";
                                 echo "<div class='alert alert-danger mt-4 ml-5' role='alert'>";
                                 echo "<p><center>$cari Data Yang Anda Cari Tidak Ditemukan</center></p>";
                                 echo   "</div>";
                                 echo "</div>";


                           }




                            }else{
                              $brg=mysqli_query($conn, "SELECT * FROM tabungan INNER JOIN siswa
                                                ON tabungan.id_siswa = siswa.id_siswa LIMIT $start, $hal");
                            }




                           if(mysqli_num_rows($brg)){

                            $nomor=1;
                                while($row = mysqli_fetch_array($brg)){
 -->

                             <tbody>
                                @forelse ($students as $student )

                                <tr>
                                    <td>
                                        <CEnter>
                                        {{$loop->iteration}}
                                        </CEnter>
                                    </td>

                                    <td>
                                        <center>
                                            {{$student->no_rekening}}
                                        </center>
                                    </td>
                                    <td><center>
                                        {{$student->nama_siswa}}
                                    </center>
                                    </td>
                                    <td><center>

                                        {{$student->kelas->nama}}
                                    </center>
                                    </td>
                                    <td>
                                        <center>
                                            {{$student->alamat}}
                                        </center>
                                    </td>
                                    <td><center>

                                        {{$student->jk}}
                                    </center>
                                    </td>
                                    <td>
                                        <center>
                                            {{$student->no_hp}}
                                        </center>
                                    </td>
                                    <td>
                                        <center>

                                            <a href="/detail/{{$student->id}}"><button type="button" class="btn btn-warning">Detail</button></a>  &nbsp;<a href="/edit_siswa/{{$student->id}}"><button type="button" class="btn btn-success">Edit</button></a> &nbsp; <a href="/hapus_siswa/{{$student->id}}"><button type="button" class="btn btn-danger">Hapus</button></a>
                                        </center>
                                    </td>

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



                           {{-- <nav aria-label="Page navigation example"> --}}
                           {{-- <ul class="pagination"> --}}
                             {{-- for($x=1;$x<=$hal ;$x++){
                               <li class="page-item"><a class="page-link" href="?page=</a></li>
                             } --}}



                             {{-- </ul> --}}
                             {{-- </nav> --}}
                            </div>

                            {{$students->links()}}


                          </div>
                        </div>



        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

     @endsection
