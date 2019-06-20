<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function dashboard()
    {
    	return view('admin.dashboard');
    }

    public function login(Request $request)
	{
		if($request->isMethod('post'))
		{
			$user_login = $request->input();
			if (Auth::attempt(['email' => $user_login['email'],'password' => $user_login['password'],'admin' => '1'])) {
				return redirect('admin/dashboard');
			}
			else {
				return redirect('admin')->with('flash_message','Invalid Email and Password');
			}
		}
		// $this->validate($request,
		// 	[
		// 		'email' => 'required',
		// 		'password' => 'required|min:3|max:10',
		// 	],
		// 	[
		// 		'email.required' => 'Bạn chưa nhập email',
		// 		'password.required' => 'Bạn chưa nhập password',
		// 		'password.min' => 'Password không được nhỏ hơn 3 ký tự',
		// 		'password.max' => 'password không được lớn hơn 3 ký tự'
		// 	]);
		// if(Auth::attempt(['email'=>$request->email,'password'=>$request->password,'admin'=>'1']))
		// {
		// 	echo "success";
		// 	//return redirect('admin/dashboard');
		// }
		// else
		// {
		// 	echo "fail";
		// 	//return redirect('admin')->with('thongbao','Bạn vui lòng đăng nhập');
		// }
	
		return view('admin.login');
	}

	public function logout()
	{
		Session::flush();
		return redirect('admin');
	}

}
