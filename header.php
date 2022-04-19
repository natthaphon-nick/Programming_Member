<?php
    /*include('conn/config.php');
    ini_set('display_errors', 1);
    error_reporting(~0);*/
?>




<div class="navbar navbar-expand-md navbar-dark" style="background: #339966;">
		<div>
			<a href="index.php" class="d-inline-block">
				<!-- <img src="global_assets/images/logo_light.png" alt=""> image -->
			</a>
		</div>

		<div class="d-md-none">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
				<i class="icon-tree5"></i>
			</button>
			<button class="navbar-toggler sidebar-mobile-main-toggle" type="button">
				<i class="icon-paragraph-justify3"></i>
			</button>
		</div>
        
        <div class="collapse navbar-collapse" id="navbar-mobile">
            

            <ul class="navbar-nav ml-md-auto">
                <li class="nav-item">
               <?php
                $strSQL = "SELECT * FROM User WHERE FullName = '".$_SESSION["id_end"]."'";
                $objQuery = mysqli_query($objConnect,$strSQL);
                $objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
                $_SESSION["id_end"] = $objResult["FullName"];
            ?>
                <span><?php echo $objResult["FullName"]; ?></span>
                <a href="logout.php" class="navbar-nav-link">
                <i class="icon-switch2"></i>Logout</span>
                </a>
                </li>
            </ul>
         </div>

	</div>