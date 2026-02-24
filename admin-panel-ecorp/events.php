<?php require_once 'header.php';
require_once 'sidebar.php';

if (isset($_GET['type']) && $_GET['type'] != '') {
    $type = $_GET['type'];
    $id = $_GET['ev_id'];
    $project_type = $_GET['project_type'];

    if ($type == 'status') {
        $operation = $_GET['operation'];
        if ($operation == 'active') {
            $status = '1';
        } else {
            $status = '0';
        }
        $query = mysqli_query($link, "UPDATE `events` SET `status`='$status' WHERE `ev_id`='$id'") or die('Status Update Query Not Run');
        if ($query) {
            echo "<script>window.location.href='events.php';</script>";
        }
    } else if ($type == 'trash') {
        $query = mysqli_query($link, "DELETE FROM `events` WHERE `ev_id`='$id'") or die('Delete Query Not Run');
        if ($query) {
            echo "<script>window.location.href='events.php';</script>";
        }
    }
}
?>
<!-- dashboard inner -->
<div class="midde_cont">
    <div class="container-fluid">
        <div class="row column_title">
            <div class="col-md-12">
                <div class="page_title">
                    <h2>Events</h2>
                </div>
            </div>
        </div>
        <!-- row -->
        <div class="row column1">
            <div class="col-md-12">
                <div class="white_shd full margin_bottom_30">
                    <div class="full graph_head">
                        <a href="add-events.php" class="btn btn-success btn-xs">Add Events</a>
                    </div>
                    <div class="full price_table padding_infor_info">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="table-responsive-sm">
                                    <table id="pjdataTable" class="table table-striped projects">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th>No</th>
                                                <th>Events Image</th>
                                                <th>Events Name</th>
                                                <th>Add Events Gallery</th>
                                                <th>Events Gallery</th>
                                                <th>Events Date</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $data = mysqli_query($link, "SELECT * FROM `events`  ORDER BY `ev_id` DESC");
                                            $check = mysqli_num_rows($data);
                                            $i = 1;
                                            if ($check > 0) {
                                                while ($rows = mysqli_fetch_assoc($data)) {
                                            ?>
                                                    <tr>
                                                        <td><?= $i++; ?></td>
                                                        <td>
                                                            <img src="../uploads/events/<?= $rows['ev_image'] ?>" class="rounded-circle" style="object-fit:cover" alt="Saya Homes" width="50" height="50">
                                                        </td>
                                                        <td><?= $rows['ev_title'] ?></td>
                                                        <td><a href="#morgallform" data-toggle="modal" data-eventsid="<?= $rows['ev_id'] ?>" class="btn btn-info btn-xs">Add Gallery</a></td>
                                                        <td><a href="events-gallery.php?ev_id=<?= $rows['ev_id'] ?>" class="btn btn-success btn-xs">View Gallery</a></td>
                                                        <td><?= $rows['ev_date'] ?></td>
                                                        <td>
                                                            <ul class="list-inline d-flex justify-content-end">

                                                                <?php
                                                                if ($rows['ev_status'] == 1) {
                                                                ?>
                                                                    <li><a href="?type=status&operation=inactive&id=<?= $rows['ev_id'] ?>" class="btn btn-success btn-xs">Active</a></li>
                                                                <?php
                                                                } else {
                                                                ?>
                                                                    <li><a href="?type=status&operation=active&id=<?= $rows['ev_id'] ?>" class="btn btn-warning btn-xs">Deactive</a></li>
                                                                <?php
                                                                }
                                                                ?>
                                                                <li><a href="add-events.php?ev_id=<?= $rows['ev_id'] ?>" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i></a></li>
                                                                <li><a href="?type=trash&ev_id=<?= $rows['ev_id'] ?>" onclick="return confirm ('Are you Sure you want to delete this row!')" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a></li>
                                                            </ul>
                                                        </td>
                                                    </tr>
                                                <?php
                                                }
                                            } else {
                                                ?>
                                                <tr>
                                                    <td colspan="5">Data not found</td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end dashboard inner -->
    </div>


    <div class="modal fade" id="morgallform" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-dark" id="exampleModalLabel">Add Gallery Images</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <span class="status text-danger"></span>
                    <form method="post" id="galleryform" name="galleryForm" enctype="multipart/form-data">
                        <div class="form-group">
                            <input type="file" multiple name="galleryImages[]" id="galleryImages" class="form-control border border-dark text-dark" style="padding: 0.19rem .2rem;" />
                        </div>
                        <div class="form-group mb-0">
                            <input type="hidden" name="multipleimage" value="active">
                            <input type="hidden" name="event_id" id="event_id" value="">
                            <input type="submit" name="gallerySubmit" class="btn-sm btn-info main_bt" value="Submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        $('#morgallform').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget);
            var recipient = button.data('eventsid');
            var modal = $(this);
            modal.find('#event_id').val(recipient);
        });


        // Multiple Events ../uploads


        $('#galleryform').on('submit', function(event) {
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
        <!-- Page level plugins-->
        <script src="assets/js/datatables/jquery.dataTables.min.js"></script>
    <script src="assets/js/datatables/dataTables.bootstrap4.min.js"></script>
    <!-- Page level custom scripts -->
    <script src="assets/js/datatables/datatables-demo.js"></script>

    <script>
        // DataTables initialisation
        var table = $('#pjdataTable').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copyHtml5',
                'excelHtml5',
                'csvHtml5',
                'pdfHtml5'
            ]
        });
    </script>
    <?php require_once 'footer.php' ?>
