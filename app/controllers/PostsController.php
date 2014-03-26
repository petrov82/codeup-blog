<?php

class PostsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$posts = Post::all();
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
		return View::make('posts.create');
	}

	/**
	 * save to db
	 */
	public function store()
	{
		Log::info(Input::all());

		$post = new Post();

		$post->title = Input::get('title');
		$post->body = Input::get('body');

		$post->save();

		return Redirect::action('PostsController@index');
		//return Redirect::back()->withInput();
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
		return "You can show, update, edit, and destroy!";
		//return View::get('posts/{post}/edit');
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		return "You can show, update, edit, and destroy!";
		//return View::put('posts/{post}');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		return "You can show, update, edit, and destroy!";
		//return View::delete('posts/{post}');
	}

}
