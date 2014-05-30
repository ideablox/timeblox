<!DOCTYPE html>
<!--[if IE 8]>         <html class="ie8"> <![endif]-->
<!--[if IE 9]>         <html class="ie9 gt-ie8"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="gt-ie8 gt-ie9 not-ie"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>TimeBlox Sign In</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">

	<!-- Open Sans font from Google CDN -->
        <?php 
        /***
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,600,700,300&subset=latin" rel="stylesheet" type="text/css">
        **/ ?>

	<!-- Pixel Admin's stylesheets -->
	<link href="assets/stylesheets/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="assets/stylesheets/pixel-admin.min.css" rel="stylesheet" type="text/css">
	<link href="assets/stylesheets/pages.min.css" rel="stylesheet" type="text/css">
	<link href="assets/stylesheets/rtl.min.css" rel="stylesheet" type="text/css">
	<link href="assets/stylesheets/themes.min.css" rel="stylesheet" type="text/css">

	<!--[if lt IE 9]>
		<script src="assets/javascripts/ie.min.js"></script>
	<![endif]-->


</head>

<body class="theme-default page-signin">

<script>
var init = [];
</script>

	<!-- Container -->
	<div class="signin-container">

		<!-- Left side -->
		<div class="signin-info">
			<a href="index.html" class="logo">
				<img src="assets/demo/logo-big.png" alt="" style="margin-top: -5px;">&nbsp;
			TimeBlox	
			</a> <!-- / .logo -->
			<div class="slogan">
				Simple. Flexible. Powerful.
			</div> <!-- / .slogan -->
			<ul>
				<li><i class="fa fa-sitemap signin-icon"></i> Intuitive to use</li>
				<li><i class="fa fa-heart signin-icon"></i> Crafted with love</li>
			</ul> <!-- / Info list -->
		</div>
		<!-- / Left side -->

		<!-- Right side -->
		<div class="signin-form">

			<!-- Form -->
			<form action="/signin" id="signin-form_id" method="POST">
				<div class="signin-text">
					<span>Create a company account</span>
				</div> <!-- / .signin-text -->


				<div class="form-group w-icon">
					<input type="text" name="signup_name" id="name_id" class="form-control input-lg" placeholder="Company Name">
					<span class="fa fa-info signin-form-icon"></span>
				</div>

				<div class="form-group w-icon">
					<input type="text" name="signup_username" id="username_id" class="form-control input-lg" placeholder="Company ID">
					<span class="fa fa-user signin-form-icon"></span>
				</div>

				<div class="form-group w-icon">
					<input type="password" name="signin_password" id="password_id" class="form-control input-lg" placeholder="Password">
					<span class="fa fa-lock signin-form-icon"></span>
				</div> <!-- / Password -->

				<div class="form-group" style="margin-top: 20px;margin-bottom: 20px;">
					<label class="checkbox-inline">
						<input type="checkbox" name="signup_confirm" class="px" id="confirm_id">
						<span class="lbl">I agree with the <a href="#" target="_blank">Terms and Conditions</a></span>
					</label>
				</div>


				<div class="form-actions">
				<a href="javascript:void(0)" data-loading-text="Creating ..."  class="signin-with-btn" style="background:#4f6faa;background:rgba(79, 111, 170, .8);">SIGN UP</a>
				</div> <!-- / .form-actions -->
			</form>
			<!-- / Form -->

			<!-- "Sign In with" block -->
			<div class="signin-with">
					<a href="#" class="forgot-password" id="forgot-password-link">Forgot your password?</a>
			</div>
			<!-- / "Sign In with" block -->

			<!-- Password reset form -->
			<div class="password-reset-form" id="password-reset-form">
				<!-- Form -->
				<form action="index.html" id="password-reset-form_id">
					<div class="signin-text">
						<span>Now add people for your company</span>
					</div> <!-- / .signin-text -->
				
					<div class="form-group w-icon">
						<input type="text" name="password_reset_email" id="p_email_id" class="form-control input-lg" placeholder="First Name">
						<span class="fa fa-envelope signin-form-icon"></span>
					</div> <!-- / Email -->

					<div class="form-group w-icon">
						<input type="text" name="password_reset_email" id="p_email_id" class="form-control input-lg" placeholder="Last Name">
						<span class="fa fa-envelope signin-form-icon"></span>
					</div> <!-- / Email -->

                                        <div class="form-group w-icon">
                                        <input type="password" name="signin_password" id="password_id" class="form-control input-lg" placeholder="Password">
                                        <span class="fa fa-lock signin-form-icon"></span>
                                        </div> <!-- / Password -->

				<div class="form-actions">
				<a href="javascript:void(0)" class="signin-with-btn" style="background:#4f6faa;background:rgba(79, 111, 170, .8);">ADD THESE PEOPLE</a>
				</div> <!-- / .form-actions -->
				</form>
				<!-- / Form -->
			</div>
			<!-- / Password reset form -->
		</div>
		<!-- Right side -->
	</div>
	<!-- / Container -->

<!-- Get jQuery from Google CDN -->
<!--[if !IE]> -->
	<script type="text/javascript"> window.jQuery || document.write('<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js">'+"<"+"/script>"); </script>
<!-- <![endif]-->
<!--[if lte IE 9]>
	<script type="text/javascript"> window.jQuery || document.write('<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js">'+"<"+"/script>"); </script>
<![endif]-->


<!-- Pixel Admin's javascripts -->
<script src="assets/javascripts/bootstrap.min.js"></script>
<script src="assets/javascripts/pixel-admin.min.js"></script>

<script type="text/javascript">
	// Show/Hide password reset form on click
	init.push(function () {
		$('#forgot-password-link').click(function () {
			$('#password-reset-form').fadeIn(400);
			return false;
		});
		$('#password-reset-form .close').click(function () {
			$('#password-reset-form').fadeOut(400);
			return false;
		});
	});

	// Setup Sign In form validation
	init.push(function () {
		$("#signin-form_id").validate({ focusInvalid: true, errorPlacement: function () {} });
		
		// Validate password
		$("#password_id").rules("add", {
			required: true,
			minlength: 3
		});

                $(".signin-with-btn").click(function() {
                  $("#signin-form_id").submit();
                });
	});

	// Setup Password Reset form validation
	init.push(function () {
		$("#password-reset-form_id").validate({ focusInvalid: true, errorPlacement: function () {} });
		
		// Validate email
		$("#p_email_id").rules("add", {
			required: true,
			email: true
		});
	});

	window.PixelAdmin.start(init);
</script>

</body>
</html>
