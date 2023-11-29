<!-- /.card -->
<!-- Horizontal Form -->
<div class="col-sm-12">
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">FILE SERVER REQUEST</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="<?= site_url('Ffileserver') ?>/add" method="post" class="form-horizontal">
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
                    <label class="col-sm-2 col-form-label">Tanda Tangan SSPV :</label>
                    <div class="col-sm-10">
                        <input type="text" name="ttd_sspv" class="form-control" required autofocus>
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
                <h5>REASON & PLACE INFORMATION</h5>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Tujuan Penggunaan File Server :</label>
                    <div class="col-sm-10">
                        <input type="text" name="tujuan" class="form-control" required autofocus>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Area Penggunaan File Server :</label>
                    <div class="col-sm-10">
                        <input type="text" name="area" class="form-control" required autofocus>
                    </div>
                </div>
                <h5>FILLED BY IT</h5>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Nama Komputer :</label>
                    <div class="col-sm-10">
                        <input type="text" name="nama_komputer" class="form-control" required autofocus>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">User Komputer :</label>
                    <div class="col-sm-10">
                        <input type="text" name="user_komputer" class="form-control" required autofocus>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">IP :</label>
                    <div class="col-sm-10">
                        <input type="text" name="ip" class="form-control" required autofocus>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">NOTES : </label>
                    <div class="col-sm-10">
                        <input type="checkbox" name="notes" value="OK" required autofocus> File Server hanya digunakan oleh PIC Area komputer <br>
                        <input type="checkbox" name="notes" value="OK" required autofocus> Jika diluar PIC ingin menggunakan File Server, harus meminta izin terlebih dahulu kepada PIC area komputer <br>
                        <input type="checkbox" name="notes" value="OK" required autofocus> File Server adalah tempat penyimpanan sementara, dimohon untuk tidak menyimpan File secara permanent karena file server otomatis terhapus setiap minggunya
                    </div>
                </div>
                <h5>IT Supervisor</h5>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Signature / Initial :</label>
                    <div class="col-sm-10">
                        <input type="text" name="ttd" class="form-control" required autofocus>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Issued Date :</label>
                    <div class="col-sm-10">
                        <input type="text" name="is_date" class="form-control" required autofocus>
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