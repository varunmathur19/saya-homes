    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="<?php echo base_url();?>/dashboard">Saya Homes</a>
               <?php $this->load->view('templates/setting'); ?>
        </nav>
        <div id="layoutSidenav">
             <?php $this->load->view('templates/sidebar');?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <br><br>
                            
                         <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Add Gallery
                            </div>
                            <br>
                           
            <div class="card-body">
                
            <?php $this->load->view('templates/messages'); ?>

            <?php echo form_open_multipart(base_url('gallery/add/'.$id), 'class="form-horizontal"');  ?> 
              <div class="form-group">
                <label for="title" class="col-md-2">Title</label>
                <div class="col-md-12">
                  <input type="text" name="title" value="<?php echo set_value('title') ?>" class="form-control" id="title" placeholder="Title">
                </div>
              </div>
              
              <div class="form-group">
                <label for="date" class="col-md-2">Image</label>
                <div class="col-md-12">
                  <input type="file" id="file" class="form-control" name="file">
                  <div class="alert-info" role="alert">
                    Best Resolution 340 * 355
                  </div>
                </div>
              </div>
              
              <div class="form-group">
                <div class="col-md-12">
                  <input type="submit" name="submit" value="Submit" class="btn btn-primary pull-right">
                </div>
              </div>
              
            <?php echo form_close( ); ?>
            
                    <table id="na_datatable" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                 <tr>
                            <th style="width:50%">Album</th>
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
                url:"<?php echo base_url() . 'gallery/fetch_gallery'; ?>",  
                type:"POST",
                data: {id: '<?php echo $id?>'}
           }
      });  
 });  
 </script> 

