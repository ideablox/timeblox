@extends('layouts.base')

@section('main')
<?php
use Carbon\Carbon;
?>


<div class="row">

<div class="col-sm-12">

    <div class="panel">
      <div class="panel-heading" style="height:70px">
        <span class="panel-title">
        <!--
        <div class="col-xs-1"><img src="/assets/images/clock.png"></div>
        <div class="col-xs-5" style="margin-top:5px">Your hours for<br>this pay period</div>
        -->
        <img src="/assets/images/clock.png" align="left" style="padding-right:10px; margin-top:-3px">
        Your hours for<br>this pay period
        </span>
        <div class="panel-heading-controls">
        <button id="today" class="btn btn-xs btn-warning btn-outline"><span class="fa fa-refresh"></span>&nbsp;&nbsp;Today</button>
        <button id="week" class="btn btn-xs btn-warning btn-outline"><span class="fa fa-refresh"></span>&nbsp;&nbsp;Week</button>
        <button id="month" class="btn btn-xs btn-warning btn-outline"><span class="fa fa-refresh"></span>&nbsp;&nbsp;Month</button>
        </div>
      </div> <!-- / .panel-heading -->

      <div class="alert alert-page alert-success alert-light">
      <button type="button" class="close" data-dismiss="alert">×</button>
      <strong>Well done!</strong> Now showing hours for the week.
      </div>

      <table class="table">
        <thead>
          <tr>
                  <th>Date</th>
                  <th>In</th>
                  <th>Out</th>
                  <th>Hours (hh:mm)</th>
          </tr>
        </thead>
        <tbody class="valign-middle">
@foreach($hours as $key => $hour)
<?php 
$startDate = Carbon::instance(new DateTime($hour->intime_stamp));
if (is_null($hour->outtime_r)) {
  $checkout = '';
  $diff = '';
} else {
  $endDate = Carbon::instance(new DateTime($hour->outtime_stamp));
  $checkout = $endDate->format('g:i a');

  $diff = $startDate->diffInHours($endDate, false) 
      . ':' . ($startDate->diffInMinutes($endDate, false) % 60)
      . ' hrs';
}

$date = $startDate->format('n/j/y');
?>
          <tr>
                  <td><?= $date ?></td>
                  <td><?php echo $startDate->format('g:i a'); ?> </td>
                  <td><?php echo $checkout ?></td>
                  <td>{{ $diff }}</td>
          </tr>
@endforeach
        </tbody>
      </table>
    </div> <!-- / .panel -->
  </div>

</div><!-- /.row -->


<div class="row">
  <div class="col-sm-4">
<div class="stat-panel">
  <!-- Success background. vertically centered text -->
  <div class="stat-cell valign-middle" style="background-color:#fafafa; border: 1px solid #ececec">
      <!-- Stat panel bg icon -->
      <i class="fa"></i>
      <span class="text-sm">Your hours</span><br>
      <!-- Extra large text -->
      <span class="text-bg"><strong>8 active</strong>, 12 inactive</span><br>
  </div> <!-- /.stat-cell -->
</div> <!-- /.stat-panel -->
  </div>

  <div class="col-sm-4">
<div class="stat-panel">
  <!-- Success background. vertically centered text -->
  <div class="stat-cell valign-middle" style="background-color:#fafafa; border: 1px solid #ececec">
      <!-- Stat panel bg icon -->
      <i class="fa"></i>
      <span class="text-sm">Who worked most hours?</span><br>
      <!-- Extra large text -->
      <span class="text-bg"><strong>Joe Black</strong>, 82 hrs</span><br>
  </div> <!-- /.stat-cell -->
</div> <!-- /.stat-panel -->
  </div>

  <div class="col-sm-4">
<div class="stat-panel">
  <!-- Success background. vertically centered text -->
  <div class="stat-cell valign-middle" style="background-color:#fafafa; border: 1px solid #ececec">
      <!-- Stat panel bg icon -->
      <i class="fa"></i>
      <span class="text-sm">team members</span><br>
      <!-- Extra large text -->
      <span class="text-bg"><strong>8 active</strong>, 12 inactive</span><br>
  </div> <!-- /.stat-cell -->
</div> <!-- /.stat-panel -->
  </div>
</div><!-- /.row -->


@stop
