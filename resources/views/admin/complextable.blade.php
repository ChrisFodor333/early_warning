
@include('admin/header')
@include('admin/navigation')
<!-- Content Wrapper. Contains page content -->



    <style>
        .btn {
          background-color: #007bff;
          color: white;
          margin-bottom: 20px;
        }

    </style>


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

   <!-- Main content -->
   <section class="content">
     <div class="container-fluid">
       <div class="row">
         <div class="col-12">
           <div class="card">
             <div class="card-header">
               <h3 class="card-title">Basic Model Table</h3>
             </div>
             <!-- /.card-header -->
             <div class="card-body">
               <!-- TABLE -->
               <table  id=usertable class="table table-striped table-hover" style="font-size: 10px;">
                                           <thead>
                                            <tr style="cursor: pointer;">
                                               <th>Number</th>
                                               <th>Company Name</th>
                                               <th>Current Year</th>
                                               <th>Altman (Year 1)</th>
                                               <th>Altman (Year 2)</th>
                                               <th>Altman (Year 3)</th>
                                               <th>Index 05 (Year 1)</th>
                                               <th>Index 05 (Year 2)</th>
                                               <th>Index 05 (Year 3)</th>
                                               <th>Quick Test (Year 1)</th>
                                               <th>Quick Test (Year 2)</th>
                                               <th>Quick Test (Year 3)</th>
                                               <th>Index Bonity (Year 1)</th>
                                               <th>Index Bonity (Year 2)</th>
                                               <th>Index Bonity (Year 3)</th>
                                               <th>Taffler's Z Score (Year 1)</th>
                                               <th>Taffler's Z Score (Year 2)</th>
                                               <th>Taffler's Z Score (Year 3)</th>
                                               <th>Binkert's Model</th>
                                               <th>Result (Year 1)</th>
                                               <th>Result (Year 2)</th>
                                               <th>Result (Year 3)</th>
                                           </tr>
                                           </thead>
                                           <tbody>

                                           </tbody>
                                       </table>
             </div>
             <!-- /.card-body -->
           </div>
           <!-- /.card -->


           <!-- /.card -->
         </div>
         <!-- /.col -->
       </div>
       <!-- /.row -->
     </div>
     <!-- /.container-fluid -->
   </section>
   <!-- /.content -->
 </div>
 <!-- /.content-wrapper -->
 @include('admin/footer')
<script>
    $(function() {
        $.fn.dataTable.Buttons.defaults.dom.button.className = 'btn';
        $('#usertable').DataTable({

            dom: 'Blfrtip',
            lengthMenu: [[10, 25, 50,100,200,300,400], [10, 25, 50,100,200,300,400]],
            buttons: [
                { extend: 'excel', text: 'Export to Excel',
                    exportOptions: {
                        columns: [0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21]
                    }
                }

            ],


            serverSide: true,
            ajax: '{{ url('pro-admin/complextable/data') }}',
            columns: [
                { data: 'id_complex', name: 'id_complex' },
                { data: 'company_name', name: 'company_name' },
                { data: 'current_year', name: '	current_year' },
                { data: 'altman1', name: 'altman1' },
                { data: 'altman2', name: 'altman2' },
                { data: 'altman3', name: 'altman3' },
                { data: 'in051', name: 'in051' },
                { data: 'in052', name: 'in052' },
                { data: 'in053', name: 'in053' },
                { data: 'quicktest1', name: 'quicktest1' },
                { data: 'quicktest2', name: 'quicktest2' },
                { data: 'quicktest3', name: 'quicktest3' },
                { data: 'bonity1', name: 'bonity1' },
                { data: 'bonity2', name: 'bonity2' },
                { data: 'bonity3', name: 'bonity3' },
                { data: 'taffler1', name: 'taffler1' },
                { data: 'taffler2', name: 'taffler2' },
                { data: 'taffler3', name: 'taffler3' },
                { data: 'binkert', name: 'binkert' },
                { data: 'result1', name: 'result1' },
                { data: 'result2', name: 'result2' },
                { data: 'result3', name: 'result3' },
            ],

            stateSave: true,

            language: {
                search: "Search:",
                info:"Showing _END_ of _TOTAL_ records",
                lengthMenu:     "Show Records: _MENU_",
                infoEmpty:      "Showing 0 from 0 records",
                infoFiltered:   "(filtered from _MAX_ total records)",
                zeroRecords:    "No records have been found",
                paginate: {
                    next:       "Next",
                    previous:   "Previous",
                }
            }

        });

    });

</script>
</body>
</html>
