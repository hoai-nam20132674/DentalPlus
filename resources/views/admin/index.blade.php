@extends('admin.layout.default')
@section('content')
	<div class="page-content ">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="http://hasa.botble.com/admin">Bảng điều khiển</a></li>
            <li class="breadcrumb-item"><a href="http://hasa.botble.com/admin/posts">Blog</a></li>
            <li class="breadcrumb-item active">Bài viết</li>
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
					                                            <option value="posts.name">Tên</option>
					                                            <option value="posts.status">Trạng thái</option>
					                                            <option value="category">Category</option>
					                                            <option value="posts.created_at">Ngày tạo</option>
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

					    <form method="GET" action="http://hasa.botble.com/admin/posts" accept-charset="UTF-8" class="filter-form">
					        <input type="hidden" name="filter_table_id" class="filter-data-table-id" value="table-posts">
					        <input type="hidden" name="class" class="filter-data-class" value="Botble\Blog\Tables\PostTable">
					        <div class="filter_list inline-block filter-items-wrap">
					            <div class="filter-item form-filter  filter-item-default ">
					                <div class="ui-select-wrapper">
					                    <select name="filter_columns[]" class="ui-select filter-column-key">
					                        <option value="">Chọn trường</option>
					                        <option value="posts.name" >Tên</option>
					                        <option value="posts.status" >Trạng thái</option>
					                        <option value="category" >Category</option>
					                        <option value="posts.created_at" >Ngày tạo</option>
					                    </select>
					                    <svg class="svg-next-icon svg-next-icon-size-16">
					                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#select-chevron"></use>
					                    </svg>
					                </div>
					                <div class="ui-select-wrapper">
					                    <select name="filter_operators[]" class="ui-select filter-column-operator">
					                        <option value="like">Bao gồm</option>
					                        <option value="="selected >Bằng với</option>
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
					            <a href="http://hasa.botble.com/admin/posts" class="btn btn-info  hidden ">Làm mới</a>
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
								                	<a href="#" data-key="posts.name" data-class-item="Botble\Blog\Tables\PostTable" data-save-url="http://hasa.botble.com/tables/bulk-change/save"
								               class="bulk-change-item">Tên</a>
								                    <a href="#" data-key="posts.status" data-class-item="Botble\Blog\Tables\PostTable" data-save-url="http://hasa.botble.com/tables/bulk-change/save"
								               class="bulk-change-item">Trạng thái</a>
								                    <a href="#" data-key="category" data-class-item="Botble\Blog\Tables\PostTable" data-save-url="http://hasa.botble.com/tables/bulk-change/save"
								               class="bulk-change-item">Category</a>
								                    <a href="#" data-key="posts.created_at" data-class-item="Botble\Blog\Tables\PostTable" data-save-url="http://hasa.botble.com/tables/bulk-change/save"
								               class="bulk-change-item">Ngày tạo</a>
								            	</div>
								            </div>
                                    	</li>
                                        <li>
                                            <a href="http://hasa.botble.com/admin/posts/items/destroy" class="delete-many-entry-trigger" data-class-item="Botble\Blog\Tables\PostTable">Xo&aacute;</a>
                                        </li>
                                    </ul>
                                </div>
                                <button class="btn btn-primary btn-show-table-options">Lọc dữ liệu</button>
                            </div>
                		</div>
            		</div>
		            <div class="portlet-body">
		                <div class="table-responsive  table-has-actions   table-has-filter ">
                            <table  class="table table-striped table-hover vertical-middle" id="table-posts">
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
			<!-- end Modal -->
		</div>
	</div>
@endsection