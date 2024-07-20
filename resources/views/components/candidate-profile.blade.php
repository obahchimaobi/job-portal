@extends('layouts.app')

@section('content')
    @if (session('success'))
        <script>
                const Toast = Swal.mixin({
                    toast: true,
                    position: "top-end",
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.onmouseenter = Swal.stopTimer;
                        toast.onmouseleave = Swal.resumeTimer;
                    }
                });
            Toast.fire({
                icon: "success",
                title: "{{ session('success') }}"
            });
        </script>
    @endif
    <!-- ============================================================== -->

    <!-- ======================= dashboard Detail ======================== -->
    <div class="dashboard-wrap bg-light">
        <a class="mobNavigation" data-toggle="collapse" href="#MobNav" role="button" aria-expanded="false"
            aria-controls="MobNav">
            <i class="fas fa-bars mr-2"></i>Dashboard Navigation
        </a>
        <div class="collapse" id="MobNav">
            <div class="dashboard-nav">
                <div class="dashboard-inner">
                    <ul data-submenu-title="Main Navigation">
                        <li><a href="{{ route('candidate.dashboard') }}"><i class="lni lni-dashboard mr-2"></i>Dashboard</a>
                        </li>
                        <li><a href="dashboard-add-resume.html"><i class="lni lni-add-files mr-2"></i>Create
                                Resume</a></li>
                        <li><a href="dashboard-applied-jobs.html"><i class="lni lni-briefcase mr-2"></i>Applied
                                jobs</a></li>
                        <li><a href="dashboard-alert-job.html"><i class="ti-bell mr-2"></i>Alert Jobs<span
                                    class="count-tag bg-warning">4</span></a></li>
                        <li><a href="dashboard-messages.html"><i class="lni lni-envelope mr-2"></i>Messages<span
                                    class="count-tag">4</span></a></li>
                    </ul>
                    <ul data-submenu-title="My Accounts">
                        <li class="active"><a href="dashboard-my-profile.html"><i class="lni lni-user mr-2"></i>My Profile
                            </a></li>
                        <li><a href="dashboard-change-password.html"><i class="lni lni-lock-alt mr-2"></i>Change
                                Password</a></li>
                        <li><a href="javascript:void(0);"><i class="lni lni-trash-can mr-2"></i>Delete Account</a>
                        </li>
                        <li><a href="{{ route('candidate.logout') }}"><i class="lni lni-power-switch mr-2"></i>Log Out</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="dashboard-content">
            <div class="dashboard-tlbar d-block mb-5">
                <div class="row">
                    <div class="colxl-12 col-lg-12 col-md-12">
                        <h1 class="ft-medium">My Profile</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item text-muted"><a href="#">Home</a></li>
                                <li class="breadcrumb-item text-muted"><a href="#">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="#" class="theme-cl">My Profile</a>
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>

            <div class="dashboard-widg-bar d-block">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12">
                        <div class="_dashboard_content bg-white rounded mb-4">
                            <div class="_dashboard_content_header br-bottom py-3 px-3">
                                <div class="_dashboard__header_flex">
                                    <h4 class="mb-0 ft-medium fs-md"><i class="fa fa-user mr-1 theme-cl fs-sm"></i>My
                                        Account</h4>
                                </div>
                            </div>

                            <div class="_dashboard_content_body py-3 px-3">
                                <form class="row" action="{{ route('update.candidate.info') }}" method="post"
                                    enctype="multipart/form-data">

                                    {{ csrf_field() }}
                                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                                        <div class="custom-file avater_uploads">
                                            <input type="file" class="custom-file-input" id="customFile" name="image">
                                            <label class="custom-file-label" for="customFile">

                                                @if ($info->image)
                                                @else
                                                    <i class="fa fa-user"></i>
                                                @endif
                                                <img src="{{ asset('storage/' . $info->image) }}" alt=""
                                                    style="height: 100%; width: auto; border-radius: 10px;">
                                            </label>


                                        </div>
                                    </div>



                                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12">
                                        <div class="row">
                                            <div class="col-xl-6 col-lg-6">
                                                <div class="form-group">
                                                    <label class="text-dark ft-medium">Full Name</label>
                                                    <input type="text" class="form-control rounded"
                                                        value="{{ $info->candidate_name }}" name="candidate_name">

                                                    @error('candidate_name')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6">
                                                <div class="form-group">
                                                    <label class="text-dark ft-medium">Job Title</label>
                                                    <input type="text" class="form-control rounded"
                                                        value="{{ $info->job_name ? $info->job_name : 'Job Name' }}"
                                                        name="job_name">

                                                    @error('job_name')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6">
                                                <div class="form-group">
                                                    <label class="text-dark ft-medium">Phone</label>
                                                    <input type="text" class="form-control rounded"
                                                        value="{{ $info->phone ? $info->phone : 'Phone' }}" name="phone">

                                                    @error('phone')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6">
                                                <div class="form-group">
                                                    <label class="text-dark ft-medium">Email</label>
                                                    <input type="email" class="form-control rounded"
                                                        value="{{ $info->candidate_email }}" name="candidate_email">

                                                    @error('candidate_email')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6">
                                                <div class="form-group">
                                                    <label class="text-dark ft-medium">Job Type</label>
                                                    <select class="custom-select rounded" name="job_type">
                                                        <option>Choose Job Type</option>
                                                        <option value="Full Time"
                                                            {{ $info->job_type == 'Full Time' ? 'selected' : '' }}>Full
                                                            Time
                                                        </option>
                                                        <option value="Part Time"
                                                            {{ $info->job_type == 'Part Time' ? 'selected' : '' }}>Part
                                                            Time
                                                        </option>
                                                        <option value="Freelance"
                                                            {{ $info->job_type == 'Freelance' ? 'selected' : '' }}>
                                                            Freelance
                                                        </option>

                                                        @error('job_type')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6">
                                                <div class="form-group">
                                                    <label class="text-dark ft-medium">Job Category</label>
                                                    <select class="custom-select rounded" name="job_category">
                                                        <option>Choose Categories</option>
                                                        <option value="IT & Software"
                                                            {{ $info->job_category == 'IT & Software' ? 'selected' : '' }}>
                                                            IT & Software</option>
                                                        <option value="Bank Services"
                                                            {{ $info->job_category == 'Bank Services' ? 'selected' : '' }}>
                                                            Bank Services</option>
                                                        <option value="Hospitals"
                                                            {{ $info->job_category == 'Hospitals' ? 'selected' : '' }}>
                                                            Hospitals</option>
                                                    </select>

                                                    @error('job_category')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6">
                                                <div class="form-group">
                                                    <label class="text-dark ft-medium">Experience</label>
                                                    <select class="custom-select rounded" name="experience">
                                                        <option>
                                                            {{ $info->experience ? $info->experience : 'Select Experience' }}
                                                        </option>
                                                        <option value="Beginner"
                                                            {{ $info->experience == 'Beginner' ? 'selected' : '' }}>
                                                            Beginner</option>
                                                        <option value="1 Year"
                                                            {{ $info->experience == '1 Year' ? 'selected' : '' }}>1 Year
                                                        </option>
                                                        <option value="2 Years"
                                                            {{ $info->experience == '2 Years' ? 'selected' : '' }}>2 Years
                                                        </option>
                                                        <option value="3 Years"
                                                            {{ $info->experience == '3 Years' ? 'selected' : '' }}>3 Years
                                                        </option>
                                                        <option value="4 Years"
                                                            {{ $info->experience == '4 Years' ? 'selected' : '' }}>4 Years
                                                        </option>
                                                        <option value="5 Years"
                                                            {{ $info->experience == '5 Years' ? 'selected' : '' }}>5 Years
                                                        </option>
                                                        <option value="6 Years"
                                                            {{ $info->experience == '6 Years' ? 'selected' : '' }}>6 Years
                                                        </option>
                                                        <option value="7 Years"
                                                            {{ $info->experience == '7 Years' ? 'selected' : '' }}>7 Years
                                                        </option>
                                                        <option value="8 Years"
                                                            {{ $info->experience == '8 Years' ? 'selected' : '' }}>8 Years
                                                        </option>
                                                        <option value="9 Years"
                                                            {{ $info->experience == '9 Years' ? 'selected' : '' }}>9 Years
                                                        </option>
                                                        <option value="10 Years"
                                                            {{ $info->experience == '10 Years' ? 'selected' : '' }}>10
                                                            Years</option>
                                                        <option value="More than 10 Years"
                                                            {{ $info->experience == 'More than 10 Years' ? 'selected' : '' }}>
                                                            More than 10 Years</option>
                                                    </select>

                                                    @error('experience')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6">
                                                <div class="form-group">
                                                    <label class="text-dark ft-medium">Education</label>
                                                    <input type="text" class="form-control rounded"
                                                        value="{{ $info->education ? $info->education : 'Education' }}"
                                                        name="education">

                                                    @error('education')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6">
                                                <div class="form-group">
                                                    <label class="text-dark ft-medium">Current Salary</label>
                                                    <select class="custom-select rounded" name="current_salary">
                                                        <option>
                                                            {{ $info->current_salary ? $info->current_salary : 'Select Salary' }}
                                                        </option>
                                                        <option value="10-20 k"
                                                            {{ $info->current_salary == '10-20 k' ? 'selected' : '' }}>
                                                            10-20 K</option>
                                                        <option value="20-30 K"
                                                            {{ $info->current_salary == '20-30 K' ? 'selected' : '' }}>
                                                            20-30 K</option>
                                                        <option value="30-40 K"
                                                            {{ $info->current_salary == '30-40 K' ? 'selected' : '' }}>
                                                            30-40 K</option>
                                                        <option value="40-50 K"
                                                            {{ $info->current_salary == '40-50 K' ? 'selected' : '' }}>
                                                            40-50 K</option>
                                                        <option value="50K+"
                                                            {{ $info->current_salary == '50K+' ? 'selected' : '' }}>50K+
                                                        </option>
                                                    </select>

                                                    @error('current_salary')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6">
                                                <div class="form-group">
                                                    <label class="text-dark ft-medium">Expected Salary</label>
                                                    <select class="custom-select rounded" name="expected_salary">
                                                        <option>
                                                            {{ $info->expected_salary ? $info->expected_salary : 'Select Salary' }}
                                                        </option>
                                                        <option value="10-20 k"
                                                            {{ $info->expected_salary == '10-20 k' ? 'selected' : '' }}>
                                                            10-20 K</option>
                                                        <option value="20-30 K"
                                                            {{ $info->expected_salary == '20-30 K' ? 'selected' : '' }}>
                                                            20-30 K</option>
                                                        <option value="30-40 K"
                                                            {{ $info->expected_salary == '30-40 K' ? 'selected' : '' }}>
                                                            30-40 K</option>
                                                        <option value="40-50 K"
                                                            {{ $info->expected_salary == '40-50 K' ? 'selected' : '' }}>
                                                            40-50 K</option>
                                                        <option value="50K+"
                                                            {{ $info->expected_salary == '50K+' ? 'selected' : '' }}>50K+
                                                        </option>
                                                    </select>

                                                    @error('expected_salary')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6">
                                                <div class="form-group">
                                                    <label class="text-dark ft-medium">Age</label>
                                                    <input type="text" class="form-control rounded"
                                                        value="{{ $info->age ? $info->age : 'e.x 20+' }}" name="age">

                                                    @error('age')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6">
                                                <div class="form-group">
                                                    <label class="text-dark ft-medium">Language</label>
                                                    <input type="text" class="form-control rounded"
                                                        value="{{ $info->language ? $info->language : 'e.x English, Hindi' }}"
                                                        name="language">

                                                    @error('language')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-xl-12 col-lg-12">
                                                <div class="form-group">
                                                    <label class="text-dark ft-medium">About Info</label>
                                                    <textarea class="form-control with-light" name="about">{{ $info->about ? $info->about : 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi' }}</textarea>
                                                </div>
                                            </div>

                                            <div class="col-xl-12 col-lg-12">
                                                <div class="form-group">
                                                    <button type="submit"
                                                        class="btn btn-md ft-medium text-light rounded theme-bg">Save
                                                        Changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="_dashboard_content bg-white rounded mb-4">
                            <div class="_dashboard_content_header br-bottom py-3 px-3">
                                <div class="_dashboard__header_flex">
                                    <h4 class="mb-0 ft-medium fs-md"><i class="ti-facebook mr-1 theme-cl fs-sm"></i>Social
                                        Accounts</h4>
                                </div>
                            </div>

                            <div class="_dashboard_content_body py-3 px-3">
                                <form class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label class="text-dark ft-medium">Facebook</label>
                                            <input type="text" class="form-control rounded"
                                                placeholder="{{ $info->facebook_link ? $info->facebook_link : 'https://www.facebook.com/' }}">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label class="text-dark ft-medium">Twitter</label>
                                            <input type="text" class="form-control rounded"
                                                placeholder="{{ $info->twitter_link ? $info->twitter_link : 'https://www.twitter.com/' }}">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label class="text-dark ft-medium">LinkedIn</label>
                                            <input type="text" class="form-control rounded"
                                                placeholder="{{ $info->linkedin_link ? $info->linkedin_link : 'https://www.linkedin.com/' }}">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label class="text-dark ft-medium">GitHub</label>
                                            <input type="text" class="form-control rounded"
                                                placeholder="{{ $info->github_link ? $info->github_link : 'https://www.github.com/' }}">
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12">
                                        <div class="form-group">
                                            <button type="submit"
                                                class="btn btn-md ft-medium text-light rounded theme-bg">Save
                                                Changes</button>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12">
                        <div class="_dashboard_content bg-white rounded mb-4">
                            <div class="_dashboard_content_header br-bottom py-3 px-3">
                                <div class="_dashboard__header_flex">
                                    <h4 class="mb-0 ft-medium fs-md"><i
                                            class="fas fa-lock mr-1 theme-cl fs-sm"></i>Contact Information</h4>
                                </div>
                            </div>

                            <div class="_dashboard_content_body py-3 px-3">
                                <form class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label class="text-dark ft-medium">Country</label>
                                            <input type="text" class="form-control rounded"
                                                placeholder="{{ $info->country ? $info->country : 'e.x Australia' }}"
                                                name="country">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label class="text-dark ft-medium">City</label>
                                            <input type="text" class="form-control rounded"
                                                placeholder="{{ $info->city ? $info->city : 'e.x Townville City' }}"
                                                name="city">
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label class="text-dark ft-medium">Full Address</label>
                                            <input type="password" class="form-control rounded"
                                                placeholder="{{ $info->full_address ? $info->full_address : '#10 Marke Juger, SBI Road' }}"
                                                name="full_address">
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12">
                                        <div class="form-group">
                                            <button type="submit"
                                                class="btn btn-md ft-medium text-light rounded theme-bg">Save
                                                Changes</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- footer -->
            <div class="row">
                <div class="col-md-12">
                    <div class="py-3">© 2022 Workplex. Designd By ThemezHub.</div>
                </div>
            </div>

        </div>

    </div>
    <!-- ======================= dashboard Detail End ======================== -->
@endsection
