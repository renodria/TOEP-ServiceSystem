<?php 
    include "koneksi.php";
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
        <main class="container semua-pengumuman">
            <h1>Semua Pengumuman</h1>
            <table class="table table-striped table-hover">
                <tbody>
				<?php 
				$batas = 10;
				$halaman = isset($_GET['halaman'])?(int)$_GET['halaman'] : 1;
				$halaman_awal = ($halaman>1) ? ($halaman * $batas) - $batas : 0;	
 
				$previous = $halaman - 1;
				$next = $halaman + 1;
				
				$data = mysqli_query($koneksi,"select * from pengumuman ORDER BY tanggal DESC");
				$jumlah_data = mysqli_num_rows($data);
				$total_halaman = ceil($jumlah_data / $batas);
 
				$data_baru = mysqli_query($koneksi,"select * from pengumuman ORDER BY tanggal DESC limit $halaman_awal, $batas");
				$nomor = $halaman_awal+1;
				while($d = mysqli_fetch_array($data_baru)){
					?>
					<tr>
                        <td><a href="detail-pengumuman.php?id=<?= $d['id']; ?>"><?= $nomor; ?></a></td>
                        <td><a href="detail-pengumuman.php?id=<?= $d['id']; ?>"><?= $d['judul']; ?></a></td>
					</tr>
                    <?php $nomor++; ?>
					<?php
				}
				?>
			</tbody>
            </table>
            <nav>
			<ul class="pagination justify-content-center">
				<li class="page-item">
					<a class="page-link" <?php if($halaman > 1){ echo "href='?halaman=$previous'"; } ?>>Previous</a>
				</li>
				<?php 
				for($x=1;$x<=$total_halaman;$x++){
					?> 
					<li class="page-item"><a class="page-link" href="?halaman=<?php echo $x ?>"><?php echo $x; ?></a></li>
					<?php
				}
				?>				
				<li class="page-item">
					<a  class="page-link" <?php if($halaman < $total_halaman) { echo "href='?halaman=$next'"; } ?>>Next</a>
				</li>
			</ul>
		</nav>
        </main>
        <?php 
        include "footer.php";
    ?>
    </body>
</html>
