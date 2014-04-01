<?php

class Post extends BaseModel {

    protected $table = 'posts';


    /**
    * Rules for post validation
    */
    public static $rules = array(
    'title'      => 'required|max:100',
    'body'       => 'required|max:10000'
	);

		/**
	*Tell Post table it belongs to a user relationship
	*/

	public function user()
	{
		return $this->belongsTo('User');
	}

}
