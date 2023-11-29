<!-- /.card -->
<!-- Horizontal Form -->
<div class="col-sm-12">
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">WORK REQUEST FORM</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="<?= site_url('Fwork') ?>/add" method="post" class="form-horizontal">
            <?= csrf_field(); ?>
            <div class="card-body">
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Work Request Location :</label>
                    <div class="col-sm-10">
                        <input type="checkbox" name="req" value="HRGA"> HRGA
                        <input type="checkbox" name="req" value="PPC MPC"> PPC MPC
                        <input type="checkbox" name="req" value="ENG"> ENG.
                        <input type="checkbox" name="req" value="FINACC"> FINACC
                        <input type="checkbox" name="req" value="PROD"> PROD.
                        <input type="checkbox" name="req" value="QA"> QA
                    </div>
                </div>
                <h5>USER INFORMATION</h5>
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
                    <label class="col-sm-2 col-form-label">PC Name / Equipment :</label>
                    <div class="col-sm-10">
                        <input type="text" name="pc_nama" class="form-control" required autofocus>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Reporting Date :</label>
                    <div class="col-sm-10">
                        <input type="date" name="r_tgl" class="form-control" required autofocus>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Reporting Time :</label>
                    <div class="col-sm-10">
                        <input type="time" name="r_wkt" class="form-control" required autofocus>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Extension :</label>
                    <div class="col-sm-10">
                        <input type="text" name="ext" class="form-control" required autofocus>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10">
                        <input type="checkbox" name="pdw" value="PROBLEM DESCRIPTION"> PROBLEM DESCRIPTION
                        <input type="checkbox" name="pdw" value="WORK REQUEST"> WORK REQUEST
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Describe the problem according to confirmation user, symptom actual :</label>
                    <div class="col-sm-10">
                        <input type="text" name="desc_p" class="form-control" required autofocus>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10">
                        <input type="checkbox" name="ac" value="ANALYZING AND SOLUTION"> ANALYZING AND SOLUTION
                        <input type="checkbox" name="ac" value="ACTION"> ACTION
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Put X on box describe the analysis and solution to troubleshoot the problem :</label>
                    <div class="col-sm-10">
                        <input type="text" name="desc_n" class="form-control" required autofocus>
                    </div>
                </div>
                <h5>ROOTCAUSE</h5>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Describe the rootcause according to analysis :</label>
                    <div class="col-sm-10">
                        <input type="text" name="desc_r" class="form-control" required autofocus>
                    </div>
                </div>
                <h5>SUGGESTION TO PREVENT REOCCURENCE</h5>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Describe suggestion to prevent reoccurence :</label>
                    <div class="col-sm-10">
                        <input type="text" name="desc_s" class="form-control" required autofocus>
                    </div>
                </div>
                <h5>STATUS</h5>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Choose one of them</label>
                    <div class="col-sm-10">
                        <input type="checkbox" name="stat" value="On progress by IT member"> On progress by IT member <br>
                        <input type="checkbox" name="stat" value="Service in vendor site"> Service in vendor site <br>
                        <input type="checkbox" name="stat" value="Closed caused unable repaired"> Closed caused unable repaired <br>
                        <input type="checkbox" name="stat" value="Closed caused unable solved"> Closed caused unable solved
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Date :</label>
                    <div class="col-sm-10">
                        <input type="date" name="tgl" class="form-control" required autofocus>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">PIC :</label>
                    <div class="col-sm-10">
                        <input type="text" name="pic" class="form-control" required autofocus>
                    </div>
                </div>
                <h5>Sign / Initial</h5>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">HELPDESK PIC :</label>
                    <div class="col-sm-10">
                        <input type="text" name="ttd_h" class="form-control" required autofocus>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">TECHNICAL PIC :</label>
                    <div class="col-sm-10">
                        <input type="text" name="ttd_t" class="form-control" required autofocus>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">REGISTER PIC :</label>
                    <div class="col-sm-10">
                        <input type="text" name="ttd_r" class="form-control" required autofocus>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">USER APPROVAL :</label>
                    <div class="col-sm-10">
                        <input type="text" name="ttd_u" class="form-control" required autofocus>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">IT APPROVAL :</label>
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