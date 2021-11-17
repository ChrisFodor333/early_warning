@include('admin/header')
@include('admin/navigation')

<style media="screen">
input[type="month"]::-webkit-calendar-picker-indicator {
    filter: invert(1);
  }
</style>

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
              <h5>Fill out the filter and click start to add data to the model database</h5>
            <div class="row">
                <div class="col-md-3">
                    <div class="box box-default">
                        <div class="box-header with-border">

                        </div>
                        <div class="box-body">
                            <form method="post" action="{{  action('App\\Http\\Controllers\RegisterController@sendrobot')}}" enctype="multipart/form-data">


                                <label>Changed from</label>
                                <div class="input-group mb-3" >
                                  <input type="month" class="form-control" name="date">

                                </div>
                                </div>

                                <label>Maximum Records</label>
                                <div class="input-group mb-3" >
                                  <input type="number" class="form-control" name="maxrecords" min="1" value="1000" max="10000">
                                  <div class="input-group-append">
                                    <div class="input-group-text">
                                      <span class="fas fa-database"></span>
                                    </div>
                                  </div>
                                </div>

                                <label>Current Year</label>
                                <div class="input-group mb-3" >

                                  <select name="currentyear" class="form-control">
                                  <?php foreach($years as $year) : ?>
                                    <option value="<?php echo $year; ?>"><?php echo $year; ?></option>
                                  <?php endforeach; ?>
                                </select>

                                  <div class="input-group-append">
                                    <div class="input-group-text">
                                      <span class="fas fa-calendar-alt"></span>
                                    </div>
                                  </div>
                                </div>

                                <label>City</label>
                                <div class="input-group mb-3" >
                                  <input type="text" class="form-control" name="city" placeholder="Not specified">
                                  <div class="input-group-append">
                                    <div class="input-group-text">
                                      <span class="fas fa-city"></span>
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
