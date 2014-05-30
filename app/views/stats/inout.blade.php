@extends('layouts.base')
@section('main')
<?php
use Carbon\Carbon;
$inCSS = $outCSS = 'inout2';
$listPeopleIn = array_shift($people);
$listPeopleOut = array_shift($people);

$numIn = count($listPeopleIn);
$numOut = count($listPeopleOut);

if ($numIn > 0) {
  //$numIn .= ' total';
  $inCSS = ($numIn > 0 && $numIn < 10)? 'inout1':'inout2';
} else {
  $numIn = '0';
  $inCSS = 'inout1';
}

if ($numOut > 0) {
  $outCSS = ($numIn > 0 && $numIn < 10)? 'inout1':'inout2';
} else {
  $numOut = '0';
  $outCSS = 'inout1';
}
?>

<style>
.badge.inout { font-size: 20px; line-height: 34px; font-weight:200; margin-right:6px; border-radius: 26px; }
.badge.inout1 { padding:3px 14px; margin-right:6px; }
.inout2 { padding:3px 8px; margin-right:6px; color: #555; }
</style>
<div class="row">
<div class="col-sm-6">

<div class="panel panel-success panel-light widget-profile">
<div class="panel-heading">
<span class="badge badge-info inout {{ $inCSS }}">{{ $numIn }}</span>
<span style="font-size: 18px; font-weight:200;">People Checked In</span><br>
</div> <!-- / .panel-heading -->
<div class="list-group">
@foreach($listPeopleIn as $key => $person)
  <?php 
    $lastHours = last($person['hours']); 
    $hours = last($lastHours);
    $startDate = Carbon::instance(new DateTime($hours->intime_stamp))
  ?>
  <a href="{{ $lastHours[0]->emp_id }}" class="list-group-item"><?= $person['name'] ?><span class="badge badge-info text-bg text-normal" style="font-size:13px; line-height: 18px"><?php echo $startDate->format('g:i a'); ?></span></a>
@endforeach
</div>
</div>

</div><!-- /.col -->


<div class="col-sm-6">

<div class="panel panel-light widget-profile">
<div class="panel-heading">
<span class="badge badge-info inout {{ $inCSS }}" style="background-color: #f0f0f0; border-color: #e0e0e0; color: #555">{{ $numOut }}</span>
<span style="font-size: 18px; font-weight:200;">People Checked Out</span><br>
</div> <!-- / .panel-heading -->
<div class="list-group">
@foreach($listPeopleOut as $key => $person)
  <a href="#" class="list-group-item"><?= $person['name'] ?></a>
@endforeach
</div>
</div>

</div><!-- /.col -->
</div>

@stop
