@include('admin/header')
@include('admin/navigation')



<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Danube Chance 2.0 Financial Tool | Dashboard</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo url('/'); ?>">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <section class="content-header">
      </section>
      <section class="content">
          <div class="row">
              <div class="col-md-6">
                  <div class="box box-default">
                      <div class="box-header with-border">
                          <h3 class="box-title">Add New Admin</h3>
                      </div>
                      <div class="box-body">
                        {{ Form::open(array('url' => '/pro-admin/addadmin', 'files' => true)) }}
                  <div class="box-body">
                      <div class="row">
                          <div class="col-md-4">
                              <div class="form-group">
                                  <label for="first_name">First Name</label>
                                  <input type="text" name="first_name" class="form-control" id="first_name" placeholder="First Name">
                              </div>
                          </div>
                          <div class="col-md-4">
                              <div class="form-group">
                                  <label for="last_name">Last Name</label>
                                  <input type="text" name="last_name" class="form-control" id="last_name" placeholder="Last Name">
                              </div>
                          </div>
                          <div class="col-md-4">
                              <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" class="form-control" id="email" placeholder="Email">
                              </div>
                          </div>

                      </div>

                      <div class="row">
                          <div class="col-md-6">
                              <div class="form-group">
                                  <label for="password">Password</label>
                                  <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="form-group">
                                  <label for="password_confirmation">Confirm Password</label>
                                  <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="Confirm Password">
                              </div>
                          </div>
                      </div>
                      <br />
                      <div class="box-footer">
                          <button type="submit" name="submit" value="submit" class="btn btn-default">Add New Admin</button>
                          <br />
                          <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <br />   <br />
                          <h5 class="text-red">
                              {{ $errors->first('email') }}
                              {{ $errors->first('password') }}
                          </h5>
                      </div>
                  </div>
              {{ Form::close() }}
                      </div>
                  </div>
              </div>
          </div>
      </section>

    </div><!--/. container-fluid -->
  </section>
  <!-- /.content -->
</div>

<script>
$(document).on("keydown", "form", function(event) {
alert(event);
});
</script>
<!-- /.content-wrapper -->

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->

@include('admin/footer')
