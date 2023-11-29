<div class="col-md-15">
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="text-center">WORK REQUEST FORM</h3>
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
                        <th>req</th>
                        <th>nama_lengkap</th>
                        <th>department</th>
                        <th>pc_nama</th>
                        <th>r_tgl</th>
                        <th>r_wkt</th>
                        <th>ext</th>
                        <th>pdw</th>
                        <th>desc_p</th>
                        <th>ac</th>
                        <th>desc_n</th>
                        <th>desc_r</th>
                        <th>desc_s</th>
                        <th>stat</th>
                        <th>tgl</th>
                        <th>pic</th>
                        <th>ttd_h</th>
                        <th>ttd_t</th>
                        <th>ttd_r</th>
                        <th>ttd_u</th>
                        <th>ttd_it</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($work as $key => $value) { ?>
                        <tr>
                            <td><?= $value['req'] ?></td>
                            <td><?= $value['nama_lengkap'] ?></td>
                            <td><?= $value['department'] ?></td>
                            <td><?= $value['pc_nama'] ?></td>
                            <td><?= $value['r_tgl'] ?></td>
                            <td><?= $value['r_wkt'] ?></td>
                            <td><?= $value['ext'] ?></td>
                            <td><?= $value['pdw'] ?></td>
                            <td><?= $value['desc_p'] ?></td>
                            <td><?= $value['ac'] ?></td>
                            <td><?= $value['desc_n'] ?></td>
                            <td><?= $value['desc_r'] ?></td>
                            <td><?= $value['desc_s'] ?></td>
                            <td><?= $value['stat'] ?></td>
                            <td><?= $value['tgl'] ?></td>
                            <td><?= $value['pic'] ?></td>
                            <td><?= $value['ttd_h'] ?></td>
                            <td><?= $value['ttd_t'] ?></td>
                            <td><?= $value['ttd_r'] ?></td>
                            <td><?= $value['ttd_u'] ?></td>
                            <td><?= $value['ttd_it'] ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>