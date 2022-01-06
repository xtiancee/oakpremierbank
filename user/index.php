<body class="menubar-hoverable header-fixed ">

<?php include('../layouts/user_header.php') ?>

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
                    <div class="col-md-3 col-sm-6">
                        <div class="card">
                            <div class="card-body no-padding">
                                <div class="alert alert-callout alert-primary no-margin">
                                    <strong class="pull-right text-success text-lg"></strong>
                                    <strong class="text-xl">$
                                        <?php
                                        $number = $rws['balance'];

                                        // english notation (default)
                                        $english_format_number = number_format($number);


                                        echo $english_format_number;

                                        ?></strong><br/>
                                    <span class="opacity-50">Account Balance</span>
                                    <div class="stick-bottom-left-right">
                                        <div class="height-2 sparkline-revenue" data-line-color="#bdc1c1"></div>
                                    </div>
                                </div>
                            </div><!--end .card-body -->
                        </div><!--end .card -->
                    </div><!--end .col -->
                    <!-- END ALERT - REVENUE -->

                    <!-- BEGIN ALERT - VISITS -->
                    <div class="col-md-3 col-sm-6">
                        <div class="card">
                            <div class="card-body no-padding">
                                <div class="alert alert-callout alert-primary no-margin">
                                    <strong class="pull-right text-primary text-lg"></strong>
                                    <strong class="text-xl"><?php echo $rws['account_no']; ?></strong><br/>
                                    <span class="opacity-50">Account Number</span>
                                    <div class="stick-bottom-right">
                                    </div>
                                </div>
                            </div><!--end .card-body -->
                        </div><!--end .card -->
                    </div><!--end .col -->
                    <!-- END ALERT - VISITS -->

                    <!-- BEGIN ALERT - BOUNCE RATES -->
                    <div class="col-md-3 col-sm-6">
                        <div class="card">
                            <div class="card-body no-padding">
                                <div class="alert alert-callout alert-primary no-margin">
                                    <strong class="pull-right text-primary text-lg"></strong>
                                    <strong class="text-xl"><?php echo $rws['account']; ?></strong><br/>
                                    <span class="opacity-50">Account Type</span>
                                    <div class="stick-bottom-right">
                                    </div>
                                </div>
                            </div><!--end .card-body -->
                        </div><!--end .card -->
                    </div><!--end .col -->
                    <!-- END ALERT - BOUNCE RATES -->

                    <!-- BEGIN ALERT - TIME ON SITE -->
                    <div class="col-md-3 col-sm-6">
                        <div class="card">
                            <div class="card-body no-padding">
                                <div class="alert alert-callout alert-primary no-margin">
                                    <strong class="pull-right text-primary text-lg"></strong>
                                    <strong class="text-xl"><?php echo $ip; ?></strong><br/>
                                    <span class="opacity-50">Current IP</span>
                                    <div class="stick-bottom-right">
                                    </div>
                                </div>
                            </div><!--end .card-body -->
                        </div><!--end .card -->
                    </div><!--end .col -->
                    <!-- END ALERT - TIME ON SITE -->

                </div><!--end .row -->
                <div class="row">

                    <!-- BEGIN SITE ACTIVITY -->
                    <div class="col-md-12">
                        <div class="">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="card-head">
                                        <header>Account activity</header>
                                    </div><!--end .card-head -->
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table id="example" class="table table-striped table-bordered"
                                                       style="width:100%">
                                                    <thead>
                                                    <tr>
                                                        <th>Date</th>
                                                        <th>Name</th>
                                                        <th>Description</th>
                                                        <th>Amount</th>
                                                        <th>Status</th>
                                                    </tr>

                                                    </thead>
                                                    <?php
                                                    $sql = "SELECT * FROM transaction WHERE user_trans_id='$session_id' limit 5";
                                                    $count = $db->query("select * FROM transaction WHERE user_trans_id='$session_id' ")->fetchColumn();
                                                    if ($count != '0'){
                                                    foreach ($db->query($sql, PDO::FETCH_ASSOC) as $rwss) {


                                                    $bank = $rwss['bank'];
                                                    $routing = $rwss['routing'];
                                                    $name = $rwss['name'];
                                                    $account_no = $rwss['account_no'];
                                                    $acctype = $rwss['acctype'];
                                                    $amount = $rwss['amount'];
                                                    $user_trans = $rwss['user_trans'];
                                                    $user_trans_id = $rwss['user_trans_id'];
                                                    $status = $rwss['status'];
                                                    $date_proccessing = $rwss['date_proccessing'];
                                                    $parentTime = strtotime($rwss['date_proccessing']);
                                                    $later = strtotime("+5 hours", $parentTime);

                                                    ?>

                                                    <tbody>
                                                    <tr>
                                                        <td><?php echo date("F j, Y ", $later); ?></td>
                                                        <td><?php echo $name; ?></td>
                                                        <td>Transfer from <?php echo $user_trans; ?></td>
                                                        <td><?php
                                                            if ($rwss['currency'] == '₺') {
                                                                echo '₺';
                                                            } elseif ($rws_trans['currency'] == '$') {
                                                                echo '$';


                                                            } elseif ($rws_trans['currency'] == '£') {

                                                                echo '£';
                                                            } elseif ($rws_trans['currency'] == '€') {
                                                                echo '€';
                                                            }; ?><?php echo $amount; ?></td>


                                                        <td><?php
                                                            if ($status == 1) {
                                                                ?>
                                                                <span class="btn btn-success btn-xs">	Completed </span>


                                                                <?php

                                                            } elseif ($status == 0) {
                                                                ?>
                                                                <span class="btn btn-danger btn-xs">	Pending </span>

                                                                <?php

                                                            } elseif ($status == 2) {
                                                                ?>
                                                                <span class="btn btn-success btn-xs">	Reversed </span>

                                                                <?php

                                                            }

                                                            ?></td>

                                                    </tr>


                                                    <?php }
                                                    } else { ?>
                                                        No Activity Yet

                                                    <?php } ?>
                                                    </tbody>
                                                    <tfoot>
                                                    <tr>
                                                        <th>Date</th>
                                                        <th>Name</th>
                                                        <th>Description</th>
                                                        <th>Amount</th>
                                                        <th>Status</th>
                                                    </tr>
                                                    </tfoot>
                                                </table>


                                            </div><!--end .table-responsive -->
                                        </div><!--end .card-body -->
                                    </div><!--end .card -->

                                </div><!--end .col -->
                                <div class="col-md-4 ">
                                    <div class="card-head">
                                        <header>Account stats</header>
                                    </div>
                                    <div class="card">

                                        <div class="card-body height-3">
                                            <strong>Average</strong> Monthly Deposits &nbsp;&nbsp;&nbsp;
                                            <span class="pull-right text-success text-sm">$<?php echo $rws['balance']; ?> <i
                                                        class="md md-trending-up"></i></span>
                                            <div class="progress progress-hairline">
                                                <div class="progress-bar progress-bar-primary-dark"
                                                     style="width:43%"></div>
                                            </div>
                                            <strong>Average</strong> Monthly Transfers
                                            <span class="pull-right text-danger text-sm">$132,301 <i
                                                        class="md md-trending-down"></i></span>
                                            <div class="progress progress-hairline">
                                                <div class="progress-bar progress-bar-danger" style="width:37%"></div>
                                            </div>
                                        </div>
                                    </div><!--end .card-body -->
                                </div><!--end .col -->
                            </div><!--end .row -->
                        </div><!--end .card -->
                    </div><!--end .col -->
                    <!-- END SITE ACTIVITY -->


                </div><!--end .row -->
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
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
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

<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>

<script>
    $(document).ready(function () {
        $('#example').DataTable();
    });
</script>

<!-- END JAVASCRIPT -->

</body>
</html>
