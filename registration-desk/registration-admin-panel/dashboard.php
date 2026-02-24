<?php require_once 'header.php';
require_once 'sidebar.php';
$date = date("Y-m-d"); // time in India
?>
<!-- dashboard inner -->
<div class="midde_cont">
    <div class="container-fluid">
        <div class="row column_title">
            <div class="col-md-12">
                <div class="page_title">
                    <h2><?= ($projectname != "All") ? ucfirst($projectname) : '' ?> Dashboard</h2>
                </div>
            </div>
        </div>
        <div class="row column1">
            <div class="col-md-12">
                <div class="white_shd full margin_bottom_30">
                    <div class="full graph_head">
                        <h3 class="text-info text-capitalize">Total Visitors</h3>
                    </div>
                    <div class="full price_table padding_infor_info">
                        <div class="row">
                            <div class="col-md-6 col-lg-4">
                                <a href="registration-desk-queries.php">
                                    <div class="full counter_section margin_bottom_30">
                                        <div class="couter_icon">
                                            <div>
                                                <i class="fa fa-home blue1_color"></i>
                                            </div>
                                        </div>
                                        <div class="counter_no">
                                            <div>
                                                <?php
                                                $i = 1;
                                                if ($paneluser == 'Admin') {
                                                    $query = mysqli_query($link, "SELECT * FROM `r_desk` ORDER BY `id` DESC");
                                                } else {
                                                    $query = mysqli_query($link, "SELECT * FROM `r_desk` WHERE `projects`='$projectname' ORDER BY `id` DESC");
                                                }
                                                // $query = mysqli_query($link, "SELECT * FROM `r_desk` ORDER BY `id` DESC");
                                                $count = mysqli_num_rows($query);
                                                ?>
                                                <p class="total_no"><?= $count ?></p>
                                                <p class="head_couter">Registered Visitors</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <a href="registration-desk-queries.php">
                                    <div class="full counter_section margin_bottom_30">
                                        <div class="couter_icon">
                                            <div>
                                                <i class="fa fa-home blue1_color"></i>
                                            </div>
                                        </div>
                                        <div class="counter_no">
                                            <div>
                                                <?php
                                                $i = 1;
                                                if ($paneluser == 'Admin') {
                                                    $query = mysqli_query($link, "SELECT * FROM `r_desk` WHERE  `created`  LIKE '%$date%' ORDER BY `id` DESC");
                                                } else {
                                                    $query = mysqli_query($link, "SELECT * FROM `r_desk` WHERE `projects`='$projectname'  AND `created`  LIKE '%$date%' ORDER BY `id` DESC");
                                                }
                                                // $query = mysqli_query($link, "SELECT * FROM `r_desk` ORDER BY `id` DESC");
                                                $count = mysqli_num_rows($query);
                                                ?>
                                                <p class="total_no"><?= $count ?></p>
                                                <p class="head_couter">Today Visitors</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <a href="registration-desk-queries.php">
                                    <div class="full counter_section margin_bottom_30">
                                        <div class="couter_icon">
                                            <div>
                                                <i class="fa fa-home blue1_color"></i>
                                            </div>
                                        </div>
                                        <div class="counter_no">
                                            <div>
                                                <?php
                                                $i = 1;
                                                if ($paneluser == 'Admin') {
                                                    $query = mysqli_query($link, "SELECT * FROM `r_desk` WHERE  week(created)=week(now()) ORDER BY `id` DESC");
                                                } else {
                                                    $query = mysqli_query($link, "SELECT * FROM `r_desk` WHERE `projects`='$projectname' AND week(created)=week(now()) ORDER BY `id` DESC");
                                                }
                                                // $query = mysqli_query($link, "SELECT * FROM `r_desk` ORDER BY `id` DESC");
                                                $count = mysqli_num_rows($query);
                                                ?>
                                                <p class="total_no"><?= $count ?></p>
                                                <p class="head_couter">This Week Visitors</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="white_shd full margin_bottom_30">
                    <div class="full graph_head">
                        <h3 class="text-info text-capitalize">Latest Leads</h3>
                    </div>
                    <div class="full price_table padding_infor_info">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="full graph_head">
                                    <h3 class="text-info text-capitalize">This Week Queries</h3>
                                </div>
                                <div class="table-responsive">
                                    <table id="dataTable" class="table table-striped projects">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th>S. No.</th>
                                                <th>Name</th>
                                                <th>Mobile</th>
                                                <th>Email</th>
                                                <th>Project</th>
                                                <th>Source</th>
                                                <th>Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $i = 1;
                                            if ($paneluser == 'Admin') {
                                                $query = mysqli_query($link, "SELECT * FROM `r_desk`WHERE week(created)=week(now()) ORDER BY `id` DESC");
                                            } else {
                                                $query = mysqli_query($link, "SELECT * FROM `r_desk` WHERE `projects`='$projectname' AND week(created)=week(now()) ORDER BY `id` DESC");
                                            }
                                            while ($rowman = mysqli_fetch_assoc($query)) {
                                                $num = $rowman['mobile'];
                                                if ($paneluser != 'Admin') {
                                                    $mobile = substr($num, 0, 2) . str_repeat('*', (strlen($num) - 4)) . substr($num, -2);
                                                } else {
                                                    $mobile = $num;
                                                }
                                            ?>
                                                <tr>
                                                    <td><?= $i++ ?></td>
                                                    <td><?= $rowman['name'] ?></td>
                                                    <td><?= $mobile ?></td>
                                                    <td><?= $rowman['email'] ?></td>
                                                    <td><?= $rowman['projects'] ?></td>
                                                    <td><?= $rowman['source'] ?></td>
                                                    <td><?= date('F j, Y', strtotime($rowman['created'])) ?></td>
                                                </tr>
                                            <?php } ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="full graph_head">
                                    <h3 class="text-info text-capitalize">Today Queries</h3>
                                </div>
                                <div class="table-responsive">
                                    <table id="subct" class="table table-striped projects">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th>S. No.</th>
                                                <th>Name</th>
                                                <th>Mobile</th>
                                                <th>Email</th>
                                                <th>Project</th>
                                                <th>Source</th>
                                                <th>Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $i = 1;
                                            if ($paneluser == 'Admin') {
                                                $query = mysqli_query($link, "SELECT * FROM `r_desk` WHERE `created`  LIKE '%$date%' ORDER BY `id` DESC");
                                            } else {
                                                $query = mysqli_query($link, "SELECT * FROM `r_desk` WHERE `projects`='$projectname' AND `created`  LIKE '%$date%' ORDER BY `id` DESC");
                                            }
                                            while ($rowman = mysqli_fetch_assoc($query)) {
                                                $num = $rowman['mobile'];
                                                if ($paneluser != 'Admin') {
                                                    $mobile = substr($num, 0, 2) . str_repeat('*', (strlen($num) - 4)) . substr($num, -2);
                                                } else {
                                                    $mobile = $num;
                                                }
                                            ?>
                                                <tr>
                                                    <td><?= $i++ ?></td>
                                                    <td><?= $rowman['name'] ?></td>
                                                    <td><?= $mobile ?></td>
                                                    <td><?= $rowman['email'] ?></td>
                                                    <td><?= $rowman['projects'] ?></td>
                                                    <td><?= $rowman['source'] ?></td>
                                                    <td><?= date('F j, Y', strtotime($rowman['created'])) ?></td>
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
        </div>
    </div>
    <?php require_once 'footer.php' ?>
</body>

</html>