<!-- ============================================================== -->
<!-- Start Left Sidebar Start  -->
<!-- ============================================================== -->

<!-- Starts vertical-menu -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!-- User details -->

        <!--- Starts Sidemenu -->
        <div id="sidebar-menu">
            
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>

                <li>
                    <a href="/dashboard" class="waves-effect">
                        <i class="ri-dashboard-line"></i><span class="badge rounded-pill bg-success float-end">3</span>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-mail-send-line"></i>
                        <span>Home Slide Section</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('home.slide')}}">Home Slide</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-mail-send-line"></i>
                        <span>About Section</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('home.about')}}">Home About</a></li>
                        <li><a href="{{ route('about.multi.image')}}">Add Mutli Image</a></li>
                        <li><a href="{{ route('all.multi.image')}}">All Mutli Image</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-mail-send-line"></i>
                        <span>Resume Section</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('home.resume')}}">Home Resume</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-mail-send-line"></i>
                        <span>Portfolio Section</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('home.portfolio')}}">Home Portfolio</a></li>
                        <li><a href="{{ route('home.add.portfolio')}}">Add Portfolio</a></li>
                    </ul>
                </li>
                {{-- <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-layout-3-line"></i>
                        <span>Layouts</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li>
                            <a href="javascript: void(0);" class="has-arrow">Vertical</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="layouts-dark-sidebar.html">Dark Sidebar</a></li>
                                <li><a href="layouts-compact-sidebar.html">Compact Sidebar</a></li>
                                <li><a href="layouts-icon-sidebar.html">Icon Sidebar</a></li>
                                <li><a href="layouts-boxed.html">Boxed Layout</a></li>
                                <li><a href="layouts-preloader.html">Preloader</a></li>
                                <li><a href="layouts-colored-sidebar.html">Colored Sidebar</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow">Horizontal</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="layouts-horizontal.html">Horizontal</a></li>
                                <li><a href="layouts-hori-topbar-light.html">Topbar light</a></li>
                                <li><a href="layouts-hori-boxed-width.html">Boxed width</a></li>
                                <li><a href="layouts-hori-preloader.html">Preloader</a></li>
                                <li><a href="layouts-hori-colored-header.html">Colored Header</a></li>
                            </ul>
                        </li>
                    </ul>
                </li> --}}
                <li class="menu-title">Pages</li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-account-circle-line"></i>
                        <span>Blog Category</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('home.blog.category') }}">All Blog Category</a></li>
                        <li><a href="{{ route('add.blog.category') }}">Add Blog Category</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-profile-line"></i>
                        <span>Blog Sector</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('home.blog') }}">All Blog</a></li>
                        <li><a href="{{ route('add.blog')}}">Add Blog</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-profile-line"></i>
                        <span>Footer Sector</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('home.footer') }}">Footer</a></li>
                    </ul>
                </li>
            </ul>
        </div>
       <!--- Starts Sidemenu -->
    </div>
</div>
<!-- Starts vertical-menu -->