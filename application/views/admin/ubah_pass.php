<?php
$user = $user;
$level = $user->level; ?>
<!-- Main content -->
<div class="content-wrapper">
  <!-- Content area -->
  <div class="content">
    <!-- Dashboard content -->
    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-12">
        <div class="panel">
          <div class="panel-heading bg-primary-600">
            <h7 class="panel-title"><i class="glyphicon glyphicon-user"></i>&nbsp; <b>Ubah Password</b></h7>
          </div>
          <div class="panel-body">
            <fieldset class="content-group">
              <?php
              echo $this->session->flashdata('msg2');
              ?>
              <form class="form-horizontal" action="" method="post">
                <div class="form-group">
                  <label class="control-label col-lg-3">Password Lama</label>
                  <div class="col-lg-9">
                    <input type="password" name="password_lama" class="form-control" value="" placeholder="Password Lama" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-3">Password Baru</label>
                  <div class="col-lg-9">
                    <input type="password" name="password" class="form-control" value="" placeholder="Password Baru" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-3">Ulangi Password Baru</label>
                  <div class="col-lg-9">
                    <input type="password" name="password2" class="form-control" value="" placeholder="Ulangi Password Baru" required>
                  </div>
                </div>
            </fieldset>
            <hr>
            <center><button type="submit" name="btnupdate2" class="btn btn-sm bg-orange-400"><i class="glyphicon glyphicon-ok"></i><strong>&nbsp; Update Data</strong></button></center>
            </form>
          </div>
        </div>
      </div>

    </div>
    <!-- /dashboard content -->