<div class="col-md-15">
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="text-center">STORAGE MOBILE REGISTER FORM</h3>
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
                        <th>status_request</th>
                        <th>nama_m</th>
                        <th>department</th>
                        <th>ttd_m</th>
                        <th>tgl</th>
                        <th>no_m</th>
                        <th>email_m</th>
                        <th>nama_pic</th>
                        <th>ttd_pic</th>
                        <th>no_pic</th>
                        <th>email_pic</th>
                        <th>desc_detail</th>
                        <th>desc_ad</th>
                        <th>desc_sc</th>
                        <th>ttd</th>
                        <th>nama_it</th>
                        <th>r_date</th>
                        <th>reg_no</th>
                        <th>analyzing</th>
                        <th>reason</th>
                        <th>ttd_it</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($storage as $key => $value) { ?>
                        <tr>
                            <td><?= $value['status_request'] ?></td>
                            <td><?= $value['nama_m'] ?></td>
                            <td><?= $value['department'] ?></td>
                            <td><?= $value['ttd_m'] ?></td>
                            <td><?= $value['tgl'] ?></td>
                            <td><?= $value['no_m'] ?></td>
                            <td><?= $value['email_m'] ?></td>
                            <td><?= $value['nama_pic'] ?></td>
                            <td><?= $value['ttd_pic'] ?></td>
                            <td><?= $value['no_pic'] ?></td>
                            <td><?= $value['email_pic'] ?></td>
                            <td><?= $value['desc_detail'] ?></td>
                            <td><?= $value['desc_ad'] ?></td>
                            <td><?= $value['desc_sc'] ?></td>
                            <td><?= $value['ttd'] ?></td>
                            <td><?= $value['reg_no'] ?></td>
                            <td><?= $value['r_date'] ?></td>
                            <td><?= $value['nama_it'] ?></td>
                            <td><?= $value['analyzing'] ?></td>
                            <td><?= $value['reason'] ?></td>
                            <td><?= $value['ttd_it'] ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>