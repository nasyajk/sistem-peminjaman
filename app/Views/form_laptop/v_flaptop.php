<!-- /.card -->
<!-- Horizontal Form -->
<div class="col-sm-12">
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">REQUEST KHUSUS PENGGUNAAN LAPTOP</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="<?= site_url('Flaptop') ?>/add" method="post" class="form-horizontal">
            <?= csrf_field(); ?>
            <div class="card-body">
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Status Request :</label>
                    <div class="col-sm-10">
                        <input type="checkbox" name="status_req" value="HRGA"> HRGA
                        <input type="checkbox" name="status_req" value="PPC MPC"> PPC MPC
                        <input type="checkbox" name="status_req" value="ENG"> ENG.
                        <input type="checkbox" name="status_req" value="FINACC"> FINACC
                        <input type="checkbox" name="status_req" value="PROD"> PROD.
                        <input type="checkbox" name="status_req" value="QA"> QA
                    </div>
                </div>
                <h5>USER INFORMATION</h5>
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
                    <label class="col-sm-2 col-form-label">Tanggal Pengisian Form :</label>
                    <div class="col-sm-10">
                        <input type="date" name="tgl_pengisian" class="form-control" required autofocus>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Tanda Tangan PIC Request :</label>
                    <div class="col-sm-10">
                        <input type="text" name="ttd_pic" class="form-control" required autofocus>
                    </div>
                </div>
                <h5>NOTES FILLED BY PIC REQUEST</h5>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10">
                        <input type="checkbox" name="notes" value="OK"> Laptop hanya digunakan oleh PIC tetapi jika IT membutuhkan, boleh dipinjam dengan catatan penggunaan urgent seperti Assessment (Request khusus dari management) <br>
                        <input type="checkbox" name="notes" value="OK"> Jika akan meninggalkan meja untuk sementara waktu, pastikan laptop dalam keadaan Screenlock, dengan menekan tombol Windows + L <br>
                        <input type="checkbox" name="notes" value="OK"> Ketika akan meninggalkan Laptop (tidak dibawa pulang), pastikan dalam keadaan terkunci menggunakan security wire <br>
                        <input type="checkbox" name="notes" value="OK"> Jika akan membawa laptop keluar perusahaan diharuskan mengisi Form Bring Out terlebih dahulu
                    </div>
                </div>
                <h5>FILLED BY PIC REQUEST</h5>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">SSPV :</label>
                    <div class="col-sm-10">
                        <input type="text" name="sspv" class="form-control" required autofocus>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">MGR :</label>
                    <div class="col-sm-10">
                        <input type="text" name="mgr" class="form-control" required autofocus>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">DFM :</label>
                    <div class="col-sm-10">
                        <input type="text" name="dfm" class="form-control" required autofocus>
                    </div>
                </div>
                <h5>FILLED BY IT</h5>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">PC Name :</label>
                    <div class="col-sm-10">
                        <input type="text" name="nama_pc" class="form-control" required autofocus>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Laptop Name :</label>
                    <div class="col-sm-10">
                        <input type="text" name="nama_laptop" class="form-control" required autofocus>
                    </div>
                </div>
                <h5>FILLED BY IT</h5>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">SPV IT :</label>
                    <div class="col-sm-10">
                        <input type="text" name="spv_it" class="form-control" required autofocus>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">IT MGR :</label>
                    <div class="col-sm-10">
                        <input type="text" name="it_mgr" class="form-control" required autofocus>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10">
                        <input type="checkbox" name="ad" value="APPROVED"> APPROVED
                        <input type="checkbox" name="ad" value="DENIED"> DENIED
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Issued Date :</label>
                    <div class="col-sm-10">
                        <input type="date" name="is_date" class="form-control" required autofocus>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Reason for Denial :</label>
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