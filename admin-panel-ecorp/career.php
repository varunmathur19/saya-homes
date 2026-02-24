<?php require_once 'header.php';
require_once 'sidebar.php';

if (isset($_GET['type']) && $_GET['type'] != '') {
    $type = $_GET['type'];
    $id = $_GET['id'];
    $project_type = $_GET['project_type'];

    if ($type == 'status') {
        $operation = $_GET['operation'];
        if ($operation == 'active') {
            $status = '1';
        } else {
            $status = '0';
        }
        $query = mysqli_query($link, "UPDATE `career` SET `status`='$status' WHERE `id`='$id'") or die('Status Update Query Not Run');
        if ($query) {
            echo "<script>window.location.href='blogs.php';</script>";
        }
    } else if ($type == 'trash') {
        $filename=$_GET['filename'];
        @unlink('../uploads/blog-image/'.$filename);
        $query = mysqli_query($link, "DELETE FROM `career` WHERE `id`='$id'") or die('Delete Query Not Run');
        if ($query) {
            echo "<script>window.location.href='blogs.php';</script>";
        }
    }
}

function custom_echo($x, $length)
{
    if (strlen($x) <= $length) {
        echo $x;
    } else {
        $y = substr($x, 0, $length) . '...';
        echo $y;
    }
}
?>
<!-- dashboard inner -->
<div class="midde_cont">
    <div class="container-fluid">
        <div class="row column_title">
            <div class="col-md-12">
                <div class="page_title">
                    <h2>Projects Leads</h2>
                </div>
            </div>
        </div>
        <!-- row -->
        <div class="row column1">
            <div class="col-md-12">
                <div class="white_shd full margin_bottom_30">
                    <div class="full graph_head">
                    </div>
                    <div class="full price_table padding_infor_info">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="table-responsive-sm">
                                    <table id="subct" class="table table-striped projects">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th style="width: 2%">No</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Mobile</th>
                                                <th>Postion</th>
                                                <th>Experience</th>
                                                <th>Description</th>
                                                <th>Resume</th>
                                                <th>Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $data = mysqli_query($link, "SELECT * FROM `career` ORDER BY `id` DESC");
                                            $check = mysqli_num_rows($data);
                                            $i = 1;
                                            if ($check > 0) {
                                                while ($rows = mysqli_fetch_assoc($data)) {
                                            ?>
                                                    <tr>
                                                        <td><?= $i++; ?></td>
                                                        <td><?= $rows['name'] ?></td>
                                                        <td><?= $rows['email'] ?></td>
                                                        <td><?= $rows['mobile'] ?></td>
                                                        <td><?= $rows['postion'] ?></td>
                                                        <td><?= $rows['experience'] ?></td>
                                                        <td><?= $rows['description'] ?></td>
                                                        <td><a href="https://sayahomes.com/uploads/career/<?= $rows['resume'] ?>" target='_blank'>Download</a></td>
                                                        <td><?= $rows['created'] ?></td>
                                                       
                                                    </tr>
                                                <?php
                                                }
                                            } else {
                                                ?>
                                                <tr>
                                                    <td colspan="8">Data not found</td>
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
    <script src="assets/js/datatables/datatables-demo.js"></script>
    <script src="assets/js/datatables/dataTables.bootstrap4.min.css"></script>
    <script src="assets/js/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="assets/js/datatables/jquery.dataTables.min.js"></script>

    <script>
        $('#subct').DataTable();
    </script>
    <?php require_once 'footer.php' ?>