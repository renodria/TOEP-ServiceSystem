<?php
include '../koneksi.php';

if(!isset($_SESSION['admin'])){
    echo "<script>alert('Anda harus login');</script>";
    echo "<script>location='login.php'</script>";
    header("Location:login.php");
    exit();
}
?>

<?php 
    $ambil = $koneksi->query("SELECT * FROM pengumuman WHERE id='$_GET[id]'");
    $pecah= $ambil->fetch_assoc();
?>
<main class="content">
    <div class="container-fluid p-0">

        <div class="mb-3">
            <h1 class="h3 d-inline align-middle">Edit Data Pengumuman</h1>
        </div>
        <div class="row">
            <div class="col-8">
                <form action="" role="form" method="post" enctype="multipart/form-data">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Judul Pengumuman</h5>
                        </div>
                        <div class="card-body">
                            <input type="text" class="form-control" placeholder="Masukkan judul" name="judul" value="<?= $pecah['judul']; ?>">
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Detail Pengumuman</h5>
                        </div>
                        <div class="card-body">
                            <textarea class="form-control" rows="8" placeholder="isi pengumuman" name="isi" id="summernote"><?= $pecah['isi']; ?></textarea>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Tanggal</h5>
                        </div>
                        <div class="card-body">
                            <div>
                                <input type="date" id="tanggal" name="tanggal"  value="<?= $pecah['tanggal']; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">File PDF</h5>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <a href="../file/<?= $pecah['files']; ?>"><?= $pecah['files']; ?></a><br>
                                <label class="form-label" for="">Ganti File</label>
                                <input type="file" class="form-control" name="pdf" id="">
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary" name="save">Update</button>
                </form>
            </div>
        </div>
    </div>
</main>

<?php
if(isset($_POST['save'])){
        $pdf=$_FILES['pdf']['name'];
        $lokasipdf = $_FILES['pdf']['tmp_name'];
        if(!empty($lokasipdf)) {
            move_uploaded_file($lokasipdf, "../file/$pdf");

            $koneksi->query("UPDATE pengumuman SET judul='$_POST[judul]', isi='$_POST[isi]', tanggal='$_POST[tanggal]', files='$pdf' WHERE id='$_GET[id]'");
        }
        else {
            $koneksi->query("UPDATE pengumuman SET judul='$_POST[judul]', isi='$_POST[isi]', tanggal='$_POST[tanggal]' WHERE id='$_GET[id]'");
        }

    echo "<div class='alert alert-info'>Data telah diupdate</div>";
    echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=pengumuman'>";
}
?>