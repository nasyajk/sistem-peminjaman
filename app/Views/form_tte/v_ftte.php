<!-- /.card -->
<!-- Horizontal Form -->
<div class="col-sm-12">
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">TANDA TERIMA</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="<?= site_url('Ftte') ?>/add" method="post" class="form-horizontal">
            <?= csrf_field(); ?>
            <div class="card-body">
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Telah diserahkan kepada :</label>
                    <div class="col-sm-10">
                        <input type="text" name="diserahkan" class="form-control" required autofocus>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">berupa :</label>
                    <div class="col-sm-10">
                        <input type="text" name="brp" class="form-control" required autofocus>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Adapun detailnya terdiri atas :</label>
                    <div class="col-sm-10">
                        <input type="text" name="dtail" class="form-control" required autofocus>
                    </div>
                </div>
                <h5>HARDWARE</h5>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Nama Barang :</label>
                    <div class="col-sm-10">
                        <input type="text" name="nama_brg" class="form-control" required autofocus>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">QUANTITY :</label>
                    <div class="col-sm-10">
                        <input type="text" name="quantity" class="form-control" required autofocus>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">DEPARTMENT :</label>
                    <div class="col-sm-10">
                        <input type="checkbox" name="department" value="HRGA"> HRGA
                        <input type="checkbox" name="department" value="PPC MPC"> PPC MPC
                        <input type="checkbox" name="department" value="ENG"> ENG
                        <input type="checkbox" name="department" value="FINACC"> FINACC
                        <input type="checkbox" name="department" value="PROD"> PROD
                        <input type="checkbox" name="department" value="QA"> QA
                    </div>
                </div>
                <h5>SOFTWARE</h5>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Nama Aplikasi :</label>
                    <div class="col-sm-10">
                        <input type="text" name="nama_apk" class="form-control" required autofocus>
                    </div>
                </div>
                <h5>SETTING</h5>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">PC Name :</label>
                    <div class="col-sm-10">
                        <input type="text" name="pc_name" class="form-control" require autofocus>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Username :</label>
                    <div class="col-sm-10">
                        <input type="text" name="usn" class="form-control" require autofocus>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">IP Address ( UTP ) :</label>
                    <div class="col-sm-10">
                        <input type="text" name="ip_u" class="form-control" require autofocus>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">IP Address ( WIFI ) :</label>
                    <div class="col-sm-10">
                        <input type="text" name="ip_w" class="form-control" require autofocus>
                    </div>
                </div>
                <h5>CHECKLIST</h5>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10">
                        <input type="checkbox" name="checklist" value="Replacement"> Replacement
                        <input type="checkbox" name="checklist" value="Additional"> Additional
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">PIC ( INSTALASI ) :</label>
                    <div class="col-sm-10">
                        <input type="text" name="pic_ins" class="form-control" required autofocus>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">SPV ( CHECK AKHIR ) :</label>
                    <div class="col-sm-10">
                        <input type="text" name="spv" class="form-control" required autofocus>
                    </div>
                </div>
                <p>Menyatakan bahwa semua barang yang diserahkan dan kelengkapannya masih berfungsi dengan baik</p>
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