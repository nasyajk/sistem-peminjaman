<div class="col-md-15">
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="text-center">APLIKASI DAN KONTROL LIST UNTUK PC DAN LAIN-LAIN YANG DIBAWA KELUAR</h3>
            <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-primary" role="alert">
                    <?= session()->getFlashdata('pesan'); ?>
                </div>
            <?php endif; ?>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                </button>
            </div>

        </div>

        <div class="card-body">

            <table class="table table-bordered">
                <thead>
                    <a href="<?= site_url('Email/export') ?>" class="btn btn-primary">
                        <i class="fas fa-file-download"></i> Export Excel
                    </a>
                    <br>
                    <br>
                    <tr class="text-center">
                        <th>tgl_apk</th>
                        <th>perusahaan</th>
                        <th>dep</th>
                        <th>nama_pmbw</th>
                        <th>lokasi</th>
                        <th>keperluan</th>
                        <th>tgl_klr</th>
                        <th>tgl_kmbl</th>
                        <th>chck</th>
                        <th>ttd_ap</th>
                        <th>tgl_ap</th>
                        <th>nama_brg</th>
                        <th>maker_m</th>
                        <th>mode_m</th>
                        <th>serial_m</th>
                        <th>check_item</th>
                        <th>ttd_p</th>
                        <th>tgl_p</th>
                        <th>ttd_b</th>
                        <th>tgl_b</th>
                        <th>p_virus</th>
                        <th>tgl_pv</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($apk as $key => $value) { ?>
                        <tr>
                            <td><?= $value['tgl_apk'] ?></td>
                            <td><?= $value['perusahaan'] ?></td>
                            <td><?= $value['dep'] ?></td>
                            <td><?= $value['nama_pmbw'] ?></td>
                            <td><?= $value['lokasi'] ?></td>
                            <td><?= $value['keperluan'] ?></td>
                            <td><?= $value['tgl_klr'] ?></td>
                            <td><?= $value['tgl_kmbl'] ?></td>
                            <td><?= $value['chck'] ?></td>
                            <td><?= $value['ttd_ap'] ?></td>
                            <td><?= $value['tgl_ap'] ?></td>
                            <td><?= $value['nama_brg'] ?></td>
                            <td><?= $value['maker_m'] ?></td>
                            <td><?= $value['mode_m'] ?></td>
                            <td><?= $value['serial_m'] ?></td>
                            <td><?= $value['check_item'] ?></td>
                            <td><?= $value['ttd_p'] ?></td>
                            <td><?= $value['tgl_p'] ?></td>
                            <td><?= $value['ttd_b'] ?></td>
                            <td><?= $value['tgl_b'] ?></td>
                            <td><?= $value['p_virus'] ?></td>
                            <td><?= $value['tgl_pv'] ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>