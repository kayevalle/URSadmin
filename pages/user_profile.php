
<?php include '../head.php' ?>

  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      User Profile
    </h1>
    <ol class="breadcrumb">
      <li><a href="/admin/pages/dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active"> User Profile</li>
    </ol>
  </section>

      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-md-3">
            <div class="box box-primary">
              <div class="box-body box-profile">
                <img class="profile-user-img img-responsive img-circle" src="/admin/dist/img/user2-160x160.jpg" alt="User profile picture">

                <p><h3 class="profile-username text-center">Alexander Pierce</h3></p>

                <p class="text-muted text-center">Dean</p>
                <button type="submit" class="btn btn-primary btn-block">Upload new photo</button>
              </div>
            </div>
          </div>

          <div class="col-md-9">
            <div class="nav-tabs-custom">
              <ul class="nav nav-tabs">
                <li class="active"><a href="#profile" data-toggle="tab">Profile</a></li>
              <li><a href="#account" data-toggle="tab">Account</a></li>
              </ul>
              <div class="tab-content">

                <div class="tab-pane active" id="profile">
                  <form class="form-horizontal">
                    <div class="form-group">
                      <label for="inputName" class="col-sm-2 control-label">Name</label>

                      <div class="col-sm-10">
                        <input class="form-control" type="text" placeholder="Alexander Pierce" readonly>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputEmail" class="col-sm-2 control-label">Email</label>

                      <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="alexanderpierce@gmail.com" readonly>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="address" class="col-sm-2 control-label">Address</label>

                      <div class="col-sm-10">
                        <textarea class="form-control" id="address" placeholder="address dito"></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="contactnumber" class="col-sm-2 control-label">Contact</label>

                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="contactnumber" placeholder="0917563856">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary">Update Profile</button>
                      </div>
                    </div>
                  </form>
                </div>
                
                <div class="tab-pane" id="account">
                  <form class="form-horizontal">
                    <div class="form-group">
                      <label for="oldpassword" class="col-sm-2 control-label">Old Password</label>

                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="oldpassword" placeholder="old password">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="newpassword" class="col-sm-2 control-label">New Password</label>

                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="newpassword" placeholder="new password">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="confirmpassword" class="col-sm-2 control-label">Confirm Password</label>

                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="confirmpassword" placeholder="confirm password">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary">Update Password</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              <!-- /.tab-content -->
            </div>
            <!-- /.nav-tabs-custom -->
          </div>
        </div>

      </section>
      <!-- /.content -->

<!-- ./wrapper -->
<?php include '../script.php' ?>