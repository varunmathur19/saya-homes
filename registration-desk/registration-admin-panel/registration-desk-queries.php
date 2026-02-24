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
        $query = mysqli_query($link, "UPDATE `r_desk` SET `status`='$status' WHERE `id`='$id'") or die('Status Update Query Not Run');
        if ($query) {
            echo "<script>window.location.href='registration-desk-queries.php';</script>";
        }
    } else if ($type == 'trash') {
        $query = mysqli_query($link, "DELETE FROM `r_desk` WHERE `id`='$id'") or die('Delete Query Not Run');
        if ($query) {
            echo "<script>window.location.href='registration-desk-queries.php';</script>";
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
                    <h2><?= ($projectname != "All") ? ucfirst($projectname) : '' ?> Visitors Data</h2>
                </div>
            </div>
        </div>
        <!-- row -->
        <div class="row column1">
            <div class="col-md-12">
                <div class="white_shd full margin_bottom_30">
                    <div class="full price_table padding_infor_info">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="table-responsive-sm">
                                    <table border="0" cellspacing="5" cellpadding="5">
                                        <tbody>
                                            <tr>
                                                <td>Minimum date:</td>
                                                <td><input type="text" id="min" name="min"></td>
                                            </tr>
                                            <tr>
                                                <td>Maximum date:</td>
                                                <td><input type="text" id="max" name="max"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <table id="pjdataTable" class="table table-striped projects">
                                        <thead>
                                            <tr>
                                                <th>S. No.</th>
                                                <th>Name</th>
                                                <th>Mobile</th>
                                                <th>Email</th>
                                                <th>Project</th>
                                                <th>Source</th>
                                                <th>Employee Name</th>
                                                <th>Channel Partner</th>
                                                <th>Executive</th>
                                                <th>Description</th>
                                                <th>Ownership Day</th>
                                                <th>Date</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $i = 1;
                                            if ($paneluser == 'Admin') {
                                                $query = mysqli_query($link, "SELECT * FROM `r_desk` ORDER BY `id` DESC");
                                            } else {
                                                $query = mysqli_query($link, "SELECT * FROM `r_desk` WHERE `projects`='$projectname' ORDER BY `id` DESC");
                                            }
                                            while ($rowman = mysqli_fetch_assoc($query)) {
                                                $num = $rowman['mobile'];
                                                if ($paneluser != 'Admin') {
                                                    $mobile = substr($num, 0, 2) . str_repeat('*', (strlen($num) - 4)) . substr($num, -2);
                                                } else {
                                                    $mobile = $num;
                                                }

                                                $crdate = $rowman['created'];
                                                $Date = date('Y-m-d', strtotime($crdate));
                                                $d45 = date('Y-m-d', strtotime($Date . ' + 45 days'));
                                                $now = time(); // or your date as well
                                                $datediff = strtotime($d45) - $now;

                                                $daysleft = round($datediff / (60 * 60 * 24));
                                            ?>
                                                <tr>
                                                    <td><?= $i++ ?></td>
                                                    <td><?= $rowman['name'] ?></td>
                                                    <td><?= $mobile ?></td>
                                                    <td><?= $rowman['email'] ?></td>
                                                    <td><?= $rowman['projects'] ?></td>
                                                    <td><?= $rowman['source'] ?></td>
                                                    <td><?= $rowman['employee'] ?></td>
                                                    <td><?= $rowman['partner'] ?></td>
                                                    <td><?= $rowman['exicutive'] ?></td>
                                                    <td>
                                                        <ul class="list-inline d-flex justify-content-end">
                                                            <li class="<?= (empty($rowman['description'])) ? 'd-none' : '' ?>"><a href="#viewmessage" data-toggle="modal" data-qryid="<?= $rowman['id'] ?>" data-qmessage="<?= $rowman['description'] ?>" class="btn btn-success btn-xs">View</a></li>
                                                            <li class="<?= (!empty($rowman['description'])) ? (($paneluser == 'Admin') ? '' : 'd-none') : '' ?>">
                                                                <a href="#adddescription" 
                                                                    data-toggle="modal" 
                                                                    data-qryid="<?= $rowman['id'] ?>" 
                                                                    data-mobile="<?= $rowman['mobile'] ?>" 
                                                                    data-project="<?= strtoupper(preg_replace('/\s+/', '-', trim($rowman['projects']))) ?>" 
                                                                    data-employee="<?= strtoupper(explode(' ', trim($rowman['employee']))[0]) ?>" 
                                                                    data-qmessage="<?= $rowman['description'] ?>" 
                                                                    class="btn btn-success btn-xs"
                                                                >Add</a>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                    <td><?= $daysleft . ' Left' ?></td>
                                                    <td><?= $rowman['created'] ?></td>
                                                    <td>
                                                        <ul class="list-inline d-flex justify-content-end">
                                                            <?php
                                                            if ($rowman['status'] == 2) {
                                                            ?>
                                                                <li><button class="btn btn-info btn-xs">Pending</button></li>
                                                            <?php
                                                            } else if ($rowman['status'] == 1) { ?>

                                                                <li><button class="btn btn-success btn-xs">Accepted</button></li>
                                                            <?php  } else {
                                                            ?>
                                                                <li><button class="btn btn-warning btn-xs">Rejected</button></li>
                                                            <?php
                                                            }
                                                            ?>
                                                            <li class="<?= ($paneluser != 'Admin') ? 'd-none' : '' ?>"><a href="?type=trash&id=<?= $rowman['id'] ?>" onclick="return confirm('Are you sure! You want to delete')" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a></li>
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

    <!-- Modal Form -->

    <div class="modal fade" id="adddescription" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <span class="status text-danger"></span>
                    <form method="POST" id="messageadd" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="vstatus" class="col-form-label">Status</label>
                            <select class="custom-select" id="vstatus" name="vstatus" fdprocessedid="e29jv">
                                <option value="">Choose...</option>
                                <option value="Accepted">Accepted</option>
                                <option value="Pending"> Pending</option>
                                <option value="Rejected">Rejected</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="remarks" class="col-form-label">Remarks:</label>
                            <textarea class="form-control" name="remarks" id="remarks" placeholder="Add remarks related to this lead."></textarea>
                        </div>
                        <div class="form-group">
                            <input type="hidden" name="addmessage" value="active">
                            <input type="hidden" name="queryid" id="queryid">
                            <input type="hidden" name="query_mobile" id="query_mobile">
                            <input type="hidden" name="query_project" id="query_project">
                            <input type="hidden" name="query_employee" id="query_employee">
                            <button type="submit" class="btn btn-primary">Send message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="viewmessage" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Message</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p id="viewmsg"></p>
                </div>
            </div>
        </div>
    </div>

    <!-- End Modal Form -->

    <?php require_once 'footer.php' ?>

    <script>
        $('#adddescription').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget);
            var qryid = button.data('qryid');
            var qrymobile = button.data('mobile');
            var qryproject = button.data('project');
            var qryemployee = button.data('employee');
            var qmessage = button.data('qmessage');
            $('#queryid').val(qryid);
            $('#query_mobile').val(qrymobile);
            $('#query_project').val(qryproject);
            $('#query_employee').val(qryemployee);
            $('#remarks').val(qmessage);
        });

        $('#viewmessage').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget);
            var qmessage = button.data('qmessage');
            $('#viewmsg').text(qmessage);
        })
    </script>

    <script>
        $('#messageadd').on('submit', function(event) {
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
                    $('#messageadd').reset();
                }
            });
        });
    </script>


    <script>
        // $('#subct').DataTable();
        var minDate, maxDate;

        // Custom filtering function which will search data in column four between two values
        $.fn.dataTable.ext.search.push(

            function(settings, data, dataIndex) {
                if (settings.nTable.id !== 'pjdataTable') {
                    return true;
                }

                var min = minDate.val();
                var max = maxDate.val();
                var date = new Date(data[11]);

                if (
                    (min === null && max === null) ||
                    (min === null && date <= max) ||
                    (min <= date && max === null) ||
                    (min <= date && date <= max)
                ) {
                    return true;
                }
                return false;
            }
        );

        $(document).ready(function() {
            // Create date inputs
            minDate = new DateTime($('#min'), {
                format: 'MMMM Do YYYY'
            });
            maxDate = new DateTime($('#max'), {
                format: 'MMMM Do YYYY'
            });

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


            // Refilter the table
            $('#min, #max').on('change', function() {
                table.draw();
            });
        });
    </script>
</body>

</html>