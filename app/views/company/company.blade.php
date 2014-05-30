@extends('layouts.base')
@section('main')

<div class="profile-full-name text-left">
  <span class="text-semibold">Sweet Tooth Care</span>'s company info.
</div>

<div class="profile-row">
<div class="left-col">

<div class="profile-block">
  <div class="panel profile-photo">
          <img src="assets/demo/avatars/5.jpg" alt="">
  </div>
</div>

<div class="panel panel-transparent">
    <div class="panel-heading">
            <span class="panel-title">About the company</span>
            <div class="panel-heading-controls">
            <span class="fa fa-pencil"></span>
            </div>
    </div>
    <div class="panel-body">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et <a href="#">dolore magna</a> aliqua.
    </div>
</div>

<div class="panel panel-transparent">
  <div class="panel-heading">
          <span class="panel-title">Statistics</span>
  </div>
  <div class="list-group">
          <a href="#" class="list-group-item">Opened on 3/12/12</a>
          <a href="#" class="list-group-item">32 employees</a>
          <a href="#" class="list-group-item">Next Payroll is on 3/15/14</a>
  </div>
</div>

</div> <!-- /.left-col -->

<?php
$colSm = 2;
$colBg = 9;
?>

<div class="right-col">
  <hr class="profile-content-hr no-grid-gutter-h">
  <div class="profile-content">
      <ul class="nav nav-tabs nav-tabs-simple">
              <li class="active">
              <a href="#contact" data-toggle="tab" class="text-bg">Contact</a>
              </li>
              <li>
              <a href="#security" data-toggle="tab" class="text-bg">Security & Access</a>
              </li>
              <li>
              <a href="#payroll" data-toggle="tab" class="text-bg">Payroll</a>
              </li>
      </ul>
    <div class="panel">
    <div class="panel-body tab-content">

    <div class="tab-pane fade active in" id="contact">

     <div class="form-group">
     <label for="inputPassword" class="col-sm-<?= $colSm ?> control-label text-right">Company name</label>
     <div class="col-sm-10">
     <a href="#" id="name" data-type="text" data-pk="1" data-title="Enter username" class="editable editable-click">{{ $company->name }}</a>
     </div></div>

     <div class="form-group">
     <label for="inputPassword" class="col-sm-<?= $colSm ?> control-label text-right">Login ID</label>
     <div class="col-sm-10">
     <a href="#" id="username" data-type="text" data-pk="1" data-title="Enter username" class="editable editable-click">{{ $company->username }}</a>
     </div></div>

     <div class="form-group">
     <label for="inputPassword" class="col-sm-2 control-label text-right">Address</label>
     <div class="col-sm-10">
{{ $company->address }} {{ $company->address2 }}
     </div></div>

     <div class="form-group">
     <label for="inputPassword" class="col-sm-2 control-label text-right">City</label>
     <div class="col-sm-10">
{{ $company->city }}
     </div></div>

     <div class="form-group">
     <label for="inputPassword" class="col-sm-2 control-label text-right">State</label>
     <div class="col-sm-10">
{{ $company->state }}
     </div></div>

     <div class="form-group">
     <label for="inputPassword" class="col-sm-2 control-label text-right">Zip&nbsp;code</label>
     <div class="col-sm-10">
{{ $company->zip1 }}
     </div></div>

     <div class="form-group">
     <label for="inputPassword" class="col-sm-2 control-label text-right">Time&nbsp;zone</label>
     <div class="col-sm-10">
@include('company/tz')
</div></div>
</div><!-- /id=contact -->

    <div class="tab-pane fade" id="security">
     <div class="form-group">
     <label for="inputPassword" class="col-sm-<?= $colSm ?> control-label text-right">Login ID</label>
     <div class="col-sm-10">
     <a href="#" id="username" data-type="text" data-pk="1" data-title="Enter username" class="editable editable-click">{{ $company->username }}</a>
     </div></div>

     <div class="form-group">
     <label for="inputPassword" class="col-sm-<?= $colSm ?> control-label text-right">Login ID</label>
     <div class="col-sm-10">
     <a href="#" id="username" data-type="text" data-pk="1" data-title="Enter username" class="editable editable-click">{{ $company->username }}</a>
     </div></div>
     </div><!-- /id=security -->

    <div class="tab-pane fade" id="more">
     <div class="form-group">
     <label for="inputPassword" class="col-sm-<?= $colSm ?> control-label text-right">Job roles</label>
     <div class="col-sm-10">
     <ul>
      <li>Dentist</li>
      <li>Dental Hygienist</li>
      <li>Dental Assistant</li>
      <li>Front Desk</li>
      </ul>
     </div></div>

     <div class="form-group">
     <label for="inputPassword" class="col-sm-<?= $colSm ?> control-label text-right">Payroll budget</label>
     <div class="col-sm-10">
     $1,500
     </div></div>

     <div class="form-group">
     <label for="inputPassword" class="col-sm-<?= $colSm ?> control-label text-right">Pay Period</label>
     <div class="col-sm-10">
     <select name="payFrequency" id="payFrequency" ><option value="7" selected="">Every Week</option><option value="14">Every Other Week</option><option value="15">Twice a Month</option><option value="30">Every Month</option></select>
     </div></div>

     <div class="form-group">
     <label for="inputPassword" class="col-sm-<?= $colSm ?> control-label text-right">Pay Date</label>
     <div class="col-sm-10">
     Next payday is 5/3/14.
     </div></div>


     <div class="form-group">
     <label for="inputPassword" class="col-sm-<?= $colSm ?> control-label text-right">Overtime</label>
     <div class="col-sm-10">
     Yes, after 8 hours/day and 40 hours/week.
     </div></div>

     </div><!-- /id=security -->

    </div><!-- /.panel-body -->
    </div><!-- /.panel -->

    <div class="row">
      <div class="col-sm-6">
<div class="stat-panel">
  <!-- Success background. vertically centered text -->
  <div class="stat-cell valign-middle bg-warning" style=" border: 1px solid #ececec">
      <i class="fa fa-rocket bg-icon"></i>
      <span><strong>Admins</strong></span><br>
      <span class="text-sm"><a href="" style="color:#1a7ab9">Jessica Nien</a>, Joe Black</span><br>
  </div> <!-- /.stat-cell -->
</div> <!-- /.stat-panel -->
      </div>

      <div class="col-sm-6">
<div class="stat-panel">
  <!-- Success background. vertically centered text -->
  <div class="stat-cell valign-middle" style="background-color:#fafafa; border: 1px solid #ececec">
      <!-- Stat panel bg icon -->
      <span><strong>Last Payroll</strong></span><br>
      <span class="text-sm">65 hours</span><br>
  </div> <!-- /.stat-cell -->
</div> <!-- /.stat-panel -->
      </div>

    </div>

  </div> <!-- /.profile-content -->

</div> <!-- /.right-col -->

</div><!-- /.profile-row -->

@stop

