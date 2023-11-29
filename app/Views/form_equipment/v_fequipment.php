<!-- /.card -->
<!-- Horizontal Form -->
<div class="col-sm-12">
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">REQUEST EQUIPMENT IT</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="<?= site_url('Fequipment') ?>/add" method="post" class="form-horizontal">
            <?= csrf_field(); ?>
            <div class="card-body">
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">1. PIC Request :</label>
                    <div class="col-sm-10">
                        <input type="text" name="pic_req" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">2. Nama Barang :</label>
                    <div class="col-sm-10">
                        (1. <input type="text" name="nama_barang" class="form-control" required autofocus>
                        (2. <input type="text" name="nama_barang2" class="form-control" required autofocus>
                        (3. <input type="text" name="nama_barang3" class="form-control" required autofocus>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">3. Tanggal Peminjaman :</label>
                    <div class="col-sm-10">
                        <input type="date" name="tgl_peminjaman" class="form-control" required autofocus>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">4. Tanggal Pengembalian :</label>
                    <div class="col-sm-10">
                        <input type="date" name="tgl_pengembalian" class="form-control" required autofocus>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">5. Keperluan :</label>
                    <div class="col-sm-10">
                        <input type="text" name="keperluan" class="form-control" required autofocus>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">6. Area Penggunaan :</label>
                    <div class="col-sm-10">
                        <input type="text" name="area_pengguna" class="form-control" required autofocus>
                    </div>
                </div>
                <h6>(Noted : semua approval diajukan oleh PIC request)</h6>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Manager :</label>
                    <div class="col-sm-10">
                        <input type="text" name="ttd_m" class="form-control" required autofocus>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Supervisor :</label>
                    <div class="col-sm-10">
                        <input type="text" name="ttd_spv" class="form-control" required autofocus>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">PIC Request :</label>
                    <div class="col-sm-10">
                        <input type="text" name="ttd_pic" class="form-control" required autofocus>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">IT Supervisor :</label>
                    <div class="col-sm-10">
                        <input type="text" name="ttd_is" class="form-control" required autofocus>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">IT Manager :</label>
                    <div class="col-sm-10">
                        <input type="text" name="ttd_im" class="form-control" required autofocus>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <input type="checkbox" name="ap_de" value="Approved"> Approved
                        <input type="checkbox" name="ap_de" value="Denied"> Denied
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Reason for denial :</label>
                    <div class="col-sm-10">
                        <input type="text" name="reason" class="form-control" required autofocus>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-info">Save</button>
                <button type="cancel" class="btn btn-default float-right">Cancel</button>
            </div>
            <!-- /.card-footer -->
        </form>
    </div>
</div>
<!-- /.card -->