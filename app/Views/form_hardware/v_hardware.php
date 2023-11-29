<div class="col-md-15">
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="text-center">HARDWARE REQUEST FORM</h3>
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
                        <th>hardware_i</th>
                        <th>value_hardware</th>
                        <th>desc_hardware</th>
                        <th>schedule_hardware</th>
                        <th>desc_software</th>
                        <th>desc_s</th>
                        <th>ttd_it</th>
                        <th>nama_it</th>
                        <th>recv_date</th>
                        <th>register_no</th>
                        <th>analyzing</th>
                        <th>av_eq</th>
                        <th>reason</th>
                        <th>ttd</th>
                        <th>is_date</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($hardware as $key => $value) { ?>
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
                            <td><?= $value['hardware_i'] ?></td>
                            <td><?= $value['value_hardware'] ?></td>
                            <td><?= $value['desc_hardware'] ?></td>
                            <td><?= $value['schedule_hardware'] ?></td>
                            <td><?= $value['desc_software'] ?></td>
                            <td><?= $value['desc_s'] ?></td>
                            <td><?= $value['ttd_it'] ?></td>
                            <td><?= $value['nama_it'] ?></td>
                            <td><?= $value['recv_date'] ?></td>
                            <td><?= $value['register_no'] ?></td>
                            <td><?= $value['analyzing'] ?></td>
                            <td><?= $value['av_eq'] ?></td>
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