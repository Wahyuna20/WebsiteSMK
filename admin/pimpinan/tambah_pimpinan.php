<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambah Pimpinan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Tambah Data Pimpinan</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    
    <!-- Main content -->

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-body">

                <center><h2>Form Tambah Pimpinan</h2></center>
<form action="" method="POST" enctype="multipart/form-data">
  <div class="form-group row">
    <label for="nama" class="col-sm-2 col-form-label" >Nama</label>
  <div class="col-sm-10">
      <input  type="text" name="nama" class="form-control" id="nama" placeholder="Nama">
    </div>
  </div>

  <div class="form-group row">
    <label for="foto" class="col-sm-2 col-form-label" >Foto</label>
  <div class="col-sm-10">
      <input  type="file" name="gambar" id="foto" >
    </div>
  </div>
    

  <div class="form-group row">
    <label for="stok" class="col-sm-2 col-form-label"></label>
  <div class="col-sm-10">
      <button type="submit" name="simpan" class="btn btn-success">Simpan</button>
    </div>
  </div>
</section>
</form>
<?php
if (isset($_POST['simpan'])) {
  # code...
  
  $nama= $_POST['nama'];
  $foto= $_POST['gambar'];

  $rand = rand();
  $ekstensi =  array('png','jpg','jpeg','gif');
  $filename = $_FILES['gambar']['name'];
  $ukuran = $_FILES['gambar']['size'];
  $ext = pathinfo($filename, PATHINFO_EXTENSION);

  if($ukuran < 2044070){    
    $gambar = $rand.'_'.$filename;
    move_uploaded_file($_FILES['gambar']['tmp_name'], 'pimpinan/img/'.$rand.'_'.$filename);
  }
  $simpan= mysqli_query($konek, "INSERT INTO pimpinan (nama, gambar) VALUES ('$nama','$gambar')");
  if ($simpan) {
    # code...
    echo "<script>alert('Data Berhasil Disimpan'); window.location.href='index.php?page=pimpinan'</script>";
  }
}
?>


              </div>
            </div>
        </div>
      </section>
    </div>
</div>






