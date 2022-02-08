<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    @php
        $fav = Illuminate\Support\Facades\DB::table('general_settings')->select('favicon')->first();
    @endphp
    
    <link rel="icon" type="image/x-icon" href="{{ asset('public/uploads')."/$fav->favicon" }}">

    <title>IMI Jawa Barat | Admin Panel</title>

    @include('admin.includes.styles')

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Sen:wght@400;700&display=swap" rel="stylesheet">

    @include('admin.includes.scripts')

</head>

<body id="page-top">    

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            @php
                $url = Request::path();
                $conName = explode('/', $url);
                if (!isset($conName[3])) {
                    $conName[3] = '';
                }
                if (!isset($conName[2])) {
                    $conName[2] = '';
                }
            @endphp

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center"
                href="{{ route('admin.dashboard') }}">
                <div class="sidebar-brand-text mx-3">IMI Jawa Barat</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">


            <!-- Dashboard -->
            <li class="nav-item @if ($conName[1] == 'dashboard') active @endif">
                <a class="nav-link" href="{{ route('admin.dashboard') }}">
                    <i class="fas fa-fw fa-home"></i>
                    <span>Dashboard</span>

                </a>
            </li>

            @can('isAdmin')
                <!-- General Settings -->
                <li class="nav-item @if ($conName[1] == 'setting' && $conName[2] == 'general') active @endif">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSetting"
                        aria-expanded="true" aria-controls="collapseSetting">
                        <i class="fas fa-cog"></i>
                        <span>General Settings</span>
                    </a>
                    <div id="collapseSetting" class="collapse @if ($conName[1] == 'setting' && $conName[2] == 'general') show @endif" aria-labelledby="headingPages"
                        data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <a class="collapse-item @if ($conName[3] == 'logo') active @endif"
                                href="{{ route('admin.general_setting.logo') }}">Logo</a>
                            <a class="collapse-item @if ($conName[3] == 'favicon') active @endif"
                                href="{{ route('admin.general_setting.favicon') }}">Favicon</a>
                            <a class="collapse-item @if ($conName[3] == 'loginbg') active @endif"
                                href="{{ route('admin.general_setting.loginbg') }}">Login Background</a>
                            <a class="collapse-item @if ($conName[3] == 'topbar') active @endif"
                                href="{{ route('admin.general_setting.topbar') }}">Top Bar</a>
                            <a class="collapse-item @if ($conName[3] == 'banner') active @endif"
                                href="{{ route('admin.general_setting.banner') }}">Banner</a>
                            <a class="collapse-item @if ($conName[3] == 'footer') active @endif"
                                href="{{ route('admin.general_setting.footer') }}">Footer</a>
                            <a class="collapse-item @if ($conName[3] == 'sidebar') active @endif"
                                href="{{ route('admin.general_setting.sidebar') }}">Sidebar</a>
                            <a class="collapse-item @if ($conName[3] == 'color') active @endif"
                                href="{{ route('admin.general_setting.color') }}">Color</a>
                            <a class="collapse-item @if ($conName[3] == 'preloader') active @endif"
                                href="{{ route('admin.general_setting.preloader') }}">Preloader</a>
                            <a class="collapse-item @if ($conName[3] == 'stickyheader') active @endif"
                                href="{{ route('admin.general_setting.stickyheader') }}">Sticky Header</a>
                            <a class="collapse-item @if ($conName[3] == 'googleanalytic') active @endif"
                                href="{{ route('admin.general_setting.googleanalytic') }}">Google Analytic</a>
                            <a class="collapse-item @if ($conName[3] == 'googlerecaptcha') active @endif"
                                href="{{ route('admin.general_setting.googlerecaptcha') }}">Google Recaptcha</a>
                            <a class="collapse-item @if ($conName[3] == 'tawklivechat') active @endif"
                                href="{{ route('admin.general_setting.tawklivechat') }}">Tawk Live Chat</a>
                            <a class="collapse-item @if ($conName[3] == 'cookieconsent') active @endif"
                                href="{{ route('admin.general_setting.cookieconsent') }}">Cookie Consent</a>
                        </div>
                    </div>
                </li>

                <!-- Page Settings -->
                <li class="nav-item @if ($conName[1] == 'page') active @endif">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePageSettings"
                        aria-expanded="true" aria-controls="collapsePageSettings">
                        <i class="fas fa-paste"></i>
                        <span>Page Settings</span>
                    </a>
                    <div id="collapsePageSettings" class="collapse @if ($conName[1] == 'page') show @endif" aria-labelledby="headingPages"
                        data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <a class="collapse-item @if ($conName[2] == 'home') active @endif"
                                href="{{ route('admin.page_home.edit') }}">Home</a>
                            <a class="collapse-item @if ($conName[2] == 'about') active @endif"
                                href="{{ route('admin.page_about.edit') }}">About</a>
                            {{-- <a class="collapse-item @if ($conName[2] == 'service') active @endif"
                                href="{{ route('admin.page_service.edit') }}">Service</a> --}}
                            {{-- <a class="collapse-item @if ($conName[2] == 'shop') active @endif"
                                href="{{ route('admin.page_shop.edit') }}">Shop</a> --}}
                            <a class="collapse-item @if ($conName[2] == 'blog') active @endif"
                                href="{{ route('admin.page_blog.edit') }}">News</a>
                            <a class="collapse-item @if ($conName[2] == 'event') active @endif"
                                href="{{ route('admin.page_event.edit') }}">Events</a>
                            <a disable class="collapse-item @if ($conName[2] == 'gallery') active @endif"
                                href="{{ route('admin.page_gallery.edit') }}">Gallery</a>
                            {{-- <a class="collapse-item @if ($conName[2] == 'project') active @endif"
                                href="{{ route('admin.page_project.edit') }}">Project</a> --}}
                            {{-- <a class="collapse-item @if ($conName[2] == 'faq') active @endif"
                                href="{{ route('admin.page_faq.edit') }}">FAQ</a>
                            <a class="collapse-item @if ($conName[2] == 'team') active @endif"
                                href="{{ route('admin.page_team.edit') }}">Team Member</a>
                            <a class="collapse-item @if ($conName[2] == 'photo-gallery') active @endif"
                                href="{{ route('admin.page_photo_gallery.edit') }}">Photo Gallery</a>
                            <a class="collapse-item @if ($conName[2] == 'video-gallery') active @endif"
                                href="{{ route('admin.page_video_gallery.edit') }}">Video Gallery</a> --}}
                            {{-- <a class="collapse-item @if ($conName[2] == 'contact') active @endif"
                                href="{{ route('admin.page_contact.edit') }}">Contact</a> --}}
                            {{-- <a class="collapse-item @if ($conName[2] == 'career') active @endif"
                                href="{{ route('admin.page_career.edit') }}">Career</a> --}}
                            {{-- <a class="collapse-item @if ($conName[2] == 'term') active @endif"
                                href="{{ route('admin.page_term.edit') }}">Term</a> --}}
                            {{-- <a class="collapse-item @if ($conName[2] == 'privacy') active @endif"
                                href="{{ route('admin.page_privacy.edit') }}">Privacy</a> --}}
                            {{-- <a class="collapse-item @if ($conName[2] == 'other') active @endif"
                                href="{{ route('admin.page_other.edit') }}">Other</a> --}}
                        </div>
                    </div>
                </li>

                <!-- Menu Manage -->
                <li class="nav-item @if ($conName[1] == 'menu') active @endif">
                    <a class="nav-link" href="{{ route('admin.menu.index') }}">
                        <i class="fas fa-bars"></i>
                        <span>Menu Manage</span>
                    </a>
                </li>

                <!-- User Role Manager -->
                <li class="nav-item @if ($conName[1] == 'role' || $conName[1] == 'admin-user') active @endif">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseAdminUser"
                        aria-expanded="true" aria-controls="collapseAdminUser">
                        <i class="fas fa-user-secret"></i>
                        <span>Users Manager</span>
                    </a>
                    <div id="collapseAdminUser" class="collapse @if ($conName[1] == 'role' || $conName[1] == 'admin-user') show @endif" aria-labelledby="headingPages"
                        data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <a class="collapse-item @if ($conName[1] == 'role' && $conName[2] == '') active @endif" href="{{ route('admin.role.index') }}">Roles</a>
                            <a class="collapse-item @if ($conName[2] == 'user') active @endif" href="{{ route('admin.role.user') }}">Users</a>
                        </div>
                    </div>
                </li>

                <!-- Email Template -->
                <li class="nav-item @if ($conName[1] == 'email-template') active @endif">
                    <a class="nav-link" href="{{ route('admin.email_template.index') }}">
                        <i class="fas fa-envelope"></i>
                        <span>Email Template</span>
                    </a>
                </li>


                <!-- Sliders -->
                <li class="nav-item @if ($conName[1] == 'slider') active @endif">
                    <a class="nav-link" href="{{ route('admin.slider.index') }}">
                        <i class="fas fa-sliders-h"></i>
                        <span>Sliders</span>
                    </a>
                </li>

                <!-- Dynamic Pages -->
                <li class="nav-item @if ($conName[1] == 'dynamic-page') active @endif">
                    <a class="nav-link" href="{{ route('admin.dynamic_page.index') }}">
                        <i class="fas fa-cube"></i>
                        <span>Dynamic Pages</span>
                    </a>
                </li>

                <!-- Footer Columns -->
                <li class="nav-item @if ($conName[1] == 'footer') active @endif">
                    <a class="nav-link" href="{{ route('admin.footer.index') }}">
                        <i class="fas fa-fw fa-list-alt"></i>
                        <span>Footer Columns</span>
                    </a>
                </li>
            @endcan

            @can('isSeller')
                <!-- Product Section -->
                <li class="nav-item @if ($conName[1] == 'product' || $conName[1] == 'shipping' || $conName[1] == 'coupon') active @endif">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseProduct"
                        aria-expanded="true" aria-controls="collapseProduct">
                        <i class="fas fa-shopping-cart"></i>
                        <span>Product Section</span>
                    </a>
                    <div id="collapseProduct" class="collapse @if ($conName[1] == 'product' || $conName[1] == 'shipping' || $conName[1] == 'coupon') show @endif" aria-labelledby="headingPages"
                        data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <a class="collapse-item" href="{{ route('admin.product.index') }}">Product</a>
                            <a class="collapse-item" href="{{ route('admin.shipping.index') }}">Shipping</a>
                            <a class="collapse-item" href="{{ route('admin.coupon.index') }}">coupon</a>
                        </div>
                    </div>
                </li>

                <!-- Order -->
                <li class="nav-item @if ($conName[1] == 'order') active @endif">
                    <a class="nav-link" href="{{ route('admin.order.index') }}">
                        <i class="fas fa-bookmark"></i>
                        <span>Order Section</span>
                    </a>
                </li>

                <!-- Customer -->
                <li class="nav-item @if ($conName[1] == 'customer') active @endif">
                    <a class="nav-link" href="{{ route('admin.customer.index') }}">
                        <i class="fas fa-users"></i>
                        <span>Customer Section</span>
                    </a>
                </li>
            @endcan

            @can('isEditor')
                <!-- Blog / News Section -->
                <li class="nav-item @if ($conName[1] == 'news') active @endif">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBlog"
                        aria-expanded="true" aria-controls="collapseBlog">
                        <i class="fas fa-newspaper"></i>
                        <span>News</span>
                    </a>
                    <div id="collapseBlog" class="collapse @if ($conName[1] == 'news') show @endif" aria-labelledby="headingPages"
                        data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <a class="collapse-item @if($conName[1] == 'news' && $conName[2] === 'category') active @endif" href="{{ route('admin.category.index') }}">Categories</a>
                            <a class="collapse-item @if($conName[1] === 'news' && $conName[2] == '') active @endif" href="{{ route('admin.news.index') }}">News</a>
                            {{-- <a class="collapse-item" href="{{ route('admin.comment.approved') }}">Approved Comments</a>
                            <a class="collapse-item" href="{{ route('admin.comment.pending') }}">Pending Comments</a> --}}
                        </div>
                    </div>
                </li>

                <!-- Event Section -->
                <li class="nav-item @if ($conName[1] == 'event') active @endif">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseEvent"
                        aria-expanded="true" aria-controls="collapseEvent">
                        <i class="fas fa-flag"></i>
                        <span>Events</span>
                    </a>
                    <div id="collapseEvent" class="collapse @if ($conName[1] == 'event') show @endif" aria-labelledby="headingPages"
                        data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <a class="collapse-item @if($conName[1] === 'event' && $conName[2] == '') active @endif" href="{{ route('admin.event.index') }}">Events</a>
                            <a class="collapse-item @if($conName[1] === 'event' && $conName[2] == 'category') active @endif" href="{{ route('admin.event_category.index') }}">Categories</a>
                            <a class="collapse-item @if($conName[1] === 'event' && $conName[2] == 'sport') active @endif" href="{{ route('admin.event_sport.index') }}">Sports</a>
                            <a class="collapse-item @if($conName[1] === 'event' && $conName[2] == 'sponsor') active @endif" href="{{ route('admin.event_sponsor.index') }}">Sponsors</a>
                        </div>
                    </div>
                </li>

                <!-- Gallery Section -->
                <li class="nav-item @if ($conName[1] == 'gallery') active @endif">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseGallery"
                        aria-expanded="true" aria-controls="collapseGallery">
                        <i class="fas fa-image"></i>
                        <span>Galleries</span>
                    </a>
                    <div id="collapseGallery" class="collapse @if ($conName[1] == 'gallery' || $conName[2] == 'photo' || $conName[2] == 'video') show @endif" aria-labelledby="headingPages"
                        data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <a class="collapse-item @if($conName[1] == 'gallery' && $conName[2] === 'category') active @endif" href="{{ route('admin.gallery_category.index') }}">Categories</a>
                            <a class="collapse-item @if($conName[1] == 'gallery' && $conName[2] === 'photo') active @endif" href="{{ route('admin.photo.index') }}">Photos</a>
                            <a class="collapse-item @if($conName[1] == 'gallery' && $conName[2] === 'video') active @endif" href="{{ route('admin.video.index') }}">Videos</a>
                        </div>
                    </div>
                </li>

                <!-- Subscriber -->
                <li class="nav-item @if ($conName[1] == 'subscriber') active @endif">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSubscriber"
                        aria-expanded="true" aria-controls="collapseSubscriber">
                        <i class="fas fa-share-alt-square"></i>
                        <span>Subscribers</span>
                    </a>
                    <div id="collapseSubscriber" class="collapse @if ($conName[1] == 'subscriber') show @endif" aria-labelledby="headingPages"
                        data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <a class="collapse-item @if ($conName[1] == 'subscriber' && $conName[2] == '') active @endif" href="{{ route('admin.subscriber.index') }}">All Subscribers</a>
                            <a class="collapse-item @if ($conName[1] == 'subscriber' && $conName[2] == 'send-email') active @endif" href="{{ route('admin.subscriber.send_email') }}">Send Email to
                                Subscribers</a>
                        </div>
                    </div>
                </li>

                <!-- Project -->
                {{-- <li class="nav-item @if ($conName[1] == 'project') active @endif">
                    <a class="nav-link" href="{{ route('admin.project.index') }}">
                        <i class="fas fa-umbrella"></i>
                        <span>Project</span>
                    </a>
                </li> --}}

                <!-- Career Section -->
                {{-- <li class="nav-item @if ($conName[1] == 'job' || $conName[1] == 'job-application') active @endif">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCareer"
                        aria-expanded="true" aria-controls="collapseCareer">
                        <i class="fas fa-user-secret"></i>
                        <span>Career Section</span>
                    </a>
                    <div id="collapseCareer" class="collapse @if ($conName[1] == 'job' || $conName[1] == 'job-application') show @endif" aria-labelledby="headingPages"
                        data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <a class="collapse-item" href="{{ route('admin.job.index') }}">Jobs</a>
                            <a class="collapse-item" href="{{ route('admin.job.view_application') }}">Job
                                Applications</a>
                        </div>
                    </div>
                </li> --}}

                <!-- Why Choose Us -->
                {{-- <li class="nav-item @if ($conName[1] == 'why-choose') active @endif">
                    <a class="nav-link" href="{{ route('admin.why_choose.index') }}">
                        <i class="fas fa-arrows-alt"></i>
                        <span>Why Choose Us</span>
                    </a>
                </li> --}}

                <!-- Services -->
                {{-- <li class="nav-item @if ($conName[1] == 'service') active @endif">
                    <a class="nav-link" href="{{ route('admin.service.index') }}">
                        <i class="fas fa-certificate"></i>
                        <span>Service</span>
                    </a>
                </li> --}}

                <!-- Testimonials -->
                {{-- <li class="nav-item @if ($conName[1] == 'testimonial') active @endif">
                    <a class="nav-link" href="{{ route('admin.testimonial.index') }}">
                        <i class="fas fa-award"></i>
                        <span>Testimonial</span>
                    </a>
                </li> --}}

                <!-- Team Members / Committee -->
                <li class="nav-item @if ($conName[1] == 'team-member') active @endif">
                    <a class="nav-link" href="{{ route('admin.team_member.index') }}">
                        <i class="fas fa-user-plus"></i>
                        <span>Committee</span>
                    </a>
                </li>
                
                <!-- Social Media -->
                <li class="nav-item @if ($conName[1] == 'social-media') active @endif">
                    <a class="nav-link" href="{{ route('admin.social_media.index') }}">
                        <i class="fas fa-basketball-ball"></i>
                        <span>Social Media</span>
                    </a>
                </li>

                <!-- FAQ -->
                <li class="nav-item @if ($conName[1] == 'faq') active @endif">
                    <a class="nav-link" href="{{ route('admin.faq.index') }}">
                        <i class="fas fa-question-circle"></i>
                        <span>FAQ</span>
                    </a>
                </li>

            @endcan

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
        <!-- End of Sidebar -->


        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">


                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="btn btn-info btn-sm mt-3" href="{{ url('/') }}" target="_blank">
                                Visit Website
                            </a>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span
                                    class="mr-2 d-none d-lg-inline text-gray-600 small">{{ session('name') }}</span>
                                <img class="img-profile rounded-circle"
                                    src="{{ asset('public/uploads/' . auth()->user()->photo) }}">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">

                                @if (auth()->user()->hasRole(['admin']))
                                    <a class="dropdown-item" href="{{ route('admin.profile_change') }}">
                                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i> Change Profile
                                    </a>
                                @endif

                                <a class="dropdown-item" href="{{ route('admin.password_change') }}">
                                    <i class="fas fa-unlock-alt fa-sm fa-fw mr-2 text-gray-400"></i> Change Password
                                </a>
                                <a class="dropdown-item" href="{{ route('admin.photo_change') }}">
                                    <i class="fas fa-image fa-sm fa-fw mr-2 text-gray-400"></i> Change Photo
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('admin.logout') }}">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i> Logout
                                </a>
                            </div>
                        </li>
                    </ul>
                </nav>
                <!-- End of Topbar -->
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    @yield('admin_content')

                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    @include('admin.includes.scripts-footer')

</body>

</html>
