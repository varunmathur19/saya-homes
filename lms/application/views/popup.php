      <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="<?php echo base_url();?>/dashboard">SayaHomes</a>
          
          <?php include("templates/setting.php");?>
        </nav>
        <div id="layoutSidenav">
            <?php include("templates/sidebar.php");?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <br><br>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Enquire Popup Form
                            
                            </div>
                            <br>
                        <form action="<?php echo base_url();?>Popup_enquiry/export" method="POST">
                         <div class="col-md-3">  
                         <input type="text" name="from_date" id="from_date" class="form-control" placeholder="From Date" />  
                    </div>  
                    <div class="col-md-3">  
                         <input type="text" name="to_date" id="to_date" class="form-control" placeholder="To Date" />  
                    </div>  
                    <div class="col-md-5">  
                         <a class="nav-link export_Btn" href="<?php echo base_url();?>popup_enquiry/export"><button type="submit">Export</button>
                                 </a>
                    </div>  
                    <div style="clear:both"></div>                 
                    <br />  
                    </form>
                            
                            <div class="card-body">
                                <table id="na_datatable" class="table table-striped table-bordered table-responsive">
                                    <thead>
                                        <tr>
                                           <th>Name</th>
                                            <th>Email</th>
                                            <th>Mobile	</th>
           <!--                                 <th>City</th>-->
											<!--<th>Country</th>-->
											<th>Type</th>
											<th>Message</th>
											<th>UTM Source</th>
											<th>UTM Medium</th>
											<th>UTM Campaign</th>
											<th>UTM Content</th>
											<th>UTM Term</th>
                                            <th>Created_at</th>
                                        </tr>
                                    </thead>
                                    
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
   <script type="text/javascript" language="javascript" >
$( function() {
    $('#to_date').datepicker({
      dateFormat: 'yy-mm-dd'
});
 $('#from_date').datepicker({
      dateFormat: 'yy-mm-dd'
});

     
  });
 $(document).ready(function(){  
      var dataTable = $('#na_datatable').DataTable({  
           "processing":true,  
           "serverSide":true,  
           "order":[],  
           "ajax":{  
                url:"<?php echo base_url() . 'Popup_enquiry/fetch_user'; ?>",  
                type:"POST"  
           },  
           "columnDefs":[  
                {  
                     "targets":[0, 3, 4],  
                     "orderable":false,  
                },  
           ],  
      });  
 });  
 </script>              
                
               