@extends('front-end.layout.default')
@section('css')
	<link href="https://bizweb.dktcdn.net/100/359/276/themes/725925/assets/bootstrap.scss.css?1593142743270" rel="stylesheet" type="text/css" />
	<link href="https://bizweb.dktcdn.net/100/359/276/themes/725925/assets/plugin.scss.css?1593142743270" rel="stylesheet" type="text/css" />							
	<link href="https://bizweb.dktcdn.net/100/359/276/themes/725925/assets/base.scss.css?1593142743270" rel="stylesheet" type="text/css" />	
	<link href="https://bizweb.dktcdn.net/100/359/276/themes/725925/assets/evo-main.scss.css?1593142743270" rel="stylesheet" type="text/css" />
	<link href="https://bizweb.dktcdn.net/100/359/276/themes/725925/assets/slick.scss.css?1593142743270" rel="stylesheet" type="text/css" />
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link href="https://bizweb.dktcdn.net/100/359/276/themes/725925/assets/evo-index.scss.css?1593142743270" rel="stylesheet" type="text/css" />
	<!-- <link href="https://bizweb.dktcdn.net/100/359/276/themes/725925/assets/evo-dich-vu.scss.css?1593142743270" rel="stylesheet" type="text/css" /> -->
	<!-- <link href="https://bizweb.dktcdn.net/100/359/276/themes/725925/assets/evo-blogs.scss.css?1593142743270" rel="stylesheet" type="text/css" /> -->
	<link href="https://bizweb.dktcdn.net/100/359/276/themes/725925/assets/evo-collections.scss.css?1593142743270" rel="stylesheet" type="text/css" />
@endsection
@section('body_class')
bg-body collection
@endsection
@section('content')
	<div class="container margin-top-20">
		<div class="row">
			<section class="main_container collection col-md-9 col-md-push-3">
				<h1 class="col-title">Dịch vụ Spa</h1>
				<div class="category-products products category-products-grids">
						
					<div class="sort-cate clearfix margin-bottom-10 hidden-xs">
						<div class="sort-cate-left hidden-xs">
							<h3>Xếp theo:</h3>
							<ul>
								<li class="btn-quick-sort alpha-asc">
									<a href="javascript:;" onclick="sortby('alpha-asc')" title="Tên A-Z"><i></i>Tên A-Z</a>
								</li>
								<li class="btn-quick-sort alpha-desc">
									<a href="javascript:;" onclick="sortby('alpha-desc')" title="Tên Z-A"><i></i>Tên Z-A</a>
								</li>
								<li class="btn-quick-sort position-desc">
									<a href="javascript:;" onclick="sortby('created-desc')" title="Hàng mới"><i></i>Hàng mới</a>
								</li>
								<li class="btn-quick-sort price-asc">
									<a href="javascript:;" onclick="sortby('price-asc')" title="Giá thấp đến cao"><i></i>Giá thấp đến cao</a>
								</li>
								<li class="btn-quick-sort price-desc">
									<a href="javascript:;" onclick="sortby('price-desc')" title="Giá cao xuống thấp"><i></i>Giá cao xuống thấp</a>
								</li>
							</ul>
						</div>
						
					</div>
					
					<section class="products-view products-view-grid row">
		
						<div class="col-xs-6 col-sm-4 col-md-4 col-lg-4">
							 
							<div class="evo-product-block-item product.dich-vu">
								<div class="product-img">
									
									<a href="/dieu-tri-tre-hoa" title="Điều trị trẻ h&#243;a" class="image-resize">
										<img class="lazy" src="https://bizweb.dktcdn.net/thumb/pico/100/359/276/products/anh-tre-hoa-da.jpg?v=1562558426350" data-src="https://bizweb.dktcdn.net/thumb/large/100/359/276/products/anh-tre-hoa-da.jpg?v=1562558426350" alt="Điều trị trẻ h&#243;a" />
										
										<img class="lazy hidden-sm hidden-xs" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="https://bizweb.dktcdn.net/thumb/large/100/359/276/products/351932-hifu-2018-tre-dep-hon-5-tuoi-nang-co-xoa-nhan-tre-hoa-da-tao-hinh-vline-duy-nhat-1-lan-cam-ket-hieu-qua-100-madina-beauty-amp-academy.jpg?v=1562558427067" alt="Điều trị trẻ h&#243;a" />
										
									</a>
									<div class="button-add">
										<form action="/cart/add" method="post" enctype="multipart/form-data" class="hidden-md variants form-nut-grid form-ajaxtocart" data-id="product-actions-15001729">
											
											<button title="Chi tiết" type="button" onclick="location.href='/dieu-tri-tre-hoa'" class="action cart-button">Chi tiết</button>
											
										</form>
									</div>	
								</div>
								<div class="product-detail clearfix">
									<div class="box-pro-detail">
										<h3 class="pro-name">
											<a href="/dieu-tri-tre-hoa" title="Điều trị trẻ h&#243;a">Điều trị trẻ h&#243;a</a>
										</h3>
										<div class="box-pro-prices">	
											<p class="pro-price">
												
												Liên hệ
												
											</p>
										</div>
									</div>
								</div>
							</div>			
						</div>

						<div class="col-xs-6 col-sm-4 col-md-4 col-lg-4">
							 
							<div class="evo-product-block-item product.dich-vu">
								<div class="product-img">
									
									<a href="/nang-nguc-biofat" title="N&#226;ng ngực Biofat" class="image-resize">
										<img class="lazy" src="https://bizweb.dktcdn.net/thumb/pico/100/359/276/products/sahadeal-vn-15211782649030.jpg?v=1562558282753" data-src="https://bizweb.dktcdn.net/thumb/large/100/359/276/products/sahadeal-vn-15211782649030.jpg?v=1562558282753" alt="N&#226;ng ngực Biofat" />
										
										<img class="lazy hidden-sm hidden-xs" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="https://bizweb.dktcdn.net/thumb/large/100/359/276/products/1553087194-1.jpg?v=1562558284023" alt="N&#226;ng ngực Biofat" />
										
									</a>
									<div class="button-add">
										<form action="/cart/add" method="post" enctype="multipart/form-data" class="hidden-md variants form-nut-grid form-ajaxtocart" data-id="product-actions-15001714">
											
											<button title="Chi tiết" type="button" onclick="location.href='/nang-nguc-biofat'" class="action cart-button">Chi tiết</button>
											
										</form>
									</div>	
								</div>
								<div class="product-detail clearfix">
									<div class="box-pro-detail">
										<h3 class="pro-name">
											<a href="/nang-nguc-biofat" title="N&#226;ng ngực Biofat">N&#226;ng ngực Biofat</a>
										</h3>
										<div class="box-pro-prices">	
											<p class="pro-price">
												
												Liên hệ
												
											</p>
										</div>
									</div>
								</div>
							</div>			
						</div>

						<div class="col-xs-6 col-sm-4 col-md-4 col-lg-4">
							 
							<div class="evo-product-block-item product.dich-vu">
								<div class="product-img">
									
									<a href="/phau-thuat-ham-mat" title="Phẩu thuật h&#224;m mặt" class="image-resize">
										<img class="lazy" src="https://bizweb.dktcdn.net/thumb/pico/100/359/276/products/trong-rang-implant-boc-rang-su-nha-khoa-sai-gon-bs-quang-tphcm.jpg?v=1562558099607" data-src="https://bizweb.dktcdn.net/thumb/large/100/359/276/products/trong-rang-implant-boc-rang-su-nha-khoa-sai-gon-bs-quang-tphcm.jpg?v=1562558099607" alt="Phẩu thuật h&#224;m mặt" />
										
										<img class="lazy hidden-sm hidden-xs" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="https://bizweb.dktcdn.net/thumb/large/100/359/276/products/co-nen-tham-my-moi-khong-1.jpg?v=1562558100437" alt="Phẩu thuật h&#224;m mặt" />
										
									</a>
									<div class="button-add">
										<form action="/cart/add" method="post" enctype="multipart/form-data" class="hidden-md variants form-nut-grid form-ajaxtocart" data-id="product-actions-15001689">
											
											<button title="Chi tiết" type="button" onclick="location.href='/phau-thuat-ham-mat'" class="action cart-button">Chi tiết</button>
											
										</form>
									</div>	
								</div>
								<div class="product-detail clearfix">
									<div class="box-pro-detail">
										<h3 class="pro-name">
											<a href="/phau-thuat-ham-mat" title="Phẩu thuật h&#224;m mặt">Phẩu thuật h&#224;m mặt</a>
										</h3>
										<div class="box-pro-prices">	
											<p class="pro-price">
												
												Liên hệ
												
											</p>
										</div>
									</div>
								</div>
							</div>			
						</div>

						<div class="col-xs-6 col-sm-4 col-md-4 col-lg-4">
							 
							<div class="evo-product-block-item product.dich-vu">
								<div class="product-img">
									
									<a href="/giam-mo-slimlipo" title="Giảm mỡ Slimlipo" class="image-resize">
										<img class="lazy" src="https://bizweb.dktcdn.net/thumb/pico/100/359/276/products/giam-mo-bung-sau-sinh-hieu-qua.jpg?v=1562557922043" data-src="https://bizweb.dktcdn.net/thumb/large/100/359/276/products/giam-mo-bung-sau-sinh-hieu-qua.jpg?v=1562557922043" alt="Giảm mỡ Slimlipo" />
										
										<img class="lazy hidden-sm hidden-xs" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="https://bizweb.dktcdn.net/thumb/large/100/359/276/products/144952-giam-beo-toan-than-tieu-mo-vung-bung-phuong-linh-salon-hair-spa.jpg?v=1562557922887" alt="Giảm mỡ Slimlipo" />
										
									</a>
									<div class="button-add">
										<form action="/cart/add" method="post" enctype="multipart/form-data" class="hidden-md variants form-nut-grid form-ajaxtocart" data-id="product-actions-15001668">
											
											<button title="Chi tiết" type="button" onclick="location.href='/giam-mo-slimlipo'" class="action cart-button">Chi tiết</button>
											
										</form>
									</div>	
								</div>
								<div class="product-detail clearfix">
									<div class="box-pro-detail">
										<h3 class="pro-name">
											<a href="/giam-mo-slimlipo" title="Giảm mỡ Slimlipo">Giảm mỡ Slimlipo</a>
										</h3>
										<div class="box-pro-prices">	
											<p class="pro-price">
												
												Liên hệ
												
											</p>
										</div>
									</div>
								</div>
							</div>			
						</div>

						<div class="col-xs-6 col-sm-4 col-md-4 col-lg-4">
							 
							<div class="evo-product-block-item product.dich-vu">
								<div class="product-img">
									
									<a href="/cat-mi-eye-line" title="Cắt m&#237; Eye Line" class="image-resize">
										<img class="lazy" src="https://bizweb.dktcdn.net/thumb/pico/100/359/276/products/tao-hinh-mui-go.jpg?v=1562557597270" data-src="https://bizweb.dktcdn.net/thumb/large/100/359/276/products/tao-hinh-mui-go.jpg?v=1562557597270" alt="Cắt m&#237; Eye Line" />
										
										<img class="lazy hidden-sm hidden-xs" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="https://bizweb.dktcdn.net/thumb/large/100/359/276/products/don-cam-2.jpg?v=1562557598070" alt="Cắt m&#237; Eye Line" />
										
									</a>
									<div class="button-add">
										<form action="/cart/add" method="post" enctype="multipart/form-data" class="hidden-md variants form-nut-grid form-ajaxtocart" data-id="product-actions-15001645">
											
											<button title="Chi tiết" type="button" onclick="location.href='/cat-mi-eye-line'" class="action cart-button">Chi tiết</button>
											
										</form>
									</div>	
								</div>
								<div class="product-detail clearfix">
									<div class="box-pro-detail">
										<h3 class="pro-name">
											<a href="/cat-mi-eye-line" title="Cắt m&#237; Eye Line">Cắt m&#237; Eye Line</a>
										</h3>
										<div class="box-pro-prices">	
											<p class="pro-price">
												
												Liên hệ
												
											</p>
										</div>
									</div>
								</div>
							</div>			
						</div>

						<div class="col-xs-6 col-sm-4 col-md-4 col-lg-4">
							 
							<div class="evo-product-block-item product.dich-vu">
								<div class="product-img">
									
									<a href="/nang-mui-model" title="N&#226;ng mũi Model" class="image-resize">
										<img class="lazy" src="https://bizweb.dktcdn.net/thumb/pico/100/359/276/products/chi-phi-thuc-hien-9-phuong-phap-tham-mi-mui-tai-38-dia-diem-tham-mi-lam-dep.jpg?v=1562319391037" data-src="https://bizweb.dktcdn.net/thumb/large/100/359/276/products/chi-phi-thuc-hien-9-phuong-phap-tham-mi-mui-tai-38-dia-diem-tham-mi-lam-dep.jpg?v=1562319391037" alt="N&#226;ng mũi Model" />
										
										<img class="lazy hidden-sm hidden-xs" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="https://bizweb.dktcdn.net/thumb/large/100/359/276/products/5c41a5e829e3543aa2b31666-nhan-mi-mat.jpg?v=1562319391457" alt="N&#226;ng mũi Model" />
										
									</a>
									<div class="button-add">
										<form action="/cart/add" method="post" enctype="multipart/form-data" class="hidden-md variants form-nut-grid form-ajaxtocart" data-id="product-actions-14986891">
											
											<button title="Chi tiết" type="button" onclick="location.href='/nang-mui-model'" class="action cart-button">Chi tiết</button>
											
										</form>
									</div>	
								</div>
								<div class="product-detail clearfix">
									<div class="box-pro-detail">
										<h3 class="pro-name">
											<a href="/nang-mui-model" title="N&#226;ng mũi Model">N&#226;ng mũi Model</a>
										</h3>
										<div class="box-pro-prices">	
											<p class="pro-price">
												
												Liên hệ
												
											</p>
										</div>
									</div>
								</div>
							</div>			
						</div>
						
						<div class="clearfix"></div>
						<div class="text-xs-right">
							
						</div>
					</section>	
					
					
				</div>
			</section>
			<aside class="evo-sidebar sidebar left-content col-md-3 col-md-pull-9">
				<aside class="aside-item collection-category">
					<div class="aside-title">
						<h3 class="title-head margin-top-0">Danh mục</h3>
					</div>
					<div class="aside-content">
						
						<ul class="nav navbar-pills nav-category">
							
							
							<li class="nav-item ">
								<a class="nav-link" href="/" title="Trang chủ">Trang chủ</a>
							</li>
							
							
							
							<li class="nav-item ">
								<a href="/gioi-thieu" class="nav-link" title="Giới thiệu">Giới thiệu</a>
								<span class="Collapsible__Plus"></span>
								<ul class="dropdown-menu">
									
									
									<li class="nav-item ">
										<a class="nav-link" href="/gioi-thieu" title="Về chúng tôi">Về chúng tôi</a>
									</li>
									
									
									
									<li class="nav-item ">
										<a class="nav-link" href="/chi-nhanh" title="Chi nhánh">Chi nhánh</a>
									</li>
									
									
									
									<li class="nav-item ">
										<a class="nav-link" href="/cau-hoi-thuong-gap" title="Câu hỏi thường gặp">Câu hỏi thường gặp</a>
									</li>
									
									
									
									<li class="nav-item ">
										<a class="nav-link" href="/" title="Liên hệ">Liên hệ</a>
									</li>
									
									

								</ul>
							</li>
							
							
							
							<li class="nav-item ">
								<a href="/collections/all" class="nav-link" title="Sản phẩm">Sản phẩm</a>
								<span class="Collapsible__Plus"></span>
								<ul class="dropdown-menu">
									
									
									<li class="nav-item ">
										<a class="nav-link" href="/san-pham-moi" title="Sản phẩm mới">Sản phẩm mới</a>
									</li>
									
									
									
									<li class="nav-item ">
										<a class="nav-link" href="/san-pham-noi-bat" title="Sản phẩm nổi bật">Sản phẩm nổi bật</a>
									</li>
									
									

								</ul>
							</li>
							
							
							
							<li class="nav-item ">
								<a class="nav-link" href="/tin-tuc" title="Tin tức">Tin tức</a>
							</li>
							
							
							
							<li class="nav-item ">
								<a href="/blogs/all" class="nav-link" title="Dịch vụ">Dịch vụ</a>
								<span class="Collapsible__Plus"></span>
								<ul class="dropdown-menu">
									
									
									<li class="dropdown-submenu nav-item ">
										<a class="nav-link" href="/nang-mui" title="Nâng mũi">Nâng mũi</a>
										<span class="Collapsible__Plus"></span>
										<ul class="dropdown-menu">
											
											
											<li class="nav-item ">
												<a class="nav-link" href="/nang-mui-model-2d-boc-sun" title="Nâng mũi Model 2D - Bọc sụn">Nâng mũi Model 2D - Bọc sụn</a>
											</li>
											
											
											
											<li class="nav-item ">
												<a class="nav-link" href="/nang-mui-model-2d-han-quoc" title="Nâng mũi Model 2D - Hàn Quốc">Nâng mũi Model 2D - Hàn Quốc</a>
											</li>
											
											
											
											<li class="nav-item ">
												<a class="nav-link" href="/nang-mui-model-3d" title="Nâng mũi Model 3D">Nâng mũi Model 3D</a>
											</li>
											
											
											
											<li class="nav-item ">
												<a class="nav-link" href="/nang-mui-model-4d-cau-truc" title="Nâng mũi Model 4D - Cấu trúc">Nâng mũi Model 4D - Cấu trúc</a>
											</li>
											
											
											
											<li class="nav-item ">
												<a class="nav-link" href="/nang-mui-model-4d-nanoform" title="Nâng mũi Model 4D - NanoForm">Nâng mũi Model 4D - NanoForm</a>
											</li>
											
											
										</ul>                      
									</li>
									
									
									
									<li class="dropdown-submenu nav-item ">
										<a class="nav-link" href="/cat-mi" title="Cắt mí">Cắt mí</a>
										<span class="Collapsible__Plus"></span>
										<ul class="dropdown-menu">
											
											
											<li class="dropdown-submenu nav-item ">
												<a class="nav-link" href="/bam-mi" title="Bấm mí">Bấm mí</a>
												<span class="Collapsible__Plus"></span>
												<ul class="dropdown-menu">
													
													<li class="dropdown-submenu nav-item ">
														<a class="nav-link" href="/bam-mi-han-quoc" title="Bấm mí Hàn Quốc">Bấm mí Hàn Quốc</a>
													</li>
													
													<li class="dropdown-submenu nav-item ">
														<a class="nav-link" href="/bam-mi-dr-park" title="Bấm mí Dr Park">Bấm mí Dr Park</a>
													</li>
													
												</ul>
											</li>
											
											
											
											<li class="dropdown-submenu nav-item ">
												<a class="nav-link" href="/chinh-hinh-mi" title="Chỉnh hình mí">Chỉnh hình mí</a>
												<span class="Collapsible__Plus"></span>
												<ul class="dropdown-menu">
													
													<li class="dropdown-submenu nav-item ">
														<a class="nav-link" href="/nang-cung-chan-may" title="Nâng cung chân mày">Nâng cung chân mày</a>
													</li>
													
													<li class="dropdown-submenu nav-item ">
														<a class="nav-link" href="/tao-khoe-mat" title="Tạo khoé mắt">Tạo khoé mắt</a>
													</li>
													
													<li class="dropdown-submenu nav-item ">
														<a class="nav-link" href="/lay-mo-mi" title="Lấy mỡ mí">Lấy mỡ mí</a>
													</li>
													
													<li class="dropdown-submenu nav-item ">
														<a class="nav-link" href="/xoa-ranh-le" title="Xóa rãnh lệ">Xóa rãnh lệ</a>
													</li>
													
													<li class="dropdown-submenu nav-item ">
														<a class="nav-link" href="/cay-ghep-mo-mat" title="Cấy/ghép mỡ mắt">Cấy/ghép mỡ mắt</a>
													</li>
													
													<li class="dropdown-submenu nav-item ">
														<a class="nav-link" href="/chinh-hinh-mi-duoi" title="Chỉnh hình mi dưới">Chỉnh hình mi dưới</a>
													</li>
													
												</ul>
											</li>
											
											
										</ul>                      
									</li>
									
									
									
									<li class="dropdown-submenu nav-item ">
										<a class="nav-link" href="/ham-mat" title="Hàm mặt">Hàm mặt</a>
										<span class="Collapsible__Plus"></span>
										<ul class="dropdown-menu">
											
											
											<li class="dropdown-submenu nav-item ">
												<a class="nav-link" href="/phau-thuat-ham" title="Phẫu thuật hàm">Phẫu thuật hàm</a>
												<span class="Collapsible__Plus"></span>
												<ul class="dropdown-menu">
													
													<li class="dropdown-submenu nav-item ">
														<a class="nav-link" href="/got-ham-v-line" title="Gọt hàm V-line">Gọt hàm V-line</a>
													</li>
													
													<li class="dropdown-submenu nav-item ">
														<a class="nav-link" href="/truot-ham" title="Trượt hàm">Trượt hàm</a>
													</li>
													
													<li class="dropdown-submenu nav-item ">
														<a class="nav-link" href="/chinh-hinh-ho-mom" title="Chỉnh hình hô - móm">Chỉnh hình hô - móm</a>
													</li>
													
													<li class="dropdown-submenu nav-item ">
														<a class="nav-link" href="/chua-cuoi-ho-loi" title="Chữa cười hở lợi">Chữa cười hở lợi</a>
													</li>
													
												</ul>
											</li>
											
											
											
											<li class="dropdown-submenu nav-item ">
												<a class="nav-link" href="/tham-my-cam" title="Thẩm mỹ Cằm">Thẩm mỹ Cằm</a>
												<span class="Collapsible__Plus"></span>
												<ul class="dropdown-menu">
													
													<li class="dropdown-submenu nav-item ">
														<a class="nav-link" href="/don-cam-han-quoc" title="Độn cằm Hàn Quốc">Độn cằm Hàn Quốc</a>
													</li>
													
													<li class="dropdown-submenu nav-item ">
														<a class="nav-link" href="/don-cam-dac-biet" title="Độn cằm đặc biệt">Độn cằm đặc biệt</a>
													</li>
													
													<li class="dropdown-submenu nav-item ">
														<a class="nav-link" href="/don-cam-khong-phau-thuat" title="Độn cằm không phẫu thuật">Độn cằm không phẫu thuật</a>
													</li>
													
													<li class="dropdown-submenu nav-item ">
														<a class="nav-link" href="/tao-cam-che" title="Tạo cằm chẻ">Tạo cằm chẻ</a>
													</li>
													
													<li class="dropdown-submenu nav-item ">
														<a class="nav-link" href="/lay-mo-nong-cam" title="Lấy mỡ nọng cằm">Lấy mỡ nọng cằm</a>
													</li>
													
												</ul>
											</li>
											
											
											
											<li class="dropdown-submenu nav-item ">
												<a class="nav-link" href="/tham-my-ma" title="Thẩm mỹ má">Thẩm mỹ má</a>
												<span class="Collapsible__Plus"></span>
												<ul class="dropdown-menu">
													
													<li class="dropdown-submenu nav-item ">
														<a class="nav-link" href="/ha-go-ma" title="Hạ gò má">Hạ gò má</a>
													</li>
													
													<li class="dropdown-submenu nav-item ">
														<a class="nav-link" href="/nang-go-ma" title="Nâng gò má">Nâng gò má</a>
													</li>
													
													<li class="dropdown-submenu nav-item ">
														<a class="nav-link" href="/tao-ma-lum" title="Tạo má lúm">Tạo má lúm</a>
													</li>
													
													<li class="dropdown-submenu nav-item ">
														<a class="nav-link" href="/giam-mo-ma" title="Giảm mỡ má">Giảm mỡ má</a>
													</li>
													
												</ul>
											</li>
											
											
										</ul>                      
									</li>

									<li class="nav-item ">
										<a class="nav-link" href="/voc-dang" title="Vóc dáng">Vóc dáng</a>
									</li>
									
									
									
									<li class="nav-item ">
										<a class="nav-link" href="/dieu-tri-spa" title="Điều trị Spa">Điều trị Spa</a>
									</li>

								</ul>
							</li>
							
							
							
							<li class="nav-item ">
								<a class="nav-link" href="/lien-he" title="Liên hệ">Liên hệ</a>
							</li>
							
							
						</ul>
						
					</div>
				</aside>
				<script src="https://bizweb.dktcdn.net/100/359/276/themes/725925/assets/search_filter.js?1593142743270" type="text/javascript"></script>

				<div class="aside-filter clearfix">
					<div class="heading">
						Tìm theo
					</div>
					<div class="aside-hidden-mobile">
						<div class="filter-container">
							<div class="filter-containers">	
								<div class="filter-container__selected-filter" style="display: none;">
									<div class="filter-container__selected-filter-header clearfix">
										<span class="filter-container__selected-filter-header-title">Bạn chọn</span>
										<a href="javascript:void(0)" onclick="clearAllFiltered()" class="filter-container__clear-all" title="Bỏ hết">Bỏ hết <i class="fa fa-angle-right"></i></a>
									</div>
									<div class="filter-container__selected-filter-list">
										<ul></ul>
									</div>
								</div>
							</div>
							<div class="clearfix"></div>
							
							<aside class="aside-item filter-vendor">
								<div class="aside-title">
									Thương hiệu
								</div>
								<div class="aside-content filter-group">
									<ul class="filter-vendor">
										
									</ul>
								</div>
							</aside>
							
							
							<aside class="aside-item filter-price">
								<div class="aside-title">
									Giá sản phẩm
								</div>
								<div class="aside-content filter-group">
									<ul>

										<li class="filter-item filter-item--check-box filter-item--green">
											<span>
												<label for="filter-duoi-100-000d">
													<input type="checkbox" id="filter-duoi-100-000d" onchange="toggleFilter(this);" data-group="Khoảng giá" data-field="price_min" data-text="Dưới 100.000đ" value="(<100000)" data-operator="OR">
													<i class="fa"></i>
													Giá dưới 100.000đ
												</label>
											</span>
										</li>

										<li class="filter-item filter-item--check-box filter-item--green">
											<span>
												<label for="filter-100-000d-200-000d">
													<input type="checkbox" id="filter-100-000d-200-000d" onchange="toggleFilter(this)" data-group="Khoảng giá" data-field="price_min" data-text="100.000đ - 200.000đ" value="(>=100000 AND <=200000)" data-operator="OR">
													<i class="fa"></i>
													100.000đ - 200.000đ							
												</label>
											</span>
										</li>	

										<li class="filter-item filter-item--check-box filter-item--green">
											<span>
												<label for="filter-200-000d-300-000d">
													<input type="checkbox" id="filter-200-000d-300-000d" onchange="toggleFilter(this)" data-group="Khoảng giá" data-field="price_min" data-text="200.000đ - 300.000đ" value="(>=200000 AND <=300000)" data-operator="OR">
													<i class="fa"></i>
													200.000đ - 300.000đ							
												</label>
											</span>
										</li>	

										<li class="filter-item filter-item--check-box filter-item--green">
											<span>
												<label for="filter-300-000d-500-000d">
													<input type="checkbox" id="filter-300-000d-500-000d" onchange="toggleFilter(this)" data-group="Khoảng giá" data-field="price_min" data-text="300.000đ - 500.000đ" value="(>=300000 AND <=500000)" data-operator="OR">
													<i class="fa"></i>
													300.000đ - 500.000đ							
												</label>
											</span>
										</li>	

										<li class="filter-item filter-item--check-box filter-item--green">
											<span>
												<label for="filter-500-000d-1-000-000d">
													<input type="checkbox" id="filter-500-000d-1-000-000d" onchange="toggleFilter(this)" data-group="Khoảng giá" data-field="price_min" data-text="500.000đ - 1.000.000đ" value="(>=500000 AND <=1000000)" data-operator="OR">
													<i class="fa"></i>
													500.000đ - 1.000.000đ							
												</label>
											</span>
										</li>	
										<li class="filter-item filter-item--check-box filter-item--green">
											<span>
												<label for="filter-tren1-000-000d">
													<input type="checkbox" id="filter-tren1-000-000d" onchange="toggleFilter(this)" data-group="Khoảng giá" data-field="price_min" data-text="Trên 1.000.000đ" value="(>1000000)" data-operator="OR">
													<i class="fa"></i>
													Giá trên 1.000.000đ
												</label>
											</span>
										</li>
																					
										
																		
									</ul>
								</div>
							</aside>

							<aside class="aside-item filter-type">
								<div class="aside-title">
									Loại
								</div>
								<div class="aside-content filter-group">
									<ul class="filter-type">
										
									</ul>
								</div>
							</aside>

						</div>
					</div>
				</div>
				
			</aside>
			<div id="open-filters" class="open-filters hidden-lg hidden-md">
				<i class="fa fa-filter" aria-hidden="true"></i>
			</div>
		</div>
	</div>
@endsection