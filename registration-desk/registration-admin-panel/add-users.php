<?php require_once 'header.php';
require_once 'sidebar.php';
if (isset($_GET['id']) != '') {
    $p_id = $_GET['id'];
    $result = mysqli_query($link, "SELECT * FROM `admin_login` WHERE `id`='$p_id'");
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
                        <?= (!empty($p_id)) ? 'Edit' : 'Add' ?> User
                    </h2>
                </div>
            </div>
        </div>
        <div class="row column1">
            <div class="col-md-12">
                <div class="white_shd full margin_bottom_30">
                    <div class="full graph_head">
                        <a href="manage-users.php" class="btn btn-primary btn-xs float-right">Back</a>
                    </div>
                    <div class="full price_table padding_infor_info">
                        <span class="status text-danger"></span>
                        <form method="POST" id="addusers" enctype="multipart/form-data">
                            <div class="form-row ">
                                <div class="col-md-6 form-group">
                                    <label class="label_field">Name</label>
                                    <input type="text" name="name" id="name" class="form-control" value="<?= (!empty($row['name'])) ? $row['name'] : '' ?>" />
                                </div>
                                <div class="col-md-6 form-group">
                                    <label class="label_field">User Email</label>
                                    <input type="text" name="userid" id="userid" class="form-control" value="<?= (!empty($row['userid'])) ? $row['userid'] : '' ?>" />
                                </div>
                                <div class="col-md-6 form-group">
                                    <label class="label_field">Password</label>
                                    <input type="text" name="password" id="password" class="form-control" value="" />
                                </div>
                                <div class="col-md-6 form-group">
                                    <label class="label_field">Confirm Password</label>
                                    <input type="text" name="cpassword" id="cpassword" class="form-control" value="" />
                                </div>
                                <div class="col-md-6 form-group">
                                    <label class="label_field">User Type </label>
                                    <select class="custom-select" id="user_type" name="user_type">
                                        <option value="">Choose...</option>
                                        <option <?= (!empty($row['user_type']) && $row['user_type'] == 'Admin') ? 'selected' : '' ?> value="Admin">Admin</option>
                                        <option <?= (!empty($row['user_type']) && $row['user_type'] == 'User') ? 'selected' : '' ?> value="User">User</option>
                                    </select>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label class="label_field">Projects </label>
                                    <select class="custom-select" id="projects" name="projects">
                                        <option value="">Choose...</option>
                                        <option <?= (!empty($row['projects']) && $row['projects'] == 'All') ? 'selected' : '' ?> value="All">All</option>
                                        <option <?= (!empty($row['projects']) && $row['projects'] == 'Saya Gold Avenue') ? 'selected' : '' ?> value="Saya Gold Avenue">Saya Gold Avenue</option>
                                        <option <?= (!empty($row['projects']) && $row['projects'] == 'Saya Piazza') ? 'selected' : '' ?> value="Saya Piazza">Saya Piazza</option>
                                        <option <?= (!empty($row['projects']) && $row['projects'] == 'Saya SouthX') ? 'selected' : '' ?> value="Saya SouthX">Saya SouthX</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group margin_0">
                                <input type="hidden" name="addusers" value="active">
                                <input type="hidden" name="uids" value="<?= (isset($_GET["id"]) && $_GET["id"] != '') ? $p_id : '' ?>">
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
    <script src="assets/js/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
        $("#user_type").change(function() {
            var str1 = this.value;
            var str2 = "Admin";
            if (str1.indexOf(str2) != -1) {
                $("#projects").val('All');
            } else {
                $("#projects").val('');
            }
        });
    </script>
    <script>
        $('#addusers').on('submit', function(event) {
            event.preventDefault();
            var data = new FormData(this);
            $.ajax({
                url: "users-queries.php",
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