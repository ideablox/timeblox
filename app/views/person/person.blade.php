@extends('layouts.base')
@section('main')
{{-- */ $isEdit = Input::get('edit'); /* --}}

<div class="profile-full-name text-left" style="padding-left:30px">
  <span class="text-semibold">{{ Session::get('loginName') }}</span>'s profile
</div>

<div class="profile-row">

<div class="col-sm-8">
  <hr class="profile-content-hr no-grid-gutter-h">
  <div class="profile-content">
      <ul class="nav nav-tabs nav-tabs-simple">
              <li class="active">
              <a href="#contact" data-toggle="tab" class="text-bg">Basics</a>
              </li>
              <li>
              <a href="#security" data-toggle="tab" class="text-bg">Security & Access</a>
              </li>
      </ul>
   </div>

<?php
$colSm = 3;
$colBg = 8;
?>
<style>
label { margin-top: 6px; }
@if (!$isEdit)
.form-group div { margin-top: 7px; }
@endif
</style>
    <div class="panel">
    <div class="panel-body tab-content">

    <div class="tab-pane fade active in" id="contact">

    @if (!$isEdit)
    <div class="row">
    <div class="col-sm-{{ $colSm+$colBg }} text-right">
    <button id="edit" class="btn btn-sm btn-labeled btn-warning"><span class="btn-label icon fa fa-pencil"></span>Edit</button>
    </br><br>
    </div>
    </div>
    @else
    <br><br>
    <form action="/person/update" method="POST">
    <input type="hidden" name="eid" value="{{ Session::get('eid') }}">
    @endif

    <div class="row form-group">
    <label class="col-sm-{{ $colSm }} control-label text-right">Name:</label>
      <div class="col-sm-4">
{{ HTML::getTextFieldValue('fname', $person->fname, $isEdit) }}
@if (!$isEdit)
 {{ $person->lname }}
@endif
      </div>
      <div class="col-sm-4">
@if ($isEdit)
{{ HTML::getTextFieldValue('lname', $person->lname, $isEdit) }}
@endif
      </div>
    </div>

    <div class="row form-group">
    <label class="col-sm-{{ $colSm }} control-label text-right">Email:</label>
    <div class="col-sm-{{ $colBg }}">
{{ HTML::getTextFieldValue('email', $person->email, $isEdit) }}
    </div>
    </div>

    <div class="row form-group">
    <label class="col-sm-{{ $colSm }} control-label text-right">Job role:</label>
    <div class="col-sm-{{ $colBg }}">
{{ HTML::getTextFieldValue('role', '', $isEdit) }}
    </div>
    </div>

    <div class="row form-group">
    <label class="col-sm-{{ $colSm }} control-label text-right">Wage:</label>
    <div class="col-sm-{{ $colBg }}">
{{ HTML::getTextFieldValue('payrate', '', $isEdit) }}
    </div>
    </div>

    <div class="row form-group">
    <label class="col-sm-{{ $colSm }} control-label text-right">Location:</label>
    <div class="col-sm-{{ $colBg }}">
{{ HTML::getTextFieldValue('location', '', $isEdit) }}
    </div>
    </div>

    <div class="row form-group">
    <label class="col-sm-{{ $colSm }} control-label text-right">Income goal:</label>
    <div class="col-sm-{{ $colBg }}">
{{ HTML::getTextFieldValue('income_goal', '', $isEdit) }}
    </div>
    </div>


    @if ($isEdit)
    <div class="row">
    <div class="col-sm-{{ $colSm+$colBg }} text-right">
    <input type="submit" class="btn btn-primary" value="Save">
    &nbsp;
    <button id="cancel" class="btn">Cancel</button>
    </div>
    </div>
    </form>
    @endif

    </div><!-- /.contact -->

    <div class="tab-pane fade" id="security">

    @if (!$isEdit)
    <div class="row">
    <div class="col-sm-{{ $colSm+$colBg }} text-right">
    <button id="edit" class="btn btn-sm btn-labeled btn-warning"><span class="btn-label icon fa fa-pencil"></span>Edit</button>
    </br><br>
    </div>
    </div>
    @else
    <br><br>
    <form action="/person/update" method="POST">
    <input type="hidden" name="eid" value="{{ Session::get('eid') }}">
    @endif

    <div class="row form-group">
    <label class="col-sm-{{ $colSm+1 }} control-label text-right">Current password:</label>
    <div class="col-sm-{{ $colBg-1 }}">
    {{ HTML::getTextFieldValue('current-pwd', '', $isEdit) }}
    </div>
    </div>

    <div class="row form-group">
    <label class="col-sm-{{ $colSm+1 }} control-label text-right">New password:</label>
    <div class="col-sm-{{ $colBg-1 }}">
    {{ HTML::getTextFieldValue('new-pwd-1', '', $isEdit) }}
    </div>
    </div>

    <div class="row form-group">
    <label class="col-sm-{{ $colSm+1 }} control-label text-right">Confirm password:</label>
    <div class="col-sm-{{ $colBg-1 }}">
    {{ HTML::getTextFieldValue('new-pwd-2', '', $isEdit) }}
    </div>
    </div>

    </div><!-- /#security -->

    <div class="tab-pane fade" id="payroll">

    <div class="row">
    <div class="col-sm-{{ $colSm+$colBg }} text-right">
    <button class="btn btn-sm btn-labeled btn-warning"><span class="btn-label icon fa fa-pencil"></span>Edit</button>
    </br><br>
    </div>
    </div>

    </div><!-- /.payroll -->

    </div><!-- /.panel-body -->
    </div><!-- /.panel -->

</div> <!-- /.col -->

<div class="col-sm-4">
<div class="profile-block">
<br>
  <div class="panel profile-photo">
          <img src="assets/images/person-grey.png" alt="">
  </div>
          <br>
  <a href="#"><i class="profile-list-icon fa fa-envelope" style="color: #888"></i> Email her</a>
  </div>

<div class="panel panel-transparent">
    <div class="panel-heading">
            <span class="panel-title">About me</span>
    </div>
    <div class="panel-body">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et <a href="#">dolore magna</a> aliqua.
    </div>
</div>

</div> <!-- /.col -->

</div><!-- /.profile-row -->

<script type="text/javascript">
	init.push(function () {
          $('#edit').click(function() {
            document.location.href='/you?edit=1';
          });

          $('#cancel').click(function(evt) {
            evt.preventDefault();
            document.location.href='/you';
          });

	});
</script>
@stop
