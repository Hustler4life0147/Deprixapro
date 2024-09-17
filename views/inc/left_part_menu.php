	<style>
		.menutext {
			color: #666;
			overflow: hidden;
		}
	</style>

	<aside class="left-part">
		<a class="ti-menu ti-close btn btn-success show-left-part d-block d-md-none" href="javascript:void(0)"></a>
		<div class="scroll-sidebar">

			<div class="p-15">
				<a id="compose_mail" class="waves-effect waves-light btn btn-danger d-block" href=""><?php echo $lang['apis04'] ?></a>
			</div>

			<div class="divider"></div>
			<!-- Sidebar navigation-->
			<nav class="sidebar-nav idebar-collapse">

				<?php if ($userData->userlevel == 9) { ?>

					<ul class="list-group" id="sidebarnav">

						<li>
							<small class="p-15 grey-text text-lighten-1 db"></small>
						</li>
						<li class="list-group-item sidebar-item">
							<a href="tools.php?list=config_general" class="list-group-item-action"><i class="mdi mdi-settings-box"></i> <?php echo $lang['left601'] ?></a>
						</li>
						<li class="list-group-item sidebar-item">
							<a href="tools.php?list=config" class="list-group-item-action"><i class="mdi mdi-briefcase-check"></i> <?php echo $lang['setcompany'] ?></a>
						</li>
						<li class="list-group-item sidebar-item">
							<a href="tools.php?list=configlogo" class="list-group-item-action"><i class="fab fa-gg"></i> <?php echo $lang['setcompanylogo'] ?></a>
						</li>
						<li class="list-group-item sidebar-item">
							<a href="tools.php?list=config_email" class="list-group-item-action"><i class="mdi mdi-email"></i> <?php echo $lang['leftemail'] ?></a>
						</li>

						<li class="list-group-item  sidebar-item">
							<a href="config_whatsapp.php" class="list-group-item-action">
								<b><i class="fab fa-whatsapp" style="font-size: 16px;"></i></b>
								<?php echo $lang['ws-add-text22'] ?>
							</a>
						</li>

						<li class="list-group-item  sidebar-item">
							<a href="config_sms.php" class="list-group-item-action">
								<b><i class="fab fa-weixin" style="font-size: 16px;"></i></b>
								<?php echo $lang['ws-add-text30'] ?>
							</a>
						</li>

						<li class="list-group-item sidebar-item">
							<a class="list-group-item-action has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
								<i class="mdi mdi-playlist-plus"></i>
								<span class="menutext">
									<?php echo $lang['ws-add-text27'] ?>
							</a>
							<ul aria-expanded="false" class="collapse  first-level">
								<li class="list-group-item sidebar-item">
									<a href="templates_email.php" class="sidebar-link">
										<i class="mdi mdi-check" style="color:#E0206D"></i>
										<span class="menutext">
											<?php echo $lang['ws-add-text28'] ?>
										</span>
									</a>
								</li>

								<li class="list-group-item sidebar-item">
									<a href="templates_whatsapp.php" class="sidebar-link">
										<i class="mdi mdi-check" style="color:#E0206D"></i>
										<span class="menutext">
											<?php echo $lang['ws-add-text29'] ?>
										</span>
									</a>
								</li>

								<li class="list-group-item sidebar-item">
									<a href="templates_sms.php" class="sidebar-link">
										<i class="mdi mdi-check" style="color:#E0206D"></i>
										<span class="menutext">
											<?php echo $lang['left1115'] ?>
										</span>
									</a>
								</li>
							</ul>
						</li>


						<li class="list-group-item sidebar-item">
							<a class="list-group-item-action has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
								<i class="mdi mdi-playlist-plus"></i>
								<span class="menutext">
									<?php echo $lang['ws-add-text26'] ?>
							</a>
							<ul aria-expanded="false" class="collapse  first-level">
								<!-- <li class="list-group-item sidebar-item">
								<a href="templates_email.php" class="sidebar-link">
									<i class="mdi mdi-check"></i>
									<span class="menutext">
										Email
									</span>
								</a>
							</li> -->

								<li class="list-group-item sidebar-item">
									<a href="templates_default.php" class="sidebar-link">
										<i class="mdi mdi-check" style="color:#E0206D"></i>
										<span class="menutext">
											WhatsApp
										</span>
									</a>
								</li>
							</ul>
						</li>

						<li class="list-group-item">
							<hr>
						</li>

					</ul>

				<?php } ?>
			</nav>
		</div>
	</aside>