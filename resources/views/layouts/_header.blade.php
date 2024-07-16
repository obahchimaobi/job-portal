<!-- ============================================================== -->
        <!-- Top header  -->
        <!-- ============================================================== -->
        <!-- Start Navigation -->
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
                                    <a href="{{ url('#') }}" data-toggle="modal" data-target="#login" class="theme-cl fs-lg">
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

                            <li><a href="{{ url('javascript:void(0);') }}">Find Job</a>
                                <ul class="nav-dropdown nav-submenu">
                                    <li><a href="{{ url('job-search-v1.html') }}">Job Search V1</a></li>
                                    <li><a href="{{ url('job-search-v2.html') }}">Job Search V2</a></li>
                                    <li><a href="{{ url('job-search-v3.html') }}">Job Search V3</a></li>
                                    <li><a href="{{ url('job-list-v1.html') }}">Job Search V4</a></li>
                                    <li><a href="{{ url('job-list-v2.html') }}">Job Search V5</a></li>
                                    <li><a href="{{ url('job-list-v3.html') }}">Job Search V6</a></li>
                                    <li><a href="{{ url('javascript:void(0);') }}">Map Styles</a>
                                        <ul class="nav-dropdown nav-submenu">
                                            <li><a href="{{ url('job-half-map.html') }}">Search On Map V1</a></li>
                                            <li><a href="{{ url('job-half-map-v2.html') }}">Search On Map V2</a></li>
                                            <li><a href="{{ url('job-search-map-v1.html') }}">Search On Map V3</a></li>
                                            <li><a href="{{ url('job-search-map-v2.html') }}">Search On Map V4</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{ url('javascript:void(0);') }}">Single Job</a>
                                        <ul class="nav-dropdown nav-submenu">
                                            <li><a href="{{ url('single-job-1.html') }}">Single Job V1</a></li>
                                            <li><a href="{{ url('single-job-2.html') }}">Single Job V2</a></li>
                                            <li><a href="{{ url('single-job-3.html') }}">Single Job V3</a></li>
                                            <li><a href="{{ url('single-job-4.html') }}">Single Job V4</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            <li><a href="{{ url('javascript:void(0);') }}">Candidates</a>
                                <ul class="nav-dropdown nav-submenu">
                                    <li><a href="{{ url('browse-jobs.html') }}">Browse Jobs</a></li>
                                    <li><a href="{{ url('browse-resumes.html') }}">Browse Resumes</a></li>
                                    <li><a href="{{ url('browse-category.html') }}">Browse Categories</a></li>
                                    <li><a href="{{ url('candidate-detail.html') }}">Candidate Detail</a></li>
                                    <li><a href="{{ url('candidate-dashboard.html') }}">Candidate Dashboard</a></li>
                                </ul>
                            </li>

                            <li><a href="{{ url('javascript:void(0);') }}">Employers</a>
                                <ul class="nav-dropdown nav-submenu">
                                    <li><a href="{{ url('browse-employers.html') }}">Browse Employers V1</a></li>
                                    <li><a href="{{ url('browse-employers-list.html') }}">Browse Employers V2</a></li>
                                    <li><a href="{{ url('employer-detail.html') }}">Employer Detail</a></li>
                                    <li><a href="{{ url('employer-dashboard.html') }}">Employer Dashboard</a></li>
                                </ul>
                            </li>

                            <li><a href="{{ url('javascript:void(0);') }}">Pages</a>
                                <ul class="nav-dropdown nav-submenu">
                                    <li><a href="{{ url('blog.html') }}">Blog Style</a></li>
                                    <li><a href="{{ url('about-us.html') }}">About Us</a></li>
                                    <li><a href="{{ url('contact.html') }}">Contact</a></li>
                                    <li><a href="{{ url('404.html') }}">404 Page</a></li>
                                    <li><a href="{{ url('privacy.html') }}">Privacy Policy</a></li>
                                    <li><a href="{{ url('faq.html') }}">FAQs</a></li>
                                    <li><a href="{{ url('docs.html') }}">Docs</a></li>
                                </ul>
                            </li>

                        </ul>

                        <ul class="nav-menu nav-menu-social align-to-right">
                            <li>
                                <a href="{{ url('#') }}" data-toggle="modal" data-target="#login" class="theme-cl ft-medium">
                                    <i class="lni lni-user mr-2"></i>Sign In
                                </a>
                            </li>
                            <li class="add-listing">
                                <a href="{{ url('dashboard-post-job.html') }}">
                                    <i class="lni lni-circle-plus mr-1"></i> Post a Job
                                </a>
                            </li>
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