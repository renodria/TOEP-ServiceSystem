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
    <main class="container sertif">

    <h3>Pengajuan Sertifikat dan Surat Keterangan Online</h3>

    <form>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail">Email</label>
                <input type="email" class="form-control" id="inputEmail" placeholder="Email">
            </div>
            <div class="form-group col-md-6">
                <label for="inputNama">Nama</label>
                <input type="text" class="form-control" id="inputNama" placeholder="Nama lengkap">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputNIM">NIM</label>
                <input type="text" class="form-control" id="inputNIM" placeholder="NIM">
            </div>
            <div class="form-group col-md-6">
                <label for="inputNohp">No HP</label>
                <input type="number" class="form-control" id="inputNohp" placeholder="NIM">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-2">Sertifikat yang akan diambil</div>
            <div class="col-sm-10">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck3">
                    <label class="form-check-label" for="gridCheck3">
                        Sertifikat TOEP
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck3">
                    <label class="form-check-label" for="gridCheck3">
                        Surat Keterangan Skor TOEP (Telah mengikuti 3 kali Tes TOEP Mandiri, 
                        wajib mengunggah 3 slip bukti pembayaran di dokumen pendukung)
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck3">
                    <label class="form-check-label" for="gridCheck3">
                        Surat Keterangan Pengganti TOEP (Kehilangan Sertifikat TOEP, 
                        wajib mengunggah bukti surat kehilangan dari pihak berwajib di dokumen pendukung)
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck3">
                    <label class="form-check-label" for="gridCheck3">
                        Sertifikat Peserta ETP    
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck3">
                    <label class="form-check-label" for="gridCheck3">
                        Sertifikat Tutor ETP
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck3">
                    <label class="form-check-label" for="gridCheck3">
                        Sertifikat Keterangan Menjadi Tutor ETP
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck3">
                    <label class="form-check-label" for="gridCheck3">
                        Sertifikat EIC
                    </label>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputSkor">Foto kartu Mahasiswa</label>
                <input type="file" class="form-control" aria-label="file example" required>
            </div>
            <div class="form-group col-md-6">
                <label for="inputSkor">Pas Foto (Close Up)</label>
                <input type="file" class="form-control" aria-label="file example" required>
            </div>
        </div>
        <div class="form-group">
            <label for="inputKet">Keterangan</label>
            <input type="text" class="form-control" id="inputKet" placeholder="Alamat Lengkap">
        </div>
        <div class="form-group">
            <label for="inputSkor">Pas Foto (Close Up)</label>
            <input type="file" class="form-control" aria-label="file example" required>
        </div>
        <div class="form-group row">
            <div class="col-sm-2">Menyetujui pemrosesan selama 2 x 24 Jam</div>
            <div class="col-sm-10">
                <div class="form-check">
                    <input class="form-check-input" type="radio" id="gridCheck3">
                    <label class="form-check-label" for="gridCheck3">
                        Setuju
                    </label>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    </main>

    <?php 
        include "footer.php";
    ?>

</body>

</html>