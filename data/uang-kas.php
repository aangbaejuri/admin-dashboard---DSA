<?php
require "../config.php";


require "../lib/header.php";
?>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <i class="bi bi-bank"></i> Audit Kas
                    <div class="float-right"> 
                        <a href="#" class="tooltip-text" data-toggle="tooltip" title="Payment Rp 5.000/Minggu">
                            <i class="bi bi-info-circle-fill"></i>
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Bulan</th>
                                    <th>M-1</th>
                                    <th>M-2</th>
                                    <th>M-3</th>
                                    <th>M-4</th>
                                    <th>Total</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Januari</td>
                                    <td>Rp 115.000</td>
                                    <td>Rp 115.000</td>
                                    <td>Rp 115.000</td>
                                    <td>Rp 115.000</td>
                                    <td>Rp 460.000</td>
                                    <td>
                                        <a href="<?php echo $website; ?>histori/detail-kas" class="btn btn-sm btn-info">
                                            <i class="bi bi-card-text"></i> Detail
                                        </a> 
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                        <div class="btn-group mr-2" role="group" aria-label="First group">
                            <span class="form-control">Data: 4</span>
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