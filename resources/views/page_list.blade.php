@extends('layouts.master')
@section('main_content')




<div class="about-1 cover-image sptb bg-background-color" 
        style="background: url('{{ asset('frontend/images/banner2.jpg') }}') center center; height:300px">
    <div class="header-text1 mb-0">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 col-lg-10 col-md-12 d-block mx-auto " style="margin-top:80px">
                    <div class="text-center text-white text-property">
                        <h1 class=""><span class="font-weight-bold">12,000+</span> Medical Facilities Available!</h1>
                    </div>
                    <div class="search-background bg-transparent">
                        <div class="form row no-gutters">
                            <div class="form-group col-xl-5 col-lg-5 col-md-12 mb-0 bg-white">
                                <input class="form-control input-lg br-md-0" id="text5" placeholder="Search Location" type="text" /> <span><i class="fa fa-crosshairs location-gps me-1"></i></span>
                            </div>
                            <div class="form-group col-xl-5 col-lg-5 col-md-12 select2-lg mb-0 bg-white">
                                <select class="form-control select2-show-search border-bottom-0 w-100 select2-hidden-accessible" data-placeholder="Select" data-select2-id="10" tabindex="-1" aria-hidden="true">
                                    <optgroup label="Categories" data-select2-id="18">
                                        <option data-select2-id="12">Find Doctor</option> <option value="1" data-select2-id="19">Cardiologist</option> <option value="2" data-select2-id="20">Gynecologist</option>
                                        <option value="3" data-select2-id="21">physiologist</option> <option value="4" data-select2-id="22">Neurologist</option> <option value="5" data-select2-id="23">Dentist</option>
                                        <option value="6" data-select2-id="24">Neurosurgeon</option>
                                    </optgroup>
                                </select>
                                <span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="25" style="width: 100%;">
                                    <span class="selection">
                                        <span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-deqz-container">
                                            <span class="select2-selection__rendered" id="select2-deqz-container" role="textbox" aria-readonly="true" title="Find Doctor">Find Doctor</span>
                                            <span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span>
                                        </span>
                                    </span>
                                    <span class="dropdown-wrapper" aria-hidden="true"></span>
                                </span>
                            </div>
                            <div class="col-xl-2 col-lg-2 col-md-12 mb-0"><a class="btn btn-lg btn-block btn-dark br-ts-md-0 br-bs-md-0" href="javascript:void(0);">Search Here</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /header-text -->
</div>


<div class="bg-white border-bottom">
    <div class="container">
        <div class="page-header">
            <h4 class="page-title">Page List</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
                <li class="breadcrumb-item active">Page List</li>
            </ol>
        </div>
    </div>
</div>



<section class="sptb">
    <div class="container">
        <div class="row">
            <!--Add lists-->
            <div class="col-xl-9 col-lg-8 col-md-12">
                <div class="mb-lg-0">
                    <div class="">
                        <div class="item2-gl">
                            <div class="mb-0">
                                <div class="">
                                    <div class="p-5 bg-white item2-gl-nav d-flex">
                                        <h6 class="mb-0 mt-2">Showing 1 to 10 of 30 entries</h6>
                                        <ul class="nav item2-gl-menu ms-auto" role="tablist">
                                            <li class="">
                                                <a href="#tab-11" class="active show" data-bs-toggle="tab" title="List style" aria-selected="true" role="tab"><i class="fa fa-list"></i></a>
                                            </li>
                                            <li>
                                                <a href="#tab-12" data-bs-toggle="tab" class="" title="Grid" aria-selected="false" tabindex="-1" role="tab"><i class="fa fa-th"></i></a>
                                            </li>
                                        </ul>
                                        <div class="d-flex select2-sm">
                                            <label class="me-2 mt-1 mb-sm-1">Sort By:</label>
                                            <select name="item" class="form-control select2 select2-hidden-accessible" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                                <option value="1" data-select2-id="3">Latest</option>
                                                <option value="2">Oldest</option>
                                                <option value="3">Price:Low-to-High</option>
                                                <option value="5">Price:Hight-to-Low</option>
                                            </select>
                                            <span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="2" style="width: 100%;">
                                                <span class="selection">
                                                    <span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-item-6u-container">
                                                        <span class="select2-selection__rendered" id="select2-item-6u-container" role="textbox" aria-readonly="true" title="Latest">Latest</span>
                                                        <span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span>
                                                    </span>
                                                </span>
                                                <span class="dropdown-wrapper" aria-hidden="true"></span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane active" id="tab-11" role="tabpanel">
                                    <div class="card overflow-hidden">
                                        <div class="d-md-flex">
                                            <div class="item-card9-img">
                                                <div class="item-card9-imgs">
                                                    <a href="hospital-details.html"></a>
                                                    <div class="power-ribbon power-ribbon-top-left text-warning">
                                                        <span class="bg-warning"><i class="fa fa-bolt"></i></span>
                                                    </div>
                                                    <img alt="img" class="cover-image" src="../assets/images/media/0-12.jpg" />
                                                </div>
                                                <div class="item-card9-icons">
                                                    <a href="javascript:void(0);" class="item-card9-icons1 item-icon-bg active" data-bs-toggle="tooltip" title="" data-bs-original-title="wishlist"><i class="fa fa fa-heart-o"></i></a>
                                                    <a href="javascript:void(0);" class="item-card9-icons1 bg-purple" data-bs-toggle="tooltip" title="" data-bs-original-title="Share"><i class="fa fa-share-alt"></i></a>
                                                </div>
                                                <div class="item-overly-trans">
                                                    <span class="badge bg-info">Hospital</span>
                                                    <div class="rating-stars d-flex">
                                                        <span class="text-white me-1">4.3</span> <input class="rating-value star" name="rating-stars-value" readonly="readonly" type="number" value="4" />
                                                        <div class="rating-stars-container">
                                                            <div class="rating-star sm is--active"><i class="fa fa-star"></i></div>
                                                            <div class="rating-star sm is--active"><i class="fa fa-star"></i></div>
                                                            <div class="rating-star sm is--active"><i class="fa fa-star"></i></div>
                                                            <div class="rating-star sm is--active"><i class="fa fa-star"></i></div>
                                                            <div class="rating-star sm"><i class="fa fa-star"></i></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card border-0 mb-0">
                                                <div class="card-body">
                                                    <div class="item-card9">
                                                        <a class="text-dark" href="hospital-details.html">
                                                            <h4 class="font-weight-bold mt-1 mb-2">Madlife Hospital..<i class="ion-checkmark-circled text-success fs-14 ms-1"></i></h4>
                                                        </a>
                                                        <div class="item-card9-desc mb-2 mt-1">
                                                            <span class="me-4 d-inline-block"><i class="fa fa-map-marker text-muted me-1"></i> Hyderabad</span>
                                                            <span class="me-4"><i class="fe fe-briefcase text-muted me-1"></i> 20 Specialities</span> <span class="me-4"><i class="fa fa-user-md text-muted me-1"></i> 30 Doctors</span>
                                                            <span class="me-4"><i class="fe fe-phone text-muted me-1"></i>+1-202-555-0108</span>
                                                        </div>
                                                        <p class="mb-0 fs-14 mt-1">
                                                            <span class=""><i class="fa fa-location-arrow text-muted me-1"></i></span> 195 Prince St.Windermere, FL 34786
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="card-footer p-0">
                                                    <div class="item-card9-footer btn-appointment">
                                                        <div class="btn-group w-100">
                                                            <a href="javascript:void(0);" class="btn btn-outline-light w-34 p-2 border-top-0 border-end-0 border-bottom-0"><i class="fe fe-eye me-1 d-inline-block"></i>View Profile</a>
                                                            <a href="javascript:void(0);" class="btn btn-outline-light w-33 p-2 border-top-0 border-end-0 border-bottom-0"><i class="fa fa-user-md me-1"></i>Doctorslist</a>
                                                            <a class="btn btn-outline-light w-34 p-2 border-top-0 border-end-0 border-bottom-0 call-btn">
                                                                <div class="call-btn-1"><i class="fe fe-phone me-1"></i> Call</div>
                                                                <div class="call-number">+65 847596 82</div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card overflow-hidden">
                                        <div class="d-md-flex">
                                            <div class="item-card9-img">
                                                <div class="item-card9-imgs"><a href="doctor-details.html"></a> <img alt="img" class="cover-image" src="../assets/images/media/0-33.jpg" /></div>
                                                <div class="item-card9-icons">
                                                    <a href="javascript:void(0);" class="item-card9-icons1 item-icon-bg" data-bs-toggle="tooltip" title="" data-bs-original-title="wishlist"><i class="fa fa fa-heart-o"></i></a>
                                                    <a href="javascript:void(0);" class="item-card9-icons1 bg-purple" data-bs-toggle="tooltip" title="" data-bs-original-title="Share"><i class="fa fa-share-alt"></i></a>
                                                </div>
                                                <div class="item-overly-trans">
                                                    <span class="badge bg-pink">Cardiologist</span>
                                                    <div class="rating-stars d-flex">
                                                        <span class="text-white me-1">3.3</span> <input class="rating-value star" name="rating-stars-value" readonly="readonly" type="number" value="3" />
                                                        <div class="rating-stars-container">
                                                            <div class="rating-star sm is--active"><i class="fa fa-star"></i></div>
                                                            <div class="rating-star sm is--active"><i class="fa fa-star"></i></div>
                                                            <div class="rating-star sm is--active"><i class="fa fa-star"></i></div>
                                                            <div class="rating-star sm"><i class="fa fa-star"></i></div>
                                                            <div class="rating-star sm"><i class="fa fa-star"></i></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card border-0 mb-0">
                                                <div class="card-body">
                                                    <div class="item-card9">
                                                        <a class="text-dark" href="doctor-details.html">
                                                            <h4 class="font-weight-bold mt-1 mb-1">Dr.K.Jones...<i class="ion-checkmark-circled text-success fs-14 ms-1"></i></h4>
                                                        </a>
                                                        <span class="text-muted fs-13 mt-0"><i class="fa fa-user-md text-muted me-2"></i>MBBS, Ph.D</span>
                                                        <div class="item-card9-desc mb-0 mt-2">
                                                            <span class="me-4 d-inline-block"><i class="fa fa-map-marker text-muted me-1"></i> Banglore</span>
                                                            <span class="me-4"><i class="fe fe-briefcase text-muted me-1"></i>5 Years Experience</span> <span class="me-4"><i class="fa fa-hospital-o text-muted me-1"></i>3 Hospitals</span>
                                                            <span class="me-4"><i class="fe fe-phone text-muted me-1"></i>+1-202-555-0108</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-footer p-0">
                                                    <div class="item-card9-footer btn-appointment">
                                                        <div class="btn-group w-100">
                                                            <a href="javascript:void(0);" class="btn btn-outline-light w-34 p-2 border-top-0 border-end-0 border-bottom-0"><i class="fe fe-help-circle me-1"></i>Ask a Doctor</a>
                                                            <a href="javascript:void(0);" class="btn btn-outline-light w-33 p-2 border-top-0 border-end-0 border-bottom-0"><i class="fe fe-eye me-1 d-inline-block"></i>View Profile</a>
                                                            <a href="javascript:void(0);" class="btn btn-outline-light w-34 p-2 border-top-0 border-end-0 border-bottom-0" data-bs-target="#exampleModal" data-bs-toggle="modal">
                                                                <i class="fe fe-phone me-1 d-inline-block"></i>Appointment
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card overflow-hidden">
                                        <div class="d-md-flex">
                                            <div class="item-card9-img">
                                                <div class="item-card9-imgs"><a href="pharmacy-details.html"></a> <img alt="img" class="cover-image" src="../assets/images/media/0-14.jpg" /></div>
                                                <div class="item-card9-icons">
                                                    <a href="javascript:void(0);" class="item-card9-icons1 item-icon-bg active" data-bs-toggle="tooltip" title="" data-bs-original-title="wishlist"><i class="fa fa fa-heart-o"></i></a>
                                                    <a href="javascript:void(0);" class="item-card9-icons1 bg-purple" data-bs-toggle="tooltip" title="" data-bs-original-title="Share"><i class="fa fa-share-alt"></i></a>
                                                </div>
                                                <div class="item-overly-trans">
                                                    <span class="badge bg-success">Pharmacy</span>
                                                    <div class="rating-stars d-flex">
                                                        <span class="text-white me-1">4.7</span> <input class="rating-value star" name="rating-stars-value" readonly="readonly" type="number" value="4" />
                                                        <div class="rating-stars-container">
                                                            <div class="rating-star sm is--active"><i class="fa fa-star"></i></div>
                                                            <div class="rating-star sm is--active"><i class="fa fa-star"></i></div>
                                                            <div class="rating-star sm is--active"><i class="fa fa-star"></i></div>
                                                            <div class="rating-star sm is--active"><i class="fa fa-star"></i></div>
                                                            <div class="rating-star sm"><i class="fa fa-star"></i></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card border-0 mb-0">
                                                <div class="card-body">
                                                    <div class="item-card9">
                                                        <a class="text-dark" href="pharmacy-details.html">
                                                            <h4 class="font-weight-bold mt-1 mb-2">Madico Pharmacy..<i class="ion-checkmark-circled text-success fs-14 ms-1"></i></h4>
                                                        </a>
                                                        <div class="item-card9-desc mb-2 mt-1">
                                                            <span class="me-4 d-inline-block"><i class="fa fa-map-marker text-muted me-1"></i> Hyderabad</span>
                                                            <span class="me-4"><i class="fe fe-clock text-muted me-1"></i> 9 Am - 5 Pm</span> <span class="me-4"><i class="fe fe-phone text-muted me-1"></i>+1-202-555-0108</span>
                                                        </div>
                                                        <p class="mb-0 fs-14 mt-1">
                                                            <span class=""><i class="fa fa-location-arrow text-muted me-1"></i></span>714 Bowman Street. North Miami Beach, FL 33160....
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="card-footer p-0">
                                                    <div class="item-card9-footer btn-appointment">
                                                        <div class="btn-group w-100">
                                                            <a href="javascript:void(0);" class="btn btn-outline-light w-50 p-2 border-top-0 border-end-0 border-bottom-0"><i class="fe fe-eye me-1 d-inline-block"></i>View Profile</a>
                                                            <a class="btn btn-outline-light w-50 p-2 border-top-0 border-end-0 border-bottom-0 call-btn">
                                                                <div class="call-btn-1"><i class="fe fe-phone me-1"></i> Call</div>
                                                                <div class="call-number">+65 847596 82</div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card overflow-hidden">
                                        <div class="d-md-flex">
                                            <div class="item-card9-img">
                                                <div class="item-card9-imgs"><a href="hospital-details.html"></a> <img alt="img" class="cover-image" src="../assets/images/media/0-6.jpg" /></div>
                                                <div class="item-card9-icons">
                                                    <a href="javascript:void(0);" class="item-card9-icons1 item-icon-bg" data-bs-toggle="tooltip" title="" data-bs-original-title="wishlist"><i class="fa fa fa-heart-o"></i></a>
                                                    <a href="javascript:void(0);" class="item-card9-icons1 bg-purple" data-bs-toggle="tooltip" title="" data-bs-original-title="Share"><i class="fa fa-share-alt"></i></a>
                                                </div>
                                                <div class="item-overly-trans">
                                                    <span class="badge bg-secondary">Clinic</span>
                                                    <div class="rating-stars d-flex">
                                                        <span class="text-white me-1">4.3</span> <input class="rating-value star" name="rating-stars-value" readonly="readonly" type="number" value="4" />
                                                        <div class="rating-stars-container">
                                                            <div class="rating-star sm is--active"><i class="fa fa-star"></i></div>
                                                            <div class="rating-star sm is--active"><i class="fa fa-star"></i></div>
                                                            <div class="rating-star sm is--active"><i class="fa fa-star"></i></div>
                                                            <div class="rating-star sm is--active"><i class="fa fa-star"></i></div>
                                                            <div class="rating-star sm"><i class="fa fa-star"></i></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card border-0 mb-0">
                                                <div class="card-body">
                                                    <div class="item-card9">
                                                        <a class="text-dark" href="hospital-details.html">
                                                            <h4 class="font-weight-bold mt-1 mb-2">SilverCraft Clinic..<i class="ion-checkmark-circled text-success fs-14 ms-1"></i></h4>
                                                        </a>
                                                        <div class="item-card9-desc mb-2 mt-1">
                                                            <span class="me-4 d-inline-block"><i class="fa fa-map-marker text-muted me-1"></i> Chennai</span> <span class="me-4"><i class="fe fe-clock text-muted me-1"></i> 9 Am - 5 Pm</span>
                                                            <span class="me-4"><i class="fe fe-phone text-muted me-1"></i> +1-202-555-0175</span>
                                                        </div>
                                                        <p class="mb-1 fs-14 mt-1">
                                                            <span class=""><i class="fa fa-location-arrow text-muted me-1"></i></span> 323 Fifth Ave. Canandaigua, NY 14424....
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="card-footer p-0">
                                                    <div class="item-card9-footer btn-appointment">
                                                        <div class="btn-group w-100">
                                                            <a href="javascript:void(0);" class="btn btn-outline-light w-50 p-2 border-top-0 border-end-0 border-bottom-0"><i class="fe fe-eye me-1 d-inline-block"></i>View Website</a>
                                                            <a href="javascript:void(0);" class="btn btn-outline-light w-50 p-2 border-top-0 border-end-0 border-bottom-0" data-bs-target="#exampleModal" data-bs-toggle="modal">
                                                                <i class="fa fa-user-md me-1"></i>Appointment
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card overflow-hidden">
                                        <div class="d-md-flex">
                                            <div class="item-card9-img">
                                                <div class="item-card9-imgs"><a href="bloodbank-details.html"></a> <img alt="img" class="cover-image" src="../assets/images/media/0-3.jpg" /></div>
                                                <div class="item-card9-icons">
                                                    <a href="javascript:void(0);" class="item-card9-icons1 item-icon-bg active" data-bs-toggle="tooltip" title="" data-bs-original-title="wishlist"><i class="fa fa fa-heart-o"></i></a>
                                                    <a href="javascript:void(0);" class="item-card9-icons1 bg-purple" data-bs-toggle="tooltip" title="" data-bs-original-title="Share"><i class="fa fa-share-alt"></i></a>
                                                </div>
                                                <div class="item-overly-trans">
                                                    <span class="badge bg-danger">Bloodbank</span>
                                                    <div class="rating-stars d-flex">
                                                        <span class="text-white me-1">5.0</span> <input class="rating-value star" name="rating-stars-value" readonly="readonly" type="number" value="5" />
                                                        <div class="rating-stars-container">
                                                            <div class="rating-star sm is--active"><i class="fa fa-star"></i></div>
                                                            <div class="rating-star sm is--active"><i class="fa fa-star"></i></div>
                                                            <div class="rating-star sm is--active"><i class="fa fa-star"></i></div>
                                                            <div class="rating-star sm is--active"><i class="fa fa-star"></i></div>
                                                            <div class="rating-star sm is--active"><i class="fa fa-star"></i></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card border-0 mb-0">
                                                <div class="card-body">
                                                    <div class="item-card9">
                                                        <a class="text-dark" href="bloodbank-details.html">
                                                            <h4 class="font-weight-bold mt-1 mb-2">Central Blood Bank..<i class="ion-checkmark-circled text-success fs-14 ms-1"></i></h4>
                                                        </a>
                                                        <div class="item-card9-desc mb-2 mt-1">
                                                            <span class="me-4 d-inline-block"><i class="fa fa-map-marker text-muted me-1"></i> Chennai</span> <span class="me-4"><i class="fe fe-clock text-muted me-1"></i> 9 Am - 5 Pm</span>
                                                            <span class="me-4"><i class="fe fe-phone text-muted me-1"></i> +1-202-555-0175</span>
                                                        </div>
                                                        <p class="mb-1 fs-14 mt-1">
                                                            <span class=""><i class="fa fa-location-arrow text-muted me-1"></i></span> 323 Fifth Ave. Canandaigua, NY 14424....
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="card-footer p-0">
                                                    <div class="item-card9-footer btn-appointment">
                                                        <div class="btn-group w-100">
                                                            <a href="javascript:void(0);" class="btn btn-outline-light w-50 p-2 border-top-0 border-end-0 border-bottom-0"><i class="fe fe-eye me-1 d-inline-block"></i>View Profile</a>
                                                            <a href="javascript:void(0);" class="btn btn-outline-light w-50 p-2 border-top-0 border-end-0 border-bottom-0" data-bs-target="#exampleModal" data-bs-toggle="modal">
                                                                <i class="fe fe-phone me-1 d-inline-block"></i>Appointment
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card overflow-hidden">
                                        <div class="d-md-flex">
                                            <div class="item-card9-img">
                                                <div class="item-card9-imgs"><a href="fitness-details.html"></a> <img alt="img" class="cover-image" src="../assets/images/media/0-11.jpg" /></div>
                                                <div class="item-card9-icons">
                                                    <a href="javascript:void(0);" class="item-card9-icons1 item-icon-bg" data-bs-toggle="tooltip" title="" data-bs-original-title="wishlist"><i class="fa fa fa-heart-o"></i></a>
                                                    <a href="javascript:void(0);" class="item-card9-icons1 bg-purple" data-bs-toggle="tooltip" title="" data-bs-original-title="Share"><i class="fa fa-share-alt"></i></a>
                                                </div>
                                                <div class="item-overly-trans">
                                                    <span class="badge bg-primary">FitnessCenter</span>
                                                    <div class="rating-stars d-flex">
                                                        <span class="text-white me-1">4.7</span> <input class="rating-value star" name="rating-stars-value" readonly="readonly" type="number" value="4" />
                                                        <div class="rating-stars-container">
                                                            <div class="rating-star sm is--active"><i class="fa fa-star"></i></div>
                                                            <div class="rating-star sm is--active"><i class="fa fa-star"></i></div>
                                                            <div class="rating-star sm is--active"><i class="fa fa-star"></i></div>
                                                            <div class="rating-star sm is--active"><i class="fa fa-star"></i></div>
                                                            <div class="rating-star sm"><i class="fa fa-star"></i></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card border-0 mb-0">
                                                <div class="card-body">
                                                    <div class="item-card9">
                                                        <a class="text-dark" href="fitness-details.html">
                                                            <h4 class="font-weight-bold mt-1 mb-2">Corenetic Gym...<i class="ion-checkmark-circled text-success fs-14 ms-1"></i></h4>
                                                        </a>
                                                        <div class="item-card9-desc mb-2 mt-1">
                                                            <span class="me-4 d-inline-block"><i class="fa fa-map-marker text-muted me-1"></i> Hyderabad</span>
                                                            <span class="me-4"><i class="fa fa fa-clock-o text-muted me-1"></i> 9:00 Am - 11:00 Am</span> <span class="me-4"><i class="fa fa-calendar-o text-muted me-1"></i> Mon- Fri </span>
                                                        </div>
                                                        <p class="mb-1 fs-14 mt-1">
                                                            <span class=""><i class="fa fa-location-arrow text-muted me-1"></i></span>14 Hartford St. Mundelein, IL 60060....
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="card-footer p-0">
                                                    <div class="item-card9-footer btn-appointment">
                                                        <div class="btn-group w-100">
                                                            <a href="javascript:void(0);" class="btn btn-outline-light w-34 p-2 border-top-0 border-end-0 border-bottom-0"><i class="fe fe-eye me-1 d-inline-block"></i>View Profile</a>
                                                            <a href="javascript:void(0);" class="btn btn-outline-light w-33 p-2 border-top-0 border-end-0 border-bottom-0"><i class="fa fa-user me-1"></i>Trainerslist</a>
                                                            <a class="btn btn-outline-light w-34 p-2 border-top-0 border-end-0 border-bottom-0 call-btn">
                                                                <div class="call-btn-1"><i class="fe fe-phone me-1"></i> Call</div>
                                                                <div class="call-number">+65 847596 82</div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab-12" role="tabpanel">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-12 col-xl-4">
                                            <div class="card overflow-hidden">
                                                <div class="item-card9-img">
                                                    <div class="item-card9-imgs">
                                                        <a href="hospital-details.html"></a>
                                                        <div class="power-ribbon power-ribbon-top-left text-warning">
                                                            <span class="bg-warning"><i class="fa fa-bolt"></i></span>
                                                        </div>
                                                        <img alt="img" class="cover-image" src="../assets/images/media/0-12.jpg" />
                                                    </div>
                                                    <div class="item-card9-icons">
                                                        <a href="javascript:void(0);" class="item-card9-icons1 item-icon-bg active" data-bs-toggle="tooltip" title="" data-bs-original-title="wishlist"><i class="fa fa fa-heart-o"></i></a>
                                                        <a href="javascript:void(0);" class="item-card9-icons1 bg-purple" data-bs-toggle="tooltip" title="" data-bs-original-title="Share"><i class="fa fa-share-alt"></i></a>
                                                    </div>
                                                    <div class="item-overly-trans">
                                                        <div class="rating-stars d-flex">
                                                            <span class="text-white me-1">4.3</span> <input class="rating-value star" name="rating-stars-value" readonly="readonly" type="number" value="4" />
                                                            <div class="rating-stars-container">
                                                                <div class="rating-star sm is--active"><i class="fa fa-star"></i></div>
                                                                <div class="rating-star sm is--active"><i class="fa fa-star"></i></div>
                                                                <div class="rating-star sm is--active"><i class="fa fa-star"></i></div>
                                                                <div class="rating-star sm is--active"><i class="fa fa-star"></i></div>
                                                                <div class="rating-star sm"><i class="fa fa-star"></i></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item-overly-trans"><span class="badge bg-info">Hospital</span></div>
                                                </div>
                                                <div class="card-body">
                                                    <div class="item-card9">
                                                        <a class="text-dark mt-2" href="hospital-details.html">
                                                            <h4 class="font-weight-bold mb-1">Madlife Hospital..<i class="ion-checkmark-circled text-success fs-14 ms-1"></i></h4>
                                                        </a>
                                                        <span class="text-muted fs-13 mt-0"><i class="fa fa-location-arrow text-muted me-2"></i> 195 Prince St.Windermere, USA</span>
                                                        <div class="mt-2 mb-0">
                                                            <ul class="item-card-features mb-0">
                                                                <li>
                                                                    <span class=""><i class="fa fa-map-marker me-1 text-muted"></i> Hyderabad</span>
                                                                </li>
                                                                <li>
                                                                    <span class=""><i class="fe fe-briefcase me-1 text-muted d-inline-block"></i>20 Specialities</span>
                                                                </li>
                                                                <li class="mb-0">
                                                                    <span class=""><i class="fa fa-user-md me-1 text-muted"></i> 30 Doctors</span>
                                                                </li>
                                                                <li>
                                                                    <span class=""><i class="fa fa-clock-o me-1 text-muted"></i>8 am - 6 pm</span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-footer p-0 btn-appointment">
                                                    <div class="btn-group w-100">
                                                        <a class="w-50 btn btn-outline-light p-2 border-top-0 border-bottom-0 border-start-0 border-end-0" href="javascript:void(0);">
                                                            <i class="fe fe-eye me-1 d-inline-block"></i> Visit Website
                                                        </a>
                                                        <a class="w-50 btn btn-outline-light p-2 border-top-0 border-bottom-0 border-end-0 call-btn">
                                                            <div class="call-btn-1"><i class="fe fe-phone me-1"></i> Call</div>
                                                            <div class="call-number">+65 847596 82</div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-xl-4">
                                            <div class="card overflow-hidden">
                                                <div class="item-card9-img">
                                                    <div class="item-card9-imgs"><a href="doctor-details.html"></a> <img alt="img" class="cover-image" src="../assets/images/media/0-33.jpg" /></div>
                                                    <div class="item-card9-icons">
                                                        <a href="javascript:void(0);" class="item-card9-icons1 item-icon-bg" data-bs-toggle="tooltip" title="" data-bs-original-title="wishlist"><i class="fa fa fa-heart-o"></i></a>
                                                        <a href="javascript:void(0);" class="item-card9-icons1 bg-purple" data-bs-toggle="tooltip" title="" data-bs-original-title="Share"><i class="fa fa-share-alt"></i></a>
                                                    </div>
                                                    <div class="item-overly-trans">
                                                        <div class="rating-stars d-flex">
                                                            <span class="text-white me-1">4.9</span> <input class="rating-value star" name="rating-stars-value" readonly="readonly" type="number" value="5" />
                                                            <div class="rating-stars-container">
                                                                <div class="rating-star sm is--active"><i class="fa fa-star"></i></div>
                                                                <div class="rating-star sm is--active"><i class="fa fa-star"></i></div>
                                                                <div class="rating-star sm is--active"><i class="fa fa-star"></i></div>
                                                                <div class="rating-star sm is--active"><i class="fa fa-star"></i></div>
                                                                <div class="rating-star sm is--active"><i class="fa fa-star"></i></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item-overly-trans"><span class="badge bg-pink">Cardiologist</span></div>
                                                </div>
                                                <div class="card-body">
                                                    <div class="item-card9">
                                                        <a class="text-dark" href="doctor-details.html">
                                                            <h4 class="font-weight-bold mb-1">Dr.K.Jones... <i class="ion-checkmark-circled text-success fs-14 ms-1"></i></h4>
                                                        </a>
                                                        <span class="text-muted fs-13 mt-0"><i class="fa fa-user-md text-muted me-2"></i>MBBS, Ph.D</span>
                                                        <div class="mb-0 mt-2">
                                                            <ul class="item-card-features mb-0">
                                                                <li>
                                                                    <span><i class="fa fa-clock-o me-1 text-muted"></i> 8am - 6pm</span>
                                                                </li>
                                                                <li>
                                                                    <span><i class="fa fa-calendar-o me-1 text-muted"></i>Mon - Sat</span>
                                                                </li>
                                                                <li class="mb-0">
                                                                    <span><i class="fa fa-map-marker me-1 text-muted"></i> Hyderabad</span>
                                                                </li>
                                                                <li>
                                                                    <span><i class="fa fa-user-md me-1 text-muted"></i>154 Doctors</span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-footer p-0 btn-appointment">
                                                    <div class="btn-group w-100">
                                                        <a class="w-50 btn btn-outline-light p-2 border-top-0 border-bottom-0 border-start-0 border-end-0" href="javascript:void(0);">
                                                            <i class="fe fe-eye me-1 d-inline-block"></i> Visit Website
                                                        </a>
                                                        <a class="w-50 btn btn-outline-light p-2 border-top-0 border-bottom-0 border-end-0" data-bs-target="#exampleModal" data-bs-toggle="modal">
                                                            <i class="fe fe-phone me-1"></i> Appointment
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-xl-4">
                                            <div class="card overflow-hidden">
                                                <div class="item-card9-img">
                                                    <div class="item-card9-imgs"><a href="pharmacy-details.html"></a> <img alt="img" class="cover-image" src="../assets/images/media/0-14.jpg" /></div>
                                                    <div class="item-card9-icons">
                                                        <a href="javascript:void(0);" class="item-card9-icons1 item-icon-bg active" data-bs-toggle="tooltip" title="" data-bs-original-title="wishlist"><i class="fa fa fa-heart-o"></i></a>
                                                        <a href="javascript:void(0);" class="item-card9-icons1 bg-purple" data-bs-toggle="tooltip" title="" data-bs-original-title="Share"><i class="fa fa-share-alt"></i></a>
                                                    </div>
                                                    <div class="item-overly-trans">
                                                        <div class="rating-stars d-flex">
                                                            <span class="text-white me-1">3.7</span> <input class="rating-value star" name="rating-stars-value" readonly="readonly" type="number" value="3" />
                                                            <div class="rating-stars-container">
                                                                <div class="rating-star sm is--active"><i class="fa fa-star"></i></div>
                                                                <div class="rating-star sm is--active"><i class="fa fa-star"></i></div>
                                                                <div class="rating-star sm is--active"><i class="fa fa-star"></i></div>
                                                                <div class="rating-star sm"><i class="fa fa-star"></i></div>
                                                                <div class="rating-star sm"><i class="fa fa-star"></i></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item-overly-trans"><span class="badge bg-success">Pharmacy</span></div>
                                                </div>
                                                <div class="card-body">
                                                    <div class="item-card9">
                                                        <a class="text-dark mt-2" href="pharmacy-details.html">
                                                            <h4 class="font-weight-bold mb-1">Madico Pharmacy..<i class="ion-checkmark-circled text-success fs-14 ms-1"></i></h4>
                                                        </a>
                                                        <span class="text-muted fs-13 mt-0"><i class="fa fa-location-arrow text-muted me-2"></i> 714 Bowman Street, USA</span>
                                                        <div class="mb-0 mt-2">
                                                            <ul class="item-card-features mb-0">
                                                                <li>
                                                                    <span><i class="fa fa-clock-o me-1 text-muted"></i> 8am - 6pm</span>
                                                                </li>
                                                                <li>
                                                                    <span><i class="fa fa-calendar-o me-1 text-muted"></i>Mon - Sat</span>
                                                                </li>
                                                                <li class="mb-0">
                                                                    <span><i class="fa fa-map-marker me-1 text-muted"></i> Hyderabad</span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-footer p-0 btn-appointment">
                                                    <div class="btn-group w-100">
                                                        <a class="w-50 btn btn-outline-light p-2 border-top-0 border-bottom-0 border-start-0 border-end-0" href="javascript:void(0);">
                                                            <i class="fe fe-eye me-1 d-inline-block"></i> Visit Website
                                                        </a>
                                                        <a class="w-50 btn btn-outline-light p-2 border-top-0 border-bottom-0 border-end-0 call-btn">
                                                            <div class="call-btn-1"><i class="fe fe-phone me-1"></i> Call</div>
                                                            <div class="call-number">+65 847596 82</div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-xl-4">
                                            <div class="card overflow-hidden">
                                                <div class="item-card9-img">
                                                    <div class="item-card9-imgs"><a href="hospital-details.html"></a> <img alt="img" class="cover-image" src="../assets/images/media/0-6.jpg" /></div>
                                                    <div class="item-card9-icons">
                                                        <a href="javascript:void(0);" class="item-card9-icons1 item-icon-bg" data-bs-toggle="tooltip" title="" data-bs-original-title="wishlist"><i class="fa fa fa-heart-o"></i></a>
                                                        <a href="javascript:void(0);" class="item-card9-icons1 bg-purple" data-bs-toggle="tooltip" title="" data-bs-original-title="Share"><i class="fa fa-share-alt"></i></a>
                                                    </div>
                                                    <div class="item-overly-trans">
                                                        <div class="rating-stars d-flex">
                                                            <span class="text-white me-1">5.0</span> <input class="rating-value star" name="rating-stars-value" readonly="readonly" type="number" value="5" />
                                                            <div class="rating-stars-container">
                                                                <div class="rating-star sm is--active"><i class="fa fa-star"></i></div>
                                                                <div class="rating-star sm is--active"><i class="fa fa-star"></i></div>
                                                                <div class="rating-star sm is--active"><i class="fa fa-star"></i></div>
                                                                <div class="rating-star sm is--active"><i class="fa fa-star"></i></div>
                                                                <div class="rating-star sm is--active"><i class="fa fa-star"></i></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item-overly-trans"><span class="badge bg-secondary">Clinic</span></div>
                                                </div>
                                                <div class="card-body">
                                                    <div class="item-card9">
                                                        <a class="text-dark mt-2" href="hospital-details.html">
                                                            <h4 class="font-weight-bold mb-0">SilverCraft Clinic..<i class="ion-checkmark-circled text-success fs-14 ms-1"></i></h4>
                                                        </a>
                                                        <span class="text-muted fs-13 mt-0"><i class="fa fa-location-arrow text-muted me-2"></i> 323 Fifth Ave. Canandaigua</span>
                                                        <div class="mb-0 mt-2">
                                                            <ul class="item-card-features mb-0">
                                                                <li>
                                                                    <span><i class="fa fa-clock-o me-1 text-muted"></i> 9am - 5pm</span>
                                                                </li>
                                                                <li>
                                                                    <span><i class="fa fa-calendar-o me-1 text-muted"></i>Mon - Sat</span>
                                                                </li>
                                                                <li class="mb-0">
                                                                    <span><i class="fa fa-map-marker me-1 text-muted"></i> Chennai</span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-footer p-0 btn-appointment">
                                                    <div class="btn-group w-100">
                                                        <a class="w-50 btn btn-outline-light p-2 border-top-0 border-bottom-0 border-start-0 border-end-0" href="javascript:void(0);">
                                                            <i class="fe fe-eye me-1 d-inline-block"></i> Visit Website
                                                        </a>
                                                        <a class="w-50 btn btn-outline-light p-2 border-top-0 border-bottom-0 border-end-0 call-btn">
                                                            <div class="call-btn-1"><i class="fe fe-phone me-1"></i> Call</div>
                                                            <div class="call-number">+65 847596 82</div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-xl-4">
                                            <div class="card overflow-hidden">
                                                <div class="item-card9-img">
                                                    <div class="item-card9-imgs"><a href="bloodbank-details.html"></a> <img alt="img" class="cover-image" src="../assets/images/media/0-3.jpg" /></div>
                                                    <div class="item-card9-icons">
                                                        <a href="javascript:void(0);" class="item-card9-icons1 item-icon-bg active" data-bs-toggle="tooltip" title="" data-bs-original-title="wishlist"><i class="fa fa fa-heart-o"></i></a>
                                                        <a href="javascript:void(0);" class="item-card9-icons1 bg-purple" data-bs-toggle="tooltip" title="" data-bs-original-title="Share"><i class="fa fa-share-alt"></i></a>
                                                    </div>
                                                    <div class="item-overly-trans">
                                                        <div class="rating-stars d-flex">
                                                            <span class="text-white me-1">4.9</span> <input class="rating-value star" name="rating-stars-value" readonly="readonly" type="number" value="5" />
                                                            <div class="rating-stars-container">
                                                                <div class="rating-star sm is--active"><i class="fa fa-star"></i></div>
                                                                <div class="rating-star sm is--active"><i class="fa fa-star"></i></div>
                                                                <div class="rating-star sm is--active"><i class="fa fa-star"></i></div>
                                                                <div class="rating-star sm is--active"><i class="fa fa-star"></i></div>
                                                                <div class="rating-star sm is--active"><i class="fa fa-star"></i></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item-overly-trans"><span class="badge bg-danger">Bloodbank</span></div>
                                                </div>
                                                <div class="card-body">
                                                    <div class="item-card9">
                                                        <a class="text-dark mt-2" href="bloodbank-details.html">
                                                            <h4 class="font-weight-bold mb-1">Central Bloodbank..<i class="ion-checkmark-circled text-success fs-14 ms-1"></i></h4>
                                                        </a>
                                                        <span class="text-muted fs-13 mt-0"><i class="fa fa-location-arrow text-muted me-2"></i> 714 Bowman Street</span>
                                                        <div class="mb-0 mt-2">
                                                            <ul class="item-card-features mb-0">
                                                                <li>
                                                                    <span><i class="fa fa-clock-o me-1 text-muted"></i> 8am - 9pm</span>
                                                                </li>
                                                                <li>
                                                                    <span><i class="fa fa-calendar-o me-1 text-muted"></i>Mon - Sat</span>
                                                                </li>
                                                                <li class="mb-0">
                                                                    <span><i class="fa fa-map-marker me-1 text-muted"></i> Hyderabad</span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-footer p-0 btn-appointment">
                                                    <div class="btn-group w-100">
                                                        <a class="w-50 btn btn-outline-light p-2 border-top-0 border-bottom-0 border-start-0 border-end-0" href="javascript:void(0);">
                                                            <i class="fe fe-eye me-1 d-inline-block"></i> Visit Website
                                                        </a>
                                                        <a class="w-50 btn btn-outline-light p-2 border-top-0 border-bottom-0 border-end-0 call-btn">
                                                            <div class="call-btn-1"><i class="fe fe-phone me-1"></i> Call</div>
                                                            <div class="call-number">+65 847596 82</div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-xl-4">
                                            <div class="card overflow-hidden">
                                                <div class="item-card9-img">
                                                    <div class="item-card9-imgs"><a href="fitness-details.html"></a> <img alt="img" class="cover-image" src="../assets/images/media/0-11.jpg" /></div>
                                                    <div class="item-card9-icons">
                                                        <a href="javascript:void(0);" class="item-card9-icons1 item-icon-bg" data-bs-toggle="tooltip" title="" data-bs-original-title="wishlist"><i class="fa fa fa-heart-o"></i></a>
                                                        <a href="javascript:void(0);" class="item-card9-icons1 bg-purple" data-bs-toggle="tooltip" title="" data-bs-original-title="Share"><i class="fa fa-share-alt"></i></a>
                                                    </div>
                                                    <div class="item-overly-trans">
                                                        <div class="rating-stars d-flex">
                                                            <span class="text-white me-1">4.0</span> <input class="rating-value star" name="rating-stars-value" readonly="readonly" type="number" value="4" />
                                                            <div class="rating-stars-container">
                                                                <div class="rating-star sm is--active"><i class="fa fa-star"></i></div>
                                                                <div class="rating-star sm is--active"><i class="fa fa-star"></i></div>
                                                                <div class="rating-star sm is--active"><i class="fa fa-star"></i></div>
                                                                <div class="rating-star sm is--active"><i class="fa fa-star"></i></div>
                                                                <div class="rating-star sm"><i class="fa fa-star"></i></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item-overly-trans"><span class="badge bg-primary">FitnessCenter</span></div>
                                                </div>
                                                <div class="card-body">
                                                    <div class="item-card9">
                                                        <a class="text-dark mt-2" href="fitness-details.html">
                                                            <h4 class="font-weight-bold mb-1">Corenetic Gym..<i class="ion-checkmark-circled text-success fs-14 ms-1"></i></h4>
                                                        </a>
                                                        <span class="text-muted fs-13 mt-0"><i class="fa fa-location-arrow text-muted me-2"></i> 14 Hartford St, USA</span>
                                                        <div class="mt-2 mb-0">
                                                            <ul class="item-card-features mb-0">
                                                                <li>
                                                                    <span class=""><i class="fa fa-map-marker me-1 text-muted"></i> Chennai</span>
                                                                </li>
                                                                <li>
                                                                    <span><i class="fa fa-calendar-o me-1 text-muted"></i>Mon - Sat</span>
                                                                </li>
                                                                <li class="mb-0">
                                                                    <span class=""><i class="fa fa-user me-1 text-muted"></i> 5 Trainers</span>
                                                                </li>
                                                                <li>
                                                                    <span class=""><i class="fa fa-clock-o me-1 text-muted"></i>9 am - 11 am</span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-footer p-0 btn-appointment">
                                                    <div class="btn-group w-100">
                                                        <a class="w-50 btn btn-outline-light p-2 border-top-0 border-bottom-0 border-start-0 border-end-0" href="javascript:void(0);">
                                                            <i class="fe fe-eye me-1 d-inline-block"></i> Visit Website
                                                        </a>
                                                        <a class="w-50 btn btn-outline-light p-2 border-top-0 border-bottom-0 border-end-0 call-btn">
                                                            <div class="call-btn-1"><i class="fe fe-phone me-1"></i> Call</div>
                                                            <div class="call-number">+65 847596 82</div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="center-block text-center">
                            <ul class="pagination mb-lg-0 mb-5">
                                <li class="page-item page-prev disabled"><a class="page-link" href="javascript:void(0);" tabindex="-1">Prev</a></li>
                                <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                                <li class="page-item page-next"><a class="page-link" href="javascript:void(0);">Next</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--/Add lists-->
            <!--Right Side Content-->
            <div class="col-xl-3 col-lg-4 col-md-12">
                <div class="card">
                    <div class="card-header"><h3 class="card-title">Categories</h3></div>
                    <div class="card-body">
                        <div class="closed" id="container" style="height: 130px; overflow: hidden;">
                            <div class="filter-product-checkboxs">
                                <label class="custom-control form-checkbox mb-3">
                                    <input class="custom-control-input" name="checkbox1" type="checkbox" value="option1" />
                                    <span class="custom-control-label">
                                        <span class="text-dark">Hospitals<span class="label label-light float-end">14</span></span>
                                    </span>
                                </label>
                                <label class="custom-control form-checkbox mb-3">
                                    <input class="custom-control-input" name="checkbox2" type="checkbox" value="option2" />
                                    <span class="custom-control-label">
                                        <span class="text-dark">Doctors<span class="label label-light float-end">22</span></span>
                                    </span>
                                </label>
                                <label class="custom-control form-checkbox mb-3">
                                    <input class="custom-control-input" name="checkbox3" type="checkbox" value="option3" />
                                    <span class="custom-control-label">
                                        <span class="text-dark">FitnessCenters<span class="label label-light float-end">78</span></span>
                                    </span>
                                </label>
                                <label class="custom-control form-checkbox mb-3">
                                    <input class="custom-control-input" name="checkbox4" type="checkbox" value="option3" />
                                    <span class="custom-control-label">
                                        <span class="text-dark">Pharmacies<span class="label label-light float-end">35</span></span>
                                    </span>
                                </label>
                                <label class="custom-control form-checkbox mb-3">
                                    <input class="custom-control-input" name="checkbox5" type="checkbox" value="option3" />
                                    <span class="custom-control-label">
                                        <span class="text-dark">Clinics<span class="label label-light float-end">23</span></span>
                                    </span>
                                </label>
                                <label class="custom-control form-checkbox mb-3">
                                    <input class="custom-control-input" name="checkbox6" type="checkbox" value="option3" />
                                    <span class="custom-control-label">
                                        <span class="text-dark">Bloodbanks<span class="label label-light float-end">14</span></span>
                                    </span>
                                </label>
                            </div>
                        </div>
                        <div class="showmore-button"><div class="showmore-button-inner more">Show more</div></div>
                    </div>
                    <div class="card-header border-top"><h3 class="card-title">Rating</h3></div>
                    <div class="card-body">
                        <select class="form-control nice nice-select" id="inputState" style="display: none;">
                            <option> 1 Star and higher </option>
                            <option> 2 Star and higher </option>
                            <option> 3 Star and higher </option>
                            <option> 4 Star and higher </option>
                            <option> 5 Star and higher </option>
                        </select>
                        <div class="nice-select form-control nice" tabindex="0">
                            <span class="current"> 1 Star and higher </span>
                            <ul class="list">
                                <li data-value="1 Star and higher" class="option selected">1 Star and higher</li>
                                <li data-value="2 Star and higher" class="option">2 Star and higher</li>
                                <li data-value="3 Star and higher" class="option">3 Star and higher</li>
                                <li data-value="4 Star and higher" class="option">4 Star and higher</li>
                                <li data-value="5 Star and higher" class="option">5 Star and higher</li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-header border-top"><h3 class="card-title">Fees Range</h3></div>
                    <div class="card-body">
                        <h6><label for="price">Fees Range:</label> <input id="price" type="text" /></h6>
                        <div id="mySlider" class="ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content">
                            <div class="ui-slider-range ui-corner-all ui-widget-header" style="left: 19.2113%; width: 30.3337%;"></div>
                            <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 19.2113%;"></span><span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 49.545%;"></span>
                        </div>
                    </div>
                    <div class="card-footer"><a class="btn btn-secondary btn-block" href="javascript:void(0);">Apply Filter</a></div>
                </div>
                <div class="card mb-0">
                    <div class="card-header"><h3 class="card-title">Shares</h3></div>
                    <div class="card-body product-filter-desc">
                        <div class="product-filter-icons text-center">
                            <a class="facebook-bg" href="javascript:void(0);"><i class="fa fa-facebook"></i></a> <a class="twitter-bg" href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
                            <a class="google-bg" href="javascript:void(0);"><i class="fa fa-google"></i></a> <a class="dribbble-bg" href="javascript:void(0);"><i class="fa fa-dribbble"></i></a>
                            <a class="pinterest-bg" href="javascript:void(0);"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!--/Right Side Content-->
        </div>
    </div>
</section>


@endsection