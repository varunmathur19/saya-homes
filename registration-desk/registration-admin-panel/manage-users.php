<?php require_once 'header.php';
require_once 'sidebar.php';

// Status update
if (isset($_GET['type']) && $_GET['type'] != '') {
    $type = $_GET['type'];
    $id = $_GET['id'];
    if ($type == 'status') {
        $operation = $_GET['operation'];
        if ($operation == 'active') {
            $status = '1';
        } else {
            $status = '0';
        }
        $query = mysqli_query($link, "UPDATE `admin_login` SET `status`='$status' WHERE `id`='$id'") or die('Status Update Query Not Run');
        if ($query) {
            echo "<script>window.location.href='manage-users.php';</script>";
        }
    } else if ($type == 'trash') {
        $query = mysqli_query($link, "DELETE FROM `admin_login` WHERE `id`='$id'") or die('Delete Query Not Run');
        if ($query) {
            echo "<script>window.location.href='manage-users.php';</script>";
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
                    <h2>Manage Users</h2>
                </div>
            </div>
        </div>
        <!-- row -->
        <div class="row column1">
            <div class="col-md-12">
                <div class="white_shd full margin_bottom_30">
                    <div class="full graph_head">
                        <a href="add-users.php" class="btn btn-success btn-xs">Add User</a>
                    </div>
                    <div class="full price_table padding_infor_info">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="table-responsive-sm">
                                    <table id="subct" class="table table-striped projects">
                                        <thead>
                                            <tr>
                                                <th>S. No.</th>
                                                <th>Name</th>
                                                <th>User Type</th>
                                                <th>Project</th>
                                                <th>Last Login</th>
                                                <th>Created</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $i = 1;
                                            $query = mysqli_query($link, "SELECT * FROM `admin_login` ORDER BY `id` DESC");
                                            while ($rowman = mysqli_fetch_assoc($query)) {
                                            ?>
                                                <tr>
                                                    <td><?= $i++ ?></td>
                                                    <td><?= $rowman['name'] ?></td>
                                                    <td><?= $rowman['user_type'] ?></td>
                                                    <td><?= $rowman['project'] ?></td>
                                                    <td><?= $rowman['last_login'] ?></td>
                                                    <td><?= date('F j, Y', strtotime($rowman['created'])) ?></td>
                                                    <td>
                                                        <ul class="list-inline d-flex justify-content-end">
                                                            <?php
                                                            if ($rowman['status'] == 1) {
                                                            ?>
                                                                <li><a href="?type=status&operation=inactive&id=<?= $rowman['id'] ?>" class="btn btn-success btn-xs">Accepted</a></li>
                                                            <?php
                                                            } else {
                                                            ?>
                                                                <li><a href="?type=status&operation=active&id=<?= $rowman['id'] ?>" class="btn btn-warning btn-xs">Rejected</a></li>
                                                            <?php
                                                            }
                                                            ?>
                                                            <li><a href="add-users.php?id=<?= $rowman['id'] ?>" onclick="return confirm('Are you sure! You want to edit info')" class="btn btn-info btn-xs"><i class="fa fa-edit"></i></a></li>
                                                            <li><a href="?type=trash&id=<?= $rowman['id'] ?>" onclick="return confirm('Are you sure! You want to delete')" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a></li>
                                                        </ul>
                                                    </td>
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

    <?php require_once 'footer.php' ?>
</body>

</html>