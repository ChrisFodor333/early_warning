
@include('admin/header')
@include('admin/navigation')
<!-- Content Wrapper. Contains page content -->
<style type="text/css" media="print">
        header
        {
            display: none;
        }
        footer {
           display: none;
        }

        input {
          display: none;
        }
        head {
          display:none;
        }
        .bottom {
          display: none;
        }
        .container {
          display: none;
        }
    </style>


    <style>
    input[type=image] {
      width: 70px;
      height: 70px;
    }
    </style>


 <div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <div class="content-header">
     <div class="container-fluid">
       <div class="row mb-2">
         <div class="col-sm-6">
           <h1 class="m-0">Basic Model Charts</h1>
         </div><!-- /.col -->
         <div class="col-sm-6">
           <div style="float:right;">
           <input type="image" value="PRINT"  src="/early_warning/assets/content/printwhite.png"
           onmouseover="this.src='/early_warning/assets/content/print.png';"
           onmouseout="this.src='/early_warning/assets/content/printwhite.png';;"
           onclick="window.print();">
           </div>
         </div><!-- /.col -->
       </div><!-- /.row -->
     </div><!-- /.container-fluid -->
   </div>

   <!-- Main content -->
   <section class="content">
     <div class="container-fluid">
       <div class="row">
         <div class="col-3">
           <div class="card">
             <div class="card-header">
             </div>
             <!-- /.card-header -->
             <div class="card-body">
               <!-- TABLE -->
               <div id="are_div"></div>
                <?= Lava::render('ColumnChart', 'Basic Model Results', 'are_div') ?>
             </div>
             <!-- /.card-body -->
           </div>
           <!-- /.card -->
           <!-- /.card -->
         </div>
         <div class="col-9">
           <div class="card">
             <div class="card-header">
             </div>
             <!-- /.card-header -->
             <div class="card-body">
               <div id="second_div"></div>
                <?= Lava::render('ColumnChart', 'Basic Model Results 2', 'second_div') ?>
             </div>
             <!-- /.card-body -->
           </div>
         </div>
         <!-- /.col -->
       </div>
       <div class="row">
         <div class="col-6">
           <div class="card">
             <div class="card-header">
             </div>
             <!-- /.card-header -->
             <div class="card-body">
               <!-- TABLE -->
               <div id="don_div"></div>
                <?= Lava::render('DonutChart', 'Basic Model Results in %', 'don_div') ?>
             </div>
             <!-- /.card-body -->
           </div>
           <!-- /.card -->
           <!-- /.card -->
         </div>
         <div class="col-6">
           <div class="card">
             <div class="card-header">
             </div>
             <!-- /.card-header -->
             <div class="card-body">
               <!-- TABLE -->
               <div id="don2_div"></div>
                <?= Lava::render('DonutChart', 'Basic Model Results in % (advanced)', 'don2_div') ?>
             </div>
             <!-- /.card-body -->
           </div>
           <!-- /.card -->
           <!-- /.card -->
         </div>

       <!-- /.row -->
     </div>


     <div class="content-header" style="margin-left: -15px;">
       <div class="container-fluid">
         <div class="row mb-2">
           <div class="col-sm-6">
             <h1 class="m-0">Complex Model Charts</h1>
           </div><!-- /.col -->
           <div class="col-sm-6">

           </div><!-- /.col -->
         </div><!-- /.row -->
       </div><!-- /.container-fluid -->
     </div>


     <div class="row">
       <div class="col-3">
         <div class="card">
           <div class="card-header">
           </div>
           <!-- /.card-header -->
           <div class="card-body">
             <!-- TABLE -->
             <div id="arecomplex_div"></div>
              <?= Lava::render('ColumnChart', 'Complex Model Results', 'arecomplex_div') ?>
           </div>
           <!-- /.card-body -->
         </div>
         <!-- /.card -->
         <!-- /.card -->
       </div>
       <div class="col-9">
         <div class="card">
           <div class="card-header">
           </div>
           <!-- /.card-header -->
           <div class="card-body">
             <div id="secondc_div"></div>
              <?= Lava::render('ColumnChart', 'Complex Model Results 2', 'secondc_div') ?>
           </div>
           <!-- /.card-body -->
         </div>
       </div>
       <!-- /.col -->
     </div>
     <div class="row">
       <div class="col-6">
         <div class="card">
           <div class="card-header">
           </div>
           <!-- /.card-header -->
           <div class="card-body">
             <!-- TABLE -->
             <div id="donc_div"></div>
              <?= Lava::render('DonutChart', 'Complex Model Results in %', 'donc_div') ?>
           </div>
           <!-- /.card-body -->
         </div>
         <!-- /.card -->
         <!-- /.card -->
       </div>
       <div class="col-6">
         <div class="card">
           <div class="card-header">
           </div>
           <!-- /.card-header -->
           <div class="card-body">
             <!-- TABLE -->
             <div id="don2c_div"></div>
              <?= Lava::render('DonutChart', 'Complex Model Results in % (advanced)', 'don2c_div') ?>
           </div>
           <!-- /.card-body -->
         </div>
         <!-- /.card -->
         <!-- /.card -->
       </div>
     <!-- /.col -->
    </div>




     <!-- /.container-fluid -->
   </section>
   <!-- /.content -->
 </div>
 <!-- /.content-wrapper -->
 @include('admin/footer')

</body>
</html>
