<?php
$featureObj = new dpwapuploader();
	if(isset($_POST['featureSubmit']) && $_POST['featureSubmit']=='yes'){
	// $_POST['download_theme'];
	 $plugins = array();
	 if($_POST['download_theme']==1){
	 	$plugins[]='https://downloads.wordpress.org/plugin/download-theme.1.0.4.zip';
	 }
	 if($_POST['registration_magic']==1){
	   $plugins[] = 'https://downloads.wordpress.org/plugin/custom-registration-form-builder-with-submission-manager.zip';
	 }
	 if($_POST['profile_grid']==1){
	    $plugins[] = 'https://downloads.wordpress.org/plugin/profilegrid-user-profiles-groups-and-communities.zip';
	 }
	 if($_POST['event_prime']==1){
	    $plugins[] = 'https://downloads.wordpress.org/plugin/eventprime-event-calendar-management.1.2.4.zip';
	 }
     
     if(!is_dir(DPWAPUPLOADDIR_PATH.'/dpwap_logs/files/tmp')){
		  $feat_upload_dir = DPWAPUPLOADDIR_PATH . '/dpwap_logs/files/tmp';
          mkdir($feat_upload_dir, 0777,true);
	 }

	$temp_upload_dir = DPWAPUPLOADDIR_PATH . '/dpwap_logs/files/tmp';
	foreach ($plugins as $pkgPath) {
	$pluginName=basename($pkgPath);
	$destination_path = $temp_upload_dir."/".$pluginName;
	file_put_contents($destination_path, fopen($pkgPath, 'r'));
	$dpwap_tempurls[]=$destination_path;
	}
	if($dpwap_tempurls)
	$featureObj->dpwap_get_packages($dpwap_tempurls,"package_activate","nocreate","package_activate");

}	

?>