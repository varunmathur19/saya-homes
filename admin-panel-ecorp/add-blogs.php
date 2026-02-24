<?php require_once 'header.php';

require_once 'sidebar.php';



if (isset($_GET['id']) != '') {
    $p_id = $_GET['id'];
    $result = mysqli_query($link, "SELECT * FROM `blogs` WHERE `id`='$p_id'");
    $check = mysqli_num_rows($result);
    $row = mysqli_fetch_array($result);
}



?>

<div class="midde_cont">

    <div class="container-fluid">

        <div class="row column_title">

            <div class="col-md-12">

                <div class="page_title">

                    <h2>
                        <?= (!empty($ov_id)) ? 'Edit' : 'Add' ?> Blogs
                    </h2>

                </div>

            </div>

        </div>



        <div class="row column1">

            <div class="col-md-12">

                <div class="white_shd full margin_bottom_30">

                    <div class="full graph_head">
                        <a href="blogs.php" class="btn btn-primary btn-xs float-right">Back</a>
                    </div>

                    <div class="full price_table padding_infor_info">

                        <span class="status text-danger"></span>

                        <form method="POST" id="add_blogs" enctype="multipart/form-data">

                            <div class="form-row ">

                                <div class="col-md-6 form-group">

                                    <label class="label_field">Meta Title</label>

                                    <input type="text" name="meta_title" id="meta_title" class="form-control" value="<?= (!empty($row['meta_title'])) ? $row['meta_title'] : '' ?>" />

                                </div>

                                <div class="col-md-6 form-group">
                                    <label class="label_field">Meta Keyword</label>
                                    <input type="text" name="meta_key" id="meta_key" class="form-control" value="<?= (!empty($row['meta_key'])) ? $row['meta_key'] : '' ?>" />
                                </div>

                                <div class="col-md-12 form-group">
                                    <label class="label_field">Meta Description</label>
                                    <textarea name="meta_desc" id="meta_desc" class="form-control" rows="5"> <?= (!empty($row['meta_desc'])) ? $row['meta_desc'] : '' ?></textarea>
                                </div>



                                <div class="col-md-12 form-group">

                                    <label class="label_field">Blogs Name</label>

                                    <input type="text" type="text" name="blogs_name" id="blogs_name" class="form-control" value="<?= (!empty($row['heading'])) ? $row['heading'] : '' ?>" />

                                </div>

                                <div class="col-md-6 form-group">
                                    <label class="label_field">Blogs Types </label>
                                    <select name="blogstypes" class="form-control" id="blogstypes">
                                        <option value="">choose</option>
                                        <option value="News" <?= (!empty($row['blogstypes']) && $row['blogstypes'] == 'News') ? 'selected' : '' ?>>News</option>
                                        <option value="Blogs" <?= (!empty($row['blogstypes']) && $row['blogstypes'] == 'Blogs') ? 'selected' : 'selected' ?>>Blogs</option>
                                    </select>
                                </div>


                                <div class="col-md-6 form-group">

                                    <label class="label_field">Blogs By </label>

                                    <input type="text" type="text" name="blogs_by" id="blogs_by" class="form-control" value="<?= (!empty($row['byteam'])) ? 'Saya Homes' : 'Saya Homes' ?>" />

                                </div>

                                <div class="col-md-6 form-group">

                                    <label class="label_field">Blogs Date</label>

                                    <input type="date" name="bgdata" id="bgdata" class="form-control" value="<?= (!empty($row['date'])) ? $row['date'] : '' ?>" />

                                </div>

                                <div class="col-md-6 form-group">

                                    <label class="label_field">Blog Link</label>

                                    <input type="text" name="bl_link" id="bl_link" class="form-control" value="<?= (!empty($row['bl_link'])) ? $row['bl_link'] : '' ?>" />

                                </div>

                                <div class="col-md-6 form-group">

                                    <label class="label_field">Blogs Image</label>

                                    <input type="file" name="blogs_image" id="blogs_image" class="form-control" />

                                    <img src="../uploads/blog-images/<?= (!empty($row['image'])) ? $row['image'] : '' ?>" alt="..." class="img-thumbnail <?= (isset($_GET["id"]) && $_GET["id"] != '') ? 'd-block' : 'd-none' ?>" width="120" height="70">

                                </div>

                                <div class="col-md-6 form-group">

                                    <label class="label_field">Image Title</label>

                                    <input type="text" name="image_title" id="image_title" class="form-control" value="<?= (!empty($row['heading'])) ? $row['heading'] : '' ?>" />

                                </div>

                                <div class="col-md-12 form-group">

                                    <label class="label_field">Content</label>

                                    <textarea name="blogcontent" id="blogcontent" class="form-control"> <?= (!empty($row['content'])) ? $row['content'] : '' ?></textarea>

                                </div>



                            </div>



                            <div class="form-group margin_0">

                                <?php if (isset($_GET["id"])) { ?>

                                    <input type="hidden" name="updateblogs" value="yes">

                                    <input type="hidden" name="b_id" value="<?= (isset($_GET["id"]) && $_GET["id"] != '') ? $p_id : '' ?>">

                                <?php } else { ?>

                                    <input type="hidden" name="addblogs" value="yes">

                                <?php } ?>

                                <button class="main_bt" type="submit">Submit</button>

                            </div>

                        </form>

                    </div>

                </div>

            </div>

            <!-- end row -->

        </div>

        <!-- end dashboard inner -->

    </div>
    <!-- <script src="https://cdn.ckeditor.com/4.6.2/standard-all/ckeditor.js"></script> -->

    <script src="assets/ckeditor/ckeditor.js"></script>
    <script src="assets/ckfinder/ckfinder.js"></script>
    <script>
        var editor = CKEDITOR.replace('blogcontent');
        // CKFinder.setupCKEditor(editor);
        // CKEDITOR.editorConfig = function(config) {
        //     config.language = 'es';
        //     config.uiColor = '#F7B42C';
        //     config.height = 600;
        //     config.toolbarCanCollapse = true;
        // };
        // var desc = CKEDITOR.instances.blogcontent.getData();

        // $('#blogstypes').on('click',function(){
        //     alert(desc);
        // })
    </script>
    <!-- <script>
    CKEDITOR.replace('blogcontent', {
      filebrowserUploadUrl: 'ck_upload.php',
      filebrowserUploadMethod: 'form'
    });
  </script> -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <script>
        $('#add_blogs').on('submit', function(event) {

            event.preventDefault();
            for (instance in CKEDITOR.instances) {
                CKEDITOR.instances[instance].updateElement();
            }
            var data = new FormData(this);

            $.ajax({

                url: "blogs-queries.php",

                type: "POST",

                data: data,

                contentType: false,

                cache: false,

                processData: false,

                beforeSend: function() {

                    $(".status").html("Processing...");

                },



                success: function(data) {

                    $(".status").html(data);

                }

            });

        });
    </script>

    <?php require_once 'footer.php' ?>