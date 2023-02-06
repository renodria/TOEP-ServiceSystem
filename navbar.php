
<header>
    <nav class="navbar navbar-dark navbar-expand-lg bg-youngBlue">
        <div class="container">
            <a href="index.php"><img src="assets/img/LBIPU.png" class="me-4" alt="" /></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse navleft" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link ml-4 px-4 active" aria-current="page" href="index.php">Beranda</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active ml-4 px-4" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Layanan
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="tes.php">Tes TOEP</a></li>
                            <li>
                                <a class="dropdown-item" href="kursus.php">Kursus TOEP</a>
                            </li>
                            <li><a class="dropdown-item" href="sertif.php">Pengajuan Sertifikat dan Surat Keterangan</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ml-4 px-4 active" aria-current="page" href="semua-pengumuman.php">Pengumuman</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active ml-4 px-4" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Tentang Kami
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="profile.php">Profil</a></li>
                            <li>
                                <a class="dropdown-item" href="visi-misi-tujuan.php">Visi Misi</a>
                            </li>
                            <li><a class="dropdown-item" href="sejarah.php">Sejarah</a></li>
                            <li><a class="dropdown-item" href="struktur-organisasi.php">Struktur Organisasi</a></li>
                        </ul>
                    </li>
                </ul>
            </div>

            <form action="pencarian.php" method="get" class="d-flex form-size" role="search">
                <input class="form-control me-2" type="search" placeholder="Cari disini..."  name="keyword" aria-label="Search" />
                <button class="btn btn-primary" type="submit">Cari</button>
            </form>
        </div>
    </nav>
</header>