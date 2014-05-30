@extends('layouts.base')

@section('main')
<?php
use Carbon\Carbon;
$dt = Carbon::now('America/Vancouver');
?>


<div class="row">
  <div class="col-sm-4">
    <div class="stat-panel">
      <div class="stat-row">
        <!-- Info background, without padding, horizontally centered text, super large text -->
        <div class="stat-cell bg-info no-padding text-center text-slg">
                <strong><?php echo $dt->format('g:i') ?></strong>
                <small><small><?php echo $dt->format('a') ?></small></small>
        </div>
      </div> <!-- /.stat-row -->
      <div class="stat-row">
        <!-- Bordered, without top border, horizontally centered text, large text -->
        <div class="stat-cell bordered no-border-t text-center text-lg">
                <button class="btn btn-lg btn-labeled btn-success" style="font-size:24px; line-height:28px">
                <span class="btn-label icon fa fa-check-square" style="font-size:24px; line-height:28px"></span>
               Check In</button>
        </div>
      </div> <!-- /.stat-row -->
    </div> <!-- /.stat-panel -->
  </div>

  <div class="col-sm-8">
  <div class="panel">
    <div class="panel-heading">
            <span class="panel-title">Today's Time</span>
    </div>
    <div class="panel-body" style="padding-bottom:0">
      <table class="table table-hover">
        <thead>
                <tr>
                        <th>In</th>
                        <th>Out</th>
                        <th>Total (hr:mm)</th>
                </tr>
        </thead>
        <tbody>
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

?>
                <tr>
                        <td><?php echo $startDate->format('g:i a'); ?></td>
                        <td><?= $checkout ?></td>
                        <td>{{ $diff }}</td>
                </tr>
@endforeach
        </tbody>
      </table>
    </div>
  </div>
  </div>

</div><!-- /.row -->

<div class="row">
  <div class="col-sm-4">
  @include('common/infobox')
  </div>

  <div class="col-sm-4">
  @include('common/infobox')
  </div>

  <div class="col-sm-4">
  @include('common/infobox')
  </div>
</div><!-- /.row -->

@stop
