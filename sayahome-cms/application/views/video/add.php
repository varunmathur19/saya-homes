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
                            
                         <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Add Video
                            </div>
                            <br>
                           
            <div class="card-body">
                
            <?php $this->load->view('templates/messages'); ?>

            <?php echo form_open(base_url('video/add'), 'class="form-horizontal"');  ?> 
            
            <div class="form-group">
                <label for="title" class="col-md-2">Title</label>

                <div class="col-md-12">
                  <input type="text" name="title" value="<?php echo set_value('title') ?>" class="form-control" id="title" placeholder="Title">
                </div>
              </div>
              
              <div class="form-group">
                <label for="description" class="col-md-2">Description</label>

                <div class="col-md-12">
                  <textarea name="description" class="form-control" id="description" placeholder="Description"><?php echo set_value('description') ?></textarea>
                </div>
              </div>
              
              <div class="form-group">
                <label for="title" class="col-md-2">Year</label>

                <div class="col-md-12">
                  <input type="text" name="year" value="<?php echo set_value('year') ?>" class="form-control hasDatepicker" id="year" placeholder="Year">
                </div>
              </div>
            
              <div class="form-group">
                <label for="title" class="col-md-2">Video Link</label>

                <div class="col-md-12">
                  <input type="text" name="link" value="<?php echo set_value('link') ?>" class="form-control" id="link" placeholder="https://www.youtube.com/embed/XXXXXXX">
                </div>
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
