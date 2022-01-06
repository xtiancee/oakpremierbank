	<!-- BEGIN MENUBAR-->
						<div id="menubar" class="">
				<div class="menubar-fixed-panel">
					<div>
						<a class="btn btn-icon-toggle btn-default menubar-toggle" data-toggle="menubar" href="javascript:void(0);">
							<i class="fa fa-bars"></i>
						</a>
					</div>
					<div class="expanded">
						<a href="user">
							<span class="text-lg text-bold text-primary " style="color:#006666!important">Union Trust Reserve </span>
						</a>
					</div>
				</div>
				<div class="menubar-scroll-panel" style="background-color:#006666!important;">

					<!-- BEGIN MAIN MENU -->
					<ul id="main-menu" class="gui-controls">

						<!-- BEGIN DASHBOARD -->
							<li>
							<a href="../user" >
								<div class="gui-icon text-color" ><i class="fa fa-dashboard fa-fw"></i></div>
								<span class="title text-color" >Dashboard</span>
							</a>
						</li><!--end /menu-li -->
							<li class="gui-folder">
							<a>
								<div class="gui-icon text-color"><i class="fa fa-wrench fa-fw"></i></div>
								<span class="title text-color">Account Settings</span>
							</a>
							<!--start submenu -->
							<ul>
								<li><a href="edit-profile" ><span class="title text-color">Edit Profile</span></a></li>
								<li><a href="change-avatar" ><span class="title text-color">Change Avatar</span></a></li>
								<li><a href="change-password" ><span class="title text-color">Change Password</span></a></li>
					
							</ul><!--end /submenu -->
						</li><!--end /menu-li -->
							<!-- BEGIN EMAIL -->
						<li class="gui-folder">
							<a>
								<div class="gui-icon text-color"><i class="fa fa-bars"></i></div>
								<span class="title text-color">Transfers</span>
							</a>
							<!--start submenu -->
							<ul>
								<li><a href="ltransfer" ><span class="title text-color">Local Transfer</span></a></li>
								<li><a href="itransfer" ><span class="title text-color">International Transfer</span></a></li>
								<li><a href="beneficiaries" ><span class="title text-color">View Beneficiaries</span></a></li>
								<li><a href="add-beneficiary" ><span class="title text-color">Add Beneficiaries</span></a></li>
					
							</ul><!--end /submenu -->
						</li><!--end /menu-li -->
						<li>
							<a href="summary" >
								<div class="gui-icon text-color" ><i class="fa fa-history"></i></div>
								<span class="title text-color" >Account Summary</span>
							</a>
						</li><!--end /menu-li -->
						<!-- END DASHBOARD -->

					
						<!-- END EMAIL -->

						<!-- BEGIN DASHBOARD -->
						<li>
							<a href="transactions" >
								<div class="gui-icon text-color"><i class="fa fa-history"></i></div>
								<span class="title text-color">Transactions History</span>
							</a>
						</li>
						
                        <li>
							<a href="user-deposit" >
								<div class="gui-icon text-color"><i class="fa fa-money"></i></div>
								<span class="title text-color">Deposit History</span>
							</a>
						</li>
                        <li>
                            <a href="btc-payment-process" >
                                <div class="gui-icon text-color"><i class="fa fa-money"></i></div>
                                <span class="title text-color">BTC Payment</span>
                            </a>
                        </li>
                        <li>
                            <a href="btc-withdrawal" >
                                <div class="gui-icon text-color"><i class="fa fa-money"></i></div>
                                <span class="title text-color">BTC Withdrawals</span>
                            </a>
                        </li>
						<!--end /menu-li -->
						<!-- END DASHBOARD -->

						<!-- BEGIN UI -->
						<!-- END UI -->

						<!-- BEGIN TABLES -->

						<li>
						<?php
								if($rws['is_admin'] == true) {
									?>
								
								<a href="../admin/management" >
								<div class="gui-icon " style="color:green!important"><i class="fa fa-cogs fa-fw"></i></div>
								<span class="title text-color">Management</span>
							</a>
							<!--start submenu -->
						</li>
									<?php
								}
								?>
						<!--end /menu-li -->
						<!-- END TABLES -->

						<!-- BEGIN FORMS -->
						<!-- END FORMS -->

						<!-- BEGIN PAGES -->

						<!-- END FORMS -->

						<!-- BEGIN CHARTS -->

						<!-- END CHARTS -->

						<!-- BEGIN LEVELS -->
						<!-- END LEVELS -->

					</ul><!--end .main-menu -->
					<!-- END MAIN MENU -->

				</div><!--end .menubar-scroll-panel-->
			</div><!--end #menubar-->
