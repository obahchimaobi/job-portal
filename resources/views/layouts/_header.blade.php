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

                    <li><a href="{{ route('candidates') }}">Candidates</a></li>

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
