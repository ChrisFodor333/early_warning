
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
               <h3 class="card-title">Admin's Table</h3>
             </div>
             <!-- /.card-header -->
             <div class="card-body">
               <!-- TABLE -->
               <table  id=usertable class="table table-striped table-hover">
                                           <thead>
                                           <tr>
                                               <th>ID</th>
                                               <th>Name</th>
                                               <th>Email</th>
                                               <th>Edit</th>
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
                        columns: [0,1,2]
                    }
                },
                { extend: 'pdf', text: 'Export to PDF',
                    exportOptions: {
                        columns: [0,1,2]
                    }
                }
            ],


            serverSide: true,
            ajax: '{{ url('pro-admin/users/data') }}',
            columns: [
                { data: 'id_user', name: 'id_user' },
                { data: 'username', name: 'first_name' },
                { data: 'email', name: 'email' },
                { data: 'edit'},
                { data: 'delete' },


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
