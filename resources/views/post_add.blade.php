@extends('layouts.master')
@section('main_content')



<!-- 
<section>
        <div class="about-1 cover-image sptb bg-background-color" 
        style="background: url('{{ asset('frontend/images/banner2.jpg') }}') center center;">
        <div class="header-text mb-0">
            <div class="container">
                <div class="text-center text-white">
                    <h1>Ad Post</h1>
                    <ol class="breadcrumb text-center">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
                        <li class="breadcrumb-item active text-white" aria-current="page">Ad Post</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section> -->


<div class="bannerimg cover-image bg-background3" data-image-src="../assets/images/banners/banner2.jpg" style="background: url('../assets/images/banners/banner2.jpg') center center;">
    <div class="header-text mb-0">
        <div class="container">
            <div class="text-center text-white">
                <h1>Ad Post</h1>
                <ol class="breadcrumb text-center">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <!-- <li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li> -->
                    <li class="breadcrumb-item active text-white" aria-current="page">Ad Post</li>
                </ol>
            </div>
        </div>
    </div>
</div>



<section class="sptb">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12 col-md-12">
                <div class="card">

                    <form action="/save_doctor" method="post" >
                        @csrf
                        <div class="card-body custom-card">
                                <div class="post-content" id="doctors" style="display: block;">
                                    <div class="row">
                                    <div class="col-md-6">
                                            <div class="form-group ">
                                                <label for="" class="form-label text-dark">Hospital <span class="requarde">*</span></label>
                                                <select class="form-control ss" name="hospital_id" id="" required>
                                                <option value="">Select Hospital</option>
                                                    @php
                                                        $hospital = DB::table('hospitals')
                                                        ->where('type', 'Hospital')
                                                        ->get();
                                                        
                                                        // dd($zone);
                                                    @endphp
                                                    @foreach($hospital as $item) 
                                                        <option value="{{$item->id}}">{{$item->title}} </option>
                                                    @endforeach 
                                                </select>
                                            </div> 
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label text-dark">Dr. Name<span class="requarde">*</span></label>
                                                <input type="text" name="name" class="form-control" placeholder="Enter  Name" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label text-dark">Degree</label>
                                                <input type="text" name="degree" class="form-control" />
                                            </div>

                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group ">
                                                <label for="" class="form-label text-dark">Department <span class="requarde">*</span></label>
                                                <select class="form-control ss" name="dep_id" id="" required>
                                                <option value="">Select department</option>
                                                @php
                                                    $hospital_departments = DB::table('hospital_departments')
                                                    ->get();
                                                    // dd($zone);
                                                @endphp
                                                @foreach($hospital_departments as $item) 
                                                    <option value="{{$item->id}}">{{$item->name}} ({{$item->name_bn}})</option>
                                                @endforeach 
                                                </select>
                                            </div> 
                                        </div>

                                    


                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label text-dark">Designation</label>
                                                <input type="text" name="specialitis" class="form-control" />
                                            </div>

                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label text-dark">Specialties</label>
                                                <input type="text" name="specialities" class="form-control" />
                                            </div>

                                        </div>
                                        <div class="col-md-6">
                                            <label for=""  class="form-label text-dark">Gender</label>
                                            <select class="form-control ss" name="gender" id="">
                                                <option value="">Select Gender</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                                
                                            </select>
                                            

                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label text-dark">Phone Number</label>
                                                <input type="number" name="mobile" class="form-control" placeholder="Enter Number" />
                                            </div>

                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label text-dark">Set Timings</label>
                                                <select class="form-control form-select nice-select" name="set_time">
                                                    <option selected="selected"> 9Am - 5Pm </option>
                                                    <option>8Am - 4Pm</option>
                                                    <option>10Am - 6Pm</option>
                                                    <option>10Am - 7Pm</option>
                                                    <option>9Am - 10Pm</option>
                                                    <option>11Am - 9Pm</option>
                                                    <option>Other</option>
                                                </select>
                                                <!-- <div class="nice-select form-control form-select" tabindex="0">
                                                    <span class="current"> 9Am - 5Pm </span>
                                                    <ul class="list">
                                                        <li data-value="9Am - 5Pm" class="option selected">9Am - 5Pm</li>
                                                        <li data-value="8Am - 4Pm" class="option">8Am - 4Pm</li>
                                                        <li data-value="10Am - 6Pm" class="option">10Am - 6Pm</li>
                                                        <li data-value="10Am - 7Pm" class="option">10Am - 7Pm</li>
                                                        <li data-value="9Am - 10Pm" class="option">9Am - 10Pm</li>
                                                        <li data-value="11Am - 9Pm" class="option">11Am - 9Pm</li>
                                                        <li data-value="Other" class="option">Other</li>
                                                    </ul>
                                                </div> -->
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label text-dark">Set Days</label>
                                                <select class="form-control form-select nice-select" name="set_days">
                                                    <option selected="selected"> Mon - Fri </option>
                                                    <option> Mon- Sat </option>
                                                    <option> Mon- Sun </option>
                                                    <option> Mon, Tues, Wed</option>
                                                    <option>Thurs, Fri, Sat</option>
                                                    <option> Tues, Fri, Sun</option>
                                                    <option> Other </option>
                                                </select>
                                                <!-- <div class="nice-select form-control form-select" tabindex="0">
                                                    <span class="current"> Mon - Fri </span>
                                                    <ul class="list">
                                                        <li data-value="Mon - Fri" class="option selected">Mon - Fri</li>
                                                        <li data-value="Mon- Sat" class="option">Mon- Sat</li>
                                                        <li data-value="Mon- Sun" class="option">Mon- Sun</li>
                                                        <li data-value="Mon, Tues, Wed" class="option">Mon, Tues, Wed</li>
                                                        <li data-value="Thurs, Fri, Sat" class="option">Thurs, Fri, Sat</li>
                                                        <li data-value="Tues, Fri, Sun" class="option">Tues, Fri, Sun</li>
                                                        <li data-value="Other" class="option">Other</li>
                                                    </ul>
                                                </div> -->
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="form-group"><label class="form-label text-dark">Consultency Fee</label> <input type="text" name="fees" class="form-control" /></div>
                                                
                                            </div>
                                        </div>
                                        <!-- <div class="col-md-12">
                                            <div class="p-2 border mb-0 form-group">
                                                
                                                <label class="form-label text-dark">Upload Images</label> <input class="upload ff_fileupload_hidden" type="file" name="files" accept=".jpg, .png" multiple="" />
                                                <div class="ff_fileupload_wrap">
                                                    <div class="ff_fileupload_dropzone_wrap"><button class="ff_fileupload_dropzone" type="button" aria-label="Browse, drag-and-drop, or paste files to upload"></button></div>
                                                    <table class="ff_fileupload_uploads"></table>
                                                </div>
                                            </div>
                                        </div>  -->
                                        <div class="col-md-12">
                                            <div class="form-group col-6 mt-2">
                                                <label for="" class="form-label text-dark">Doctor Image: </label>
                                                <img id="uploadPreview" style="width: 200px; height: 150px; display:none" />
                                                <input id="uploadImage"  type="file" name="image" onchange="PreviewImage();" />
                                                {{-- <p>NB: Best image resolutions -> [banner/slider: 2000px*1300px] </p> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        
                        <!-- <div class="card-footer"><a href="javascript:void(0);" class="btn btn-primary">Submit Now</a></div> -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                    
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="card">
                    <div class="card-header"><h3 class="card-title">Terms And Conditions</h3></div>
                    <div class="card-body">
                        <ul class="list-unstyled widget-spec mb-0">
                            <li><i class="fa fa-check text-success" aria-hidden="true"></i>Money Not Refundable</li>
                            <li><i class="fa fa-check text-success" aria-hidden="true"></i>You can renew your Premium ad after experted.</li>
                            <li><i class="fa fa-check text-success" aria-hidden="true"></i>Premium ads are active for depend on package.</li>
                            <li class="ms-5 mb-0"><a href="tips.html"> View more..</a></li>
                        </ul>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header"><h3 class="card-title">Benefits Of Premium Ad</h3></div>
                    <div class="card-body pb-2">
                        <ul class="list-unstyled widget-spec vertical-scroll mb-0" style="overflow-y: hidden; height: 124px;">
                            <li style="" class="undefined"><i class="fa fa-check text-success" aria-hidden="true"></i>Premium Ads Active</li>
                            <li style="" class="undefined"><i class="fa fa-check text-success" aria-hidden="true"></i>Premium ads are displayed on top</li>
                            <li style="" class="undefined"><i class="fa fa-check text-success" aria-hidden="true"></i>Premium ads will be Show in Google results</li>
                            <li style="" class="undefined"><i class="fa fa-check text-success" aria-hidden="true"></i>Premium Ads Active</li>
                            <li style="display: none;" class="undefined"><i class="fa fa-check text-success" aria-hidden="true"></i>Premium ads are displayed on top</li>
                            <li style="display: none;" class="undefined"><i class="fa fa-check text-success" aria-hidden="true"></i>Premium ads will be Show in Google results</li>
                            <li style="display: none;" class="undefined"><i class="fa fa-check text-success" aria-hidden="true"></i>Premium Ads Active</li>
                            <li style="display: none;" class="undefined"><i class="fa fa-check text-success" aria-hidden="true"></i>Premium ads are displayed on top</li>
                            <li style="display: none;" class="undefined"><i class="fa fa-check text-success" aria-hidden="true"></i>Premium ads will be Show in Google results</li>
                            <li style="display: none;" class="undefined"><i class="fa fa-check text-success" aria-hidden="true"></i>Premium Ads Active</li>
                            <li style="display: none;" class="undefined"><i class="fa fa-check text-success" aria-hidden="true"></i>Premium ads are displayed on top</li>
                            <li style="display: none;" class="undefined"><i class="fa fa-check text-success" aria-hidden="true"></i>Premium ads will be Show in Google results</li>
                            <li style="display: none;" class="undefined"><i class="fa fa-check text-success" aria-hidden="true"></i>Premium Ads Active</li>
                            <li style="display: none;" class="undefined"><i class="fa fa-check text-success" aria-hidden="true"></i>Premium ads are displayed on top</li>
                            <li style="display: none;" class="undefined"><i class="fa fa-check text-success" aria-hidden="true"></i>Premium ads will be Show in Google results</li>
                        </ul>
                    </div>
                </div>
                <div class="card mb-0">
                    <div class="card-header"><h3 class="card-title">Safety Tips For Buyers</h3></div>
                    <div class="card-body">
                        <ul class="list-unstyled widget-spec mb-0">
                            <li><i class="fa fa-check text-success" aria-hidden="true"></i> Meet Seller at public Place</li>
                            <li><i class="fa fa-check text-success" aria-hidden="true"></i> Check item before you buy</li>
                            <li><i class="fa fa-check text-success" aria-hidden="true"></i> Pay only after collecting item</li>
                            <li class="ms-5 mb-0"><a href="tips.html"> View more..</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 d-none">
                <div class="card mb-xl-0">
                    <div class="card-header"><h3 class="card-title">Payments</h3></div>
                    <div class="card-body">
                        <div class="tab-content card-body border mb-0 b-0">
                            <div class="panel panel-primary">
                                <div class="tab-menu-heading border-0 ps-0 pe-0 pt-0">
                                    <div class="tabs-menu1">
                                        <!-- Tabs -->
                                        <ul class="nav panel-tabs" role="tablist">
                                            <li><a href="#tab5" class="active" data-bs-toggle="tab" aria-selected="true" role="tab">Credit/ Debit Card</a></li>
                                            <li><a href="#tab6" data-bs-toggle="tab" aria-selected="false" role="tab" class="" tabindex="-1">Pay-pal</a></li>
                                            <li><a href="#tab7" data-bs-toggle="tab" aria-selected="false" role="tab" class="" tabindex="-1">Net Banking</a></li>
                                            <li><a href="#tab8" data-bs-toggle="tab" aria-selected="false" role="tab" class="" tabindex="-1">Gift Voucher</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="panel-body tabs-menu-body ps-0 pe-0 border-0">
                                    <div class="tab-content">
                                        <div class="tab-pane active show" id="tab5" role="tabpanel">
                                            <div class="form-group"><label class="form-label">CardHolder Name</label> <input type="text" class="form-control" id="name1" placeholder="First Name" /></div>
                                            <div class="form-group">
                                                <label class="form-label">Card number</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="Search for..." />
                                                    <span class="input-group-append">
                                                        <button class="btn btn-info" type="button"><i class="fa fa-cc-visa"></i> &nbsp; <i class="fa fa-cc-amex"></i> &nbsp; <i class="fa fa-cc-mastercard"></i></button>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-8">
                                                    <div class="form-group mb-sm-0">
                                                        <label class="form-label">Expiration</label>
                                                        <div class="input-group">
                                                            <input type="number" class="form-control" placeholder="MM" name="expiremonth" /> <input type="number" class="form-control" placeholder="YY" name="expireyear" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group mb-0">
                                                        <label class="form-label">
                                                            CVV <i class="fa fa-question-circle" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Please Enter last 3 digits"></i>
                                                        </label>
                                                        <input type="number" class="form-control" required="" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="tab6" role="tabpanel">
                                            <h6 class="font-weight-semibold">Paypal is easiest way to pay online</h6>
                                            <p>
                                                <a href="javascript:void(0);" class="btn btn-info"><i class="fa fa-paypal"></i> Log in my Paypal</a>
                                            </p>
                                            <p class="mb-0">
                                                <strong>Note:</strong> Duis aute irure reprehenderit quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
                                            </p>
                                        </div>
                                        <div class="tab-pane" id="tab7" role="tabpanel">
                                            <div class="control-group form-group">
                                                <div class="form-group">
                                                    <label class="form-label text-dark">All Banks</label>
                                                    <select class="form-control select2 select2-hidden-accessible" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                                        <option value="0" data-select2-id="3">Select Bank</option>
                                                        <option value="1">Credit Agricole Group</option>
                                                        <option value="2">Bank of America</option>
                                                        <option value="3">Mitsubishi UFJ Financial Group</option>
                                                        <option value="4">BNP Paribas</option>
                                                        <option value="5">JPMorgan Chase &amp; Co.</option>
                                                        <option value="6">HSBC Holdings</option>
                                                        <option value="7">Bank of China</option>
                                                        <option value="8">Agricultural Bank of China</option>
                                                        <option value="9">ChinaPorsche Bank Corp.</option>
                                                        <option value="10">Industrial &amp; Commercial Bank of China, or ICBC</option>
                                                    </select>
                                                    <span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="2" style="width: 100%;">
                                                        <span class="selection">
                                                            <span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-kh7i-container">
                                                                <span class="select2-selection__rendered" id="select2-kh7i-container" role="textbox" aria-readonly="true" title="Select Bank">Select Bank</span>
                                                                <span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span>
                                                            </span>
                                                        </span>
                                                        <span class="dropdown-wrapper" aria-hidden="true"></span>
                                                    </span>
                                                </div>
                                            </div>
                                            <p><a href="javascript:void(0);" class="btn btn-info">Log in Bank</a></p>
                                        </div>
                                        <div class="tab-pane" id="tab8" role="tabpanel">
                                            <div class="form-group">
                                                <label class="form-label">Gift Voucher</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="Enter Your Gv Number" /> <span class="input-group-append"> <button class="btn btn-info" type="button">Apply</button> </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row clearfix">
                                <div class="col-lg-12">
                                    <div class="checkbox checkbox-info">
                                        <label class="custom-control mt-4 form-checkbox">
                                            <input type="checkbox" class="custom-control-input" /> <span class="custom-control-label text-dark ps-2">I agree with the Terms and Conditions.</span>
                                        </label>
                                    </div>
                                </div>
                                <ul class="mb-b-4">
                                    <li class="float-end"><a href="javascript:void(0);" class="btn btn-primary mb-0 me-2">Continue</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection