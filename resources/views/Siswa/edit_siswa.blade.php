@extends('template.templat')
@section('content')
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">


            <!-- $id_siswa= ($_GET['id_siswa']);
            $ggl = !$id_siswa;
            if($ggl){ -->

                <!-- echo "<div class='col-md-10 col-sm-12 col-xs-12 ml-5 mt-5'>";
                   echo "<div class='alert alert-danger mt-4 ml-5' role='alert'>";
                  echo "<p><center>Maaf Data Ini Tidak Tersedia</center></p>";
                   echo   "</div>";
                   echo "</div>";

            }else{
            $det=mysqli_query($conn, "select * from siswa JOIN tabungan ON tabungan.id_siswa=siswa.id_siswa where siswa.id_siswa='$id_siswa'");
            while($d=mysqli_fetch_array($det)){ -->
          <div class="card shadow  ml-4 mr-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Edit Data Siswa:</h6>
            </div>



        <form action="/edit_siswa/{{$id->id}}"   method="post" enctype="multipart/form-data">
            @csrf
          <div class="row ml-5 mb-2 mt-3">
            <div class="col-md-6">

        <P><b>Nama :</b></p>
         <input class="form-control" type="text" name='nama_siswa' placeholder="Nama..."  value="{{$id->nama_siswa}}" required>

         <P><b>Kelas:</b></p>
          <div class="input-field">
                <select class="form-control selectpicker" name="kelas" required>
                    <option value="" selected disabled>PILIH KELAS</option>
                    @foreach($classrooms as $classroom)
                   <option value="{{$classroom->id}}">{{$classroom->nama}}</option>
                    @endforeach
                  </select>
                </div>
           <P><b>Alamat:</b></p>
        <input class="form-control" type="text" name='alamat' placeholder="Alamat..."  value="{{$id->alamat}}" required>

        <P><b>Jenis Kelamin:</b></p>
            {{-- <select class="form-control selectpicker" name="jk" required> --}}
            {{-- @foreach ($students as $student) --}}
               {{-- <option value="">{{$student->jk}}</option> --}}
               <label for="jenis_kelamin">
            <select class="form-control selectpicker" name="jk" required>
                <option value="" selected disabled>- pilih -</option>
                <option name="jk" value="laki-laki" id="jenis_kelamin" {{$id->jk == 'laki-laki'? 'checked' : ''}} >Laki-Laki
                    <option name="jk" value="perempuan" id="jenis_kelamin" {{$id->jk == 'perempuan'? 'checked' : ''}} >Perempuan
            </select>

            </label>
               {{-- @endforeach --}}
            {{-- </select> --}}


        <P><b>No Telepon:</b></p>
         <input class="form-control" type="text" name='no_hp' placeholder="No HP..."  value="{{$id->no_hp}}" required>




          </div>

        </div>
        <div class="row ml-5 mb-4 mt-3">

        <div class="col-md-5">
        <button type="submit" class="btn btn-primary" >Update</button>&nbsp;
        <a href="/daftar_siswa"><button type="button" class="btn btn-light">Kembali</button></a>
      </div>

        </div>

        </form>

<!--
          if(isset($_POST['edit'])){
            $nis= htmlspecialchars($_POST['nis']);
            $no_rekening= htmlspecialchars($_POST['no_rekening']);
           $nama= htmlspecialchars($_POST['nama']);
           $kelas= htmlspecialchars($_POST['kelas']);
           $alamat= htmlspecialchars($_POST['alamat']);
           $jk= htmlspecialchars($_POST['jk']);
           $hp= htmlspecialchars($_POST['no_hp']);
 -->


                             <!-- $rew = mysqli_query($conn, "SELECT * FROM tabungan INNER JOIN siswa
                             ON tabungan.id_siswa = siswa.id_siswa");
                             $chak = mysqli_num_rows($rew);
                             if($chak > 0){

                               $rew = mysqli_fetch_array($rew);
                               $nis === $rew['nis'];
                               $no_rekening === $rew['no_rekening'];
                               $nama === $rew['nama_siswa'];
                               $kelas === $rew['kelas'];
                               $alamat === $rew['alamat'];
                               $jk === $rew['jk'];
                               $hp === $rew['no_hp']; -->





                               <!-- echo "<div class='col-md-10 col-sm-12 col-xs-12 ml-5'>";
                                     echo "<div class='alert alert-warning mt-4 ml-5' role='alert'>";
                                    echo "<p><center>Data Yang Telah Anda Perbarui Sudah Tersedia</center></p>";
                                     echo   "</div>";
                                     echo "</div>";


                             }else{



         $edit = mysqli_query($conn, "UPDATE siswa SET
        nis ='$nis',
        no_rekening ='$no_rekening',
        nama_siswa ='$nama',
        kelas ='$kelas',
        alamat ='$alamat',
        jk ='$jk',
        no_hp ='$hp'
        WHERE id_siswa ='".$_GET['id_siswa']."'
            ");

          if($edit){



                                        echo "<div class='col-md-10 col-sm-12 col-xs-12 ml-5'>";
                                           echo "<div class='alert alert-primary mt-4 ml-5' role='alert'>";
                                          echo "<p><center>Mengedit Data Sukses</center></p>";
                                           echo   "</div>";
                                           echo "</div>";

          }else{


                            echo "<div class='col-md-10 col-sm-12 col-xs-12 ml-5'>";
                               echo "<div class='alert alert-danger mt-4 ml-5' role='alert'>";
                              echo "<p><center>Mengedit Data Gagal</center></p>";
                               echo   "</div>";
                               echo "</div>";

          }

        }

          }


 -->


        </div>



        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

    @endsection
