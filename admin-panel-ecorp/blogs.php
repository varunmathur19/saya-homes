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
        $query = mysqli_query($link, "UPDATE `blogs` SET `status`='$status' WHERE `id`='$id'") or die('Status Update Query Not Run');
        if ($query) {
            echo "<script>window.location.href='blogs.php';</script>";
        }
    } else if ($type == 'trash') {
        $filename=$_GET['filename'];
        @unlink('../uploads/blog-image/'.$filename);
        $query = mysqli_query($link, "DELETE FROM `blogs` WHERE `id`='$id'") or die('Delete Query Not Run');
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
                    <h2>Blogs</h2>
                </div>
            </div>
        </div>
        <!-- row -->
        <div class="row column1">
            <div class="col-md-12">
                <div class="white_shd full margin_bottom_30">
                    <div class="full graph_head">
                        <a href="add-blogs.php" class="btn btn-success btn-xs">Add Blogs</a>
                    </div>
                    <div class="full price_table padding_infor_info">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="table-responsive-sm">
                                    <table id="subct" class="table table-striped projects">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th style="width: 2%">No</th>
                                                <th>Blogs Image</th>
                                                <th>Blogs Name</th>
                                                <th>Blogs By</th>
                                                <th>Blogs Date</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $data = mysqli_query($link, "SELECT * FROM `blogs` ORDER BY `id` DESC");
                                            $check = mysqli_num_rows($data);
                                            $i = 1;
                                            if ($check > 0) {
                                                while ($rows = mysqli_fetch_assoc($data)) {
                                            ?>
                                                    <tr>
                                                        <td><?= $i++; ?></td>
                                                        <td>
                                                            <img src="../uploads/blog-images/<?= $rows['image'] ?>" class="rounded-circle" style="object-fit:cover" alt="Saya Homes" width="50" height="50">
                                                        </td>
                                                        <td><?= $rows['heading'] ?></td>
                                                        <td><?= $rows['byteam'] ?></td>
                                                        <td><?= $rows['date'] ?></td>
                                                        <td>
                                                            <ul class="list-inline d-flex justify-content-end">

                                                                <?php
                                                                if ($rows['status'] == 1) {
                                                                ?>
                                                                    <li><a href="?type=status&operation=inactive&id=<?= $rows['id'] ?>" class="btn btn-success btn-xs">Active</a></li>
                                                                <?php
                                                                } else {
                                                                ?>
                                                                    <li><a href="?type=status&operation=active&id=<?= $rows['id'] ?>" class="btn btn-warning btn-xs">Deactive</a></li>
                                                                <?php
                                                                }
                                                                ?>
                                                                <li><a href="add-blogs.php?id=<?= $rows['id'] ?>" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i></a></li>
                                                                <li class=""><a href="?type=trash&id=<?= $rows['id'] ?>&filename=<?= $rows['image'] ?>" onclick="return confirm ('Are you Sure you want to delete this row!')" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a></li>
                                                            </ul>
                                                        </td>
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