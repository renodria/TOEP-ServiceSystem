<?php 
    include "koneksi.php";
    $ambil = $koneksi->query("SELECT * FROM pengumuman WHERE id='$_GET[id]'");
    $pecah= $ambil->fetch_assoc();
?>


<!DOCTYPE html>
<html lang="en">

<?php 
    include "head.php";
?>

<body>
    <?php 
        include "navbar.php";
    ?>
    <main style="margin-left: 12px;">
        <div class="row">
            <div class="col-lg-9 col-sm-12">
                <h1><?= $pecah['judul']; ?></h1>
                    <small>By <a href="#"><?= $pecah['updateby']; ?></a> / <?= date('d F Y', strtotime($pecah['tanggal'])); ?></small>
                <br><br>
                <p>
                    <?= $pecah['isi']; ?>
                </p>
                <embed type="application/pdf" src="file/<?= $pecah['files']; ?>" width="600" height="400"></embed>
            </div>

            <!-- Pengumuman Terbaru -->
            <div class="col-lg-3 col-sm-12" style="border-left: 1px solid black;">
            <div>
                <h1 style="font-size: 32px; text-align:center; background-color: red; padding: 10px 10px 10px 10px; margin-top:12px; margin-right: 10px;">Terbaru</h1>
                <?php $ambil = $koneksi->query("SELECT * FROM pengumuman ORDER BY tanggal DESC LIMIT 0,10"); ?>
                <?php while ($pecah = $ambil->fetch_assoc()) { ?>
                
                    <small"><?= date('j-m-y', strtotime($pecah['tanggal'])); ?> | By <a href="#"><?= $pecah['updateby']; ?></a></small>
                    
                    <h1 style="font-size: 24px; margin-top: -48px;"><a href="detail-pengumuman.php?id=<?= $pecah['id']; ?>"><?= $pecah['judul']; ?></a></h1>
                    <hr>
                    <?php } ?>
                    
            </div>
        </div>
        
    </main>
    <?php 
        include "footer.php";
    ?>
</body>

</html>