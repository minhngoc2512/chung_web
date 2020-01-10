<?php  
$dpwapObj = new dpwapuploader();
echo '<style>.notice { display: none; }</style>';
echo '<style>#dolly { display: none; }</style>';
if(isset($_POST['dpid']) && $_POST['dpid']>0){ 
	$dpwapObj->dpwap_plugin_all_activate();
}
if($_GET['page']=="mul_upload") { 
	$max_size_upload = (int)(ini_get('upload_max_filesize'));
?>
<div class="wrap pc-wrap">
	<div class="mpiicon icon32"></div>
	<div id="mpiblock">
		<div><?php if($dpwapObj->dpwap_app_DirTesting()){} else{ _e('<div class="mpi_error">oops!!! Seems like the directory permission are not set right so some functionalities of plugin will not work.<br/>Please set the directory permission for the folder "uploads" inside "wp-content" directory to 777.</div>','dpwap'); } ?></div>
		
		<div id="dpwap-plugin-box" class="dpwap-meta-box">
			<div class="postbox">
				<div class="handlediv" title="Click to toggle"><br/></div>
				<div id="dpwap-plugin-zipbox">
				<h3 class="hndle"><span><?php _e('You can select and upload multiple Plugins in .zip format','dpwap'); ?></span></h3>
									<br/>
					<form class="dpwap_multiple_upload_form" onsubmit="return check_valid_zipfile('dpwap_locFiles',<?php echo $max_size_upload; ?>);" name="form_uppcs" method="post" action="" enctype="multipart/form-data">
						<?php wp_nonce_field($dpwapObj->key); ?>
						<div class="upload-section-btn">					
							<input type="file" class="mpi_left middle sm_select_file" name="dpwap_locFiles[]" id="dpwap_locFiles" multiple="multiple"/>
							<input id="install_button" class="button mpi_button sm_btn_hide" type="submit" name="dpwap_locInstall" value="<?php _e('Install Now','dpwap'); ?>"  />
							<div class="dpwap_clear"></div>
						</div>
					</form>
				</div>
				<div class="inside">
					<?php
						if (isset($_POST['dpwap_locInstall']) && $_FILES['dpwap_locFiles']['name'][0] != ""){
							echo '<form id="form_alldpwap" name="form_alldpwap" method="post" action="admin.php?page=activate-status">';
							echo "<div class='dpwap_main'>";
							$dpwapObj->dpwap_plugin_locInstall();
							echo "</div>";
							echo '<input class="button button-primary dpwap_allactive" type="submit" name="dpwap_locInstall" onclick="activateAllPLugins()" value="Activate all">';
							echo '</form>';
						}
					?>
				</div>
			</div>		
		</div>
	</div>
</div>

<div class="containerul">
<h1 style="colour : #fff;">Uploading is in progress...</h1>
 <ul class="uploadLoader">
      <li></li><li></li><li></li><li></li><li></li><li></li>
 </ul>
</div>

<script type="text/javascript">
		jQuery(document).ready(function(){
	  jQuery('.sm_btn_hide').attr("disabled", "disabled");

        jQuery('input[type="file"]').change(function(e){
            var fileName = e.target.files[0].name;
            		jQuery('.sm_btn_hide').removeAttr("disabled", "disabled");

        });
	  });
	

</script>
<?php }  ?>
       


