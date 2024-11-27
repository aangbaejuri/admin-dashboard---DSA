<?php
require "../config.php";


require "../lib/header.php";
?>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <i class="bi bi-people"></i> Daftar Mahasiswa
                </div>
                <div class="card-body">
                    <div class="form-row">
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label>Tampilkan Beberapa</label>
                                <select class="form-control" name="" id="">
                                    <option value="10">10</option>
                                    <option value="20">20</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label>Jenis Kelamin</label>
                                <select class="form-control" name="" id="">
                                    <option value="Laki - laki">Laki - laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label for="field">Cari Data</label>
                                <input class="form-control" type="text" id="field" placeholder="Cari...">
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label>Submit</label>
                                <button class="btn btn-block btn-secondary">Filter</button>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th style="min-width: 150px;">Nama</th>
                                    <th style="min-width: 100px;">NIM</th>
                                    <th style="min-width: 150px;">Jenis Kelamin</th>
                                    <th style="min-width: 150px;">Jabatan</th>
                                    <th style="min-width: 150px;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $cek_mahasiswa = $conn->query("SELECT * FROM mahasiswa ORDER BY id");
                                while ($data_mahasiswa = $cek_mahasiswa->fetch_assoc()) {
                                ?>
                                <tr>
                                    <td><?php echo $data_mahasiswa['id'] ?></td>
                                    <td><?php echo $data_mahasiswa['nama'] ?></td>
                                    <td><?php echo $data_mahasiswa['nim'] ?></td>
                                    <td><?php echo $data_mahasiswa['jenis_kelamin'] ?></td>
                                    <td><?php echo $data_mahasiswa['jabatan'] ?></td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#myModal">
                                            <i class="bi bi-card-text"></i> Detail
                                        </button>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                        <div class="btn-group mr-2" role="group" aria-label="First group">
                            <span class="form-control">Data: ?</span>
                        </div>
                        <div class="btn-group mr-2" role="group" aria-label="Third group">
                            <button type="button" class="btn btn-secondary"><</button>
                        </div>
                        <div class="btn-group mr-2" role="group" aria-label="Second group">
                            <button type="button" class="btn btn-secondary">1</button>
                            <button type="button" class="btn btn-secondary">2</button>
                            <button type="button" class="btn btn-secondary">3</button>
                        </div>
                        <div class="btn-group" role="group" aria-label="Third group">
                            <button type="button" class="btn btn-secondary">></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="myModal" tabindex="-1" style="display: none;">
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">
                        <i class="bi bi-person-fill"></i> Detail Mahasiswa
                    </h4>
                    <button type="button" class="close" data-dismiss="modal">
                        &times;
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-row">
                        <div class="col-lg-12">
                            <div class="form-row">
                                <div class="col-md-4">
                                    <img class="img-fluid rounded" src="<?php echo $website; ?>assets/img/aang.jpg" alt="..." width="250">
                                </div>
                                <div class="col-lg-8">
                                    <div class="form-group">
                                        <label>Nomor Induk Mahasiswa</label>
                                        <input class="form-control bg-white" value="042023013" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label>Nama lengkap</label>
                                        <input class="form-control bg-white" value="Aang Baejuri" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label>Jenis Kelamin</label>
                                        <input class="form-control bg-white" value="Laki - laki" disabled>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Jabatan</label>
                                <input class="form-control bg-white" value="keren" disabled>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Alamat</label>
                                <input class="form-control bg-white" value="Serang - Banten" disabled>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">
                        Close
                    </button>
                </div>
            </div>
        </div>
    </div>

<?php
require "../lib/footer.php";
?>