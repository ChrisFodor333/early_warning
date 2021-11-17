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
              <h5>Upload a .csv file of companies exported from FinStat and click submit to start the process</h5>
            <div class="row">
                <div class="col-md-3">
                    <div class="box box-default">
                        <div class="box-header with-border">

                        </div>
                        <div class="box-body">
                            <form method="post" action="{{  action('App\\Http\\Controllers\RegisterController@sendrobot')}}" enctype="multipart/form-data">



                                <div class="input-group mb-3" >

                                  <input type="file" class="form-control" name="file" style="height: 45px;" accept=".csv">
                                  <div class="input-group-append">
                                    <div class="input-group-text">
                                      <span class="fas fa-file-csv"></span>
                                    </div>
                                  </div>
                                </div>



                                <div class="box-footer">
                                    <button type="submit" name="submit" value="submit" class="btn btn-default">Start</button>
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <br />   <br />
                                    <h5 class="text-red">
                                        {{ $errors->first('file') }}
                                    </h5>
                                    <h6 class="text-white">
                                        {{ session('status') }}
                                    </h6>
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
