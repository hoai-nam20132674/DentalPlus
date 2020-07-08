
<!DOCTYPE html>
<html lang="vi">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">			
		<title>Evo Spa</title>
		<meta name="description" content="">
		<meta name="keywords" content="Evo Team, Evo Spa"/>		
		<link rel="canonical" href="https://evo-spa.mysapo.net/"/>
		<meta name='revisit-after' content='1 days' />
		<meta name="robots" content="noodp,index,follow" />
		<link rel="icon" href="https://bizweb.dktcdn.net/100/359/276/themes/725925/assets/favicon.png?1593142743270" type="image/x-icon" />
		<meta property="og:type" content="website">
		<meta property="og:title" content="Evo Spa">
		<meta property="og:image" content="https://bizweb.dktcdn.net/100/359/276/themes/725925/assets/logo.png?1593142743270">
		<meta property="og:image:secure_url" content="https://bizweb.dktcdn.net/100/359/276/themes/725925/assets/logo.png?1593142743270">
		<meta property="og:description" content="">
		<meta property="og:url" content="https://evo-spa.mysapo.net/">
		<meta property="og:site_name" content="Evo Spa">
		@yield('css')
		

		<script>
			(function () {
				function asyncLoad() {
					var urls = [];
					for (var i = 0; i < urls.length; i++) {
						var s = document.createElement('script');
						s.type = 'text/javascript';
						s.async = true;
						s.src = urls[i];
						var x = document.getElementsByTagName('script')[0];
						x.parentNode.insertBefore(s, x);
					}
				};
				window.attachEvent ? window.attachEvent('onload', asyncLoad) : window.addEventListener('load', asyncLoad, false);
			})();
		</script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" type="text/javascript"></script>
		
		<script src="https://bizweb.dktcdn.net/100/359/276/themes/725925/assets/option-selectors.js?1593142743270" type="text/javascript"></script>
		<script src="https://bizweb.dktcdn.net/assets/themes_support/api.jquery.js" type="text/javascript"></script>
		<script src="https://bizweb.dktcdn.net/100/359/276/themes/725925/assets/slick.js?1593142743270" type="text/javascript"></script>
		<script src="https://bizweb.dktcdn.net/100/359/276/themes/725925/assets/flickity.js?1593142743270" type="text/javascript"></script>
		





	</head>
	<body class=" @yield('body_class')">	
		<div class="evo-search-bar">
			<form action="/search" method="get">
				<div class="input-group">
					<input type="text" name="query" class="search-auto form-control" placeholder="Bạn cần tìm gì hôm nay?" />
					<span class="input-group-btn">
						<button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
					</span>
				</div>
			</form>
			<button class="site-header__search" title="Đóng tìm kiếm"><svg xmlns="http://www.w3.org/2000/svg" width="26.045" height="26.044"><g data-name="Group 470"><path d="M19.736 17.918l-4.896-4.896 4.896-4.896a1.242 1.242 0 0 0-.202-1.616 1.242 1.242 0 0 0-1.615-.202l-4.896 4.896L8.127 6.31a1.242 1.242 0 0 0-1.615.202 1.242 1.242 0 0 0-.202 1.615l4.895 4.896-4.896 4.896a1.242 1.242 0 0 0 .202 1.615 1.242 1.242 0 0 0 1.616.202l4.896-4.896 4.896 4.896a1.242 1.242 0 0 0 1.615-.202 1.242 1.242 0 0 0 .202-1.615z" data-name="Path 224" fill="#1c1c1c"></path></g></svg></button>
		</div>

		@include('front-end.layout.header')
		@yield('banner')
		@yield('info')
		@yield('services')
		@yield('feedback')
		@yield('product')
		@yield('blog')
		@yield('gallery')
		@yield('content')
		@include('front-end.layout.footer')

		<div class="backdrop__body-backdrop___1rvky"></div>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js" type="text/javascript"></script>
		<script>$.validate({});</script>	
		<div class="ajax-load"> 
			<span class="loading-icon">
				<svg version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
					 width="24px" height="30px" viewBox="0 0 24 30" style="enable-background:new 0 0 50 50;" xml:space="preserve">
					<rect x="0" y="10" width="4" height="10" fill="#333" opacity="0.2">
						<animate attributeName="opacity" attributeType="XML" values="0.2; 1; .2" begin="0s" dur="0.6s" repeatCount="indefinite" />
						<animate attributeName="height" attributeType="XML" values="10; 20; 10" begin="0s" dur="0.6s" repeatCount="indefinite" />
						<animate attributeName="y" attributeType="XML" values="10; 5; 10" begin="0s" dur="0.6s" repeatCount="indefinite" />
					</rect>
					<rect x="8" y="10" width="4" height="10" fill="#333"  opacity="0.2">
						<animate attributeName="opacity" attributeType="XML" values="0.2; 1; .2" begin="0.15s" dur="0.6s" repeatCount="indefinite" />
						<animate attributeName="height" attributeType="XML" values="10; 20; 10" begin="0.15s" dur="0.6s" repeatCount="indefinite" />
						<animate attributeName="y" attributeType="XML" values="10; 5; 10" begin="0.15s" dur="0.6s" repeatCount="indefinite" />
					</rect>
					<rect x="16" y="10" width="4" height="10" fill="#333"  opacity="0.2">
						<animate attributeName="opacity" attributeType="XML" values="0.2; 1; .2" begin="0.3s" dur="0.6s" repeatCount="indefinite" />
						<animate attributeName="height" attributeType="XML" values="10; 20; 10" begin="0.3s" dur="0.6s" repeatCount="indefinite" />
						<animate attributeName="y" attributeType="XML" values="10; 5; 10" begin="0.3s" dur="0.6s" repeatCount="indefinite" />
					</rect>
				</svg>
			</span>
		</div>
		<div class="loading awe-popup">
			<div class="overlay"></div>
			<div class="loader" title="2">
				<svg version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
					 width="24px" height="30px" viewBox="0 0 24 30" style="enable-background:new 0 0 50 50;" xml:space="preserve">
					<rect x="0" y="10" width="4" height="10" fill="#333" opacity="0.2">
						<animate attributeName="opacity" attributeType="XML" values="0.2; 1; .2" begin="0s" dur="0.6s" repeatCount="indefinite" />
						<animate attributeName="height" attributeType="XML" values="10; 20; 10" begin="0s" dur="0.6s" repeatCount="indefinite" />
						<animate attributeName="y" attributeType="XML" values="10; 5; 10" begin="0s" dur="0.6s" repeatCount="indefinite" />
					</rect>
					<rect x="8" y="10" width="4" height="10" fill="#333"  opacity="0.2">
						<animate attributeName="opacity" attributeType="XML" values="0.2; 1; .2" begin="0.15s" dur="0.6s" repeatCount="indefinite" />
						<animate attributeName="height" attributeType="XML" values="10; 20; 10" begin="0.15s" dur="0.6s" repeatCount="indefinite" />
						<animate attributeName="y" attributeType="XML" values="10; 5; 10" begin="0.15s" dur="0.6s" repeatCount="indefinite" />
					</rect>
					<rect x="16" y="10" width="4" height="10" fill="#333"  opacity="0.2">
						<animate attributeName="opacity" attributeType="XML" values="0.2; 1; .2" begin="0.3s" dur="0.6s" repeatCount="indefinite" />
						<animate attributeName="height" attributeType="XML" values="10; 20; 10" begin="0.3s" dur="0.6s" repeatCount="indefinite" />
						<animate attributeName="y" attributeType="XML" values="10; 5; 10" begin="0.3s" dur="0.6s" repeatCount="indefinite" />
					</rect>
				</svg>
			</div>
		</div>
		<div class="addcart-popup product-popup awe-popup">
			<div class="overlay no-background"></div>
			<div class="content">
				<div class="row row-noGutter">
					<div class="col-xl-6 col-xs-12">
						<div class="btn btn-full btn-primary a-left popup-title"><i class="fa fa-check"></i>Thêm vào giỏ hàng thành công
						</div>
						<a href="javascript:void(0)" class="close-window close-popup"><i class="fa fa-close"></i></a>
						<div class="info clearfix">
							<div class="product-image margin-top-5"><img alt="popup" src="https://bizweb.dktcdn.net/100/359/276/themes/725925/assets/logo.png?1593142743270" style="max-width:150px; height:auto"/></div>
							<div class="product-info"><p class="product-name"></p><p class="quantity color-main"><span>Số lượng: </span></p><p class="total-money color-main"><span>Tổng tiền: </span></p></div>
							<div class="actions"><button class="btn  btn-primary  margin-top-5 btn-continue">Tiếp tục mua hàng</button><button class="btn btn-gray margin-top-5" onclick="window.location='/cart'">Kiểm tra giỏ hàng</button></div> 
						</div>
					</div>			
				</div>
			</div>    
		</div>
		<div class="error-popup awe-popup"><div class="overlay no-background"></div><div class="popup-inner content"><div class="error-message"></div></div></div>
				
		<div id="popup-cart" class="modal fade" role="dialog">
			<div id="popup-cart-desktop" class="clearfix">
				<div class="title-popup-cart"><i class="ion ion-md-notifications-outline" aria-hidden="true"></i> Bạn đã thêm <span class="cart-popup-name"></span> vào giỏ hàng</div>
				<div class="title-quantity-popup"><a href="/cart" title="Xem giỏ hàng">Xem giỏ hàng</a></div>
				<div class="content-popup-cart clearfix">
					<div class="thead-popup"><div style="width: 55%;" class="text-left">Sản phẩm</div><div style="width: 15%;" class="text-center">Đơn giá</div><div style="width: 15%;" class="text-center">Số lượng</div><div style="width: 15%;" class="text-center">Thành tiền</div></div>
					<div class="tbody-popup"></div>
					<div class="tfoot-popup">
						<div class="tfoot-popup-1 clearfix">
							<div class="pull-left popupcon"><a class="button btn-continue" title="Tiếp tục mua hàng" onclick="$('#popup-cart').modal('hide');"><span><span><i class="fa fa-caret-left" aria-hidden="true"></i> Tiếp tục mua hàng</span></span></a></div>
							<div class="pull-right popup-total"><p>Thành tiền: <span class="total-price"></span></p></div>
						</div>
						<div class="tfoot-popup-2 clearfix"><a class="button btn-proceed-checkout" title="Thanh toán đơn hàng" href="/checkout"><span>Thanh toán đơn hàng</span></a></div>
					</div>
				</div>
				<a class="quickview-close close-window" href="javascript:;" onclick="$('#popup-cart').modal('hide');" title="Đóng"><i class="fa fa-times"></i></a>
			</div>
		</div>
		<div id="myModal" class="modal fade" role="dialog"></div>
		<script src="https://cdn.jsdelivr.net/npm/intersection-observer@0.5.1/intersection-observer.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/vanilla-lazyload@12.0.0/dist/lazyload.min.js"></script>
		<script src="https://bizweb.dktcdn.net/100/359/276/themes/725925/assets/cs.script.js?1593142743270" type="text/javascript"></script>
		<script src="https://bizweb.dktcdn.net/100/359/276/themes/725925/assets/main.js?1593142743270" type="text/javascript"></script>				
		<script src="https://bizweb.dktcdn.net/100/359/276/themes/725925/assets/evo-index-js.js?1593142743270" type="text/javascript"></script>
		
	</body>
</html>