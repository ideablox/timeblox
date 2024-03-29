<!-- 2. $MAIN_NAVIGATION ===========================================================================

	Main navigation
-->
	<div id="main-navbar" class="navbar navbar-inverse" role="navigation">
		<!-- Main menu toggle -->
		<button type="button" id="main-menu-toggle"><i class="navbar-icon fa fa-bars icon"></i><span class="hide-menu-text">HIDE MENU</span></button>
		
		<div class="navbar-inner">
			<!-- Main navbar header -->
			<div class="navbar-header">

				<!-- Logo -->
				<a href="index.html" class="navbar-brand">
					<div><img alt="TimeBlox" src="assets/images/pixel-admin/main-navbar-logo.png"></div>
				 TimeBlox	
				</a>

				<!-- Main navbar toggle -->
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-navbar-collapse"><i class="navbar-icon fa fa-bars"></i></button>

			</div> <!-- / .navbar-header -->

			<div id="main-navbar-collapse" class="collapse navbar-collapse main-navbar-collapse">
				<div>
					<ul class="nav navbar-nav">
						<li>
							<a href="#"><strong>Today is {{ date('n/d/y ', time()); }}</strong></a>
						</li>
					</ul> <!-- / .navbar-nav -->

					<div class="right clearfix">
						<ul class="nav navbar-nav pull-right right-navbar-nav">

<!-- 3. $NAVBAR_ICON_BUTTONS =======================================================================
Navbar Icon Buttons

NOTE: .nav-icon-btn triggers a dropdown menu on desktop screens only. On small screens .nav-icon-btn acts like a hyperlink.

Classes:
* 'nav-icon-btn-info'
* 'nav-icon-btn-success'
* 'nav-icon-btn-warning'
* 'nav-icon-btn-danger' 
-->
<!-- /3. $END_NAVBAR_ICON_BUTTONS -->

      <li class="dropdown">
              <a href="#" class="dropdown-toggle user-menu" data-toggle="dropdown">
                      <img src="assets/images/person-blue.png" alt="">
                      <span>{{ Session::get('loginName') }}</span>
              </a>
              <ul class="dropdown-menu">
                      <li><a href="#"><span class="label label-warning pull-right">New</span>Profile</a></li>
                      <li><a href="#"><span class="badge badge-primary pull-right">New</span>Account</a></li>
                      <li><a href="#"><i class="dropdown-icon fa fa-cog"></i>&nbsp;&nbsp;Settings</a></li>
                      <li class="divider"></li>
                      <li><a href="pages-signin.html"><i class="dropdown-icon fa fa-power-off"></i>&nbsp;&nbsp;Log Out</a></li>
              </ul>
      </li>
                          </ul> <!-- / .navbar-nav -->
                  </div> <!-- / .right -->
          </div>
  </div> <!-- / #main-navbar-collapse -->
</div> <!-- / .navbar-inner -->
	</div> <!-- / #main-navbar -->
<!-- /2. $END_MAIN_NAVIGATION -->

