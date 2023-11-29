<div class="col-md-15">
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="text-center">TANDA TERIMA EQUIPMENT IT</h3>
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
                        <th>nama_barang</th>
                        <th>quantity</th>
                        <th>department</th>
                        <th>pic_barang</th>
                        <th>checklist</th>
                        <th>pic_reg</th>
                        <th>spv</th>
                        <th>noted</th>
                        <th>spv_p</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($tanda as $key => $value) { ?>
                        <tr>
                            <td><?= $value['diserahkan'] ?></td>
                            <td><?= $value['brp'] ?></td>
                            <td><?= $value['dtail'] ?></td>
                            <td><?= $value['nama_barang'] ?></td>
                            <td><?= $value['quantity'] ?></td>
                            <td><?= $value['department'] ?></td>
                            <td><?= $value['pic_barang'] ?></td>
                            <td><?= $value['checklist'] ?></td>
                            <td><?= $value['pic_reg'] ?></td>
                            <td><?= $value['spv'] ?></td>
                            <td><?= $value['noted'] ?></td>
                            <td><?= $value['spv_p'] ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>