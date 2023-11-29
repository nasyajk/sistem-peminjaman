<!-- /.card -->
<!-- Horizontal Form -->
<div class="col-sm-12">
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">SOFTWARE TRIAL REQUEST FORM</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="<?= site_url('Fsoftware') ?>/add" method="post" class="form-horizontal">
            <?= csrf_field(); ?>
            <div class="card-body">
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Origin Location of Request :</label>
                    <div class="col-sm-10">
                        <input type="checkbox" name="req" value="HRGA"> HRGA
                        <input type="checkbox" name="req" value="PPC MPC"> PPC MPC
                        <input type="checkbox" name="req" value="ENG"> ENG.
                        <input type="checkbox" name="req" value="FINACC"> FINACC
                        <input type="checkbox" name="req" value="PROD"> PROD.
                        <input type="checkbox" name="req" value="QA"> QA
                    </div>
                </div>
                <h5>MANAGER INFORMATION</h5>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Full Name :</label>
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
                        <input type="text" name="no_hp" class="form-control" required autofocus>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Email :</label>
                    <div class="col-sm-10">
                        <input type="text" name="email" class="form-control" required autofocus>
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
                        <input type="text" name="ttd_p" class="form-control" required autofocus>
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
                <h5>SOFTWARE INFORMATION</h5>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Describe the added value of software to your job you are doing. :</label>
                    <div class="col-sm-10">
                        <input type="text" name="value_software" class="form-control" required autofocus>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Describe detail information of software (e.g. name, maker, version). :</label>
                    <div class="col-sm-10">
                        <input type="text" name="info_software" class="form-control" required autofocus>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Describe the schedule and end date use of this software. :</label>
                    <div class="col-sm-10">
                        <input type="text" name="schedule_software" class="form-control" required autofocus>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Describe special hardware to comply to requirement of software, if any. :</label>
                    <div class="col-sm-10">
                        <input type="text" name="req_software" class="form-control" required autofocus>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Describe any support document (e.g. Approved Budget), if any. :</label>
                    <div class="col-sm-10">
                        <input type="text" name="sup_doc" class="form-control" required autofocus>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Confirmation (fill by IT member) :</label>
                    <div class="col-sm-10">
                        <input type="text" name="ttd_it" class="form-control" required autofocus>
                    </div>
                </div>
                <h5>INFORMATION TECHNOLOGY (diisi oleh IT)</h5>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Full Name :</label>
                    <div class="col-sm-10">
                        <input type="text" name="nama_it" class="form-control" required autofocus>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Recived Date :</label>
                    <div class="col-sm-10">
                        <input type="date" name="recv_date" class="form-control" required autofocus>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Register No :</label>
                    <div class="col-sm-10">
                        <input type="text" name="register_no" class="form-control" required autofocus>
                    </div>
                </div>
                <h5>ANALYZING (diisi oleh IT)</h5>
                <div class="form-group row">
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