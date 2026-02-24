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
                                Edit CSR
                            </div>
                            <br>
                           
            <div class="card-body">
                
            <?php $this->load->view('templates/messages'); ?>

            <?php echo form_open_multipart(base_url('csr/edit/'.$csr['id']), 'class="form-horizontal"');  ?> 
              <div class="form-group">
                <label for="title" class="col-md-2">Title</label>

                <div class="col-md-12">
                  <input type="text" name="title" value="<?php echo $csr['title'] ?>" class="form-control" id="title" placeholder="Title">
                </div>
              </div>
              
              <div class="form-group">
                <label for="year" class="col-md-2">Year</label>

                <div class="col-md-12">
                  <input type="text" name="year" value="<?php echo $csr['date'] ?>" class="form-control" id="date" placeholder="Year">
                </div>
              </div>
              
              <div class="form-group">
                <label for="description" class="col-md-2">Description</label>

                <div class="col-md-12">
                  <textarea name="description" class="form-control" id="description" placeholder="Description"><?php echo $csr['description'] ?></textarea>
                </div>
              </div>
              
              <div class="form-group">
                <label for="date" class="col-md-2">Publisher</label>

                <div class="col-md-12">
                  <input type="file" id="file" class="form-control" name="file">
                  <div class="alert-info" role="alert">
                    Best Resolution 800 * 600
                  </div>
                </div>
              </div>
              
              <div class="form-group">
                  <label for="date" class="col-md-2">Previous Image</label>
                  
                <div class="col-md-12">
                  <img src="<?php echo $this->config->item("assets_url")."assets/csr/".$csr['img']; ?>" width="20%">
                </div>
                <input type="hidden" name="prev" value="<?php echo $csr['img']?>">
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
