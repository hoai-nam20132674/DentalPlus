@extends('admin.layout.default')
@section('content')
<div class="page-content ">
                    <ol class="breadcrumb">
        
                            <li class="breadcrumb-item"><a href="http://hasa.botble.com/admin">Bảng điều khiển</a></li>
            
        
                            <li class="breadcrumb-item active">Quản trị hệ thống</li>
            
        
                            <li class="breadcrumb-item"><a href="http://hasa.botble.com/admin/system/roles">Nhóm và phân quyền</a></li>
            
        
                            <li class="breadcrumb-item active">Quản trị viên</li>
            
            </ol>


                    <div class="clearfix"></div>
                    <div id="main">
                            <div class="table-wrapper">
                    <div class="table-configuration-wrap" >
                <span class="configuration-close-btn btn-show-table-options"><i class="fa fa-times"></i></span>
                <div class="wrapper-filter">
    <p>Lọc dữ liệu</p>

    <input type="hidden" class="filter-data-url" value="http://hasa.botble.com/tables/get-filter-input">

    <div class="sample-filter-item-wrap hidden">
        <div class="filter-item form-filter">
            <div class="ui-select-wrapper">
                <select name="filter_columns[]" class="ui-select filter-column-key">
                    <option value="">Chọn trường</option>
                                            <option value="users.username">Tên đăng nhập</option>
                                            <option value="users.email">Email</option>
                                            <option value="users.created_at">Ngày tạo</option>
                                    </select>
                <svg class="svg-next-icon svg-next-icon-size-16">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#select-chevron"></use>
                </svg>
            </div>
            <div class="ui-select-wrapper">
                <select name="filter_operators[]" class="ui-select filter-operator filter-column-operator">
                    <option value="like">Bao gồm</option>
                    <option value="=">Bằng với</option>
                    <option value=">">Lớn hơn</option>
                    <option value="<">Nhỏ hơn</option>
                </select>
                <svg class="svg-next-icon svg-next-icon-size-16">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#select-chevron"></use>
                </svg>
            </div>
            <span class="filter-column-value-wrap">
                <input class="form-control filter-column-value" type="text" placeholder="Giá trị"
                       name="filter_values[]">
            </span>
            <span class="btn-remove-filter-item" title="Xoá">
                <i class="fa fa-trash text-danger"></i>
            </span>
        </div>
    </div>

    <form method="GET" action="http://hasa.botble.com/admin/system/users" accept-charset="UTF-8" class="filter-form">
        <input type="hidden" name="filter_table_id" class="filter-data-table-id" value="table-users">
        <input type="hidden" name="class" class="filter-data-class" value="Botble\ACL\Tables\UserTable">
        <div class="filter_list inline-block filter-items-wrap">
                            <div class="filter-item form-filter  filter-item-default ">
                    <div class="ui-select-wrapper">
                        <select name="filter_columns[]" class="ui-select filter-column-key">
                            <option value="">Chọn trường</option>
                                                            <option value="users.username" >Tên đăng nhập</option>
                                                            <option value="users.email" >Email</option>
                                                            <option value="users.created_at" >Ngày tạo</option>
                                                    </select>
                        <svg class="svg-next-icon svg-next-icon-size-16">
                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#select-chevron"></use>
                        </svg>
                    </div>
                    <div class="ui-select-wrapper">
                        <select name="filter_operators[]" class="ui-select filter-column-operator">
                            <option value="like"
                                    >Bao gồm</option>
                            <option value="="
                                     selected >Bằng với</option>
                            <option value=">"
                                    >Lớn hơn</option>
                            <option value="<"
                                    >Nhỏ hơn</option>
                        </select>
                        <svg class="svg-next-icon svg-next-icon-size-16">
                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#select-chevron"></use>
                        </svg>
                    </div>
                    <span class="filter-column-value-wrap">
                        <input class="form-control filter-column-value" type="text" placeholder="Giá trị"
                               name="filter_values[]" value="">
                    </span>
                                            <span class="btn-reset-filter-item" title="Làm mới">
                            <i class="fa fa-eraser text-info" style="font-size: 13px;"></i>
                        </span>
                                    </div>
                    </div>
        <div style="margin-top: 10px;">
            <a href="javascript:;" class="btn btn-secondary add-more-filter">Thêm bộ lọc</a>
            <a href="http://hasa.botble.com/admin/system/users" class="btn btn-info  hidden ">Làm mới</a>
            <button type="submit" class="btn btn-primary btn-apply">Áp dụng</button>
        </div>

    </form>
</div>

            </div>
                <div class="portlet light bordered portlet-no-padding">
            <div class="portlet-title">
                <div class="caption">
                    <div class="wrapper-action">
                                                    <div class="btn-group">
                                <a class="btn btn-secondary dropdown-toggle" href="#" data-toggle="dropdown">Hành động
                                </a>
                                <ul class="dropdown-menu">
                                                                            <li>
                                            <div class="dropdown dropdown-hover">
    <a href="javascript:;">Thay đổi hàng loạt
        <i class="fa fa-angle-right"></i>
    </a>
    <div class="dropdown-content">
                    <a href="#" data-key="users.username" data-class-item="Botble\ACL\Tables\UserTable" data-save-url="http://hasa.botble.com/tables/bulk-change/save"
               class="bulk-change-item">Tên đăng nhập</a>
                    <a href="#" data-key="users.email" data-class-item="Botble\ACL\Tables\UserTable" data-save-url="http://hasa.botble.com/tables/bulk-change/save"
               class="bulk-change-item">Email</a>
                    <a href="#" data-key="users.status" data-class-item="Botble\ACL\Tables\UserTable" data-save-url="http://hasa.botble.com/tables/bulk-change/save"
               class="bulk-change-item">Trạng thái</a>
                    <a href="#" data-key="users.created_at" data-class-item="Botble\ACL\Tables\UserTable" data-save-url="http://hasa.botble.com/tables/bulk-change/save"
               class="bulk-change-item">Ngày tạo</a>
            </div>
</div>
                                        </li>
                                                                            <li>
                                            <a href="http://hasa.botble.com/admin/system/users/items/destroy" class="delete-many-entry-trigger" data-class-item="Botble\ACL\Tables\UserTable">Xo&aacute;</a>
                                        </li>
                                                                    </ul>
                            </div>
                                                                            <button class="btn btn-primary btn-show-table-options">Lọc dữ liệu</button>
                                            </div>
                </div>
            </div>
            <div class="portlet-body">
                <div class="table-responsive  table-has-actions   table-has-filter ">
                                            <table  class="table table-striped table-hover vertical-middle" id="table-users"><thead><tr><th  width="10px" class="text-left no-sort" title="&lt;input class=&quot;table-check-all&quot; data-set=&quot;.dataTable .checkboxes&quot; type=&quot;checkbox&quot;&gt;"><input class="table-check-all" data-set=".dataTable .checkboxes" type="checkbox"></th><th  title="Tên đăng nhập" class="text-left column-key-username">Tên đăng nhập</th><th  title="Email" class="text-left column-key-email">Email</th><th  title="Phân quyền" class=" column-key-role_name">Phân quyền</th><th  title="Ngày tạo" width="100px" class=" column-key-created_at">Ngày tạo</th><th  title="Trạng thái" width="100px" class=" column-key-status">Trạng thái</th><th  title="Is super?" width="100px" class=" column-key-super_user">Is super?</th><th  title="Tác vụ" width="350px" class="text-right">Tác vụ</th></tr></thead></table>
                                    </div>
            </div>
        </div>
    </div>
    <div class="modal fade modal-confirm-delete" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <h4 class="modal-title"><i class="til_img"></i><strong>Xác nhận xóa</strong></h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    <span aria-hidden="true">×</span>
                </button>
            </div>

            <div class="modal-body with-padding">
                <div>Bạn có chắc chắn muốn xóa bản ghi này?</div>
            </div>

            <div class="modal-footer">
                <button class="float-left btn btn-warning" data-dismiss="modal">Huỷ bỏ</button>
                <button class="float-right btn btn-danger delete-crud-entry" >Xóa</button>
            </div>
        </div>
    </div>
</div>
<!-- end Modal -->
<div class="modal fade delete-many-modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <h4 class="modal-title"><i class="til_img"></i><strong>Xác nhận xóa</strong></h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    <span aria-hidden="true">×</span>
                </button>
            </div>

            <div class="modal-body with-padding">
                <div>Do you really want to delete selected record(s)?</div>
            </div>

            <div class="modal-footer">
                <button class="float-left btn btn-warning" data-dismiss="modal">Huỷ bỏ</button>
                <button class="float-right btn btn-danger delete-many-entry-button" >Xóa</button>
            </div>
        </div>
    </div>
</div>
<!-- end Modal -->
<div class="modal fade modal-bulk-change-items" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header bg-info">
                <h4 class="modal-title"><i class="til_img"></i><strong>Bulk changes</strong></h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    <span aria-hidden="true">×</span>
                </button>
            </div>

            <div class="modal-body with-padding">
                <div><div class="modal-bulk-change-content"></div></div>
            </div>

            <div class="modal-footer">
                <button class="float-left btn btn-warning" data-dismiss="modal">Huỷ bỏ</button>
                <button class="float-right btn btn-info confirm-bulk-change-button"  data-load-url="http://hasa.botble.com/tables/bulk-change/data">Submit</button>
            </div>
        </div>
    </div>
</div>
<!-- end Modal -->                    </div>
                </div>
@endsection