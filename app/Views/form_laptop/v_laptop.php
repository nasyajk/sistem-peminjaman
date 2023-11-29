<div class="col-md-12">
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="text-center">REQUEST KHUSUS PENGGUNAAN LAPTOP</h3>
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
                    <a href="<?= site_url('') ?>" class="btn btn-primary">
                        <i class="fas fa-file-download"></i> Export Excel
                    </a>
                    <br>
                    <br>
                    <tr class="text-center">
                        <th>status_req</th>
                        <th>nama_lengkap</th>
                        <th>department</th>
                        <th>tgl_pengisian</th>
                        <th>ttd_pic</th>
                        <th>notes</th>
                        <th>sspv</th>
                        <th>mgr</th>
                        <th>dfm</th>
                        <th>nama_pc</th>
                        <th>nama_laptop</th>
                        <th>spv_it</th>
                        <th>it_mgr</th>
                        <th>ad</th>
                        <th>is_date</th>
                        <th>reason</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($laptop as $key => $value) { ?>
                        <tr>
                            <td><?= $value['status_req'] ?></td>
                            <td><?= $value['nama_lengkap'] ?></td>
                            <td><?= $value['department'] ?></td>
                            <td><?= $value['tgl_pengisian'] ?></td>
                            <td><?= $value['ttd_pic'] ?></td>
                            <td><?= $value['notes'] ?></td>
                            <td><?= $value['sspv'] ?></td>
                            <td><?= $value['mgr'] ?></td>
                            <td><?= $value['dfm'] ?></td>
                            <td><?= $value['nama_pc'] ?></td>
                            <td><?= $value['nama_laptop'] ?></td>
                            <td><?= $value['spv_it'] ?></td>
                            <td><?= $value['it_mgr'] ?></td>
                            <td><?= $value['ad'] ?></td>
                            <td><?= $value['is_date'] ?></td>
                            <td><?= $value['reason'] ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>