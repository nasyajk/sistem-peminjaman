<div class="col-md-12">
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="text-center">FILE SERVER REQUEST</h3>
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
                    <a href="<?= site_url('Fileserver/export') ?>" class="btn btn-primary">
                        <i class="fas fa-file-download"></i> Export Excel
                    </a>
                    <br>
                    <br>
                    <tr class="text-center">
                        <th>status_req</th>
                        <th>nama_lengkap</th>
                        <th>department</th>
                        <th>ttd_sspv</th>
                        <th>tgl_pengisian</th>
                        <th>ttd_pic</th>
                        <th>tujuan</th>
                        <th>area</th>
                        <th>nama_komputer</th>
                        <th>user_komputer</th>
                        <th>ip</th>
                        <th>notes</th>
                        <th>ttd</th>
                        <th>is_date</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($fileserver as $key => $value) { ?>
                        <tr>
                            <td><?= $value['status_req'] ?></td>
                            <td><?= $value['nama_lengkap'] ?></td>
                            <td><?= $value['department'] ?></td>
                            <td><?= $value['ttd_sspv'] ?></td>
                            <td><?= $value['tgl_pengisian'] ?></td>
                            <td><?= $value['ttd_pic'] ?></td>
                            <td><?= $value['tujuan'] ?></td>
                            <td><?= $value['area'] ?></td>
                            <td><?= $value['nama_komputer'] ?></td>
                            <td><?= $value['user_komputer'] ?></td>
                            <td><?= $value['ip'] ?></td>
                            <td><?= $value['notes'] ?></td>
                            <td><?= $value['ttd'] ?></td>
                            <td><?= $value['is_date'] ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>