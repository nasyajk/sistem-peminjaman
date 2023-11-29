<div class="col-md-12">
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="text-center">TANDA TERIMA </h3>
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
                        <th>diserahkan</th>
                        <th>brp</th>
                        <th>dtail</th>
                        <th>nama_brg</th>
                        <th>quantity</th>
                        <th>department</th>
                        <th>nama_apk</th>
                        <th>pc_name</th>
                        <th>usn</th>
                        <th>ip_u</th>
                        <th>ip_w</th>
                        <th>checklist</th>
                        <th>pic_ins</th>
                        <th>spv</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($tte as $key => $value) { ?>
                        <tr>
                            <td><?= $value['diserahkan'] ?></td>
                            <td><?= $value['brp'] ?></td>
                            <td><?= $value['dtail'] ?></td>
                            <td><?= $value['nama_brg'] ?></td>
                            <td><?= $value['quantity'] ?></td>
                            <td><?= $value['department'] ?></td>
                            <td><?= $value['nama_apk'] ?></td>
                            <td><?= $value['pc_name'] ?></td>
                            <td><?= $value['usn'] ?></td>
                            <td><?= $value['ip_u'] ?></td>
                            <td><?= $value['ip_w'] ?></td>
                            <td><?= $value['checklist'] ?></td>
                            <td><?= $value['pic_ins'] ?></td>
                            <td><?= $value['spv'] ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>