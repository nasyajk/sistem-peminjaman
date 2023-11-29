<!-- /.card -->
<!-- Horizontal Form -->
<div class="col-sm-12">
  <div class="card card-info">
    <div class="card-header">
      <h3 class="card-title">LAN Conection Check Sheet Yazaki Employee ( Non SUAI )</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="<?= site_url('Fyazaki') ?>/add" method="post" class="form-horizontal">
      <?= csrf_field(); ?>
      <div class="card-body">
        <div class="form-group row">
          <label class="col-sm-2 col-form-label">Date :</label>
          <div class="col-sm-10">
            <input type="date" name="tanggal" class="form-control" required autofocus>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-2 col-form-label">Network :</label>
          <div class="col-sm-10">
            <input type="checkbox" name="network" value="LAN"> LAN
            <input type="checkbox" name="network" value="WIFI"> WIFI
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-2 col-form-label">1. Check Anti Virus Soft is Installed ?</label>
          <div class="col-sm-10">
            <input type="radio" name="check_a" value="YES"> YES
            <input type="radio" name="check_a" value="NO"> NO
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-2 col-form-label">2. Name of Software :</label>
          <div class="col-sm-10">
            <input type="text" name="nama_software" class="form-control" required autofocus>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-2 col-form-label">3. Check Version of Pattarn File / Engine is latest ?</label>
          <div class="col-sm-10">
            <input type="radio" name="check_v" value="YES"> YES
            <input type="radio" name="check_v" value="NO"> NO
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-2 col-form-label">4. Version of File and Engine :</label>
          <div class="col-sm-10">
            <input type="text" name="ver" class="form-control" required autofocus>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-2 col-form-label">5. The Purpose of Connection :</label>
          <div class="col-sm-10">
            <input type="checkbox" name="purpose_connection" value="Internet"> Internet
            <input type="checkbox" name="purpose_connection" value="Email"> E-mail
            <input type="checkbox" name="purpose_connection" value="Web Application"> Web Application
            <input type="checkbox" name="purpose_connection" value="File Server / FTP Server"> File Server / FTP Server <br>
            <label class="col-sm-2 col-form-label">Other :</label>
            <input type="text" name="lainnya" class="form-control">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-2 col-form-label">6. Connection Period :</label>
          <div class="col-sm-10">
            Start Form <input type="date" name="mulai" class="form-control">
            Until <input type="date" name="until" class="form-control">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-2 col-form-label">7. Connection Place :</label>
          <div class="col-sm-10">
            <input type="text" name="connec_p" class="form-control" required autofocus>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-2 col-form-label">8. User & PC Information :</label>
          <div class="col-sm-10">
            1) User Information ( Name, Company ) :<input type="text" name="user" class="form-control" required autofocus>
            2) Device ID ( PC Name, S / n ) :<input type="text" name="device_id" class="form-control" required autofocus>
            3) Operating System :<input type="text" name="op" class="form-control" required autofocus>
            4) <input type="checkbox" name="_sd" value="Static IP Address"> Static IP Address
            <input type="checkbox" name="_sd" value="Dynamic IP Address"> Dynamic IP Address <br>
            (1) IP : <input type="text" name="ip" class="form-control" required autofocus>
            (2) Subnet : <input type="text" name="subnet" class="form-control" required autofocus>
            (3) G/W : <input type="text" name="gw" class="form-control" required autofocus>
            (4) DNS Priority : <input type="text" name="dns_p" class="form-control" required autofocus>
            (5) DNS Secondary : <input type="text" name="dns_s" class="form-control" required autofocus>
            (6) MAC Address :<input type="text" name="mac" class="form-control" required autofocus>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-2 col-form-label">IT Member who Connected</label>
          <div class="col-sm-10">
            <input type="text" name="ttd_it" class="form-control" required autofocus>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-2 col-form-label">IT SPV</label>
          <div class="col-sm-10">
            <input type="text" name="ttd_spv" class="form-control" required autofocus>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-2 col-form-label">Personal-in-Charge-Request</label>
          <div class="col-sm-10">
            <input type="text" name="ttd_p" class="form-control" required autofocus>
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