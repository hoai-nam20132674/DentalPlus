<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ProductImage;
use App\PCID;

class Product extends Model
{
    //
    protected $table = 'products';
    public function add($request){
    	$this->name = $request->name;
    	$this->title = $request->title;
    	$this->seo_keyword = $request->seo_keyword;
    	$this->seo_description = $request->seo_description;
    	$this->url = $request->url;
    	$this->content = $request->content;
    	$this->display = $request->display;
        $this->hot = $request->hot;
    	$file_name = $request->file('avata')->getClientOriginalName();
		$this->avata = $file_name;
    	$request->file('avata')->move('uploads/images/products/avatas/',$file_name);
    	// $request->file('avata')->move('public/uploads/images/blogs/categories/',$file_name);
    	$this->save();

    	$avata = new ProductImage;
    	$avata->url = $file_name;
    	$avata->role = 1;
    	$avata->product_id = $this->id;
    	$avata->save();

    	$categories = $request->categories;
    	$count = count($categories);
    	for($j=0;$j<$count;$j++){
            $pcid = new PCID;
            $pcid->product_id = $this->id;
            $pcid->cate_id = $categories[$j];
            $pcid->save();
        }

        if($request->hasFile('images')){ 
        	foreach($request->file('images') as $file){
                if(isset($file)){
                    $image = new ProductImage;
			    	$image->url = $file_name;
			    	$image->role = 0;
			    	$image->product_id = $this->id;
			    	$image->save();
			    	$file->move('uploads/images/products/details/',$file_name);
                }
            }
            
        }

    }
    public function edit($request,$id){
        $service = $this::where('id',$id)->get()->first();
        $service->name = $request->name;
        $service->title = $request->title;
        $service->seo_keyword = $request->seo_keyword;
        $service->seo_description = $request->seo_description;
        $service->url = $request->url;
        $service->content = $request->content;
        $service->display = $request->display;
        $service->hot = $request->hot;
        if($request->hasFile('avata')){ 
            $file_name = $request->file('avata')->getClientOriginalName();
            $service->avata = $file_name;
            $request->file('avata')->move('uploads/images/services/',$file_name);
            // $request->file('avata')->move('public/uploads/images/blogs/categories/',$file_name);
        }
        $service->save();
        $categories = $request->categories;
        $count = count($categories);
        $itemDeletes = SCID::where('service_id',$id)->whereNotIn('cate_id',$categories)->get();
        foreach($itemDeletes as $itemDelete){
            $itemDelete->delete();
        }
        for($j=0;$j<$count;$j++){
            $item = SCID::where('cate_id',$categories[$j])->where('service_id',$id)->get();
            if(count($item)==0){
                $scid = new SCID;
                $scid->service_id = $id;
                $scid->cate_id = $categories[$j];
                $scid->save();
            }
            
        }

    }
}
