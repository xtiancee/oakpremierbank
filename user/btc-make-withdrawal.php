<body class="menubar-hoverable header-fixed ">

<?php
include('../includes/config.php');
include('../layouts/user_header.php');
?>

<?php
$usr = $db->query("SELECT * from customer WHERE id = ". $_SESSION['id'])->fetch();
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

                    <div class="row">

                        <!-- BEGIN SITE ACTIVITY -->
                        <div class="col-md-12">
                            <div class="">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card-head">
                                            <header> BTC Withdrawal Process</header>
                                        </div><!--end .card-head -->
                                    </div><!--end .col -->

                                </div><!--end .row -->
                            </div><!--end .card -->
                        </div><!--end .col -->
                        <!-- END SITE ACTIVITY -->

                        <div class="section-body">
                            <div class="col-md-12 col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <input type="hidden" id="mybalance" value="<?php echo $usr['balance']; ?>">
                                        <form id='ben' method='post' class="form" role="form">
                                            <div class="form-group floating-label">
                                                <input type="text" name="bank" class="form-control" value="<?php echo number_format($usr['balance']) ?>" disabled>
                                                <label for="select2">Available Balance</label>
                                            </div>
                                            <div class="form-group floating-label">
                                                <input type="text" name="full_name" class="form-control" value="<?php echo $usr['name'] ?>" readonly>
                                                <label for="select2">Full Name</label>
                                            </div>
                                            <div class="form-group floating-label">
                                                <input type="text" name="wallet_address" class="form-control" id="wallet_address">
                                                <label for="placeholder2">Bitcoin Wallet Address</label>
                                            </div>
                                            <div class="form-group floating-label">
                                                <input  type="number" name="withdraw_amount" class="form-control" id="withdraw_amount">
                                                <label for="regular2">Withdrawal Amount</label>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn ink-reaction btn-lg btn-primary" style="background-color:#ff9933!important">
                                                    <span id="text">  Withdraw</span>
                                                    <span id="img" style="display:none;"> <img src="../assets/img/loading.gif" style="width:15px; height:15px"> </span></button>
                                            </div>
                                        </form>
                                        <aside id="show-log"  style="text-align:center;clear:both!important">
                                        </aside>

                                        <!--                                        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>-->

                                    </div><!--end .card-body -->
                                </div><!--end .card -->
                            </div><!--end .col -->

                        </div><!--end .section-body -->


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

<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript">
    $(document).ready(function() {

        $('#withdraw_amount').on('keyup', function(){
            console.log('Event fired....');
            let balance = parseFloat($('#mybalance').val());
            let val = parseFloat($(this).val());
            if(val > balance){
                alert("Withdrawal amount cannot be greater than available balance");
                $(this).val("");
                return;
            }
        });

        $('#ben').submit(function(e){
            e.preventDefault(); // Prevent Default Submission

            let address = $.trim($('#wallet_address').val());
            let amount = $.trim($('#withdraw_amount').val());

            if(address === "") {
                $('#wallet_address').focus();
                return;
            }else if((amount === "") || isNaN(amount)){
                $('#withdraw_amount').focus();
                return;
            }

            $('#text').hide();
            $('#progress').hide();
            $('#img').show();
            $('#progress-bar').show();
            $('#text2').show();
            $.ajax({
                url: 'btc-withdrawal-process',
                type: 'POST',
                data: $(this).serialize() // it will serialize the form data
            })
                .done(function(data){
                    $('#show-log').fadeOut('slow', function(){
                        $('#show-log').fadeIn('slow').html(data);
                        $('#img').hide();
                        $('#progress-bar').hide();
                        $('#text').show();
                        $('#progress').show();
                        setTimeout(function (){
                            window.location.href = 'btc-withdrawal';
                        }, 1000);
                    });
                })
                .fail(function(e){
                    console.log(JSON.stringify(e));
                    alert('Transfering funds not available now.');
                });
        });
    });
</script>
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

<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>

<script>
    $(document).ready(function () {
        $('#example').DataTable();
    });
</script>
</body>
</html>
