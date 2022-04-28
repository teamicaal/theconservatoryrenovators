<?php
	$redirect_to  = (isset($_GET['redirect_to']) ) ? $_GET['redirect_to'] : 0;
?>
<form name="loginform" id="loginform" action="<?php echo home_url(); ?>/wp/wp-login.php" method="post">
	<fieldset class="login-username mb-8">
		<label for="user_login" class="block text-sm mb-1 cursor-pointer">Username</label>
		<input class="w-full border border-gray-200 rounded p-4" type="text" name="log" id="user_login" class="form-control" value="" size="20" placeholder="Enter your username">
	</fieldset>
	<p class="login-password mb-8">
		<label for="user_pass" class="block text-sm mb-1 cursor-pointer">Password</label>
		<input class="w-full border border-gray-200 rounded p-4" type="password" name="pwd" id="user_pass" class="form-control" value="" size="20" placeholder="Enter your password">
	</fieldset>
	<div class="lg:flex lg:justify-between items-center">
    <div class="login-remember switch pull-xs-left mb-4 lg:mb-0">
  		<label class="form-control-label cursor-pointer">
  			<input name="rememberme" type="checkbox" id="rememberme" value="forever">
  			<span class="indicator"></span>
  			<span class="label">Remember Me</span>
  		</label>
  	</div>
  	<div class="login-submit text-xs-right">
  		<input type="submit" name="wp-submit" id="wp-submit" class="btn bg-primary text-white hover:bg-primary-dark block lg:inline-block w-full lg:w-auto cursor-pointer" value="Log In">
  		<?php if( $redirect_to ): ?>
  		<input type="hidden" name="redirect_to" value="<?php echo $redirect_to ?>">
  		<?php endif; ?>
  	</div>
  </div>
</form>