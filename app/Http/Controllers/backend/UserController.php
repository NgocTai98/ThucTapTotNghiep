<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddUserRequest;
use App\Http\Requests\EditUserRequest;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getUser(){
        $data['user']=User::paginate(3);
        return view('backend.user.listuser',$data);
    }
    public function getAddUser(){
        return view('backend.user.adduser');
    }
    public function postAddUser(AddUserRequest $r){
        $user = new User();
        $user->email = $r->email;
        $user->password = $r->password;
        $user->full = $r->full;
        $user->address = $r->address;
        $user->phone = $r->phone;
        $user->level = $r->level;
        $user->save();
        return redirect('/admin/user')->with('thongbao','Đã thêm thành viên mới thành công');
    }
    public function getEditUser($idUser){
        $data['user']=User::find($idUser);
        return view('backend.user.edituser',$data);
    }
    public function postEditUser($idUser, EditUserRequest $r){
        $user=User::find($idUser);
        $user->email = $r->email;
        $user->password = $r->password;
        $user->full = $r->full;
        $user->address = $r->address;
        $user->phone = $r->phone;
        $user->level = $r->level;
        $user->save();
        return redirect('/admin/user')->with('thongbao','Đã sửa thành viên thành công');
    }
    public function getDelUser($idUser){
        $user=User::find($idUser)->delete();
        return redirect('/admin/user')->with('thongbao','Đã xóa thành công');
    }
}
