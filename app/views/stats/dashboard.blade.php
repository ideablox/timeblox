@extends('layouts.base')
@section('main')

<div class="note note-success">
  <h4 class="note-title">Good Morning, 4 people checked in so far.</h4>
  They are Jessica, Joe
</div>


<div class="row">
<div class="col-sm-12">
<script>
      init.push(function () {
              var uploads_data = [
                      { day: '2014-03-10', v: 20 },
                      { day: '2014-03-11', v: 10 },
                      { day: '2014-03-12', v: 15 },
                      { day: '2014-03-13', v: 12 },
                      { day: '2014-03-14', v: 5  },
                      { day: '2014-03-15', v: 5  },
                      { day: '2014-03-16', v: 20 }
              ];
              Morris.Line({
                      element: 'hero-graph',
                      data: uploads_data,
                      xkey: 'day',
                      ykeys: ['v'],
                      labels: ['Value'],
                      lineColors: ['#fff'],
                      lineWidth: 2,
                      pointSize: 4,
                      gridLineColor: 'rgba(255,255,255,.5)',
                      resize: true,
                      gridTextColor: '#fff',
                      xLabels: "day",
                      xLabelFormat: function(d) {
                              return ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov', 'Dec'][d.getMonth()] + ' ' + d.getDate(); 
                      },
              });
      });
</script>
				<!-- / Javascript -->

<div class="stat-panel">
    <div class="stat-row">
      <!-- Bordered, without right border, top aligned text -->
      <div class="stat-cell col-sm-4 col-xs-12 bordered no-border-r padding-sm-hr valign-top">
        <!-- Small padding, without top padding, extra small horizontal padding -->
        <h4 class="padding-sm no-padding-t padding-xs-hr">Time Worked This Pay Period</h4>
        <!-- Without margin -->
        <ul class="list-group no-margin">
                <!-- Without left and right borders, extra small horizontal padding -->
                <li class="list-group-item no-border-hr padding-xs-hr">
                        Total hours <span class="label pull-right">34</span>
                </li> <!-- / .list-group-item -->
                <!-- Without left and right borders, extra small horizontal padding -->
                <li class="list-group-item no-border-hr padding-xs-hr">
                        Overtime hours <span class="label pull-right">128</span>
                </li> <!-- / .list-group-item -->
                <!-- Without left and right borders, without bottom border, extra small horizontal padding -->
                <li class="list-group-item no-border-hr no-border-b padding-xs-hr">
                        Days <span class="label pull-right">12</span>
                </li> <!-- / .list-group-item -->
        </ul>
      </div> <!-- /.stat-cell -->
      <!-- Primary background, small padding, vertically centered text -->
      <div class="stat-cell col-sm-8 hidden-xs bg-primary padding-sm valign-middle">
              <div id="hero-graph" class="graph" style="height: 180px;"></div>
      </div>
    </div>
</div> <!-- /.stat-panel -->
<!-- /12. $EXAMPLE_UPLOAD_STATISTICS -->

</div>
</div><!-- /.row -->

<div class="row">
<div class="col-sm-4">
<!-- 9. $EXAMPLE_RETWEETS_GRAPH ==============================================
Retweets graph example
-->
<div class="stat-panel">
    <div class="stat-row">
            <!-- Info background, small padding -->
            <div class="stat-cell bg-info padding-sm">
              <h4><a href="/inout">Who's In and Out?</a></h4>
            </div>
    </div> <!-- /.stat-row -->
    <div class="stat-row">
            <!-- Bordered, without top border, horizontally centered text -->
            <div class="stat-counters bordered no-border-t text-center">
                    <!-- Small padding, without horizontal padding -->
                    <div class="stat-cell col-xs-6 padding-sm no-padding-hr">
                            <!-- Big text -->
                            <span class="text-bg"><strong>8</strong></span><br>
                            <!-- Extra small text -->
                            <span class="text-xs">People IN</span>
                    </div>
                    <!-- Small padding, without horizontal padding -->
                    <div class="stat-cell col-xs-6 padding-sm no-padding-hr">
                            <!-- Big text -->
                            <span class="text-bg"><strong>10</strong></span><br>
                            <!-- Extra small text -->
                            <span class="text-xs">People OUT</span>
                    </div>
            </div> <!-- /.stat-counters -->
    </div> <!-- /.stat-row -->
</div> <!-- /.stat-panel -->
<!-- /9. $EXAMPLE_RETWEETS_GRAPH -->
</div>
<div class="col-sm-4">
<!-- 6. $EXAMPLE_COMMENTS_COUNT ====================================================================

				Comments count example
-->
				<div class="stat-panel">
					<!-- Success background. vertically centered text -->
					<div class="stat-cell bg-danger valign-middle">
						<!-- Stat panel bg icon -->
						<i class="fa fa-comments bg-icon"></i>
						<!-- Extra large text -->
						<span class="text-xlg"><strong>$320</strong></span><br>
						<!-- Small text -->
						<span class="text-sm">Total for this pay period so far</span>
					</div> <!-- /.stat-cell -->
				</div> <!-- /.stat-panel -->
<!-- /6. $EXAMPLE_COMMENTS_COUNT -->

</div>
<div class="col-sm-4">
<!-- 6. $EASY_PIE_CHARTS ===========================================================================

				Easy Pie charts
-->
				<!-- Javascript -->
				<script>
					init.push(function () {
						// Easy Pie Charts
						var easyPieChartDefaults = {
							animate: 2000,
							scaleColor: false,
							lineWidth: 6,
							lineCap: 'square',
							size: 90,
							trackColor: '#e5e5e5'
						}
						$('#easy-pie-chart-1').easyPieChart($.extend({}, easyPieChartDefaults, {
							barColor: PixelAdmin.settings.consts.COLORS[1]
						}));
					});
				</script>
				<!-- / Javascript -->

						<!-- Centered text -->
						<div class="stat-panel text-center">
							<div class="stat-row">
								<!-- Dark gray background, small padding, extra small text, semibold text -->
								<div class="stat-cell bg-dark-gray padding-sm text-xs text-semibold">
									<i class="fa fa-map-marker"></i>&nbsp;&nbsp;Income Goal: $3000
								</div>
							</div> <!-- /.stat-row -->
							<div class="stat-row">
								<!-- Bordered, without top border, without horizontal padding -->
								<div class="stat-cell bordered no-border-t no-padding-hr">
									<div class="pie-chart" data-percent="43" id="easy-pie-chart-1">
										<div class="pie-chart-label">$2500</div>
									</div>
								</div>
							</div> <!-- /.stat-row -->
						</div> <!-- /.stat-panel -->
</div>
</div>

@stop
