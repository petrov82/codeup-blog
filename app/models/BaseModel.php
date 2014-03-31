<?php 

use Carbon\Carbon;

class BaseModel extends Eloquent {

	// Accessor to change timestampt for Created posts
	public function getCreatedAtAttribute($value)
	{
		$utc = Carbon::createFromFormat($this->getDateFormat(), $value);
		return $utc->setTimezone('America/Chicago');
	}

// Accessor to change timestampt for Updated posts
	public function getUpdatedAtAttribute($value)
	{
		$utc = Carbon::createFromFormat($this->getDateFormat(), $value);
		return $utc->setTimezone('America/Chicago');
	}

}
?>
