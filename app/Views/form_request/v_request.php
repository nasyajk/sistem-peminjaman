<div class="col-md-12">
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="text-center">REQUEST RELAYOUT PC</h3>
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
                        <th>tgl_pengisian</th>
                        <th>ttd_u</th>
                        <th>nama_lgkp</th>
                        <th>ttd_m</th>
                        <th>tgl</th>
                        <th>area</th>
                        <th>jmlh_pc</th>
                        <th>notes</th>
                        <th>ttd</th>
                        <th>is_date</th>
                        <th>tgl_relayout</th>
                        <th>jam_relayout</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($request as $key => $value) { ?>
                        <tr>
                            <td><?= $value['status_req'] ?></td>
                            <td><?= $value['nama_lengkap'] ?></td>
                            <td><?= $value['department'] ?></td>
                            <td><?= $value['tgl_pengisian'] ?></td>
                            <td><?= $value['ttd_u'] ?></td>
                            <td><?= $value['nama_lgkp'] ?></td>
                            <td><?= $value['ttd_m'] ?></td>
                            <td><?= $value['tgl'] ?></td>
                            <td><?= $value['area'] ?></td>
                            <td><?= $value['jmlh_pc'] ?></td>
                            <td><?= $value['notes'] ?></td>
                            <td><?= $value['ttd'] ?></td>
                            <td><?= $value['is_date'] ?></td>
                            <td><?= $value['tgl_relayout'] ?></td>
                            <td><?= $value['jam_relayout'] ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>