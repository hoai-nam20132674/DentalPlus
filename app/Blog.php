<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use App\BCID;

class Blog extends Model
{
    //
    protected $table = 'blogs';
    public function add($request){
    	$this->name = $request->name;
    	$this->title = $request->title;
    	$this->seo_keyword = $request->seo_keyword;
    	$this->seo_description = $request->seo_description;
    	$this->url = $request->url;
    	$this->content = $request->content;
    	$this->user_id = Auth::user()->id;
    	$this->display = $request->display;
    	$file_name = $request->file('avata')->getClientOriginalName();
		$this->avata = $file_name;
    	$request->file('avata')->move('uploads/images/blogs/',$file_name);
    	// $request->file('avata')->move('public/uploads/images/blogs/categories/',$file_name);
    	$this->save();
    	$categories = $request->categories;
    	$count = count($categories);
    	for($j=0;$j<$count;$j++){
            $bcid = new BCID;
            $bcid->blog_id = $this->id;
            $bcid->cate_id = $categories[$j];
            $bcid->save();
        }

    }
}
