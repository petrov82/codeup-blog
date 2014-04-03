<?php

class Role extends BaseModel {

    protected $table = 'roles';


    /**
    * Rules for post validation
    */
    public static $rules = array(
    'role'      => 'required|max:100',
	);

	public function user()
	{
		return $this->belongsTo('User');
	}

    // user role using constants
    const ROLE_ADMIN = 1;
    const ROLE_USER = 2;

}
