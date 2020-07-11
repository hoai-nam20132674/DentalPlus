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
    <link media="all" type="text/css" rel="stylesheet" href="http://hasa.botble.com/vendor/core/libraries/datatables/media/css/dataTables.bootstrap.min.css">
    <link media="all" type="text/css" rel="stylesheet" href="http://hasa.botble.com/vendor/core/css/core.css">
    <link media="all" type="text/css" rel="stylesheet" href="http://hasa.botble.com/vendor/core/css/table.css">
    <link media="all" type="text/css" rel="stylesheet" href="http://hasa.botble.com/vendor/core/css/themes/default.css">
@endsection
@section('content')
	<div class="page-content ">
        <ol class="breadcrumb">

            <li class="breadcrumb-item"><a href="http://hasa.botble.com/admin">Bảng điều khiển</a></li>


            <li class="breadcrumb-item"><a href="http://hasa.botble.com/admin/posts">Blog</a></li>


            <li class="breadcrumb-item active">Dang sách bài viết</li>
        
        </ol>


        <div class="clearfix"></div>
        <div id="main">
        	@if( Session::has('flash_message'))
                <div class="note note-{{ Session::get('flash_level')}}">
				    <p>{{ Session::get('flash_message')}}</p>
				</div>
            @endif
            @if( count($errors) > 0)
		    	
    			@foreach($errors->all() as $error)
    				<div class="note note-danger">
					    <p>{{$error}}</p>
					</div>
    			@endforeach
		    		
	    	@endif
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
					                                            <option value="categories.name">Tên</option>
					                                            <option value="categories.status">Trạng thái</option>
					                                            <option value="categories.created_at">Ngày tạo</option>
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

					    <form method="GET" action="http://hasa.botble.com/admin/categories" accept-charset="UTF-8" class="filter-form">
					        <input type="hidden" name="filter_table_id" class="filter-data-table-id" value="table-categories">
					        <input type="hidden" name="class" class="filter-data-class" value="Botble\Blog\Tables\CategoryTable">
					        <div class="filter_list inline-block filter-items-wrap">
					            <div class="filter-item form-filter  filter-item-default ">
					                <div class="ui-select-wrapper">
					                    <select name="filter_columns[]" class="ui-select filter-column-key">
					                        <option value="">Chọn trường</option>
					                                                        <option value="categories.name">Tên</option>
					                                                        <option value="categories.status">Trạng thái</option>
					                                                        <option value="categories.created_at">Ngày tạo</option>
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
					            <a href="http://hasa.botble.com/admin/categories" class="btn btn-info  hidden ">Làm mới</a>
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
								                    <a href="#" data-key="categories.name" data-class-item="Botble\Blog\Tables\CategoryTable" data-save-url="http://hasa.botble.com/tables/bulk-change/save" class="bulk-change-item">Tên</a>
								                    <a href="#" data-key="categories.status" data-class-item="Botble\Blog\Tables\CategoryTable" data-save-url="http://hasa.botble.com/tables/bulk-change/save" class="bulk-change-item">Trạng thái</a>
								                    <a href="#" data-key="categories.created_at" data-class-item="Botble\Blog\Tables\CategoryTable" data-save-url="http://hasa.botble.com/tables/bulk-change/save" class="bulk-change-item">Ngày tạo</a>
								            	</div>
											</div>
                                        </li>
                                        <li>
                                            <a href="http://hasa.botble.com/admin/categories/items/destroy" class="delete-many-entry-trigger" data-class-item="Botble\Blog\Tables\CategoryTable">Xoá</a>
                                        </li>
                                    </ul>
                            	</div>
                                <button class="btn btn-primary btn-show-table-options">Lọc dữ liệu</button>
                            </div>
                		</div>
            		</div>
		            <div class="portlet-body">
		                <div class="table-responsive  table-has-actions   table-has-filter ">
                            <div id="table-categories_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer" style="width: 100%;">
                            	<div id="table-categories_filter" class="dataTables_filter">
                            		<label><input type="search" class="form-control form-control-sm" placeholder="Search..." aria-controls="table-categories"></label>
                            	</div>
                            	<div class="dt-buttons btn-group"> 
                            		<button class="btn btn-secondary action-item" tabindex="0" aria-controls="table-categories"><span><span data-action="create" data-href="{{URL::route('addBlog')}}"><i class="fa fa-plus"></i> Tạo mới</span></span></button> 
                            		<button class="btn btn-secondary buttons-reload" tabindex="0" aria-controls="table-categories"><span><i class="fas fa-sync"></i> Tải lại</span></button> 
                            	</div>
                            	<div id="table-categories_processing" class="dataTables_processing card" style="display: none;"></div>
                            	<table class="table table-striped table-hover vertical-middle dataTable no-footer" id="table-categories" role="grid" aria-describedby="table-categories_info" style="width: 1582px;">
                            		<thead>
										<tr>
											<th  width="10px" class="text-left no-sort" title="&lt;input class=&quot;table-check-all&quot; data-set=&quot;.dataTable .checkboxes&quot; type=&quot;checkbox&quot;&gt;">
												<input class="table-check-all" data-set=".dataTable .checkboxes" type="checkbox">
											</th>
											<th  title="ID" width="20px" class=" column-key-id">ID</th>
											<th  title="Hình ảnh" width="70px" class=" column-key-image">Hình ảnh</th>
											<th  title="Tên" class="text-left column-key-name">Tên</th>
											<th  title="Categories" width="150px" class="no-sort column-key-updated_at">Categories</th>
											<th  title="Tác giả" width="150px" class="no-sort column-key-author_id">Tác giả</th>
											<th  title="Ngày tạo" width="100px" class=" column-key-created_at">Ngày tạo</th>
											<th  title="Trạng thái" width="100px" class=" column-key-status">Trạng thái</th>
											<th  title="Tác vụ" width="134px" class="text-center">Tác vụ</th>
										</tr>
									</thead>
									<tbody>
										<tr role="row" class="odd">
											<td class=" text-left no-sort">
												<div class="text-left">
												    <div class="checkbox checkbox-primary table-checkbox">
												        <input type="checkbox" class="checkboxes" name="id[]" value="3">
												    </div>
												</div>
											</td>
											<td class="column-key-id sorting_1">3</td>
											<td class="  column-key-image">
												<img src="http://hasa.botble.com/storage/news/tui-120-150x150.png" width="50" alt="Summer Bikin 2020">
											</td>
											<td class=" text-left column-key-name"><a href="http://hasa.botble.com/admin/posts/edit/3">Summer Bikin 2020</a></td>
											<td class=" no-sort column-key-updated_at">Uncategorizied</td>
											<td class=" no-sort column-key-author_id">System Admin</td>
											<td class="  column-key-created_at">2020-06-13</td>
											<td class="  column-key-status"><span class="label-success status-label">Published</span></td>
											<td class=" text-center">
												<div class="table-actions">

								                    <a href="http://hasa.botble.com/admin/posts/edit/3" class="btn btn-icon btn-sm btn-primary" data-toggle="tooltip" data-original-title="Sửa">
								                    	<i class="fa fa-edit"></i>
								                    </a>
								        
								                    <a href="#" class="btn btn-icon btn-sm btn-danger deleteDialog" data-toggle="tooltip" data-section="http://hasa.botble.com/admin/posts/3" role="button" data-original-title="Xóa bản ghi">
								                    	<i class="fa fa-trash"></i>
								                    </a>
								                </div>
								            </td>
								        </tr>
								        <tr role="row" class="even">
								        	<td class=" text-left no-sort">
								        		<div class="text-left">
												    <div class="checkbox checkbox-primary table-checkbox">
												        <input type="checkbox" class="checkboxes" name="id[]" value="2">
												    </div>
												</div>
											</td>
											<td class="column-key-id sorting_1">2</td>
											<td class="  column-key-image"><img src="http://hasa.botble.com/storage/news/tui-123-150x150.png" width="50" alt="Summer Bikin 2020"></td>
											<td class=" text-left column-key-name"><a href="http://hasa.botble.com/admin/posts/edit/2">Summer Bikin 2020</a></td>
											<td class=" no-sort column-key-updated_at">Uncategorizied</td>
											<td class=" no-sort column-key-author_id">System Admin</td>
											<td class="  column-key-created_at">2020-06-13</td>
											<td class="  column-key-status"><span class="label-success status-label">Published</span></td>
											<td class=" text-center">
												<div class="table-actions">

								                    <a href="http://hasa.botble.com/admin/posts/edit/2" class="btn btn-icon btn-sm btn-primary" data-toggle="tooltip" data-original-title="Sửa"><i class="fa fa-edit"></i></a>
								        
								                    <a href="#" class="btn btn-icon btn-sm btn-danger deleteDialog" data-toggle="tooltip" data-section="http://hasa.botble.com/admin/posts/2" role="button" data-original-title="Xóa bản ghi"><i class="fa fa-trash"></i></a>
								                </div>
								            </td>
								        </tr>
								        <tr role="row" class="odd">
											<td class=" text-left no-sort">
												<div class="text-left">
												    <div class="checkbox checkbox-primary table-checkbox">
												        <input type="checkbox" class="checkboxes" name="id[]" value="3">
												    </div>
												</div>
											</td>
											<td class="column-key-id sorting_1">3</td>
											<td class="  column-key-image">
												<img src="http://hasa.botble.com/storage/news/tui-120-150x150.png" width="50" alt="Summer Bikin 2020">
											</td>
											<td class=" text-left column-key-name"><a href="http://hasa.botble.com/admin/posts/edit/3">Summer Bikin 2020</a></td>
											<td class=" no-sort column-key-updated_at">Uncategorizied</td>
											<td class=" no-sort column-key-author_id">System Admin</td>
											<td class="  column-key-created_at">2020-06-13</td>
											<td class="  column-key-status"><span class="label-success status-label">Published</span></td>
											<td class=" text-center">
												<div class="table-actions">

								                    <a href="http://hasa.botble.com/admin/posts/edit/3" class="btn btn-icon btn-sm btn-primary" data-toggle="tooltip" data-original-title="Sửa">
								                    	<i class="fa fa-edit"></i>
								                    </a>
								        
								                    <a href="#" class="btn btn-icon btn-sm btn-danger deleteDialog" data-toggle="tooltip" data-section="http://hasa.botble.com/admin/posts/3" role="button" data-original-title="Xóa bản ghi">
								                    	<i class="fa fa-trash"></i>
								                    </a>
								                </div>
								            </td>
								        </tr>
								    </tbody>
								</table>
								@include('admin.layout.table-footer')
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
    <script src="http://hasa.botble.com/vendor/core/libraries/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="http://hasa.botble.com/vendor/core/libraries/datatables/media/js/dataTables.bootstrap.min.js"></script>
    <script src="http://hasa.botble.com/vendor/core/libraries/datatables/extensions/Buttons/js/dataTables.buttons.min.js"></script>
    <script src="http://hasa.botble.com/vendor/core/libraries/datatables/extensions/Buttons/js/buttons.bootstrap.min.js"></script>
    <script src="http://hasa.botble.com/vendor/core/libraries/moment-with-locales.min.js"></script>
    <script src="http://hasa.botble.com/vendor/core/libraries/bootstrap3-typeahead.min.js"></script>
    <script src="http://hasa.botble.com/vendor/core/js/table.js"></script>
    <script src="http://hasa.botble.com/vendor/core/js/filter.js"></script>
@endsection