
<?php include '../head.php' ?>

  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Announcements
    </h1>
    <ol class="breadcrumb">
      <li><a href="/admin/pages/dashboard.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li>Announcements</li>
      <li class="active">Create Announcement</li>
    </ol>
  </section>

      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Article</h3>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
              <form role="form">
                <div class="box-body">
                  <p class="text-muted">Date: march 25, 2018</p>
                  <br>
                  <div class="form-group">
                    <label for="inputArticleTitle">Title</label>
                    <input type="text" class="form-control" id="inputArticleTitle" placeholder="Enter title">
                      <p class="help-block">Author: my name.</p>
                  </div>
                  <div class="form-group">
                    <label for="writeAnnouncement">Announcement</label>
                    <textarea class="form-control" id="writeAnnouncement" placeholder="announcement"></textarea>
                  </div>
                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                  <button type="submit" class="btn btn-primary">Publish</button>
                </div>
              </form>
            </div>
            <!-- /.box -->

          </div>
        </div>

      </section>
      <!-- /.content -->

<!-- ./wrapper -->
<?php include '../script.php' ?>


