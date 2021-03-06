<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends BaseModel implements UserInterface, RemindableInterface {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password');

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
		return $this->password;
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

	/**
	*
	*mutator to hash passwords
	*/
	public function setPasswordAttribute($value)
	{
		$this->attributes['password'] = Hash::make($value);
	}

	/**
	*
	*mutator to adjust username to lowercase
	*/
	public function setUsernameAttribute($value)
	{
		$this->attributes['user_name'] = strtolower($value);
	}

	/**
	*
	*mutator to adjust username to lowercase
	*/
	public function setEmailAttribute($value)
	{
		$this->attributes['email'] = strtolower($value);
	}

	/**
	*Tell User table it has many posts relationship
	*/

	public function posts()
	{
		return $this->hasMany('Post');
	}


}

?>
