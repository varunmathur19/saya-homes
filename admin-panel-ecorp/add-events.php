<?php require_once 'header.php';
require_once 'sidebar.php';

$name = '';
$imgae = '';


if (isset($_GET['ev_id']) != '') {
    $show_img = 'd-block';
    $p_id = $_GET['ev_id'];
    $result = mysqli_query($link, "SELECT * FROM `events` WHERE `ev_id`='$p_id'");
    $check = mysqli_num_rows($result);
    $rows = mysqli_fetch_array($result);
} 

?>
<div class="midde_cont">
    <div class="container-fluid">
        <div class="row column_title">
            <div class="col-md-12">
                <div class="page_title">
                    <h2><?= (!empty($ov_id)) ? 'Edit' : 'Add' ?> Events</h2>
                </div>
            </div>
        </div>

        <div class="row column1">
            <div class="col-md-12">
                <div class="white_shd full margin_bottom_30">
                    <div class="full graph_head">
                        <a href="events.php" class="btn btn-primary btn-xs float-right">Back</a>
                    </div>
                    <div class="full price_table padding_infor_info">
                        <span class="status text-danger"></span>
                        <form method="POST" id="add_eventsform" enctype="multipart/form-data">
                            <div class="form-row ">
                                <div class="col-md-6 form-group">
                                    <label class="label_field">Meta Title</label>
                                    <input type="text" name="meta_title" id="meta_title" class="form-control" value="<?= (!empty($rows['ev_meta_title'])) ? $rows['ev_meta_title'] : '' ?>" />
                                </div>
                                <div class="col-md-6 form-group">
                                    <label class="label_field">Meta Keyword</label>
                                    <input type="text" name="meta_key" id="meta_key" class="form-control" value="<?= (!empty($rows['ev_meta_key'])) ? $rows['ev_meta_key'] : '' ?>" />
                                </div>
                                <div class="col-md-12 form-group">
                                    <label class="label_field">Meta Description</label>
                                    <textarea name="meta_desc" id="meta_desc" class="form-control" rows="5"> <?= (!empty($rows['ev_meta_desc'])) ? $rows['ev_meta_desc'] : '' ?></textarea>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label class="label_field">Events Name</label>
                                    <input type="text" type="text" name="name" id="name" class="form-control" value="<?= (!empty($rows['ev_title'])) ? $rows['ev_title'] : '' ?>" />
                                </div>
                                <div class="col-md-6 form-group">
                                    <label class="label_field">Events Date</label>
                                    <input type="date" type="text" name="evdate" id="evdate" class="form-control" value="<?= (!empty($rows['ev_date'])) ? $rows['ev_date'] : '' ?>" />
                                </div>
                                <div class="col-md-6 form-group">
                                    <label class="label_field">Events Image</label>
                                    <input type="file" name="image" id="image" class="form-control" />
                                    <img src="../uploads/events/<?= (!empty($rows['ev_image'])) ? $rows['ev_image'] : '' ?>" alt="..." class="img-thumbnail <?= (!empty($p_id)) ? 'd-block' : 'd-none' ?>" width="120" height="70">
                                </div>
                            </div>

                            <div class="form-group margin_0">
                                <input type="hidden" name="addevents" value="yes">
                                <input type="hidden" name="events_id" value="<?= (isset($_GET["ev_id"]) && $_GET["ev_id"] != '') ? $p_id : '' ?>">
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
    <script>
        $('#add_eventsform').on('submit', function(event) {
            event.preventDefault();
            var data = new FormData(this);
            var ckeditor = $('#editor1').val();
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