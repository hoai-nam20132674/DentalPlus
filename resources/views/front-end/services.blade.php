@extends('front-end.layout.default')
@section('meta')
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">			
	<title>{{$service_cate->title}}</title>
	<meta name="description" content="">
	<meta name="keywords" content="{{$service_cate->seo_keyword}}"/>		
	<link rel="canonical" href="{{$system->website}}/{{$service_cate->url}}"/>
	<meta name='revisit-after' content='1 days' />
	<meta name="robots" content="noodp,index,follow" />
	<link rel="icon" href="{{asset('uploads/images/systems/'.$system->shortcut_logo)}}" type="image/x-icon" />
	<meta property="og:type" content="website">
	<meta property="og:title" content="{{$service_cate->title}}">
	<meta property="og:image" content="{{asset('uploads/images/services/'.$service_cate->avata)}}">
	<meta property="og:image:secure_url" content="{{asset('uploads/images/services/'.$service_cate->avata)}}">
	<meta property="og:description" content="">
	<meta property="og:url" content="{{$system->website}}/{{$service_cate->url}}">
	<meta property="og:site_name" content="{{$service_cate->name}}">
@endsection
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
	<link href="https://bizweb.dktcdn.net/100/359/276/themes/725925/assets/evo-index.scss.css?1593142743270" rel="stylesheet" type="text/css" />
	<link href="https://bizweb.dktcdn.net/100/359/276/themes/725925/assets/evo-collections.scss.css?1593142743270" rel="stylesheet" type="text/css" />
	<link href="https://bizweb.dktcdn.net/100/359/276/themes/725925/assets/evo-products.scss.css?1594388769270" rel="stylesheet" type="text/css" />
@endsection
@section('body_class')
bg-body collection
@endsection
@section('content')
	<div class="container margin-top-20">
		<div class="row">
			<section class="main_container collection col-md-9" >
				<h1 class="col-title">{{$service_cate->name}}</h1>
				<div class="category-products products category-products-grids">
						
					<!-- <div class="sort-cate clearfix margin-bottom-10 hidden-xs">
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
						
					</div> -->
					
					<section class="products-view section_dich_vu row" style="background: #fff">
		
						@foreach($services as $service)
							<div class="col-md-4 col-sm-4 col-xs-6">
								<div class="evo-box-dich-vu">
									<div class="evo-box-dich-vu-group">
										<div class="evo-box-dich-vu-image">
											<img src="{{asset('uploads/images/services/'.$service->avata)}}" data-src="{{asset('uploads/images/services/'.$service->avata)}}" alt="{{$service->name}}" class="img-responsive center-block lazy" />
										</div>
										<div class="content-box-dich-vu hidden-sm hidden-xs">
											{{$service->seo_description}}
										</div>
									</div>
									<h3><a href="/{{$service->url}}" title="Nâng mũi Model">{{$service->name}}</a></h3>
								</div>
							</div>
						@endforeach

						
						
						<div class="clearfix"></div>
						<div class="text-xs-right">
							
						</div>
					</section>	
					
					
				</div>
			</section>
			@include('front-end.layout.sidebar')
			<div id="open-filters" class="open-filters hidden-lg hidden-md">
				<i class="fa fa-filter" aria-hidden="true"></i>
			</div>
		</div>
	</div>
@endsection