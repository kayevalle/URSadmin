
<?php include '../head.php' ?>

	<section class="content-header">
	  <h1>
	    Create User
	  </h1>
	  <ol class="breadcrumb">
	    <li><a href="/admin/index.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
	    <li> Users</li>
	    <li class="active">Create User</li>
	  </ol>
	</section>

      <!-- Main content -->
      <section class="content">
        <div class="row">
        	<div class="col-md-6">
        	  <!-- general form elements -->
        	  <div class="box box-primary">
        	    <div class="box-header with-border">
        	      <h3 class="box-title"></h3>
        	    </div>
        	    <!-- /.box-header -->
        	    <!-- form start -->
        	    <form role="form">
        	      <div class="box-body">
        	      	<div class="form-group">
        	          <label for="inputFirstname">Firstname</label>
        	          <input type="email" class="form-control" id="inputFirstname" placeholder="Enter firstname">
        	        </div>
        	        <div class="form-group">
        	          <label for="inputLastname">Lastname</label>
        	          <input type="email" class="form-control" id="inputLastname" placeholder="Enter lastname">
        	        </div>
        	        <div class="form-group">
        	          <label for="exampleInputEmail1">Email address</label>
        	          <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
        	        </div>
        	        <div class="form-group">
        	          <label for="exampleInputPassword1">Password</label>
        	          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        	        </div>
        	      </div>
        	      <!-- /.box-body -->

        	      <div class="box-footer">
        	        <button type="submit" class="btn btn-primary">Submit</button>
        	      </div>
        	    </form>
        	  </div>
        	  <!-- /.box -->

        	</div>
        	<div class="col-md-6">
        	  <!-- general form elements -->
        	  <div class="box box-primary">
        	    <div class="box-header with-border">
        	      <h3 class="box-title"></h3>
        	    </div>
        	    <!-- /.box-header -->
        	    <!-- form start -->
        	    <form role="form">
        	      <div class="box-body">
        	        <div class="form-group">
        	          <label for="exampleInputFile">File input</label>
        	          <input type="file" id="exampleInputFile">

        	          
        	        </div>
        	        <div class="form-group">
        	        	<label for="selectAcctType">Account type</label>
        	        	<select class="form-control" id="selectAcctType">
        	        	  <option>Admin</option>
        	        	  <option>Moderator</option>
        	        	  <option>Alumni</option>
        	        	  <option>Student</option>
        	        	</select>
        	        </div>
        	      </div>
        	      <!-- /.box-body -->

        	      <div class="box-footer">
        	        <button type="submit" class="btn btn-primary">Submit</button>
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


