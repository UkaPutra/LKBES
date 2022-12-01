@extends('template.templat')
@section('content')
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
<h6 class="m-0 font-weight-bold text-primary">Setor Uang Kas:</h6>
            </div>
            <!-- Card Body -->
            <div class="card-body">

              <form action='/setor' name='kirim' method='post'>
                @csrf

              <div class="row">


                <div class="col-sm-4">
              <label>Nama Anggota:</label>
              <select class="form-control" name='nama' required>
              <option selected disabled value="">Nama Anggota</option>
                 <!-- $brg=mysqli_query($conn, "select * from anggota where level_kas = '0'"); -->
                 <!-- while($b=mysqli_fetch_array($brg)){ -->
                    @foreach ($students as $student )
                    <option value="{{$student->id}}">{{$student->nama_siswa}}</option>

                    @endforeach

              </select>
              </div>



              <div class="col-sm-4">
              <label>Uang Setor:</label>
        <input class="form-control form-control-sm" type="number" placeholder="Jumlah Uang..." aria-label=".form-control-sm example" name='jumlah' required>
              </div>

              <div class="col-sm-4">
              <label>Tanggal Setor:</label>
              <input class="form-control form-control-sm" type="date"  aria-label=".form-control-sm example" name='date' required>
              </div>


              </div>


              <button type="submit" class="btn btn-primary btn-lg btn-block mt-4" name='kirim'>Kirim</button>

              </form>


                <!-- if(isset($_POST['kirim'])){
               $nama = htmlspecialchars($_POST['nama']);
               $jumlah = htmlspecialchars($_POST['jumlah']);
               $date = htmlspecialchars($_POST['date']);
               $levelw = 1;

               $wet =mysqli_query($conn, "select * from kas where nama ='$nama'");
               $chak = mysqli_num_rows($wet);
               if($chak > 0){

                 $rew = mysqli_fetch_array($wet);

                 $nama  === $rew['nama'];



                 echo "<div class='col-md-10 col-sm-12 col-xs-12 ml-5'>";
                 echo "<div class='alert alert-warning mt-4 ml-5' role='alert'>";
                 echo "<p><center>Data Yang Anda Kirim Sudah Tersedia</center></p>";
                 echo   "</div>";
                 echo "</div>";


               }else{





               $insert = mysqli_query($conn, "INSERT INTO kas VALUES (
                NULL,
                '$nama',
                '$jumlah',
                '$date'
                  )");

                  $levelw = mysqli_query($conn, "UPDATE anggota SET
                 level_kas = '$levelw'
                 WHERE nama ='".$nama."'
                     ");


               if($insert && $levelw){
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

 -->


</div>
</div>



        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

@endsection
