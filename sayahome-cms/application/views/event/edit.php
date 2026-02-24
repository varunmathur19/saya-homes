<?php

$post = 0; 

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $post = 1;
}

?>   
   
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
                        <br>
                        <div class="text-right mb-4">
                                <a href="<?php echo base_url('gallery/add/'.$event['id']) ?>" class="btn btn-success">
                                        <span class="glyphicon glyphicon-plus-sign"></span> Add Gallery 
                                </a>
                            </div>
                            
                         <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Edit Event
                            </div>
                            <br>
                           
            <div class="card-body">
                
            <?php $this->load->view('templates/messages'); ?>

            <?php echo form_open_multipart(base_url('event/edit/'.$event['id']), 'class="form-horizontal"');  ?> 
              <div class="form-group">
                <label for="title" class="col-md-2">Title</label>

                <div class="col-md-12">
                  <input type="text" name="title" value="<?php echo ($post == 1) ? set_value('title') : $event['name'] ?>" class="form-control" id="title" placeholder="Title">
                </div>
              </div>
              
              
              
              
              
              <div class="form-group">
                <label for="date" class="col-md-2">Cover Image</label>

                <div class="col-md-12">
                  <input type="file" id="file" class="form-control" name="file">
                  <div class="alert-info" role="alert">
                    Best Resolution 340 * 355
                  </div>
                </div>
              </div>
              
              <div class="form-group">
                  <label for="date" class="col-md-2">Previous Image</label>
                  
                <div class="col-md-12">
                  <img src="../../../assets/events/<?php echo $event['id'].'/'.$event['media']?>" width="20%">
                </div>
                <input type="hidden" name="prev" value="<?php echo $event['media']?>">
              </div>
              
              <div class="form-group">
                <div class="col-md-12">
                  <input type="submit" name="submit" value="Submit" class="btn btn-primary pull-right">
                </div>
              </div>
              
            <?php echo form_close( ); ?>
            
            
            
            
                        </div>
                        </div>
                    </div>
        </main>
        
        