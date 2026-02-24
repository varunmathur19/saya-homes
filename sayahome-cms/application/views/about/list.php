    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="<?php echo base_url();?>/dashboard">Central Park</a>
               <?php $this->load->view('templates/setting'); ?>
        </nav>
        <div id="layoutSidenav">
             <?php $this->load->view('templates/sidebar');?>
            <div id="layoutSidenav_content">
                <main>
                    
                    <div class="container-fluid px-4">
                        <br><br>
                         <?php $this->load->view('templates/messages'); ?>
                         <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Vision/Mission
                            </div>
                            <br>
                           
                        <div class="card-body">
                                <table id="na_datatable" class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                     <tr>
                                        <th>Title</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                </table>
                        </div>
                        </div>
                    </div>
                </main>

<script type="text/javascript" language="javascript" >

 $(document).ready(function(){  
      var dataTable = $('#na_datatable').DataTable({  
           "processing":true,  
           "serverSide":true,  
           "order":[],  
           "ajax":{  
                url:"<?php echo base_url() . 'about/fetch_about'; ?>",  
                type:"POST"  
           }
      });  
 });  
 </script> 