<!-- ============================ Footer Start ================================== -->
<footer class="dark-footer skin-dark-footer style-2">
    <div class="footer-middle">
        <div class="container">
            <div class="row">

                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                    <div class="footer_widget">
                        <img src="{{ url('assets/img/logo-light.png') }}" class="img-footer small mb-2" alt="" />

                        <div class="address mt-2">
                            3298 Grant Street Longview, New Texox<br>United Kingdom 75601
                        </div>
                        <div class="address mt-3">
                            1-202-555-0106<br>support@workplex.com
                        </div>
                        <div class="address mt-2">
                            <ul class="list-inline">
                                <li class="list-inline-item"><a href="{{ url('#') }}" class="theme-cl"><i
                                            class="lni lni-facebook-filled"></i></a></li>
                                <li class="list-inline-item"><a href="{{ url('#') }}" class="theme-cl"><i
                                            class="lni lni-twitter-filled"></i></a></li>
                                <li class="list-inline-item"><a href="{{ url('#') }}" class="theme-cl"><i
                                            class="lni lni-youtube"></i></a></li>
                                <li class="list-inline-item"><a href="{{ url('#') }}" class="theme-cl"><i
                                            class="lni lni-instagram-filled"></i></a></li>
                                <li class="list-inline-item"><a href="{{ url('#') }}" class="theme-cl"><i
                                            class="lni lni-linkedin-original"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
                    <div class="footer_widget">
                        <h4 class="widget_title">For Employers</h4>
                        <ul class="footer-menu">
                            <li><a href="{{ url('#') }}">Explore Candidates</a></li>
                            <li><a href="{{ url('#') }}">Job Pricing</a></li>
                            <li><a href="{{ url('#') }}">Submit Job</a></li>
                            <li><a href="{{ url('#') }}">Shortlisted</a></li>
                            <li><a href="{{ url('#') }}">Dashboard</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
                    <div class="footer_widget">
                        <h4 class="widget_title">For Candidates</h4>
                        <ul class="footer-menu">
                            <li><a href="{{ url('#') }}">Explore All Jobs</a></li>
                            <li><a href="{{ url('#') }}">Browse Categories</a></li>
                            <li><a href="{{ url('#') }}">Saved Jobs</a></li>
                            <li><a href="{{ url('#') }}">Dashboard</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
                    <div class="footer_widget">
                        <h4 class="widget_title">About Company</h4>
                        <ul class="footer-menu">
                            <li><a href="{{ url('#') }}">Who We'r?</a></li>
                            <li><a href="{{ url('#') }}">Our Mission</a></li>
                            <li><a href="{{ url('#') }}">Our team</a></li>
                            <li><a href="{{ url('#') }}">Packages</a></li>
                            <li><a href="{{ url('#') }}">Dashboard</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
                    <div class="footer_widget">
                        <h4 class="widget_title">Helpful Topics</h4>
                        <ul class="footer-menu">
                            <li><a href="{{ url('#') }}">Site Map</a></li>
                            <li><a href="{{ url('#') }}">Security</a></li>
                            <li><a href="{{ url('#') }}">Contact</a></li>
                            <li><a href="{{ url('#') }}">FAQ's Page</a></li>
                            <li><a href="{{ url('#') }}">Privacy</a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="footer-bottom br-top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 col-md-12 text-center">
                    <p class="mb-0">© 2022 Workplex. Designd By <a
                            href="{{ url('https://themezhub.com') }}">ThemezHub</a>.</p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- ============================ Footer End ================================== -->

<!-- Log In Modal -->
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="loginmodal"
    aria-hidden="true">
    <div class="modal-dialog modal-xl login-pop-form" role="document">
        <div class="modal-content" id="loginmodal">
            <div class="modal-headers">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span class="ti-close"></span>
                </button>
            </div>

            <div class="modal-body p-5">
                <div class="text-center mb-4">
                    <h2 class="m-0 ft-regular">Login</h2>
                </div>

                <form>
                    <div class="form-group">
                        <label>User Name</label>
                        <input type="text" class="form-control" placeholder="Username*">
                    </div>

                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" placeholder="Password*">
                    </div>

                    <div class="form-group">
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="flex-1">
                                <input id="dd" class="checkbox-custom" name="dd"
                                    type="checkbox">
                                <label for="dd" class="checkbox-custom-label">Remember Me</label>
                            </div>
                            <div class="eltio_k2">
                                <a href="{{ url('#') }}" class="theme-cl">Lost Your Password?</a>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <button type="submit"
                            class="btn btn-md full-width theme-bg text-light fs-md ft-medium">Login</button>
                    </div>

                    <div class="form-group text-center mb-0">
                        <p class="extra">Not a member?<a href="{{ route('register.page') }}" class="text-dark">
                                Register</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End Modal -->

<a id="back2Top" class="top-scroll" title="Back to top" href="{{ url('#') }}"><i class="ti-arrow-up"></i></a>