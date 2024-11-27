<?php
require "../config.php";


require "../lib/header.php";
?>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <i class="bi bi-journals"></i> Daftar Mata Kuliah
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Hari</th>
                                    <th>Kode</th>
                                    <th>Nama MK</th>
                                    <th>Dosen</th>
                                    <th>Waktu</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $nomor = 1;
                                $cek_mk = $conn->query("SELECT * FROM mata_kuliah ORDER BY id");
                                while ($data_mk = $cek_mk->fetch_assoc()) {
                                    if ($data_mk['kode'] == 'S-PW1') {
                                        $icon = '<i class="bi bi-balloon-heart-fill text-danger"></i>';
                                    } else {
                                        $icon = '';
                                    }
                                ?>
                                <tr>
                                    <td><?php echo $nomor++ ?></td>
                                    <td><?php echo $data_mk['hari'] ?></td>
                                    <td><?php echo $data_mk['kode'] ?></td>
                                    <td><?php echo $data_mk['mata_kuliah'] ?></td>
                                    <td><?php echo $data_mk['nama_dosen'] ?> <?php echo $icon ?></td>
                                    <td><?php echo $data_mk['waktu'] ?></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                        <div class="btn-group mr-2" role="group" aria-label="First group">
                            <span class="form-control">Data: 1</span>
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

<?php
require "../lib/footer.php";
?>