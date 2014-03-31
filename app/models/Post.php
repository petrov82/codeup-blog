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

}
