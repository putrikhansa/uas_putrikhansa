<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <center>
  <body>
  <form method="post">
    <center><p><img src="logo.png" alt="" width="10%" ></p>
    <p><b>PENGGAJIHAN</b></p>
    <p><b>GURU/KARYAWAN YAYASAN ASSALAAM</b></p>
    </center>
    
  <div class="card" style="width:50%" align="left">
  <div class="card-header" >
    Data Penggajihan
  </div>
  <div class="card-body " >
  
  <div class="mb-3">
    <label for="no" class="form-label" >No</label>
    <input type="text" class="form-control" id="" placeholder="No" name="no" >
  </div>
  <div class="mb-3">
    <label for="nama" class="form-label" >Nama</label>
    <input type="text" class="form-control" id="nama" name = "nama" placeholder="Nama" >
  </div>
  <div class="mb-3">
  <label for="unit" class="form-label" >Unit Pendidikan</label><b> <br></b>
  <select class="form-select" aria-label="select" name="unit">
  <option selected>Pilih Unit Pendidikan</option>
  <option value="SD">SD</option>
  <option value="SMP">SMP</option>
  <option value="MTS">MTS</option>
  <option value="MA">MA</option>
  <option value="SMA">SMA</option>
  <option value="SMK">SMK</option>
  
</select>   
  </div>
  <div class="mb-3">
    <label for="tanggal" class="form-label" >Tanggal Gaji</label>
    <input type="date" class="form-control" id="tanggal" name="tanggal_gaji"  >
  </div>

  <div class="row">
  <div class="col-sm-6">
    <div class="">
      <div class="card-body">
        <h5 class="card-title">Gaji</h5>
        <div class="mb-3">
  <label for="jabatan" class="form-label" >Jabatan</label><b> <br></b>
  <select class="form-select" aria-label="select" name="jabatan">
  <option selected>Pilih Jabatan</option>
  <option value="Kepala Sekolah">Kepala Sekolah</option>
  <option value="Wakasek">Wakasek</option>
  <option value="Guru">Guru</option>
  <option value="Karyawan">Karyawan</option>
  </select>
      </div>

      <div class="mb-3">
      <label for="kerja" class="form-label" >Lama Kerja</label>
      <input type="text" class="form-control" id="kerja" name = "lama_kerja" placeholder="Lama Kerja" >
      </div>

        
  <label for="status" class="form-label" name="status">Status Kerja</label><b> <br></b>
  <select class="form-select" aria-label="select" name="status">
  <option selected>Pilih  Status Kerja</option>
  <option value="Tetap">Tetap</option>
  <option value="Kontrak">Kontrak</option>
</select>
        </div>
        </div>
        </div>
  


  <div class="col-sm-6" >
    <div class="">
      <div class="card-body">
        <h5 class="card-title">Potongan</h5>
        <div class="mb-3">
        <label for="bpjs" class="form-label" >BPJS</label>
        <input type="text" class="form-control" id="bpjs" name = "bpjs" placeholder="" >
      </div>

      <div class="mb-3">
        <label for="pinjaman" class="form-label" >Pinjaman</label>
        <input type="text" class="form-control" id="pinjaman" name = "pinjaman" placeholder="Pinjaman" >
      </div>

      <div class="mb-3">
        <label for="cicilan" class="form-label" >Cicilan</label>
        <input type="text" class="form-control" id="cicilan" name = "cicilan" placeholder="Tabungan" >
      </div>

      <div class="mb-3">
        <label for="Infaq" class="form-label" >Infaq</label>
        <input type="text" class="form-control" id="Infaq" name = "infaq" placeholder="Infaq" >
      </div>

      </div>
      </div>
  </div>
</div>


  <br>

 <center><button type="submit" class="btn btn-primary" name="simpan">Proses</button></center> 
</form>
   
  </div>
</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
 
</html>

<?php
if(isset($_POST['simpan'])){
    
  $no = $_POST['no'];
  $nama = $_POST['nama'];
  $unit = $_POST['unit'];
  $tanggal = $_POST['tanggal_gaji'];
  $jabatan = $_POST['jabatan'];
  $lama_kerja = $_POST['lama_kerja'];
  $status = $_POST['status'];
  $bpjs = $_POST['bpjs'];
  $pinjaman = $_POST['pinjaman'];
  $cicilan = $_POST['cicilan'];
  $infaq = $_POST['infaq'];

 
    if($jabatan == "Kepala Sekolah"){
        $gaji = 10000000;
    } elseif($jabatan == "Wakasek"){
        $gaji = 7500000;
    } elseif($jabatan == "Guru"){
        $gaji = 5000000;
    } elseif($jabatan == "Karyawan"){
        $gaji = 2500000;
    } else {
        $gaji = 0;
    }   

    $bonus = ($status == "Tetap") ? 1000000 : 0;

      $gaji_kotor = $gaji + $bonus;
      $total = $bpjs + $pinjaman+$cicilan+$infaq;
      $gB =  $gaji_kotor - $total;

  class Gaji{
  
   

      public function data($no, $nama, $unit, $tanggal, $jabatan, $gaji, $lama_kerja, $status, $bonus, $bpjs, $pinjaman, $cicilan, $infaq, $gB){

          
?>
<center>
  <br>
   
    <div class="card" style="width:30%" align="center">
  <div class="card-header" >
  <b> PUTRI KHANSA LUTHFIYYAH </b>
  </div>
  <table align="center">
  <div class="card-body">
    <blockquote class="blockquote mb-0">
     
        <tr>
          <td><?php echo "No :  ".$no."<br>"; ?></td>
        </tr>
        <tr>
           <td><?php  echo "Nama : ".$nama."<br>"; ?></td>
        </tr>
        <tr>
           <td><?php  echo "Unit Pendidikan : ".$unit."<br>"; ?></td>
        </tr>
        <tr>
           <td><?php  echo "Tanggal Gaji :  ".$tanggal."<br>";?></td> 
        </tr>
        <tr>
           <td><?php  echo "Jabatan : ".$jabatan."<br>";?></td> 
        </tr>
        <tr>
          <td><?php  echo "Gaji : ".$gaji."<br>";?></td>
        </tr>
        <tr>
           <td><?php  echo "Lama Kerja : ".$lama_kerja."<br>";?></td> 
        </tr>
        <tr>
           <td><?php  echo "Status :  ".$status."<br>";?></td> 
        </tr>
        <tr>
           <td><?php echo "Bonus : ".$bonus."<br>"; 
          
           ?></td> 
        </tr>
        <tr>
           <td><?php  echo "BPJS :  ".$bpjs."<br>";?></td> 
        </tr>
        <tr>
           <td><?php  echo "Pinjaman :  ".$pinjaman."<br>";?></td> 
        </tr>
        <tr>
           <td><?php  echo "Cicilan :  ".$cicilan."<br>";?></td> 
        </tr>
        <tr>
           <td><?php  echo "Infaq :  ".$infaq."<br>";?></td> 
        </tr>
        <tr>
           <td><?php  echo "Gaji Bersih :  ".$gB."<br>";
          
           ?></td> 
        </tr>
    
    </blockquote>
  </div>
</div>
  
       
</center>
</table>
<?php

        }
        
    }

    $cetak = new Gaji();
    echo $cetak->data($no, $nama, $unit, $tanggal, $jabatan, $gaji, $lama_kerja, $status, $bonus, $bpjs, $pinjaman, $cicilan, $infaq, $gB);
   
}

 ?>