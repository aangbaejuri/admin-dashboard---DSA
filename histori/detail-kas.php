<?php
require "../config.php";

require "../lib/header.php";
?>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <i class="bi bi-bank"></i> Detail Kas
                    <div class="float-right"> 
                        <a href="#" class="tooltip-text" data-toggle="tooltip" title="Payment Rp 5.000/Minggu">
                            <i class="bi bi-info-circle-fill"></i>
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <a class="btn btn-sm btn-warning mb-2" href="<?php echo $website; ?>data/uang-kas">
                        <i class="bi bi-arrow-90deg-left"></i> Kembali
                    </a>
                    <div class="float-right mb-2">
                        Bulan: Januari
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>M-1</th>
                                    <th>M-2</th>
                                    <th>M-3</th>
                                    <th>M-4</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Aang Baejuri</td>
                                    <td>Rp 5.000</td>
                                    <td>Rp 5.000</td>
                                    <td>Rp 5.000</td>
                                    <td>Rp 5.000</td>
                                    <td>Rp 20.000</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
require "../lib/footer.php";
?>