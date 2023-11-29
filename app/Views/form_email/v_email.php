<div class="col-md-12">
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="text-center">EMAIL ACCOUNT REQUEST</h3>
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
                        <th>status_request</th>
                        <th>nama_lengkap</th>
                        <th>department</th>
                        <th>req_date</th>
                        <th>req_by</th>
                        <th>nama_pengguna</th>
                        <th>pass</th>
                        <th>email_address</th>
                        <th>create_date</th>
                        <th>end_date</th>
                        <th>notes</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($yazaki as $key => $value) { ?>
                        <tr>
                            <td><?= $value['status_request'] ?></td>
                            <td><?= $value['nama_lengkap'] ?></td>
                            <td><?= $value['department'] ?></td>
                            <td><?= $value['req_date'] ?></td>
                            <td><?= $value['req_by'] ?></td>
                            <td><?= $value['nama_pengguna'] ?></td>
                            <td><?= $value['pass'] ?></td>
                            <td><?= $value['email_address'] ?></td>
                            <td><?= $value['create_date'] ?></td>
                            <td><?= $value['end_date'] ?></td>
                            <td><?= $value['notes'] ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>