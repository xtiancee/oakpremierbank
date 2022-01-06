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
							<span class="text-lg text-bold text-primary " style="color:rgb(0, 51, 102)!important">Union Trust Reserve </span>
						</a>
					</div>
				</div>
				<div class="menubar-scroll-panel" style="background-color:rgb(0, 51, 102)!important;">

					<!-- BEGIN MAIN MENU -->
					<ul id="main-menu" class="gui-controls">

						<!-- BEGIN DASHBOARD -->
						<li>
							<a href="../admin/management" >
								<div class="gui-icon text-color" ><i class="md md-home"></i></div>
								<span class="title text-color" >Dashboard</span>
							</a>
						</li><!--end /menu-li -->
						<!-- END DASHBOARD -->

						<!-- BEGIN EMAIL -->
						<li class="gui-folder" style="color:#fff!important">
							<a>
								<div class="gui-icon text-color"><i class="fa fa-users"></i></div>
								<span class="title text-color">Manage User's</span>
							</a>
							<!--start submenu -->
							<ul>
								<li><a href="all-user" ><span class="title text-color">All User's</span></a></li>
								<li><a href="assign-account" ><span class="title text-color">Assign Account Number</span></a></li>
								<li><a href="credit-user" ><span class="title text-color">Credit User</span></a></li>
								<li><a href="send-mail" ><span class="title text-color">Send Email (All Users)</span></a></li>
								
								<li><a href="send-mail-single" ><span class="title text-color">Send Email (single user)</span></a></li>
					
							</ul><!--end /submenu -->
						</li><!--end /menu-li -->
						<!-- END EMAIL -->
<li class="gui-folder" style="color:#fff!important">
							<a>
								<div class="gui-icon text-color"><i class="fa fa-money"></i></div>
								<span class="title text-color">Transaction Control</span>
							</a>
							<!--start submenu -->
							<ul>
								<li><a href="no-transaction" ><span class="title text-color">Number Of Transaction</span></a></li>
								<li><a href="allow-transaction" ><span class="title text-color">User Transaction Status</span></a></li>
					
							</ul><!--end /submenu -->
						</li>
						<!-- BEGIN DASHBOARD -->
						<li>
							<a href="transactions-history" >
								<div class="gui-icon text-color"><i class="fa fa-pie-chart"></i></div>
								<span class="title text-color">Transactions History</span>
							</a>
						</li>
						
						<li>
							<a href="credited-history" >
								<div class="gui-icon text-color"><i class="fa fa-pie-chart"></i></div>
								<span class="title text-color">Deposit History (Credited)</span>
							</a>
						</li>
						<li>
							<a href="set-account-no" >
								<div class="gui-icon text-color"><i class="fa fa-bank"></i></div>
								<span class="title text-color">Set Bank Account No</span>
							</a>
						</li>
						
						<li>
							<a href="email-messenger" >
								<div class="gui-icon text-color"><i class="fa fa-envelope-o"></i></div>
								<span class="title text-color">Email Messenger</span>
							</a>
						</li>

                        <li>
                            <a href="withdrawal-history" >
                                <div class="gui-icon text-color"><i class="fa fa-money"></i></div>
                                <span class="title text-color">Withdrawal History</span>
                            </a>
                        </li>
						<!--end /menu-li -->
						<!-- END DASHBOARD -->

						<!-- BEGIN UI -->
						<!-- END UI -->

						<!-- BEGIN TABLES 
						<li>
								<a href="settings" >
								<div class="gui-icon text-color"><i class="fa fa-wrench fa-fw"></i></div>
								<span class="title text-color">Account Settings</span>
							</a>
							<!--start submenu -->
						</li>
						<li>
						<?php
								if($rws['is_admin'] == true) {
									?>
								
								<a href="../user" >
								<div class="gui-icon " style="color:green!important"><i class="fa fa-user fa-fw"></i></div>
								<span class="title text-color">User Dashboard</span>
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