@extends('layouts.app')

@section('content')
    <!-- ======================= Searchbar Banner ======================== -->
    <div class="py-3 theme-bg searchingBar">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-xl-7 col-lg-9 col-md-9 col-sm-12 col-12">
                    <form class="bg-white rounded p-1 border">
                        <div class="row no-gutters">
                            <div class="col-xl-6 col-lg-5 col-md-5 col-sm-12 col-12">
                                <div class="form-group mb-0 position-relative">
                                    <input type="text" class="form-control sm left-ico"
                                        placeholder="Job Title, Keyword or Company" />
                                    <i class="bnc-ico lni lni-search-alt"></i>
                                </div>
                            </div>
                            <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 col-12">
                                <div class="form-group mb-0 position-relative">
                                    <input type="text" class="form-control sm left-ico"
                                        placeholder="Location or Zip Code" />
                                    <i class="bnc-ico lni lni-target"></i>
                                </div>
                            </div>
                            <div class="col-xl-1 col-lg-2 col-md-2 col-sm-12 col-12">
                                <div class="form-group mb-0 position-relative">
                                    <button class="btn full-width custom-height sm rounded bg-dark text-white fs-md"
                                        type="button">Go</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                    <div class="d-block position-relative text-right">
                        <a href="#" onclick="openSearch()" class="mlb-btn btn ft-medium rounded text-dark bg-light"><i
                                class="ti-bell mr-1"></i>Job Alert</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- ======================= Searchbar Banner ======================== -->

    <!-- ======================= All Product List ======================== -->
    <section class="bg-light middle">
        <div class="container">

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
                                    <a href="job-search-v2.html" class="simple-buttonmr-1"><i
                                            class="ti-layout-grid2"></i></a>
                                    <a href="job-list-v2.html" class="simple-button active theme-cl "><i
                                            class="ti-view-list"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- row -->
            <div class="row align-items-center">

                <!-- Single -->
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="jbr-wrap text-left border rounded">
                        <div
                            class="cats-box mlb-res rounded bg-white d-flex align-items-center justify-content-between px-3 py-3">
                            <div class="cats-box rounded bg-white d-flex align-items-center">
                                <div class="text-center"><img src="https://via.placeholder.com/120x120" class="img-fluid"
                                        width="55" alt=""></div>
                                <div class="cats-box-caption px-2">
                                    <h4 class="fs-md mb-0 ft-medium">Fresher UI/UX Designer (3 Year Exp.)</h4>
                                    <div class="d-block mb-2 position-relative">
                                        <span class="text-muted medium"><i class="lni lni-map-marker mr-1"></i>Liverpool,
                                            London</span>
                                        <span class="muted medium ml-2 theme-cl"><i class="lni lni-briefcase mr-1"></i>Full
                                            Time</span>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center mlb-last"><a href="job-detail.html"
                                    class="btn gray ft-medium apply-btn fs-sm rounded">Apply Job<i
                                        class="lni lni-arrow-right-circle ml-1"></i></a></div>
                        </div>
                    </div>
                </div>

                <!-- Single -->
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="jbr-wrap text-left border rounded">
                        <div
                            class="cats-box mlb-res rounded bg-white d-flex align-items-center justify-content-between px-3 py-3">
                            <div class="cats-box rounded bg-white d-flex align-items-center">
                                <div class="text-center"><img src="https://via.placeholder.com/120x120" class="img-fluid"
                                        width="55" alt=""></div>
                                <div class="cats-box-caption px-2">
                                    <h4 class="fs-md mb-0 ft-medium">Fresher UI/UX Designer (3 Year Exp.)</h4>
                                    <div class="d-block mb-2 position-relative">
                                        <span class="text-muted medium"><i class="lni lni-map-marker mr-1"></i>Liverpool,
                                            London</span>
                                        <span class="muted medium ml-2 text-purple"><i
                                                class="lni lni-briefcase mr-1"></i>Contract</span>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center mlb-last"><a href="job-detail.html"
                                    class="btn gray ft-medium apply-btn fs-sm rounded">Apply Job<i
                                        class="lni lni-arrow-right-circle ml-1"></i></a></div>
                        </div>
                    </div>
                </div>

                <!-- Single -->
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="jbr-wrap text-left border rounded">
                        <div
                            class="cats-box mlb-res rounded bg-white d-flex align-items-center justify-content-between px-3 py-3">
                            <div class="cats-box rounded bg-white d-flex align-items-center">
                                <div class="text-center"><img src="https://via.placeholder.com/120x120" class="img-fluid"
                                        width="55" alt=""></div>
                                <div class="cats-box-caption px-2">
                                    <h4 class="fs-md mb-0 ft-medium">Fresher UI/UX Designer (3 Year Exp.)</h4>
                                    <div class="d-block mb-2 position-relative">
                                        <span class="text-muted medium"><i class="lni lni-map-marker mr-1"></i>Liverpool,
                                            London</span>
                                        <span class="muted medium ml-2 text-warning"><i
                                                class="lni lni-briefcase mr-1"></i>Part Time</span>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center mlb-last"><a href="job-detail.html"
                                    class="btn gray ft-medium apply-btn fs-sm rounded">Apply Job<i
                                        class="lni lni-arrow-right-circle ml-1"></i></a></div>
                        </div>
                    </div>
                </div>

                <!-- Single -->
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="jbr-wrap text-left border rounded">
                        <div
                            class="cats-box mlb-res rounded bg-white d-flex align-items-center justify-content-between px-3 py-3">
                            <div class="cats-box rounded bg-white d-flex align-items-center">
                                <div class="text-center"><img src="https://via.placeholder.com/120x120" class="img-fluid"
                                        width="55" alt=""></div>
                                <div class="cats-box-caption px-2">
                                    <h4 class="fs-md mb-0 ft-medium">Fresher UI/UX Designer (3 Year Exp.)</h4>
                                    <div class="d-block mb-2 position-relative">
                                        <span class="text-muted medium"><i class="lni lni-map-marker mr-1"></i>Liverpool,
                                            London</span>
                                        <span class="muted medium ml-2 text-danger"><i
                                                class="lni lni-briefcase mr-1"></i>Internship</span>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center mlb"><a href="job-detail.html"
                                    class="btn gray ft-medium apply-btn fs-sm rounded">Apply Job<i
                                        class="lni lni-arrow-right-circle ml-1"></i></a></div>
                        </div>
                    </div>
                </div>

                <!-- Single -->
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="jbr-wrap text-left border rounded">
                        <div
                            class="cats-box mlb-res rounded bg-white d-flex align-items-center justify-content-between px-3 py-3">
                            <div class="cats-box rounded bg-white d-flex align-items-center">
                                <div class="text-center"><img src="https://via.placeholder.com/120x120" class="img-fluid"
                                        width="55" alt=""></div>
                                <div class="cats-box-caption px-2">
                                    <h4 class="fs-md mb-0 ft-medium">Fresher UI/UX Designer (3 Year Exp.)</h4>
                                    <div class="d-block mb-2 position-relative">
                                        <span class="text-muted medium"><i class="lni lni-map-marker mr-1"></i>Liverpool,
                                            London</span>
                                        <span class="muted medium ml-2 theme-cl"><i
                                                class="lni lni-briefcase mr-1"></i>Full Time</span>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center mlb-last"><a href="job-detail.html"
                                    class="btn gray ft-medium apply-btn fs-sm rounded">Apply Job<i
                                        class="lni lni-arrow-right-circle ml-1"></i></a></div>
                        </div>
                    </div>
                </div>

                <!-- Single -->
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="jbr-wrap text-left border rounded">
                        <div
                            class="cats-box mlb-res rounded bg-white d-flex align-items-center justify-content-between px-3 py-3">
                            <div class="cats-box rounded bg-white d-flex align-items-center">
                                <div class="text-center"><img src="https://via.placeholder.com/120x120" class="img-fluid"
                                        width="55" alt=""></div>
                                <div class="cats-box-caption px-2">
                                    <h4 class="fs-md mb-0 ft-medium">Fresher UI/UX Designer (3 Year Exp.)</h4>
                                    <div class="d-block mb-2 position-relative">
                                        <span class="text-muted medium"><i class="lni lni-map-marker mr-1"></i>Liverpool,
                                            London</span>
                                        <span class="muted medium ml-2 text-purple"><i
                                                class="lni lni-briefcase mr-1"></i>Contract</span>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center mlb-last"><a href="job-detail.html"
                                    class="btn gray ft-medium apply-btn fs-sm rounded">Apply Job<i
                                        class="lni lni-arrow-right-circle ml-1"></i></a></div>
                        </div>
                    </div>
                </div>

                <!-- Single -->
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="jbr-wrap text-left border rounded">
                        <div
                            class="cats-box mlb-res rounded bg-white d-flex align-items-center justify-content-between px-3 py-3">
                            <div class="cats-box rounded bg-white d-flex align-items-center">
                                <div class="text-center"><img src="https://via.placeholder.com/120x120" class="img-fluid"
                                        width="55" alt=""></div>
                                <div class="cats-box-caption px-2">
                                    <h4 class="fs-md mb-0 ft-medium">Fresher UI/UX Designer (3 Year Exp.)</h4>
                                    <div class="d-block mb-2 position-relative">
                                        <span class="text-muted medium"><i class="lni lni-map-marker mr-1"></i>Liverpool,
                                            London</span>
                                        <span class="muted medium ml-2 text-danger"><i
                                                class="lni lni-briefcase mr-1"></i>Internship</span>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center mlb-last"><a href="job-detail.html"
                                    class="btn gray ft-medium apply-btn fs-sm rounded">Apply Job<i
                                        class="lni lni-arrow-right-circle ml-1"></i></a></div>
                        </div>
                    </div>
                </div>

                <!-- Single -->
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="jbr-wrap text-left border rounded">
                        <div
                            class="cats-box mlb-res rounded bg-white d-flex align-items-center justify-content-between px-3 py-3">
                            <div class="cats-box rounded bg-white d-flex align-items-center">
                                <div class="text-center"><img src="https://via.placeholder.com/120x120" class="img-fluid"
                                        width="55" alt=""></div>
                                <div class="cats-box-caption px-2">
                                    <h4 class="fs-md mb-0 ft-medium">Fresher UI/UX Designer (3 Year Exp.)</h4>
                                    <div class="d-block mb-2 position-relative">
                                        <span class="text-muted medium"><i class="lni lni-map-marker mr-1"></i>Liverpool,
                                            London</span>
                                        <span class="muted medium ml-2 text-warning"><i
                                                class="lni lni-briefcase mr-1"></i>Part Time</span>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center mlb-last"><a href="job-detail.html"
                                    class="btn gray ft-medium apply-btn fs-sm rounded">Apply Job<i
                                        class="lni lni-arrow-right-circle ml-1"></i></a></div>
                        </div>
                    </div>
                </div>

                <!-- Single -->
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="jbr-wrap text-left border rounded">
                        <div
                            class="cats-box mlb-res rounded bg-white d-flex align-items-center justify-content-between px-3 py-3">
                            <div class="cats-box rounded bg-white d-flex align-items-center">
                                <div class="text-center"><img src="https://via.placeholder.com/120x120" class="img-fluid"
                                        width="55" alt=""></div>
                                <div class="cats-box-caption px-2">
                                    <h4 class="fs-md mb-0 ft-medium">Fresher UI/UX Designer (3 Year Exp.)</h4>
                                    <div class="d-block mb-2 position-relative">
                                        <span class="text-muted medium"><i class="lni lni-map-marker mr-1"></i>Liverpool,
                                            London</span>
                                        <span class="muted medium ml-2 text-warning"><i
                                                class="lni lni-briefcase mr-1"></i>Part Time</span>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center mlb-last"><a href="job-detail.html"
                                    class="btn gray ft-medium apply-btn fs-sm rounded">Apply Job<i
                                        class="lni lni-arrow-right-circle ml-1"></i></a></div>
                        </div>
                    </div>
                </div>

                <!-- Single -->
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="jbr-wrap text-left border rounded">
                        <div
                            class="cats-box mlb-res rounded bg-white d-flex align-items-center justify-content-between px-3 py-3">
                            <div class="cats-box rounded bg-white d-flex align-items-center">
                                <div class="text-center"><img src="https://via.placeholder.com/120x120" class="img-fluid"
                                        width="55" alt=""></div>
                                <div class="cats-box-caption px-2">
                                    <h4 class="fs-md mb-0 ft-medium">Fresher UI/UX Designer (3 Year Exp.)</h4>
                                    <div class="d-block mb-2 position-relative">
                                        <span class="text-muted medium"><i class="lni lni-map-marker mr-1"></i>Liverpool,
                                            London</span>
                                        <span class="muted medium ml-2 text-warning"><i
                                                class="lni lni-briefcase mr-1"></i>Part Time</span>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center mlb-last"><a href="job-detail.html"
                                    class="btn gray ft-medium apply-btn fs-sm rounded">Apply Job<i
                                        class="lni lni-arrow-right-circle ml-1"></i></a></div>
                        </div>
                    </div>
                </div>

                <!-- Single -->
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="jbr-wrap text-left border rounded">
                        <div
                            class="cats-box mlb-res rounded bg-white d-flex align-items-center justify-content-between px-3 py-3">
                            <div class="cats-box rounded bg-white d-flex align-items-center">
                                <div class="text-center"><img src="https://via.placeholder.com/120x120" class="img-fluid"
                                        width="55" alt=""></div>
                                <div class="cats-box-caption px-2">
                                    <h4 class="fs-md mb-0 ft-medium">Fresher UI/UX Designer (3 Year Exp.)</h4>
                                    <div class="d-block mb-2 position-relative">
                                        <span class="text-muted medium"><i class="lni lni-map-marker mr-1"></i>Liverpool,
                                            London</span>
                                        <span class="muted medium ml-2 text-warning"><i
                                                class="lni lni-briefcase mr-1"></i>Part Time</span>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center mlb-last"><a href="job-detail.html"
                                    class="btn gray ft-medium apply-btn fs-sm rounded">Apply Job<i
                                        class="lni lni-arrow-right-circle ml-1"></i></a></div>
                        </div>
                    </div>
                </div>

                <!-- Single -->
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="jbr-wrap text-left border rounded">
                        <div
                            class="cats-box mlb-res rounded bg-white d-flex align-items-center justify-content-between px-3 py-3">
                            <div class="cats-box rounded bg-white d-flex align-items-center">
                                <div class="text-center"><img src="https://via.placeholder.com/120x120" class="img-fluid"
                                        width="55" alt=""></div>
                                <div class="cats-box-caption px-2">
                                    <h4 class="fs-md mb-0 ft-medium">Fresher UI/UX Designer (3 Year Exp.)</h4>
                                    <div class="d-block mb-2 position-relative">
                                        <span class="text-muted medium"><i class="lni lni-map-marker mr-1"></i>Liverpool,
                                            London</span>
                                        <span class="muted medium ml-2 text-warning"><i
                                                class="lni lni-briefcase mr-1"></i>Part Time</span>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center mlb-last"><a href="job-detail.html"
                                    class="btn gray ft-medium apply-btn fs-sm rounded">Apply Job<i
                                        class="lni lni-arrow-right-circle ml-1"></i></a></div>
                        </div>
                    </div>
                </div>

                <!-- Single -->
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="jbr-wrap text-left border rounded">
                        <div
                            class="cats-box mlb-res rounded bg-white d-flex align-items-center justify-content-between px-3 py-3">
                            <div class="cats-box rounded bg-white d-flex align-items-center">
                                <div class="text-center"><img src="https://via.placeholder.com/120x120" class="img-fluid"
                                        width="55" alt=""></div>
                                <div class="cats-box-caption px-2">
                                    <h4 class="fs-md mb-0 ft-medium">Fresher UI/UX Designer (3 Year Exp.)</h4>
                                    <div class="d-block mb-2 position-relative">
                                        <span class="text-muted medium"><i class="lni lni-map-marker mr-1"></i>Liverpool,
                                            London</span>
                                        <span class="muted medium ml-2 text-warning"><i
                                                class="lni lni-briefcase mr-1"></i>Part Time</span>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center mlb-last"><a href="job-detail.html"
                                    class="btn gray ft-medium apply-btn fs-sm rounded">Apply Job<i
                                        class="lni lni-arrow-right-circle ml-1"></i></a></div>
                        </div>
                    </div>
                </div>

                <!-- Single -->
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="jbr-wrap text-left border rounded">
                        <div class="cats-box rounded bg-white d-flex align-items-center justify-content-between px-3 py-3">
                            <div class="cats-box mlb-res rounded bg-white d-flex align-items-center">
                                <div class="text-center"><img src="https://via.placeholder.com/120x120" class="img-fluid"
                                        width="55" alt=""></div>
                                <div class="cats-box-caption px-2">
                                    <h4 class="fs-md mb-0 ft-medium">Fresher UI/UX Designer (3 Year Exp.)</h4>
                                    <div class="d-block mb-2 position-relative">
                                        <span class="text-muted medium"><i class="lni lni-map-marker mr-1"></i>Liverpool,
                                            London</span>
                                        <span class="muted medium ml-2 text-warning"><i
                                                class="lni lni-briefcase mr-1"></i>Part Time</span>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center mlb-last"><a href="job-detail.html"
                                    class="btn gray ft-medium apply-btn fs-sm rounded">Apply Job<i
                                        class="lni lni-arrow-right-circle ml-1"></i></a></div>
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
    </section>
    <!-- ======================= All Product List ======================== -->

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
