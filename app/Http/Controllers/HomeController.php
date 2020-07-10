<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\addUserRequest;
use App\Http\Requests\editUserRequest;
use App\Http\Requests\editPasswordRequest;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.index');
    }

    // User custom
    public function users(){
        $users = User::select()->get();
        return view('admin.users',['users'=>$users]);
    }
    public function addUser(){
        return view('admin.addUser');
    }
    public function postAddUser(addUserRequest $request){
        $item = new User;
        $item -> add($request);
        if($item-> add($request)){
            return redirect()->route('users')->with(['flash_level'=>'success','flash_message'=>'Thêm thành công']);
        }
        else{
            return redirect()->route('users')->with(['flash_level'=>'danger','flash_message'=>'Thêm không thành công']);
        }

    }
    public function editUser($id){
        $user = User::where('id',$id)->get()->first();
        return view('admin.editUser',['user'=>$user]);
    }
    public function postEditUser(editUserRequest $request, $id){
        
        $item = new User;
        $item->edit($request,$id);
        if($item-> edit($request,$id)){
            return redirect()->route('editUser',$id)->with(['flash_level'=>'success','flash_message'=>'Sửa thành công']);
        }
        else{
            return redirect()->route('editUser',$id)->with(['flash_level'=>'danger','flash_message'=>'Sửa không thành công']);
        }
    }
    public function postEditPassword(editPasswordRequest $request, $id){
        $item = new User;
        $item->editPassword($request,$id);
        if($item-> editPassword($request,$id)){
            return redirect()->route('editUser',$id)->with(['flash_level'=>'success','flash_message'=>'Sửa mật khẩu thành công']);
        }
        else{
            return redirect()->route('editUser',$id)->with(['flash_level'=>'danger','flash_message'=>'Sửa mật khẩu không thành công']);
        }

    }
    // End User Custom

    // blog
    public function blogCategories(){
        return view('admin.blogCategories');
    }
    // end blog
}
