<?php
use Carbon\Carbon;

class AppBaseController extends BaseController {

  protected $_CID = 106;
  protected $_EID = 2639;
  protected $_TZ = 'America/Vancouver';
  protected $layout = 'layouts.base';

  function getTodayDate() {
    return $dt = Carbon::now()->setTimezone('America/Vancouver');
  }

  function setLoginName() {
    $this->layout->loginName = Employee::getName($this->_EID);
  }

}
