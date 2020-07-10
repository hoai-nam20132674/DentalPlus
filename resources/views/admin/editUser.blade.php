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


        <li class="breadcrumb-item"><a href="http://hasa.botble.com/admin/system/users">Quản trị viên</a></li>


        <li class="breadcrumb-item active">System Admin</li>
    
    </ol>


    <div class="clearfix"></div>
	<div id="main">
        <div class="user-profile row">
	        <div class="col-md-3 col-sm-5 crop-avatar">
	            <!-- Profile links -->
	            <div class="block">
	                <div class="block mt-element-card mt-card-round mt-element-overlay">
	                    <div class="thumbnail">
	                        <div class="thumb">
	                            <div class="profile-userpic mt-card-item">
	                                <div class="avatar-view mt-card-avatar mt-overlay-1">
	                                    <img src="" class="img-fluid" alt="avatar">
	                                                                            <div class="mt-overlay">
	                                            <ul class="mt-info">
	                                                <li>
	                                                    <a class="btn default btn-outline" href="javascript:;">
	                                                        <i class="icon-note"></i>
	                                                    </a>
	                                                </li>
	                                            </ul>
	                                        </div>
	                                                                    </div>
	                                <div class="mt-card-content">
	                                    <h3 class="mt-card-name">System Admin</h3>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	            <!-- /profile links -->

	                            <div class="modal fade" id="avatar-modal" tabindex="-1" role="dialog" aria-labelledby="avatar-modal-label"
	                     aria-hidden="true">
	                    <div class="modal-dialog modal-lg">
	                        <div class="modal-content">
	                            <form class="avatar-form" method="post" action="http://hasa.botble.com/admin/system/users/modify-profile-image/1" enctype="multipart/form-data">
	                                <div class="modal-header">
	                                    <h4 class="modal-title" id="avatar-modal-label"><i class="til_img"></i><strong>Thay đổi ảnh đại diện</strong></h4>
	                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
	                                        <span aria-hidden="true">×</span>
	                                    </button>
	                                </div>
	                                <div class="modal-body">

	                                    <div class="avatar-body">

	                                        <!-- Upload image and data -->
	                                        <div class="avatar-upload">
	                                            <input class="avatar-src" name="avatar_src" type="hidden">
	                                            <input class="avatar-data" name="avatar_data" type="hidden">
	                                            <input type="hidden" name="user_id" value="1"/>
	                                            <input name="_token" type="hidden" value="xDdfv7RIr8ryGy03z0QgsmaYjpboQ7Il3zVc7qxC">
	                                            <label for="avatarInput">Ảnh mới</label>
	                                            <input class="avatar-input" id="avatarInput" name="avatar_file" type="file">
	                                        </div>

	                                        <div class="loading" tabindex="-1" role="img" aria-label="Đang tải"></div>

	                                        <!-- Crop and preview -->
	                                        <div class="row">
	                                            <div class="col-md-9">
	                                                <div class="avatar-wrapper"></div>
	                                            </div>
	                                            <div class="col-md-3">
	                                                <div class="avatar-preview preview-lg"></div>
	                                                <div class="avatar-preview preview-md"></div>
	                                                <div class="avatar-preview preview-sm"></div>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
	                                <div class="modal-footer">
	                                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Đóng</button>
	                                    <button class="btn btn-primary avatar-save" type="submit">Lưu</button>
	                                </div>
	                            </form>
	                        </div>
	                    </div>
	                </div><!-- /.modal -->
	            
	        </div>
	        <div class="col-md-9 col-sm-7">
	            <div class="profile-content">
	                <div class="tabbable-custom">
	                    <ul class="nav nav-tabs">
	                        <li class="nav-item">
	                            <a href="#tab_1_1" class="nav-link active" data-toggle="tab" aria-expanded="true">Thông tin người dùng</a>
	                        </li>
	                                                    <li class="nav-item">
	                                <a href="#tab_1_3" class="nav-link" data-toggle="tab" aria-expanded="false">Thay đổi mật khẩu</a>
	                            </li>
	                                                
	                    </ul>
	                    <div class="tab-content">
		                    <!-- PERSONAL INFO TAB -->
		                    <div class="tab-pane active" id="tab_1_1">
			                    <form method="POST" action="{{URL::route('postEditUser',$user->id)}}" accept-charset="UTF-8" id="profile-form" class="row">
			                    	<input type="hidden" name="_token" value="{{ csrf_token()}}">


			                        <div class="form-group col-md-12"  >
			    
									    <label for="name" class="control-label required">Họ Tên</label>
									    <input class="form-control" data-counter="30" name="name" type="text" value="{{$user->name}}" id="name">
							        </div>
			    
			    
			                        <div class="form-group col-md-6"  >
			    
									    <label for="phone" class="control-label required">Điện thoại</label>
									    <input class="form-control" data-counter="30" name="phone" type="number" value="{{$user->phone}}" id="phone">
							        </div>
			    
			                        <div class="form-group col-md-6"  >
			    
									    <label for="email" class="control-label required">Email</label>
									    <input class="form-control" placeholder="Ex: example@gmail.com" data-counter="60" name="email" type="text" value="{{$user->email}}" id="email">
							        </div>
			    
			                        <div class="clearfix"></div>



									<div class="form-group col-12">
									    <div class="form-actions">
									        <div class="btn-set text-center">
									            <button type="submit" name="submit" value="submit" class="btn btn-success">
									                <i class="fa fa-check-circle"></i> Cập nhật
									            </button>
									        </div>
									    </div>
									</div>

			    				</form>

		                

		                    </div>
		                    <!-- END PERSONAL INFO TAB -->
		                    <!-- CHANGE PASSWORD TAB -->
		                    <div class="tab-pane" id="tab_1_3">
		                        <form method="POST" action="{{URL::route('postEditPassword',$user->id)}}" accept-charset="UTF-8" id="password-form">
		                        	<input type="hidden" name="_token" value="{{ csrf_token()}}">


			                        <div class="form-group col-md-6"  >
			    
									    <label for="password" class="control-label required">M&acirc;̣t kh&acirc;̉u mới</label>
									    <input class="form-control" data-counter="60" name="password" type="password" id="password">
							        	<div class="pwstrength_viewport_progress" ><span class="hidden">Password Strength</span></div>
									</div>
			    
			                        <div class="form-group col-md-6"  >
			    
									    <label for="confirm_password" class="control-label required">Xác nh&acirc;̣n m&acirc;̣t kh&acirc;̉u mới</label>
									    <input class="form-control" data-counter="60" name="confirm_password" type="password" id="confirm_password">
							        </div>
			    
			                        <div class="clearfix"></div>



									<div class="form-group col-12">
									    <div class="form-actions">
									        <div class="btn-set text-center">
									            <button type="submit" name="submit" value="submit" class="btn btn-success">
									                <i class="fa fa-check-circle"></i> Cập nhật
									            </button>
									        </div>
									    </div>
									</div>

		    					</form>

		                

		                    </div>
		                    <!-- END CHANGE PASSWORD TAB -->
	                    
	                	</div>
	                </div>
	            </div>
	        </div>
    		<div class="clearfix"></div>
		</div>
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
    <script src="http://hasa.botble.com/vendor/core/libraries/cropper.min.js"></script>
    <script src="http://hasa.botble.com/vendor/core/js/js-validation.js"></script>
    <script src="http://hasa.botble.com/vendor/core/libraries/jquery.are-you-sure/jquery.are-you-sure.js"></script>
    <script src="http://hasa.botble.com/vendor/core/js/profile.js"></script>
@endsection