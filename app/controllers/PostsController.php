<?php

class PostsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return "here you get Posts";
		//return View::get('posts');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return "You created a Post!";
		//return View::get('posts/create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		return "You can show, update, edit, and destroy!";
		//return View::post('posts/{post}');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		return "You can show, update, edit, and destroy!";
		//return View::get('posts/{post}');
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
