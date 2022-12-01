

@extends('template.templat')

@section('content')
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">


                    <div class="card shadow  ml-4 mr-4">
                    <div class="card-header py-3">
                      <h6 class="m-0 font-weight-bold text-primary">Ubah Password:</h6>
                    </div>

<!--

                          echo "<div class='col-md-10 col-sm-12 col-xs-12 ml-5 mt-5'>";
                             echo "<div class='alert alert-danger mt-4 ml-5' role='alert'>";
                            echo "<p><center>Maaf Data Ini Tidak Tersedia</center></p>";
                             echo   "</div>";
                             echo "</div>"; -->




                  <form action="/ubah" method="post">
                    @csrf
                    <div class="row ml-5 mb-2 mt-3">
                      <div class="col-md-6">

                   <input class="form-control" type="hidden" name='username'  value="{{Auth::user()->username}}" required>

                    <P><b>Password Lama</b></p>
                    <input class="form-control" type="password" name='oldPassword'  placeholder="Password Lama..." required autocomplete="off">

                    <P><b>Password Baru</b></p>
                    <input class="form-control" type="password" name='newPassword' value="" placeholder="Password Baru..." required autocomplete="off">

                    <P><b>Ulangi Password Baru</b></p>
                    <input class="form-control" type="password" name='newPassword_confirmation' value="" placeholder="Password Baru..." required autocomplete="off">

                    </div>

                  </div>
                  <div class="row ml-5 mb-4 mt-3">

                  <div class="col-md-5">
                  <button type="submit" class="btn btn-info" name='edit'>Update</button>&nbsp;<input type="reset" class="btn btn-danger"  value="Reset">
                  <a href="/dashboard"><button type="button" class="btn btn-light">Kembali</button></a>
                  </div>

                  </div>

                  </form>

<!--
                  if(isset($_GET['pesan'])){
                  $pesan= addslashes($_GET['pesan']);
                  if($pesan=="gagal"){
                  echo "<div class='col-md-10 col-sm-12 col-xs-12 ml-5'>";
                  echo "<div class='alert alert-danger mt-4 ml-5' role='alert'>";
                  echo "<p><center>Gagal Mengganti Password</center></p>";
                  echo   "</div>";
                  echo "</div>";


                  }else if($pesan=="tdksama"){
                  echo "<div class='col-md-10 col-sm-12 col-xs-12 ml-5'>";
                  echo "<div class='alert alert-warning mt-4 ml-5' role='alert'>";
                  echo "<p><center>Password Yang Anda Masukan Tidak Sama</center></p>";
                  echo   "</div>";
                  echo "</div>";
                  }
                  } -->

                  </div>








        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
@endsection
