<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TaiKhoan;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class TaiKhoanController extends Controller
{
    public function dangNhap(){
        return view('dang-nhap');
    }
    public function xuLyDangNhap(Request $request){

       if(Auth::attempt(['username'=>$request->ten_tai_khoan,'password'=>$request->mat_khau])){
           $user=Auth::user();
           return redirect()->route('index');
        }
        else{
          echo "Đăng nhập không thành công";
        }
    } 
    public function dangXuat(){
        Auth::logout();
        return redirect()->route('dang-nhap');
    }

}
