<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\addUserRequest;
use App\Http\Requests\editUserRequest;
use App\Http\Requests\editPasswordRequest;
use App\Http\Requests\addBlogCategorieRequest;
use App\Http\Requests\editBlogCategorieRequest;
use App\Http\Requests\addBlogRequest;
use App\Http\Requests\editBlogRequest;
use App\User;
use App\BlogCate;
use App\Blog;

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
        $categories = BlogCate::select()->get();
        return view('admin.blogCategories',['categories'=>$categories]);
    }
    public function addBlogCategorie(){
        $categories = BlogCate::select()->get();
        return view('admin.addBlogCategorie',['categories'=>$categories]);
    }
    public function postAddBlogCategorie(addBlogCategorieRequest $request){
        $item = new BlogCate;
        $item -> add($request);
        return redirect()->route('blogCategories')->with(['flash_level'=>'success','flash_message'=>'Thêm thành công']); 
    }
    public function editBlogCategorie($id){
        $categories = BlogCate::where('id','!=',$id)->get();
        $cate = BlogCate::where('id',$id)->get()->first();
        if($cate->parent_id != ''){
            $parent = BlogCate::where('id',$cate->parent_id)->get()->first();
            return view('admin.editBlogCategorie',['cate'=>$cate, 'categories'=>$categories,'parent'=>$parent]);
        }
        else{
            return view('admin.editBlogCategorie',['cate'=>$cate, 'categories'=>$categories]);
        }
        
    }
    public function postEditBlogCategorie(editBlogCategorieRequest $request, $id){
        $item = new BlogCate;
        $item->edit($request,$id);
        return redirect()->route('editBlogCategorie',$id)->with(['flash_level'=>'success','flash_message'=>'Sửa thành công']);
    }
    public function deleteBlogCategorie($id){
        $item = BlogCate::where('id',$id)->get()->first();
        $item->delete();
        return redirect()->route('blogCategories')->with(['flash_level'=>'success','flash_message'=>'Xóa tin tức thành công']); 
    }
    public function blogs(){
        $blogs = Blog::select()->get();
        return view('admin.blogs',['blogs'=>$blogs]);
    }
    public function addBlog(){
        $categories = BlogCate::select()->get();
        return view('admin.addBlog',['categories'=>$categories]);
    }
    public function postAddBlog(addBlogRequest $request){
        $item = new Blog;
        $item -> add($request);
        return redirect()->route('blogs')->with(['flash_level'=>'success','flash_message'=>'Thêm thành công']); 
    }
    public function editBlog($id){
        $categories = BlogCate::select()->get();
        $blog = Blog::where('id',$id)->get()->first();
        return view('admin.editBlog',['blog'=>$blog,'categories'=>$categories]);
    }
    public function postEditBlog(editBlogRequest $request, $id){
        $item = new Blog;
        $item->edit($request,$id);
        return redirect()->route('editBlog',$id)->with(['flash_level'=>'success','flash_message'=>'Sửa thành công']);
    }
    public function deleteBlog($id){
        $item = Blog::where('id',$id)->get()->first();
        $item->delete();
        return redirect()->route('blogs')->with(['flash_level'=>'success','flash_message'=>'Xóa tin tức thành công']); 
    }
    // end blog
}
