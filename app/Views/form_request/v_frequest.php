<!-- /.card -->
<!-- Horizontal Form -->
<div class="col-sm-12">
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">REQUEST RELAYOUT PC</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="<?= site_url('Frequest') ?>/add" method="post" class="form-horizontal">
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
                    <label class="col-sm-2 col-form-label">Tanda Tangan :</label>
                    <div class="col-sm-10">
                        <input type="text" name="ttd_u" class="form-control" required autofocus>
                    </div>
                </div>
                <h5>MANAGER INFORMATION</h5>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Nama Lengkap :</label>
                    <div class="col-sm-10">
                        <input type="text" name="nama_lgkp" class="form-control" required autofocus>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Tanda Tangan :</label>
                    <div class="col-sm-10">
                        <input type="text" name="ttd_m" class="form-control" required autofocus>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Tanggal :</label>
                    <div class="col-sm-10">
                        <input type="date" name="tgl" class="form-control" required autofocus>
                    </div>
                </div>
                <h5>FILLED BY USER REQUEST</h5>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Area :</label>
                    <div class="col-sm-10">
                        <input type="text" name="area" class="form-control" required autofocus>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Jumlah PC :</label>
                    <div class="col-sm-10">
                        <input type="text" name="jmlh_pc" class="form-control" required autofocus>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">NOTES :</label>
                    <div class="col-sm-10">
                        <input type="checkbox" name="notes" value="OK"> Mengisi Form Maksimal Satu Hari Sebelum Relayout dilakukan <br>
                        <input type="checkbox" name="notes" value="OK"> Lampiran Denah Before -After area yang akan di relayout <br>
                        <input type="checkbox" name="notes" value="OK"> Timing relayout ditentukan oleh IT <br>
                        <input type="checkbox" name="notes" value="OK"> Pastikan saat akan relayout, PC dalam keadaan mati <br>
                        <input type="checkbox" name="notes" value="OK"> Pastikan sudah terinstall listrik oleh BUILDING <br>
                        <input type="checkbox" name="notes" value="OK"> IT hanya merelayout Equipment PC saja <br>
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
                        <input type="date" name="is_date" class="form-control" required autofocus>
                    </div>
                </div>
                <h5>Approved Timing Relayout</h5>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Tanggal :</label>
                    <div class="col-sm-10">
                        <input type="date" name="tgl_relayout" class="form-control" required autofocus>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Jam :</label>
                    <div class="col-sm-10">
                        <input type="time" name="jam_relayout" class="form-control" required autofocus>
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