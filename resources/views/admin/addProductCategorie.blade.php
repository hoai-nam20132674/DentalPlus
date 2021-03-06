@extends('admin.layout.default')
@section('css')
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/admin/fontawesome.min.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/admin/simple-line-icons.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/admin/select2.min.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/admin/select2-bootstrap.min.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/admin/pace-theme-minimal.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/admin/toastr.min.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/admin/jquery.mCustomScrollbar.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/admin/bootstrap-datepicker3.min.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/admin/spectrum.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/admin/jquery.fancybox.min.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/admin/core.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/admin/default.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/admin/slug.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/admin/seo-helper.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/admin/upload-image.css')}}">
@endsection
@section('content')
	<div class="page-content ">
                    <ol class="breadcrumb">
        
                            <li class="breadcrumb-item"><a href="{{URL::route('home')}}">Bảng điều khiển</a></li>
                            <li class="breadcrumb-item"><a href="{{URL::route('productCategories')}}">Danh mục khách hàng</a></li>
                            <li class="breadcrumb-item active">Thêm danh mục mới</li>
            
            </ol>


                    <div class="clearfix"></div>
                    <div id="main">
                        <form method="POST" action="{{URL::route('postAddProductCategorie')}}" enctype="multipart/form-data" accept-charset="UTF-8" id="form_1aa3f76ebce588e61c3b18ff42edfa1a">
                            <input type="hidden" name="_token" value="{{ csrf_token()}}">
    
        <div class="row">
        <div class="col-md-9">
                <div class="main-form">
                    <div class="form-body">
                        <div class="form-group"  >
    
                            <label for="name" class="control-label required">T&ecirc;n</label>
                            <input class="form-control" placeholder="Nhập tên" data-counter="120" name="name" type="text" required id="name">
                        </div>
    
                        <div class="form-group ">
                            <div id="edit-slug-box"  class="" >
                                <label class="control-label required" for="current-slug">Đường dẫn:</label>
                                <span id="sample-permalink">
                            
                                <span class="default-slug">http://dentalplusvn.com/<span id="editable-post-name">
                                    <input type="text" name="url" id="new-post-slug" class="form-control is-valid" value="" autocomplete="off"></span></span></span>
                            ‎    <span id="edit-slug-buttons">
                                    <!-- <button type="button" class="btn btn-secondary" id="change_slug">Sửa</button> -->
                                    <button type="button" class="save btn btn-secondary" id="btn-ok">OK</button>
                                    <button type="button" class="cancel button-link">Hủy bỏ</button>
                                    <a class="btn btn-info btn-preview" target="_blank" href="http://hasa.botble.com/blog/?preview=true">Preview</a>
                                </span>
                            </div>
                            <input type="hidden" id="current-slug" name="slug" value="">
                            <div data-url="http://hasa.botble.com/ajax/slug/create" data-view="http://hasa.botble.com/blog/" id="slug_id" data-id="0"></div>
                            <input type="hidden" name="slug_id" value="0">
                        </div>
                        <input type="hidden" name="model" value="Botble\Blog\Models\Category">

                        <div class="form-group" >
    
                            <label for="parent_id" class="control-label required">Cha</label>

                            <div class="ui-select-wrapper">
                                <select class="select-search-full ui-select ui-select" id="parent_id" name="parent_id">
                                    <option value="">None</option>
                                    @foreach($categories as $cate)
                                        <option value="{{$cate->id}}">{{$cate->name}}</option>
                                    @endforeach
                                </select>
                                <svg class="svg-next-icon svg-next-icon-size-16">
                                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#select-chevron"></use>
                                </svg>
                            </div>
                        </div>
    
                        <!-- <div class="form-group"  >
    
                            <label for="description" class="control-label">M&ocirc; tả</label>
                            <textarea class="form-control" rows="4" placeholder="Mô tả ngắn" data-counter="400" name="description" cols="50" id="description"></textarea>
                        </div> -->
    
                        <!-- <div class="form-group" >
    
                            <label for="is_default" class="control-label">Mặc định?</label>

                            <div class="onoffswitch">
                                <input type="hidden" name="is_default" value="0">
                                <input type="checkbox" name="is_default" class="onoffswitch-checkbox" id="is_default" value="1"   class="form-control">
                                <label class="onoffswitch-label" for="is_default">
                                    <span class="onoffswitch-inner"></span>
                                    <span class="onoffswitch-switch"></span>
                                </label>
                            </div>
                        </div> -->
    
                        <!-- <div class="form-group"  >
    
                            <label for="icon" class="control-label">Biểu tượng</label>
                            <input class="form-control" placeholder="Ex: fa fa-home" data-counter="60" name="icon" type="text" id="icon">
                        </div>
    
                        <div class="form-group"  >
    
                            <label for="order" class="control-label">Thứ tự</label>
                            <input class="form-control" placeholder="Sắp xếp" name="order" type="number" value="0" id="order">
                        </div> -->
    
                        <div class="form-group" >
    
                            <label for="is_featured" class="control-label">Nổi bật?</label>

                            <div class="onoffswitch">
                                <input type="hidden" name="is_featured" value="0">
                                <input type="checkbox" name="is_featured" class="onoffswitch-checkbox" id="is_featured" value="1"   class="form-control">
                                <label class="onoffswitch-label" for="is_featured">
                                    <span class="onoffswitch-inner"></span>
                                    <span class="onoffswitch-switch"></span>
                                </label>
                            </div>
                        </div>
    
                        <div class="clearfix"></div>
                    </div>
                </div>
            
            
            <div id="advanced-sortables" class="meta-box-sortables">
        <div id="seo_wrap" class="widget meta-boxes">
     <div class="widget-title">
          <h4><span>Tối ưu hoá bộ máy tìm kiếm (SEO)</span></h4>
     </div>
     <div class="widget-body">
          <a href="#" class="btn-trigger-show-seo-detail">Chỉnh sửa SEO</a>
        <div class="seo-preview">
            <p class="default-seo-description ">Thiết lập các thẻ mô tả giúp người dùng dễ dàng tìm thấy trên công cụ tìm kiếm như Google.</p>
            <div class="existed-seo-meta">
                <span class="page-title-seo">
                     
                </span>

                <div class="page-url-seo ws-nm">
                    <p>-</p>
                </div>

                <div class="ws-nm">
                    <span style="color: #70757a;">Jul 10, 2020 - </span>
                    <span class="page-description-seo">
                        
                    </span>
                </div>
            </div>
        </div>


        <div class="seo-edit-section">
            <hr>
            <div class="form-group">
                <label for="seo_title" class="control-label">Tiêu đề trang</label>
                <input class="form-control" id="seo_title" placeholder="Tiêu đề trang" data-counter="120" name="title" type="text" required >
            </div>
            <div class="form-group">
                <label for="seo_description" class="control-label">Từ khóa</label>
                <textarea class="form-control" rows="3" id="seo_keyword" placeholder="từ khóa" data-counter="155" name="seo_keyword" required cols="50"></textarea>
            </div>
            <div class="form-group">
                <label for="seo_description" class="control-label">Mô tả trang</label>
                <textarea class="form-control" rows="3" id="seo_description" placeholder="Mô tả trang" data-counter="155" required name="seo_description" cols="50"></textarea>
            </div>
        </div>

     </div>
</div>
    </div>
        </div>
        <div class="col-md-3 right-sidebar">
            <div class="widget meta-boxes form-actions form-actions-default action-horizontal">
    <div class="widget-title">
        <h4>
                        <span>Xuất bản</span>
        </h4>
    </div>
    <div class="widget-body">
        <div class="btn-set">
                        <button type="submit" name="submit" value="save" class="btn btn-info">
                <i class="fa fa-save"></i> Lưu
            </button>
                            &nbsp;
            <button type="submit" name="submit" value="apply" class="btn btn-success">
                <i class="fa fa-check-circle"></i> Lưu &amp; chỉnh sửa
            </button>
                    </div>
    </div>
</div>
<div id="waypoint"></div>
<div class="form-actions form-actions-fixed-top hidden">
    <ol class="breadcrumb">
        
                            <li class="breadcrumb-item"><a href="http://hasa.botble.com/admin">Bảng điều khiển</a></li>
            
        
                            <li class="breadcrumb-item"><a href="http://hasa.botble.com/admin/posts">Blog</a></li>
            
        
                            <li class="breadcrumb-item"><a href="http://hasa.botble.com/admin/categories">Danh mục</a></li>
            
        
                            <li class="breadcrumb-item active">Thêm danh mục mới</li>
            
            </ol>


    <div class="btn-set">
                <button type="submit" name="submit" value="save" class="btn btn-info">
            <i class="fa fa-save"></i> Lưu
        </button>
                    &nbsp;
            <button type="submit" name="submit" value="apply" class="btn btn-success">
                <i class="fa fa-check-circle"></i> Lưu &amp; chỉnh sửa
            </button>
            </div>
</div>

            
                                                <div class="widget meta-boxes">
                        <div class="widget-title">
                            <h4><label for="status" class="control-label required">Trạng th&aacute;i</label></h4>
                        </div>
                        <div class="widget-body">
                            <div class="ui-select-wrapper">
        <select class="form-control ui-select ui-select" id="status" name="display">
            <option value="1">Xuất bản</option>
            <option value="0">Bản nháp</option>
        </select>
    <svg class="svg-next-icon svg-next-icon-size-16">
        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#select-chevron"></use>
    </svg>
</div>

    


                        </div>
                    </div>
                    <div class="widget meta-boxes">
                        <div class="widget-title">
                            <h4><label for="image" class="control-label">Avata</label></h4>
                        </div>
                        <div class="widget-body">
                            <div class="image-box" style="border: 1px solid #e2e2e2;">
                                <div class="file-upload">   
                                    <div class="file-upload-content file-upload-content100" style="position: relative;">
                                        <img width="100%" class="file-upload-image file-upload-image100" src="{{asset('uploads/images/icon-image.gif')}}" alt="your image" />
                                        <div class="image-title-wrap image-title-wrap100" style="position: absolute;top: 0px; right: 0px;">
                                            <button type="button" onclick="removeUploadTest(100)" class="remove-image">Ảnh đại diện</button>
                                        </div>
                                        <input required style="z-index: 100; position: absolute; top: 0px; left: 0px;" class="file-upload-input file-upload-input100" type='file' required name="avata" onchange="readURLTest(this,100);" accept="image/*" />
                                    </div>
                                </div>
    
                            </div>

    


                        </div>
                    </div>
                            
                    </div>
    </div>

            </form>
    
                        </div>
                </div>
@endsection
@section('js')
	<script src="{{asset('js/admin/respond.min.js')}}"></script>
    <script src="{{asset('js/admin/excanvas.min.js')}}"></script>
    <script src="{{asset('js/admin/ie8.fix.min.js')}}"></script>
    <script src="{{asset('js/admin/modernizr.min.js')}}"></script>
    <script src="{{asset('js/admin/select2.min.js')}}"></script>
    <script src="{{asset('js/admin/bootstrap-datepicker.min.js')}}"></script>
    <script src="{{asset('js/admin/jquery.cookie.js')}}"></script>
    <script src="{{asset('js/admin/core.js')}}"></script>
    <script src="{{asset('js/admin/toastr.min.js')}}"></script>
    <script src="{{asset('js/admin/pace.min.js')}}"></script>
    <script src="{{asset('js/admin/jquery.mCustomScrollbar.js')}}"></script>
    <script src="{{asset('js/admin/jquery.stickytableheaders.js')}}"></script>
    <script src="{{asset('js/admin/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('js/admin/spectrum.js')}}"></script>
    <script src="{{asset('js/admin/jquery.fancybox.min.js')}}"></script>
    <script src="{{asset('js/admin/js-validation.js')}}"></script>
    <script src="{{asset('js/admin/jquery.are-you-sure.js')}}"></script>
    <script src="{{asset('js/admin/slug.js')}}"></script>
    <script src="{{asset('js/admin/seo-helper.js')}}"></script>
    <script src="{{asset('js/admin/upload-image.js')}}"></script>
@endsection