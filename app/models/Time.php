<?php


  class Time extends Eloquent
  {
    private $_SQL_DATE_FORMAT = 'Y-m-d';
    protected $table = 'time';

    public function Employee() {
      return $this->belongsto('Employee');
    }

    public static function getHoursFor($eid, $startDate, $endDate) {
      $start = $startDate->format('Y-m-d');
      $end = $endDate->format('Y-m-d');

      return Time::whereRaw("emp_id=$eid AND workdate between '$start 00:00:00' and '$end 23:59:00'")->get();
    }

    public static function getHoursForAll($people, $startDate, $endDate) {
      $listPeopleIn = array();
      $listPeopleOut = array();

      foreach ($people as $person) {

        // figure out if person is checked in or out
        $hours = self::getHoursFor($person->id, $startDate, $endDate);
        if ($hours->count() == 0) {
          // person is checked out
          array_set($listPeopleOut, $person->id . '.name', $person->fname 
                . ' ' . $person->lname);
          array_set($listPeopleOut, $person->id . '.hours', NULL);
        } else {
          $lastH = last(last($hours));
          if ($lastH->outtime_stamp == '0000-00-00 00:00:00') {
            // person is checked in
            array_set($listPeopleIn, $person->id . '.name', $person->fname 
              . ' ' . $person->lname);
            array_set($listPeopleIn, $person->id . '.hours', $hours);
          } else {
            array_set($listPeopleOut, $person->id . '.name', $person->fname 
              . ' ' . $person->lname);
            array_set($listPeopleOut, $person->id . '.hours', NULL);
          }

        }
      }

      //var_dump($listPeopleOut);
      //echo "--------------";
      //var_dump(array_merge(array( 'in' => $listPeopleIn), array('out' => $listPeopleOut) ));

      return array_merge(array( 'in' => $listPeopleIn), array('out' => $listPeopleOut) );
      //return array_merge($listPeopleIn, $listPeopleOut);
    }

    public static function isCheckedIn($eid) {

    }
  }

?>
