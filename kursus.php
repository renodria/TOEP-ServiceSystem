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
    <main class="container kursus">
    
    <h3>Pendaftaran Kursus TOEP</h3>

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
            <!-- <input type="text" class="form-control" id="inputProdi" placeholder="Prodi"> -->
            <select id="inputProdi" class="form-control">
                    <option selected>Choose...</option>
                    <option>Mandiri</option>
                    <option>Kelompok</option>
            </select>
        </div>
        <div class="form-group">
            <label for="inputNohp">No HP</label>
            <input type="number" class="form-control" id="inputNohp" placeholder="No HP">
        </div>
        <div class="form-group row">
            <div class="col-sm-2">Daftar Mandiri atau Kelompok</div>
            <div class="col-sm-10">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck1">
                    <label class="form-check-label" for="gridCheck1">
                        Mandiri
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck2">
                    <label class="form-check-label" for="gridCheck2">
                        Kelompok
                    </label>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-2">Daftar Luring atau Daring</div>
            <div class="col-sm-10">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck3">
                    <label class="form-check-label" for="gridCheck3">
                        Luring
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck3">
                    <label class="form-check-label" for="gridCheck3">
                        Daring
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