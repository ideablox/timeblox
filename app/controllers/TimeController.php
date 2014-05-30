<?php
use Carbon\Carbon;

class TimeController extends AppBaseController {

  // for /time
  public function Index()
  {
    //$this->setLoginName();

    // dates
    $startDate = Carbon::today($this->_TZ);
    $endDate = Carbon::tomorrow($this->_TZ);
    $hours = Time::getHoursFor($this->_EID, $startDate, $endDate);

    return View::make('time.time')
                ->with('hours', $hours);
  }

  // for your hours, /hours
  public function Hours()
  {
    $endDate = $this->getTodayDate();
    $startDate = $this->getTodayDate()->subWeek();
    $hours = Time::getHoursFor($this->_EID, $startDate, $endDate);

    return View::make('reports.hours')
                ->with('hours', $hours);
  }

}
