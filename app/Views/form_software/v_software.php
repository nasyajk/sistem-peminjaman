<div class="col-md-15">
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="text-center">SOFTWARE TRIAL REQUEST FORM</h3>
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
                        <th>ttd_m</th>
                        <th>tgl</th>
                        <th>no_hp</th>
                        <th>email</th>
                        <th>nama_pic</th>
                        <th>ttd_p</th>
                        <th>no_pic</th>
                        <th>email_pic</th>
                        <th>value_software</th>
                        <th>info_software</th>
                        <th>schedule_software</th>
                        <th>req_software</th>
                        <th>sup_doc</th>
                        <th>ttd_it</th>
                        <th>nama_it</th>
                        <th>recv_date</th>
                        <th>register_no</th>
                        <th>analyzing</th>
                        <th>reason</th>
                        <th>ttd</th>
                        <th>is_date</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($software as $key => $value) { ?>
                        <tr>
                            <td><?= $value['req'] ?></td>
                            <td><?= $value['nama_lengkap'] ?></td>
                            <td><?= $value['department'] ?></td>
                            <td><?= $value['ttd_m'] ?></td>
                            <td><?= $value['tgl'] ?></td>
                            <td><?= $value['no_hp'] ?></td>
                            <td><?= $value['email'] ?></td>
                            <td><?= $value['nama_pic'] ?></td>
                            <td><?= $value['ttd_p'] ?></td>
                            <td><?= $value['no_pic'] ?></td>
                            <td><?= $value['email_pic'] ?></td>
                            <td><?= $value['value_software'] ?></td>
                            <td><?= $value['info_software'] ?></td>
                            <td><?= $value['schedule_software'] ?></td>
                            <td><?= $value['req_software'] ?></td>
                            <td><?= $value['sup_doc'] ?></td>
                            <td><?= $value['ttd_it'] ?></td>
                            <td><?= $value['nama_it'] ?></td>
                            <td><?= $value['recv_date'] ?></td>
                            <td><?= $value['register_no'] ?></td>
                            <td><?= $value['analyzing'] ?></td>
                            <td><?= $value['reason'] ?></td>
                            <td><?= $value['ttd'] ?></td>
                            <td><?= $value['is_date'] ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>