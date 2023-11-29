<!-- /.card -->
<!-- Horizontal Form -->
<div class="col-sm-12">
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">STORAGE MOBILE REGISTER FORM</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="<?= site_url('Fstorage') ?>/add" method="post" class="form-horizontal">
            <?= csrf_field(); ?>
            <div class="card-body">
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Origin Location of Request :</label>
                    <div class="col-sm-10">
                        <input type="checkbox" name="status_request" value="HRGA"> HRGA
                        <input type="checkbox" name="status_request" value="PPC MPC"> PPC MPC
                        <input type="checkbox" name="status_request" value="ENG"> ENG.
                        <input type="checkbox" name="status_request" value="FINACC"> FINACC
                        <input type="checkbox" name="status_request" value="PROD"> PROD.
                        <input type="checkbox" name="status_request" value="QA"> QA
                    </div>
                </div>
                <h5>MANAGER INFORMATION</h5>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Full Name :</label>
                    <div class="col-sm-10">
                        <input type="text" name="nama_m" class="form-control" required autofocus>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Department / Section :</label>
                    <div class="col-sm-10">
                        <input type="text" name="department" class="form-control" required autofocus>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Signature :</label>
                    <div class="col-sm-10">
                        <input type="text" name="ttd_m" class="form-control" required autofocus>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Date :</label>
                    <div class="col-sm-10">
                        <input type="date" name="tgl" class="form-control" required autofocus>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Phone :</label>
                    <div class="col-sm-10">
                        <input type="text" name="no_m" class="form-control" required autofocus>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Email :</label>
                    <div class="col-sm-10">
                        <input type="text" name="email_m" class="form-control" required autofocus>
                    </div>
                </div>
                <h5>PIC INFORMATION</h5>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Full Name :</label>
                    <div class="col-sm-10">
                        <input type="text" name="nama_pic" class="form-control" required autofocus>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Signature :</label>
                    <div class="col-sm-10">
                        <input type="text" name="ttd_pic" class="form-control" required autofocus>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Phone :</label>
                    <div class="col-sm-10">
                        <input type="text" name="no_pic" class="form-control" required autofocus>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Email :</label>
                    <div class="col-sm-10">
                        <input type="text" name="email_pic" class="form-control" required autofocus>
                    </div>
                </div>
                <h5>STORAGE MOBILE INFORMATION</h5>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Describe detail information of Storage Mobile :</label>
                    <div class="col-sm-10">
                        <input type="text" name="desc_detail" class="form-control" required autofocus>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Describe the added value of storage Mobile to your job. :</label>
                    <div class="col-sm-10">
                        <input type="text" name="desc_ad" class="form-control" required autofocus>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Describe the schedule of use of this Storage Mobile :</label>
                    <div class="col-sm-10">
                        <input type="text" name="desc_sc" class="form-control" required autofocus>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Confirmation (Fill by IT Member) :</label>
                    <div class="col-sm-10">
                        <input type="text" name="ttd" class="form-control" required autofocus>
                    </div>
                </div>
                <h5>INFORMATION TECHNOLOGY</h5>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Full Name :</label>
                    <div class="col-sm-10">
                        <input type="text" name="nama_it" class="form-control" required autofocus>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Received Date :</label>
                    <div class="col-sm-10">
                        <input type="date" name="r_date" class="form-control" required autofocus>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Register No :</label>
                    <div class="col-sm-10">
                        <input type="text" name="reg_no" class="form-control" required autofocus>
                    </div>
                </div>
                <h5>ANALYZING</h5>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10">
                        <input type="checkbox" name="analyzing" value="APPROVED"> APPROVED
                        <input type="checkbox" name="analyzing" value="DENIED"> DENIED
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Reason for Denial :</label>
                    <div class="col-sm-10">
                        <input type="text" name="reason" class="form-control" required autofocus>
                    </div>
                </div>
                <h5>INFORMATION TECHNOLOGY</h5>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Signature / Initial :</label>
                    <div class="col-sm-10">
                        <input type="text" name="ttd_it" class="form-control" required autofocus>
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