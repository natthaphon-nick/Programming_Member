<?php
	include('conn/config.php');
	ini_set('display_errors', 1);
	error_reporting(~0);
	
?>
<div class="sidebar sidebar-light sidebar-main sidebar-expand-md"style="background: #339966;">

			<!-- Sidebar mobile toggler -->
			<div class="sidebar-mobile-toggler text-center">
				<a href="#" class="sidebar-mobile-main-toggle">
					<i class="icon-arrow-left8"></i>
				</a>
				Navigation
				<a href="#" class="sidebar-mobile-expand">
					<i class="icon-screen-full"></i>
					<i class="icon-screen-normal"></i>
				</a>
			</div>
			<!-- /sidebar mobile toggler -->
			<?php
			
			
			
			?>

				<!-- Main navigation -->
				<div class="card card-sidebar-mobile "style="background: #339966;">
					<ul class="nav nav-sidebar" data-nav-type="accordion">
						<!-- Main -->
						<li class="nav-item-header"><div class="text-light text-uppercase font-size-xs line-height-xs">Menu</div> <i class="icon-menu" title="Menu"></i></li>
						<li class="nav-item"><a href="list_Member.php" class="nav-link text-light"><i class="icon-user"></i>List Account</a></li>
						<li class="nav-item"><a href="adduser.php" class="nav-link text-light"><i class="icon-user-plus"></i>Register</a></li>
	
						<!-- /main -->		

					</ul>
				</div>
				<!-- /main navigation -->
			
		</div>
		
		
