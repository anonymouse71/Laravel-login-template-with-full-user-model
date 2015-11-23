<?php

class UsersController extends \BaseController {


	public function index()
	{
		$users = User::all();


		return View::make('users.index')->with('users',$users)->with('title', 'Login');
	}



	public function create()
	{

		return View::make('users.create')->with('title', 'Login');
	}





	public function store()
	{

		$rules =[
			'name'              =>'required',
			'full_name'              =>'required',
			'email'                 => 'required|email|unique:users',
			'password'              => 'required|confirmed',
			'password_confirmation' => 'required'
		];

		$data = Input::all();

		$validation = Validator::make($data,$rules);

		if($validation->fails()){
			return Redirect::back()->withErrors($validation)->withInput(Input::except('password', 'password_confirmation'));
		}else{

			    $user = new User();

				$user->email = $data['email'];
				$user->password = Hash::make($data['password']);

				$user->name = $data['name'];
				$user->full_name = $data['full_name'];
				$user->phone = $data['phone'];
				$user->reg = $data['reg'];
				$user->session = $data['session'];



				//set a default avatar
				$user->icon_url = 'img/avatar1_small.jpg';
				$user->avatar_url = 'img/avatar1.jpg';

				if($user->save()){


					return Redirect::route('users.index')->with('success',"Your Account Created Successfully. Please login now");
				}else{
					return Redirect::back()->withInput()->withErrors($validation);
				}

			}
		}


	//}








	public function show($id)
	{
		$users = User::findOrFail($id);

		return View::make('users.show', compact('users'))->with('title', 'Login');
	}





	public function edit($id)
	{
		$users = User::find($id);


		return View::make('users.edit', compact('users'))->with('title', 'Login');
	}





	public function update($id)
	{
		$rules =[
			'name'              =>'required',
			'full_name'              =>'required',
			'phone'              =>'required',
			'email'                 => 'required|email'
			//'password'              => 'required|confirmed',
			//'password_confirmation' => 'required'
		];

		$data = Input::all();

		$validation = Validator::make($data,$rules);

		if($validation->fails()){
			return Redirect::back()->withErrors($validation)->withInput(Input::except('password', 'password_confirmation'));
		}else{

			$user = User::find($id);

			$user->email = $data['email'];
			//$user->password = Hash::make($data['password']);

			$user->name = $data['name'];
			$user->full_name = $data['full_name'];
			$user->phone = $data['phone'];
			$user->reg = $data['reg'];
			$user->session = $data['session'];



			//set a default avatar
			$user->icon_url = 'img/avatar1_small.jpg';
			$user->avatar_url = 'img/avatar1.jpg';

			if($user->save()){


				return Redirect::route('users.index')->with('success',"Your Account Created Successfully. Please login now");
			}else{
				return Redirect::back()->withInput()->withErrors($validation);
			}

		}
	}





	public function destroy($id)
	{
		User::destroy($id);

		return Redirect::route('users.index')->with('title', 'Login');
	}

}
