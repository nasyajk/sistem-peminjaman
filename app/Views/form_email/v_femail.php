<!-- /.card -->
<!-- Horizontal Form -->
<div class="col-sm-12">
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">EMAIL ACCOUNT REQUEST</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="<?= site_url('Femail') ?>/add" method="post" class="form-horizontal">
            <?= csrf_field(); ?>
            <div class="card-body">
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Status Request :</label>
                    <div class="col-sm-10">
                        <input type="checkbox" name="status_request" value="HRGA"> HRGA
                        <input type="checkbox" name="status_request" value="PPC MPC"> PPC MPC
                        <input type="checkbox" name="status_request" value="ENG"> ENG.
                        <input type="checkbox" name="status_request" value="FINACC"> FINACC
                        <input type="checkbox" name="status_request" value="PROD"> PROD.
                        <input type="checkbox" name="status_request" value="QA"> QA
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
                    <label class="col-sm-2 col-form-label">Request Date :</label>
                    <div class="col-sm-10">
                        <input type="date" name="req_date" class="form-control" required autofocus>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Request By :</label>
                    <div class="col-sm-10">
                        <input type="text" name="req_by" class="form-control" required autofocus>
                    </div>
                </div>
                <h5>LOGIN INFORMATION</h5>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">User Account :</label>
                    <div class="col-sm-10">
                        <input type="text" name="nama_pengguna" class="form-control" required autofocus>
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
                        <input type="text" name="email_address" class="form-control" required autofocus>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Create Date :</label>
                    <div class="col-sm-10">
                        <input type="date" name="create_date" class="form-control" required autofocus>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">End Date :</label>
                    <div class="col-sm-10">
                        <input type="date" name="end_date" class="form-control" required autofocus>
                    </div>
                </div>
                <h5>NOTES</h5>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <input type="checkbox" name="notes" value="OK" required autofocus> You can access email via webmail at https://mail.suai.co.id <br>
                        <input type="checkbox" name="notes" value="OK" required autofocus> Fill User Id with user account above <br>
                        <input type="checkbox" name="notes" value="OK" required autofocus> Fill Password with password above <br>
                        <input type="checkbox" name="notes" value="OK" required autofocus> Then click login when you want to check mail <br>
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