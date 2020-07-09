@extends('admin.layout.default')
@section('content')
<div class="page-content ">
                    <ol class="breadcrumb">
        
                            <li class="breadcrumb-item"><a href="http://hasa.botble.com/admin">Bảng điều khiển</a></li>
            
        
                            <li class="breadcrumb-item"><a href="#">Hiển thị</a></li>
            
        
                            <li class="breadcrumb-item"><a href="http://hasa.botble.com/admin/menus">Menu</a></li>
            
        
                            <li class="breadcrumb-item active">Sửa trình đơn</li>
            
            </ol>


                    <div class="clearfix"></div>
                    <div id="main">
                                    <form method="POST" action="http://hasa.botble.com/admin/menus/edit/4" accept-charset="UTF-8" id="form_de7bcdb34b7e65f91db4054da5d794d3" class="form-save-menu"><input name="_token" type="hidden" value="kU6i13XxOpavyLG5JTRb9f8prUR9M5Hn14b8kD57">
    
        <div class="row">
        <div class="col-md-9">
                            <div class="main-form">
                    <div class="form-body">
                                                                                                                                                                            <div class="form-group"  >
    
    <label for="name" class="control-label required">T&ecirc;n</label>
    <input class="form-control" placeholder="Nhập tên" data-counter="120" name="name" type="text" value="Main menu" id="name">
    


        </div>
    
                                                                    
                                                                                                                                                                        <div class="clearfix"></div>
                    </div>
                </div>
            
                            <input type="hidden" name="deleted_nodes">
    <textarea name="menu_nodes" id="nestable-output" class="form-control hidden"></textarea>
    <div class="row widget-menu">
        <div class="col-md-4">
            <div class="panel-group" id="accordion">

                <div class="widget meta-boxes">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseBrands">
            <h4 class="widget-title" style="margin-top: 0">
                <span>Thương hiệu</span>
                <i class="fa fa-angle-down narrow-icon"></i>
            </h4>
        </a>
        <div id="collapseBrands" class="panel-collapse collapse">
            <div class="widget-body">
                <div class="box-links-for-menu">
                    <div class="the-box">
                        <ul  class="list-item">
            <li>
            <label for="menu_id_botbleecommercemodelsbrand_1" data-title="Velisa" data-reference-id="1"
                   data-reference-type="Botble\Ecommerce\Models\Brand">
                <input id="menu_id_Botble\Ecommerce\Models\Brand_1" name="menu_id" type="checkbox" value="1">
                Velisa
            </label>

                    </li>
    </ul>

                        <div class="text-right">
                            <div class="btn-group btn-group-devided">
                                <a href="#" class="btn-add-to-menu btn btn-primary">
                                    <span class="text"><i class="fa fa-plus"></i> Thêm vào trình đơn</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<div class="widget meta-boxes">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse_product_categories">
            <h4 class="widget-title" style="margin-top: 0">
                <span>Danh mục sản phẩm</span>
                <i class="fa fa-angle-down narrow-icon"></i>
            </h4>
        </a>
        <div id="collapse_product_categories" class="panel-collapse collapse">
            <div class="widget-body">
                <div class="box-links-for-menu">
                    <div class="the-box">
                        <ul class="list-item">
                            <ul  class="list-item">
            <li>
            <label for="menu_id_botbleecommercemodelsproductcategory_4" data-title="Bags" data-reference-id="4"
                   data-reference-type="Botble\Ecommerce\Models\ProductCategory">
                <input id="menu_id_Botble\Ecommerce\Models\ProductCategory_4" name="menu_id" type="checkbox" value="4">
                Bags
            </label>

                            
                    </li>
            <li>
            <label for="menu_id_botbleecommercemodelsproductcategory_2" data-title="Jewelry" data-reference-id="2"
                   data-reference-type="Botble\Ecommerce\Models\ProductCategory">
                <input id="menu_id_Botble\Ecommerce\Models\ProductCategory_2" name="menu_id" type="checkbox" value="2">
                Jewelry
            </label>

                            
                    </li>
            <li>
            <label for="menu_id_botbleecommercemodelsproductcategory_3" data-title="Shoes" data-reference-id="3"
                   data-reference-type="Botble\Ecommerce\Models\ProductCategory">
                <input id="menu_id_Botble\Ecommerce\Models\ProductCategory_3" name="menu_id" type="checkbox" value="3">
                Shoes
            </label>

                            
                    </li>
            <li>
            <label for="menu_id_botbleecommercemodelsproductcategory_1" data-title="Sweaters" data-reference-id="1"
                   data-reference-type="Botble\Ecommerce\Models\ProductCategory">
                <input id="menu_id_Botble\Ecommerce\Models\ProductCategory_1" name="menu_id" type="checkbox" value="1">
                Sweaters
            </label>

                            
                    </li>
    </ul>

                        </ul>
                        <div class="text-right">
                            <div class="btn-group btn-group-devided">
                                <a href="#" class="btn-add-to-menu btn btn-primary">
                                    <span class="text"><i class="fa fa-plus"></i> Thêm vào trình đơn</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<div class="widget meta-boxes">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapsePages">
            <h4 class="widget-title" style="margin-top: 0">
                <span>Trang</span>
                <i class="fa fa-angle-up narrow-icon"></i>
            </h4>
        </a>
        <div id="collapsePages" class="panel-collapse collapse in">
            <div class="widget-body">
                <div class="box-links-for-menu">
                    <div class="the-box">
                        <ul  class="list-item">
            <li>
            <label for="menu_id_botblepagemodelspage_2" data-title="Blog" data-reference-id="2"
                   data-reference-type="Botble\Page\Models\Page">
                <input id="menu_id_Botble\Page\Models\Page_2" name="menu_id" type="checkbox" value="2">
                Blog
            </label>

                    </li>
            <li>
            <label for="menu_id_botblepagemodelspage_3" data-title="Contact" data-reference-id="3"
                   data-reference-type="Botble\Page\Models\Page">
                <input id="menu_id_Botble\Page\Models\Page_3" name="menu_id" type="checkbox" value="3">
                Contact
            </label>

                    </li>
            <li>
            <label for="menu_id_botblepagemodelspage_1" data-title="Homepage" data-reference-id="1"
                   data-reference-type="Botble\Page\Models\Page">
                <input id="menu_id_Botble\Page\Models\Page_1" name="menu_id" type="checkbox" value="1">
                Homepage
            </label>

                    </li>
    </ul>

                        <div class="text-right">
                            <div class="btn-group btn-group-devided">
                                <a href="#" class="btn-add-to-menu btn btn-primary">
                                    <span class="text"><i class="fa fa-plus"></i> Thêm vào trình đơn</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<div class="widget meta-boxes">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseCategories">
            <h4 class="widget-title">
                <span>Danh mục</span>
                <i class="fa fa-angle-down narrow-icon"></i>
            </h4>
        </a>
        <div id="collapseCategories" class="panel-collapse collapse">
            <div class="widget-body">
                <div class="box-links-for-menu">
                    <div class="the-box">
                        <ul  class="list-item">
            <li>
            <label for="menu_id_botbleblogmodelscategory_1" data-title="Uncategorizied" data-reference-id="1"
                   data-reference-type="Botble\Blog\Models\Category">
                <input id="menu_id_Botble\Blog\Models\Category_1" name="menu_id" type="checkbox" value="1">
                Uncategorizied
            </label>

                            
                    </li>
    </ul>

                        <div class="text-right">
                            <div class="btn-group btn-group-devided">
                                <a href="#" class="btn-add-to-menu btn btn-primary">
                                    <span class="text"><i class="fa fa-plus"></i> Thêm vào trình đơn</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

                <div class="widget meta-boxes">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseCustomLink">
                        <h4 class="widget-title">
                            <span>Thêm liên kết</span>
                            <i class="fa fa-angle-down narrow-icon"></i>
                        </h4>
                    </a>
                    <div id="collapseCustomLink" class="panel-collapse collapse">
                        <div class="widget-body">
                            <div class="box-links-for-menu">
                                <div id="external_link" class="the-box">
                                    <div class="node-content">
                                        <div class="form-group">
                                            <label for="node-title">Tiêu đề</label>
                                            <input type="text" class="form-control" id="node-title" autocomplete="false">
                                        </div>
                                        <div class="form-group">
                                            <label for="node-url">URL</label>
                                            <input type="text" class="form-control" id="node-url" placeholder="http://" autocomplete="false">
                                        </div>
                                        <div class="form-group">
                                            <label for="node-icon">Biểu tượng</label>
                                            <input type="text" class="form-control" id="node-icon" placeholder="fa fa-home" autocomplete="false">
                                        </div>
                                        <div class="form-group">
                                            <label for="node-css">CSS class</label>
                                            <input type="text" class="form-control" id="node-css" autocomplete="false">
                                        </div>
                                        <div class="form-group">
                                            <label for="target">Target</label>
                                            <div class="ui-select-wrapper">
                                                <select name="target" class="ui-select" id="target">
                                                    <option value="_self">Mở liên kết trong tab hiện tại</option>
                                                    <option value="_blank">Mở liên kết trong tab mới</option>
                                                </select>
                                                <svg class="svg-next-icon svg-next-icon-size-16">
                                                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#select-chevron"></use>
                                                </svg>
                                            </div>
                                        </div>

                                        <div class="text-right form-group node-actions hidden">
                                            <a class="btn red btn-remove" href="#">Xóa</a>
                                            <a class="btn blue btn-cancel" href="#">Hủy bỏ</a>
                                        </div>

                                        <div class="form-group">
                                            <div class="text-right add-button">
                                                <div class="btn-group">
                                                    <a href="#" class="btn-add-to-menu btn btn-primary"><span class="text"><i class="fa fa-plus"></i> Thêm vào trình đơn</span></a>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="widget meta-boxes">
                <div class="widget-title">
                    <h4>
                        <span>Cấu trúc trình đơn</span>
                    </h4>
                </div>
                <div class="widget-body">
                    <div class="dd nestable-menu" id="nestable" data-depth="0">
                        <ol class="dd-list">
            <li class="dd-item dd3-item " data-reference-type=""
            data-reference-id="0" data-title="Home"
            data-class="" data-id="23" data-custom-url=""
            data-icon-font="" data-target="_self">
            <div class="dd-handle dd3-handle"></div>
            <div class="dd3-content">
                <span class="text float-left" data-update="title">Home</span>
                <span class="text float-right">Custom link</span>
                <a href="#" title="" class="show-item-details"><i class="fa fa-angle-down"></i></a>
                <div class="clearfix"></div>
            </div>
            <div class="item-details">
                <label class="pad-bot-5">
                    <span class="text pad-top-5 dis-inline-block" data-update="title">Tiêu đề</span>
                    <input type="text" name="title" value="Home"
                           data-old="Home">
                </label>
                                    <label class="pad-bot-5 dis-inline-block">
                        <span class="text pad-top-5" data-update="custom-url">URL</span>
                        <input type="text" name="custom-url" value="" data-old="">
                    </label>
                                <label class="pad-bot-5 dis-inline-block">
                    <span class="text pad-top-5" data-update="icon-font">Biểu tượng</span>
                    <input type="text" name="icon-font" value="" data-old="">
                </label>
                <label class="pad-bot-10">
                    <span class="text pad-top-5 dis-inline-block">CSS class</span>
                    <input type="text" name="class" value="" data-old="">
                </label>
                <label class="pad-bot-10">
                    <span class="text pad-top-5 dis-inline-block">Target</span>
                    <div style="width: 228px; display: inline-block">
                        <div class="ui-select-wrapper">
                            <select name="target" class="ui-select" id="target" data-old="_self">
                                <option value="_self"  selected="selected" >Mở liên kết trong tab hiện tại
                                </option>
                                <option value="_blank" >Mở liên kết trong tab mới
                                </option>
                            </select>
                            <svg class="svg-next-icon svg-next-icon-size-16">
                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#select-chevron"></use>
                            </svg>
                        </div>
                    </div>
                </label>
                <div class="clearfix"></div>
                <div class="text-right" style="margin-top: 5px">
                    <a href="#" class="btn btn-danger btn-remove btn-sm">Xóa</a>
                    <a href="#" class="btn btn-primary btn-cancel btn-sm">Hủy bỏ</a>
                </div>
            </div>
            <div class="clearfix"></div>
                    </li>
            <li class="dd-item dd3-item " data-reference-type=""
            data-reference-id="0" data-title="Products"
            data-class="" data-id="14" data-custom-url="/products"
            data-icon-font="" data-target="_self">
            <div class="dd-handle dd3-handle"></div>
            <div class="dd3-content">
                <span class="text float-left" data-update="title">Products</span>
                <span class="text float-right">Custom link</span>
                <a href="#" title="" class="show-item-details"><i class="fa fa-angle-down"></i></a>
                <div class="clearfix"></div>
            </div>
            <div class="item-details">
                <label class="pad-bot-5">
                    <span class="text pad-top-5 dis-inline-block" data-update="title">Tiêu đề</span>
                    <input type="text" name="title" value="Products"
                           data-old="Products">
                </label>
                                    <label class="pad-bot-5 dis-inline-block">
                        <span class="text pad-top-5" data-update="custom-url">URL</span>
                        <input type="text" name="custom-url" value="/products" data-old="/products">
                    </label>
                                <label class="pad-bot-5 dis-inline-block">
                    <span class="text pad-top-5" data-update="icon-font">Biểu tượng</span>
                    <input type="text" name="icon-font" value="" data-old="">
                </label>
                <label class="pad-bot-10">
                    <span class="text pad-top-5 dis-inline-block">CSS class</span>
                    <input type="text" name="class" value="" data-old="">
                </label>
                <label class="pad-bot-10">
                    <span class="text pad-top-5 dis-inline-block">Target</span>
                    <div style="width: 228px; display: inline-block">
                        <div class="ui-select-wrapper">
                            <select name="target" class="ui-select" id="target" data-old="_self">
                                <option value="_self"  selected="selected" >Mở liên kết trong tab hiện tại
                                </option>
                                <option value="_blank" >Mở liên kết trong tab mới
                                </option>
                            </select>
                            <svg class="svg-next-icon svg-next-icon-size-16">
                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#select-chevron"></use>
                            </svg>
                        </div>
                    </div>
                </label>
                <div class="clearfix"></div>
                <div class="text-right" style="margin-top: 5px">
                    <a href="#" class="btn btn-danger btn-remove btn-sm">Xóa</a>
                    <a href="#" class="btn btn-primary btn-cancel btn-sm">Hủy bỏ</a>
                </div>
            </div>
            <div class="clearfix"></div>
                    </li>
            <li class="dd-item dd3-item  post-item " data-reference-type="Botble\Page\Models\Page"
            data-reference-id="2" data-title="Blog"
            data-class="" data-id="19" data-custom-url="http://hasa.botble.com/blog"
            data-icon-font="" data-target="_self">
            <div class="dd-handle dd3-handle"></div>
            <div class="dd3-content">
                <span class="text float-left" data-update="title">Blog</span>
                <span class="text float-right">Botble\Page\Models\Page</span>
                <a href="#" title="" class="show-item-details"><i class="fa fa-angle-down"></i></a>
                <div class="clearfix"></div>
            </div>
            <div class="item-details">
                <label class="pad-bot-5">
                    <span class="text pad-top-5 dis-inline-block" data-update="title">Tiêu đề</span>
                    <input type="text" name="title" value="Blog"
                           data-old="Blog">
                </label>
                                <label class="pad-bot-5 dis-inline-block">
                    <span class="text pad-top-5" data-update="icon-font">Biểu tượng</span>
                    <input type="text" name="icon-font" value="" data-old="">
                </label>
                <label class="pad-bot-10">
                    <span class="text pad-top-5 dis-inline-block">CSS class</span>
                    <input type="text" name="class" value="" data-old="">
                </label>
                <label class="pad-bot-10">
                    <span class="text pad-top-5 dis-inline-block">Target</span>
                    <div style="width: 228px; display: inline-block">
                        <div class="ui-select-wrapper">
                            <select name="target" class="ui-select" id="target" data-old="_self">
                                <option value="_self"  selected="selected" >Mở liên kết trong tab hiện tại
                                </option>
                                <option value="_blank" >Mở liên kết trong tab mới
                                </option>
                            </select>
                            <svg class="svg-next-icon svg-next-icon-size-16">
                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#select-chevron"></use>
                            </svg>
                        </div>
                    </div>
                </label>
                <div class="clearfix"></div>
                <div class="text-right" style="margin-top: 5px">
                    <a href="#" class="btn btn-danger btn-remove btn-sm">Xóa</a>
                    <a href="#" class="btn btn-primary btn-cancel btn-sm">Hủy bỏ</a>
                </div>
            </div>
            <div class="clearfix"></div>
                    </li>
            <li class="dd-item dd3-item  post-item " data-reference-type="Botble\Page\Models\Page"
            data-reference-id="3" data-title="Contact"
            data-class="" data-id="20" data-custom-url="http://hasa.botble.com/contact"
            data-icon-font="" data-target="_self">
            <div class="dd-handle dd3-handle"></div>
            <div class="dd3-content">
                <span class="text float-left" data-update="title">Contact</span>
                <span class="text float-right">Botble\Page\Models\Page</span>
                <a href="#" title="" class="show-item-details"><i class="fa fa-angle-down"></i></a>
                <div class="clearfix"></div>
            </div>
            <div class="item-details">
                <label class="pad-bot-5">
                    <span class="text pad-top-5 dis-inline-block" data-update="title">Tiêu đề</span>
                    <input type="text" name="title" value="Contact"
                           data-old="Contact">
                </label>
                                <label class="pad-bot-5 dis-inline-block">
                    <span class="text pad-top-5" data-update="icon-font">Biểu tượng</span>
                    <input type="text" name="icon-font" value="" data-old="">
                </label>
                <label class="pad-bot-10">
                    <span class="text pad-top-5 dis-inline-block">CSS class</span>
                    <input type="text" name="class" value="" data-old="">
                </label>
                <label class="pad-bot-10">
                    <span class="text pad-top-5 dis-inline-block">Target</span>
                    <div style="width: 228px; display: inline-block">
                        <div class="ui-select-wrapper">
                            <select name="target" class="ui-select" id="target" data-old="_self">
                                <option value="_self"  selected="selected" >Mở liên kết trong tab hiện tại
                                </option>
                                <option value="_blank" >Mở liên kết trong tab mới
                                </option>
                            </select>
                            <svg class="svg-next-icon svg-next-icon-size-16">
                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#select-chevron"></use>
                            </svg>
                        </div>
                    </div>
                </label>
                <div class="clearfix"></div>
                <div class="text-right" style="margin-top: 5px">
                    <a href="#" class="btn btn-danger btn-remove btn-sm">Xóa</a>
                    <a href="#" class="btn btn-primary btn-cancel btn-sm">Hủy bỏ</a>
                </div>
            </div>
            <div class="clearfix"></div>
                    </li>
    </ol>

                    </div>
                                            <hr>
                        <h3>Menu settings</h3>
                        <div class="row">
                            <div class="col-md-4">
                                <p><i>Display location</i></p>
                            </div>
                            <div class="col-md-8">
                                                                    <div>
                                        <input type="checkbox"  checked  class="hrv-checkbox" name="locations[]" value="main-menu" id="menu_location_main-menu">
                                        <label for="menu_location_main-menu">Main Navigation</label>
                                    </div>
                                                            </div>
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
            
        
                            <li class="breadcrumb-item"><a href="#">Hiển thị</a></li>
            
        
                            <li class="breadcrumb-item"><a href="http://hasa.botble.com/admin/menus">Menu</a></li>
            
        
                            <li class="breadcrumb-item active">Sửa trình đơn</li>
            
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
        <select class="form-control ui-select ui-select" id="status" name="status"><option value="published" selected="selected">Published</option><option value="draft">Bản nháp</option><option value="pending">Đang chờ xử lý</option></select>
    <svg class="svg-next-icon svg-next-icon-size-16">
        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#select-chevron"></use>
    </svg>
</div>

    


                        </div>
                    </div>
                            
                    </div>
    </div>

            </form>
    
                        </div>
                </div>
@endsection