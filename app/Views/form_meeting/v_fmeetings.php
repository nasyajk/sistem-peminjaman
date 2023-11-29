<!-- /.card -->
<!-- Horizontal Form -->
<div class="col-sm-12">
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">ONLINE MEETING REQUEST</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="<?= site_url('Fmeetings') ?>/add" method="post" class="form-horizontal">
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
                        <input type="date" name="tgl" class="form-control" required autofocus>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Tanda Tangan :</label>
                    <div class="col-sm-10">
                        <input type="text" name="ttd_u" class="form-control" required autofocus>
                    </div>
                </div>
                <h5>PLACE & DATE INFORMATION</h5>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Tanggal Meeting :</label>
                    <div class="col-sm-10">
                        <input type="date" name="tgl_meeting" class="form-control" required autofocus>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Ruangan Meeting :</label>
                    <div class="col-sm-10">
                        <input type="text" name="r_meeting" class="form-control" required autofocus>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Pembahasan Meeting :</label>
                    <div class="col-sm-10">
                        <input type="text" name="p_meeting" class="form-control" required autofocus>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Equipment yang diperlukan :</label>
                    <div class="col-sm-10">
                        <input type="checkbox" name="equipment" value="Laptop"> Laptop
                        <input type="checkbox" name="equipment" value="Jabra Speaker"> Jabra Speaker
                        <input type="checkbox" name="equipment" value="Mouse"> Mouse
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">waktu Meeting Mulai :</label>
                    <div class="col-sm-10">
                        <input type="time" name="mulai" class="form-control" required autofocus>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">waktu Meeting Selesai :</label>
                    <div class="col-sm-10">
                        <input type="time" name="selesai" class="form-control" required autofocus>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Link Meeting dibuatkan oleh IT :</label>
                    <div class="col-sm-10">
                        <input type="checkbox" name="l_meeting" value="YA"> YA
                        <input type="checkbox" name="l_meeting" value="TIDAK"> TIDAK
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Kirim Link URL meeting kepada IT :</label>
                    <div class="col-sm-10">
                        <input type="checkbox" name="k_link" value="SUDAH"> SUDAH
                        <input type="checkbox" name="k_link" value="BELUM"> BELUM
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Email : it-05@suai.co.id</label>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Aplikasi yang digunakan :</label>
                    <div class="col-sm-10">
                        <input type="checkbox" name="apk" value="Lync Meeting"> Lync Meeting
                        <input type="checkbox" name="apk" value="MS TEAMS"> MS TEAMS
                        <input type="checkbox" name="apk" value="Zoom"> Zoom
                        <input type="checkbox" name="apk" value="Lainnya"> Lainnya
                    </div>
                </div>
                <h5>FILLED BY IT</h5>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Item check diisi oleh IT :</label>
                    <div class="col-sm-10">
                        <input type="checkbox" name="item_c" value="Mouse"> Mouse
                        <input type="checkbox" name="item_c" value="Jabra Speaker"> Jabra Speaker
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Laptop Name :</label>
                    <div class="col-sm-10">
                        <input type="text" name="nama_laptop" class="form-control" required autofocus>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">NOTES :</label>
                    <div class="col-sm-10">
                        <input type="checkbox" name="notes" value="OK"> Mengisi Form Maksimal Satu Hari Sebelum Meeting dimulai <br>
                        <input type="checkbox" name="notes" value="OK"> Setelah Meeting selesai dimohon untuk mematikan Laptop & merapihkan Equipment Meeting <br>
                        <input type="checkbox" name="notes" value="OK"> Menghapus data yang ada dilaptop setelah selesai digunakan <br>
                        <input type="checkbox" name="notes" value="OK"> Setelah Meeting selesai dimohon mengembalikan equipment IT seperti Speaker Jabra, Mouse, Laptop beserta chargernya <br>
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