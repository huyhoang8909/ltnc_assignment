<!-- ========================================= MAIN ========================================= -->
<main id="authentication" class="inner-bottom-md">
	<?php if (validation_errors()) :?>
	<div class="row-fluid">
		<div class="span12">
			<div class="alert alert-error fade in">
			  <a data-dismiss="alert" class="close">&times;</a>
				<?php echo validation_errors(); ?>
			</div>
		</div>
	</div>
	<?php endif; ?>
	<div class="container">
		<div class="row">
			
			<div class="col-md-offset-3 col-md-6">
				<section class="section sign-in inner-right-xs">
					<h2 class="bordered">Login</h2>
					<p><?php echo Template::message(); ?></p>

<!-- 					<div class="social-auth-buttons">
						<div class="row">
							<div class="col-md-6">
								<button class="btn-block btn-lg btn btn-facebook"><i class="fa fa-facebook"></i> Sign In with Facebook</button>
							</div>
							<div class="col-md-6">
								<button class="btn-block btn-lg btn btn-twitter"><i class="fa fa-twitter"></i> Sign In with Twitter</button>
							</div>
						</div>
					</div> -->
					<?php echo form_open(LOGIN_URL, array('autocomplete' => 'off', 'class' => 'login-form cf-style-1')); ?>

						<div class="field-row <?php echo iif( form_error('login') , 'error') ;?>">
                            <label>Email</label>
                            <input type="text" class="le-input" name="login" id="login_value" value="<?php echo set_value('login'); ?>" placeholder="<?php echo $this->settings_lib->item('auth.login_type') == 'both' ? lang('bf_username') .'/'. lang('bf_email') : ucwords($this->settings_lib->item('auth.login_type')) ?>">
                        </div><!-- /.field-row -->

                        <div class="field-row <?php echo iif( form_error('password') , 'error') ;?>">
                            <label>Mật khẩu</label>
                            <input type="password" class="le-input" name="password" id="password" value="" placeholder="<?php echo lang('bf_password'); ?>">
                        </div><!-- /.field-row -->

                        <div class="field-row clearfix">
                        	<?php if ($this->settings_lib->item('auth.allow_remember')) : ?>
	                        	<span class="pull-left">
	                        		<label class="content-color">
	                        			<input type="checkbox" name="remember_me" id="remember_me" value="1" class="le-checbox auto-width inline"> <span class="bold"><?php echo lang('us_remember_note'); ?></span>
	                        		</label>
	                        	</span>
                        	<?php endif; ?>
                        	<span class="pull-right">
                        		<?php echo anchor('/forgot_password', lang('us_forgot_your_password'), array('class' => 'content-color bold')); ?>
                        	</span>
                        </div>
                        

                        <div class="buttons-holder">
                            <input class="le-button huge" type="submit" name="log-me-in" id="submit" value="Đăng nhập" />
                            <a href="/register" class="le-button huge">Đăng ký</a>
                        </div><!-- /.buttons-holder -->
					<?php echo form_close(); ?><!-- /.cf-style-1 -->
                    
				</section><!-- /.sign-in -->
			</div><!-- /.col -->


		</div><!-- /.row -->
	</div><!-- /.container -->
</main><!-- /.authentication -->
<!-- ========================================= MAIN : END ========================================= -->