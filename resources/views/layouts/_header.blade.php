<!-- ============================================================== -->
<!-- Top header  -->
<!-- ============================================================== -->
<!-- Start Navigation -->
@php
    $candidate = Auth::guard('candidate')->user();
    $employer = Auth::guard('employer')->user();
@endphp

<div class="header header-light dark-text">
    <div class="container">
        <nav id="navigation" class="navigation navigation-landscape">
            <div class="nav-header">
                <a class="nav-brand" href="{{ url('#') }}">
                    <img src="{{ url('assets/img/logo.png') }}" class="logo" alt="" />
                </a>
                <div class="nav-toggle"></div>
                <div class="mobile_nav">
                    <ul>
                        <li>
                            <a href="{{ url('#') }}" data-toggle="modal" data-target="#login"
                                class="theme-cl fs-lg">
                                <i class="lni lni-user"></i>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('dashboard-post-job.html') }}" class="crs_yuo12 w-auto text-white theme-bg">
                                <span class="embos_45"><i class="fas fa-plus-circle mr-1 mr-1"></i>Post
                                    Job</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="nav-menus-wrapper" style="transition-property: none;">
                <ul class="nav-menu">

                    <li><a href="{{ route('index') }}">Home</a></li>

                    <li><a href="{{ route('find.job') }}">Find Job</a></li>

                    @if ($candidate)
                    @else
                        <li><a href="{{ route('candidates') }}">Candidates</a></li>
                    @endif

                    <li><a href="{{ route('about-us') }}">About Us</a></li>

                    <li><a href="{{ route('contact') }}">Contact Us</a></li>

                </ul>

                <ul class="nav-menu nav-menu-social align-to-right">
                    @if ($candidate)
                        {{-- NOTHING FOR NOW --}}
                        <li>
                            <a href="{{ route('candidate.logout') }}" class="theme-cl ft-medium">
                                <i class="lni lni-user mr-2"></i>Sign Out
                            </a>
                        </li>

                        {{-- Employer Section --}}
                    @elseif ($employer)
                        <li>
                            <a href="{{ route('employer.logout') }}" class="theme-cl ft-medium">
                                <i class="lni lni-user mr-2"></i>Sign Out
                            </a>
                        </li>
                    @else
                        <li>
                            <a href="{{ route('login.page') }}" class="theme-cl ft-medium">
                                <i class="lni lni-user mr-2"></i>Sign In
                            </a>
                        </li>
                    @endif

                    @if ($candidate)
                        <li class="add-listing">
                            <a href="{{ route('candidate.dashboard') }}">
                                <i class="lni lni-circle-plus mr-1"></i> Dashboard
                            </a>
                        </li>
                    @elseif ($employer)
                        {{-- <li class="add-listing">
                            <a href="{{ url('dashboard-post-job.html') }}">
                                <i class="lni lni-circle-plus mr-1"></i> Post a Job
                            </a>
                        </li> --}}

                        <li class="add-listing">
                            <a href="{{ route('employer.dashboard') }}">
                                <i class="lni lni-circle-plus mr-1"></i> Dashboard
                            </a>
                        </li>
                    @endif
                </ul>
            </div>
        </nav>
    </div>
</div>
<!-- End Navigation -->
<div class="clearfix"></div>
<!-- ============================================================== -->
<!-- Top header  -->
<!-- ============================================================== -->

@php
    $excludedRoutes = ['login', 'jobs'];
@endphp

@if (!in_array(Request::path(), $excludedRoutes))
<div class="dashboard-wrap bg-light">
    <a class="mobNavigation" data-toggle="collapse" href="#MobNav" role="button" aria-expanded="false"
        aria-controls="MobNav">
        <i class="fas fa-bars mr-2"></i>Dashboard Navigation
    </a>
    <div class="collapse" id="MobNav">
        <div class="dashboard-nav">
            <div class="dashboard-inner">
                <ul data-submenu-title="Main Navigation">
                    <li class=""><a href="{{ route('candidate.dashboard') }}"><i
                                class="lni lni-dashboard mr-2"></i>Dashboard</a></li>
                    <li><a href="dashboard-add-resume.html"><i class="lni lni-add-files mr-2"></i>Create
                            Resume</a></li>
                    <li><a href="{{ route('candidate.applied-jobs') }}"><i class="lni lni-briefcase mr-2"></i>Applied
                            jobs</a></li>
                    <li><a href="dashboard-alert-job.html"><i class="ti-bell mr-2"></i>Alert Jobs<span
                                class="count-tag bg-warning">4</span></a></li>
                    <li><a href="dashboard-messages.html"><i class="lni lni-envelope mr-2"></i>Messages<span
                                class="count-tag">4</span></a></li>
                </ul>
                <ul data-submenu-title="My Accounts">
                    <li><a href="{{ route('candidate.profile') }}"><i class="lni lni-user mr-2"></i>My Profile
                        </a></li>
                    <li><a href="{{ route('candidate.update.password') }}"><i class="lni lni-lock-alt mr-2"></i>Change
                            Password</a></li>
                    <li><a href="javascript:void(0);"><i class="lni lni-trash-can mr-2"></i>Delete Account</a>
                    </li>
                    <li><a href="{{ route('candidate.logout') }}"><i class="lni lni-power-switch mr-2"></i>Log Out</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endif
