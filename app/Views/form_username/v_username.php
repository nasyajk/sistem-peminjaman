<div class="col-md-12">
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="text-center">FORM PERMINTAAN USERNAME & PASSWORD ORACLE</h3>
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
                    <a href="<?= site_url('Yazaki/export') ?>" class="btn btn-primary">
                        <i class="fas fa-file-download"></i> Export Excel
                    </a>
                    <br>
                    <br>
                    <tr class="text-center">
                        <th>status_req</th>
                        <th>nama_lengkap</th>
                        <th>department</th>
                        <th>tgl_pem</th>
                        <th>ttd_spv</th>
                        <th>usn</th>
                        <th>pass</th>
                        <th>email</th>
                        <th>usn_s</th>
                        <th>pw_s</th>
                        <th>notes</th>
                        <th>spv_it</th>
                        <th>tgl_ap</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($username as $key => $value) { ?>
                        <tr>
                            <td><?= $value['status_req'] ?></td>
                            <td><?= $value['nama_lengkap'] ?></td>
                            <td><?= $value['department'] ?></td>
                            <td><?= $value['tgl_pem'] ?></td>
                            <td><?= $value['ttd_spv'] ?></td>
                            <td><?= $value['usn'] ?></td>
                            <td><?= $value['pass'] ?></td>
                            <td><?= $value['email'] ?></td>
                            <td><?= $value['usn_s'] ?></td>
                            <td><?= $value['pw_s'] ?></td>
                            <td><?= $value['notes'] ?></td>
                            <td><?= $value['spv_it'] ?></td>
                            <td><?= $value['tgl_ap'] ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>