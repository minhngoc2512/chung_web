<!-- Modal -->
<div id="dpwap_modal" class="modal fade" tabindex="-1">
	<div class="modal-dialog">
		<div class="modal-content">
		<!-- sk section first page start -->
			<div class="dpwap_section_first" id="dpwap_section_first">
			 <div class="modal-head">
				<button class="close" type="button" data-dismiss="modal">×</button>
				<div class="img_block dpwap-head">
                                    <div class="dpwap-head-left">
                                        <div class="dpwap-head-title">Download Plugin  </div>
                                        <span class="dpwap-version-info"><span>NEW</span> V1.5</span>
                                    </div >
                                    <div class="dpwap-head-right">
                                        <img src="<?php echo plugin_dir_url( __FILE__ ) . 'images/dpwap-head-img.png'; ?>">
                                    </div>
                                    
                                    
                                    
					
				</div>
                                
                                <h4 class="modal-title">What’s New!</h4>
			 </div>
			 <div class="modal-body">
				<!-- body start -->
			     <div class="row">
		            <!-- left column -->
		            <div class="col-dpwap-4"><img src="<?php echo plugin_dir_url( __FILE__ ) . 'images/dpwap-feature1-img.png'; ?>"></div>
		            <!-- right column -->
		            <div class="col-dpwap-8">
                     <h4>Download multiple plugins simultaneously </h4>
                     <p>Download plugin is now integrated better than ever with WordPress Installed Plugins page! We have added a new option in Bulk Actions dropdown, called Download. It means, you can now check more than one plugin and bulk download them simultaneously. 
                     </p>
		            </div>
		          </div>
		          <div class="row">
		            <!-- left column -->
		            <div class="col-dpwap-4"><img src="<?php echo plugin_dir_url( __FILE__ ) . 'images/dpwap-feature2-img.png'; ?>"></div>
		            <!-- right column -->
		            <div class="col-dpwap-8">
		             <h4>Upload, install and activate multiple plugins </h4>
                     <p>Since we have added functionality to download multiple plugins, it only made sense to allow you to install multiple plugins simultaneously too. So now when you go to Add New page in WordPress Plugins menu, you will see a new button called Install Multiple Plugins! Using this, you can multi-select more than one plugin zip from your computer and upload them with a single click! You will also have option to activate them selectively or all together. 
                     </p>
                 </div>
		          </div>
		           <div class="modal-footer">
		           	<span class="footer_note">If you wish to know more about how to use these new feature, please <a href="https://metagauss.com/download-plugin-guide/" target="blank">read our guide.</a></span>
			       <button class="btn btn-default" id="next_first" type="button">Want More Features?</button>
				</div>
                </div>
                </div>
             <!-- sk section first page end -->
             <!-- sk section second page start -->
				   <div class="dpwap_section_second" id="dpwap_section_second" style="display: none;">
				   	 <div class="modal-head">
				<button class="close" type="button" data-dismiss="modal">×</button>
					<h4 class="modal-title">Select the features you wish to add:</h4>
				</div>
			 <div class="modal-body">
				<!-- body start -->
                    <div class="row">
		            <!-- left column -->
		            <div class="col-dpwap-4">
		              <ul>
		            	<li><input type="checkbox" name="feature" value="1"> Download installed themes</li>
		            	<li><input type="checkbox" name="feature" value="2"> Add contact form </li>
		            	<li><input type="checkbox" name="feature" value="3"> Notified when someone fills form on your site </li>
		            	<li><input type="checkbox" name="feature" value="4"> Add user registration form </li>
		            	<li><input type="checkbox" name="feature" value="5"> Add secure login box </li>
		            	<li><input type="checkbox" name="feature" value="6"> Add private user account area </li>
		            </ul>

		            	
		            </div>
		            <!-- right column -->
		            <div class="col-dpwap-4">
                     <ul>
		            	<li><input type="checkbox" name="feature" value="7"> Check form submissions in dashboard </li>
		            	<li><input type="checkbox" name="feature" value="8"> Suspend users </li>
		            	<li><input type="checkbox" name="feature" value="9"> Add user profiles </li>
		            	<li><input type="checkbox" name="feature" value="10"> Allow users to upload profile pics </li>
		            	<li><input type="checkbox" name="feature" value="11"> Add additional fields to user profiles </li>
		            	<li><input type="checkbox" name="feature" value="12"> Create user groups </li>
		            </ul>
                    
		            </div>
		             <div class="col-dpwap-4">
                     <ul>
		            	<li><input type="checkbox" name="feature" value="13"> Allow users to submit blogs </li>
		            	<li><input type="checkbox" name="feature" value="14"> Add private messaging </li>
		            	<li><input type="checkbox" name="feature" value="15"> Publish user directories </li>
		            	<li><input type="checkbox" name="feature" value="16"> Publish events on site </li>
		            	<li><input type="checkbox" name="feature" value="17"> Allow users to book events </li>
		            </ul>
                    
		            </div>
		          </div>
              	<div class="modal-footer">
			    <button class="btn btn-default" id="next_second" type="button">Next</button>
				</div>
				</div>
			</div>
			<!-- sk section second page end -->
			<!-- sk section third page start -->
				<div class="dpwap_section_third" id="dpwap_section_third" style="display: none;">
					 <div class="modal-head">
				<button class="close" type="button" data-dismiss="modal">×</button>
				    <span id="thirdLoading"></span>
					<h4 id="title_third" class="modal-title"></h4>
				</div>
			
			 <div class="modal-body">
				<!-- body start -->
				<form action="admin.php?page=dpwap-activate" id="dpwapActivate" method="post">
				<input type="hidden" name="featureSubmit" value="yes">	
                <div id="dpwap_third_inner"></div>
		        <div class="modal-footer">
		        <button class="btn btn-default" id="back_second" type="button">&larr; &nbsp;Back</button>	
			    <button class="btn btn-default" id="feature_activate" onclick="activateFeaturePLugins();" type="button">Install and Activate</button>
				</div>
				</form>	
                </div>
                </div>
             <!-- sk section third page end -->
                 <!-- Body end -->
				</div>
			</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
<!-- /.modal -->