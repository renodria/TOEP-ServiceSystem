<?php
include '../koneksi.php';

if(!isset($_SESSION['admin'])){
    echo "<script>alert('Anda harus login');</script>";
    echo "<script>location='login.php'</script>";
    header("Location:login.php");
    exit();
}
?>

<main class="content">
    <div class="container-fluid p-0">
        <h1 class="h3 mb-3">Lanjutan Pelayanan (Linktree)</h1>
        <div class="row">
            <div class="col-12">
                <div class="card flex-fill">
                    <div class="card-body">
                        <table class="table table-hover my-0">
                            <thead>
                                <tr>
                                    <th>Linktree Layanan</th>
                                    <th>Nama</th>
                                    <th class="d-none d-xl-table-cell">Tampilkan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <?php $ambil = $koneksi->query("SELECT * FROM linktree"); ?>
                                    <?php while ($pecah = $ambil->fetch_assoc()) { ?>
                                    <tr>
                                        <td><?= $pecah['link']; ?></td>
                                        <td><?= $pecah['nama']; ?></td>
                                        <td class="d-none d-xl-table-cell"><?= $pecah['terbit']; ?></td>
                                        <td>
                                            <a href="index.php?halaman=edit-lanjutanPelayanan&id=<?= $pecah['id']; ?>"><i class="align-middle text-primary" data-feather="edit"></i></a>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>