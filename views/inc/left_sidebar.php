<aside class="left-sidebar">
	<!-- Sidebar scroll-->
	<div class="scroll-sidebar">
		<!-- Sidebar navigation-->
		<nav class="sidebar-nav">
			<?php if ($userData->userlevel == 9) { ?>
				<ul id="sidebarnav">
					<!-- User Profile-->
					<li>
						<!-- User Profile-->
						<div class="user-profile d-flex no-block dropdown m-t-20">
							<div class="user-pic">
								<img src="assets/<?php echo ($userData->avatar) ? $userData->avatar : "blank.png"; ?>" class="rounded-circle" width="50" />
							</div>
							<?php
							date_default_timezone_set("" . $core->timezone . "");
							$t = date("H");

							if ($t < 12) {
								$mensaje = '' . $lang['message1'] . '';
							} else if ($t < 18) {
								$mensaje = '' . $lang['message2'] . '';
							} else {
								$mensaje = '' . $lang['message3'] . '';
							}
							?>

							<div class="user-content hide-menu m-l-10">
								<a href="javascript:void(0)" class="" id="Userdd" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<h5 class="m-b-0 user-name font-medium"><?php echo $mensaje; ?>,&nbsp;&nbsp;</h5>
									<span class="op-5 user-email"><?php echo $userData->fname; ?></span>
								</a>
							</div>
						</div>
					</li>

					<li class="p-15 m-t-10">
						<a href="courier_add.php" class="btn btn-block create-btn text-white no-block d-flex align-items-center">
							<i class="ti-package"></i>
							<span class="hide-menu m-l-5"> <?php echo $lang['left-menu-sidebar-1'] ?> </span>
						</a>
					</li>

					<li class="nav-small-cap"> <span class="hide-menu"></span></li>

					<li class="sidebar-item">
						<a class="sidebar-link waves-effect waves-dark" href="index.php" aria-expanded="false">
							<i class="mdi mdi-view-dashboard"></i>
							<span class="hide-menu"> <?php echo $lang['left-menu-sidebar-2'] ?></span>
						</a>
					</li>

                    <!-- Module online shopping-->
					<li class="sidebar-item">
						<a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
							<i class="mdi mdi-cart-outline"></i>
							<span class="hide-menu"><?php echo $lang['left-menu-sidebar-5'] ?></span>
						</a>

						<ul aria-expanded="false" class="collapse  first-level">

							<li class="sidebar-item">
								<a href="dashboard_admin_packages_customers.php" class="sidebar-link">
									<i class="mdi mdi-view-dashboard"></i>
									<span class="hide-menu"> <?php echo $lang['left-menu-sidebar-6'] ?></span>
								</a>
							</li>

							<li class="sidebar-item">
								<a class="sidebar-link waves-effect waves-dark" href="prealert_list.php" aria-expanded="false">
									<i class="mdi mdi-adjust" style="color:#fc3f7"></i>
									<span class="hide-menu"> <?php echo $lang['left-menu-sidebar-7'] ?> </span>
								</a>
							</li>

							<li class="sidebar-item">
								<a href="customer_packages_add.php" class="sidebar-link">
									<i class="mdi mdi-adjust" style="color:#fc3f7"></i>
									<span class="hide-menu"> <?php echo $lang['left-menu-sidebar-8'] ?> </span>
								</a>
							</li>

							<li class="sidebar-item">
								<a href="customer_packages_multiple.php" class="sidebar-link">
									<i class="mdi mdi-adjust" style="color:#fc3f7"></i>
									<span class="hide-menu"> <?php echo $lang['left-menu-sidebar-9'] ?> </span>
								</a>
							</li>

							<li class="sidebar-item">
								<a class="sidebar-link waves-effect waves-dark" href="customer_packages_list.php" aria-expanded="false">
									<i class="mdi mdi-adjust" style="color:#fc3f7"></i>
									<span class="hide-menu"> <?php echo $lang['left-menu-sidebar-11'] ?> </span>
								</a>
							</li>

							<li class="sidebar-item">
								<a class="sidebar-link waves-effect waves-dark" href="payments_gateways_list.php" aria-expanded="false">
									<i class="mdi mdi-adjust" style="color:#fc3f7"></i>
									<span class="hide-menu"><?php echo $lang['left-menu-sidebar-12'] ?> </span>
								</a>
							</li>

						</ul>
					</li>


					<!-- Module shipment-->
					<li class="sidebar-item">
						<a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
							<i class="mdi mdi-package-variant"></i>
							<span class="hide-menu"> <?php echo $lang['left-menu-sidebar-13'] ?></span>
						</a>
						<ul aria-expanded="false" class="collapse  first-level">

							<li class="sidebar-item">
								<a href="dashboard_admin_shipments.php" class="sidebar-link">
									<i class="mdi mdi-view-dashboard"></i>
									<span class="hide-menu"> <?php echo $lang['left-menu-sidebar-14'] ?></span>
								</a>
							</li>

							<li class="sidebar-item">
								<a href="courier_add.php" class="sidebar-link">
									<i class="mdi mdi-adjust" style="color:#fc3f7"></i>
									<span class="hide-menu"> <?php echo $lang['left-menu-sidebar-15'] ?> </span>
								</a>
							</li>

							<li class="sidebar-item">
								<a href="courier_add_multiple.php" class="sidebar-link">
									<i class="mdi mdi-adjust" style="color:#fc3f7"></i>
									<span class="hide-menu"> <?php echo $lang['left-menu-sidebar-17'] ?> </span>
								</a>
							</li>

							<li class="sidebar-item">
								<a href="courier_list.php" class="sidebar-link">
									<i class="mdi mdi-adjust" style="color:#fc3f7"></i>
									<span class="hide-menu"> <?php echo $lang['left-menu-sidebar-16'] ?> </span>
								</a>
							</li>

							<li class="sidebar-item">
								<a class="sidebar-link waves-effect waves-dark" href="payments_gateways_courier_list.php" aria-expanded="false">
									<i class="mdi mdi-adjust" style="color:#fc3f7"></i>
									<span class="hide-menu"><?php echo $lang['left-menu-sidebar-12'] ?> </span>
								</a>
							</li>

						</ul>
					</li>

					<!-- Module pickup-->
					<li class="sidebar-item">
						<a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
							<i class="mdi mdi-run-fast"></i>
							<span class="hide-menu"> <?php echo $lang['left-menu-sidebar-18'] ?></span>
						</a>
						<ul aria-expanded="false" class="collapse  first-level">

							<li class="sidebar-item">
								<a href="dashboard_admin_pickup.php" class="sidebar-link">
									<i class="mdi mdi-view-dashboard"></i>
									<span class="hide-menu"> <?php echo $lang['left-menu-sidebar-19'] ?> </span>
								</a>
							</li>

							<?php if ($userData->userlevel == 9 || $userData->userlevel == 3) { ?>

								<li class="sidebar-item">
									<a href="pickup_add_full.php" class="sidebar-link">
										<i class="mdi mdi-adjust" style="color:#fc3f7"></i>
										<span class="hide-menu"> <?php echo $lang['left-menu-sidebar-20'] ?> </span>
									</a>
								</li>
							<?php

							} else { ?>

								<li class="sidebar-item">
									<a href="pickup_add.php" class="sidebar-link">
										<i class="mdi mdi-adjust" style="color:#fc3f7"></i>
										<span class="hide-menu"> <?php echo $lang['left-menu-sidebar-20'] ?> </span>
									</a>
								</li>

							<?php
							}
							?>

							<li class="sidebar-item">
								<a href="pickup_list.php" class="sidebar-link">
									<i class="mdi mdi-adjust" style="color:#fc3f7"></i>
									<span class="hide-menu"> <?php echo $lang['left-menu-sidebar-21'] ?> </span>
								</a>
							</li>
						</ul>
					</li>


					<!-- CONSOLIDATE -->
					<li class="sidebar-item">
						<a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
							<i class="mdi mdi-widgets"></i>
							<span class="hide-menu"><?php echo $lang['left-menu-sidebar-22'] ?></span>
						</a>
						<ul aria-expanded="false" class="collapse  first-level">

							<!-- Module consolidate-->
							<li class="sidebar-item">
								<a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
									<i class="fas fas fa-boxes"></i>
									<span class="hide-menu"> <?php echo $lang['left-menu-sidebar-2233333310'] ?></span>
								</a>
								<ul aria-expanded="false" class="collapse  first-level">
									<li class="sidebar-item">
										<a href="dashboard_admin_consolidated.php" class="sidebar-link">
											<i class="mdi mdi-adjust" style="color:#fc3f7"></i>
											<span class="hide-menu"> <?php echo $lang['left-menu-sidebar-23'] ?></span>
										</a>
									</li>

									<li class="sidebar-item">
										<a href="consolidate_list.php" class="sidebar-link">
											<i class="mdi mdi-adjust" style="color:#fc3f7"></i>
											<span class="hide-menu"> <?php echo $lang['left-menu-sidebar-24'] ?> </span>
										</a>
									</li>

									<li class="sidebar-item">
										<a href="consolidate_add.php" class="sidebar-link">
											<i class="mdi mdi-adjust" style="color:#fc3f7"></i>
											<span class="hide-menu"> <?php echo $lang['left-menu-sidebar-25'] ?> </span>
										</a>
									</li>

									<li class="sidebar-item">
										<a class="sidebar-link waves-effect waves-dark" href="payments_gateways_consolidate_list.php" aria-expanded="false">
											<i class="mdi mdi-adjust" style="color:#fc3f7"></i>
											<span class="hide-menu"><?php echo $lang['left-menu-sidebar-12'] ?> </span>
										</a>
									</li>
								</ul>
							</li>


							<!-- Module consolidate-->
							<li class="sidebar-item">
								<a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
									<i class="fas fas fa-boxes"></i>
									<span class="hide-menu"> <?php echo $lang['left-menu-sidebar-2233333312'] ?></span>
								</a>
								<ul aria-expanded="false" class="collapse  first-level">
									<li class="sidebar-item">
										<a href="dashboard_admin_package_consolidated.php" class="sidebar-link">
											<i class="mdi mdi-adjust" style="color:#fc3f7"></i>
											<span class="hide-menu"> <?php echo $lang['left-menu-sidebar-23'] ?></span>
										</a>
									</li>

									<li class="sidebar-item">
										<a href="consolidate_package_list.php" class="sidebar-link">
											<i class="mdi mdi-adjust" style="color:#fc3f7"></i>
											<span class="hide-menu"> <?php echo $lang['left-menu-sidebar-24'] ?> </span>
										</a>
									</li>

									<li class="sidebar-item">
										<a href="consolidate_package_add.php" class="sidebar-link">
											<i class="mdi mdi-adjust" style="color:#fc3f7"></i>
											<span class="hide-menu"> <?php echo $lang['left-menu-sidebar-25'] ?> </span>
										</a>
									</li>

									<li class="sidebar-item">
										<a class="sidebar-link waves-effect waves-dark" href="payments_gateways_package_consolidate_list.php" aria-expanded="false">
											<i class="mdi mdi-adjust" style="color:#fc3f7"></i>
											<span class="hide-menu"><?php echo $lang['left-menu-sidebar-12'] ?> </span>
										</a>
									</li>
								</ul>
							</li>
						</ul>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link waves-effect waves-dark" href="reports.php" aria-expanded="false">
							<i class="mdi mdi-book-multiple"></i>
							<span class="hide-menu"> <?php echo $lang['left-menu-sidebar-26'] ?></span>
						</a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
							<i class="mdi mdi-wallet"></i>
							<span class="hide-menu"> <?php echo $lang['left-menu-sidebar-27'] ?></span>
						</a>
						<ul aria-expanded="false" class="collapse  first-level">

							<li class="sidebar-item">
								<a href="dashboard_admin_account.php" class="sidebar-link">
									<i class="mdi mdi-adjust" style="color:#fc3f7"></i>
									<span class="hide-menu"> <?php echo $lang['left-menu-sidebar-28'] ?></span>
								</a>
							</li>

							<li class="sidebar-item">
								<a href="accounts_receivable.php" class="sidebar-link">
									<i class="mdi mdi-adjust" style="color:#fc3f7"></i>
									<span class="hide-menu"> <?php echo $lang['left-menu-sidebar-29'] ?> </span>
								</a>
							</li>

							<li class="sidebar-item">
								<a class="sidebar-link waves-effect waves-dark" href="global_payments_gateways.php" aria-expanded="false">
									<i class="mdi mdi-adjust" style="color:#fc3f7"></i>
									<span class="hide-menu"><?php echo $lang['left-menu-sidebar-12'] ?> </span>
								</a>
							</li>

						</ul>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
							<i class="mdi mdi-account-multiple-plus"></i>
							<span class="hide-menu"> <?php echo $lang['left-menu-sidebar-30'] ?></span>
						</a>
						<ul aria-expanded="false" class="collapse  first-level">
							<li class="sidebar-item">
								<a class="sidebar-link waves-effect waves-dark" href="customers_list.php" aria-expanded="false">
									<i class="mdi mdi-adjust" style="color:#fc3f7"></i>
									<span class="hide-menu"> <?php echo $lang['left-menu-sidebar-31'] ?> </span>
								</a>
							</li>

							<li class="sidebar-item">
								<a class="sidebar-link waves-effect waves-dark" href="recipients_admin_list.php" aria-expanded="false"><i class="fas fa-users"></i>
									<span class="hide-menu"> <?php echo $lang['left-menu-sidebar-62'] ?> </span>
								</a>
							</li>
						</ul>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
							<i class="mdi mdi-account-settings-variant"></i>
							<span class="hide-menu"> <?php echo $lang['left-menu-sidebar-33'] ?></span>
						</a>
						<ul aria-expanded="false" class="collapse  first-level">
							<li class="sidebar-item">
								<a class="sidebar-link waves-effect waves-dark" href="users_list.php" aria-expanded="false">
									<i class="mdi mdi-adjust" style="color:#fc3f7"></i>
									<span class="hide-menu"> <?php echo $lang['left-menu-sidebar-34'] ?> </span>
								</a>
							</li>

							<li class="sidebar-item">
								<a class="sidebar-link waves-effect waves-dark" href="users_add.php" aria-expanded="false">
									<i class="mdi mdi-adjust" style="color:#fc3f7"></i>
									<span class="hide-menu"> <?php echo $lang['left-menu-sidebar-35'] ?> </span>
								</a>
							</li>
						</ul>
					</li>

					<li class="nav-small-cap">
						<i class="mdi mdi-dots-horizontal"></i>
						<span class="hide-menu"><?php echo $lang['left-menu-sidebar-37'] ?></span>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
							<i class="fas fa-cog" style="color:#89D91B"></i>
							<span class="hide-menu"> <?php echo $lang['left-menu-sidebar-38'] ?></span>
						</a>

						<ul aria-expanded="false" class="collapse  first-level">

							<!-- Module generalconfiguracion  -->
							<li class="sidebar-item">
								<a class="sidebar-link waves-effect waves-dark" href="tools.php" aria-expanded="false">
									<i class="mdi mdi-wrench"></i>
									<span class="hide-menu"> <?php echo $lang['left-menu-sidebar-39'] ?> </span>
								</a>
							</li>

							<!-- AND Module generalconfiguracion  -->

							<!-- Module logistic configuracion  -->
							<li class="sidebar-item">
								<a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
									<i class="mdi mdi-package-variant"></i>
									<span class="hide-menu"> <?php echo $lang['left-menu-sidebar-42'] ?></span>
								</a>
								<ul aria-expanded="false" class="collapse  first-level">
									<li class="sidebar-item">
										<a class="sidebar-link waves-effect waves-dark" href="offices_list.php">
											<i class="mdi mdi-adjust" style="color:#fc3f7"></i>
											<span class="hide-menu"> <?php echo $lang['left-menu-sidebar-43'] ?></span>
										</a>
									</li>
									<li class="sidebar-item">
										<a class="sidebar-link waves-effect waves-dark" href="branchoffices_list.php">
											<i class="mdi mdi-adjust" style="color:#fc3f7"></i>
											<span class="hide-menu"> <?php echo $lang['left-menu-sidebar-44'] ?></span>
										</a>
									</li>
									<li class="sidebar-item">
										<a class="sidebar-link waves-effect waves-dark" href="courier_company_list.php">
											<i class="mdi mdi-adjust" style="color:#fc3f7"></i>
											<span class="hide-menu"> <?php echo $lang['left-menu-sidebar-45'] ?></span>
										</a>
									</li>

									<li class="sidebar-item">
										<a class="sidebar-link waves-effect waves-dark" href="packaging_list.php">
											<i class="mdi mdi-adjust" style="color:#fc3f7"></i>
											<span class="hide-menu"> <?php echo $lang['left-menu-sidebar-54'] ?></span>
										</a>
									</li>

									<li class="sidebar-item">
										<a class="sidebar-link waves-effect waves-dark" href="shipping_mode_list.php">
											<i class="mdi mdi-adjust" style="color:#fc3f7"></i>
											<span class="hide-menu"> <?php echo $lang['left-menu-sidebar-55'] ?></span>
										</a>

									<li class="sidebar-item">
										<a class="sidebar-link waves-effect waves-dark" href="delivery_time_list.php">
											<i class="mdi mdi-adjust" style="color:#fc3f7"></i>
											<span class="hide-menu"> <?php echo $lang['left-menu-sidebar-56'] ?></span>
										</a>
									</li>

								</li>
								<li class="sidebar-item">
									<a class="sidebar-link waves-effect waves-dark" href="status_courier_list.php">
										<i class="mdi mdi-adjust" style="color:#fc3f7"></i>
										<span class="hide-menu"> <?php echo $lang['left-menu-sidebar-46'] ?></span>
									</a>
								</li>

								<li class="sidebar-item">
									<a class="sidebar-link waves-effect waves-dark" href="category_list.php">
										<i class="mdi mdi-adjust" style="color:#fc3f7"></i>
										<span class="hide-menu"> <?php echo $lang['left-menu-sidebar-47'] ?></span>
									</a>
								</li>
							</ul>
						</li>
						<!-- AND  Module logistic configuracion  -->

						<!-- Module shipping configuracion  -->
						<li class="sidebar-item">
							<a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
								<i class="fas fas fa-dolly"></i>
								<span class="hide-menu"> <?php echo $lang['left-menu-sidebar-48'] ?></span>
							</a>
							<ul aria-expanded="false" class="collapse  first-level">

								<li class="sidebar-item">
									<a class="sidebar-link waves-effect waves-dark" href="taxesadnfees.php" aria-expanded="false">
										<i class="mdi mdi-adjust" style="color:#fc3f7"></i>
										<span class="hide-menu"> <?php echo $lang['left-menu-sidebar-49'] ?> </span>
									</a>
								</li> 

								<li class="sidebar-item">
									<a class="sidebar-link waves-effect waves-dark sidebar-link" href="shipping_tariffs_list.php" aria-expanded="false">
										<i class="mdi mdi-adjust" style="color:#fc3f7"></i>
										<span class="hide-menu"><?php echo $lang['left-menu-sidebar-53'] ?></span>
									</a>
								</li>


								<li class="sidebar-item">
									<a class="sidebar-link waves-effect waves-dark" href="track_invoice.php" aria-expanded="false">
										<i class="mdi mdi-adjust" style="color:#fc3f7"></i>
										<span class="hide-menu"> <?php echo $lang['left-menu-sidebar-50'] ?></span>
									</a>
								</li>

								<li class="sidebar-item">
									<a class="sidebar-link waves-effect waves-dark" href="info_ship_default.php" aria-expanded="false">
										<i class="mdi mdi-adjust" style="color:#fc3f7"></i>
										<span class="hide-menu"> <?php echo $lang['left-menu-sidebar-51'] ?></span>
									</a>
								</li>
							</ul>
						</li>
						<!-- AND Module shipping configuracion  -->

						<!-- Module payments  -->
						<li class="sidebar-item">
							<a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
								<i class="fas fa-donate"></i>
								<span class="hide-menu"> <?php echo $lang['left-menu-sidebar-40'] ?></span>
							</a>

							<ul aria-expanded="false" class="collapse  first-level">

								<li class="sidebar-item">
									<a class="sidebar-link waves-effect waves-dark sidebar-link" href="payment_mode_list.php" aria-expanded="false">
										<i class="mdi mdi-adjust" style="color:#fc3f7"></i>
										<span class="hide-menu"> <?php echo $lang['left-menu-sidebar-40'] ?></span>
									</a>
								</li>

								<li class="sidebar-item">
									<a class="sidebar-link waves-effect waves-dark" href="payment_methods_list.php">
										<i class="mdi mdi-adjust" style="color:#fc3f7"></i>
										<span class="hide-menu"> <?php echo $lang['left-menu-sidebar-41'] ?></span>
									</a>
								</li>
							</ul>
						</li>

						<!-- AND Module payments  -->



						<!-- MODULE LOCATIONS  -->

						<li class="sidebar-item">
							<a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">

								<i class="fas fa-map-marker-alt"></i>
								<span class="hide-menu"> <?php echo $lang['left-menu-sidebar-57'] ?></span>
							</a>
							<ul aria-expanded="false" class="collapse  first-level">
								<li class="sidebar-item">
									<a class="sidebar-link waves-effect waves-dark" href="countries_list.php" aria-expanded="false">
										<i class="mdi mdi-adjust" style="color:#fc3f7"></i>
										<span class="hide-menu"><?php echo $lang['left-menu-sidebar-58'] ?> </span>
									</a>
								</li>

								<li class="sidebar-item">
									<a class="sidebar-link waves-effect waves-dark" href="states_list.php" aria-expanded="false">
										<i class="mdi mdi-adjust" style="color:#fc3f7"></i>
										<span class="hide-menu"><?php echo $lang['left-menu-sidebar-59'] ?> </span>
									</a>
								</li>

								<li class="sidebar-item">
									<a class="sidebar-link waves-effect waves-dark" href="cities_list.php" aria-expanded="false">
										<i class="mdi mdi-adjust" style="color:#fc3f7"></i>
										<span class="hide-menu"><?php echo $lang['left-menu-sidebar-60'] ?> </span>
									</a>
								</li>

							</ul>
						</li>

						<!-- end MODULE LOCATIONS  -->
					</ul>
				</li>


				


				<li class="sidebar-item">
					<a class="sidebar-link waves-effect waves-dark" href="verify_update.php" aria-expanded="false">
						<i class="ti-info-alt"></i>
						<span class="hide-menu"> <?php echo $lang['left-menu-sidebar-61'] ?></span>
					</a>
				</li>

				</ul>


			<?php } else if ($userData->userlevel == 2) { ?>

				<ul id="sidebarnav">
					<!-- User Profile-->
					<li>
						<!-- User Profile-->
						<div class="user-profile d-flex no-block dropdown m-t-20">
							<div class="user-pic">
								<img src="assets/<?php echo ($userData->avatar) ? $userData->avatar : "uploads/blank.png"; ?>" class="rounded-circle" width="50" />
							</div>
							<?php
							date_default_timezone_set("" . $core->timezone . "");
							$t = date("H");

							if ($t < 12) {
								$mensaje = '' . $lang['message1'] . '';
							} else if ($t < 18) {
								$mensaje = '' . $lang['message2'] . '';
							} else {
								$mensaje = '' . $lang['message3'] . '';
							}
							?>

							<div class="user-content hide-menu m-l-10">
								<a href="javascript:void(0)" class="" id="Userdd" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<h5 class="m-b-0 user-name font-medium"><?php echo $mensaje; ?>,&nbsp;&nbsp;</h5>
									<span class="op-5 user-email"><?php echo $userData->fname; ?><br></span>
									<span class="op-5 user-email"><?php echo $lang['left-menu-sidebar-0'] ?>: <strong><?php echo $userData->name_off; ?></strong></span>
								</a>
							</div>
						</div>
						<!-- End User Profile-->
					</li>


					<li class="p-15 m-t-10">
						<a href="courier_add.php" class="btn btn-block create-btn text-white no-block d-flex align-items-center">
							<i class="ti-package"></i>
							<span class="hide-menu m-l-5"> <?php echo $lang['left-menu-sidebar-1'] ?> </span> </a>
					</li>
					<!-- User Profile-->
					<li class="nav-small-cap"> <span class="hide-menu"></span></li>

					<li class="sidebar-item">
						<a class="sidebar-link waves-effect waves-dark" href="index.php" aria-expanded="false">
							<i class="mdi mdi-view-dashboard"></i>
							<span class="hide-menu"> <?php echo $lang['left-menu-sidebar-2'] ?> </span>
						</a>
					</li>

                    <!-- Module online shopping-->
					<li class="sidebar-item">
						<a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
							<i class="mdi mdi-cart-outline"></i>
							<span class="hide-menu"><?php echo $lang['left-menu-sidebar-5'] ?></span>
						</a>
						<ul aria-expanded="false" class="collapse  first-level">

							<li class="sidebar-item">
								<a href="dashboard_admin_packages_customers.php" class="sidebar-link">
									<i class="mdi mdi-adjust" style="color:#fc3f7"></i>
									<span class="hide-menu"> <?php echo $lang['left-menu-sidebar-6'] ?></span>
								</a>
							</li>


							<li class="sidebar-item">
								<a class="sidebar-link waves-effect waves-dark" href="prealert_list.php" aria-expanded="false">
									<i class="mdi mdi-adjust" style="color:#fc3f7"></i>
									<span class="hide-menu"> <?php echo $lang['left-menu-sidebar-7'] ?> </span>
								</a>
							</li>


							<li class="sidebar-item">
								<a href="customer_packages_add.php" class="sidebar-link">
									<i class="mdi mdi-adjust" style="color:#fc3f7"></i>
									<span class="hide-menu"> <?php echo $lang['left-menu-sidebar-8'] ?> </span>
								</a>
							</li>

							<li class="sidebar-item">
								<a href="customer_packages_multiple.php" class="sidebar-link">
									<i class="mdi mdi-adjust" style="color:#fc3f7"></i>
									<span class="hide-menu"> <?php echo $lang['left-menu-sidebar-9'] ?> </span>
								</a>
							</li>


							<li class="sidebar-item">
								<a class="sidebar-link waves-effect waves-dark" href="customer_packages_list.php" aria-expanded="false">
									<i class="mdi mdi-adjust" style="color:#fc3f7"></i>
									<span class="hide-menu"> <?php echo $lang['left-menu-sidebar-11'] ?> </span>
								</a>
							</li>

							<li class="sidebar-item">
								<a class="sidebar-link waves-effect waves-dark" href="payments_gateways_list.php" aria-expanded="false">
									<i class="mdi mdi-adjust" style="color:#fc3f7"></i>
									<span class="hide-menu"><?php echo $lang['left-menu-sidebar-12'] ?> </span>
								</a>
							</li>

						</ul>
					</li>



					<!-- Module shipment-->
					<li class="sidebar-item">
						<a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
							<i class="mdi mdi-package-variant"></i>
							<span class="hide-menu"> <?php echo $lang['left-menu-sidebar-13'] ?></span>
						</a>
						<ul aria-expanded="false" class="collapse  first-level">

							<li class="sidebar-item">
								<a href="dashboard_admin_shipments.php" class="sidebar-link">
									<i class="mdi mdi-adjust" style="color:#fc3f7"></i>
									<span class="hide-menu"> <?php echo $lang['left-menu-sidebar-14'] ?></span>
								</a>
							</li>

							<li class="sidebar-item">
								<a href="courier_add.php" class="sidebar-link">
									<i class="mdi mdi-adjust" style="color:#fc3f7"></i>
									<span class="hide-menu"> <?php echo $lang['left-menu-sidebar-15'] ?> </span>
								</a>
							</li>

							<li class="sidebar-item">
								<a href="courier_add_multiple.php" class="sidebar-link">
									<i class="mdi mdi-adjust" style="color:#fc3f7"></i>
									<span class="hide-menu"> <?php echo $lang['left-menu-sidebar-17'] ?> </span>
								</a>
							</li>

							<li class="sidebar-item">
								<a href="courier_list.php" class="sidebar-link">
									<i class="mdi mdi-adjust" style="color:#fc3f7"></i>
									<span class="hide-menu"> <?php echo $lang['left-menu-sidebar-16'] ?> </span>
								</a>
							</li>

							<li class="sidebar-item">
								<a class="sidebar-link waves-effect waves-dark" href="payments_gateways_courier_list.php" aria-expanded="false">
									<i class="mdi mdi-adjust" style="color:#fc3f7"></i>
									<span class="hide-menu"><?php echo $lang['left-menu-sidebar-12'] ?> </span>
								</a>
							</li>

						</ul>
					</li>

					<!-- Module pickup-->
					<li class="sidebar-item">
						<a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
							<i class="mdi mdi-run-fast"></i>
							<span class="hide-menu"> <?php echo $lang['left-menu-sidebar-18'] ?></span>
						</a>
						<ul aria-expanded="false" class="collapse  first-level">

							<li class="sidebar-item">
								<a href="dashboard_admin_pickup.php" class="sidebar-link">
									<i class="mdi mdi-adjust" style="color:#fc3f7"></i>
									<span class="hide-menu"> <?php echo $lang['left-menu-sidebar-19'] ?> </span>
								</a>
							</li>


							<?php if ($userData->userlevel == 9 || $userData->userlevel == 3) { ?>

								<li class="sidebar-item">
									<a href="pickup_add_full.php" class="sidebar-link">
										<i class="mdi mdi-adjust" style="color:#fc3f7"></i>
										<span class="hide-menu"> <?php echo $lang['left-menu-sidebar-20'] ?> </span>
									</a>
								</li>
							<?php

							} else { ?>

								<li class="sidebar-item">
									<a href="pickup_add.php" class="sidebar-link">
										<i class="mdi mdi-adjust" style="color:#fc3f7"></i>
										<span class="hide-menu"> <?php echo $lang['left-menu-sidebar-20'] ?> </span>
									</a>
								</li>

							<?php
							}
							?>


							<li class="sidebar-item">
								<a href="pickup_list.php" class="sidebar-link">
									<i class="mdi mdi-adjust" style="color:#fc3f7"></i>
									<span class="hide-menu"> <?php echo $lang['left-menu-sidebar-21'] ?> </span>
								</a>
							</li>
						</ul>
					</li>


					<li class="sidebar-item">
						<a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
							<i class="mdi mdi-widgets"></i>
							<span class="hide-menu"><?php echo $lang['left-menu-sidebar-22'] ?></span>
						</a>
						<ul aria-expanded="false" class="collapse  first-level">

							<!-- Module consolidate-->
							<li class="sidebar-item">
								<a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
									<i class="fas fas fa-boxes"></i>
									<span class="hide-menu"> <?php echo $lang['left-menu-sidebar-2233333310'] ?></span>
								</a>
								<ul aria-expanded="false" class="collapse  first-level">
									<li class="sidebar-item">
										<a href="dashboard_admin_consolidated.php" class="sidebar-link">
											<i class="mdi mdi-view-dashboard"></i>
											<span class="hide-menu"> <?php echo $lang['left-menu-sidebar-23'] ?></span>
										</a>
									</li>

									<li class="sidebar-item">
										<a href="consolidate_list.php" class="sidebar-link">
											<i class="mdi mdi-adjust" style="color:#fc3f7"></i>
											<span class="hide-menu"> <?php echo $lang['left-menu-sidebar-24'] ?> </span>
										</a>
									</li>

									<li class="sidebar-item">
										<a href="consolidate_add.php" class="sidebar-link">
											<i class="mdi mdi-adjust" style="color:#fc3f7"></i>
											<span class="hide-menu"> <?php echo $lang['left-menu-sidebar-25'] ?> </span>
										</a>
									</li>

									<li class="sidebar-item">
										<a class="sidebar-link waves-effect waves-dark" href="payments_gateways_consolidate_list.php" aria-expanded="false">
											<i class="mdi mdi-adjust" style="color:#fc3f7"></i>
											<span class="hide-menu"><?php echo $lang['left-menu-sidebar-12'] ?> </span>
										</a>
									</li>
								</ul>
							</li>


							<!-- Module consolidate-->
							<li class="sidebar-item">
								<a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
									<i class="fas fas fa-boxes"></i>
									<span class="hide-menu"> <?php echo $lang['left-menu-sidebar-2233333312'] ?></span>
								</a>
								<ul aria-expanded="false" class="collapse  first-level">
									<li class="sidebar-item">
										<a href="dashboard_admin_package_consolidated.php" class="sidebar-link">
											<i class="mdi mdi-view-dashboard"></i>
											<span class="hide-menu"> <?php echo $lang['left-menu-sidebar-23'] ?></span>
										</a>
									</li>

									<li class="sidebar-item">
										<a href="consolidate_package_list.php" class="sidebar-link">
											<i class="mdi mdi-adjust" style="color:#fc3f7"></i>
											<span class="hide-menu"> <?php echo $lang['left-menu-sidebar-24'] ?> </span>
										</a>
									</li>

									<li class="sidebar-item">
										<a href="consolidate_package_add.php" class="sidebar-link">
											<i class="mdi mdi-adjust" style="color:#fc3f7"></i>
											<span class="hide-menu"> <?php echo $lang['left-menu-sidebar-25'] ?> </span>
										</a>
									</li>

									<li class="sidebar-item">
										<a class="sidebar-link waves-effect waves-dark" href="payments_gateways_package_consolidate_list.php" aria-expanded="false">
											<i class="mdi mdi-adjust" style="color:#fc3f7"></i>
											<span class="hide-menu"><?php echo $lang['left-menu-sidebar-12'] ?> </span>
										</a>
									</li>
								</ul>
							</li>
						</ul>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link waves-effect waves-dark" href="reports.php" aria-expanded="false">
							<i class="mdi mdi-book-multiple"></i>
							<span class="hide-menu"> <?php echo $lang['left-menu-sidebar-26'] ?></span>
						</a>

					</li>

					<li class="sidebar-item">
						<a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
							<i class="fas fa-hand-holding-usd"></i>
							<span class="hide-menu"> <?php echo $lang['left-menu-sidebar-27'] ?></span>
						</a>
						<ul aria-expanded="false" class="collapse  first-level">
							<li class="sidebar-item">
								<a href="dashboard_admin_account.php" class="sidebar-link">
									<i class="mdi mdi-view-dashboard"></i>
									<span class="hide-menu"> <?php echo $lang['left-menu-sidebar-28'] ?></span>
								</a>
							</li>


							<li class="sidebar-item">
								<a href="accounts_receivable.php" class="sidebar-link">
									<i class="mdi mdi-adjust" style="color:#fc3f7"></i>
									<span class="hide-menu"> <?php echo $lang['left-menu-sidebar-29'] ?> </span>
								</a>
							</li>

							<li class="sidebar-item">
								<a class="sidebar-link waves-effect waves-dark" href="global_payments_gateways.php" aria-expanded="false">
									<i class="mdi mdi-adjust" style="color:#fc3f7"></i>
									<span class="hide-menu"><?php echo $lang['left-menu-sidebar-11'] ?> </span>
								</a>
							</li>

						</ul>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
							<i class="mdi mdi-account-multiple-plus"></i>
							<span class="hide-menu"> <?php echo $lang['left-menu-sidebar-30'] ?></span>
						</a>
						<ul aria-expanded="false" class="collapse  first-level">
							<li class="sidebar-item">
								<a class="sidebar-link waves-effect waves-dark" href="customers_list.php" aria-expanded="false">
									<i class="mdi mdi-adjust" style="color:#fc3f7"></i>
									<span class="hide-menu"> <?php echo $lang['left-menu-sidebar-31'] ?> </span>
								</a>
							</li>

						</ul>
					</li>

				</ul>


			<?php } else if ($userData->userlevel == 1) { ?>

				<ul id="sidebarnav">
					<!-- User Profile-->
					<li>
						<!-- User Profile-->
						<div class="user-profile d-flex no-block dropdown m-t-20">
							<div class="user-pic">
								<img src="assets/<?php echo ($userData->avatar) ? $userData->avatar : "uploads/blank.png"; ?>" class="rounded-circle" width="50" />
							</div>
							<?php
							date_default_timezone_set("" . $core->timezone . "");
							$t = date("H");

							if ($t < 12) {
								$mensaje = '' . $lang['message1'] . '';
							} else if ($t < 18) {
								$mensaje = '' . $lang['message2'] . '';
							} else {
								$mensaje = '' . $lang['message3'] . '';
							}
							?>

							<div class="user-content hide-menu m-l-10">
								<a href="javascript:void(0)" class="" id="Userdd" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<h5 class="m-b-0 user-name font-medium"><?php echo $mensaje; ?>,&nbsp;&nbsp;</h5>
									<span class="op-5 user-email"><?php echo $userData->fname; ?></span>
									<br><?php echo $lang['left-menu-sidebar-00'] ?> <b><?php echo $userData->locker; ?></b>
								</a>
							</div>
						</div>
						<!-- End User Profile-->
					</li>


					<li class="p-15 m-t-10">
						<a href="pickup_add.php" class="btn btn-block create-btn text-white no-block d-flex align-items-center">
							<i class="mdi mdi-cube-send" style="font-size: 20px"></i>
							<span class="hide-menu"> &nbsp; <?php echo $lang['left-menu-sidebar-20'] ?></span>
						</a>
					</li>
					<!-- User Profile-->


					<li class="sidebar-item">
						<a class="sidebar-link waves-effect waves-dark" href="index.php" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i>
							<span class="hide-menu"> <?php echo $lang['left-menu-sidebar-2'] ?> </span>
						</a>
					</li>


					<li class="sidebar-item">
						<a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-codepen"></i>
							<span class="hide-menu"><?php echo $lang['left-menu-sidebar-5'] ?></span>
						</a>
						<ul aria-expanded="false" class="collapse  first-level">

							<li class="sidebar-item">
								<a href="prealert_add.php" class="sidebar-link"><i class="mdi mdi-bell"></i>
									<span class="hide-menu"> <?php echo $lang['left-menu-sidebar-10'] ?> </span>
								</a>
							</li>

							<li class="sidebar-item">
								<a class="sidebar-link waves-effect waves-dark" href="prealert_list.php" aria-expanded="false"><i class="mdi mdi-adjust" style="color:#fc3f7"></i>
									<span class="hide-menu"> <?php echo $lang['left-menu-sidebar-7'] ?> </span>
								</a>
							</li>

							<li class="sidebar-item">
								<a class="sidebar-link waves-effect waves-dark" href="customer_packages_list.php" aria-expanded="false">
									<i class="mdi mdi-adjust" style="color:#fc3f7"></i>
									<span class="hide-menu"> <?php echo $lang['left-menu-sidebar-11'] ?> </span>
								</a>
							</li>

							<li class="sidebar-item">
								<a class="sidebar-link waves-effect waves-dark" href="payments_gateways_list.php" aria-expanded="false">
									<i class="mdi mdi-adjust" style="color:#fc3f7"></i>
									<span class="hide-menu"><?php echo $lang['left-menu-sidebar-12'] ?> </span>
								</a>
							</li>


						</ul>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-package"></i>
							<span class="hide-menu"> <?php echo $lang['left-menu-sidebar-13'] ?></span>
						</a>
						<ul aria-expanded="false" class="collapse  first-level">

							<li class="sidebar-item">
								<a href="courier_add_client.php" class="sidebar-link"><i class="ti-package" style="color:#f62d51"></i>
									<span class="hide-menu"> <?php echo $lang['left-menu-sidebar-15'] ?> </span>
								</a>
							</li>

							<li class="sidebar-item">
								<a href="courier_list.php" class="sidebar-link"><i class="mdi mdi-adjust" style="color:#fc3f7"></i>
									<span class="hide-menu"> <?php echo $lang['left-menu-sidebar-16'] ?> </span>
								</a>
							</li>

							<li class="sidebar-item">
								<a class="sidebar-link waves-effect waves-dark" href="payments_gateways_courier_list.php" aria-expanded="false"><i class="mdi mdi-adjust" style="color:#fc3f7"></i>
									<span class="hide-menu"><?php echo $lang['left-menu-sidebar-12'] ?> </span>
								</a>
							</li>
						</ul>
					</li>


					<li class="sidebar-item">
						<a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-cube-send"></i>
							<span class="hide-menu"> <?php echo $lang['left-menu-sidebar-18'] ?></span>
						</a>
						<ul aria-expanded="false" class="collapse  first-level">

							<li class="sidebar-item">
								<a href="pickup_add.php" class="sidebar-link"><i class="mdi mdi-cube-send" style="color:#f62d51"></i>
									<span class="hide-menu"> <?php echo $lang['left-menu-sidebar-20'] ?> </span>
								</a>
							</li>


							<li class="sidebar-item">
								<a href="pickup_list.php" class="sidebar-link"><i class="mdi mdi-adjust" style="color:#fc3f7"></i>
									<span class="hide-menu"> <?php echo $lang['left-menu-sidebar-21'] ?> </span>
								</a>
							</li>
						</ul>
					</li>


					<li class="sidebar-item">
						<a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
							<i class="mdi mdi-widgets"></i>
							<span class="hide-menu"><?php echo $lang['left-menu-sidebar-22'] ?></span>
						</a>
						<ul aria-expanded="false" class="collapse  first-level">

							<!-- Module consolidate-->
							<li class="sidebar-item">
								<a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
									<i class="fas fas fa-boxes"></i>
									<span class="hide-menu"> <?php echo $lang['left-menu-sidebar-2233333310'] ?></span>
								</a>
								<ul aria-expanded="false" class="collapse  first-level">

									<li class="sidebar-item">
										<a href="consolidate_list.php" class="sidebar-link">
											<i class="mdi mdi-adjust" style="color:#fc3f7"></i>
											<span class="hide-menu"> <?php echo $lang['left-menu-sidebar-24'] ?> </span>
										</a>
									</li>

									<li class="sidebar-item">
										<a class="sidebar-link waves-effect waves-dark" href="payments_gateways_consolidate_list.php" aria-expanded="false">
											<i class="mdi mdi-adjust" style="color:#fc3f7"></i>
											<span class="hide-menu"><?php echo $lang['left-menu-sidebar-12'] ?> </span>
										</a>
									</li>
								</ul>
							</li>


							<!-- Module consolidate-->
							<li class="sidebar-item">
								<a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
									<i class="fas fas fa-boxes"></i>
									<span class="hide-menu"> <?php echo $lang['left-menu-sidebar-2233333312'] ?></span>
								</a>
								<ul aria-expanded="false" class="collapse  first-level">

									<li class="sidebar-item">
										<a href="consolidate_package_list.php" class="sidebar-link">
											<i class="mdi mdi-adjust" style="color:#fc3f7"></i>
											<span class="hide-menu"> <?php echo $lang['left-menu-sidebar-24'] ?> </span>
										</a>
									</li>

									<li class="sidebar-item">
										<a class="sidebar-link waves-effect waves-dark" href="payments_gateways_package_consolidate_list.php" aria-expanded="false">
											<i class="mdi mdi-adjust" style="color:#fc3f7"></i>
											<span class="hide-menu"><?php echo $lang['left-menu-sidebar-12'] ?> </span>
										</a>
									</li>
								</ul>
							</li>
						</ul>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link waves-effect waves-dark" href="recipients_list.php" aria-expanded="false"><i class="fas fa-users"></i>
							<span class="hide-menu"> <?php echo $lang['left-menu-sidebar-62'] ?> </span>
						</a>
					</li>


					<li class="sidebar-item">
						<a class="sidebar-link waves-effect waves-dark" href="customers_profile_edit.php?user=<?php echo $userData->id; ?>" aria-expanded="false"><i class="mdi mdi-account"></i>
							<span class="hide-menu"> <?php echo $lang['left-menu-sidebar-63'] ?> </span>
						</a>
					</li>

				</ul>



				<!-- User Profile-->
			<?php } else if ($userData->userlevel == 3) { ?>
				<ul id="sidebarnav">
					<!-- User Profile-->
					<li>
						<!-- User Profile-->
						<div class="user-profile d-flex no-block dropdown m-t-20">
							<div class="user-pic">
								<img src="assets/<?php echo ($userData->avatar) ? $userData->avatar : "uploads/blank.png"; ?>" class="rounded-circle" width="50" />
							</div>
							<?php
							date_default_timezone_set("" . $core->timezone . "");
							$t = date("H");

							if ($t < 12) {
								$mensaje = '' . $lang['message1'] . '';
							} else if ($t < 18) {
								$mensaje = '' . $lang['message2'] . '';
							} else {
								$mensaje = '' . $lang['message3'] . '';
							}
							?>

							<div class="user-content hide-menu m-l-10">

								<a href="javascript:void(0)" class="" id="Userdd" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<h5 class="m-b-0 user-name font-medium"><?php echo $mensaje; ?>,&nbsp;&nbsp;</h5>
									<span class="op-5 user-email"><?php echo $userData->fname; ?></span>
								</a>
							</div>
						</div>
						<!-- End User Profile-->
					</li>


					<li class="p-15 m-t-10">
						<a href="courier_add.php" class="btn btn-block create-btn text-white no-block d-flex align-items-center">
							<i class="ti-package"></i> <span class="hide-menu m-l-5"> <?php echo $lang['left-menu-sidebar-1'] ?> </span> </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link waves-effect waves-dark" href="index.php" aria-expanded="false">
							<i class="mdi mdi-view-dashboard"></i>
							<span class="hide-menu"> <?php echo $lang['left-menu-sidebar-2'] ?> </span>
						</a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
							<i class="mdi mdi-codepen"></i>
							<span class="hide-menu"><?php echo $lang['left-menu-sidebar-5'] ?></span>
						</a>
						<ul aria-expanded="false" class="collapse  first-level">

							<li class="sidebar-item">
								<a class="sidebar-link waves-effect waves-dark" href="customer_packages_list.php" aria-expanded="false">
									<i class="mdi mdi-adjust" style="color:#fc3f7"></i>
									<span class="hide-menu"> <?php echo $lang['left-menu-sidebar-11'] ?> </span>
								</a>
							</li>

						</ul>
					</li>


					<li class="sidebar-item">
						<a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
							<i class="ti-package"></i>
							<span class="hide-menu"> <?php echo $lang['left-menu-sidebar-13'] ?></span>
						</a>
						<ul aria-expanded="false" class="collapse  first-level">
							<li class="sidebar-item">
								<a href="courier_add.php" class="sidebar-link">
									<i class="ti-package" style="color:#f62d51"></i>
									<span class="hide-menu"> <?php echo $lang['left-menu-sidebar-15'] ?> </span>
								</a>
							</li>

							<li class="sidebar-item">
								<a href="courier_list.php" class="sidebar-link">
									<i class="mdi mdi-adjust" style="color:#fc3f7"></i>
									<span class="hide-menu"> <?php echo $lang['left-menu-sidebar-16'] ?> </span>
								</a>
							</li>
						</ul>
					</li>


					<li class="sidebar-item">
						<a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
							<i class="mdi mdi-cube-send"></i>
							<span class="hide-menu"><?php echo $lang['left-menu-sidebar-18'] ?></span>
						</a>
						<ul aria-expanded="false" class="collapse  first-level">

							<?php if ($userData->userlevel == 9 || $userData->userlevel == 3) { ?>

								<li class="sidebar-item">
									<a href="pickup_add_full.php" class="sidebar-link">
										<i class="mdi mdi-cube-send" style="color:#f62d51"></i>
										<span class="hide-menu"> <?php echo $lang['left-menu-sidebar-20'] ?> </span>
									</a>
								</li>
							<?php

							} else { ?>

								<li class="sidebar-item">
									<a href="pickup_add.php" class="sidebar-link">
										<i class="mdi mdi-clock-fast" style="color:#f62d51"></i>
										<span class="hide-menu"> <?php echo $lang['left-menu-sidebar-20'] ?> </span>
									</a>
								</li>

							<?php
							}
							?>

							<li class="sidebar-item">
								<a href="pickup_list.php" class="sidebar-link">
									<i class="mdi mdi-adjust" style="color:#fc3f7"></i>
									<span class="hide-menu"> <?php echo $lang['left-menu-sidebar-21'] ?> </span>
								</a>
							</li>
						</ul>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
							<i class="mdi mdi-widgets"></i>
							<span class="hide-menu"><?php echo $lang['left-menu-sidebar-22'] ?></span>
						</a>
						<ul aria-expanded="false" class="collapse  first-level">

							<!-- Module consolidate-->
							<li class="sidebar-item">
								<a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
									<i class="fas fas fa-boxes"></i>
									<span class="hide-menu"> <?php echo $lang['left-menu-sidebar-2233333310'] ?></span>
								</a>
								<ul aria-expanded="false" class="collapse  first-level">

									<li class="sidebar-item">
										<a href="consolidate_list.php" class="sidebar-link">
											<i class="mdi mdi-adjust" style="color:#fc3f7"></i>
											<span class="hide-menu"> <?php echo $lang['left-menu-sidebar-24'] ?> </span>
										</a>
									</li>

								</ul>
							</li>


							<!-- Module consolidate-->
							<li class="sidebar-item">
								<a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
									<i class="fas fas fa-boxes"></i>
									<span class="hide-menu"> <?php echo $lang['left-menu-sidebar-2233333312'] ?></span>
								</a>
								<ul aria-expanded="false" class="collapse  first-level">

									<li class="sidebar-item">
										<a href="consolidate_package_list.php" class="sidebar-link">
											<i class="mdi mdi-adjust" style="color:#fc3f7"></i>
											<span class="hide-menu"> <?php echo $lang['left-menu-sidebar-24'] ?> </span>
										</a>
									</li>
								</ul>
							</li>
						</ul>
					</li>
					
					<li class="sidebar-item">
						<a class="sidebar-link waves-effect waves-dark" href="reports.php" aria-expanded="false">
							<i class="mdi mdi-book-multiple" style="color:#fb8c00"></i>
							<span class="hide-menu"> <?php echo $lang['left-menu-sidebar-26'] ?></span>
						</a>

					<li class="sidebar-item">
						<a class="sidebar-link waves-effect waves-dark" href="drivers_edit.php?user=<?php echo $userData->id; ?>" aria-expanded="false">
							<i class="mdi mdi-account"></i>
							<span class="hide-menu"> <?php echo $lang['leftorder195'] ?> </span>
						</a>
					</li>


					<li class="sidebar-item">
						<a class="sidebar-link waves-effect waves-dark sidebar-link" href="logout.php" aria-expanded="false">
							<i class="fa fa-power-off m-r-5 m-l-5"></i>
							<span class="hide-menu"><?php echo $lang['wout'] ?></span>
						</a>
					</li>
				</ul>
			<?php } ?>
		</nav>
		<!-- End Sidebar navigation -->
	</div>
	<!-- End Sidebar scroll-->
</aside>