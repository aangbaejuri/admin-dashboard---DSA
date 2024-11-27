<?php
require "config.php";

require "lib/header.php";
?>

    <div class="row">
        <div class="col-lg-3">
            <div class="card alert-primary text-dark">
                <div class="card-body">
                    <i class="bi bi-people float-right text-muted" style="font-size: xx-large;"></i>
                    <div class="float-left">
                        <h5>Mahasiswa</h5>
                        <span>50</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card alert-danger text-dark">
                <div class="card-body">
                    <i class="bi bi-person-workspace float-right text-muted" style="font-size: xx-large;"></i>
                    <div class="float-left">
                        <h5>Pengurus</h5>
                        <span>5</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card alert-warning text-dark">
                <div class="card-body">
                    <i class="bi bi-journals float-right text-muted" style="font-size: xx-large;"></i>
                    <div class="float-left">
                        <h5>Mata Kuliah</h5>
                        <span>7 /21 SKS</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card alert-success text-dark">
                <div class="card-body">
                    <i class="bi bi-bank float-right text-muted" style="font-size: xx-large;"></i>
                    <div class="float-left">
                        <h5>Uang Kas</h5>
                        <span>Rp 1.000.000</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <i class="bi bi-info-square"></i> Informasi
                </div>
                <div class="card-body">
                    <div class="form-row">
                        <div class="col-lg-12">
                            <b>Subjek:</b> Tugas kuliah
                            <p>
                                Tugas mata kuliah Pemrograman Web 1, dikumpulan maximal hari rabu.
                            </p>
                            <div class="justify-content-center">
                                <i class="bi bi-person"></i> Admin
                                <small class="float-right"> 
                                    25 Mei 2024, 00:00
                                </small>
                            </div>
                            <hr>
                            <b>Subjek:</b> Tugas kuliah
                            <p>
                                Tugas mata kuliah Pemrograman Web 1, dikumpulan maximal hari rabu.
                            </p>
                            <div class="justify-content-center">
                                <i class="bi bi-person"></i> Admin
                                <small class="float-right"> 
                                    25 Mei 2024, 00:00
                                </small>
                            </div>
                            <hr>
                        </div>
                        <div class="col-lg-12">
                            <a class="btn btn-block btn-primary" href="<?php echo $website; ?>data/data-informasi">
                                Lihat Semua Informasi
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
require "lib/footer.php";
?>