@extends('layouts.app')

@section('content')
    <!-- ======================= Top Breadcrubms ======================== -->
    <div class="bg-title py-5" data-overlay="0">
        <div class="ht-30"></div>
        <div class="container">
            <div class="row">
                <div class="colxl-12 col-lg-12 col-md-12">
                    <h1 class="ft-medium">Browse Resumes</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#" class="text-light">Home</a></li>
                            <li class="breadcrumb-item"><a href="#" class="text-light">Job</a></li>
                            <li class="breadcrumb-item active theme-cl" aria-current="page">Browse Candidates</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <div class="ht-30"></div>
    </div>
    <!-- ======================= Top Breadcrubms ======================== -->

    <!-- ============================ Main Section Start ================================== -->
    <section class="bg-light">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="bg-white rounded mb-4">

                        <div class="sidebar_header d-flex align-items-center justify-content-between px-4 py-3 br-bottom">
                            <h4 class="ft-medium fs-lg mb-0">Search Filter</h4>
                            <div class="ssh-header">
                                <a href="javascript:void(0);" class="clear_all ft-medium text-muted">Clear All</a>
                                <a href="#search_open" data-toggle="collapse" aria-expanded="false" role="button"
                                    class="collapsed _filter-ico ml-2"><i class="lni lni-text-align-right"></i></a>
                            </div>
                        </div>

                        <!-- Find New Property -->
                        <div class="sidebar-widgets collapse miz_show" id="search_open" data-parent="#search_open">

                            <div class="search-inner">

                                <div class="filter-search-box px-4 pt-3 pb-0">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Search by keywords...">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Location, Zip..">
                                    </div>
                                </div>

                                <div class="filter_wraps">

                                    <!-- Job categories Search -->
                                    <div class="single_search_boxed px-4 pt-0 br-bottom">
                                        <div class="widget-boxed-header">
                                            <h4>
                                                <a href="#categories" class="ft-medium fs-md pb-0" data-toggle="collapse"
                                                    aria-expanded="true" role="button">Job Categories</a>
                                            </h4>

                                        </div>
                                        <div class="widget-boxed-body collapse show" id="categories"
                                            data-parent="#categories">
                                            <div class="side-list no-border">
                                                <!-- Single Filter Card -->
                                                <div class="single_filter_card">
                                                    <div class="card-body p-0">
                                                        <div class="inner_widget_link">
                                                            <ul class="no-ul-list filter-list">
                                                                <li>
                                                                    <input id="a1" class="checkbox-custom"
                                                                        name="ADA" type="checkbox" checked="">
                                                                    <label for="a1" class="checkbox-custom-label">IT
                                                                        Computers
                                                                        (62)</label>
                                                                    <ul class="no-ul-list filter-list">
                                                                        <li>
                                                                            <input id="aa1" class="checkbox-custom"
                                                                                name="ADA" type="checkbox">
                                                                            <label for="aa1"
                                                                                class="checkbox-custom-label">Web
                                                                                Design (31)</label>
                                                                        </li>
                                                                        <li>
                                                                            <input id="aa2" class="checkbox-custom"
                                                                                name="Parking" type="checkbox">
                                                                            <label for="aa2"
                                                                                class="checkbox-custom-label">Web
                                                                                development (20)</label>
                                                                        </li>
                                                                        <li>
                                                                            <input id="aa3" class="checkbox-custom"
                                                                                name="Coffee" type="checkbox">
                                                                            <label for="aa3"
                                                                                class="checkbox-custom-label">SEO
                                                                                Services (43)</label>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                                <li>
                                                                    <input id="a2" class="checkbox-custom"
                                                                        name="Parking" type="checkbox">
                                                                    <label for="a2"
                                                                        class="checkbox-custom-label">Financial
                                                                        Service (16)</label>
                                                                </li>
                                                                <li>
                                                                    <input id="a3" class="checkbox-custom"
                                                                        name="Coffee" type="checkbox">
                                                                    <label for="a3"
                                                                        class="checkbox-custom-label">Art, Design,
                                                                        Media (22)</label>
                                                                </li>
                                                                <li>
                                                                    <input id="a4" class="checkbox-custom"
                                                                        name="Mother" type="checkbox">
                                                                    <label for="a4"
                                                                        class="checkbox-custom-label">Coach &
                                                                        Education (21)</label>
                                                                </li>
                                                                <li>
                                                                    <input id="a5" class="checkbox-custom"
                                                                        name="Outdoor" type="checkbox">
                                                                    <label for="a5"
                                                                        class="checkbox-custom-label">Apps
                                                                        Developements (17)</label>
                                                                    <ul class="no-ul-list filter-list">
                                                                        <li>
                                                                            <input id="ab1" class="checkbox-custom"
                                                                                name="ADA" type="checkbox">
                                                                            <label for="ab1"
                                                                                class="checkbox-custom-label">IOS
                                                                                Development (12)</label>
                                                                        </li>
                                                                        <li>
                                                                            <input id="ab2" class="checkbox-custom"
                                                                                name="Parking" type="checkbox">
                                                                            <label for="ab2"
                                                                                class="checkbox-custom-label">Android
                                                                                Development (04)</label>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                                <li>
                                                                    <input id="a6" class="checkbox-custom"
                                                                        name="Pet" type="checkbox">
                                                                    <label for="a6"
                                                                        class="checkbox-custom-label">Writing &
                                                                        Translation (04)</label>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Job Locations Search -->
                                    <div class="single_search_boxed px-4 pt-0 br-bottom">
                                        <div class="widget-boxed-header">
                                            <h4>
                                                <a href="#locations" data-toggle="collapse" aria-expanded="false"
                                                    role="button" class="ft-medium fs-md pb-0 collapsed">Job
                                                    Locations</a>
                                            </h4>

                                        </div>
                                        <div class="widget-boxed-body collapse" id="locations" data-parent="#locations">
                                            <div class="side-list no-border">
                                                <!-- Single Filter Card -->
                                                <div class="single_filter_card">
                                                    <div class="card-body p-0">
                                                        <div class="inner_widget_link">
                                                            <ul class="no-ul-list filter-list">
                                                                <li>
                                                                    <input id="b1" class="checkbox-custom"
                                                                        name="ADA" type="checkbox" checked="">
                                                                    <label for="b1"
                                                                        class="checkbox-custom-label">Australia
                                                                        (21)</label>
                                                                </li>
                                                                <li>
                                                                    <input id="b2" class="checkbox-custom"
                                                                        name="Parking" type="checkbox">
                                                                    <label for="b2"
                                                                        class="checkbox-custom-label">New Zeland
                                                                        (12)</label>
                                                                </li>
                                                                <li>
                                                                    <input id="b3" class="checkbox-custom"
                                                                        name="Coffee" type="checkbox">
                                                                    <label for="b3"
                                                                        class="checkbox-custom-label">United
                                                                        Kingdom (21)</label>
                                                                    <ul class="no-ul-list filter-list">
                                                                        <li>
                                                                            <input id="ac1" class="checkbox-custom"
                                                                                name="ADA" type="checkbox">
                                                                            <label for="ac1"
                                                                                class="checkbox-custom-label">London
                                                                                (06)</label>
                                                                        </li>
                                                                        <li>
                                                                            <input id="ac2" class="checkbox-custom"
                                                                                name="Parking" type="checkbox">
                                                                            <label for="ac2"
                                                                                class="checkbox-custom-label">Manchester
                                                                                (07)</label>
                                                                        </li>
                                                                        <li>
                                                                            <input id="ac3" class="checkbox-custom"
                                                                                name="Coffee" type="checkbox">
                                                                            <label for="ac3"
                                                                                class="checkbox-custom-label">Birmingham
                                                                                (08)</label>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                                <li>
                                                                    <input id="b4" class="checkbox-custom"
                                                                        name="Mother" type="checkbox">
                                                                    <label for="b4"
                                                                        class="checkbox-custom-label">United State
                                                                        (04)</label>
                                                                    <ul class="no-ul-list filter-list">
                                                                        <li>
                                                                            <input id="ad1" class="checkbox-custom"
                                                                                name="ADA" type="checkbox">
                                                                            <label for="ad1"
                                                                                class="checkbox-custom-label">New
                                                                                York (32)</label>
                                                                        </li>
                                                                        <li>
                                                                            <input id="ad2" class="checkbox-custom"
                                                                                name="Parking" type="checkbox">
                                                                            <label for="ad2"
                                                                                class="checkbox-custom-label">Washington
                                                                                (42)</label>
                                                                        </li>
                                                                        <li>
                                                                            <input id="ad3" class="checkbox-custom"
                                                                                name="Coffee" type="checkbox">
                                                                            <label for="ad3"
                                                                                class="checkbox-custom-label">Los
                                                                                Angeles (22)</label>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                                <li>
                                                                    <input id="b5" class="checkbox-custom"
                                                                        name="Outdoor" type="checkbox">
                                                                    <label for="b5"
                                                                        class="checkbox-custom-label">India
                                                                        (15)</label>
                                                                </li>
                                                                <li>
                                                                    <input id="b6" class="checkbox-custom"
                                                                        name="Pet" type="checkbox">
                                                                    <label for="b6"
                                                                        class="checkbox-custom-label">Singapore
                                                                        (09)</label>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Job Skills Search -->
                                    <div class="single_search_boxed px-4 pt-0 br-bottom">
                                        <div class="widget-boxed-header">
                                            <h4>
                                                <a href="#skills" data-toggle="collapse" aria-expanded="false"
                                                    role="button" class="ft-medium fs-md pb-0 collapsed">Skills</a>
                                            </h4>

                                        </div>
                                        <div class="widget-boxed-body collapse" id="skills" data-parent="#skills">
                                            <div class="side-list no-border">
                                                <!-- Single Filter Card -->
                                                <div class="single_filter_card">
                                                    <div class="card-body p-0">
                                                        <div class="inner_widget_link">
                                                            <ul class="no-ul-list filter-list">
                                                                <li>
                                                                    <input id="c1" class="checkbox-custom"
                                                                        name="ADA" type="checkbox" checked="">
                                                                    <label for="c1"
                                                                        class="checkbox-custom-label">Administrative
                                                                        (15)</label>
                                                                </li>
                                                                <li>
                                                                    <input id="c2" class="checkbox-custom"
                                                                        name="Parking" type="checkbox">
                                                                    <label for="c2"
                                                                        class="checkbox-custom-label">iPhone &
                                                                        Android (33)</label>
                                                                </li>
                                                                <li>
                                                                    <input id="c3" class="checkbox-custom"
                                                                        name="Coffee" type="checkbox">
                                                                    <label for="c3"
                                                                        class="checkbox-custom-label">Java & AJAX
                                                                        (32)</label>
                                                                </li>
                                                                <li>
                                                                    <input id="c4" class="checkbox-custom"
                                                                        name="Mother" type="checkbox">
                                                                    <label for="c4"
                                                                        class="checkbox-custom-label">Account
                                                                        Manager (21)</label>
                                                                </li>
                                                                <li>
                                                                    <input id="c5" class="checkbox-custom"
                                                                        name="Outdoor" type="checkbox">
                                                                    <label for="c5"
                                                                        class="checkbox-custom-label">WordPress
                                                                        (32)</label>
                                                                </li>
                                                                <li>
                                                                    <input id="c6" class="checkbox-custom"
                                                                        name="Pet" type="checkbox">
                                                                    <label for="c6"
                                                                        class="checkbox-custom-label">Magento
                                                                        (42)</label>
                                                                </li>
                                                                <li>
                                                                    <input id="c7" class="checkbox-custom"
                                                                        name="Beauty" type="checkbox">
                                                                    <label for="c7"
                                                                        class="checkbox-custom-label">Shopify
                                                                        (12)</label>
                                                                </li>
                                                                <li>
                                                                    <input id="c8" class="checkbox-custom"
                                                                        name="Bike" type="checkbox">
                                                                    <label for="c8"
                                                                        class="checkbox-custom-label">PHP Script
                                                                        (08)</label>
                                                                </li>
                                                                <li>
                                                                    <input id="c9" class="checkbox-custom"
                                                                        name="Phone" type="checkbox">
                                                                    <label for="c9"
                                                                        class="checkbox-custom-label">Drupal
                                                                        (32)</label>
                                                                </li>
                                                                <li>
                                                                    <input id="c11" class="checkbox-custom"
                                                                        name="Private" type="checkbox">
                                                                    <label for="c11"
                                                                        class="checkbox-custom-label">Joomla
                                                                        (50)</label>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Experience Search -->
                                    <div class="single_search_boxed px-4 pt-0 br-bottom">
                                        <div class="widget-boxed-header">
                                            <h4>
                                                <a href="#experience" data-toggle="collapse" aria-expanded="false"
                                                    role="button" class="ft-medium fs-md pb-0 collapsed">Experience</a>
                                            </h4>

                                        </div>
                                        <div class="widget-boxed-body collapse" id="experience"
                                            data-parent="#experience">
                                            <div class="side-list no-border">
                                                <!-- Single Filter Card -->
                                                <div class="single_filter_card">
                                                    <div class="card-body p-0">
                                                        <div class="inner_widget_link">
                                                            <ul class="no-ul-list filter-list">
                                                                <li>
                                                                    <input id="d1" class="checkbox-custom"
                                                                        name="ADA" type="checkbox" checked="">
                                                                    <label for="d1"
                                                                        class="checkbox-custom-label">Beginner
                                                                        (54)</label>
                                                                </li>
                                                                <li>
                                                                    <input id="d2" class="checkbox-custom"
                                                                        name="Parking" type="checkbox">
                                                                    <label for="d2" class="checkbox-custom-label">1+
                                                                        Year
                                                                        (32)</label>
                                                                </li>
                                                                <li>
                                                                    <input id="d3" class="checkbox-custom"
                                                                        name="Coffee" type="checkbox">
                                                                    <label for="d3" class="checkbox-custom-label">2
                                                                        Year
                                                                        (09)</label>
                                                                </li>
                                                                <li>
                                                                    <input id="d4" class="checkbox-custom"
                                                                        name="Mother" type="checkbox">
                                                                    <label for="d4" class="checkbox-custom-label">3+
                                                                        Year
                                                                        (16)</label>
                                                                </li>
                                                                <li>
                                                                    <input id="d5" class="checkbox-custom"
                                                                        name="Outdoor" type="checkbox">
                                                                    <label for="d5" class="checkbox-custom-label">4+
                                                                        Year
                                                                        (17)</label>
                                                                </li>
                                                                <li>
                                                                    <input id="d6" class="checkbox-custom"
                                                                        name="Pet" type="checkbox">
                                                                    <label for="d6" class="checkbox-custom-label">5+
                                                                        Year
                                                                        (22)</label>
                                                                </li>
                                                                <li>
                                                                    <input id="d7" class="checkbox-custom"
                                                                        name="Beauty" type="checkbox">
                                                                    <label for="d7"
                                                                        class="checkbox-custom-label">10+ Year
                                                                        (32)</label>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Job types Search -->
                                    <div class="single_search_boxed px-4 pt-0 br-bottom">
                                        <div class="widget-boxed-header">
                                            <h4>
                                                <a href="#jbtypes" data-toggle="collapse" aria-expanded="false"
                                                    role="button" class="ft-medium fs-md pb-0 collapsed">Job
                                                    Type</a>
                                            </h4>

                                        </div>
                                        <div class="widget-boxed-body collapse" id="jbtypes" data-parent="#jbtypes">
                                            <div class="side-list no-border">
                                                <!-- Single Filter Card -->
                                                <div class="single_filter_card">
                                                    <div class="card-body p-0">
                                                        <div class="inner_widget_link">
                                                            <ul class="no-ul-list filter-list">
                                                                <li>
                                                                    <input id="e2" class="radio-custom"
                                                                        name="jtype" type="radio">
                                                                    <label for="e2" class="radio-custom-label">Full
                                                                        time</label>
                                                                </li>
                                                                <li>
                                                                    <input id="e3" class="radio-custom"
                                                                        name="jtype" type="radio">
                                                                    <label for="e3" class="radio-custom-label">Part
                                                                        Time</label>
                                                                </li>
                                                                <li>
                                                                    <input id="e4" class="radio-custom"
                                                                        name="jtype" type="radio" checked="">
                                                                    <label for="e4"
                                                                        class="radio-custom-label">Contract
                                                                        Base</label>
                                                                </li>
                                                                <li>
                                                                    <input id="e5" class="radio-custom"
                                                                        name="jtype" type="radio">
                                                                    <label for="e5"
                                                                        class="radio-custom-label">Internship</label>
                                                                </li>
                                                                <li>
                                                                    <input id="e6" class="radio-custom"
                                                                        name="jtype" type="radio">
                                                                    <label for="e6"
                                                                        class="radio-custom-label">Regular</label>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Job Level Search -->
                                    <div class="single_search_boxed px-4 pt-0 br-bottom">
                                        <div class="widget-boxed-header">
                                            <h4>
                                                <a href="#jblevel" data-toggle="collapse" aria-expanded="false"
                                                    role="button" class="ft-medium fs-md pb-0 collapsed">Job
                                                    Level</a>
                                            </h4>

                                        </div>
                                        <div class="widget-boxed-body collapse" id="jblevel" data-parent="#jblevel">
                                            <div class="side-list no-border">
                                                <!-- Single Filter Card -->
                                                <div class="single_filter_card">
                                                    <div class="card-body p-0">
                                                        <div class="inner_widget_link">
                                                            <ul class="no-ul-list filter-list">
                                                                <li>
                                                                    <input id="f1" class="checkbox-custom"
                                                                        name="ADA" type="checkbox" checked="">
                                                                    <label for="f1"
                                                                        class="checkbox-custom-label">Team
                                                                        Leader</label>
                                                                </li>
                                                                <li>
                                                                    <input id="f2" class="checkbox-custom"
                                                                        name="Parking" type="checkbox">
                                                                    <label for="f2"
                                                                        class="checkbox-custom-label">Manager</label>
                                                                </li>
                                                                <li>
                                                                    <input id="f3" class="checkbox-custom"
                                                                        name="Coffee" type="checkbox">
                                                                    <label for="f3"
                                                                        class="checkbox-custom-label">Junior</label>
                                                                </li>
                                                                <li>
                                                                    <input id="f4" class="checkbox-custom"
                                                                        name="Coffee" type="checkbox">
                                                                    <label for="f4"
                                                                        class="checkbox-custom-label">Senior</label>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Expected Salary Search -->
                                    <div class="single_search_boxed px-4 pt-0">
                                        <div class="widget-boxed-header">
                                            <h4>
                                                <a href="#salary" data-toggle="collapse" aria-expanded="false"
                                                    role="button" class="ft-medium fs-md pb-0 collapsed">Expected
                                                    Salary</a>
                                            </h4>

                                        </div>
                                        <div class="widget-boxed-body collapse" id="salary" data-parent="#salary">
                                            <div class="side-list no-border">
                                                <!-- Single Filter Card -->
                                                <div class="single_filter_card">
                                                    <div class="card-body p-0">
                                                        <div class="inner_widget_link">
                                                            <ul class="no-ul-list filter-list">
                                                                <li>
                                                                    <input id="g1" class="checkbox-custom"
                                                                        name="ADA" type="checkbox" checked="">
                                                                    <label for="g1"
                                                                        class="checkbox-custom-label">$120k - $140k
                                                                        PA</label>
                                                                </li>
                                                                <li>
                                                                    <input id="g2" class="checkbox-custom"
                                                                        name="Parking" type="checkbox">
                                                                    <label for="g2"
                                                                        class="checkbox-custom-label">$140k - $150k
                                                                        PA</label>
                                                                </li>
                                                                <li>
                                                                    <input id="g3" class="checkbox-custom"
                                                                        name="Coffee" type="checkbox">
                                                                    <label for="g3"
                                                                        class="checkbox-custom-label">$150k - $170k
                                                                        PA</label>
                                                                </li>
                                                                <li>
                                                                    <input id="g4" class="checkbox-custom"
                                                                        name="Mother" type="checkbox">
                                                                    <label for="g4"
                                                                        class="checkbox-custom-label">$170k - $190k
                                                                        PA</label>
                                                                </li>
                                                                <li>
                                                                    <input id="g5" class="checkbox-custom"
                                                                        name="Outdoor" type="checkbox">
                                                                    <label for="g5"
                                                                        class="checkbox-custom-label">$200k - $250k
                                                                        PA</label>
                                                                </li>
                                                                <li>
                                                                    <input id="g6" class="checkbox-custom"
                                                                        name="Pet" type="checkbox">
                                                                    <label for="g6"
                                                                        class="checkbox-custom-label">$250k - $300k
                                                                        PA</label>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="form-group filter_button pt-2 pb-4 px-4">
                                    <button type="submit" class="btn btn-md theme-bg text-light rounded full-width">22
                                        Results
                                        Show</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Sidebar End -->

                </div>

                <!-- Item Wrap Start -->
                <div class="col-lg-8 col-md-12 col-sm-12">

                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                            <div class="row align-items-center justify-content-between mx-0 bg-white rounded py-2 mb-4">
                                <div class="col-xl-3 col-lg-4 col-md-5 col-sm-12">
                                    <h6 class="mb-0 ft-medium fs-sm">302 New Jobs Found</h6>
                                </div>

                                <div class="col-xl-9 col-lg-8 col-md-7 col-sm-12">
                                    <div class="filter_wraps elspo_wrap d-flex align-items-center justify-content-end">
                                        <div class="single_fitres mr-2 br-right">
                                            <select class="custom-select simple">
                                                <option value="1" selected="">Default Sorting</option>
                                                <option value="2">Recent jobs</option>
                                                <option value="3">Featured jobs</option>
                                                <option value="4">Trending Jobs</option>
                                                <option value="5">Premium jobs</option>
                                            </select>
                                        </div>
                                        <div class="single_fitres">
                                            <a href="browse-resumes.html" class="simple-button mr-1"><i
                                                    class="ti-layout-grid2"></i></a>
                                            <a href="browse-resumes-list.html" class="simple-button active theme-cl"><i
                                                    class="ti-view-list"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- row -->
                    <div class="row align-items-center">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-12">

                            <!-- Single -->
                            <div class="job_grid d-block border rounded px-3 pt-3 pb-2">
                                <div class="jb-list01-flex d-flex align-items-start justify-content-start">
                                    <div class="jb-list01-thumb">
                                        <img src="https://via.placeholder.com/500x500" class="img-fluid circle"
                                            width="90" alt="" />
                                    </div>

                                    <div class="jb-list01 pl-3">
                                        <div class="jb-list-01-title">
                                            <h5 class="ft-medium mb-1"><a href="candidate-detail.html">Nancy I.
                                                    Chin<img src="assets/img/verify.svg" class="ml-1" width="12"
                                                        alt=""></a></h5>
                                        </div>
                                        <div class="jb-list-01-info d-block mb-3">
                                            <span class="text-muted mr-2"><i
                                                    class="lni lni-map-marker mr-1"></i>Liverpool, UK</span>
                                            <span class="text-muted mr-2"><i class="lni lni-tag mr-1"></i>PHP
                                                Developer</span>
                                            <span class="text-muted mr-2"><i class="lni lni-briefcase mr-1"></i>Full
                                                Time</span>
                                            <span class="text-muted mr-2"><i class="lni lni-graduation mr-1"></i>4
                                                Year Exp.</span>
                                        </div>
                                        <div class="jb-list-01-title d-inline">
                                            <span
                                                class="mr-2 mb-2 d-inline-flex px-2 py-1 rounded theme-cl theme-bg-light">Photoshop</span>
                                            <span
                                                class="mr-2 mb-2 d-inline-flex px-2 py-1 rounded text-warning bg-light-warning">WordPress</span>
                                            <span
                                                class="mr-2 mb-2 d-inline-flex px-2 py-1 rounded text-danger bg-light-danger">Magento</span>
                                            <span class="mr-2 mb-2 d-inline-flex px-2 py-1 rounded text-light bg-info">+3
                                                More</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Single -->
                            <div class="job_grid d-block border rounded px-3 pt-3 pb-2">
                                <div class="jb-list01-flex d-flex align-items-start justify-content-start">
                                    <div class="jb-list01-thumb">
                                        <img src="https://via.placeholder.com/500x500" class="img-fluid circle"
                                            width="90" alt="" />
                                    </div>

                                    <div class="jb-list01 pl-3">
                                        <div class="jb-list-01-title">
                                            <h5 class="ft-medium mb-1"><a href="candidate-detail.html">Elwood K.
                                                    Gray</a></h5>
                                        </div>
                                        <div class="jb-list-01-info d-block mb-3">
                                            <span class="text-muted mr-2"><i
                                                    class="lni lni-map-marker mr-1"></i>Liverpool, UK</span>
                                            <span class="text-muted mr-2"><i class="lni lni-tag mr-1"></i>PHP
                                                Developer</span>
                                            <span class="text-muted mr-2"><i class="lni lni-briefcase mr-1"></i>Full
                                                Time</span>
                                            <span class="text-muted mr-2"><i class="lni lni-graduation mr-1"></i>4
                                                Year Exp.</span>
                                        </div>
                                        <div class="jb-list-01-title d-inline">
                                            <span
                                                class="mr-2 mb-2 d-inline-flex px-2 py-1 rounded theme-cl theme-bg-light">Photoshop</span>
                                            <span
                                                class="mr-2 mb-2 d-inline-flex px-2 py-1 rounded text-warning bg-light-warning">WordPress</span>
                                            <span
                                                class="mr-2 mb-2 d-inline-flex px-2 py-1 rounded text-danger bg-light-danger">Magento</span>
                                            <span class="mr-2 mb-2 d-inline-flex px-2 py-1 rounded text-light bg-info">+3
                                                More</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Single -->
                            <div class="job_grid d-block border rounded px-3 pt-3 pb-2">
                                <div class="jb-list01-flex d-flex align-items-start justify-content-start">
                                    <div class="jb-list01-thumb">
                                        <img src="https://via.placeholder.com/500x500" class="img-fluid circle"
                                            width="90" alt="" />
                                    </div>

                                    <div class="jb-list01 pl-3">
                                        <div class="jb-list-01-title">
                                            <h5 class="ft-medium mb-1"><a href="candidate-detail.html">Edward C.
                                                    Bethel</a></h5>
                                        </div>
                                        <div class="jb-list-01-info d-block mb-3">
                                            <span class="text-muted mr-2"><i
                                                    class="lni lni-map-marker mr-1"></i>Liverpool, UK</span>
                                            <span class="text-muted mr-2"><i class="lni lni-tag mr-1"></i>PHP
                                                Developer</span>
                                            <span class="text-muted mr-2"><i class="lni lni-briefcase mr-1"></i>Full
                                                Time</span>
                                            <span class="text-muted mr-2"><i class="lni lni-graduation mr-1"></i>4
                                                Year Exp.</span>
                                        </div>
                                        <div class="jb-list-01-title d-inline">
                                            <span
                                                class="mr-2 mb-2 d-inline-flex px-2 py-1 rounded theme-cl theme-bg-light">Photoshop</span>
                                            <span
                                                class="mr-2 mb-2 d-inline-flex px-2 py-1 rounded text-warning bg-light-warning">WordPress</span>
                                            <span
                                                class="mr-2 mb-2 d-inline-flex px-2 py-1 rounded text-danger bg-light-danger">Magento</span>
                                            <span class="mr-2 mb-2 d-inline-flex px-2 py-1 rounded text-light bg-info">+3
                                                More</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Single -->
                            <div class="job_grid d-block border rounded px-3 pt-3 pb-2">
                                <div class="jb-list01-flex d-flex align-items-start justify-content-start">
                                    <div class="jb-list01-thumb">
                                        <img src="https://via.placeholder.com/500x500" class="img-fluid circle"
                                            width="90" alt="" />
                                    </div>

                                    <div class="jb-list01 pl-3">
                                        <div class="jb-list-01-title">
                                            <h5 class="ft-medium mb-1"><a href="candidate-detail.html">John K.
                                                    Wheeler<img src="assets/img/verify.svg" class="ml-1" width="12"
                                                        alt=""></a></h5>
                                        </div>
                                        <div class="jb-list-01-info d-block mb-3">
                                            <span class="text-muted mr-2"><i
                                                    class="lni lni-map-marker mr-1"></i>Liverpool, UK</span>
                                            <span class="text-muted mr-2"><i class="lni lni-tag mr-1"></i>PHP
                                                Developer</span>
                                            <span class="text-muted mr-2"><i class="lni lni-briefcase mr-1"></i>Full
                                                Time</span>
                                            <span class="text-muted mr-2"><i class="lni lni-graduation mr-1"></i>4
                                                Year Exp.</span>
                                        </div>
                                        <div class="jb-list-01-title d-inline">
                                            <span
                                                class="mr-2 mb-2 d-inline-flex px-2 py-1 rounded theme-cl theme-bg-light">Photoshop</span>
                                            <span
                                                class="mr-2 mb-2 d-inline-flex px-2 py-1 rounded text-warning bg-light-warning">WordPress</span>
                                            <span
                                                class="mr-2 mb-2 d-inline-flex px-2 py-1 rounded text-danger bg-light-danger">Magento</span>
                                            <span class="mr-2 mb-2 d-inline-flex px-2 py-1 rounded text-light bg-info">+3
                                                More</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Single -->
                            <div class="job_grid d-block border rounded px-3 pt-3 pb-2">
                                <div class="jb-list01-flex d-flex align-items-start justify-content-start">
                                    <div class="jb-list01-thumb">
                                        <img src="https://via.placeholder.com/500x500" class="img-fluid circle"
                                            width="90" alt="" />
                                    </div>

                                    <div class="jb-list01 pl-3">
                                        <div class="jb-list-01-title">
                                            <h5 class="ft-medium mb-1"><a href="candidate-detail.html">Claudia R.
                                                    Gilbert</a></h5>
                                        </div>
                                        <div class="jb-list-01-info d-block mb-3">
                                            <span class="text-muted mr-2"><i
                                                    class="lni lni-map-marker mr-1"></i>Liverpool, UK</span>
                                            <span class="text-muted mr-2"><i class="lni lni-tag mr-1"></i>PHP
                                                Developer</span>
                                            <span class="text-muted mr-2"><i class="lni lni-briefcase mr-1"></i>Full
                                                Time</span>
                                            <span class="text-muted mr-2"><i class="lni lni-graduation mr-1"></i>4
                                                Year Exp.</span>
                                        </div>
                                        <div class="jb-list-01-title d-inline">
                                            <span
                                                class="mr-2 mb-2 d-inline-flex px-2 py-1 rounded theme-cl theme-bg-light">Photoshop</span>
                                            <span
                                                class="mr-2 mb-2 d-inline-flex px-2 py-1 rounded text-warning bg-light-warning">WordPress</span>
                                            <span
                                                class="mr-2 mb-2 d-inline-flex px-2 py-1 rounded text-danger bg-light-danger">Magento</span>
                                            <span class="mr-2 mb-2 d-inline-flex px-2 py-1 rounded text-light bg-info">+3
                                                More</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Single -->
                            <div class="job_grid d-block border rounded px-3 pt-3 pb-2">
                                <div class="jb-list01-flex d-flex align-items-start justify-content-start">
                                    <div class="jb-list01-thumb">
                                        <img src="https://via.placeholder.com/500x500" class="img-fluid circle"
                                            width="90" alt="" />
                                    </div>

                                    <div class="jb-list01 pl-3">
                                        <div class="jb-list-01-title">
                                            <h5 class="ft-medium mb-1"><a href="candidate-detail.html">Beverly M.
                                                    Johnston</a></h5>
                                        </div>
                                        <div class="jb-list-01-info d-block mb-3">
                                            <span class="text-muted mr-2"><i
                                                    class="lni lni-map-marker mr-1"></i>Liverpool, UK</span>
                                            <span class="text-muted mr-2"><i class="lni lni-tag mr-1"></i>PHP
                                                Developer</span>
                                            <span class="text-muted mr-2"><i class="lni lni-briefcase mr-1"></i>Full
                                                Time</span>
                                            <span class="text-muted mr-2"><i class="lni lni-graduation mr-1"></i>4
                                                Year Exp.</span>
                                        </div>
                                        <div class="jb-list-01-title d-inline">
                                            <span
                                                class="mr-2 mb-2 d-inline-flex px-2 py-1 rounded theme-cl theme-bg-light">Photoshop</span>
                                            <span
                                                class="mr-2 mb-2 d-inline-flex px-2 py-1 rounded text-warning bg-light-warning">WordPress</span>
                                            <span
                                                class="mr-2 mb-2 d-inline-flex px-2 py-1 rounded text-danger bg-light-danger">Magento</span>
                                            <span class="mr-2 mb-2 d-inline-flex px-2 py-1 rounded text-light bg-info">+3
                                                More</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Single -->
                            <div class="job_grid d-block border rounded px-3 pt-3 pb-2">
                                <div class="jb-list01-flex d-flex align-items-start justify-content-start">
                                    <div class="jb-list01-thumb">
                                        <img src="https://via.placeholder.com/500x500" class="img-fluid circle"
                                            width="90" alt="" />
                                    </div>

                                    <div class="jb-list01 pl-3">
                                        <div class="jb-list-01-title">
                                            <h5 class="ft-medium mb-1"><a href="candidate-detail.html">Fannie S.
                                                    Ross<img src="assets/img/verify.svg" class="ml-1" width="12"
                                                        alt=""></a></h5>
                                        </div>
                                        <div class="jb-list-01-info d-block mb-3">
                                            <span class="text-muted mr-2"><i
                                                    class="lni lni-map-marker mr-1"></i>Liverpool, UK</span>
                                            <span class="text-muted mr-2"><i class="lni lni-tag mr-1"></i>PHP
                                                Developer</span>
                                            <span class="text-muted mr-2"><i class="lni lni-briefcase mr-1"></i>Full
                                                Time</span>
                                            <span class="text-muted mr-2"><i class="lni lni-graduation mr-1"></i>4
                                                Year Exp.</span>
                                        </div>
                                        <div class="jb-list-01-title d-inline">
                                            <span
                                                class="mr-2 mb-2 d-inline-flex px-2 py-1 rounded theme-cl theme-bg-light">Photoshop</span>
                                            <span
                                                class="mr-2 mb-2 d-inline-flex px-2 py-1 rounded text-warning bg-light-warning">WordPress</span>
                                            <span
                                                class="mr-2 mb-2 d-inline-flex px-2 py-1 rounded text-danger bg-light-danger">Magento</span>
                                            <span class="mr-2 mb-2 d-inline-flex px-2 py-1 rounded text-light bg-info">+3
                                                More</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Single -->
                            <div class="job_grid d-block border rounded px-3 pt-3 pb-2">
                                <div class="jb-list01-flex d-flex align-items-start justify-content-start">
                                    <div class="jb-list01-thumb">
                                        <img src="https://via.placeholder.com/500x500" class="img-fluid circle"
                                            width="90" alt="" />
                                    </div>

                                    <div class="jb-list01 pl-3">
                                        <div class="jb-list-01-title">
                                            <h5 class="ft-medium mb-1"><a href="candidate-detail.html">Tina S.
                                                    Blakely</a></h5>
                                        </div>
                                        <div class="jb-list-01-info d-block mb-3">
                                            <span class="text-muted mr-2"><i
                                                    class="lni lni-map-marker mr-1"></i>Liverpool, UK</span>
                                            <span class="text-muted mr-2"><i class="lni lni-tag mr-1"></i>PHP
                                                Developer</span>
                                            <span class="text-muted mr-2"><i class="lni lni-briefcase mr-1"></i>Full
                                                Time</span>
                                            <span class="text-muted mr-2"><i class="lni lni-graduation mr-1"></i>4
                                                Year Exp.</span>
                                        </div>
                                        <div class="jb-list-01-title d-inline">
                                            <span
                                                class="mr-2 mb-2 d-inline-flex px-2 py-1 rounded theme-cl theme-bg-light">Photoshop</span>
                                            <span
                                                class="mr-2 mb-2 d-inline-flex px-2 py-1 rounded text-warning bg-light-warning">WordPress</span>
                                            <span
                                                class="mr-2 mb-2 d-inline-flex px-2 py-1 rounded text-danger bg-light-danger">Magento</span>
                                            <span class="mr-2 mb-2 d-inline-flex px-2 py-1 rounded text-light bg-info">+3
                                                More</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Single -->
                            <div class="job_grid d-block border rounded px-3 pt-3 pb-2">
                                <div class="jb-list01-flex d-flex align-items-start justify-content-start">
                                    <div class="jb-list01-thumb">
                                        <img src="https://via.placeholder.com/500x500" class="img-fluid circle"
                                            width="90" alt="" />
                                    </div>

                                    <div class="jb-list01 pl-3">
                                        <div class="jb-list-01-title">
                                            <h5 class="ft-medium mb-1"><a href="candidate-detail.html">Janet T.
                                                    Ybarra<img src="assets/img/verify.svg" class="ml-1" width="12"
                                                        alt=""></a></h5>
                                        </div>
                                        <div class="jb-list-01-info d-block mb-3">
                                            <span class="text-muted mr-2"><i
                                                    class="lni lni-map-marker mr-1"></i>Liverpool, UK</span>
                                            <span class="text-muted mr-2"><i class="lni lni-tag mr-1"></i>PHP
                                                Developer</span>
                                            <span class="text-muted mr-2"><i class="lni lni-briefcase mr-1"></i>Full
                                                Time</span>
                                            <span class="text-muted mr-2"><i class="lni lni-graduation mr-1"></i>4
                                                Year Exp.</span>
                                        </div>
                                        <div class="jb-list-01-title d-inline">
                                            <span
                                                class="mr-2 mb-2 d-inline-flex px-2 py-1 rounded theme-cl theme-bg-light">Photoshop</span>
                                            <span
                                                class="mr-2 mb-2 d-inline-flex px-2 py-1 rounded text-warning bg-light-warning">WordPress</span>
                                            <span
                                                class="mr-2 mb-2 d-inline-flex px-2 py-1 rounded text-danger bg-light-danger">Magento</span>
                                            <span class="mr-2 mb-2 d-inline-flex px-2 py-1 rounded text-light bg-info">+3
                                                More</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- row -->

                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Previous">
                                        <span class="fas fa-arrow-circle-right"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item active"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">...</a></li>
                                <li class="page-item"><a class="page-link" href="#">18</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <span class="fas fa-arrow-circle-right"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>
    <!-- ============================ Main Section End ================================== -->

    <!-- ======================= Newsletter Start ============================ -->
    <section class="space bg-cover" style="background:#03343b url(assets/img/landing-bg.png) no-repeat;">
        <div class="container py-5">

            <div class="row justify-content-center">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="sec_title position-relative text-center mb-5">
                        <h6 class="text-light mb-0">Subscribr Now</h6>
                        <h2 class="ft-bold text-light">Get All New Job Notification</h2>
                    </div>
                </div>
            </div>

            <div class="row align-items-center justify-content-center">
                <div class="col-xl-7 col-lg-10 col-md-12 col-sm-12 col-12">
                    <form class="bg-white rounded p-1">
                        <div class="row no-gutters">
                            <div class="col-xl-9 col-lg-9 col-md-8 col-sm-8 col-8">
                                <div class="form-group mb-0 position-relative">
                                    <input type="text" class="form-control lg left-ico"
                                        placeholder="Enter Your Email Address">
                                    <i class="bnc-ico lni lni-envelope"></i>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 col-4">
                                <div class="form-group mb-0 position-relative">
                                    <button class="btn full-width custom-height-lg theme-bg text-light fs-md"
                                        type="button">Subscribe</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </section>
    <!-- ======================= Newsletter Start ============================ -->
@endsection
