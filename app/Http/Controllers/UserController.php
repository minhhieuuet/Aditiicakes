<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class UserController extends Controller
{
    //đến view đăng nhập và đăng ký
     public function dangnhap()
    {
    	return view('layout.login');
    }
    //Post thông tin đăng ký
    public function postDangKy(Request $request)
    {
        $this->validate($request,[
            
            'emailsignup'=>'required|unique:users,email',
            'passwordsignup'=>'required',
            'passwordsignup_confirm'=>'required'
            
        ],[
            'emailsignup.unique'=>'Email đã tồn tại'
        ]);
    	$user=new User;
    	$user->full_name=$request->usernamesignup;
    	$user->email=$request->emailsignup;
    	$user->phone=$request->phone;
    	$user->address=$request->address;
    	if($request->passwordsignup==$request->passwordsignup_confirm)
    	{
    		$user->password=bcrypt($request->passwordsignup);
    	}
        else
        {
            return redirect('dang-nhap#toregister')->with('thongbao1','Mật khẩu không trùng');
        }
    	$user->save();

    	return redirect('dang-nhap')->with('thongbao','Bạn đã đăng ký thành công');
    }

    // post thông tin đăng nhập
    public function postDangNhap(Request $request)
    {
    	if(Auth::attempt(['email'=>$request->email,'password'=>$request->password,'block'=>'false']))
    		{
    			return redirect('trang-chu');
    		}
    	else
    	{
    		return back()->with('thongbao','Đăng nhập thất bại');
    	}
    }

    public function dangxuat()
    {
        Auth::logout();
        return back();
    }
}
