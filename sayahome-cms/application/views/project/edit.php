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
                        <br><br>
                            
                         <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Edit Project
                            </div>
                            <br>
                           
            <div class="card-body">
                
            <?php $this->load->view('templates/messages'); ?>

            <?php echo form_open_multipart(base_url('project/edit/'.$project['id']), 'class="form-horizontal"');  ?> 
              <div class="form-group">
                <label for="title" class="col-md-2">Title</label>

                <div class="col-md-12">
                  <input type="text" name="title" value="<?php echo ($post == 1) ? set_value('title') : $project['project'] ?>" class="form-control" id="title" placeholder="Title">
                </div>
              </div>
              
              <div class="form-group">
                <label for="title" class="col-md-2">Type</label>

                <div class="col-md-12">
                  <select class="form-control" name="type">
                      <option value="Residential"<?php if($project['type'] == 'Residential') echo 'selected'; ?>>Residential</option>
                      <option value="Commercial" <?php if($project['type'] == 'Commercial') echo 'selected'; ?>>Commercial</option>
                  </select>
                </div>
              </div>
              
              <div class="form-group">
                <label for="location" class="col-md-2">Location</label>

                <div class="col-md-12">
                  <input type="text" name="location" value="<?php echo ($post == 1) ? set_value('location') : $project['location'] ?>" class="form-control" id="location" placeholder="location">
                </div>
              </div>
              
              <div class="form-group">
                <label for="typology" class="col-md-2">Typology</label>

                <div class="col-md-12">
                  <input type="text" name="typology" value="<?php echo ($post == 1) ? set_value('typology') : $project['typology'] ?>" class="form-control" id="typology" placeholder="typology">
                </div>
              </div>
              
              <div class="form-group">
                <label for="description" class="col-md-2">Description</label>

                <div class="col-md-12">
                  <textarea name="description" rows="5" class="form-control" id="description" placeholder="Link"><?php echo ($post == 1) ? set_value('description') : $project['description'] ?></textarea>
                </div>
              </div>
              
              
              
              <div class="form-group">
                <label for="date" class="col-md-2">Profile</label>

                <div class="col-md-12">
                  <input type="file" id="file" class="form-control" name="file">
                  <div class="alert-info" role="alert">
                    Best Resolution 530 * 340
                  </div>
                </div>
              </div>
              
              <div class="form-group">
                  <label for="date" class="col-md-2">Previous Image</label>
                  
                <div class="col-md-12">
                  <img src="../../../assets/project/<?php echo $project['media']?>" width="20%">
                </div>
                <input type="hidden" name="prev" value="<?php echo $project['media']?>">
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
