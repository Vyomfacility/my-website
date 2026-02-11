<div class="pxl-icon--users icon-item h-btn-user ">
	<div class="icon-user">
		<svg version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
		width="45.532px" height="45.532px" viewBox="0 0 45.532 45.532" style="enable-background:new 0 0 45.532 45.532;"
		xml:space="preserve">
		<g>
			<path d="M22.766,0.001C10.194,0.001,0,10.193,0,22.766s10.193,22.765,22.766,22.765c12.574,0,22.766-10.192,22.766-22.765
			S35.34,0.001,22.766,0.001z M22.766,6.808c4.16,0,7.531,3.372,7.531,7.53c0,4.159-3.371,7.53-7.531,7.53
			c-4.158,0-7.529-3.371-7.529-7.53C15.237,10.18,18.608,6.808,22.766,6.808z M22.761,39.579c-4.149,0-7.949-1.511-10.88-4.012
			c-0.714-0.609-1.126-1.502-1.126-2.439c0-4.217,3.413-7.592,7.631-7.592h8.762c4.219,0,7.619,3.375,7.619,7.592
			c0,0.938-0.41,1.829-1.125,2.438C30.712,38.068,26.911,39.579,22.761,39.579z"/>
		</g></svg>
	</div>
	<div class="form-hover">
		<?php if(is_user_logged_in()) {  ?>
			<div class="pxl-modal pxl-user-popup">
				<div class="pxl-modal-content">
					<div class="pxl-user pxl-user-logged-in u-close">
						<div class="pxl-user-content">
							<?php echo do_shortcode('[bravis-user-form form_type="login"]'); ?>
						</div>
					</div>
				</div>
			</div>
		<?php }else { ?>
			<div class="wrap-button-action">
				<a class="btn-action act-login">
					<svg height="24" viewBox="0 0 152 152" width="24" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><linearGradient id="linear-gradient" gradientUnits="userSpaceOnUse" x1="22.26" x2="129.74" y1="22.26" y2="129.74"><stop offset="0" stop-color="#002b71"/><stop offset="1" stop-color="#001761"/></linearGradient><g id="Layer_2" data-name="Layer 2"><g id="_03.user_add" data-name="03.user_add"><rect id="background" fill="url(#linear-gradient)" height="152" rx="76" width="152"/><g id="icon" fill="#fff"><path d="m67.16 76.69h4.2a25.16 25.16 0 0 1 25.16 25.16 6.07 6.07 0 0 1 -6.07 6.07h-42.38a6.07 6.07 0 0 1 -6.07-6.07 25.16 25.16 0 0 1 25.16-25.16z"/><circle cx="69.26" cy="57.71" r="13.63"/><path d="m109.01 63.74v-8.99h-8.23v8.99h-8.99v8.23h8.99v8.99h8.23v-8.99h8.99v-8.23z"/></g></g></g></svg>
					<span><?php echo esc_html__('Log in with your Account','herrington') ?></span>
				</a>
				<a class="btn-action act-register">
					<svg  height="24" viewBox="0 0 520 520" width="24" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1"><g fill-rule="evenodd"><path d="m256.006 0c141.345 0 255.987 114.622 255.987 256.005s-114.642 255.995-255.987 255.995c-141.392 0-255.987-114.622-255.987-255.995s114.595-256.005 255.987-256.005z" fill="#ffc107"/><path d="m256.006 246.657a67.668 67.668 0 1 0 -67.652-67.664 67.756 67.756 0 0 0 67.652 67.664zm76.29 14.158a119.9 119.9 0 0 1 -152.581 0 149.714 149.714 0 0 0 -73.709 122.567.051.051 0 0 0 .022.011c49.01 11.836 99.588 17.287 149.978 17.287s100.978-5.447 150-17.285a149.712 149.712 0 0 0 -73.706-122.58z" fill="#fff"/></g></svg>
					<span><?php echo esc_html__('Register an Account','herrington') ?></span> 
				</a>
			</div>
		<?php } ?>
		<div class="wrap-form-action hide">
			<?php if(is_user_logged_in()) {  ?>
				<div class="pxl-modal pxl-user-popup">
					<div class="pxl-modal-content">
						<div class="pxl-user pxl-user-logged-in u-close">
							<div class="pxl-user-content">
								<?php echo do_shortcode('[bravis-user-form form_type="login"]'); ?>
							</div>
						</div>
					</div>
				</div>
			<?php }else { ?>
				<div class="pxl-user pxl-user-register hide">
					<div class="pxl-user-content">
						<h3 class="pxl-user-heading"><?php echo esc_html__('Register An Account', 'herrington'); ?></h3>
						<?php echo do_shortcode('[bravis-user-form form_type="register" is_logged="profile"]'); ?>  
						<div class="button-to-login">
							<a class="btn-sign-in"><span><?php echo esc_html__('Sign In Now', 'herrington'); ?></span></a>
						</div>
					</div>
				</div>
				<div class="pxl-user pxl-user-login hide ">
					<div class="pxl-user-content">
						<h3 class="pxl-user-heading"><?php echo esc_html_e($settings['title']); ?></h3>
						<?php echo do_shortcode('[bravis-user-form form_type="login" is_logged="profile"]'); ?>  
						<div class="button-to-register">
							<span><?php echo esc_html__('Not registered?', 'herrington'); ?> </span>
							<a class="btn-sign-up"><span><?php echo esc_html__('Create an account', 'herrington'); ?></span></a>
						</div>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
</div>