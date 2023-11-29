<div class="col-md-15">
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="text-center">ONLINE MEETING REQUEST</h3>
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
                        <th>tgl</th>
                        <th>ttd_u</th>
                        <th>tgl_meeting</th>
                        <th>r_meeting</th>
                        <th>p_meeting</th>
                        <th>equipment</th>
                        <th>mulai</th>
                        <th>selesai</th>
                        <th>l_meeting</th>
                        <th>k_link</th>
                        <th>apk</th>
                        <th>item_c</th>
                        <th>nama_laptop</th>
                        <th>notes</th>
                        <th>ttd</th>
                        <th>is_date</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($meeting as $key => $value) { ?>
                        <tr>
                            <td><?= $value['status_req'] ?></td>
                            <td><?= $value['nama_lengkap'] ?></td>
                            <td><?= $value['department'] ?></td>
                            <td><?= $value['tgl'] ?></td>
                            <td><?= $value['ttd_u'] ?></td>
                            <td><?= $value['tgl_meeting'] ?></td>
                            <td><?= $value['r_meeting'] ?></td>
                            <td><?= $value['p_meeting'] ?></td>
                            <td><?= $value['equipment'] ?></td>
                            <td><?= $value['mulai'] ?></td>
                            <td><?= $value['selesai'] ?></td>
                            <td><?= $value['l_meeting'] ?></td>
                            <td><?= $value['k_link'] ?></td>
                            <td><?= $value['apk'] ?></td>
                            <td><?= $value['item_c'] ?></td>
                            <td><?= $value['nama_laptop'] ?></td>
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