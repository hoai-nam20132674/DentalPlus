<div class="page-sidebar-wrapper">
    <div class="page-sidebar navbar-collapse collapse">
        <div class="sidebar">
            <div class="sidebar-content">
                <ul class="page-sidebar-menu page-header-fixed" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
                    <li class="nav-item " id="cms-core-dashboard">
                        <a href="http://hasa.botble.com/admin" class="nav-link nav-toggle">
                            <i class="fa fa-home"></i>
                            <span class="title">Bảng điều khiển </span>
                        </a>
                    </li>
                    <li class="nav-item " id="cms-core-page">
                        <a href="http://hasa.botble.com/admin/pages" class="nav-link nav-toggle">
                            <i class="fa fa-book"></i>
                            <span class="title">Trang </span>
                        </a>
                    </li>
                    <li class="nav-item" id="cms-plugins-blog">
                        <a href="http://hasa.botble.com/admin/posts" class="nav-link nav-toggle">
                            <i class="fa fa-edit"></i>
                            <span class="title">Blog </span>
                            <span class="arrow  open "></span>
                        </a>
                        <ul class="sub-menu ">
                            <li class="nav-item  active " id="cms-plugins-blog-post">
                                <a href="{{URL::route('blogs')}}" class="nav-link">
                                    <i class=""></i>
                                    Bài viết
                                </a>
                            </li>
                            <li class="nav-item " id="cms-plugins-blog-categories">
                                <a href="{{URL::route('blogCategories')}}" class="nav-link">
                                    <i class=""></i>
                                    Danh mục
                                </a>
                            </li>
                            
                        </ul>
                    </li>
                    <li class="nav-item" id="cms-plugins-newsletter">
                        <a href="http://hasa.botble.com/admin/posts" class="nav-link nav-toggle">
                            <i class="fa fa-newspaper"></i>
                            <span class="title">Dịch vụ</span>
                            <span class="arrow  open "></span>
                        </a>
                        <ul class="sub-menu ">
                            <li class="nav-item  active " id="cms-plugins-blog-post">
                                <a href="{{URL::route('services')}}" class="nav-link">
                                    <i class=""></i>
                                    Dịch vụ
                                </a>
                            </li>
                            <li class="nav-item " id="cms-plugins-blog-categories">
                                <a href="{{URL::route('serviceCategories')}}" class="nav-link">
                                    <i class=""></i>
                                    Danh mục
                                </a>
                            </li>
                            
                        </ul>
                    </li>
                    
                    <li class="nav-item " id="cms-plugins-ecommerce">
                        <a href="" class="nav-link nav-toggle">
                            <i class="fa fa-user-md"></i>
                            <span class="title">Khách hàng</span>
                            <span class="arrow "></span>
                        </a>
                        <ul class="sub-menu  hidden-ul ">
                            <li class="nav-item " id="cms-plugins-ecommerce-customer">
                                <a href="{{URL::route('products')}}" class="nav-link">
                                    <i class="fa fa-users"></i>
                                    Khách hàng
                                </a>
                            </li>
                            <li class="nav-item " id="cms-plugins-product-categories">
                                <a href="{{URL::route('productCategories')}}" class="nav-link">
                                    <i class="fa fa-archive"></i>
                                    Danh mục khách hàng
                                </a>
                            </li>
                            <li class="nav-item " id="cms-plugins-ecommerce-customer">
                                <a href="http://hasa.botble.com/admin/customers" class="nav-link">
                                    <i class="fa fa-user"></i>
                                    Khách hàng đăng ký tư vấn
                                </a>
                            </li>
                            
                        </ul>
                    </li>
                    <!-- <li class="nav-item " id="cms-plugins-simple-slider">
                        <a href="http://hasa.botble.com/admin/simple-sliders" class="nav-link nav-toggle">
                            <i class="far fa-image"></i>
                            <span class="title">Simple sliders </span>
                        </a>
                    </li> -->
                    <li class="nav-item " id="cms-plugins-contact">
                        <a href="http://hasa.botble.com/admin/contacts" class="nav-link nav-toggle">
                            <i class="far fa-envelope"></i>
                            <span class="title">Liên hệ </span>
                        </a>
                    </li>
                    
                    
                    <li class="nav-item " id="cms-core-appearance">
                        <a href="#" class="nav-link nav-toggle">
                            <i class="fa fa-paint-brush"></i>
                            <span class="title">Hiển thị </span>
                            <span class="arrow "></span>
                        </a>
                        <ul class="sub-menu  hidden-ul ">
                            
                            <li class="nav-item " id="cms-core-menu">
                                <a href="http://hasa.botble.com/admin/menus" class="nav-link">
                                    <i class=""></i>
                                    Menu
                                </a>
                            </li>
                            
                            <li class="nav-item " id="cms-core-appearance-custom-css">
                                <a href="http://hasa.botble.com/admin/theme/custom-css" class="nav-link">
                                    <i class=""></i>
                                    Tuỳ chỉnh CSS
                                </a>
                            </li>
                        </ul>
                    </li>
                    
                    <li class="nav-item " id="cms-core-settings">
                        <a href="http://hasa.botble.com/admin/settings/general" class="nav-link nav-toggle">
                            <i class="fa fa-cogs"></i>
                            <span class="title">Cài đặt </span>
                            <span class="arrow "></span>
                        </a>
                        <ul class="sub-menu  hidden-ul ">
                            <li class="nav-item " id="cms-core-settings-general">
                                <a href="http://hasa.botble.com/admin/settings/general" class="nav-link">
                                    <i class=""></i>
                                    Cơ bản
                                </a>
                            </li>
                            <li class="nav-item " id="cms-core-settings-email">
                                <a href="http://hasa.botble.com/admin/settings/email" class="nav-link">
                                    <i class=""></i>
                                    Email
                                </a>
                            </li>
                            <li class="nav-item " id="cms-core-settings-media">
                                <a href="http://hasa.botble.com/admin/settings/media" class="nav-link">
                                    <i class=""></i>
                                    Media
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item " id="cms-core-platform-administration">
                        <a href="" class="nav-link nav-toggle">
                            <i class="fa fa-user-shield"></i>
                            <span class="title">Quản trị hệ thống </span>
                            <span class="arrow "></span>
                        </a>
                        <ul class="sub-menu  hidden-ul ">
                            
                            <li class="nav-item " id="cms-core-user">
                                <a href="{{URL::route('users')}}" class="nav-link">
                                    <i class="fa fa-user"></i>
                                    Quản trị viên
                                </a>
                            </li>
                            <li class="nav-item " id="cms-core-system-information">
                                <a href="{{URL::route('editSystem')}}" class="nav-link">
                                    <i class="fa fa-cogs"></i>
                                    Cài đặt hệ thống
                                </a>
                            </li>
                            
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>