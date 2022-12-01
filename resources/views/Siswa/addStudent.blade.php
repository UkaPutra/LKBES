
@extends('template.templat')

@section('content')
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">


          <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
<h6 class="m-0 font-weight-bold text-primary">Tambah Siswa:</h6>
            </div>
            <!-- Card Body -->
            <div class="card-body">

              <form action="tambah_siswa" name='kirim' method="POST">
                @csrf

              <div class="col">




              {{-- <div class="col-sm-4">
              <label><b>No Rekening:</label>
              <input class="form-control form-control-sm" type="text" placeholder="No Rekening..." aria-label=".form-control-sm example" name='no_rekening' required>
              </div> --}}

              <div class="col-sm-4">
              <label>Nama Siswa:</label>
              <input class="form-control form-control-sm" type="text" placeholder="Nama Siswa..." aria-label=".form-control-sm example" name='nama_siswa' required>
              </div>

              <div class="col-sm-4">
              <label>Kelas:</label>
              {{-- <input class="form-control form-control-sm" type="text" placeholder="Kelas..." aria-label=".form-control-sm example" name='kelas' required> --}}
              <div class="input-field">
                <select class="form-control selectpicker" name="kelas" required>
                    <option value="" selected disabled>PILIH KELAS</option>
                    @foreach($classrooms as $classroom)
                   <option value="{{$classroom->id}}">{{$classroom->nama}}</option>
                    @endforeach
                  </select>
                </div>
              </div>

              <div class="col-sm-4">
              <label>Alamat:</label>
             <input class="form-control form-control-sm" type="text" placeholder="Alamat..." aria-label=".form-control-sm example" name='alamat' required>
              </div>

              <div class="col-sm-4">
              <label>Jenis Kelamin:</label>
              <td>
             <select class="form-control selectpicker" name="jk" required>
             <option value="" selected disabled>- pilih -</option>
            <option value="Laki-laki">Laki-laki</option>
             <option value="Perempuan">Perempuan</option>
            </select>
             </td>
              </div>

              <div class="col-sm-4">
              <label>No.Telepon:</label>
              <input class="form-control form-control-sm" type="text"  placeholder="No HP..." aria-label=".form-control-sm example" name='no_hp' required>
              </div>


              </div>

              <br/>
              <div class="col-md-10">
              <button type="submit" class="btn btn-primary" name='kirim'>Kirim</button></a>
              <a href="/daftar_siswa"><button type="button" class="btn btn-light">Kembali</button></a>
              </div>
         </form>



                {{-- if(isset($_POST['kirim'])){

                  $ceknis =mysqli_num_rows (mysqli_query($conn, "select nis from siswa where nis ='$_POST[nis]'"));

                  if($ceknis > 0){

                    echo "<div class='col-md-10 col-sm-12 col-xs-12 ml-5'>";
                    echo "<div class='alert alert-warning mt-4 ml-5' role='alert'>";
                    echo "<p><center>Oops! Duplikat NIS...</center></p>";
                    echo   "</div>";
                    echo "</div>";

                    $nis  === $_POST['nis'];
                    $no_rekening  === $_POST['no_rekening'];
                    $nama  === $_POST['nama_siswa'];
                    $kelas  === $_POST['kelas'];
                    $alamat  === $_POST['alamat'];
                    $jk  === $_POST['jk'];
                    $hp  === $_POST['no_hp'];


                  }else{

                    $nis = htmlspecialchars($_POST['nis']);
                    $no_rekening = htmlspecialchars($_POST['no_rekening']);
                    $nama = htmlspecialchars($_POST['nama_siswa']);
                    $kelas = htmlspecialchars($_POST['kelas']);
                    $alamat = htmlspecialchars($_POST['alamat']);
                    $jk = htmlspecialchars($_POST['jk']);
                    $hp = htmlspecialchars($_POST['no_hp']);

                    $sql = "INSERT INTO siswa VALUES
                              ('', '$nis', '$nama', '$kelas', '$alamat', '$jk', '$hp')";
                    $query = mysqli_query($conn, $sql);

                    $sql = "SELECT max(id_siswa) AS last_id FROM siswa LIMIT 1";
                    $query = mysqli_query($conn, $sql);

                    $data = mysqli_fetch_array($query);
                    $last_id = $data['last_id'];

                    $sql = "INSERT INTO tabungan (id_siswa, no_rekening) VALUES
                            ('$last_id', '$no_rekening')";
                    $query = mysqli_query($conn, $sql);

               if($query){
                 echo "<div class='col-md-10 col-sm-12 col-xs-12'>";
                 echo "<div class='alert alert-primary mt-4 ml-5' role='alert'>";
                 echo "<p><center>Data Sudah Masuk</center></p>";
                 echo   "</div>";
                 echo "</div>";
               }else{
                 echo "<div class='col-md-10 col-sm-12 col-xs-12'>";
                 echo "<div class='alert alert-danger mt-4 ml-5' role='alert'>";
                 echo "<p><center>Data Gagal Masuk</center></p>";
                 echo   "</div>";
                 echo "</div>";

               }


            }
                }
 --}}



</div>
</div>


        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      {{-- <footer class="sticky-footer bg-white"> --}}
        {{-- <div class="container my-auto"> --}}
          {{-- <div class="copyright text-center my-auto"> --}}
           <!-- <span><p class="mb-1">Copyright &copy; <a href="https://github.com/Faiznurullah" style="text-decoration: none;"><b>Faiz Nurullah</b></a></p></span><br>
          </div>
        </div>
      </footer>
      !-- End of Content Wrapper -->
     @endsection
