<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @php
        $fav = Illuminate\Support\Facades\DB::table('general_settings')
            ->select('favicon')
            ->first();
    @endphp

    <link rel="icon" type="image/x-icon" href="{{ asset('uploads') . "/$fav->favicon" }}">

    <title>IMI Jawa Barat | Admin Panel</title>

    @include('admin.includes.styles')

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Sen:wght@400;700&display=swap" rel="stylesheet">


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
                <div id="collapseSetting"
                     class="collapse @if ($conName[1] == 'setting' && $conName[2] == 'general') show @endif"
                     aria-labelledby="headingPages" data-parent="#accordionSidebar">
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
                        {{-- <a class="collapse-item @if ($conName[3] == 'sidebar') active @endif"
                            href="{{ route('admin.general_setting.sidebar') }}">Sidebar</a> --}}
                        {{-- <a class="collapse-item @if ($conName[3] == 'color') active @endif"
                            href="{{ route('admin.general_setting.color') }}">Color</a> --}}
                        {{-- <a class="collapse-item @if ($conName[3] == 'preloader') active @endif"
                            href="{{ route('admin.general_setting.preloader') }}">Preloader</a> --}}
                        {{-- <a class="collapse-item @if ($conName[3] == 'stickyheader') active @endif"
                            href="{{ route('admin.general_setting.stickyheader') }}">Sticky Header</a> --}}
                        {{-- <a class="collapse-item @if ($conName[3] == 'googleanalytic') active @endif"
                            href="{{ route('admin.general_setting.googleanalytic') }}">Google Analytic</a> --}}
                        {{-- <a class="collapse-item @if ($conName[3] == 'googlerecaptcha') active @endif"
                            href="{{ route('admin.general_setting.googlerecaptcha') }}">Google Recaptcha</a> --}}
                        {{-- <a class="collapse-item @if ($conName[3] == 'tawklivechat') active @endif"
                            href="{{ route('admin.general_setting.tawklivechat') }}">Tawk Live Chat</a> --}}
                        {{-- <a class="collapse-item @if ($conName[3] == 'cookieconsent') active @endif"
                            href="{{ route('admin.general_setting.cookieconsent') }}">Cookie Consent</a> --}}
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
                <div id="collapsePageSettings" class="collapse @if ($conName[1] == 'page') show @endif"
                     aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item @if ($conName[2] == 'home') active @endif"
                           href="{{ route('admin.page_home.edit') }}">Home</a>
                        <a class="collapse-item @if ($conName[2] == 'about') active @endif"
                           href="{{ route('admin.page_about.edit') }}">About</a>
                        {{-- <a class="collapse-item @if ($conName[2] == 'shop') active @endif"
                            href="{{ route('admin.page_shop.edit') }}">Shop</a> --}}
                        <a class="collapse-item @if ($conName[2] == 'blog') active @endif"
                           href="{{ route('admin.page_blog.edit') }}">News</a>
                        <a class="collapse-item @if ($conName[2] == 'event') active @endif"
                           href="{{ route('admin.page_event.edit') }}">Events</a>
                        <a disable class="collapse-item @if ($conName[2] == 'gallery') active @endif"
                           href="{{ route('admin.page_gallery.edit') }}">Gallery</a>

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
                <div id="collapseAdminUser"
                     class="collapse @if ($conName[1] == 'role' || $conName[1] == 'admin-user') show @endif"
                     aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item @if ($conName[1] == 'role' && $conName[2] == '') active @endif"
                           href="{{ route('admin.role.index') }}">Roles</a>
                        <a class="collapse-item @if ($conName[2] == 'user') active @endif"
                           href="{{ route('admin.role.user') }}">Users</a>
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
        {{-- <li class="nav-item @if ($conName[1] == 'slider') active @endif">
            <a class="nav-link" href="{{ route('admin.slider.index') }}">
                <i class="fas fa-sliders-h"></i>
                <span>Sliders</span>
            </a>
        </li> --}}

        <!-- Dynamic Pages -->
            <li class="nav-item @if ($conName[1] == 'dynamic-page') active @endif">
                <a class="nav-link" href="{{ route('admin.dynamic_page.index') }}">
                    <i class="fas fa-cube"></i>
                    <span>Dynamic Pages</span>
                </a>
            </li>

            <!-- Footer Columns -->
        {{-- <li class="nav-item @if ($conName[1] == 'footer') active @endif">
            <a class="nav-link" href="{{ route('admin.footer.index') }}">
                <i class="fas fa-fw fa-list-alt"></i>
                <span>Footer Columns</span>
            </a>
        </li> --}}
    @endcan

    <!-- File Manager -->
        <li class="nav-item @if ($conName[1] == 'file-manager') active @endif">
            <a class="nav-link" href="{{ route('admin.file_manager') }}">
                <i class="fas fa-folder"></i>
                <span>File Manager</span>
            </a>
        </li>

        <!-- Member Registration -->
        <li class="nav-item @if ($conName[1] == 'registration') active @endif">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseRegistration"
               aria-expanded="true" aria-controls="collapseRegistration">
                <i class="fas fa-user-secret"></i>
                <span>Registrations</span>
            </a>
            <div id="collapseRegistration" class="collapse @if ($conName[1] == 'registration') show @endif"
                 aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item @if ($conName[2] == 'kis') active @endif"
                       href="{{ route('admin.register.kis') }}">KIS</a>
                    <a class="collapse-item @if ($conName[2] == 'club') active @endif"
                       href="{{ route('admin.register.club') }}">Club</a>
                    <a class="collapse-item @if ($conName[2] == 'event') active @endif"
                       href="{{ route('admin.register.event') }}">Event Organizer</a>
                </div>
            </div>
        </li>

        <!-- Committee -->
        <li class="nav-item @if ($conName[1] == 'organizations') active @endif">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOrganizations"
               aria-expanded="true" aria-controls="collapseOrganizations">
                <i class="fas fa-user-secret"></i>
                <span>Organizations</span>
            </a>
            <div id="collapseOrganizations" class="collapse @if ($conName[1] == 'organizations') show @endif"
                 aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item @if ($conName[2] == 'agenda') active @endif"
                       href="{{ route('admin.organizations.agenda.index') }}">Internal Agenda</a>
                    <a class="collapse-item @if ($conName[2] == 'info') active @endif"
                       href="{{ route('admin.organizations.info.index') }}">Info</a>
                    <a class="collapse-item @if ($conName[2] == 'committee') active @endif"
                       href="{{ route('admin.organizations.committee.index') }}">Committee</a>
                    <a class="collapse-item @if ($conName[2] == 'greetings') active @endif"
                       href="{{ route('admin.organizations.greeting.index') }}">Greetings</a>
                </div>
            </div>
        </li>

        <!-- Communities -->
        <li class="nav-item @if ($conName[1] == 'communities') active @endif">
            <a class="nav-link" href="{{ route('admin.communities.index') }}">
                <i class="fas fa-user"></i>
                <span>Communities</span>
            </a>
        </li>

{{--        <!-- Team Members / Committee -->--}}
{{--        <li class="nav-item @if ($conName[1] == 'committee') active @endif">--}}
{{--            <a class="nav-link" href="{{ route('admin.team_member.index') }}">--}}
{{--                <i class="fas fa-user-plus"></i>--}}
{{--                <span>Committee</span>--}}
{{--            </a>--}}
{{--        </li>--}}

{{--        <!-- Committee Greeting -->--}}
{{--        <li class="nav-item @if ($conName[1] == 'committee-greeting') active @endif">--}}
{{--            <a class="nav-link" href="{{ route('admin.committee_greeting.index') }}">--}}
{{--                <i class="fas fa-ad"></i>--}}
{{--                <span>Committee Greeting</span>--}}
{{--            </a>--}}
{{--        </li>--}}

        <!-- Advertisement -->
        <li class="nav-item @if ($conName[1] == 'advertisement') active @endif">
            <a class="nav-link" href="{{ route('admin.advertisement.index') }}">
                <i class="fas fa-ad"></i>
                <span>Advertisements</span>
            </a>
        </li>


        <!-- Blog / News Section -->
        <li class="nav-item @if ($conName[1] == 'news') active @endif">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBlog"
               aria-expanded="true" aria-controls="collapseBlog">
                <i class="fas fa-newspaper"></i>
                <span>News</span>
            </a>
            <div id="collapseBlog" class="collapse @if ($conName[1] == 'news') show @endif"
                 aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item @if ($conName[1] == 'news' && $conName[2] === 'category') active @endif"
                       href="{{ route('admin.category.index') }}">Categories</a>
                    <a class="collapse-item @if ($conName[1] === 'news' && $conName[2] == '') active @endif"
                       href="{{ route('admin.news.index') }}">News</a>
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
            <div id="collapseEvent" class="collapse @if ($conName[1] == 'event') show @endif"
                 aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item @if ($conName[1] === 'event' && $conName[2] === '' || $conName[2] == 'create' || $conName[2] == 'edit' ) active @endif"
                       href="{{ route('admin.event.index') }}">Events</a>
                    <a class="collapse-item @if ($conName[1] === 'event' && $conName[2] == 'category') active @endif"
                       href="{{ route('admin.event.category.index') }}">Categories</a>
                    <a class="collapse-item @if ($conName[1] === 'event' && $conName[2] == 'sport') active @endif"
                       href="{{ route('admin.event.sport.index') }}">Sports</a>
                    <a class="collapse-item @if ($conName[1] === 'event' && $conName[2] == 'sponsor') active @endif"
                       href="{{ route('admin.event.sponsor.index') }}">Sponsors</a>
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
            <div id="collapseGallery"
                 class="collapse @if ($conName[1] == 'gallery' || $conName[2] == 'photo' || $conName[2] == 'video') show @endif"
                 aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item @if ($conName[1] == 'gallery' && $conName[2] === 'category') active @endif"
                       href="{{ route('admin.galleries.category.index') }}">Categories</a>
                    <a class="collapse-item @if ($conName[1] == 'gallery' && $conName[2] === 'photo') active @endif"
                       href="{{ route('admin.galleries.photo.index') }}">Photos</a>
                    <a class="collapse-item @if ($conName[1] == 'gallery' && $conName[2] === 'video') active @endif"
                       href="{{ route('admin.galleries.video.index') }}">Videos</a>
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
            <div id="collapseSubscriber" class="collapse @if ($conName[1] == 'subscriber') show @endif"
                 aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item @if ($conName[1] == 'subscriber' && $conName[2] == '') active @endif"
                       href="{{ route('admin.subscriber.index') }}">All Subscribers</a>
                    <a class="collapse-item @if ($conName[1] == 'subscriber' && $conName[2] == 'send-email') active @endif"
                       href="{{ route('admin.subscriber.send_email') }}">Send Email to
                        Subscribers</a>
                </div>
            </div>
        </li>

        <!-- Social Media -->
        <li class="nav-item @if ($conName[1] == 'social-media') active @endif">
            <a class="nav-link" href="{{ route('admin.social_media.index') }}">
                <i class="fas fa-basketball-ball"></i>
                <span>Social Media</span>
            </a>
        </li>


        <!-- Divider -->
        <hr class="sidebar-divider mb-0">


        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline mt-4">
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
                                 src="{{ asset('uploads/' . auth()->user()->photo) }}">
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

@include('admin.includes.scripts')

@include('admin.includes.scripts-footer')


</body>

</html>
