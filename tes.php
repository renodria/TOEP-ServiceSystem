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
    <main class="container tes">

    <h3>Pendaftaran TES TOEP</h3>

    <form>
        <div class="form-group">
            <label for="inputEmail">Email</label>
            <input type="email" class="form-control" id="inputEmail" placeholder="Email">
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputNama">Nama</label>
                <input type="text" class="form-control" id="inputNama" placeholder="Nama lengkap">
            </div>
            <div class="form-group col-md-6">
                <label for="inputNIM">NIM</label>
                <input type="text" class="form-control" id="inputNIM" placeholder="NIM">
            </div>
        </div>
        <div class="form-group">
            <label for="inputProdi">Prodi</label>
            <select id="inputProdi" class="form-control">
                    <option selected>Choose...</option>
                    <option>Mandiri</option>
                    <option>Kelompok</option>
            </select>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputTmpLahir">Tempat Lahir</label>
                <input type="text" class="form-control" id="inputTmpLahir" placeholder="Tempat Lahir">
            </div>
            <div class="form-group col-md-6">
                <label for="inputTglLahir">Tanggal Lahir</label>
                <input type="date" class="form-control" id="inputTglLahir">
            </div>
        </div>
        <div class="form-group">
            <label for="inputAlamat">Alamat</label>
            <input type="text" class="form-control" id="inputAlamat" placeholder="Alamat Lengkap">
        </div>
        <div class="form-group">
            <label for="inputNohp">No HP</label>
            <input type="number" class="form-control" id="inputNohp" placeholder="No HP">
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputMandirike">Mandiri ke</label>
                <select id="inputMandirike" class="form-control">
                        <option selected>Choose...</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="inputSkor">Skor TOEP Terakhir</label>
                <input type="number" class="form-control" id="inputSkor" placeholder="Skor Terakhir">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputSkor">Foto</label>
                <input type="file" class="form-control" aria-label="file example" required>
            </div>
            <div class="form-group col-md-6">
                <label for="inputSkor">Foto Kartu Mahasiswa</label>
                <input type="file" class="form-control" aria-label="file example" required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputSkor">Tanggal Pembayaran</label>
                <input type="date" class="form-control" id="inputTglLahir">
            </div>
            <div class="form-group col-md-6">
                <label for="inputSkor">Upload Bukti Pembayaran</label>
                <input type="file" class="form-control" aria-label="file example" required>
            </div>
        </div>

        <!-- <div class="form-check">
            <label for="inputMandirike">Mandiri ke </label>
            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
            <label class="form-check-label" for="defaultCheck1">
                
            </label> -->

        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    </main>

    <?php 
        include "footer.php";
    ?>

</body>

</html>