<?php 
$dpwapObj = new dpwapuploader();
if($_GET['page']=="activate-status") { 
if(isset($_POST['dpid']) && $_POST['dpid']>0){  ?>
<div id="sm_status" class="wrap pc-wrap dpwap-box-wrap">
	 <div id="mpiblock">
		<div class="postbox">
				<h3 class="hndle"><span><?php _e('Activation Status','dpwap'); ?></span></h3>
				  <div class="inside">
					<?php $dpwapObj->dpwap_plugin_all_activate(); 
                     delete_option("dpwap_plugins");
					?>
				</div>
				<span><a class='' href="plugin-install.php"><input type="button" class="button button-primary" value="Return to Plugin Installer"></span>
			</div>		
		</div>
	</div>
</div>
<?php } } ?>
   
	      