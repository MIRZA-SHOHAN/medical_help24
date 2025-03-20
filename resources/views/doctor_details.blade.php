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


<section class="sptb">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body item-user">
                        <div class="profile-pic mb-0">
                            <div class="d-md-flex">
                                <img src="{{ asset('frontend/images/dr_img.jpg') }}" class="w-150 h-150 br-2" alt="user" />
                                <div class="ms-4">
                                    <a href="userprofile.html" class="text-dark">
                                        <h4 class="mt-3 mb-1 font-weight-bold">{{$data->name}}<i class="fas fa-check-circle text-success fs-14 ms-1"></i></h4>
                                    </a>
                                    <span class="text-gray">{{$data->degree}}</span><br />
                                    <span class="text-gray">{{$data->specialities}}</span><br />
                                    <!-- <span class="text-muted">Member Since November 2010</span><br /> -->
                                    <!-- <div class="rating-stars d-inline-flex mb-2 me-3">
                                        <input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value" value="4" />
                                        <div class="rating-stars-container me-2">
                                            <div class="rating-star sm is--active"><i class="fa fa-star"></i></div>
                                            <div class="rating-star sm is--active"><i class="fa fa-star"></i></div>
                                            <div class="rating-star sm is--active"><i class="fa fa-star"></i></div>
                                            <div class="rating-star sm is--active"><i class="fa fa-star"></i></div>
                                            <div class="rating-star sm"><i class="fa fa-star"></i></div>
                                        </div>
                                        4.0
                                    </div> -->
                                    <!-- in -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="wideget-user-tab">
                            <div class="tab-menu-heading">
                                <div class="tabs-menu1">
                                    <ul class="nav" role="tablist">
                                        <li class=""><a href="#tab-5" class="" data-bs-toggle="tab" aria-selected="false" role="tab" tabindex="-1">Description</a></li>
                                        <li><a href="#tab-6" data-bs-toggle="tab" class="" aria-selected="false" role="tab" tabindex="-1">Education</a></li>
                                        <li><a href="#tab-7" data-bs-toggle="tab" class="active" aria-selected="true" role="tab">Consultation Fees</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="border-0">
                            <div class="tab-content">
                                <div class="tab-pane" id="tab-5" role="tabpanel">
                                    <div class="">
                                        <div class="mb-4">
                                        <p>{!! $data->description !!}</p>
                                        </div>
                                        <!-- <h4 class="mb-3 mt-4">Specifications</h4>
                                        <div class="row">
                                            <div class="col-xl-12 col-md-12">
                                                <ul class="list-unstyled widget-spec mb-0">
                                                    <li class="">
                                                        <a href="javascript:void(0);" class="text-dark"><i class="fa fa-caret-right me-2"></i>Maternal-fetal medicine</a>
                                                    </li>
                                                    <li class="">
                                                        <a href="javascript:void(0);" class="text-dark"><i class="fa fa-caret-right me-2"></i>Female pelvic medicine and reconstructive surgery</a>
                                                    </li>
                                                    <li class="">
                                                        <a href="javascript:void(0);" class="text-dark"><i class="fa fa-caret-right me-2"></i>Reproductive endocrinology and infertility</a>
                                                    </li>
                                                    <li class="">
                                                        <a href="javascript:void(0);" class="text-dark"><i class="fa fa-caret-right me-2"></i>Menopausal</a>
                                                    </li>
                                                    <li class="">
                                                        <a href="javascript:void(0);" class="text-dark"><i class="fa fa-caret-right me-2"></i>Laparoscopic surgery</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div> -->
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab-6" role="tabpanel">
                                    <div class="mb-4">
                                        <p>
                                            At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atcorrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non
                                            provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.
                                        </p>
                                        <p>
                                            On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoraliz the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the
                                            pain and trouble thena bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain.
                                        </p>
                                    </div>
                                    <h4 class="mb-2 mt-4">Curriculum</h4>
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12">
                                            <ul class="list-unstyled widget-spec mb-0">
                                                <li class="">
                                                    <a href="javascript:void(0);" class="text-dark"><i class="fa fa fa-graduation-cap me-2"></i>Pre Medical College - M.D(Obstetrics &amp; gynecology)</a>
                                                </li>
                                                <li class="">
                                                    <a href="javascript:void(0);" class="text-dark"><i class="fa fa-graduation-cap me-2"></i>Wish Medical College - M.S(Obstetrics &amp; gynecology)</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane active show" id="tab-7" role="tabpanel">
                                    <div class="list-id">
                                        <div class="row">
                                            <div class="col-xl-12 col-md-12">
                                                <div class="table-responsive">
                                                    <table class="table table-bordered border-top mb-0">
                                                        <thead>
                                                            <tr>
                                                                <th>Service Visit</th>
                                                                <th>Price</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Maternal-fetal medicine</td>
                                                                <td>$15</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Reproductive endocrinology and infertility</td>
                                                                <td>$18</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Female pelvic medicine and reconstructive surgery</td>
                                                                <td>$18</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Menopausal</td>
                                                                <td>$21</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Laparoscopic surgery</td>
                                                                <td>$17</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Pediatric and adolescent gynecology</td>
                                                                <td>$15</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="pt-4 pb-4 ps-5 pe-5 border-top border-top">
                        <div class="list-id">
                            <div class="row">
                                <div class="col">
                                    <a class="mb-0">PublisherID : <span class="mb-0 font-weight-bold">#8256358 </span> </a>
                                </div>
                                <div class="col col-auto">Posted By <a class="mb-0 font-weight-bold">Individual</a> / 21st Dec 2019</div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="btn-list">
                            <a href="javascript:void(0);" class="btn btn-success icons"><i class="icon icon-note me-1"></i> Book A Visit</a>
                            <a href="javascript:void(0);" class="btn btn-danger icons" data-bs-toggle="modal" data-bs-target="#report"><i class="icon icon-exclamation me-1"></i> Report Abuse</a>
                            <a href="javascript:void(0);" class="btn btn-info icons"><i class="icon icon-share me-1"></i> Share Ad</a> <a href="javascript:void(0);" class="btn btn-primary icons"><i class="icon icon-heart me-1"></i> 678</a>
                            <a href="javascript:void(0);" class="btn btn-secondary icons"><i class="icon icon-printer me-1"></i> Print</a>
                        </div>
                    </div> -->
                </div>
                <!--Comments-->
                <div class="card d-none">
                    <div class="card-header"><h3 class="card-title">Rating And Reviews</h3></div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-4">
                                    <p class="mb-2">
                                        <span class="fs-14 ms-2 d-inline-block"><i class="fa fa-star text-yellow me-2"></i>5</span>
                                    </p>
                                    <div class="progress progress-md mb-4 h-4"><div class="progress-bar bg-success w-100">9,232</div></div>
                                </div>
                                <div class="mb-4">
                                    <p class="mb-2">
                                        <span class="fs-14 ms-2 d-inline-block"><i class="fa fa-star text-yellow me-2"></i>4</span>
                                    </p>
                                    <div class="progress progress-md mb-4 h-4"><div class="progress-bar bg-info w-80">8,125</div></div>
                                </div>
                                <div class="mb-4">
                                    <p class="mb-2">
                                        <span class="fs-14 ms-2 d-inline-block"><i class="fa fa-star text-yellow me-2"></i> 3</span>
                                    </p>
                                    <div class="progress progress-md mb-4 h-4"><div class="progress-bar bg-primary w-60">6,263</div></div>
                                </div>
                                <div class="mb-4">
                                    <p class="mb-2">
                                        <span class="fs-14 ms-2 d-inline-block"><i class="fa fa-star text-yellow me-2"></i> 2</span>
                                    </p>
                                    <div class="progress progress-md mb-4 h-4"><div class="progress-bar bg-secondary w-30">3,463</div></div>
                                </div>
                                <div class="mb-5">
                                    <p class="mb-2">
                                        <span class="fs-14 ms-2 d-inline-block"><i class="fa fa-star text-yellow me-2"></i> 1</span>
                                    </p>
                                    <div class="progress progress-md mb-4 h-4"><div class="progress-bar bg-orange w-20">1,456</div></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="media mt-0 p-5">
                            <div class="d-flex me-3">
                                <a href="javascript:void(0);"><img class="media-object brround" alt="64x64" src="../assets/images/users/male/1.jpg" /> </a>
                            </div>
                            <div class="media-body">
                                <h5 class="mt-0 mb-1 font-weight-semibold">
                                    Joanne Scott <span class="fs-14 ms-0" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="verified" data-bs-original-title="verified"><i class="fa fa-check-circle-o text-success"></i></span>
                                    <span class="fs-14 ms-2 d-inline-block"> 4.5 <i class="fa fa-star text-yellow"></i></span>
                                </h5>
                                <small class="text-muted"><i class="fa fa-calendar"></i> Dec 21st <i class="ms-3 fa fa-clock-o"></i> 13.00 <i class="ms-3 fa fa-map-marker"></i> Brezil</small>
                                <p class="font-13 mb-2 mt-2">
                                    Ut enim ad minim veniam, quis Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et nostrud
                                    exercitation ullamco laboris commodo consequat.
                                </p>
                                <a href="javascript:void(0);" class="me-2"><span class="badge bg-primary">Helpful</span></a> <a href="" class="me-2" data-bs-toggle="modal" data-bs-target="#Comment"><span>Comment</span></a>
                                <a href="" class="me-2" data-bs-toggle="modal" data-bs-target="#report"><span>Report</span></a>
                                <div class="media mt-5">
                                    <div class="d-flex me-3">
                                        <a href="javascript:void(0);"> <img class="media-object brround" alt="64x64" src="../assets/images/users/female/2.jpg" /> </a>
                                    </div>
                                    <div class="media-body">
                                        <h5 class="mt-0 mb-1 font-weight-semibold">
                                            Rose Slater
                                            <span class="fs-14 ms-0" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="verified" data-bs-original-title="verified"><i class="fa fa-check-circle-o text-success"></i></span>
                                        </h5>
                                        <small class="text-muted"><i class="fa fa-calendar"></i> Dec 22st <i class="ms-3 fa fa-clock-o"></i> 6.00 <i class="ms-3 fa fa-map-marker"></i> Brezil</small>
                                        <p class="font-13 mb-2 mt-2">
                                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris commodo Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi
                                            consequatur consequat.
                                        </p>
                                        <a href="" data-bs-toggle="modal" data-bs-target="#Comment"><span class="badge bg-default">Comment</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="media p-5 border-top mt-0">
                            <div class="d-flex me-3">
                                <a href="javascript:void(0);"> <img class="media-object brround" alt="64x64" src="../assets/images/users/male/3.jpg" /> </a>
                            </div>
                            <div class="media-body">
                                <h5 class="mt-0 mb-1 font-weight-semibold">
                                    Edward <span class="fs-14 ms-0" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="verified" data-bs-original-title="verified"><i class="fa fa-check-circle-o text-success"></i></span>
                                    <span class="fs-14 ms-2 d-inline-block"> 4 <i class="fa fa-star text-yellow"></i></span>
                                </h5>
                                <small class="text-muted"><i class="fa fa-calendar"></i> Dec 21st <i class="ms-3 fa fa-clock-o"></i> 16.35 <i class="ms-3 fa fa-map-marker"></i> UK</small>
                                <p class="font-13 mb-2 mt-2">
                                    Ut enim ad minim veniam, quis Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et nostrud
                                    exercitation ullamco laboris commodo consequat.
                                </p>
                                <a href="javascript:void(0);" class="me-2"><span class="badge bg-primary">Helpful</span></a> <a href="" class="me-2" data-bs-toggle="modal" data-bs-target="#Comment"><span>Comment</span></a>
                                <a href="" class="me-2" data-bs-toggle="modal" data-bs-target="#report"><span>Report</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/Comments-->
                <div class="card mb-lg-0 d-none">
                    <div class="card-header"><h3 class="card-title">Leave a reply</h3></div>
                    <div class="card-body">
                        <div>
                            <div class="form-group"><input type="text" class="form-control" id="name1" placeholder="Your Name" /></div>
                            <div class="form-group"><input type="email" class="form-control" id="email" placeholder="Email Address" /></div>
                            <div class="form-group"><textarea class="form-control" name="example-textarea-input" rows="6" placeholder="Comment"></textarea></div>
                            <a href="javascript:void(0);" class="btn btn-primary">Send Reply</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">

                <div class="card">
                <div class="card-header"><h3 class="card-title">Book an Appointemnt</h3></div>
                        <form action="/save_appointment" method="post">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label class="form-label">Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Enter Your Name" />
                            </div>
                            <div class="form-group">
                                <label class="form-label">Age</label>
                                <input type="text" name="age" class="form-control" placeholder="Enter your age" />
                            </div>
                            <div class="form-group">
                                <label class="form-label">Email</label> 
                                <input type="email" name="email" class="form-control" placeholder="Enter your Email" />
                            </div>
                            <div class="form-group">
                                <label class="form-label">Phone Number</label> 
                                <input type="number" name="mobile" class="form-control" placeholder="Enter your Phone Number" />
                            </div>
                            <div class="form-group">
                                <label class="form-label"> Appointemnt Date</label> 
                                <input type="date" name="date" class="form-control fc-datepicker hasDatepicker" placeholder="Appointment Date" type="text" id="dp1742287988037" />
                            </div>
                            <div class="form-group">
                                <label class="form-label"> Address</label> 
                                <input type="text" name="address" class="form-control fc-datepicker hasDatepicker" placeholder="Addresss"  />
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                    

                </div>
            </div>
        </div>
    </div>
</section>

@endsection