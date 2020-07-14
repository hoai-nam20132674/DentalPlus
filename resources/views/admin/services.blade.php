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
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/admin/dashboard.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/admin/default.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/admin/dataTables.bootstrap.min.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/admin/table.css')}}">
@endsection
@section('content')
	<div class="page-content ">
        <ol class="breadcrumb">

            <li class="breadcrumb-item"><a href="{{URL::route('home')}}">Bảng điều khiển</a></li>
            <li class="breadcrumb-item active">Dịch vụ</li>
        
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
                            		<button class="btn btn-secondary action-item" tabindex="0" aria-controls="table-categories"><span><span data-action="create" data-href="{{URL::route('addService')}}"><i class="fa fa-plus"></i> Tạo mới</span></span></button> 
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
											<th  title="Categories" width="300px" class="no-sort column-key-updated_at">Categories</th>
											<th  title="Tác giả" width="150px" class="no-sort column-key-author_id">Tác giả</th>
											<th  title="Ngày tạo" width="100px" class=" column-key-created_at">Ngày tạo</th>
											<th  title="Trạng thái" width="100px" class=" column-key-status">Trạng thái</th>
											<th  title="Tác vụ" width="134px" class="text-center">Tác vụ</th>
										</tr>
									</thead>
									<tbody>
										@php
											$i=1;
										@endphp
										@foreach($services as $service)
											@if($i%2 ==1 )
												<tr role="row" class="odd">
											@else
												<tr role="row" class="even">
											@endif
													<td class=" text-left no-sort">
														<div class="text-left">
														    <div class="checkbox checkbox-primary table-checkbox">
														        <input type="checkbox" class="checkboxes" name="id[]" value="{{$service->id}}">
														    </div>
														</div>
													</td>
													<td class="column-key-id sorting_{{$i}}">{{$i}}</td>
													<td class="  column-key-image">
														<img src="{{asset('uploads/images/services/'.$service->avata)}}" width="50" alt="{{$service->name}}">
													</td>
													<td class=" text-left column-key-name"><a href="">{{$service->name}}</a></td>
													@php
														$scids = App\SCID::where('service_id',$service->id)->get();
														
													@endphp
													<td class=" no-sort column-key-updated_at">
														@foreach($scids as $scid)
															@php
																$c = App\ServiceCate::where('id',$scid->cate_id)->get()->first();
															@endphp
															<a class="btn btn-sm btn-default">{{$c->name}}</a>
															
														@endforeach
													</td>
													<td class=" no-sort column-key-author_id">name</td>
													<td class="  column-key-created_at">{{$service->created_at}}</td>
													@if($service->display ==1 )
														<td class="  column-key-status"><span class="label-success status-label">Xuất bản</span></td>
													@else
														<td class="  column-key-status"><span class="label-danger status-label">Bản nháp</span></td>

													@endif
													<td class=" text-center">
														<div class="table-actions">

										                    <a href="{{URL::route('editService',$service->id)}}" class="btn btn-icon btn-sm btn-primary" data-toggle="tooltip" data-original-title="Sửa">
										                    	<i class="fa fa-edit"></i>
										                    </a>
										        
										                    <a href="#" class="btn btn-icon btn-sm btn-danger deleteDialog delete" data-toggle="tooltip" data-section="{{URL::route('deleteService',$service->id)}}" role="button" data-original-title="Xóa bản ghi">
										                    	<i class="fa fa-trash"></i>
										                    </a>
										                </div>
										            </td>
										        </tr>
								        @endforeach
								        
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
			                <a class="confirm-delete" href=""><button class="float-right btn btn-danger">Xóa</button></a>
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
    <script src="{{asset('js/admin/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('js/admin/dataTables.bootstrap.min.js')}}"></script>
    <script src="{{asset('js/admin/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('js/admin/buttons.bootstrap.min.js')}}"></script>
    <script src="{{asset('js/admin/moment-with-locales.min.js')}}"></script>
    <script src="{{asset('js/admin/bootstrap3-typeahead.min.js')}}"></script>
    <script src="{{asset('js/admin/table.js')}}"></script>
    <script src="{{asset('js/admin/filter.js')}}"></script>
    
@endsection