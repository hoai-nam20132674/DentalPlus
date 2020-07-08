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
	<!-- <link href="https://bizweb.dktcdn.net/100/359/276/themes/725925/assets/evo-collections.scss.css?1593142743270" rel="stylesheet" type="text/css" /> -->
	<link href="https://bizweb.dktcdn.net/100/359/276/themes/725925/assets/evo-contacts.scss.css?1593142743270" rel="stylesheet" type="text/css" />
@endsection
@section('body_class')
bg-body page-contact
@endsection
@section('content')
	<div class="evo-blog-header">
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div class="evo-blog-header-content">
						<h1>Gửi thông tin</h1>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="contact margin-bottom-20 page-contact margin-top-30">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="page-login">
						
						<h2 class="title-head text-center">Gửi thông tin</h2>
						
						<span class="text-contact block text-center">Bạn hãy điền nội dung tin nhắn vào form dưới đây và gửi cho chúng tôi. Chúng tôi sẽ trả lời bạn sau khi nhận được.</span>
						<form accept-charset="utf-8" action="/contact" id="contact" method="post">
	<input name="FormType" type="hidden" value="contact" />
	<input name="utf8" type="hidden" value="true" /><input type="hidden" id="Token-7efe7e80b50b4517ba48e1d3b6d0fa9c" name="Token" /><script src="https://www.google.com/recaptcha/api.js?render=6Ldtu4IUAAAAAMQzG1gCw3wFlx_GytlZyLrXcsuK"></script>
	<script>
	grecaptcha.ready(function() {
	grecaptcha.execute("6Ldtu4IUAAAAAMQzG1gCw3wFlx_GytlZyLrXcsuK", {action: "/contact"})
	.then(function(token) {
	document.getElementById("Token-7efe7e80b50b4517ba48e1d3b6d0fa9c").value = token
	});
	});
	</script>
						
						<div class="form-signup clearfix">
							<div class="row">
								<div class="col-sm-6 col-xs-12">
									<fieldset class="form-group">
										<label>Họ và tên<span class="required">*</span></label>
										<input placeholder="Nhập họ và tên" type="text" name="contact[name]" id="name" class="form-control  form-control-lg" data-validation-error-msg= "Không được để trống" data-validation="required" required />
									</fieldset>
								</div>
								<div class="col-sm-6 col-xs-12">
									<fieldset class="form-group">
										<label>Email<span class="required">*</span></label>
										<input placeholder="Nhập địa chỉ Email" type="email" name="contact[email]" data-validation="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,63}$" data-validation-error-msg= "Email sai định dạng" id="email" class="form-control form-control-lg" required />
									</fieldset>
								</div>
								<div class="col-sm-12 col-xs-12">
									<fieldset class="form-group">
										<label>Điện thoại<span class="required">*</span></label>
										<input placeholder="Nhập số điện thoại" type="tel" name="contact[phone]" data-validation="tel" data-validation-error-msg= "Không được để trống" id="tel" class="number-sidebar form-control form-control-lg" required />
									</fieldset>
								</div>
								<div class="col-sm-12 col-xs-12">
									<fieldset class="form-group">
										<label>Nội dung<span class="required">*</span></label>
										<textarea placeholder="Nội dung liên hệ" name="contact[body]" id="comment" class="form-control form-control-lg" rows="5" data-validation-error-msg= "Không được để trống" data-validation="required" required></textarea>
									</fieldset>
									<div class="pull-xs-left" style="margin-top:20px;">
										<button type="submit" class="btn btn-blues btn-style btn-style-active">Gửi tin nhắn</button>
									</div> 
								</div>
							</div>
						</div>
						</form>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="contact-map">
						<div class="page-login text-center">
							<h3 class="title-head">Bản đồ cửa hàng</h3>
						</div>
						<div class="box-maps margin-bottom-10">
							<iframe class="lazy" data-src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3834.13664580307!2d108.22055691414181!3d16.058397388887613!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314219cc2af84105%3A0x9a924a8e9c5e8751!2zMzAgMiBUaMOhbmcgOSwgQsOsbmggSGnDqm4sIEjhuqNpIENow6J1LCDEkMOgIE7hurVuZyA1NTAwMDAsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1558182318368!5m2!1svi!2s" width="600" height="450" style="border:0" allowfullscreen></iframe>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection