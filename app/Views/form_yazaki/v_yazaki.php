<div class="col-md-15">
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="text-center">LAN Conection Check Sheet Yazaki Employee ( Non SUAI )</h3>
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
                        <th>tanggal</th>
                        <th>network</th>
                        <th>check_a</th>
                        <th>nama_software</th>
                        <th>check_v</th>
                        <th>ver</th>
                        <th>purpose_connection</th>
                        <th>lainnya</th>
                        <th>mulai</th>
                        <th>until</th>
                        <th>connec_p</th>
                        <th>user</th>
                        <th>device_id</th>
                        <th>op</th>
                        <th>_sd</th>
                        <th>ip</th>
                        <th>subnet</th>
                        <th>gw</th>
                        <th>dns_p</th>
                        <th>dns_s</th>
                        <th>mac</th>
                        <th>ttd_it</th>
                        <th>ttd_spv</th>
                        <th>ttd_p</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($yazaki as $key => $value) { ?>
                        <tr>
                            <td><?= $value['tanggal'] ?></td>
                            <td><?= $value['network'] ?></td>
                            <td><?= $value['check_a'] ?></td>
                            <td><?= $value['nama_software'] ?></td>
                            <td><?= $value['check_v'] ?></td>
                            <td><?= $value['ver'] ?></td>
                            <td><?= $value['purpose_connection'] ?></td>
                            <td><?= $value['lainnya'] ?></td>
                            <td><?= $value['mulai'] ?></td>
                            <td><?= $value['until'] ?></td>
                            <td><?= $value['connec_p'] ?></td>
                            <td><?= $value['user'] ?></td>
                            <td><?= $value['device_id'] ?></td>
                            <td><?= $value['op'] ?></td>
                            <td><?= $value['_sd'] ?></td>
                            <td><?= $value['ip'] ?></td>
                            <td><?= $value['subnet'] ?></td>
                            <td><?= $value['gw'] ?></td>
                            <td><?= $value['dns_p'] ?></td>
                            <td><?= $value['dns_s'] ?></td>
                            <td><?= $value['mac'] ?></td>
                            <td><?= $value['ttd_it'] ?></td>
                            <td><?= $value['ttd_spv'] ?></td>
                            <td><?= $value['ttd_p'] ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>