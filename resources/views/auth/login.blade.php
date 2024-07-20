@extends('layouts.app')

@section('content')
    <!-- ======================= Top Breadcrubms ======================== -->
    <div class="gray py-3">
        <div class="container">
            <div class="row">
                <div class="colxl-12 col-lg-12 col-md-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Pages</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Login</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ======================= Top Breadcrubms ======================== -->

    @if (session('error'))
        <script>
            Swal.fire({
                title: "{{ session('error') }}",
                // text: "Verify your email!",
                icon: "error"
            });
        </script>
    @endif

    <!-- ======================= Login Detail ======================== -->
    <section class="middle">
        <div class="container">
            <div class="row align-items-start justify-content-center">

                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <h5>Candidate Login</h5>
                    <form class="border p-3 rounded" action="{{ route('login.candidate') }}" method="post">

                        {{ csrf_field() }}
                        <div class="form-group">
                            <label>Candidate Email *</label>
                            <input type="email" class="form-control" placeholder="Candidate Email*" name="candidate_email">
                        </div>

                        <div class="form-group">
                            <label>Password *</label>
                            <input type="password" name="candidate_password" class="form-control" placeholder="Password*">
                        </div>

                        <div class="form-group">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="flex-1">
                                    <input id="dd" class="checkbox-custom" name="candidate_remember" type="checkbox">
                                    <label for="dd" class="checkbox-custom-label">Remember Me</label>
                                </div>
                                <div class="eltio_k2">
                                    <a href="#">Lost Your Password?</a>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit"
                                class="btn btn-md full-width theme-bg text-light fs-md ft-medium">Login</button>
                        </div>
                    </form>
                </div>

                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <h5>Employer Login</h5>
                    <form class="border p-3 rounded">

                        {{ csrf_field() }}
                        <div class="form-group">
                            <label>Employer Email *</label>
                            <input type="email" name="employer_email" class="form-control" placeholder="Employer Email*">
                        </div>

                        <div class="form-group">
                            <label>Password *</label>
                            <input type="password" name="employer_password" class="form-control" placeholder="Password*">
                        </div>

                        <div class="form-group">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="flex-1">
                                    <input id="dd" class="checkbox-custom" name="employer_remember" type="checkbox">
                                    <label for="dd" class="checkbox-custom-label">Remember Me</label>
                                </div>
                                <div class="eltio_k2">
                                    <a href="#">Lost Your Password?</a>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit"
                                class="btn btn-md full-width theme-bg text-light fs-md ft-medium">Login</button>
                        </div>
                    </form>
                </div>

                <div class="form-group text-center mb-0 mt-3">
                    <p class="extra">Not a memeber?<a href="{{ route('register.page') }}" class="text-dark">
                            Register</a></p>
                </div>
            </div>
        </div>
    </section>
    <!-- ======================= Login End ======================== -->

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
