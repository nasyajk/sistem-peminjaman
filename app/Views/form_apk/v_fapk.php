<!-- /.card -->
<!-- Horizontal Form -->
<div class="col-sm-12">
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">APLIKASI DAN KONTROL LIST UNTUK PC DAN LAIN-LAIN YANG DIBAWA KELUAR</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="<?= site_url('Fapk') ?>/add" method="post" class="form-horizontal">
            <?= csrf_field(); ?>
            <div class="card-body">
                <h5>[WAKTU PENGAJUAN APLIKASI]</h5>
                <h5>PENGAJU HARUS MENGISI ISIAN</h5>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Tanggal Aplikasi :</label>
                    <div class="col-sm-10">
                        <input type="date" name="tgl_apk" class="form-control" required autofocus>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Perusahaan :</label>
                    <div class="col-sm-10">
                        <input type="text" name="perusahaan" class="form-control" required autofocus>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Department :</label>
                    <div class="col-sm-10">
                        <input type="text" name="dep" class="form-control" required autofocus>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Nama Orang Pembawa :</label>
                    <div class="col-sm-10">
                        <input type="text" name="nama_pmbw" class="form-control" required autofocus>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Lokasi dibawa :</label>
                    <div class="col-sm-10">
                        <input type="text" name="lokasi" class="form-control" required autofocus>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Keperluan :</label>
                    <div class="col-sm-10">
                        <input type="text" name="keperluan" class="form-control" required autofocus>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Tanggal dibawa keluar :</label>
                    <div class="col-sm-10">
                        <input type="date" name="tgl_klr" class="form-control" required autofocus>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Tanggal yang dikembalikan :</label>
                    <div class="col-sm-10">
                        <input type="date" name="tgl_kmbl" class="form-control" required autofocus>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10">
                        Pengecekkan informasi yang dibawa keluar Jika PC dll dibawa keluar, data yang dibawa sudah dicheck Check => <input type="checkbox" name="chck" value="Check">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Approve untuk bawa keluar (diisi oleh orang yang mengapprove) :</label>
                    <div class="col-sm-10">
                        <input type="text" name="ttd_ap" class="form-control" required autofocus>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Tanggal :</label>
                    <div class="col-sm-10">
                        <input type="date" name="tgl_ap" class="form-control" required autofocus>
                    </div>
                </div>
                <h5>Information Asset dalam PC yang dibawa (pada saat mengisi aplikasi)</h5>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Controlor Nama Barang :</label>
                    <div class="col-sm-10">
                        <input type="text" name="nama_brg" class="form-control" required autofocus>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Machine Information Maker :</label>
                    <div class="col-sm-10">
                        <input type="text" name="maker_m" class="form-control" required autofocus>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Mode :</label>
                    <div class="col-sm-10">
                        <input type="text" name="mode_m" class="form-control" required autofocus>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Serial # :</label>
                    <div class="col-sm-10">
                        <input type="text" name="serial_m" class="form-control" required autofocus>
                    </div>
                </div>
                <h5>[WAKTU DIKEMBALIKAN]</h5>
                <p>Pengecekkan oleh orang yang membawa keluar (mengisi pada saat dikembalikan, dan asset informasi yang dibawa keluar adalah PC, Server dan Recording media)</p>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Pengecekkan penggunaan informasi asset di tempat dibawa, Tolong check item yang tersebut.</label>
                    <div class="col-sm-10">
                        <input type="checkbox" name="check_item" value="Tidak diconnect pada network atau PC, server pada tempat yang dibawa"> Tidak diconnect pada network atau PC, server pada tempat yang dibawa <br>
                        <input type="checkbox" name="check_item" value="Tidak diimport data atau tidak diconnect media yang punya orang lain ditempat yang dibawa."> Tidak diimport data atau tidak diconnect media yang punya orang lain ditempat yang dibawa.
                    </div>
                </div>
                <p> # Jika tidak ada (check) diatas kolomnya, butuh mengecekkan virus.</p>
                <h5>Penyimpan Aplikasi</h5>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Pengecekkan Penerimaan :</label>
                    <div class="col-sm-10">
                        <input type="text" name="ttd_p" class="form-control" required autofocus>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Tanggal :</label>
                    <div class="col-sm-10">
                        <input type="date" name="tgl_p" class="form-control" required autofocus>
                    </div>
                </div>
                <h5>Approver [Manajer]</h5>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Pengecekan Pengembalian :</label>
                    <div class="col-sm-10">
                        <input type="text" name="ttd_b" class="form-control" required autofocus>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Tanggal :</label>
                    <div class="col-sm-10">
                        <input type="date" name="tgl_b" class="form-control" required autofocus>
                    </div>
                </div>
                <h5>Pembawa</h5>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Pengecekan Virus :</label>
                    <div class="col-sm-10">
                        <input type="text" name="p_virus" class="form-control" required autofocus>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Tanggal :</label>
                    <div class="col-sm-10">
                        <input type="date" name="tgl_pv" class="form-control" required autofocus>
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