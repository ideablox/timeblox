<!doctype html>
<html lang="en">
<head>

  <title>TimeBlox {{{ $loginName or "joe" }}} </title>
  @include('common/header')

</head>

<body class="theme-default main-menu-animated {{{ $pageClass or ""  }}}">
<script>var init = [];</script>
<div id="main-wrapper">

@include('common/topnav')
@include('common/sidenav')

<div id="content-wrapper">
@yield('main')
</div> <!-- / #content-wrapper -->

@include('common/footer');

</div> <!-- /.main-wrapper -->

<!-- Get jQuery from Google CDN -->
<!--[if !IE]> -->
<script type="text/javascript"> window.jQuery || document.write('<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js">'+"<"+"/script>"); </script>
<!-- <![endif]-->
<!--[if lte IE 9]>
<script type="text/javascript"> window.jQuery || document.write('<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js">'+"<"+"/script>"); </script>
<![endif]-->

<script src="assets/javascripts/jquery.transit.min.js"></script>

<!-- Pixel Admin's javascripts -->
<script src="assets/javascripts/bootstrap.min.js"></script>
<script src="assets/javascripts/pixel-admin.min.js"></script>
<script src="assets/editable/js/bootstrap-editable.js"></script>

<script type="text/javascript">
	init.push(function () {
		// Javascript code here
	});
	window.PixelAdmin.start(init);
</script>
<script type="text/javascript">
$(document).ready(function() {
  $.fn.editable.defaults.mode = 'inline';
  $('#username').editable();
});
</script>
</body>
</html>


