<!-- /.card -->
<!-- Horizontal Form -->
<div class="col-sm-12">
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">FORM PERMINTAAN USERNAME & PASSWORD ORACLE</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="<?= site_url('Fusername') ?>/add" method="post" class="form-horizontal">
            <?= csrf_field(); ?>
            <div class="card-body">
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Status Request :</label>
                    <div class="col-sm-10">
                        <input type="checkbox" name="status_req" value="HRGA"> HRGA
                        <input type="checkbox" name="status_req" value="PPC MPC"> PPC MPC
                        <input type="checkbox" name="status_req" value="ENG."> ENG.
                        <input type="checkbox" name="status_req" value="FINACC"> FINACC
                        <input type="checkbox" name="status_req" value="PROD."> PROD.
                        <input type="checkbox" name="status_req" value="QA"> QA
                    </div>
                </div>
                <h5>Diisi oleh PIC Request</h5>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Nama Lengkap :</label>
                    <div class="col-sm-10">
                        <input type="text" name="nama_lengkap" class="form-control" required autofocus>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Department / Section :</label>
                    <div class="col-sm-10">
                        <input type="text" name="department" class="form-control" required autofocus>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Tanggal Peminjaman :</label>
                    <div class="col-sm-10">
                        <input type="date" name="tgl_pem" class="form-control" required autofocus>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Nama SPV & Tanda Tangan :</label>
                    <div class="col-sm-10">
                        <input type="text" name="ttd_spv" class="form-control" required autofocus>
                    </div>
                </div>
                <h5>Diisi oleh PIC Request</h5>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Username :</label>
                    <div class="col-sm-10">
                        <input type="text" name="usn" class="form-control" required autofocus>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Password :</label>
                    <div class="col-sm-10">
                        <input type="password" name="pass" class="form-control" required autofocus>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Email Address :</label>
                    <div class="col-sm-10">
                        <input type="text" name="email" class="form-control" require autofocus>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Username Sebelumnya :</label>
                    <div class="col-sm-10">
                        <input type="text" name="usn_s" class="form-control" require autofocus>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Password Sebelumnya :</label>
                    <div class="col-sm-10">
                        <input type="password" name="pw_s" class="form-control" require autofocus>
                    </div>
                </div>
                <h5>NOTES</h5>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <input type="checkbox" name="notes" value="User & Password hanya diketahui oleh PIC"> User & Password hanya diketahui oleh PIC <br>
                    </div>
                    <div class="col-sm-10">
                        <input type="checkbox" name="notes" value="Tidak menuliskan User & Password secara sembarangan"> Tidak menuliskan User & Password secara sembarangan <br>
                    </div>
                    <div class="col-sm-10">
                        <input type="checkbox" name="notes" value="Jika Username & Password sudah tidak digunakan, informasikan kepada IT"> Jika Username & Password sudah tidak digunakan, informasikan kepada IT
                    </div>
                </div>
                <h5>IT SECTION</h5>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Nama SPV IT & Tanda Tangan :</label>
                    <div class="col-sm-10">
                        <input type="text" name="spv_it" class="form-control" require autofocus>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Tanggal Approved :</label>
                    <div class="col-sm-10">
                        <input type="date" name="tgl_ap" class="form-control" require autofocus>
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