@extends('layouts.base')
@section('main')

<div class="row">
  <div class="col-sm-4">
  <!-- Success background. vertically centered text -->
  <div class="alert alert-info valign-middle" style="color: #555;">
  <button type="button" class="close" data-dismiss="alert" style="margin-top:-14px">×</button>
      <!-- Stat panel bg icon -->
      <span class="text-sm">Who worked most this week?</span><br>
      <!-- Extra large text -->
      <span class="text-bg"><strong>Joe Black</strong>, 82 hrs</span><br>
  </div> <!-- /.stat-cell -->
  </div> <!-- /.col -->

  <div class="col-sm-4">
  <!-- Success background. vertically centered text -->
  <div class="alert alert-info valign-middle" style="color: #555;">
  <button type="button" class="close" data-dismiss="alert" style="margin-top:-14px">×</button>
      <!-- Stat panel bg icon -->
      <span class="text-sm">Who's doing overtime?</span><br>
      <!-- Extra large text -->
      <span class="text-bg">Joe Black, Jessica</span><br>
  </div> <!-- /.stat-cell -->
  </div> <!-- /.col -->

  <div class="col-sm-4">
  <!-- Success background. vertically centered text -->
  <div class="alert valign-middle" style="background-color:#fafafa; border: 1px solid #ececec; color: #555; padding-top:9px"> 
      <span class="text-sm">Manage an employee</span><br>
      <button class="btn btn-labeled btn-info btn-sm" style="margin-bottom:4px; margin-top:2px;">
      <span class="btn-label icon fa fa-plus-square"></span>
      Add</button>
      <button class="btn btn-labeled btn-info btn-sm" style="margin-bottom:4px">
      <span class="btn-label icon fa fa-minus-square"></span>
      Inactivate</button>
  </div> <!-- /.stat-cell -->
  </div> <!-- /.col -->

</div><!-- /.row -->

<div class="row">

<div class="col-sm-12">

<div class="panel panel-dark panel-light-green">
  <div class="panel-heading">
    <span class="panel-title"><i class="panel-title-icon fa fa-smile-o"></i>Your Team</span>
  </div> <!-- / .panel-heading -->
  <table class="table">
          <thead>
                  <tr>
                          <th>#</th>
                          <th>Name</th>
                          <th>This Payperiod</th>
                          <th>Last Payperiod</th>
                  </tr>
          </thead>
          <tbody class="valign-middle">

<?php $count = 0; ?>
@foreach($people as $key => $value)
  <?php $count++; ?>
                  <tr>
                          <td><?= $count ?></td>
                          <td>
                                  <img src="assets/images/person-grey.png" alt="" style="width:26px;height:26px;" class="rounded">&nbsp;&nbsp;<a href="/person?pid={{ $value->id }}" title="">{{ $value->fname }} {{ $value->lname }}</a>
                          </td>
                          <td>32:00 (32.2) hrs</td>
                          <td>40:23 (40.23) hrs</td>
                  </tr>
@endforeach
          </tbody>
  </table>
</div> <!-- / .panel -->
  </div>

</div><!-- /.row -->


@stop
