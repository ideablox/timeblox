<!-- 4. $MAIN_MENU ================================================================================= -->
<div id="main-menu" role="navigation">
  <div id="main-menu-inner">
    <div class="menu-content top" id="menu-content-demo">
    <div>
    <div class="text-bg"><span class="text-slim">Hi,</span> <span class="text-semibold">{{ Session::get('loginName') }}</span></div>

    <img src="assets/images/person-grey.png" alt="" class="">
    <div class="btn-group">
        <a href="#" class="btn btn-xs btn-primary btn-outline dark"><i class="fa fa-envelope"></i></a>
        <a href="#" class="btn btn-xs btn-primary btn-outline dark"><i class="fa fa-user"></i></a>
        <a href="#" class="btn btn-xs btn-primary btn-outline dark"><i class="fa fa-cog"></i></a>
    </div>
    <a href="#" class="close">&times;</a>
  </div>
</div>
<ul class="navigation">
<li>
  <a href="/dashboard"><i class="menu-icon fa fa-dashboard"></i><span class="mm-text">Dashboard</span></a>
</li>
<li>
  <a href="/time"><i class="menu-icon fa fa-check-square"></i><span class="mm-text">Check In & Out</span></a>
</li>
<li>
  <a href="/hours"><i class="menu-icon fa fa-clock-o"></i><span class="mm-text">Your Hours</span></a>
</li>
<li>
  <a href="/stats"><i class="menu-icon fa fa-table"></i><span class="mm-text">Your Reports</span></a>
</li>
<li>
  <a href="/you"><i class="menu-icon fa fa-user"></i><span class="mm-text">Your Info.</span></a>
</li>
<li>
  <a href="/team"><i class="menu-icon fa fa-users"></i><span class="mm-text">Your Team</span></a>
</li>
<li>
  <a href="/company"><i class="menu-icon fa fa-users"></i><span class="mm-text">Your Company</span></a>
</li>
</ul> <!-- / .navigation -->

<div class="menu-content">
  <a href="/time" class="btn btn-primary btn-block  dark">Check In at 4 pm</a>
</div>

  </div> <!-- / #main-menu-inner -->
</div> <!-- / #main-menu -->
<!-- /4. $MAIN_MENU -->

