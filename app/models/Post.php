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

	public function assignImage($inputFile)
	{
		// Pull photo
		$destinationPath = 'uploads';
		$filename = $inputFile->getClientOriginalName();
		$extension = $inputFile->getClientOriginalExtension(); 
		$filename = str_random(12) . '.' . $extension;
		$this->attributes['image_path'] = $filename;
		$uploadSuccess = $inputFile->move($destinationPath, $filename);
	}

	// public function removeImage()
	// {
	// 	file::delete(path);
	// 	$this->imagepath
	// }

}
