<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class TeamController extends Controller
{
    public function index()
    {
		$data = User::all();

		return view('backend.section.team.index', [
			'data' => $data
		]);
    }

	public function memberById($id)
	{
		$user = User::findOrFail($id);

		return view('backend.section.team.detail', [
			'user' => $user
		]);
	}

	public function getAddMember()
	{
		return view('backend.section.team.add');
	}

	public function postAddMember(Request $request)
  	{

		// return $request->all();

		if ($request->input('password') != $request->input('password_confirmation')) {
			$request->session()->flash('alert-danger', 'Password dan Password Confirmation tidak sama');
			return redirect()->back()->withInput();
		} 
		// else if (count($request->input('hak_akses')) == 0) {
		// 	$request->session()->flash('alert-danger', 'Pilih minimal satu hak akses');
		// 	return redirect()->back()->withInput();
		// } 
		else 
		{
		$messages = [
			'name.required' => 'Nama user harus diisi',
			'username.required' => 'Username harus diisi',
			'username.unique' => 'Username tersebut sudah digunakan',
			'email.required' => 'Email harus diisi',
			'email.unique' => 'Email tersebut sudah digunakan',
		];

		$rules = [
			'name' => 'required',
			'username' => 'required|unique:users',
			'email' => 'required|unique:users',
		];

		$this->validate($request, $rules, $messages);

		$user = new User;
		$user->name = $request->input('name');
		$user->username = $request->input('username');
		$user->email = $request->input('email');
		$user->password = bcrypt($request->input('password'));
		$user->save();

		// $user->assignRole('admin');

		// $akses = [];

		// foreach ($request->input('hak_akses') as $permission) {
		// 	array_push($akses, $permission);
		// }

		// $user->givePermissionTo($akses);

		// if ($user) {
		// 	$request->session()->flash('alert-success', 'User baru berhasil ditambahkan');
		// 	return redirect()->back();
		// }
    }
  }
}
