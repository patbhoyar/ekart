<?php

class UserController extends \BaseController {

	public function index()
	{
            return json_encode(User::all());
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
            $user = new User();
            $user->fname = Input::get('fname');
            $user->lname = Input::get('lname');
            $user->email = Input::get('email');
            $user->phone = Input::get('phone');
            $user->save();
            echo json_encode(array('msg' => 'success', 'id' => $user->id));
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
            $user = User::find($id);
            $user->fname = Input::get('fname');
            $user->lname = Input::get('lname');
            $user->email = Input::get('email');
            $user->phone = Input::get('phone');
            $user->save();
            echo json_encode(array('msg' => 'success'));
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
            User::find($id)->delete();
            echo json_encode(array('msg' => 'success'));
	}


}
