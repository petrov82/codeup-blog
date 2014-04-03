<?php


class PostsController extends \BaseController {

	public function __construct()
	{
		parent::__construct();

		//run an auth filter before all methods except index and show
		$this->beforeFilter('auth', array('except' => ['index', 'show']));
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$search = Input::get('search');
		$query = Post::with('user')->orderBy('created_at', 'desc');
		if (is_null($search))
		{
			$posts = $query->paginate(4);
		} else {
			$posts = $query->where('title', 'LIKE', "%{$search}%")
						   ->orWhere('body', 'LIKE', "%{$search}%")
						   ->paginate(4);
		}
		return View::make('posts.index')->with('posts', $posts);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//return "You created a Post!";
		return View::make('posts.create')->with('post', new Post());
	}

	/**
	 * save to db
	 */
	public function store()
	{

		//Log::info(Input::all());

		// create the validator
		$validator = Validator::make(Input::all(), Post::$rules);

		// attempt validation
		if ($validator->fails())
		{
			Session::flash('errorMessage', 'Post Could Not Be Created - See Form Errors');
			// validation failed, redirect to the post create page with validation errors and old inputs
			return Redirect::back()->withInput()->withErrors($validator);
		}
		else
		{
			// validation succeeded, create and save the post
			$post = new Post();
			$post->user_id = Auth::user()->id;

			$post->title = Input::get('title');
			$post->body = Input::get('body');

			// Pull photo
			if (Input::hasFile('file'))
			{
				$file = Input::file('file');
				$destinationPath = 'uploads';
				$filename = $file->getClientOriginalName();
				$extension = $file->getClientOriginalExtension(); 
				$filename = str_random(12) . '.' . $extension;
				$uploadSuccess = Input::file('file')->move($destinationPath, $filename);
				$post->image_path = $filename;
			}

			$post->save();
			Session::flash('successMessage', 'Post Created Successfully');
			return Redirect::action('PostsController@index');
		}
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$post = Post::find($id);
		return View::make('posts.show')->with('post', $post);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$post = Post::findOrFail($id);
		// only post->user_id can edit
		if (Auth::user()->id != $post->user_id)
		{
			Session::flash('errorMessage', 'You are not authorized to edit this Post!');
			// validation failed, redirect to the post create page with validation errors and old inputs
			return Redirect::back()->withInput();
		}
		else
		{
			return View::make('posts.edit')->with('post', $post);
		}

	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$post = Post::findOrFail($id);

		$validator = Validator::make(Input::all(), Post::$rules);

		// attempt validation
		if ($validator->fails())
		{
			Session::flash('errorMessage', 'Post Could Not Be Updated - See Form Errors');
			// validation failed, redirect to the post create page with validation errors and old inputs
			return Redirect::back()->withInput()->withErrors($validator);
		}
		else
		{
			// validation succeeded, create and save the post
			$post->title = Input::get('title');
			$post->body = Input::get('body');

			// Pull photo
			if (Input::hasFile('file'))
			{
				$file = Input::file('file');
				$destinationPath = 'uploads';
				$filename = $file->getClientOriginalName();
				$extension = $file->getClientOriginalExtension(); 
				$filename = str_random(12) . '.' . $extension;
				$uploadSuccess = Input::file('file')->move($destinationPath, $filename);
				$post->image_path = $filename;
			}

			$post->save();
			Session::flash('successMessage', 'Post Updated Successfully');
			return Redirect::action('PostsController@index');
		}
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$post = Post::findOrFail($id);
		// only post->user_id can edit
		if (Auth::user()->id != $post->user_id)
		{
			Session::flash('errorMessage', 'You are not authorized to edit this Post!');
			// validation failed, redirect to the post create page with validation errors and old inputs
			return Redirect::back()->withInput();
		}
		else
		{
			$post->delete();
			return Redirect::action('PostsController@index');
		}
	}
}
