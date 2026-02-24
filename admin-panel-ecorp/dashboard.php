<?php require_once 'header.php';
require_once 'sidebar.php'; ?>
<!-- dashboard inner -->
<div class="midde_cont">
    <div class="container-fluid">
        <div class="row column_title">
            <div class="col-md-12">
                <div class="page_title">
                    <h2>Dashboard</h2>
                </div>
            </div>
        </div>
        <div class="row column1">
            <div class="col-md-12">
                <div class="white_shd full margin_bottom_30">
                    <div class="full graph_head">
                        <h3 class="text-info text-capitalize">Dashboard</h3>
                    </div>
                    <div class="full price_table padding_infor_info">
                        <div class="row">
                            <div class="col-md-6 col-lg-3">
                                <a href="events.php">
                                    <div class="full counter_section margin_bottom_30">
                                        <div class="couter_icon">
                                            <div>
                                                <i class="fa fa-home blue1_color"></i>
                                            </div>
                                        </div>
                                        <div class="counter_no">
                                            <div>
                                                <?php
                                                $data = mysqli_query($link, "SELECT * FROM `events` ORDER BY `ev_id` DESC");
                                                $check = mysqli_num_rows($data);
                                                ?>
                                                <p class="total_no"><?= $check ?></p>
                                                <p class="head_couter">Events</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <a href="blogs.php">
                                    <div class="full counter_section margin_bottom_30">
                                        <div class="couter_icon">
                                            <div>
                                                <i class="fa fa-home blue1_color"></i>
                                            </div>
                                        </div>
                                        <div class="counter_no">
                                            <div>
                                                <?php
                                                $data = mysqli_query($link, "SELECT * FROM `blogs` ORDER BY `id` DESC");
                                                $check = mysqli_num_rows($data);
                                                ?>
                                                <p class="total_no"><?= $check ?></p>
                                                <p class="head_couter">Blogs</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
    </div>
    <?php require_once 'footer.php' ?>