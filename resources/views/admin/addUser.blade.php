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
    <link media="all" type="text/css" rel="stylesheet" href="http://hasa.botble.com/vendor/core/css/core.css">
    <link media="all" type="text/css" rel="stylesheet" href="http://hasa.botble.com/vendor/core/css/themes/default.css">
@endsection
@section('content')
    <div class="page-content ">
        <ol class="breadcrumb">

            <li class="breadcrumb-item"><a href="http://hasa.botble.com/admin">Bảng điều khiển</a></li>


            <li class="breadcrumb-item active">Quản trị hệ thống</li>


            <li class="breadcrumb-item"><a href="http://hasa.botble.com/admin/system/roles">Nhóm và phân quyền</a></li>


            <li class="breadcrumb-item active">Create a new user</li>
        
        </ol>


        <div class="clearfix"></div>
        <div id="main">
            <form method="POST" action="{{URL::route('postAddUser')}}" accept-charset="UTF-8" id="form_56d0a8f2e8c8165e444275f5c4091d06">
                <input type="hidden" name="_token" value="{{ csrf_token()}}">
    
                <div class="row">
                    <div class="col-md-9">
                        <div class="main-form">
                            <div class="form-body">
                                <div class="row">
                                    <div class="form-group col-md-12"  >
                                        <label for="name" class="control-label required">Họ và Tên</label>
                                        <input class="form-control" data-counter="30" name="name" type="text" value="" id="name">
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6"  >
            
                                        <label for="phone" class="control-label required">Điện thoại</label>
                                        <input class="form-control" data-counter="30" name="phone" type="text" id="phone">
                                    </div>
                                    <div class="form-group col-md-6"  >
                                        
                                        <label for="email" class="control-label required">Email</label>
                                        <input class="form-control" placeholder="Ex: example@gmail.com" data-counter="60" name="email" type="text" id="email">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6"  >
            
                                        <label for="password" class="control-label required">M&acirc;̣t kh&acirc;̉u</label>
                                        <input class="form-control" data-counter="60" name="password" type="password" id="password">
                                    </div>
                                    <div class="form-group col-md-6"  >
                                        
                                        <label for="confirm_password" class="control-label required">Nhập lại mật khẩu</label>
                                        <input class="form-control" data-counter="60" name="confirm_password" type="password" id="confirm_password">
                                    </div>
                                </div>
                                <div class="clearfix"></div>
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


                                <li class="breadcrumb-item active">Quản trị hệ thống</li>


                                <li class="breadcrumb-item"><a href="http://hasa.botble.com/admin/system/roles">Nhóm và phân quyền</a></li>


                                <li class="breadcrumb-item active">Create a new user</li>
                            
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
                                <h4><label for="role_id" class="control-label">Ph&acirc;n quy&ecirc;̀n</label></h4>
                            </div>
                            <div class="widget-body">
                                <div class="ui-select-wrapper">
                                    <select class="form-control roles-list ui-select ui-select" id="role_id" name="role">
                                        <option value="0" selected="selected">Biên tập viên</option>
                                        <option value="1" >Quản trị cấp cao</option>
                                    </select>
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
    <script src="http://hasa.botble.com/vendor/core/js/js-validation.js"></script>
    <script src="http://hasa.botble.com/vendor/core/libraries/jquery.are-you-sure/jquery.are-you-sure.js"></script>
@endsection