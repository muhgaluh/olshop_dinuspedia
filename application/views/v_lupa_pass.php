<div class="row">
  <div class="col-sm-4"></div>
  <div class="col-sm-4">
    <div class="register-box" style="margin-top: 200px;">
      <div class="card">
        <div class="card-body register-card-body">
          <p class="login-box-msg">Lupa Password ? Update Password Anda</p>

          <?php 
          echo validation_errors('<div class="alert alert-warning alert-dismissible">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <h5><i class="icon fas fa-exclamation-triangle"></i> Alert!</h5>','</div>');

          if ($this->session->flashdata('pesan')) {
            echo'<div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h5><i class="icon fas fa-check"></i> Sukses!</h5>';
            echo $this->session->flashdata('pesan');
            echo'</div>';
          }

          if ($this->session->flashdata('error')) {
            echo'<div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h5><i class="icon fas fa-times"></i> Error!</h5>';
            echo $this->session->flashdata('error');
            echo'</div>';
          }

          echo form_open('pelanggan/lupa_pass'); ?>
          <div class="input-group mb-3">
            <input type="email" name="email" value="<?= set_value('email') ?>" class="form-control" placeholder="Email">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" name="password" value="<?= set_value('password') ?>" class="form-control" placeholder="Password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" name="retype_password" value="<?= set_value('retype_password') ?>" class="form-control" placeholder="Retype password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-8">
            </div>
            <!-- /.col -->
            <div class="col-4">
              <button type="submit" class="btn btn-primary btn-block">Update</button>
            </div>
            <!-- /.col -->
          </div>
          <?php echo form_close() ?>
        </div>
        <!-- /.form-box -->
      </div>
    </div>
  </div>
  <div class="col-sm-4"></div>
</div>
