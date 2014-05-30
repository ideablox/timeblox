<?php
use Carbon\Carbon;

class DashboardController extends AppBaseController {

	public function Index()
	{
          $people = Employee::getActive($this->_CID);

          //var_dump(Session::all());

          return View::make('stats.dashboard')
              ->with('people', $people);

	}

        public function InOut() {
          $people = Employee::getActive($this->_CID);

          // dates
          $startDate = Carbon::today($this->_TZ);
          $endDate = Carbon::tomorrow($this->_TZ);
          $inOutStats = Time::getHoursForAll($people, $startDate, $endDate);

          return View::make('stats.inout')
              ->with('people', $inOutStats);

        }

}
