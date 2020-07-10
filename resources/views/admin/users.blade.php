@extends('admin.layout.default')
@section('css')
    <link media="all" type="text/css" rel="stylesheet" href="http://hasa.botble.com/vendor/core/libraries/font-awesome/css/fontawesome.min.css">
    <link media="all" type="text/css" rel="stylesheet" href="http://hasa.botble.com/vendor/core/libraries/simple-line-icons/css/simple-line-icons.css">
    <link media="all" type="text/css" rel="stylesheet" href="http://hasa.botble.com/vendor/core/libraries/select2/css/select2.min.css">
    <link media="all" type="text/css" rel="stylesheet" href="http://hasa.botble.com/vendor/core/libraries/select2/css/select2-bootstrap.min.css">
    <link media="all" type="text/css" rel="stylesheet" href="http://hasa.botble.com/vendor/core/libraries/pace/pace-theme-minimal.css">
    <link media="all" type="text/css" rel="stylesheet" href="http://hasa.botble.com/vendor/core/libraries/toastr/toastr.min.css">
    <link media="all" type="text/css" rel="stylesheet" href="http://hasa.botble.com/vendor/core/libraries/mcustom-scrollbar/jquery.mCustomScrollbar.css">
    <link media="all" type="text/css" rel="stylesheet" href="http://hasa.botble.com/vendor/core/libraries/bootstrap-datepicker/css/bootstrap-datepicker3.min.css">
    <link media="all" type="text/css" rel="stylesheet" href="http://hasa.botble.com/vendor/core/libraries/spectrum/spectrum.css">
    <link media="all" type="text/css" rel="stylesheet" href="http://hasa.botble.com/vendor/core/libraries/fancybox/jquery.fancybox.min.css">
    <link media="all" type="text/css" rel="stylesheet" href="http://hasa.botble.com/vendor/core/libraries/bootstrap3-editable/css/bootstrap-editable.css">
    <link media="all" type="text/css" rel="stylesheet" href="http://hasa.botble.com/vendor/core/libraries/datatables/media/css/dataTables.bootstrap.min.css">
    <link media="all" type="text/css" rel="stylesheet" href="http://hasa.botble.com/vendor/core/css/core.css">
    <link media="all" type="text/css" rel="stylesheet" href="http://hasa.botble.com/vendor/core/css/table.css">
    <link media="all" type="text/css" rel="stylesheet" href="http://hasa.botble.com/vendor/core/css/themes/default.css">
@endsection
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
            <div class="table-configuration-wrap">
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
                                <input class="form-control filter-column-value" type="text" placeholder="Giá trị" name="filter_values[]">
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
                                                                            <option value="users.username">Tên đăng nhập</option>
                                                                            <option value="users.email">Email</option>
                                                                            <option value="users.created_at">Ngày tạo</option>
                                                                    </select>
                                        <svg class="svg-next-icon svg-next-icon-size-16">
                                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#select-chevron"></use>
                                        </svg>
                                    </div>
                                    <div class="ui-select-wrapper">
                                        <select name="filter_operators[]" class="ui-select filter-column-operator">
                                            <option value="like">Bao gồm</option>
                                            <option value="=" selected="">Bằng với</option>
                                            <option value=">">Lớn hơn</option>
                                            <option value="<">Nhỏ hơn</option>
                                        </select>
                                        <svg class="svg-next-icon svg-next-icon-size-16">
                                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#select-chevron"></use>
                                        </svg>
                                    </div>
                                    <span class="filter-column-value-wrap">
                                        <input class="form-control filter-column-value" type="text" placeholder="Giá trị" name="filter_values[]" value="">
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
                                <a class="btn btn-secondary dropdown-toggle" href="#" data-toggle="dropdown">Hành động</a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <div class="dropdown dropdown-hover">
                                            <a href="javascript:;">Thay đổi hàng loạt
                                                <i class="fa fa-angle-right"></i>
                                            </a>
                                            <div class="dropdown-content">
                                                <a href="#" data-key="users.username" data-class-item="Botble\ACL\Tables\UserTable" data-save-url="http://hasa.botble.com/tables/bulk-change/save" class="bulk-change-item">Tên đăng nhập</a>
                                                <a href="#" data-key="users.email" data-class-item="Botble\ACL\Tables\UserTable" data-save-url="http://hasa.botble.com/tables/bulk-change/save" class="bulk-change-item">Email</a>
                                                <a href="#" data-key="users.status" data-class-item="Botble\ACL\Tables\UserTable" data-save-url="http://hasa.botble.com/tables/bulk-change/save" class="bulk-change-item">Trạng thái</a>
                                                <a href="#" data-key="users.created_at" data-class-item="Botble\ACL\Tables\UserTable" data-save-url="http://hasa.botble.com/tables/bulk-change/save" class="bulk-change-item">Ngày tạo</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="http://hasa.botble.com/admin/system/users/items/destroy" class="delete-many-entry-trigger" data-class-item="Botble\ACL\Tables\UserTable">Xoá</a>
                                    </li>
                                 </ul>
                            </div>
                            <button class="btn btn-primary btn-show-table-options">Lọc dữ liệu</button>
                        </div>
                    </div>
                </div>
                <div class="portlet-body">
                    <div class="table-responsive  table-has-actions   table-has-filter ">
                        <div id="table-users_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer" style="width: 100%;">
                            <div id="table-users_filter" class="dataTables_filter">
                                <label><input type="search" class="form-control form-control-sm" placeholder="Search..." aria-controls="table-users"></label>
                            </div>
                            <div class="dt-buttons btn-group"> 
                                <button class="btn btn-secondary action-item" tabindex="0" aria-controls="table-users">
                                    <span><span data-action="create" data-href="{{URL::route('addUser')}}"><i class="fa fa-plus"></i> Tạo mới</span></span>
                                </button> 
                                <button class="btn btn-secondary buttons-reload" tabindex="0" aria-controls="table-users"><span><i class="fas fa-sync"></i> Tải lại</span></button> 
                            </div>
                            <div id="table-users_processing" class="dataTables_processing card" style="display: none;"></div>
                            <table class="table table-striped table-hover vertical-middle dataTable no-footer" id="table-users" role="grid" aria-describedby="table-users_info" style="width: 1582px;">
                                <thead>
                                    <tr role="row">
                                        <th width="10px" class="text-left no-sort sorting_disabled" title="<input class=&quot;table-check-all&quot; data-set=&quot;.dataTable .checkboxes&quot; type=&quot;checkbox&quot;>" rowspan="1" colspan="1" aria-label="" style="width: 37px;">
                                            <input class="table-check-all" data-set=".dataTable .checkboxes" type="checkbox">
                                        </th>
                                        <th title="Tên đăng nhập" class="text-left column-key-username sorting_desc" tabindex="0" aria-controls="table-users" rowspan="1" colspan="1" aria-sort="descending" aria-label="Tên đăng nhậporderby asc" style="width: 181px;">Tên đăng nhập</th>
                                        <th title="Email" class="text-left column-key-email sorting" tabindex="0" aria-controls="table-users" rowspan="1" colspan="1" aria-label="Emailorderby asc" style="width: 271px;">Email</th>
                                        <th title="Phân quyền" class="column-key-role_name sorting" tabindex="0" aria-controls="table-users" rowspan="1" colspan="1" aria-label="Phân quyềnorderby asc" style="width: 191px;">Phân quyền</th>
                                        <th title="Ngày tạo" width="100px" class="column-key-created_at sorting" tabindex="0" aria-controls="table-users" rowspan="1" colspan="1" aria-label="Ngày tạoorderby asc" style="width: 100px;">Ngày tạo</th>
                                        <th title="Trạng thái" width="100px" class="column-key-status sorting" tabindex="0" aria-controls="table-users" rowspan="1" colspan="1" aria-label="Trạng tháiorderby asc" style="width: 100px;">Trạng thái</th>
                                        <th title="Is super?" width="100px" class="column-key-super_user sorting" tabindex="0" aria-controls="table-users" rowspan="1" colspan="1" aria-label="Is super?orderby asc" style="width: 100px;">Is super?</th>
                                        <th title="Tác vụ" width="350px" class="text-right sorting_disabled" rowspan="1" colspan="1" aria-label="Tác vụ" style="width: 350px;">Tác vụ</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $i=0
                                    @endphp
                                    @foreach($users as $user)
                                        
                                        @if($i%2 == 0)
                                        <tr role="row" class="odd">
                                        @else
                                        <tr role="row" class="even">
                                        @endif
                                            <td class=" text-left no-sort">
                                                <div class="text-left">
                                                    <div class="checkbox checkbox-primary table-checkbox">
                                                        <input type="checkbox" class="checkboxes" name="id[]" value="{{$user->id}}">
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-left column-key-username sorting_1">
                                                <a href="{{URL::route('editUser',$user->id)}}">{{$user->name}}</a>
                                            </td>
                                            <td class=" text-left column-key-email">{{$user->email}}</td>
                                            <td class="  column-key-role_name">
                                                <a data-type="select" data-source="http://hasa.botble.com/admin/system/roles/json" data-pk="2" data-url="http://hasa.botble.com/admin/system/roles/assign" data-value="0" data-title="Assigned Role" class="editable editable-click" href="#">No role assigned</a>
                                            </td>
                                            <td class="  column-key-created_at">{{$user->created_at}}</td>
                                            <td class="  column-key-status">
                                                <span class="label-info status-label">Activated</span>
                                            </td>
                                            <td class="  column-key-super_user">No</td>
                                            <td class=" text-right">
                                                <a href="http://hasa.botble.com/admin/system/users/make-super/2" class="btn btn-info">Make super</a>
                                                <a href="{{URL::route('editUser',$user->id)}}" class="btn btn-icon btn-primary" data-toggle="tooltip" data-original-title="View user's profile"><i class="fa fa-eye"></i></a>
                                                <a href="#" class="btn btn-icon btn-danger deleteDialog" data-toggle="tooltip" data-section="http://hasa.botble.com/admin/system/users/2" role="button" data-original-title="Xóa bản ghi"><i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    
                                </tbody>
                            </table>
                            <div class="datatables__info_wrap">
                                <div class="dataTables_paginate paging_simple_numbers" id="table-users_paginate" style="display: none;">
                                    <ul class="pagination">
                                        <li class="paginate_button page-item previous disabled" id="table-users_previous">
                                            <a href="#" aria-controls="table-users" aria-label="&amp;laquo; Trước" data-dt-idx="0" tabindex="0" class="page-link">« Trước</a>
                                        </li>
                                        <li class="paginate_button page-item active">
                                            <a href="#" aria-controls="table-users" data-dt-idx="1" tabindex="0" class="page-link">1</a>
                                        </li>
                                        <li class="paginate_button page-item next disabled" id="table-users_next">
                                            <a href="#" aria-controls="table-users" aria-label="Sau &amp;raquo;" data-dt-idx="2" tabindex="0" class="page-link">Sau »</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="dataTables_length" id="table-users_length" style="display: none;">
                                    <label>
                                        <span class="dt-length-style">
                                            <select name="table-users_length" aria-controls="table-users" class="form-control form-control-sm">
                                                <option value="-1">Tất cả</option>
                                                <option value="10">10</option>
                                                <option value="30">30</option>
                                                <option value="50">50</option>
                                            </select>
                                        </span>
                                    </label>
                                </div>
                                <div class="dataTables_info" id="table-users_info" role="status" aria-live="polite">
                                    <span class="dt-length-records"><i class="fa fa-globe"></i> <span class="d-none d-sm-inline">Hiển thị từ</span> 1 đến 2 trong tổng số <span class="badge badge-secondary bold badge-dt">2</span> <span class="hidden-xs">bản ghi</span></span>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
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
                        <button class="float-right btn btn-danger delete-crud-entry">Xóa</button>
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
                        <button class="float-right btn btn-danger delete-many-entry-button">Xóa</button>
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
                        <button class="float-right btn btn-info confirm-bulk-change-button" data-load-url="http://hasa.botble.com/tables/bulk-change/data">Submit</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- end Modal -->
    </div>
</div>
@endsection
@section('js')
    <script src="http://hasa.botble.com/vendor/core/libraries/respond.min.js"></script>
    <script src="http://hasa.botble.com/vendor/core/libraries/excanvas.min.js"></script>
    <script src="http://hasa.botble.com/vendor/core/libraries/ie8.fix.min.js"></script>
    <script src="http://hasa.botble.com/vendor/core/libraries/modernizr/modernizr.min.js"></script>
    <script src="http://hasa.botble.com/vendor/core/libraries/select2/js/select2.min.js"></script>
    <script src="http://hasa.botble.com/vendor/core/libraries/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
    <script src="http://hasa.botble.com/vendor/core/libraries/jquery-cookie/jquery.cookie.js"></script>
    <script src="http://hasa.botble.com/vendor/core/js/core.js"></script>
    <script src="http://hasa.botble.com/vendor/core/libraries/toastr/toastr.min.js"></script>
    <script src="http://hasa.botble.com/vendor/core/libraries/pace/pace.min.js"></script>
    <script src="http://hasa.botble.com/vendor/core/libraries/mcustom-scrollbar/jquery.mCustomScrollbar.js"></script>
    <script src="http://hasa.botble.com/vendor/core/libraries/stickytableheaders/jquery.stickytableheaders.js"></script>
    <script src="http://hasa.botble.com/vendor/core/libraries/jquery-waypoints/jquery.waypoints.min.js"></script>
    <script src="http://hasa.botble.com/vendor/core/libraries/spectrum/spectrum.js"></script>
    <script src="http://hasa.botble.com/vendor/core/libraries/fancybox/jquery.fancybox.min.js"></script>
    <script src="http://hasa.botble.com/vendor/core/libraries/bootstrap3-editable/js/bootstrap-editable.min.js"></script>
    <script src="http://hasa.botble.com/vendor/core/libraries/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="http://hasa.botble.com/vendor/core/libraries/datatables/media/js/dataTables.bootstrap.min.js"></script>
    <script src="http://hasa.botble.com/vendor/core/libraries/datatables/extensions/Buttons/js/dataTables.buttons.min.js"></script>
    <script src="http://hasa.botble.com/vendor/core/libraries/datatables/extensions/Buttons/js/buttons.bootstrap.min.js"></script>
    <script src="http://hasa.botble.com/vendor/core/libraries/moment-with-locales.min.js"></script>
    <script src="http://hasa.botble.com/vendor/core/libraries/bootstrap3-typeahead.min.js"></script>
    <script src="http://hasa.botble.com/vendor/core/js/table.js"></script>
    <script src="http://hasa.botble.com/vendor/core/js/filter.js"></script>
@endsection