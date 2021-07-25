@include('admin/header')
@include('admin/navigation')

  <!-- Content Wrapper. Contains page content -->
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
                <div class="col-md-3">
                    <div class="box box-default">
                        <div class="box-header with-border">
                            <h3 class="box-title">Edit Admin Details</h3>
                        </div>
                        <div class="box-body">
                          <form role="form" method="post" action="{{  action('App\\Http\\Controllers\AdminController@edit_validator', ['id' => $users->id_user])  }}">
                      <div class="box-body">
                          <div class="form-group">
                              <input type="hidden" name="id_user" value="{{ $users->id_user }}">

                              <label for="first_name">First Name:</label>
                              <input type="text" class="form-control" name="first_name" value="{{ $users->first_name }}">
                          </div>
                          <div class="form-group">
                              <label for="last_name">Last Name:</label>
                              <input type="text" class="form-control" name="last_name" value="{{ $users->last_name }}">
                          </div>
                          <div class="form-group">
                              <label for="email">Email:</label>
                              <input type="email" class="form-control" name="email" value="{{ $users->email }}">
                          </div>

                          <input type="hidden" name="_token" value="{{ csrf_token() }}">


                          <div class="box-footer">
                              <button type="submit" class="btn btn-primary" name="submit" value="submit">Edit Admin</button>
                              <button  class="btn btn-info pull-right" onclick="javascript:window.history.go(-1);">Back</button>
                          </div>
                      </div>
                  </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
  @include('admin/footer')
