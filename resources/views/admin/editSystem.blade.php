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
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/admin/bootstrap-colorpicker.min.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/admin/theme-options.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/admin/core.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/admin/default.css')}}">
@endsection
@section('content')

	<div class="page-content ">
                    <ol class="breadcrumb">
        
                            <li class="breadcrumb-item"><a href="http://hasa.botble.com/admin">Bảng điều khiển</a></li>
            
        
                            <li class="breadcrumb-item"><a href="#">Hiển thị</a></li>
            
        
                            <li class="breadcrumb-item active">Tuỳ chọn giao diện</li>
            
            </ol>


                    <div class="clearfix"></div>
                    <div id="main">
                                <div id="theme-option-header">
        <div class="display_header">
            <h2>Tuỳ chọn giao diện</h2>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="theme-option-container">
        <form method="POST" action="http://hasa.botble.com/admin/theme/options" accept-charset="UTF-8"><input name="_token" type="hidden" value="tG2m2ProYQd6de4x2aqze1cDW0JzgdDLBJXspdoW">
            <div class="theme-option-sticky">
                <div class="info_bar">
                    <div class="float-left">
                                            </div>
                    <div class="theme-option-action_bar">
                        
                        <button type="submit" class="btn btn-primary button-save-theme-options">Lưu thay đổi</button>
                    </div>
                </div>
            </div>
            <div class="theme-option-sidebar">
                <ul class="nav nav-tabs tab-in-left">
                                            <li class="nav-item">
                            <a href="#tab_opt-text-subsection-general" class="nav-link  active " data-toggle="tab"><i class="fa fa-home"></i>  General</a>
                        </li>
                                            <li class="nav-item">
                            <a href="#tab_opt-text-subsection-logo" class="nav-link " data-toggle="tab"><i class="fa fa-image"></i>  Logo</a>
                        </li>
                                            <li class="nav-item">
                            <a href="#tab_opt-text-subsection-social" class="nav-link " data-toggle="tab"><i class="fa fa-share-alt"></i>  Social</a>
                        </li>
                                            
                                    </ul>
            </div>
            <div class="theme-option-main">
                <div class="tab-content tab-content-in-right">
                                            <div class="tab-pane  active " id="tab_opt-text-subsection-general">
                                                            <div class="form-group ">
                                    <label for="site_title" class="control-label">Site title</label>
                                    <input class="form-control" placeholder="Site title" data-counter="255" name="site_title" type="text" value="HASA Fashion" id="site_title">
                                                                    </div>
                                <hr>
                                                            <div class="form-group ">
                                    <label for="show_site_name" class="control-label">Show site name after page title, separate with &quot;-&quot;?</label>
                                    <select class="form-control" id="show_site_name" name="show_site_name"><option value="0">No</option><option value="1">Yes</option></select>
                                                                    </div>
                                <hr>
                                                            <div class="form-group ">
                                    <label for="seo_title" class="control-label">SEO Title</label>
                                    <input class="form-control" placeholder="SEO Title" data-counter="120" name="seo_title" type="text" value="HASA Fashion" id="seo_title">
                                                                    </div>
                                <hr>
                                                            <div class="form-group ">
                                    <label for="seo_description" class="control-label">SEO Description</label>
                                    <textarea class="form-control" rows="4" name="seo_description" cols="50" id="seo_description"></textarea>
                                                                    </div>
                                <hr>
                                                            <div class="form-group ">
                                    <label for="seo_og_image" class="control-label">SEO default Open Graph image</label>
                                    <div class="image-box">
    <input type="hidden" name="seo_og_image" value="general/open-graph-image.png" class="image-data">
    <div class="preview-image-wrapper ">
        <img src="http://hasa.botble.com/storage/general/open-graph-image-150x150.png" alt="preview image" class="preview_image"  width="150" >
        <a class="btn_remove_image" title="Xoá ảnh">
            <i class="fa fa-times"></i>
        </a>
    </div>
    <div class="image-box-actions">
        <a href="#" class="btn_gallery" data-result="seo_og_image" data-action="select-image">
            Chọn ảnh
        </a>
    </div>
</div>

                                                                    </div>
                                <hr>
                                                            <div class="form-group ">
                                    <label for="hotline" class="control-label">Hotline</label>
                                    <input class="form-control" placeholder="Hotline" data-counter="30" name="hotline" type="text" value="18006268" id="hotline">
                                                                    </div>
                                <hr>
                                                            <div class="form-group ">
                                    <label for="address" class="control-label">Address</label>
                                    <input class="form-control" placeholder="Address" data-counter="120" name="address" type="text" value="North Link Building, 10 Admiralty Street, 757695 Singapore" id="address">
                                                                    </div>
                                <hr>
                                                            <div class="form-group ">
                                    <label for="primary_font" class="control-label">Primary font</label>
                                    <div class="ui-select-wrapper">
        <select name="primary_font" class='form-control select2_google_fonts_picker'>
                            <option value='Aclonica' >Aclonica</option>
                    <option value='Allan' >Allan</option>
                    <option value='Annie Use Your Telescope' >Annie Use Your Telescope</option>
                    <option value='Anonymous Pro' >Anonymous Pro</option>
                    <option value='Allerta Stencil' >Allerta Stencil</option>
                    <option value='Allerta' >Allerta</option>
                    <option value='Amaranth' >Amaranth</option>
                    <option value='Anton' >Anton</option>
                    <option value='Architects Daughter' >Architects Daughter</option>
                    <option value='Arimo' >Arimo</option>
                    <option value='Artifika' >Artifika</option>
                    <option value='Arvo' >Arvo</option>
                    <option value='Asset' >Asset</option>
                    <option value='Astloch' >Astloch</option>
                    <option value='Bangers' >Bangers</option>
                    <option value='Bentham' >Bentham</option>
                    <option value='Bevan' >Bevan</option>
                    <option value='Bigshot One' >Bigshot One</option>
                    <option value='Bowlby One' >Bowlby One</option>
                    <option value='Bowlby One SC' >Bowlby One SC</option>
                    <option value='Brawler' >Brawler</option>
                    <option value='Buda:300' >Buda:300</option>
                    <option value='Cabin' >Cabin</option>
                    <option value='Calligraffitti' >Calligraffitti</option>
                    <option value='Candal' >Candal</option>
                    <option value='Cantarell' >Cantarell</option>
                    <option value='Cardo' >Cardo</option>
                    <option value='Carter One' >Carter One</option>
                    <option value='Caudex' >Caudex</option>
                    <option value='Cedarville Cursive' >Cedarville Cursive</option>
                    <option value='Cherry Cream Soda' >Cherry Cream Soda</option>
                    <option value='Chewy' >Chewy</option>
                    <option value='Coda' >Coda</option>
                    <option value='Coming Soon' >Coming Soon</option>
                    <option value='Copse' >Copse</option>
                    <option value='Corben:700' >Corben:700</option>
                    <option value='Cousine' >Cousine</option>
                    <option value='Covered By Your Grace' >Covered By Your Grace</option>
                    <option value='Crafty Girls' >Crafty Girls</option>
                    <option value='Crimson Text' >Crimson Text</option>
                    <option value='Crushed' >Crushed</option>
                    <option value='Cuprum' >Cuprum</option>
                    <option value='Damion' >Damion</option>
                    <option value='Dancing Script' >Dancing Script</option>
                    <option value='Dawning of a New Day' >Dawning of a New Day</option>
                    <option value='Didact Gothic' >Didact Gothic</option>
                    <option value='Droid Sans' >Droid Sans</option>
                    <option value='Droid Sans Mono' >Droid Sans Mono</option>
                    <option value='Droid Serif' >Droid Serif</option>
                    <option value='EB Garamond' >EB Garamond</option>
                    <option value='Expletus Sans' >Expletus Sans</option>
                    <option value='Fontdiner Swanky' >Fontdiner Swanky</option>
                    <option value='Forum' >Forum</option>
                    <option value='Francois One' >Francois One</option>
                    <option value='Geo' >Geo</option>
                    <option value='Give You Glory' >Give You Glory</option>
                    <option value='Goblin One' >Goblin One</option>
                    <option value='Goudy Bookletter 1911' >Goudy Bookletter 1911</option>
                    <option value='Gravitas One' >Gravitas One</option>
                    <option value='Gruppo' >Gruppo</option>
                    <option value='Hammersmith One' >Hammersmith One</option>
                    <option value='Holtwood One SC' >Holtwood One SC</option>
                    <option value='Homemade Apple' >Homemade Apple</option>
                    <option value='Inconsolata' >Inconsolata</option>
                    <option value='Indie Flower' >Indie Flower</option>
                    <option value='IM Fell DW Pica' >IM Fell DW Pica</option>
                    <option value='IM Fell DW Pica SC' >IM Fell DW Pica SC</option>
                    <option value='IM Fell Double Pica' >IM Fell Double Pica</option>
                    <option value='IM Fell Double Pica SC' >IM Fell Double Pica SC</option>
                    <option value='IM Fell English' >IM Fell English</option>
                    <option value='IM Fell English SC' >IM Fell English SC</option>
                    <option value='IM Fell French Canon' >IM Fell French Canon</option>
                    <option value='IM Fell French Canon SC' >IM Fell French Canon SC</option>
                    <option value='IM Fell Great Primer' >IM Fell Great Primer</option>
                    <option value='IM Fell Great Primer SC' >IM Fell Great Primer SC</option>
                    <option value='Irish Grover' >Irish Grover</option>
                    <option value='Irish Growler' >Irish Growler</option>
                    <option value='Istok Web' >Istok Web</option>
                    <option value='Josefin Sans' >Josefin Sans</option>
                    <option value='Josefin Slab' >Josefin Slab</option>
                    <option value='Judson' >Judson</option>
                    <option value='Jura' >Jura</option>
                    <option value='Jura:500' >Jura:500</option>
                    <option value='Jura:600' >Jura:600</option>
                    <option value='Just Another Hand' >Just Another Hand</option>
                    <option value='Just Me Again Down Here' >Just Me Again Down Here</option>
                    <option value='Kameron' >Kameron</option>
                    <option value='Kenia' >Kenia</option>
                    <option value='Kranky' >Kranky</option>
                    <option value='Kreon' >Kreon</option>
                    <option value='Kristi' >Kristi</option>
                    <option value='La Belle Aurore' >La Belle Aurore</option>
                    <option value='Lato:100' >Lato:100</option>
                    <option value='Lato:100italic' >Lato:100italic</option>
                    <option value='Lato:300' >Lato:300</option>
                    <option value='Lato' >Lato</option>
                    <option value='Lato:bold' >Lato:bold</option>
                    <option value='Lato:900' >Lato:900</option>
                    <option value='League Script' >League Script</option>
                    <option value='Lekton' >Lekton</option>
                    <option value='Limelight' >Limelight</option>
                    <option value='Lobster' >Lobster</option>
                    <option value='Lobster Two' >Lobster Two</option>
                    <option value='Lora' >Lora</option>
                    <option value='Love Ya Like A Sister' >Love Ya Like A Sister</option>
                    <option value='Loved by the King' >Loved by the King</option>
                    <option value='Luckiest Guy' >Luckiest Guy</option>
                    <option value='Maiden Orange' >Maiden Orange</option>
                    <option value='Mako' >Mako</option>
                    <option value='Maven Pro' >Maven Pro</option>
                    <option value='Maven Pro:500' >Maven Pro:500</option>
                    <option value='Maven Pro:700' >Maven Pro:700</option>
                    <option value='Maven Pro:900' >Maven Pro:900</option>
                    <option value='Meddon' >Meddon</option>
                    <option value='MedievalSharp' >MedievalSharp</option>
                    <option value='Megrim' >Megrim</option>
                    <option value='Merriweather' >Merriweather</option>
                    <option value='Metrophobic' >Metrophobic</option>
                    <option value='Michroma' >Michroma</option>
                    <option value='Miltonian Tattoo' >Miltonian Tattoo</option>
                    <option value='Miltonian' >Miltonian</option>
                    <option value='Modern Antiqua' >Modern Antiqua</option>
                    <option value='Monofett' >Monofett</option>
                    <option value='Molengo' >Molengo</option>
                    <option value='Montserrat' >Montserrat</option>
                    <option value='Mountains of Christmas' >Mountains of Christmas</option>
                    <option value='Muli:300' >Muli:300</option>
                    <option value='Muli' >Muli</option>
                    <option value='Neucha' >Neucha</option>
                    <option value='Neuton' >Neuton</option>
                    <option value='News Cycle' >News Cycle</option>
                    <option value='Nixie One' >Nixie One</option>
                    <option value='Nobile' >Nobile</option>
                    <option value='Noto Sans' >Noto Sans</option>
                    <option value='Nova Cut' >Nova Cut</option>
                    <option value='Nova Flat' >Nova Flat</option>
                    <option value='Nova Mono' >Nova Mono</option>
                    <option value='Nova Oval' >Nova Oval</option>
                    <option value='Nova Round' >Nova Round</option>
                    <option value='Nova Script' >Nova Script</option>
                    <option value='Nova Slim' >Nova Slim</option>
                    <option value='Nova Square' >Nova Square</option>
                    <option value='Nunito:light' >Nunito:light</option>
                    <option value='Nunito' >Nunito</option>
                    <option value='Nunito Sans' >Nunito Sans</option>
                    <option value='OFL Sorts Mill Goudy TT' >OFL Sorts Mill Goudy TT</option>
                    <option value='Old Standard TT' >Old Standard TT</option>
                    <option value='Open Sans:300' >Open Sans:300</option>
                    <option value='Open Sans' >Open Sans</option>
                    <option value='Open Sans:600' >Open Sans:600</option>
                    <option value='Open Sans:800' >Open Sans:800</option>
                    <option value='Open Sans Condensed:300' >Open Sans Condensed:300</option>
                    <option value='Orbitron' >Orbitron</option>
                    <option value='Orbitron:500' >Orbitron:500</option>
                    <option value='Orbitron:700' >Orbitron:700</option>
                    <option value='Orbitron:900' >Orbitron:900</option>
                    <option value='Oswald' >Oswald</option>
                    <option value='Over the Rainbow' >Over the Rainbow</option>
                    <option value='Reenie Beanie' >Reenie Beanie</option>
                    <option value='Pacifico' >Pacifico</option>
                    <option value='Patrick Hand' >Patrick Hand</option>
                    <option value='Paytone One' >Paytone One</option>
                    <option value='Permanent Marker' >Permanent Marker</option>
                    <option value='Philosopher' >Philosopher</option>
                    <option value='Play' >Play</option>
                    <option value='Playfair Display' >Playfair Display</option>
                    <option value='Podkova' >Podkova</option>
                    <option value='Poppins'  selected >Poppins</option>
                    <option value='PT Sans' >PT Sans</option>
                    <option value='PT Sans Narrow' >PT Sans Narrow</option>
                    <option value='PT Sans Narrow:regular,bold' >PT Sans Narrow:regular,bold</option>
                    <option value='PT Serif' >PT Serif</option>
                    <option value='PT Serif Caption' >PT Serif Caption</option>
                    <option value='Puritan' >Puritan</option>
                    <option value='Quattrocento' >Quattrocento</option>
                    <option value='Quattrocento Sans' >Quattrocento Sans</option>
                    <option value='Radley' >Radley</option>
                    <option value='Raleway' >Raleway</option>
                    <option value='Raleway:100' >Raleway:100</option>
                    <option value='Redressed' >Redressed</option>
                    <option value='Rock Salt' >Rock Salt</option>
                    <option value='Rokkitt' >Rokkitt</option>
                    <option value='Roboto' >Roboto</option>
                    <option value='Ruslan Display' >Ruslan Display</option>
                    <option value='Schoolbell' >Schoolbell</option>
                    <option value='Shadows Into Light' >Shadows Into Light</option>
                    <option value='Shanti' >Shanti</option>
                    <option value='Sigmar One' >Sigmar One</option>
                    <option value='Six Caps' >Six Caps</option>
                    <option value='Slackey' >Slackey</option>
                    <option value='Smythe' >Smythe</option>
                    <option value='Sniglet:800' >Sniglet:800</option>
                    <option value='Special Elite' >Special Elite</option>
                    <option value='Stardos Stencil' >Stardos Stencil</option>
                    <option value='Sue Ellen Francisco' >Sue Ellen Francisco</option>
                    <option value='Sunshiney' >Sunshiney</option>
                    <option value='Swanky and Moo Moo' >Swanky and Moo Moo</option>
                    <option value='Syncopate' >Syncopate</option>
                    <option value='Tangerine' >Tangerine</option>
                    <option value='Tenor Sans' >Tenor Sans</option>
                    <option value='Terminal Dosis Light' >Terminal Dosis Light</option>
                    <option value='The Girl Next Door' >The Girl Next Door</option>
                    <option value='Tinos' >Tinos</option>
                    <option value='Ubuntu' >Ubuntu</option>
                    <option value='Ultra' >Ultra</option>
                    <option value='Unkempt' >Unkempt</option>
                    <option value='UnifrakturCook:bold' >UnifrakturCook:bold</option>
                    <option value='UnifrakturMaguntia' >UnifrakturMaguntia</option>
                    <option value='Varela' >Varela</option>
                    <option value='Varela Round' >Varela Round</option>
                    <option value='Vibur' >Vibur</option>
                    <option value='Vollkorn' >Vollkorn</option>
                    <option value='VT323' >VT323</option>
                    <option value='Waiting for the Sunrise' >Waiting for the Sunrise</option>
                    <option value='Wallpoet' >Wallpoet</option>
                    <option value='Walter Turncoat' >Walter Turncoat</option>
                    <option value='Wire One' >Wire One</option>
                    <option value='Yanone Kaffeesatz' >Yanone Kaffeesatz</option>
                    <option value='Yanone Kaffeesatz:300' >Yanone Kaffeesatz:300</option>
                    <option value='Yanone Kaffeesatz:400' >Yanone Kaffeesatz:400</option>
                    <option value='Yanone Kaffeesatz:700' >Yanone Kaffeesatz:700</option>
                    <option value='Yeseva One' >Yeseva One</option>
                    <option value='Zeyada' >Zeyada</option>
            </select>
    <svg class="svg-next-icon svg-next-icon-size-16">
        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#select-chevron"></use>
    </svg>
</div>



                                                                    </div>
                                <hr>
                                                            <div class="form-group ">
                                    <label for="primary_color" class="control-label">Primary color</label>
                                    <div class="input-group color-picker" data-color="#026E94">
    <input class="form-control" name="primary_color" type="text" value="#026E94" id="primary_color">
    <span class="input-group-append">
    <span class="input-group-text colorpicker-input-addon"><i></i></span>
  </span>
</div>

                                                                    </div>
                                <hr>
                                                            <div class="form-group ">
                                    <label for="secondary_color" class="control-label">Secondary color</label>
                                    <div class="input-group color-picker" data-color="#2C1DFF">
    <input class="form-control" name="secondary_color" type="text" value="#2C1DFF" id="secondary_color">
    <span class="input-group-append">
    <span class="input-group-text colorpicker-input-addon"><i></i></span>
  </span>
</div>

                                                                    </div>
                                <hr>
                                                            <div class="form-group ">
                                    <label for="facebook_chat_enabled" class="control-label">Enable Facebook chat?</label>
                                    <select class="form-control" id="facebook_chat_enabled" name="facebook_chat_enabled"><option value="yes" selected="selected">Yes</option><option value="no">No</option></select>
                                                                    </div>
                                <hr>
                                                            <div class="form-group ">
                                    <label for="facebook_page_id" class="control-label">Facebook page ID</label>
                                    <input class="form-control" name="facebook_page_id" type="text" value="157007981299897" id="facebook_page_id">
                                                                    </div>
                                <hr>
                                                            <div class="form-group ">
                                    <label for="facebook_comment_enabled_in_post" class="control-label">Enable Facebook comment in post detail page?</label>
                                    <select class="form-control" id="facebook_comment_enabled_in_post" name="facebook_comment_enabled_in_post"><option value="yes" selected="selected">Yes</option><option value="no">No</option></select>
                                                                    </div>
                                <hr>
                                                            <div class="form-group ">
                                    <label for="facebook_comment_enabled_in_product" class="control-label">Enable Facebook comment in product detail page?</label>
                                    <select class="form-control" id="facebook_comment_enabled_in_product" name="facebook_comment_enabled_in_product"><option value="yes" selected="selected">Yes</option><option value="no">No</option></select>
                                                                    </div>
                                <hr>
                                                    </div>
                                            <div class="tab-pane " id="tab_opt-text-subsection-logo">
                                                            <div class="form-group ">
                                    <label for="favicon" class="control-label">Favicon</label>
                                    <div class="image-box">
    <input type="hidden" name="favicon" value="general/favicon.png" class="image-data">
    <div class="preview-image-wrapper ">
        <img src="http://hasa.botble.com/storage/general/favicon-150x150.png" alt="preview image" class="preview_image"  width="150" >
        <a class="btn_remove_image" title="Xoá ảnh">
            <i class="fa fa-times"></i>
        </a>
    </div>
    <div class="image-box-actions">
        <a href="#" class="btn_gallery" data-result="favicon" data-action="select-image">
            Chọn ảnh
        </a>
    </div>
</div>

                                                                    </div>
                                <hr>
                                                            <div class="form-group ">
                                    <label for="logo" class="control-label">Logo</label>
                                    <div class="image-box">
    <input type="hidden" name="logo" value="general/logo.png" class="image-data">
    <div class="preview-image-wrapper ">
        <img src="http://hasa.botble.com/storage/general/logo-150x150.png" alt="preview image" class="preview_image"  width="150" >
        <a class="btn_remove_image" title="Xoá ảnh">
            <i class="fa fa-times"></i>
        </a>
    </div>
    <div class="image-box-actions">
        <a href="#" class="btn_gallery" data-result="logo" data-action="select-image">
            Chọn ảnh
        </a>
    </div>
</div>

                                                                    </div>
                                <hr>
                                                    </div>
                                            <div class="tab-pane " id="tab_opt-text-subsection-social">
                                                            <div class="form-group ">
                                    <label for="facebook" class="control-label">Facebook</label>
                                    <input class="form-control" name="facebook" type="text" value="#" id="facebook">
                                                                    </div>
                                <hr>
                                                            <div class="form-group ">
                                    <label for="twitter" class="control-label">Twitter</label>
                                    <input class="form-control" name="twitter" type="text" value="#" id="twitter">
                                                                    </div>
                                <hr>
                                                            <div class="form-group ">
                                    <label for="linkedin" class="control-label">Linkedin</label>
                                    <input class="form-control" name="linkedin" type="text" value="#" id="linkedin">
                                                                    </div>
                                <hr>
                                                            <div class="form-group ">
                                    <label for="youtube" class="control-label">Youtube</label>
                                    <input class="form-control" name="youtube" type="text" value="#" id="youtube">
                                                                    </div>
                                <hr>
                                                            <div class="form-group ">
                                    <label for="instagram" class="control-label">Instagram</label>
                                    <input class="form-control" name="instagram" type="text" value="#" id="instagram">
                                                                    </div>
                                <hr>
                                                            <div class="form-group ">
                                    <label for="pinterest" class="control-label">Pinterest</label>
                                    <input class="form-control" name="pinterest" type="text" value="#" id="pinterest">
                                                                    </div>
                                <hr>
                                                    </div>
                                            
                                            
                                            
                                    </div>
            </div>
            <div class="theme-option-sticky">
                <div class="info_bar">
                    <div class="theme-option-action_bar">
                        
                        <button type="submit" class="btn btn-primary button-save-theme-options">Lưu thay đổi</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
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
    <script src="{{asset('js/admin/jquery.are-you-sure.js')}}"></script>
    <script src="{{asset('js/admin/bootstrap-colorpicker.min.js')}}"></script>
    <script src="{{asset('js/admin/theme-options.js')}}"></script>
@endsection