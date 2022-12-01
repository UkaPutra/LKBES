
@extends('template.templat')

@section('content')        <!-- End of Topbar -->

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
              <h6 class="m-0 font-weight-bold text-primary">Ubah Nama
                 {{-- Dan Foto: --}}
              </h6>
                          </div>
                          <!-- $id= ($_GET['id']);

                            $tak = !$id;
                            if($tak){

                                echo "<div class='col-md-10 col-sm-12 col-xs-12 ml-5 mt-5'>";
                                   echo "<div class='alert alert-danger mt-4 ml-5' role='alert'>";
                                  echo "<p><center>Maaf Data Ini Tidak Tersedia</center></p>";
                                   echo   "</div>";
                                   echo "</div>";

                            }else{
                            $det=mysqli_query($conn, "select * from admin where id='$id'");
                            $d=mysqli_fetch_array($det); -->


                          <!-- Card Body -->
                          <div class="card-body">


                            <form action="pengaturan" method="post" name="edit" enctype="multipart/form-data" required>
                            @csrf
                                <div class="row ml-5 mb-2 mt-3">


                            <div class="col-md-4">
                            <P><b>Ganti Nama</b></p>
                            <input class="form-control" type="text"  value="" placeholder="Ganti Nama..." name="nama" required>

                            {{-- <P><b>Ganti Foto Profile</b></p>
                            <input class="form-control" type="file"  value=""  name="pict" accept="image/jpeg, image/png, image/svg"  required> --}}

                            </div>
                            </div>

                            <div class="row ml-5 mb-2 mt-3">

                            <div class="col-md-5">
                            <button type="submit" class="btn btn-info" name='edit'>Update</button>&nbsp;<input type="reset" class="btn btn-danger" value="Reset">
                            <a href="/dashboard"><button type="button" class="btn btn-light">Kembali</button></a>
                            </div>

                            </div>
                            </form>


                          </div>


                            {{-- //   $id_siswa= $_GET['id'];

                            //    if(isset($_POST['edit'])){

                            //      $nama = $_POST['name'];
                            //      $nama_file = $_FILES['pict']['name'];
                            //      $ukuran_file = $_FILES['pict']['size'];
                            //      $source = $_FILES['pict']['tmp_name'];
                            //      $folder = './img/';
                            //      $boleh_eks = array('png', 'jpg', 'svg');
                            //      $x = explode('.', $nama_file);
                            //      $ekstensi = strtolower(end($x));

                            //   if(in_array($ekstensi, $boleh_eks) === true){

                            //   if($ukuran_file < 3044070){

                            //        move_uploaded_file($source,$folder.$nama_file);

                            //        $insert = mysqli_query($conn, "UPDATE admin SET
                            //        foto = '$nama_file',
                            //        nama = '$nama'
                            //        WHERE id = '$id_siswa'
                            //          "); --}}

                          {{-- if($insert){

                            echo "<div class='col-md-10 col-sm-12 col-xs-12 ml-5 mt-5'>";
                               echo "<div class='alert alert-primary mt-4 ml-5' role='alert'>";
                              echo "<p><center>Update Profile Sukses</center></p>";
                               echo   "</div>";
                               echo "</div>";


                          }else{
                            echo "<div class='col-md-10 col-sm-12 col-xs-12 ml-5 mt-5'>";
                               echo "<div class='alert alert-danger mt-4 ml-5' role='alert'>";
                              echo "<p><center>Update Profile Gagal</center></p>";
                               echo   "</div>";
                               echo "</div>";

                          }



                          }else{

                            echo "<div class='col-md-10 col-sm-12 col-xs-12 ml-5 mt-5'>";
                               echo "<div class='alert alert-danger mt-4 ml-5' role='alert'>";
                              echo "<p><center>Ukuran File Terlalu Besar</center></p>";
                               echo   "</div>";
                               echo "</div>";


                          }


                          }else{
                            echo "<div class='col-md-10 col-sm-12 col-xs-12 ml-5 mt-5'>";
                               echo "<div class='alert alert-danger mt-4 ml-5' role='alert'>";
                              echo "<p><center>Hanya Boleh File Type Gambar Saja</center></p>";
                               echo   "</div>";
                               echo "</div>";

                          }




                           } --}}




                        </div>
                      </div>

                    </div>


        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
@endsection
