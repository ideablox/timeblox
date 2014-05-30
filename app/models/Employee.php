<?php
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class Employee extends Eloquent implements UserInterface, RemindableInterface {
  
    protected $table = 'employee';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('pwd');
        protected $guarded = array('pwd');

	/**
	 * Get the unique identifier for the user.
	 *
	 * @return mixed
	 */
	public function getAuthIdentifier()
	{
		return $this->getKey();
	}

	/**
	 * Get the password for the user.
	 *
	 * @return string
	 */
	public function getAuthPassword()
	{
		return $this->pwd;
	}

	/**
	 * Get the token value for the "remember me" session.
	 *
	 * @return string
	 */
	public function getRememberToken()
	{
		return $this->remember_token;
	}

	/**
	 * Set the token value for the "remember me" session.
	 *
	 * @param  string  $value
	 * @return void
	 */
	public function setRememberToken($value)
	{
		$this->remember_token = $value;
	}

	/**
	 * Get the column name for the "remember me" token.
	 *
	 * @return string
	 */
	public function getRememberTokenName()
	{
		return 'remember_token';
	}

	/**
	 * Get the e-mail address where password reminders are sent.
	 *
	 * @return string
	 */
	public function getReminderEmail()
	{
		return $this->email;
	}

    public static function getName($eid) {
      $name = self::where('id', '=', $eid)
          ->get(array('fname', 'lname'));

      return "jack";
    }
      
    public static function getAll($cid) {
      // need to cache this
      return self::where('company_id', '=', $cid)->get();
    }

    public static function getActive($cid) {
      // need to cache this
      return self::where('company_id', '=', $cid)
          ->where('isActive', '=', 1, 'AND')->get();

    }

    public static function getInActive($cid) {

    }

    // return false for non-auth
    // return employee model, if authenticated
    public static function isValidEmp($eid, $pwd) {
      $emp = self::find($eid);
       
      if (is_null($emp)) {
        return false;
      }

      // check password
      if (md5($pwd) == $emp->pwd) {
        return $emp;
      }

      return false;
    }

  }


?>
