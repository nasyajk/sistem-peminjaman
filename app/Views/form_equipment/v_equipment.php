<div class="col-md-12">
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="text-center">REQUEST EQUIPMENT IT</h3>
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
                        <th>pic_req</th>
                        <th>nama_barang</th>
                        <th>nama_barang2</th>
                        <th>nama_barang3</th>
                        <th>tgl_peminjaman</th>
                        <th>tgl_pengembalian</th>
                        <th>keperluan</th>
                        <th>area_pengguna</th>
                        <th>ttd_m</th>
                        <th>ttd_spv</th>
                        <th>ttd_pic</th>
                        <th>ttd_is</th>
                        <th>ttd_im</th>
                        <th>ap_de</th>
                        <th>reason</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($equipment as $key => $value) { ?>
                        <tr>
                            <td><?= $value['pic_req'] ?></td>
                            <td><?= $value['nama_barang'] ?></td>
                            <td><?= $value['nama_barang2'] ?></td>
                            <td><?= $value['nama_barang3'] ?></td>
                            <td><?= $value['tgl_peminjaman'] ?></td>
                            <td><?= $value['tgl_pengembalian'] ?></td>
                            <td><?= $value['keperluan'] ?></td>
                            <td><?= $value['area_pengguna'] ?></td>
                            <td><?= $value['ttd_m'] ?></td>
                            <td><?= $value['ttd_spv'] ?></td>
                            <td><?= $value['ttd_pic'] ?></td>
                            <td><?= $value['ttd_is'] ?></td>
                            <td><?= $value['ttd_im'] ?></td>
                            <td><?= $value['ap_de'] ?></td>
                            <td><?= $value['reason'] ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>