
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
               <h3 class="card-title">Complex Model Table</h3>
             </div>
             <!-- /.card-header -->
             <div class="card-body table-responsive">
               <!-- TABLE -->
               <form name="filter" method="post" action="{{ route('filtercomplex') }}">
               <table border="0" cellspacing="5" cellpadding="5">
        <tbody><tr>
            <td>Minimum date:</td>
            <td><input type="date" id="from" name="from"></td>
        </tr>
        <tr>
            <td>Maximum date:</td>
            <td><input type="date" id="to" name="to"></td>
        </tr>
        <tr>
            <td><input
            type="hidden"
            className="mf-input"
            id="mf-input-text-13c1826"
            name="_token"
            value="{{ csrf_token() }}"
            /></td>
            <td><input type="submit" id="submit" name="submit" value="Filter" class="btn" style="float:right;"></td>
        </tr>
    </tbody></table>
  </form>
               <table  id=usertable class="table table-striped table-hover" >
                                           <thead>
                                            <tr style="cursor: pointer;">
                                               <th>DateTime</th>
                                               <th>Company Name</th>
                                               <th>Country</th>
                                               <th>Current Year</th>
                                               <th>Altman (Year 1)</th>
                                               <th>Index 05 (Year 1)</th>
                                               <th>Quick Test (Year 1)</th>
                                               <th>Index Bonity (Year 1)</th>
                                               <th>Taffler's Z Score (Year 1)</th>
                                               <th>Binkert's Model</th>
                                               <th>Result (Year 1)</th>
                                               <th>Overiew</th>
                                               <th>Delete</th>
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
                        columns: [0,1,2,3,4,5,6,7,8,9,10]
                    }
                }

            ],


            serverSide: true,

            ajax: {
               url: "{{ url('pro-admin/complextable/data') }}",
               method: 'get',
           },



            columns: [
                { data: 'date', name: 'date' },
                { data: 'company_name', name: 'company_name' },
                { data: 'country', name: 'country' },
                { data: 'current_year', name: '	current_year' },
                { data: 'altman1', name: 'altman1' },
                { data: 'in051', name: 'in051' },
                { data: 'quicktest1', name: 'quicktest1' },
                { data: 'bonity1', name: 'bonity1' },
                { data: 'taffler1', name: 'taffler1' },
                { data: 'binkert', name: 'binkert' },
                { data: 'result1', name: 'result1' },
                { data: 'overview', name: 'overview' },
                { data: 'delete', name: 'delete' },
            ],

            stateSave: true,
            responsive: true,
            autoWidth: false,

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
