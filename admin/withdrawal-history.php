<body class="menubar-hoverable header-fixed ">

<?php include('../layouts/admin_header.php');
include('../classes/phpmailer/mail.php');

?>
<?php

if (isset($_POST['account'])) {

    $id = ($_POST['id']);

    $act = 1;
    $sql = $db->prepare("update withdraw_requests set status=:status where id = '$id'");
    $sql->bindParam(':status', $act, PDO::PARAM_STR, 15);

    if ($sql->execute()) {
        header('location: withdrawal-history?action=done');
    } else {
        ?>
        <script>
            alert('ERROR  ');
            //window.location. href='all-uploads';
        </script>
        <?php
    }
}

?>

<div id="base">

    <!-- BEGIN OFFCANVAS LEFT -->
    <div class="offcanvas">
    </div><!--end .offcanvas-->
    <!-- END OFFCANVAS LEFT -->

    <!-- BEGIN CONTENT-->

    <div id="content">
        <section>
            <div class="section-body">
                <div class="row">

                    <!-- BEGIN ALERT - REVENUE -->
                    <div class="col-md-12 col-sm-12">
                        <header class="text-color">Withdrawal History</header>
                        <br/>
                        <div class="card">
                            <div class="card-body no-padding">
                                <div class="alert alert-callout alert-info no-margin">
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <?php

                                            //if action is joined show sucess
                                            if (isset($_GET['action']) && $_GET['action'] == 'done'){

                                            ?>

                                            <div class="alert alert-success alert-dismissable w3-tiny">
                                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                                <?php


                                                echo " <h2 class='w3-small'>Withdrawal Successfully Completed</h2></div> ";
                                                }
                                                ?>
                                                <?php

                                                //if action is joined show sucess
                                                if (isset($_GET['action']) && $_GET['action'] == 'edit'){

                                                ?>

                                                <div class="alert alert-success alert-dismissable w3-tiny">
                                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                                    <?php


                                                    echo " <h2 class='w3-small'>User Successfully Edited</h2></div> ";
                                                    }
                                                    ?>

                                                    <?php

                                                    //if action is joined show sucess
                                                    if (isset($_GET['action']) && $_GET['action'] == 'avatar'){

                                                    ?>

                                                    <div class="alert alert-success alert-dismissable w3-tiny">
                                                        <a href="#" class="close" data-dismiss="alert"
                                                           aria-label="close">&times;</a>
                                                        <?php


                                                        echo " <h2 class='w3-small'>User Avatar Successfully Updated</h2></div> ";
                                                        }
                                                        ?>
                                                        <table class="table table-striped table-bordered table-hover"
                                                               id="sample_1">
                                                            <thead>
                                                            <tr>
                                                                <th>Name</th>
                                                                <th>Wallet Address</th>
                                                                <th>Date</th>
                                                                <th>Amount</th>
                                                                <th>Status</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>

                                                            <?php


                                                            $sqla = "SELECT * from withdraw_requests  ";

                                                            foreach ($db->query($sqla, PDO::FETCH_ASSOC) as $row){

                                                            $status = $row['status'];
                                                            ?>
                                                            <tr>
                                                                <td>  <?php echo $row['name']; ?></td>

                                                                <td><?php echo $row['wallet_address']; ?></td>

                                                                <td><?php echo date("F j, Y ", strtotime($row['date'])); ?></td>
                                                                <td><?php echo '$'. $row['amount']; ?></td>

                                                                <td><?php
                                                                    if ($status == 1) {
                                                                        ?>
                                                                        <span class="btn btn-success btn-xs">	Approved </span>
                                                                        <?php

                                                                    } elseif ($status == 0) {
                                                                        ?>
                                                                        <button onclick="document.getElementById('account<?php echo $row['id']; ?>').style.display='block'"
                                                                                class="btn btn-danger btn-xs"><i
                                                                                    class="fa fa-spinner w3-spin"></i>
                                                                            Pending
                                                                        </button> <span
                                                                                onclick="document.getElementById('account<?php echo $row['id']; ?>').style.display='block'"
                                                                                class="btn btn-info btn-xs"> Mark As Done</span>
                                                                        <div class="clearfix"
                                                                             style="margin-bottom:2px!important"></div>

                                                                        <?php

                                                                    } elseif ($status == 2) {
                                                                        ?>
                                                                        <span class="btn btn-primary btn-xs">	Declined </span>
                                                                        <?php
                                                                    }
                                                                    ?></td>
                                                                <td>

                                                                </td>
                                                            </tr>


                                                            <!---Avatar change-->


                                                            <div id="account<?php echo $row['id']; ?>" class="w3-modal">
                                                                <div class="w3-modal-content w3-padding">
                                                                    <div class="w3-container">
                                                                        <span onclick="document.getElementById('account<?php echo $row['id']; ?>').style.display='none'"
                                                                              class="w3-closebtn"> &times;</span>
                                                                        <form action="" method="post"
                                                                              enctype="multipart/form-data">
                                                                            <input type="hidden" name="id"
                                                                                   value="<?php echo $row['id']; ?>">
                                                                            <div class="modal-body">
                                                                                <p>Are you sure of this</p>
                                                                                <div class="container-fluid">
                                                                                    <div class="row">
                                                                                        <div class="col-md-12">
                                                                                            <div class="form-group">

                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="clearfix"
                                                                                         style="margin-bottom:2px!important"></div>
                                                                                    <button class="btn btn-danger"><i
                                                                                                class="fa fa-remove "></i>
                                                                                        Close
                                                                                    </button>
                                                                                    <div class="w3-right w3-padding-16">
                                                                                        <button name="account"
                                                                                                id="<?php echo $row['id']; ?>"
                                                                                                class="btn btn-success ">
                                                                                            <i class="fa fa-check-circle-o "></i>
                                                                                            Save
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                    </div>
                                                                    </form>


                                                                    <?php } ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div><!--end .card -->
                                        </div>
                                    </div>
                                </div><!--end .col -->
                                <!-- END ALERT - REVENUE -->

                                <!-- BEGIN ALERT - VISITS -->

                                <!-- END ALERT - TIME ON SITE -->

                            </div><!--end .row -->
                            <div class="text-color">

                            </div>
                        </div><!--end .section-body -->
        </section>
    </div><!--end #content-->
    <!-- END CONTENT -->

    <?php include('side.php'); ?>
    <!-- END MENUBAR -->

    <!-- BEGIN OFFCANVAS RIGHT -->
    <!-- END OFFCANVAS RIGHT -->

</div><!--end #base-->
<!-- END BASE -->

<!-- BEGIN JAVASCRIPT -->
<script src="assets/js/libs/jquery/jquery-1.11.2.min.js"></script>
<script src="assets/js/libs/jquery/jquery-migrate-1.2.1.min.js"></script>
<script src="assets/js/libs/bootstrap/bootstrap.min.js"></script>
<script src="assets/js/libs/spin.js/spin.min.js"></script>
<script src="assets/js/libs/autosize/jquery.autosize.min.js"></script>
<script src="assets/js/libs/moment/moment.min.js"></script>
<script src="assets/js/libs/flot/jquery.flot.min.js"></script>
<script src="assets/js/libs/flot/jquery.flot.time.min.js"></script>
<script src="assets/js/libs/flot/jquery.flot.resize.min.js"></script>
<script src="assets/js/libs/flot/jquery.flot.orderBars.js"></script>
<script src="assets/js/libs/flot/jquery.flot.pie.js"></script>
<script src="assets/js/libs/flot/curvedLines.js"></script>
<script src="assets/js/libs/jquery-knob/jquery.knob.min.js"></script>
<script src="assets/js/libs/sparkline/jquery.sparkline.min.js"></script>
<script src="assets/js/libs/nanoscroller/jquery.nanoscroller.min.js"></script>
<script src="assets/js/libs/d3/d3.min.js"></script>
<script src="assets/js/libs/d3/d3.v3.js"></script>
<script src="assets/js/libs/rickshaw/rickshaw.min.js"></script>
<script src="assets/js/core/source/App.js"></script>
<script src="assets/js/core/source/AppNavigation.js"></script>
<script src="assets/js/core/source/AppOffcanvas.js"></script>
<script src="assets/js/core/source/AppCard.js"></script>
<script src="assets/js/core/source/AppForm.js"></script>
<script src="assets/js/core/source/AppNavSearch.js"></script>
<script src="assets/js/core/source/AppVendor.js"></script>
<script src="assets/js/core/demo/Demo.js"></script>
<script src="assets/js/core/demo/DemoDashboard.js"></script>
<!-- END JAVASCRIPT -->
<!-- Bootstrap Core JavaScript -->

<!-- jQuery -->
<script src="assets/js/jquery.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.dataTables.min.js"></script>
<script src="assets/js/dataTables.bootstrap.min.js"></script>
<script src="assets/js/bootstrap-tagsinput.js"></script>
<!-- Switchery -->

<script src="assets/admin/js/datatable.js" type="text/javascript"></script>
<script src="assets/admin/js/datatables.min.js" type="text/javascript"></script>
<script src="assets/admin/js/datatables.bootstrap.js" type="text/javascript"></script>
<script src="assets/admin/js/table-datatables-buttons.min.js" type="text/javascript"></script>


</body>
</html>
