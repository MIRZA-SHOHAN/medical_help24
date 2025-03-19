@extends('layouts.master')
@section('main_content')


        <!--Section-->
        <section>
                <div class="banner-2 cover-image sptb-2 sptb-tab bg-background2 banner-section" data-image-src="https://www.spruko.com/demo/medz/Medz/assets/images/banners/banner1.jpg') }}" style="background: url('https://www.spruko.com/demo/medz/Medz/assets/images/banners/banner1.jpg') center center;">
                    <div class="header-text mb-0">
                        <div class="container">
                            <div class="text-center text-white">
                                <h1 class="mb-1">মেডিকেল হেল্প 24 এ আপনাকে স্বাগতম!</h1>
                                <p>এখন মেডিকেল সহায়তা হাতের মুঠোয়! আমাদের উন্নত সার্চ টেকনোলজি ব্যবহার করে কাছের হাসপাতাল, ডাক্তার এবং জরুরি পরিষেবাগুলো দ্রুত খুঁজে নিন। আপনার স্বাস্থ্য সংক্রান্ত যেকোনো সমস্যার জন্য আমাদের স্মার্ট প্ল্যাটফর্মই আপনার নির্ভরযোগ্য সঙ্গী।</p>
                            </div>
                            <div class="row">
                                <div class="col-xl-10 col-lg-12 col-md-12 d-block mx-auto">
                                    <div class="item-search-tabs">
                                        <div class="item-search-menu">
                                            <ul class="nav" role="tablist">
                                                <li class=""><a class="active" data-bs-toggle="tab" href="#tab1" aria-selected="true" role="tab">Hospitals</a></li>
                                                <li><a data-bs-toggle="tab" href="#tab2" aria-selected="false" tabindex="-1" role="tab">Doctors</a></li>
                                                <li><a data-bs-toggle="tab" href="#tab3" aria-selected="false" tabindex="-1" role="tab">FitnesCenters</a></li>
                                                
                                                <li><a data-bs-toggle="tab" href="#tab5" aria-selected="false" tabindex="-1" role="tab">Clinics</a></li>
                                                <li><a data-bs-toggle="tab" href="#tab6" aria-selected="false" tabindex="-1" role="tab">Blood Banks</a></li>
                                            </ul>
                                        </div>
                                        <div class="tab-content index-search-select">
                                            <div class="tab-pane active" id="tab1" role="tabpanel">
                                                <div class="search-background">
                                                    <div class="form row no-gutters">
                                                        <div class="form-group col-xl-4 col-lg-4 col-md-12 mb-0 location">
                                                            <input class="form-control border" placeholder="Search Location" type="text" /> <span><i class="fa fa-crosshairs location-gps me-1"></i></span>
                                                        </div>
                                                        <div class="form-group col-xl-2 col-lg-2 col-md-12 mb-0">
                                                            <select class="form-control select2-show-search border-bottom-0 w-100 select2-hidden-accessible" data-placeholder="Select" data-select2-id="4" tabindex="-1" aria-hidden="true">
                                                                <optgroup label="Categories" data-select2-id="73">
                                                                    <option data-select2-id="6"> Type Of Hospitals </option> <option value="1" data-select2-id="74"> Women's hospitals </option>
                                                                    <option value="2" data-select2-id="75"> Children's hospitals </option> <option value="4" data-select2-id="76"> Cardiac hospitals. </option>
                                                                    <option value="5" data-select2-id="77"> Cancer Hosptals </option> <option value="5" data-select2-id="78"> Diagnostic centers </option>
                                                                </optgroup>
                                                            </select>
                                                            <span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="79" style="width: 100%;">
                                                                <span class="selection">
                                                                    <span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-goqc-container">
                                                                        <span class="select2-selection__rendered" id="select2-goqc-container" role="textbox" aria-readonly="true" title=" Type Of Hospitals "> Type Of Hospitals </span>
                                                                        <span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span>
                                                                    </span>
                                                                </span>
                                                                <span class="dropdown-wrapper" aria-hidden="true"></span>
                                                            </span>
                                                        </div>
                                                        <div class="form-group col-xl-2 col-lg-2 col-md-12 mb-0">
                                                            <select class="form-control select2-show-search border-bottom-0 w-100 select2-hidden-accessible" data-placeholder="Select" data-select2-id="7" tabindex="-1" aria-hidden="true">
                                                                <optgroup label="" data-select2-id="80">
                                                                    <option data-select2-id="9"> Distance </option> <option value="1" data-select2-id="81"> 3km </option> <option value="2" data-select2-id="82"> 6km </option>
                                                                    <option value="3" data-select2-id="83"> 9km </option> <option value="4" data-select2-id="84"> 10km </option> <option value="5" data-select2-id="85"> 20km </option>
                                                                </optgroup>
                                                            </select>
                                                            <span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="86" style="width: 100%;">
                                                                <span class="selection">
                                                                    <span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-2mog-container">
                                                                        <span class="select2-selection__rendered" id="select2-2mog-container" role="textbox" aria-readonly="true" title=" Distance "> Distance </span>
                                                                        <span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span>
                                                                    </span>
                                                                </span>
                                                                <span class="dropdown-wrapper" aria-hidden="true"></span>
                                                            </span>
                                                        </div>
                                                        <div class="form-group col-xl-2 col-lg-2 col-md-12 mb-0">
                                                            <select class="form-control select2-show-search border-bottom-0 w-100 select2-hidden-accessible" data-placeholder="Select" data-select2-id="10" tabindex="-1" aria-hidden="true">
                                                                <optgroup label="Categories" data-select2-id="87">
                                                                    <option data-select2-id="12"> Max Fees </option> <option value="1" data-select2-id="88"> $10k </option> <option value="2" data-select2-id="89"> $10k-$20K </option>
                                                                    <option value="3" data-select2-id="90"> $20K-$30K </option> <option value="4" data-select2-id="91"> $30K-$40K </option>
                                                                    <option value="5" data-select2-id="92"> $40K-$50K </option> <option value="6" data-select2-id="93"> $50K-$60K </option>
                                                                    <option value="7" data-select2-id="94"> $60K-$70K </option> <option value="8" data-select2-id="95"> $70k-$80K </option>
                                                                    <option value="9" data-select2-id="96"> $80K &lt; Above </option>
                                                                </optgroup>
                                                            </select>
                                                            <span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="97" style="width: 100%;">
                                                                <span class="selection">
                                                                    <span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-2yu1-container">
                                                                        <span class="select2-selection__rendered" id="select2-2yu1-container" role="textbox" aria-readonly="true" title=" Max Fees "> Max Fees </span>
                                                                        <span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span>
                                                                    </span>
                                                                </span>
                                                                <span class="dropdown-wrapper" aria-hidden="true"></span>
                                                            </span>
                                                        </div>
                                                        <div class="form-group col-xl-2 col-lg-2 col-md-12 mb-0">
                                                            <a class="btn btn-block btn-orange fs-14" href="javascript:void(0);"><i class="fa fa-search"></i> Search</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="tab2" role="tabpanel">
                                                <div class="search-background">
                                                    <div class="form row no-gutters">
                                                        <div class="form-group col-xl-4 col-lg-4 col-md-12 mb-0 location">
                                                            <div class="form-group mb-0">
                                                                <input class="form-control border" placeholder="Search Location" type="text" /> <span><i class="fa fa-crosshairs location-gps me-1"></i></span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group col-xl-2 col-lg-2 col-md-12 mb-0">
                                                            <select class="form-control select2-show-search border-bottom-0 w-100 select2-hidden-accessible" data-placeholder="Select" data-select2-id="13" tabindex="-1" aria-hidden="true">
                                                                <optgroup label="Categories" data-select2-id="98">
                                                                    <option data-select2-id="15"> Type Of Doctors </option> <option value="1" data-select2-id="99"> Dentist </option>
                                                                    <option value="2" data-select2-id="100"> Gynecologist </option> <option value="4" data-select2-id="101"> Physiotherapist </option>
                                                                    <option value="5" data-select2-id="102"> Neurosurgeon </option> <option value="5" data-select2-id="103"> Neurologist </option>
                                                                    <option value="5" data-select2-id="104"> Infertility Specialist </option> <option value="5" data-select2-id="105"> Cardiologist </option>
                                                                </optgroup>
                                                            </select>
                                                            <span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="106" style="width: 100%;">
                                                                <span class="selection">
                                                                    <span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-0rpx-container">
                                                                        <span class="select2-selection__rendered" id="select2-0rpx-container" role="textbox" aria-readonly="true" title=" Type Of Doctors "> Type Of Doctors </span>
                                                                        <span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span>
                                                                    </span>
                                                                </span>
                                                                <span class="dropdown-wrapper" aria-hidden="true"></span>
                                                            </span>
                                                        </div>
                                                        <div class="form-group col-xl-2 col-lg-2 col-md-12 mb-0">
                                                            <select class="form-control select2-show-search border-bottom-0 w-100 select2-hidden-accessible" data-placeholder="Select" data-select2-id="16" tabindex="-1" aria-hidden="true">
                                                                <optgroup label="" data-select2-id="107">
                                                                    <option data-select2-id="18"> Distance </option> <option value="1" data-select2-id="108"> 3km </option> <option value="2" data-select2-id="109"> 6km </option>
                                                                    <option value="3" data-select2-id="110"> 9km </option> <option value="4" data-select2-id="111"> 10km </option> <option value="5" data-select2-id="112"> 20km </option>
                                                                </optgroup>
                                                            </select>
                                                            <span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="113" style="width: 100%;">
                                                                <span class="selection">
                                                                    <span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-baf3-container">
                                                                        <span class="select2-selection__rendered" id="select2-baf3-container" role="textbox" aria-readonly="true" title=" Distance "> Distance </span>
                                                                        <span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span>
                                                                    </span>
                                                                </span>
                                                                <span class="dropdown-wrapper" aria-hidden="true"></span>
                                                            </span>
                                                        </div>
                                                        <div class="form-group col-xl-2 col-lg-2 col-md-12 mb-0">
                                                            <select class="form-control select2-show-search border-bottom-0 w-100 select2-hidden-accessible" data-placeholder="Select" data-select2-id="19" tabindex="-1" aria-hidden="true">
                                                                <optgroup label="Categories" data-select2-id="114">
                                                                    <option data-select2-id="21"> Max Fees </option> <option value="1" data-select2-id="115"> $10k </option> <option value="2" data-select2-id="116"> $10k-$20K </option>
                                                                    <option value="3" data-select2-id="117"> $20K-$30K </option> <option value="4" data-select2-id="118"> $30K-$40K </option>
                                                                    <option value="5" data-select2-id="119"> $40K-$50K </option> <option value="6" data-select2-id="120"> $50K-$60K </option>
                                                                    <option value="7" data-select2-id="121"> $60K-$70K </option> <option value="8" data-select2-id="122"> $70k-$80K </option>
                                                                    <option value="9" data-select2-id="123"> $80K &lt; Above </option>
                                                                </optgroup>
                                                            </select>
                                                            <span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="124" style="width: 100%;">
                                                                <span class="selection">
                                                                    <span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-o54z-container">
                                                                        <span class="select2-selection__rendered" id="select2-o54z-container" role="textbox" aria-readonly="true" title=" Max Fees "> Max Fees </span>
                                                                        <span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span>
                                                                    </span>
                                                                </span>
                                                                <span class="dropdown-wrapper" aria-hidden="true"></span>
                                                            </span>
                                                        </div>
                                                        <div class="form-group col-xl-2 col-lg-2 col-md-12 mb-0">
                                                            <a class="btn btn-block btn-orange fs-14" href="javascript:void(0);"><i class="fa fa-search"></i> Search</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="tab3" role="tabpanel">
                                                <div class="search-background">
                                                    <div class="form row no-gutters">
                                                        <div class="form-group col-xl-4 col-lg-4 col-md-12 mb-0 location">
                                                            <div class="form-group mb-0">
                                                                <input class="form-control border" placeholder="Search Location" type="text" /> <span><i class="fa fa-crosshairs location-gps me-1"></i></span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group col-xl-2 col-lg-2 col-md-12 mb-0">
                                                            <select class="form-control select2-show-search border-bottom-0 w-100 select2-hidden-accessible" data-placeholder="Select" data-select2-id="22" tabindex="-1" aria-hidden="true">
                                                                <optgroup label="Categories" data-select2-id="125">
                                                                    <option data-select2-id="24"> Fitness Centers </option> <option value="1" data-select2-id="126"> Aerobic Centers </option>
                                                                    <option value="2" data-select2-id="127"> Yoga Centers </option> <option value="4" data-select2-id="128"> Dance Centers </option>
                                                                    <option value="5" data-select2-id="129"> Pilates Centers </option> <option value="5" data-select2-id="130"> Gyms </option>
                                                                </optgroup>
                                                            </select>
                                                            <span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="131" style="width: 100%;">
                                                                <span class="selection">
                                                                    <span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-eg28-container">
                                                                        <span class="select2-selection__rendered" id="select2-eg28-container" role="textbox" aria-readonly="true" title=" Fitness Centers "> Fitness Centers </span>
                                                                        <span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span>
                                                                    </span>
                                                                </span>
                                                                <span class="dropdown-wrapper" aria-hidden="true"></span>
                                                            </span>
                                                        </div>
                                                        <div class="form-group col-xl-2 col-lg-2 col-md-12 mb-0">
                                                            <select class="form-control select2-show-search border-bottom-0 w-100 select2-hidden-accessible" data-placeholder="Select" data-select2-id="25" tabindex="-1" aria-hidden="true">
                                                                <optgroup label="" data-select2-id="132">
                                                                    <option data-select2-id="27"> Distance </option> <option value="1" data-select2-id="133"> 3km </option> <option value="2" data-select2-id="134"> 6km </option>
                                                                    <option value="3" data-select2-id="135"> 9km </option> <option value="4" data-select2-id="136"> 10km </option> <option value="5" data-select2-id="137"> 20km </option>
                                                                </optgroup>
                                                            </select>
                                                            <span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="138" style="width: 100%;">
                                                                <span class="selection">
                                                                    <span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-znz7-container">
                                                                        <span class="select2-selection__rendered" id="select2-znz7-container" role="textbox" aria-readonly="true" title=" Distance "> Distance </span>
                                                                        <span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span>
                                                                    </span>
                                                                </span>
                                                                <span class="dropdown-wrapper" aria-hidden="true"></span>
                                                            </span>
                                                        </div>
                                                        <div class="form-group col-xl-2 col-lg-2 col-md-12 mb-0">
                                                            <select class="form-control select2-show-search border-bottom-0 w-100 select2-hidden-accessible" data-placeholder="Select" data-select2-id="28" tabindex="-1" aria-hidden="true">
                                                                <optgroup label="Categories" data-select2-id="139">
                                                                    <option data-select2-id="30"> Max Fees </option> <option value="1" data-select2-id="140"> $10k </option> <option value="2" data-select2-id="141"> $10k-$20K </option>
                                                                    <option value="3" data-select2-id="142"> $20K-$30K </option> <option value="4" data-select2-id="143"> $30K-$40K </option>
                                                                    <option value="5" data-select2-id="144"> $40K-$50K </option> <option value="6" data-select2-id="145"> $50K-$60K </option>
                                                                    <option value="7" data-select2-id="146"> $60K-$70K </option> <option value="8" data-select2-id="147"> $70k-$80K </option>
                                                                    <option value="9" data-select2-id="148"> $80K &lt; Above </option>
                                                                </optgroup>
                                                            </select>
                                                            <span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="149" style="width: 100%;">
                                                                <span class="selection">
                                                                    <span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-f1ap-container">
                                                                        <span class="select2-selection__rendered" id="select2-f1ap-container" role="textbox" aria-readonly="true" title=" Max Fees "> Max Fees </span>
                                                                        <span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span>
                                                                    </span>
                                                                </span>
                                                                <span class="dropdown-wrapper" aria-hidden="true"></span>
                                                            </span>
                                                        </div>
                                                        <div class="form-group col-xl-2 col-lg-2 col-md-12 mb-0">
                                                            <a class="btn btn-block btn-orange fs-14" href="javascript:void(0);"><i class="fa fa-search"></i> Search</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="tab4" role="tabpanel">
                                                <div class="search-background">
                                                    <div class="form row no-gutters">
                                                        <div class="form-group col-xl-4 col-lg-4 col-md-12 mb-0 location">
                                                            <div class="form-group mb-0">
                                                                <input class="form-control border" placeholder="Search Location" type="text" /> <span><i class="fa fa-crosshairs location-gps me-1"></i></span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group col-xl-2 col-lg-2 col-md-12 mb-0">
                                                            <select class="form-control select2-show-search border-bottom-0 w-100 select2-hidden-accessible" data-placeholder="Select" data-select2-id="31" tabindex="-1" aria-hidden="true">
                                                                <optgroup label="Categories" data-select2-id="150">
                                                                    <option data-select2-id="33"> Pharmacies </option> <option value="1" data-select2-id="151"> Retail pharmacy </option>
                                                                    <option value="2" data-select2-id="152"> Hospital pharmacy </option> <option value="4" data-select2-id="153"> Clinic pharmacy </option>
                                                                    <option value="5" data-select2-id="154"> Home care pharmacy </option> <option value="5" data-select2-id="155"> Mail order pharmacy </option>
                                                                </optgroup>
                                                            </select>
                                                            <span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="156" style="width: 100%;">
                                                                <span class="selection">
                                                                    <span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-w9yn-container">
                                                                        <span class="select2-selection__rendered" id="select2-w9yn-container" role="textbox" aria-readonly="true" title=" Pharmacies "> Pharmacies </span>
                                                                        <span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span>
                                                                    </span>
                                                                </span>
                                                                <span class="dropdown-wrapper" aria-hidden="true"></span>
                                                            </span>
                                                        </div>
                                                        <div class="form-group col-xl-2 col-lg-2 col-md-12 mb-0">
                                                            <select class="form-control select2-show-search border-bottom-0 w-100 select2-hidden-accessible" data-placeholder="Select" data-select2-id="34" tabindex="-1" aria-hidden="true">
                                                                <optgroup label="" data-select2-id="157">
                                                                    <option data-select2-id="36"> Distance </option> <option value="1" data-select2-id="158"> 3km </option> <option value="2" data-select2-id="159"> 6km </option>
                                                                    <option value="3" data-select2-id="160"> 9km </option> <option value="4" data-select2-id="161"> 10km </option> <option value="5" data-select2-id="162"> 20km </option>
                                                                </optgroup>
                                                            </select>
                                                            <span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="163" style="width: 100%;">
                                                                <span class="selection">
                                                                    <span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-yxp2-container">
                                                                        <span class="select2-selection__rendered" id="select2-yxp2-container" role="textbox" aria-readonly="true" title=" Distance "> Distance </span>
                                                                        <span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span>
                                                                    </span>
                                                                </span>
                                                                <span class="dropdown-wrapper" aria-hidden="true"></span>
                                                            </span>
                                                        </div>
                                                        <div class="form-group col-xl-2 col-lg-2 col-md-12 mb-0">
                                                            <select class="form-control select2-show-search border-bottom-0 w-100 select2-hidden-accessible" data-placeholder="Select" data-select2-id="37" tabindex="-1" aria-hidden="true">
                                                                <optgroup label="Categories" data-select2-id="164">
                                                                    <option data-select2-id="39"> Max price </option> <option value="1" data-select2-id="165"> $10k </option> <option value="2" data-select2-id="166"> $10k-$20K </option>
                                                                    <option value="3" data-select2-id="167"> $20K-$30K </option> <option value="4" data-select2-id="168"> $30K-$40K </option>
                                                                    <option value="5" data-select2-id="169"> $40K-$50K </option> <option value="6" data-select2-id="170"> $50K-$60K </option>
                                                                    <option value="7" data-select2-id="171"> $60K-$70K </option> <option value="8" data-select2-id="172"> $70k-$80K </option>
                                                                    <option value="9" data-select2-id="173"> $80K &lt; Above </option>
                                                                </optgroup>
                                                            </select>
                                                            <span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="174" style="width: 100%;">
                                                                <span class="selection">
                                                                    <span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-pepw-container">
                                                                        <span class="select2-selection__rendered" id="select2-pepw-container" role="textbox" aria-readonly="true" title=" Max price "> Max price </span>
                                                                        <span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span>
                                                                    </span>
                                                                </span>
                                                                <span class="dropdown-wrapper" aria-hidden="true"></span>
                                                            </span>
                                                        </div>
                                                        <div class="form-group col-xl-2 col-lg-2 col-md-12 mb-0">
                                                            <a class="btn btn-block btn-orange fs-14" href="javascript:void(0);"><i class="fa fa-search"></i> Search</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="tab5" role="tabpanel">
                                                <div class="search-background">
                                                    <div class="form row no-gutters">
                                                        <div class="form-group col-xl-4 col-lg-4 col-md-12 mb-0 location">
                                                            <div class="form-group mb-0">
                                                                <input class="form-control border" placeholder="Search Location" type="text" /> <span><i class="fa fa-crosshairs location-gps me-1"></i></span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group col-xl-2 col-lg-2 col-md-12 mb-0">
                                                            <select class="form-control select2-show-search border-bottom-0 w-100 select2-hidden-accessible" data-placeholder="Select" data-select2-id="40" tabindex="-1" aria-hidden="true">
                                                                <optgroup label="Categories" data-select2-id="175">
                                                                    <option data-select2-id="42"> Clinics </option> <option value="1" data-select2-id="176"> Physiotherapy Clinics </option>
                                                                    <option value="2" data-select2-id="177"> Dental Clinics </option> <option value="4" data-select2-id="178"> Walk-in Urgent Care Clinics </option>
                                                                    <option value="5" data-select2-id="179"> Chiropractor Clinics </option> <option value="5" data-select2-id="180"> Rehabilitation Clinics </option>
                                                                </optgroup>
                                                            </select>
                                                            <span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="181" style="width: 100%;">
                                                                <span class="selection">
                                                                    <span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-c2mc-container">
                                                                        <span class="select2-selection__rendered" id="select2-c2mc-container" role="textbox" aria-readonly="true" title=" Clinics "> Clinics </span>
                                                                        <span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span>
                                                                    </span>
                                                                </span>
                                                                <span class="dropdown-wrapper" aria-hidden="true"></span>
                                                            </span>
                                                        </div>
                                                        <div class="form-group col-xl-2 col-lg-2 col-md-12 mb-0">
                                                            <select class="form-control select2-show-search border-bottom-0 w-100 select2-hidden-accessible" data-placeholder="Select" data-select2-id="43" tabindex="-1" aria-hidden="true">
                                                                <optgroup label="" data-select2-id="182">
                                                                    <option data-select2-id="45"> Distance </option> <option value="1" data-select2-id="183"> 3km </option> <option value="2" data-select2-id="184"> 6km </option>
                                                                    <option value="3" data-select2-id="185"> 9km </option> <option value="4" data-select2-id="186"> 10km </option> <option value="5" data-select2-id="187"> 20km </option>
                                                                </optgroup>
                                                            </select>
                                                            <span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="188" style="width: 100%;">
                                                                <span class="selection">
                                                                    <span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-dtil-container">
                                                                        <span class="select2-selection__rendered" id="select2-dtil-container" role="textbox" aria-readonly="true" title=" Distance "> Distance </span>
                                                                        <span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span>
                                                                    </span>
                                                                </span>
                                                                <span class="dropdown-wrapper" aria-hidden="true"></span>
                                                            </span>
                                                        </div>
                                                        <div class="form-group col-xl-2 col-lg-2 col-md-12 mb-0">
                                                            <select class="form-control select2-show-search border-bottom-0 w-100 select2-hidden-accessible" data-placeholder="Select" data-select2-id="46" tabindex="-1" aria-hidden="true">
                                                                <optgroup label="Categories" data-select2-id="189">
                                                                    <option data-select2-id="48"> Max Fees </option> <option value="1" data-select2-id="190"> $10k </option> <option value="2" data-select2-id="191"> $10k-$20K </option>
                                                                    <option value="3" data-select2-id="192"> $20K-$30K </option> <option value="4" data-select2-id="193"> $30K-$40K </option>
                                                                    <option value="5" data-select2-id="194"> $40K-$50K </option> <option value="6" data-select2-id="195"> $50K-$60K </option>
                                                                    <option value="7" data-select2-id="196"> $60K-$70K </option> <option value="8" data-select2-id="197"> $70k-$80K </option>
                                                                    <option value="9" data-select2-id="198"> $80K &lt; Above </option>
                                                                </optgroup>
                                                            </select>
                                                            <span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="199" style="width: 100%;">
                                                                <span class="selection">
                                                                    <span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-f4s7-container">
                                                                        <span class="select2-selection__rendered" id="select2-f4s7-container" role="textbox" aria-readonly="true" title=" Max Fees "> Max Fees </span>
                                                                        <span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span>
                                                                    </span>
                                                                </span>
                                                                <span class="dropdown-wrapper" aria-hidden="true"></span>
                                                            </span>
                                                        </div>
                                                        <div class="form-group col-xl-2 col-lg-2 col-md-12 mb-0">
                                                            <a class="btn btn-block btn-orange fs-14" href="javascript:void(0);"><i class="fa fa-search"></i> Search</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="tab6" role="tabpanel">
                                                <div class="search-background">
                                                    <div class="form row no-gutters">
                                                        <div class="form-group col-xl-4 col-lg-4 col-md-12 mb-0 location">
                                                            <div class="form-group mb-0">
                                                                <input class="form-control border" placeholder="Search Location" type="text" /> <span><i class="fa fa-crosshairs location-gps me-1"></i></span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group col-xl-2 col-lg-2 col-md-12 mb-0">
                                                            <select class="form-control select2-show-search border-bottom-0 w-100 select2-hidden-accessible" data-placeholder="Select" data-select2-id="49" tabindex="-1" aria-hidden="true">
                                                                <optgroup label="Categories" data-select2-id="200">
                                                                    <option data-select2-id="51"> Blood Banks </option> <option value="1" data-select2-id="201"> Central Blood Center </option>
                                                                    <option value="2" data-select2-id="202"> San Diego Blood Bank </option> <option value="4" data-select2-id="203"> Delta Blood Bank </option>
                                                                    <option value="5" data-select2-id="204"> Heartland Blood Centers </option> <option value="5" data-select2-id="205"> Florida’s Blood Centers </option>
                                                                </optgroup>
                                                            </select>
                                                            <span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="206" style="width: 100%;">
                                                                <span class="selection">
                                                                    <span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-7l52-container">
                                                                        <span class="select2-selection__rendered" id="select2-7l52-container" role="textbox" aria-readonly="true" title=" Blood Banks "> Blood Banks </span>
                                                                        <span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span>
                                                                    </span>
                                                                </span>
                                                                <span class="dropdown-wrapper" aria-hidden="true"></span>
                                                            </span>
                                                        </div>
                                                        <div class="form-group col-xl-2 col-lg-2 col-md-12 mb-0">
                                                            <select class="form-control select2-show-search border-bottom-0 w-100 select2-hidden-accessible" data-placeholder="Select" data-select2-id="52" tabindex="-1" aria-hidden="true">
                                                                <optgroup label="" data-select2-id="207">
                                                                    <option data-select2-id="54"> Distance </option> <option value="1" data-select2-id="208"> 3km </option> <option value="2" data-select2-id="209"> 6km </option>
                                                                    <option value="3" data-select2-id="210"> 9km </option> <option value="4" data-select2-id="211"> 10km </option> <option value="5" data-select2-id="212"> 20km </option>
                                                                </optgroup>
                                                            </select>
                                                            <span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="213" style="width: 100%;">
                                                                <span class="selection">
                                                                    <span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-57fh-container">
                                                                        <span class="select2-selection__rendered" id="select2-57fh-container" role="textbox" aria-readonly="true" title=" Distance "> Distance </span>
                                                                        <span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span>
                                                                    </span>
                                                                </span>
                                                                <span class="dropdown-wrapper" aria-hidden="true"></span>
                                                            </span>
                                                        </div>
                                                        <div class="form-group col-xl-2 col-lg-2 col-md-12 mb-0">
                                                            <select class="form-control select2-show-search border-bottom-0 w-100 select2-hidden-accessible" data-placeholder="Select" data-select2-id="55" tabindex="-1" aria-hidden="true">
                                                                <optgroup label="Categories" data-select2-id="214">
                                                                    <option data-select2-id="57"> Available Bloodgroups </option> <option value="1" data-select2-id="215"> A negative </option>
                                                                    <option value="2" data-select2-id="216"> A positive </option> <option value="3" data-select2-id="217"> B negative </option>
                                                                    <option value="4" data-select2-id="218"> B positive </option> <option value="5" data-select2-id="219"> AB negative </option>
                                                                    <option value="6" data-select2-id="220"> AB positive </option> <option value="7" data-select2-id="221"> O negative </option>
                                                                    <option value="8" data-select2-id="222"> O positive </option>
                                                                </optgroup>
                                                            </select>
                                                            <span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="223" style="width: 100%;">
                                                                <span class="selection">
                                                                    <span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-jg45-container">
                                                                        <span class="select2-selection__rendered" id="select2-jg45-container" role="textbox" aria-readonly="true" title=" Available Bloodgroups "> Available Bloodgroups </span>
                                                                        <span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span>
                                                                    </span>
                                                                </span>
                                                                <span class="dropdown-wrapper" aria-hidden="true"></span>
                                                            </span>
                                                        </div>
                                                        <div class="form-group col-xl-2 col-lg-2 col-md-12 mb-0">
                                                            <a class="btn btn-block btn-orange fs-14" href="javascript:void(0);"><i class="fa fa-search"></i> Search</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--/Section-->
            <!--Section-->
            <section class="sptb">
                <div class="container">
                    <div class="section-title center-block text-center">
                        <h2>Categories</h2>
                        <p>Excepteur sint occaecat cupidatat proident deserunt mollit laborum</p>
                    </div>
                    <div class="row">
                        <div class="col-xl-2 col-sm-6">
                            <div class="card bg-card-light bg-primary-card bg-white">
                                <div class="card-body">
                                    <div class="cat-item text-center">
                                        <a href="/page-list/{id}"></a>
                                        <div class="cat-icon bg-primary-transparent brround text-primary"><i class="fa fa-hospital-o"></i></div>
                                        <div class="cat-desc">


                                            <h5 class="mb-2">Hospitals</h5>
                                            @php
                                            $totalHospitals = DB::table('hospitals')
                                                ->where('type', 'Hospital')
                                                ->count();

                                            @endphp
                                            <p class="badge badge-pill bg-light font-weight-semibold mb-0">{{ $totalHospitals }}</p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-sm-6">
                            <div class="card bg-card-light bg-secondary-card bg-white">
                                <div class="card-body">
                                    <div class="cat-item text-center">
                                        <a href="page-list.html"></a>
                                        <div class="cat-icon bg-secondary-transparent brround text-secondary"><i class="fa fa-user-md"></i></div>
                                        <div class="cat-desc">
                                            <h5 class="mb-2">Doctors</h5>
                                            @php
                                            $totalDoctors = DB::table('doctors')->count();

                                            @endphp
                                            <p class="badge badge-pill bg-light font-weight-semibold mb-0">{{ $totalDoctors }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-sm-6">
                            <div class="card bg-card-light bg-info-card bg-white">
                                <div class="card-body">
                                    <div class="cat-item text-center">
                                        <a href="page-list.html"></a>
                                        <div class="cat-icon bg-info-transparent brround text-info"><i class="fas fa-building"></i></div>
                                        <div class="cat-desc">
                                            <h5 class="mb-2">FitnesCenters</h5>
                                            @php
                                            $fitnessCenters = DB::table('hospitals')
                                                ->where('type', 'Fitness Centers')
                                                ->count();

                                            @endphp
                                            <p class="badge badge-pill bg-light font-weight-semibold mb-0">{{ $fitnessCenters }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-sm-6">
                            <div class="card bg-card-light bg-danger-card bg-white">
                                <div class="card-body">
                                    <div class="cat-item text-center">
                                        <a href="page-list.html"></a>
                                        <div class="cat-icon bg-danger-transparent brround text-danger"><i class="fa fa-medkit"></i></div>
                                        <div class="cat-desc">
                                            <h5 class="mb-2">Pharmacies</h5>
                                            <p class="badge badge-pill bg-light font-weight-semibold mb-0">25</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-sm-6">
                            <div class="card bg-card-light bg-success-card bg-white">
                                <div class="card-body">
                                    <div class="cat-item text-center">
                                        <a href="page-list.html"></a>
                                        <div class="cat-icon bg-success-transparent brround text-success"><i class="fa fa-stethoscope"></i></div>
                                        <div class="cat-desc">
                                            <h5 class="mb-2">Clinics</h5>
                                            @php
                                            $clinics = DB::table('hospitals')
                                                ->where('type', 'Clinic')
                                                ->count();

                                            @endphp
                                            <p class="badge badge-pill bg-light font-weight-semibold mb-0">{{ $clinics }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-sm-6">
                            <div class="card bg-card-light bg-warning-card bg-white">
                                <div class="card-body">
                                    <div class="cat-item text-center">
                                        <a href="page-list.html"></a>
                                        <div class="cat-icon bg-warning-transparent brround text-warning"><i class="fa fa-heartbeat"></i></div>
                                        <div class="cat-desc">
                                            <h5 class="mb-2">Bloodbanks</h5>
                                                @php
                                                $Bloodbanks = DB::table('hospitals')
                                                    ->where('type', 'Blood Bank')
                                                    ->count();

                                                @endphp
                                            <p class="badge badge-pill bg-light font-weight-semibold mb-0">{{ $Bloodbanks }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--/Section-->
            <!--Section-->
            <section class="sptb section-bg">
                <div class="container">
                    <div class="section-title center-block text-center">
                        <h2>New Registerd</h2>
                        <p>Excepteur sint occaecat cupidatat proident deserunt mollit laborum</p>
                    </div>
                    <div class="owl-carousel owl-carousel-icons2 owl-loaded owl-drag" id="myCarousel1">
                        <div class="owl-stage-outer">
                            <div class="owl-stage" style="transform: translate3d(-1201px, 0px, 0px); transition: 0.25s; width: 4204px;">
                                @foreach ($new_registerd as $item)
                                   
                                    <div class="owl-item cloned" style="width: 275.25px; margin-right: 25px;">
                                        <div class="item">
                                            <div class="card">
                                                <div class="item-card2-img"><a href="hospital-details.html"></a> 
                                                <!-- <img alt="img" class="cover-image" src="{{ asset('frontend/images/0-21.jpg') }}" /> -->
                                                <img src="{{ asset('frontend/images/0-21.jpg') }}" alt="img" class="cover-image" />

                                            </div>
                                                <!-- <div class="item-card2-icons">
                                                    <a class="item-card2-icons-r bg-dark-transparent" href="javascript:void(0);"><i class="fa fa fa-heart text-danger"></i></a>
                                                    <a class="item-card2-icons-r bg-dark-transparent" href="javascript:void(0);"><i class="fa fa-share-alt"></i></a>
                                                </div> -->
                                                <div class="card-body">
                                                    <div class="item-card2">
                                                        <small class="text-muted">{{$item->type}}</small>
                                                        <a class="text-dark" href="hospital-details.html">
                                                            <h4 class="font-weight-semibold mt-1 mb-1">{{$item->title}} <i class="fas fa-check-circle text-success fs-14 ms-1"></i></h4>
                                                        </a>
                                                        <p class="text-muted fs-13 mb-1"><i class="fa fa-clock-o me-1"></i>9:00 Am - 7:00 Pm</p>
                                                        
                                                        <div class="mb-0 mt-0">
                                                            <ul class="item-card-features mb-0">
                                                                <li class="mb-0" style="width:100% !important">
                                                                    <span class="text-muted"><i class="fa fa-map-marker me-1"></i> {{$item->address}}</span>
                                                                </li>
                                                                <!-- <li>
                                                                    <span class="text-muted"><i class="fa fa-user-md me-1"></i>154 Doctors</span>
                                                                </li> -->
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-footer p-0 btn-appointment">
                                                    <div class="btn-group w-100">
                                                        <a class="w-50 btn btn-outline-light p-2 border-top-0 border-bottom-0 border-start-0 border-end-0" href="hospital-details.html"><i class="fas fa-eye me-1"></i> Appointemnt</a>
                                                        <a href="tel:{{$item->m_no}}" class="w-50 btn btn-outline-light p-2 border-top-0 border-bottom-0 border-end-0 call-btn">
                                                            <div class="call-btn-1"><i class="fas fa-phone me-1"></i> Call</div>
                                                            <div class="call-number">+65 847596 82</div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach 
                            </div>
                        </div>
                        <div class="owl-nav">
                            <button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button>
                        </div>
                        <div class="owl-dots disabled"></div>
                    </div>
                </div>
            </section>
            <!--Section-->
            <!--Section-->
            <section class="sptb">
                <div class="container">
                    <div class="section-title center-block text-center">
                        <h2>Top Rated List</h2>
                        <p>Excepteur sint occaecat cupidatat proident deserunt mollit laborum</p>
                    </div>
                    <div class="items-gallery">
                        <div class="items-blog-tab text-center">
                            <div class="items-blog-tab-heading row">
                                <div class="col-12">
                                    <ul class="nav items-blog-tab-menu" role="tablist">
                                        <li class=""><a class="active show" data-bs-toggle="tab" href="#tab-1" aria-selected="true" role="tab">Doctors</a></li>
                                        <li><a class="" data-bs-toggle="tab" href="#tab-2" aria-selected="false" tabindex="-1" role="tab">Hospitals</a></li>
                                        <li><a class="" data-bs-toggle="tab" href="#tab-3" aria-selected="false" tabindex="-1" role="tab">FitnesCenters</a></li>
                                        <!-- <li><a class="" data-bs-toggle="tab" href="#tab-4" aria-selected="false" tabindex="-1" role="tab">Pharmacies</a></li> -->
                                        <li><a class="" data-bs-toggle="tab" href="#tab-5" aria-selected="false" tabindex="-1" role="tab">Clinics</a></li>
                                        <li><a class="" data-bs-toggle="tab" href="#tab-6" aria-selected="false" tabindex="-1" role="tab">BloodBanks</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tab-content list-container closed" style="height: 380px; overflow: hidden;">
                                <div class="tab-pane active" id="tab-1" role="tabpanel">
                                    <div class="row">
                                        @foreach ($doctors as $item)
                                            <div class="col-lg-6 col-md-12 col-xl-3">
                                                <div class="card">
                                                    <div class="item-card7-imgs">
                                                        <a href="/doctor-details/{id}"></a> <img alt="img" class="cover-image" src="{{ asset('frontend/images/0-33.jpg') }}" />
                                                        <div class="tag-text"><span class="bg-dark tag-option">{{$item->specialities}}</span></div>
                                                    </div>
                                                    <div class="item-card2-icons d-none">
                                                        <a class="item-card2-icons-r bg-dark-transparent" href="javascript:void(0);"><i class="fa fa fa-heart-o"></i></a>
                                                        <a class="item-card2-icons-r bg-dark-transparent" href="javascript:void(0);"><i class="fa fa-share-alt"></i></a>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="item-card2">
                                                            <a class="text-dark" href="/doctor-details/{id}">
                                                                <h4 class="font-weight-semibold mt-1 mb-1">{{$item->name}}<i class="fas fa-check-circle text-success fs-14 ms-1"></i></h4>
                                                            </a>
                                                            <p class="text-muted fs-13 mb-1"><i class="fa fa-user-md text-muted me-2"></i>{{$item->degree}}</p>
                                                            <!-- <div class="rating-stars d-inline-flex mb-1 d-none">
                                                                <input class="rating-value star" name="rating-stars-value" readonly="readonly" type="number" value="3" />
                                                                <div class="rating-stars-container me-2">
                                                                    <div class="rating-star sm is--active"><i class="fa fa-star"></i></div>
                                                                    <div class="rating-star sm is--active"><i class="fa fa-star"></i></div>
                                                                    <div class="rating-star sm is--active"><i class="fa fa-star"></i></div>
                                                                    <div class="rating-star sm"><i class="fa fa-star"></i></div>
                                                                    <div class="rating-star sm"><i class="fa fa-star"></i></div>
                                                                </div>
                                                                3.2
                                                            </div> -->
                                                            <div class="mb-0 mt-0">
                                                                <ul class="item-card-features mb-0">
                                                                    <li class="mb-0">
                                                                        <span class="text-muted"><i class="fa fa-map-marker me-1"></i> Hyderabad</span>
                                                                    </li>
                                                                    <li>
                                                                        <span class="text-muted"><i class="fa fa-briefcase me-1"></i>2 yrs Exp</span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer p-0 btn-appointment">
                                                        <div class="btn-group w-100">
                                                            <a class="w-50 btn btn-outline-light p-2 border-top-0 border-bottom-0 border-start-0 border-end-0" href="doctor-details.html"><i class="fas fa-eye me-1"></i> Appointment</a>
                                                            <a class="w-50 btn btn-outline-light p-2 border-top-0 border-bottom-0 border-end-0" href="javascript:void(0);" data-bs-target="#exampleModal" data-bs-toggle="modal">
                                                                <i class="fas fa-phone me-1"></i> Call
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach  
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab-2" role="tabpanel">
                                    <div class="row">
                                        @foreach ($hospitals as $item)
                                            <div class="col-lg-6 col-md-12 col-xl-3">
                                                <div class="card">
                                                    <div class="item-card7-imgs">
                                                        <a href="/hospital-details/{id}"></a> <img alt="img" class="cover-image" src="{{ asset('frontend/images/0-23.jpg') }}" />
                                                        <!-- <div class="tag-text"><span class="bg-dark tag-option">Hospital</span></div> -->
                                                    </div>
                                                    <!-- <div class="item-card2-icons">
                                                        <a class="item-card2-icons-r bg-dark-transparent" href="javascript:void(0);"><i class="fa fa fa-heart text-danger"></i></a>
                                                        <a class="item-card2-icons-r bg-dark-transparent" href="javascript:void(0);"><i class="fa fa-share-alt"></i></a>
                                                    </div> -->
                                                    <div class="card-body">
                                                        <div class="item-card2">
                                                            <!-- <a class="text-dark" href="/hospital-details/{id}"> -->
                                                                <a class="text-dark" href="/hospital-details/{{ $item->id }}">

                                                                <h4 class="font-weight-semibold mt-1 mb-1">{{$item->title}}<i class="fas fa-check-circle text-success fs-14 ms-1"></i></h4>
                                                            </a>
                                                            <p class="text-muted fs-13 mb-1"><i class="fa fa-map-marker me-1"></i> {{$item->address}}</p>
                                                            <!-- <div class="rating-stars d-inline-flex mb-1 ">
                                                                <input class="rating-value star" name="rating-stars-value" readonly="readonly" type="number" value="5" />
                                                                <div class="rating-stars-container me-2">
                                                                    <div class="rating-star sm is--active"><i class="fa fa-star"></i></div>
                                                                    <div class="rating-star sm is--active"><i class="fa fa-star"></i></div>
                                                                    <div class="rating-star sm is--active"><i class="fa fa-star"></i></div>
                                                                    <div class="rating-star sm is--active"><i class="fa fa-star"></i></div>
                                                                    <div class="rating-star sm is--active"><i class="fa fa-star"></i></div>
                                                                </div>
                                                                5.0
                                                            </div> -->
                                                            <div class="mb-0 mt-0">
                                                                <ul class="item-card-features mb-0">
                                                                    <!-- <li class="mb-0">
                                                                        <span class="text-muted"><i class="fa fa-map-marker me-1"></i>Hyderabad</span>
                                                                    </li> -->
                                                                    <li>
                                                                        <span class="text-muted"><i class="fa fa-user-md me-1"></i>154 Doctors</span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer p-0 btn-appointment">
                                                        <div class="btn-group w-100">
                                                            <a class="w-50 btn btn-outline-light p-2 border-top-0 border-bottom-0 border-start-0 border-end-0" href="hospital-details.html"><i class="fas fa-eye me-1"></i> Appointemnt</a>
                                                            <a href="tel:+8801792017302" class="w-50 btn btn-outline-light p-2 border-top-0 border-bottom-0 border-end-0 call-btn">
                                                                <div class="call-btn-1"><i class="fas fa-phone me-1"></i> Call</div>
                                                                <div class="call-number">+65 847596 82</div>
                                                                
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach 
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab-3" role="tabpanel">
                                    <div class="row">
                                        @foreach ($fitness_center as $item)
                                            <div class="col-lg-6 col-md-12 col-xl-3">
                                                <div class="card">
                                                    <div class="item-card7-imgs">
                                                        <a href="fitness-details.html"></a> <img alt="img" class="cover-image" src="{{ asset('frontend/images/0-26.jpg') }}" />
                                                        <div class="tag-text"><span class="bg-dark tag-option">Fitness Center</span></div>
                                                    </div>
                                                    <div class="item-card2-icons">
                                                        <a class="item-card2-icons-l bg-dark-transparent" href="javascript:void(0);"><i class="fa fa-share-alt"></i></a>
                                                        <a class="item-card2-icons-r bg-dark-transparent" href="javascript:void(0);"><i class="fa fa fa-heart-o"></i></a>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="item-card2">
                                                            <a class="text-dark" href="fitness-details.html">
                                                                <h4 class="font-weight-semibold mt-1 mb-1">{{$item->title}}<i class="fas fa-check-circle text-success fs-14 ms-1"></i></h4>
                                                            </a>
                                                            <p class="text-muted fs-13 mb-1"><i class="fa fa-map-marker me-1"></i> {{$item->address}}</p>
                                                           
                                                            <div class="mb-0 mt-0">
                                                                <ul class="item-card-features mb-0">
                                                                    <!-- <li class="mb-0">
                                                                        <span class="text-muted"><i class="fa fa-map-marker me-1"></i> Hyderabad</span>
                                                                    </li> -->
                                                                    <li>
                                                                        <span class="text-muted"><i class="fa fa fa-calendar-o me-1"></i>Mon-Fri</span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer p-0 btn-appointment">
                                                        <div class="btn-group w-100">
                                                            <a class="w-50 btn btn-outline-light p-2 border-top-0 border-bottom-0 border-start-0 border-end-0" href="hospital-details.html"><i class="fas fa-eye me-1"></i> Appointemnt</a>
                                                            <a href="javascript:void(0);" class="w-50 btn btn-outline-light p-2 border-top-0 border-bottom-0 border-end-0 call-btn">
                                                                <div class="call-btn-1"><i class="fas fa-phone me-1"></i> Call</div>
                                                                <div class="call-number">+65 847596 82</div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach 
                                    </div>
                                </div>
                                
                                <div class="tab-pane" id="tab-5" role="tabpanel">
                                    <div class="row">
                                        @foreach ($clinic as $item)
                                            <div class="col-lg-6 col-md-12 col-xl-3">
                                                <div class="card">
                                                    <div class="item-card7-imgs">
                                                        <a href="hospital-details.html"></a> <img alt="img" class="cover-image" src="{{ asset('frontend/images/0-5.jpg') }}" />
                                                        <div class="tag-text"><span class="bg-dark tag-option">Clinic</span></div>
                                                    </div>
                                                    
                                                    <div class="card-body">
                                                        <div class="item-card2">
                                                            <a class="text-dark" href="hospital-details.html">
                                                                <h4 class="font-weight-semibold mt-1 mb-1">{{$item->title}}<i class="fas fa-check-circle text-success fs-14 ms-1"></i></h4>
                                                            </a>
                                                            <p class="text-muted fs-13 mb-1"><i class="fa fa-map-marker me-1"></i>{{$item->address}}</p>
                                                            <div class="mb-0 mt-0">
                                                                <ul class="item-card-features mb-0">
                                                                    <li>
                                                                        <span class="text-muted"><i class="fa fa-clock-o me-1"></i>11 Am - 6 Pm</span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer p-0 btn-appointment">
                                                        <div class="btn-group w-100">
                                                            <a class="w-50 btn btn-outline-light p-2 border-top-0 border-bottom-0 border-start-0 border-end-0" href="hospital-details.html"><i class="fas fa-eye me-1"></i> Appointemnt</a>
                                                            <a href="javascript:void(0);" class="w-50 btn btn-outline-light p-2 border-top-0 border-bottom-0 border-end-0 call-btn">
                                                                <div class="call-btn-1"><i class="fas fa-phone me-1"></i> Call</div>
                                                                <div class="call-number">+65 847596 82</div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach 
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab-6" role="tabpanel">
                                    <div class="row">
                                        @foreach ($blood_bank as $item)
                                            <div class="col-lg-6 col-md-12 col-xl-3">
                                                <div class="card">
                                                    <div class="item-card7-imgs">
                                                        <a href="bloodbank-details.html"></a> <img alt="img" class="cover-image" src="{{ asset('frontend/images/0-16.jpg') }}" />
                                                        <div class="tag-text"><span class="bg-dark tag-option">BloodBank</span></div>
                                                    </div>
                                                    <!-- <div class="item-card2-icons">
                                                        <a class="item-card2-icons-r bg-dark-transparent" href="javascript:void(0);"><i class="fa fa fa-heart text-danger"></i></a>
                                                        <a class="item-card2-icons-r bg-dark-transparent" href="javascript:void(0);"><i class="fa fa-share-alt"></i></a>
                                                    </div> -->
                                                    <div class="card-body">
                                                        <div class="item-card2">
                                                            <a class="text-dark" href="bloodbank-details.html">
                                                                <h4 class="font-weight-semibold mt-1 mb-1">{{$item->title}}<i class="fas fa-check-circle text-success fs-14 ms-1"></i></h4>
                                                            </a>
                                                            <p class="text-muted fs-13 mb-1"><i class="fa fa-map-marker me-1"></i>{{$item->address}}</p>
                                                           
                                                            <div class="mb-0 mt-0">
                                                                <ul class="item-card-features mb-0">
                                                                    
                                                                    <li>
                                                                        <span class="text-muted"><i class="fa fa-clock-o me-1"></i>9 Am - 5 Pm</span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer p-0 btn-appointment">
                                                        <div class="btn-group w-100">
                                                            <a class="w-50 btn btn-outline-light p-2 border-top-0 border-bottom-0 border-start-0 border-end-0" href="hospital-details.html"><i class="fas fa-eye me-1"></i> Appointment</a>
                                                            <a href="tel:{{$item->mobile}}" class="w-50 btn btn-outline-light p-2 border-top-0 border-bottom-0 border-end-0 call-btn">
                                                                <div class="call-btn-1"><i class="fas fa-phone me-1"></i> Call</div>
                                                                <div class="call-number">+65 847596 82</div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach 
                                    </div>
                                </div>
                            </div>
                            <div class="showmore-button"><div class="showmore-button-inner more">Show more</div></div>
                        </div>
                    </div>
                </div>
            </section>
            <!--/Section-->
            <!--Statistics-->
            <section>
                <div class="about-1 cover-image sptb bg-background-color" 
                style="background: url('{{ asset('frontend/images/banner4.jpg') }}') center center;">
>
                    <div class="content-text mb-0 text-white info">
                        <div class="container">
                            <div class="row text-center">
                                <div class="col-lg-3 col-md-6">
                                    <div class="counter-status md-mb-0">
                                        <div class="counter-icon"><i class="fas fa-trophy"></i></div>
                                        <h5 class="font-weight-normal">Total Awards</h5>
                                        <h2 class="counter mb-0">569</h2>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="counter-status status-1 md-mb-0">
                                        <div class="counter-icon text-warning"><i class="fas fa-users"></i></div>
                                        <h5 class="font-weight-normal">Total Experts</h5>
                                        <h2 class="counter mb-0">1765</h2>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="counter-status status md-mb-0">
                                        <div class="counter-icon text-primary"><i class="fas fa-globe"></i></div>
                                        <h5 class="font-weight-normal">Total Countries</h5>
                                        <h2 class="counter mb-0">1846</h2>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="counter-status status">
                                        <div class="counter-icon text-success"><i class="far fa-smile"></i></div>
                                        <h5 class="font-weight-normal">Happy Customers</h5>
                                        <h2 class="counter mb-0">7253</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--/Statistics-->
            <!--Section-->
            <section class="sptb">
                <div class="container">
                    <div class="section-title center-block text-center">
                        <h2>Latest Articles</h2>
                        <p>Excepteur sint occaecat cupidatat proident deserunt mollit laborum</p>
                    </div>
                    <div class="row">
                        @foreach ($blogs as $item)
                            <div class="col-lg-4 col-md-12 col-xl-4">
                                <div class="card">
                                    <div class="item7-card-img"><a href="javascript:void(0);"></a> 
                                    <!-- <img src="{{ asset('frontend/images/photos/1.jpg') }}" alt="img" class="cover-image" /> -->
                                    <img src="{{ asset('frontend/images/1.jpg') }}" alt="img" class="cover-image" />
                                </div>
                                    <div class="card-body p-4">
                                        <a href="javascript:void(0);" class="text-dark"><h4>{{$item->title}}</h4></a>
                                        <p class="fs-13 text-muted">{{$item->sub_title}}</p>
                                        <p>{!! $item->description !!}</p>
                                        <div class="d-flex">
                                            <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="likes"><i class="far fa-heart text-muted d-inline-block me-2"></i>0</a>
                                            <div class="ms-auto">
                                                <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="share" data-bs-original-title="share"><i class="fas fa-share-alt text-muted me-2"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach 
                        
                    </div>
                </div>
            </section>
            <!--/Section-->
            <!--Section-->
            <section class="sptb position-relative pattern">
                <div class="container">
                    <div class="section-title center-block text-center">
                        <h2 class="text-white position-relative">Testimonials</h2>
                        <p class="text-white position-relative">Excepteur sint occaecat cupidatat proident deserunt mollit laborum</p>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="owl-carousel testimonial-owl-carousel owl-loaded owl-drag" id="myCarousel">
                                <div class="owl-stage-outer">
                                    <div class="owl-stage" style="transform: translate3d(-2402px, 0px, 0px); transition: all; width: 8407px;">
                                        <div class="owl-item cloned" style="width: 1176px; margin-right: 25px;">
                                            <div class="item text-center">
                                                <div class="row">
                                                    <div class="col-xl-8 col-md-12 d-block mx-auto">
                                                        <div class="testimonia">
                                                            <div class="testimonia-data">
                                                                <div class="owl-controls clickable">
                                                                    <div class="owl-pagination">
                                                                        <div class="owl-page"><span class=""></span></div>
                                                                        <div class="owl-page active"><span class=""></span></div>
                                                                        <div class="owl-page"><span class=""></span></div>
                                                                    </div>
                                                                </div>
                                                                <h3 class="title">williamson</h3>
                                                                <div class="rating-stars mb-3">
                                                                    <input class="rating-value star" name="rating-stars-value" readonly="readonly" type="number" value="3" />
                                                                    <div class="rating-stars-container">
                                                                        <div class="rating-star sm is--active"><i class="fa fa-star"></i></div>
                                                                        <div class="rating-star sm is--active"><i class="fa fa-star"></i></div>
                                                                        <div class="rating-star sm is--active"><i class="fa fa-star"></i></div>
                                                                        <div class="rating-star sm"><i class="fa fa-star"></i></div>
                                                                        <div class="rating-star sm"><i class="fa fa-star"></i></div>
                                                                    </div>
                                                                </div>
                                                                <p class="text-white-80">
                                                                    <i class="fa fa-quote-left"></i> Duis aute irure reprehenderit quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione
                                                                    voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut
                                                                    labore.
                                                                </p>
                                                            </div>
                                                            <a href="testimonial.html" class="btn btn-secondary btn-lg">View all Testimonials</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item cloned" style="width: 1176px; margin-right: 25px;">
                                            <div class="item text-center">
                                                <div class="row">
                                                    <div class="col-xl-8 col-md-12 d-block mx-auto">
                                                        <div class="testimonia">
                                                            <div class="owl-controls clickable">
                                                                <div class="owl-pagination">
                                                                    <div class="owl-page"><span class=""></span></div>
                                                                    <div class="owl-page"><span class=""></span></div>
                                                                    <div class="owl-page active"><span class=""></span></div>
                                                                </div>
                                                            </div>
                                                            <div class="testimonia-data">
                                                                <h3 class="title">Sophie Carr</h3>
                                                                <div class="rating-stars mb-3">
                                                                    <input class="rating-value star" name="rating-stars-value" readonly="readonly" type="number" value="3" />
                                                                    <div class="rating-stars-container">
                                                                        <div class="rating-star sm is--active"><i class="fa fa-star"></i></div>
                                                                        <div class="rating-star sm is--active"><i class="fa fa-star"></i></div>
                                                                        <div class="rating-star sm is--active"><i class="fa fa-star"></i></div>
                                                                        <div class="rating-star sm"><i class="fa fa-star"></i></div>
                                                                        <div class="rating-star sm"><i class="fa fa-star"></i></div>
                                                                    </div>
                                                                </div>
                                                                <p class="text-white-80">
                                                                    <i class="fa fa-quote-left"></i> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                                                                    non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. usantium doloremque laudantium.
                                                                </p>
                                                            </div>
                                                            <a href="testimonial.html" class="btn btn-secondary btn-lg">View all Testimonials</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item active" style="width: 1176px; margin-right: 25px;">
                                            <div class="item text-center">
                                                <div class="row">
                                                    <div class="col-xl-8 col-md-12 d-block mx-auto">
                                                        <div class="testimonia">
                                                            <div class="owl-controls clickable">
                                                                <div class="owl-pagination">
                                                                    <div class="owl-page active"><span class=""></span></div>
                                                                    <div class="owl-page"><span class=""></span></div>
                                                                    <div class="owl-page"><span class=""></span></div>
                                                                </div>
                                                            </div>
                                                            <h3 class="title">Elizabeth</h3>
                                                            <div class="rating-stars mb-3">
                                                                <input class="rating-value star" name="rating-stars-value" readonly="readonly" type="number" value="4" />
                                                                <div class="rating-stars-container">
                                                                    <div class="rating-star sm is--active"><i class="fa fa-star"></i></div>
                                                                    <div class="rating-star sm is--active"><i class="fa fa-star"></i></div>
                                                                    <div class="rating-star sm is--active"><i class="fa fa-star"></i></div>
                                                                    <div class="rating-star sm is--active"><i class="fa fa-star"></i></div>
                                                                    <div class="rating-star sm"><i class="fa fa-star"></i></div>
                                                                </div>
                                                            </div>
                                                            <p class="text-white-80">
                                                                <i class="fa fa-quote-left text-white-80"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos id officiis hic tenetur quae quaerat ad velit ab. Lorem ipsum
                                                                dolor sit amet, consectetur adipisicing elit. Dolore cum accusamus eveniet molestias voluptatum inventore laboriosam labore sit, aspernatur praesentium iste impedit quidem
                                                                dolor veniam.
                                                            </p>
                                                            <a href="testimonial.html" class="btn btn-secondary btn-lg">View all Testimonials</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item" style="width: 1176px; margin-right: 25px;">
                                            <div class="item text-center">
                                                <div class="row">
                                                    <div class="col-xl-8 col-md-12 d-block mx-auto">
                                                        <div class="testimonia">
                                                            <div class="testimonia-data">
                                                                <div class="owl-controls clickable">
                                                                    <div class="owl-pagination">
                                                                        <div class="owl-page"><span class=""></span></div>
                                                                        <div class="owl-page active"><span class=""></span></div>
                                                                        <div class="owl-page"><span class=""></span></div>
                                                                    </div>
                                                                </div>
                                                                <h3 class="title">williamson</h3>
                                                                <div class="rating-stars mb-3">
                                                                    <input class="rating-value star" name="rating-stars-value" readonly="readonly" type="number" value="3" />
                                                                    <div class="rating-stars-container">
                                                                        <div class="rating-star sm is--active"><i class="fa fa-star"></i></div>
                                                                        <div class="rating-star sm is--active"><i class="fa fa-star"></i></div>
                                                                        <div class="rating-star sm is--active"><i class="fa fa-star"></i></div>
                                                                        <div class="rating-star sm"><i class="fa fa-star"></i></div>
                                                                        <div class="rating-star sm"><i class="fa fa-star"></i></div>
                                                                    </div>
                                                                </div>
                                                                <p class="text-white-80">
                                                                    <i class="fa fa-quote-left"></i> Duis aute irure reprehenderit quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione
                                                                    voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut
                                                                    labore.
                                                                </p>
                                                            </div>
                                                            <a href="testimonial.html" class="btn btn-secondary btn-lg">View all Testimonials</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item" style="width: 1176px; margin-right: 25px;">
                                            <div class="item text-center">
                                                <div class="row">
                                                    <div class="col-xl-8 col-md-12 d-block mx-auto">
                                                        <div class="testimonia">
                                                            <div class="owl-controls clickable">
                                                                <div class="owl-pagination">
                                                                    <div class="owl-page"><span class=""></span></div>
                                                                    <div class="owl-page"><span class=""></span></div>
                                                                    <div class="owl-page active"><span class=""></span></div>
                                                                </div>
                                                            </div>
                                                            <div class="testimonia-data">
                                                                <h3 class="title">Sophie Carr</h3>
                                                                <div class="rating-stars mb-3">
                                                                    <input class="rating-value star" name="rating-stars-value" readonly="readonly" type="number" value="3" />
                                                                    <div class="rating-stars-container">
                                                                        <div class="rating-star sm is--active"><i class="fa fa-star"></i></div>
                                                                        <div class="rating-star sm is--active"><i class="fa fa-star"></i></div>
                                                                        <div class="rating-star sm is--active"><i class="fa fa-star"></i></div>
                                                                        <div class="rating-star sm"><i class="fa fa-star"></i></div>
                                                                        <div class="rating-star sm"><i class="fa fa-star"></i></div>
                                                                    </div>
                                                                </div>
                                                                <p class="text-white-80">
                                                                    <i class="fa fa-quote-left"></i> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                                                                    non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. usantium doloremque laudantium.
                                                                </p>
                                                            </div>
                                                            <a href="testimonial.html" class="btn btn-secondary btn-lg">View all Testimonials</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item cloned" style="width: 1176px; margin-right: 25px;">
                                            <div class="item text-center">
                                                <div class="row">
                                                    <div class="col-xl-8 col-md-12 d-block mx-auto">
                                                        <div class="testimonia">
                                                            <div class="owl-controls clickable">
                                                                <div class="owl-pagination">
                                                                    <div class="owl-page active"><span class=""></span></div>
                                                                    <div class="owl-page"><span class=""></span></div>
                                                                    <div class="owl-page"><span class=""></span></div>
                                                                </div>
                                                            </div>
                                                            <h3 class="title">Elizabeth</h3>
                                                            <div class="rating-stars mb-3">
                                                                <input class="rating-value star" name="rating-stars-value" readonly="readonly" type="number" value="4" />
                                                                <div class="rating-stars-container">
                                                                    <div class="rating-star sm is--active"><i class="fa fa-star"></i></div>
                                                                    <div class="rating-star sm is--active"><i class="fa fa-star"></i></div>
                                                                    <div class="rating-star sm is--active"><i class="fa fa-star"></i></div>
                                                                    <div class="rating-star sm is--active"><i class="fa fa-star"></i></div>
                                                                    <div class="rating-star sm"><i class="fa fa-star"></i></div>
                                                                </div>
                                                            </div>
                                                            <p class="text-white-80">
                                                                <i class="fa fa-quote-left text-white-80"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos id officiis hic tenetur quae quaerat ad velit ab. Lorem ipsum
                                                                dolor sit amet, consectetur adipisicing elit. Dolore cum accusamus eveniet molestias voluptatum inventore laboriosam labore sit, aspernatur praesentium iste impedit quidem
                                                                dolor veniam.
                                                            </p>
                                                            <a href="testimonial.html" class="btn btn-secondary btn-lg">View all Testimonials</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item cloned" style="width: 1176px; margin-right: 25px;">
                                            <div class="item text-center">
                                                <div class="row">
                                                    <div class="col-xl-8 col-md-12 d-block mx-auto">
                                                        <div class="testimonia">
                                                            <div class="testimonia-data">
                                                                <div class="owl-controls clickable">
                                                                    <div class="owl-pagination">
                                                                        <div class="owl-page"><span class=""></span></div>
                                                                        <div class="owl-page active"><span class=""></span></div>
                                                                        <div class="owl-page"><span class=""></span></div>
                                                                    </div>
                                                                </div>
                                                                <h3 class="title">williamson</h3>
                                                                <div class="rating-stars mb-3">
                                                                    <input class="rating-value star" name="rating-stars-value" readonly="readonly" type="number" value="3" />
                                                                    <div class="rating-stars-container">
                                                                        <div class="rating-star sm is--active"><i class="fa fa-star"></i></div>
                                                                        <div class="rating-star sm is--active"><i class="fa fa-star"></i></div>
                                                                        <div class="rating-star sm is--active"><i class="fa fa-star"></i></div>
                                                                        <div class="rating-star sm"><i class="fa fa-star"></i></div>
                                                                        <div class="rating-star sm"><i class="fa fa-star"></i></div>
                                                                    </div>
                                                                </div>
                                                                <p class="text-white-80">
                                                                    <i class="fa fa-quote-left"></i> Duis aute irure reprehenderit quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione
                                                                    voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut
                                                                    labore.
                                                                </p>
                                                            </div>
                                                            <a href="testimonial.html" class="btn btn-secondary btn-lg">View all Testimonials</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-nav">
                                    <button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button>
                                </div>
                                <div class="owl-dots disabled"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--/Section-->
            <!--Section-->
            <section class="sptb d-none">
                <div class="container">
                    <div class="section-title center-block text-center">
                        <h2>Our Clinets</h2>
                        <p>Excepteur sint occaecat cupidatat proident deserunt mollit laborum</p>
                    </div>
                    <div id="small-categories" class="owl-carousel client-carousel owl-loaded owl-drag">
                        <div class="owl-stage-outer">
                            <div class="owl-stage" style="transform: translate3d(-2642px, 0px, 0px); transition: 0.25s; width: 4324px;">
                                <div class="owl-item cloned" style="width: 215.2px; margin-right: 25px;">
                                    <div class="item">
                                        <div class="client-img"><img src="https://www.spruko.com/demo/medz/Medz/assets/images/clients/4.png" alt="img" /></div>
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 215.2px; margin-right: 25px;">
                                    <div class="item">
                                        <div class="client-img"><img src="https://www.spruko.com/demo/medz/Medz/assets/images/clients/5.png" alt="img" /></div>
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 215.2px; margin-right: 25px;">
                                    <div class="item">
                                        <div class="client-img"><img src="https://www.spruko.com/demo/medz/Medz/assets/images/clients/6.png" alt="img" /></div>
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 215.2px; margin-right: 25px;">
                                    <div class="item">
                                        <div class="client-img"><img src="https://www.spruko.com/demo/medz/Medz/assets/images/clients/7.png" alt="img" /></div>
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 215.2px; margin-right: 25px;">
                                    <div class="item">
                                        <div class="client-img"><img src="https://www.spruko.com/demo/medz/Medz/assets/images/clients/8.png" alt="img" /></div>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 215.2px; margin-right: 25px;">
                                    <div class="item">
                                        <div class="client-img"><img src="https://www.spruko.com/demo/medz/Medz/assets/images/clients/1.png" alt="img" /></div>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 215.2px; margin-right: 25px;">
                                    <div class="item">
                                        <div class="client-img"><img src="https://www.spruko.com/demo/medz/Medz/assets/images/clients/2.png" alt="img" /></div>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 215.2px; margin-right: 25px;">
                                    <div class="item">
                                        <div class="client-img"><img src="https://www.spruko.com/demo/medz/Medz/assets/images/clients/3.png" alt="img" /></div>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 215.2px; margin-right: 25px;">
                                    <div class="item">
                                        <div class="client-img"><img src="https://www.spruko.com/demo/medz/Medz/assets/images/clients/4.png" alt="img" /></div>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 215.2px; margin-right: 25px;">
                                    <div class="item">
                                        <div class="client-img"><img src="https://www.spruko.com/demo/medz/Medz/assets/images/clients/5.png" alt="img" /></div>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 215.2px; margin-right: 25px;">
                                    <div class="item">
                                        <div class="client-img"><img src="https://www.spruko.com/demo/medz/Medz/assets/images/clients/6.png" alt="img" /></div>
                                    </div>
                                </div>
                                <div class="owl-item active" style="width: 215.2px; margin-right: 25px;">
                                    <div class="item">
                                        <div class="client-img"><img src="https://www.spruko.com/demo/medz/Medz/assets/images/clients/7.png" alt="img" /></div>
                                    </div>
                                </div>
                                <div class="owl-item active" style="width: 215.2px; margin-right: 25px;">
                                    <div class="item">
                                        <div class="client-img"><img src="https://www.spruko.com/demo/medz/Medz/assets/images/clients/8.png" alt="img" /></div>
                                    </div>
                                </div>
                                <div class="owl-item cloned active" style="width: 215.2px; margin-right: 25px;">
                                    <div class="item">
                                        <div class="client-img"><img src="https://www.spruko.com/demo/medz/Medz/assets/images/clients/1.png" alt="img" /></div>
                                    </div>
                                </div>
                                <div class="owl-item cloned active" style="width: 215.2px; margin-right: 25px;">
                                    <div class="item">
                                        <div class="client-img"><img src="https://www.spruko.com/demo/medz/Medz/assets/images/clients/2.png" alt="img" /></div>
                                    </div>
                                </div>
                                <div class="owl-item cloned active" style="width: 215.2px; margin-right: 25px;">
                                    <div class="item">
                                        <div class="client-img"><img src="https://www.spruko.com/demo/medz/Medz/assets/images/clients/3.png" alt="img" /></div>
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 215.2px; margin-right: 25px;">
                                    <div class="item">
                                        <div class="client-img"><img src="https://www.spruko.com/demo/medz/Medz/assets/images/clients/4.png" alt="img" /></div>
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 215.2px; margin-right: 25px;">
                                    <div class="item">
                                        <div class="client-img"><img src="https://www.spruko.com/demo/medz/Medz/assets/images/clients/5.png" alt="img" /></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-nav disabled">
                            <button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button>
                        </div>
                        <div class="owl-dots disabled"></div>
                    </div>
                </div>
            </section>
            <!--/Section-->
            <!--Section-->
            <section class="sptb section-bg d-none">
                <div class="container">
                    <div class="section-title center-block text-center">
                        <h2>Best Rated Locations</h2>
                        <p>Excepteur sint occaecat cupidatat proident deserunt mollit laborum</p>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-12 col-lg-12 col-xl-6">
                            <div class="row">
                                <div class="col-sm-12 col-lg-6 col-md-6">
                                    <div class="item-card overflow-hidden">
                                        <div class="item-card-desc">
                                            <a href="javascript:void(0);"></a>
                                            <div class="card overflow-hidden border-0">
                                                <div class="card-img"><img src="{{ asset('frontend/images/3.jpg') }}" alt="img" class="cover-image" /></div>
                                                <div class="item-tags">
                                                    <div class="bg-secondary tag-option"><i class="fa fa fa-heart-o me-1"></i> 689</div>
                                                </div>
                                                <div class="item-card-text">
                                                    <h4 class="">
                                                        44,327<span class="item-subtext"><i class="fa fa-map-marker me-1 text-secondary"></i>GERMANY</span>
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-lg-6 col-md-6">
                                    <div class="item-card overflow-hidden">
                                        <div class="item-card-desc">
                                            <a href="javascript:void(0);"></a>
                                            <div class="card overflow-hidden border-0">
                                                <div class="card-img"><img src="{{ asset('frontend/images/6_1.jpg') }}" alt="img" class="cover-image" /></div>
                                                <div class="item-tags">
                                                    <div class="bg-secondary tag-option"><i class="fa fa fa-heart-o me-1"></i> 491</div>
                                                </div>
                                                <div class="item-card-text">
                                                    <h4 class="">
                                                        52,145<span class="item-subtext"><i class="fa fa-map-marker me-1 text-secondary"></i> LONDON</span>
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-lg-6 col-md-6">
                                    <div class="item-card overflow-hidden">
                                        <div class="item-card-desc">
                                            <a href="javascript:void(0);"></a>
                                            <div class="card overflow-hidden border-0">
                                                <div class="card-img"><img src="{{ asset('frontend/images/1_1.jpg') }}" alt="img" class="cover-image" /></div>
                                                <div class="item-tags">
                                                    <div class="bg-secondary tag-option"><i class="fa fa fa-heart-o me-1"></i> 729</div>
                                                </div>
                                                <div class="item-card-text">
                                                    <h4 class="">
                                                        63,263<span class="item-subtext"><i class="fa fa-map-marker text-secondary me-1"></i>AUSTERLIA</span>
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-lg-6 col-md-6">
                                    <div class="item-card overflow-hidden">
                                        <div class="item-card-desc">
                                            <a href="javascript:void(0);"></a>
                                            <div class="card overflow-hidden border-0">
                                                <div class="card-img"><img src="{{ asset('frontend/images/2_1.jpg') }}" alt="img" class="cover-image" /></div>
                                                <div class="item-tags">
                                                    <div class="bg-secondary tag-option"><i class="fa fa fa-heart-o me-1"></i> 567</div>
                                                </div>
                                                <div class="item-card-text">
                                                    <h4 class="">
                                                        36,485<span class="item-subtext"><i class="fa fa-map-marker text-secondary me-1"></i>CHICAGO</span>
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-12 col-lg-12 col-xl-6">
                            <div class="row">
                                <div class="col-lg-6 col-xl-6 col-md-6">
                                    <div class="item-card overflow-hidden">
                                        <div class="item-card-desc">
                                            <a href="javascript:void(0);"></a>
                                            <div class="card overflow-hidden border-0">
                                                <div class="card-img"><img src="{{ asset('frontend/images/8.jpg') }}" alt="img" class="cover-image" /></div>
                                                <div class="item-tags">
                                                    <div class="bg-secondary tag-option"><i class="fa fa fa-heart-o me-1"></i> 209</div>
                                                </div>
                                                <div class="item-card-text">
                                                    <h4 class="">
                                                        64,825<span class="item-subtext"><i class="fa fa-map-marker text-secondary me-1"></i>WASHINGTON</span>
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 col-xl-6">
                                    <div class="item-card overflow-hidden">
                                        <div class="item-card-desc">
                                            <a href="javascript:void(0);"></a>
                                            <div class="card overflow-hidden border-0">
                                                <div class="card-img"><img src="{{ asset('frontend/images/5_2.jpg') }}" alt="img" class="cover-image" /></div>
                                                <div class="item-tags">
                                                    <div class="bg-secondary tag-option"><i class="fa fa fa-heart-o me-1"></i> 567</div>
                                                </div>
                                                <div class="item-card-text">
                                                    <h4 class="">
                                                        73,5345<span class="item-subtext"><i class="fa fa-map-marker text-secondary me-1"></i>JAPAN</span>
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-xl-12">
                                    <div class="item-card overflow-hidden">
                                        <div class="item-card-desc">
                                            <a href="javascript:void(0);"></a>
                                            <div class="card overflow-hidden border-0">
                                                <div class="card-img"><img src="{{ asset('frontend/images/7.jpg') }}" alt="img" class="cover-image" /></div>
                                                <div class="item-tags">
                                                    <div class="bg-secondary tag-option"><i class="fa fa fa-heart-o me-1"></i> 567</div>
                                                </div>
                                                <div class="item-card-text">
                                                    <h4 class="">
                                                        64,825<span class="item-subtext"><i class="fa fa-map-marker text-secondary me-1"></i>CANADA</span>
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--Section-->
            <!--Section-->
            <section class="sptb d-none">
                <div class="container">
                    <div class="section-title center-block text-center">
                        <h2>News &amp; Latest Posts</h2>
                        <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                    </div>
                    <div id="defaultCarousel" class="owl-carousel Card-owlcarousel owl-carousel-icons owl-loaded owl-drag">
                        <div class="owl-stage-outer">
                            <div class="owl-stage" style="transform: translate3d(-1200px, 0px, 0px); transition: 0.25s; width: 4804px;">
                                <div class="owl-item cloned" style="width: 375.333px; margin-right: 25px;">
                                    <div class="item">
                                        <div class="card">
                                            <div class="item7-card-img"><a href="javascript:void(0);"></a> <img src="{{ asset('frontend/images/14.jpg') }}" alt="img" class="cover-image" /></div>
                                            <div class="card-body p-4">
                                                <div class="item7-card-desc d-flex mb-2">
                                                    <a href="javascript:void(0);"><i class="fa fa-calendar-o text-muted me-2"></i>Dec-03-2019</a>
                                                    <div class="ms-auto">
                                                        <a href="javascript:void(0);"><i class="fa fa-comment-o text-muted me-2"></i>4 Comments</a>
                                                    </div>
                                                </div>
                                                <a href="blog-details.html" class="text-dark"><h4 class="font-weight-semibold">Et harum quidem rerum facilis est</h4></a>
                                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum</p>
                                                <div class="d-flex align-items-center pt-2 mt-auto">
                                                    <img  src="{{ asset('frontend/images/12.jpg') }}" class="avatar brround avatar-md me-3" alt="avatar-img" />
                                                    <div><a href="profile.html" class="text-default">Royal Hamblin</a> <small class="d-block text-muted">10 days ago</small></div>
                                                    <div class="ms-auto text-muted">
                                                        <a href="javascript:void(0)" class="icon d-none d-md-inline-block ms-3"><i class="fe fe-heart me-1"></i></a>
                                                        <a href="javascript:void(0)" class="icon d-none d-md-inline-block ms-3"><i class="fa fa-thumbs-o-up"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 375.333px; margin-right: 25px;">
                                    <div class="item">
                                        <div class="card">
                                            <div class="item7-card-img"><a href="javascript:void(0);"></a> <img src="{{ asset('frontend/images/15.jpg') }}" alt="img" class="cover-image" /></div>
                                            <div class="card-body p-4">
                                                <div class="item7-card-desc d-flex mb-2">
                                                    <a href="javascript:void(0);"><i class="fa fa-calendar-o text-muted me-2"></i>Nov-28-2019</a>
                                                    <div class="ms-auto">
                                                        <a href="javascript:void(0);"><i class="fa fa-comment-o text-muted me-2"></i>2 Comments</a>
                                                    </div>
                                                </div>
                                                <a href="blog-details.html" class="text-dark"><h4 class="font-weight-semibold">Sed ut perspiciatis unde omnis iste</h4></a>
                                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum</p>
                                                <div class="d-flex align-items-center pt-2 mt-auto">
                                                    <img  src="{{ asset('frontend/images/5.jpg') }}" class="avatar brround avatar-md me-3" alt="avatar-img" />
                                                    <div><a href="profile.html" class="text-default">Rosita Chatmon</a> <small class="d-block text-muted">10 days ago</small></div>
                                                    <div class="ms-auto text-muted">
                                                        <a href="javascript:void(0)" class="icon d-none d-md-inline-block ms-3"><i class="fe fe-heart me-1"></i></a>
                                                        <a href="javascript:void(0)" class="icon d-none d-md-inline-block ms-3"><i class="fa fa-thumbs-o-up"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 375.333px; margin-right: 25px;">
                                    <div class="item">
                                        <div class="card">
                                            <div class="item7-card-img"><a href="javascript:void(0);"></a> <img src="{{ asset('frontend/images/16.jpg') }}" alt="img" class="cover-image" /></div>
                                            <div class="card-body p-4">
                                                <div class="item7-card-desc d-flex mb-2">
                                                    <a href="javascript:void(0);"><i class="fa fa-calendar-o text-muted me-2"></i>Nov-19-2019</a>
                                                    <div class="ms-auto">
                                                        <a href="javascript:void(0);"><i class="fa fa-comment-o text-muted me-2"></i>8 Comments</a>
                                                    </div>
                                                </div>
                                                <a href="blog-details.html" class="text-dark"><h4 class="font-weight-semibold">At vero eos et accusamus et iusto</h4></a>
                                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum</p>
                                                <div class="d-flex align-items-center pt-2 mt-auto">
                                                    <img src="https://www.spruko.com/demo/medz/Medz/assets/images/users/male/6.jpg') }}" class="avatar brround avatar-md me-3" alt="avatar-img" />
                                                    <div><a href="profile.html" class="text-default">Loyd Nolf</a> <small class="d-block text-muted">15 days ago</small></div>
                                                    <div class="ms-auto text-muted">
                                                        <a href="javascript:void(0)" class="icon d-none d-md-inline-block ms-3"><i class="fe fe-heart me-1"></i></a>
                                                        <a href="javascript:void(0)" class="icon d-none d-md-inline-block ms-3"><i class="fa fa-thumbs-o-up"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item active" style="width: 375.333px; margin-right: 25px;">
                                    <div class="item">
                                        <div class="card">
                                            <div class="item7-card-img"><a href="javascript:void(0);"></a> <img src="{{ asset('frontend/images/11.jpg') }}" alt="img" class="cover-image" /></div>
                                            <div class="card-body p-4">
                                                <div class="item7-card-desc d-flex mb-2">
                                                    <a href="javascript:void(0);"><i class="fa fa-calendar-o text-muted me-2"></i>Dec-03-2019</a>
                                                    <div class="ms-auto">
                                                        <a href="javascript:void(0);"><i class="fa fa-comment-o text-muted me-2"></i>4 Comments</a>
                                                    </div>
                                                </div>
                                                <a href="blog-details.html" class="text-dark"><h4>Duis aute irure reprehenderit</h4></a>
                                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum</p>
                                                <div class="d-flex align-items-center pt-2 mt-auto">
                                                    <img  src="{{ asset('frontend/images/5.jpg') }}" class="avatar brround avatar-md me-3" alt="avatar-img" />
                                                    <div><a href="profile.html" class="text-default">Joanne Nash</a> <small class="d-block text-muted">1 day ago</small></div>
                                                    <div class="ms-auto text-muted">
                                                        <a href="javascript:void(0)" class="icon d-none d-md-inline-block ms-3"><i class="fe fe-heart me-1"></i></a>
                                                        <a href="javascript:void(0)" class="icon d-none d-md-inline-block ms-3"><i class="fa fa-thumbs-o-up"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item active" style="width: 375.333px; margin-right: 25px;">
                                    <div class="item">
                                        <div class="card">
                                            <div class="item7-card-img"><a href="javascript:void(0);"></a> <img src="{{ asset('frontend/images/12.jpg') }}" alt="img" class="cover-image" /></div>
                                            <div class="card-body p-4">
                                                <div class="item7-card-desc d-flex mb-2">
                                                    <a href="javascript:void(0);"><i class="fa fa-calendar-o text-muted me-2"></i>Nov-28-2019</a>
                                                    <div class="ms-auto">
                                                        <a href="javascript:void(0);"><i class="fa fa-comment-o text-muted me-2"></i>2 Comments</a>
                                                    </div>
                                                </div>
                                                <a href="blog-details.html" class="text-dark"><h4>Nam libero tempore soluta</h4></a>
                                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum</p>
                                                <div class="d-flex align-items-center pt-2 mt-auto">
                                                    <img  src="{{ asset('frontend/images/7.jpg') }}" class="avatar brround avatar-md me-3" alt="avatar-img" />
                                                    <div><a href="profile.html" class="text-default">Tanner Mallari</a> <small class="d-block text-muted">2 days ago</small></div>
                                                    <div class="ms-auto text-muted">
                                                        <a href="javascript:void(0)" class="icon d-none d-md-inline-block ms-3"><i class="fe fe-heart me-1"></i></a>
                                                        <a href="javascript:void(0)" class="icon d-none d-md-inline-block ms-3"><i class="fa fa-thumbs-o-up"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item active" style="width: 375.333px; margin-right: 25px;">
                                    <div class="item">
                                        <div class="card">
                                            <div class="item7-card-img"><a href="javascript:void(0);"></a> <img src="{{ asset('frontend/images/13.jpg') }}" alt="img" class="cover-image" /></div>
                                            <div class="card-body p-4">
                                                <div class="item7-card-desc d-flex mb-2">
                                                    <a href="javascript:void(0);"><i class="fa fa-calendar-o text-muted me-2"></i>Nov-19-2019</a>
                                                    <div class="ms-auto">
                                                        <a href="javascript:void(0);"><i class="fa fa-comment-o text-muted me-2"></i>8 Comments</a>
                                                    </div>
                                                </div>
                                                <a href="blog-details.html" class="text-dark"><h4>At vero eos et accusamus et iusto</h4></a>
                                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum</p>
                                                <div class="d-flex align-items-center pt-2 mt-auto">
                                                    <img  src="{{ asset('frontend/images/12.jpg') }}" class="avatar brround avatar-md me-3" alt="avatar-img" />
                                                    <div><a href="profile.html" class="text-default">Aracely Bashore</a> <small class="d-block text-muted">5 days ago</small></div>
                                                    <div class="ms-auto text-muted">
                                                        <a href="javascript:void(0)" class="icon d-none d-md-inline-block ms-3"><i class="fe fe-heart me-1"></i></a>
                                                        <a href="javascript:void(0)" class="icon d-none d-md-inline-block ms-3"><i class="fa fa-thumbs-o-up"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 375.333px; margin-right: 25px;">
                                    <div class="item">
                                        <div class="card">
                                            <div class="item7-card-img"><a href="javascript:void(0);"></a> <img src="{{ asset('frontend/images/14.jpg') }}" alt="img" class="cover-image" /></div>
                                            <div class="card-body p-4">
                                                <div class="item7-card-desc d-flex mb-2">
                                                    <a href="javascript:void(0);"><i class="fa fa-calendar-o text-muted me-2"></i>Dec-03-2019</a>
                                                    <div class="ms-auto">
                                                        <a href="javascript:void(0);"><i class="fa fa-comment-o text-muted me-2"></i>4 Comments</a>
                                                    </div>
                                                </div>
                                                <a href="blog-details.html" class="text-dark"><h4 class="font-weight-semibold">Et harum quidem rerum facilis est</h4></a>
                                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum</p>
                                                <div class="d-flex align-items-center pt-2 mt-auto">
                                                    <img src="https://www.spruko.com/demo/medz/Medz/assets/images/users/male/12.jpg') }}" class="avatar brround avatar-md me-3" alt="avatar-img" />
                                                    <div><a href="profile.html" class="text-default">Royal Hamblin</a> <small class="d-block text-muted">10 days ago</small></div>
                                                    <div class="ms-auto text-muted">
                                                        <a href="javascript:void(0)" class="icon d-none d-md-inline-block ms-3"><i class="fe fe-heart me-1"></i></a>
                                                        <a href="javascript:void(0)" class="icon d-none d-md-inline-block ms-3"><i class="fa fa-thumbs-o-up"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 375.333px; margin-right: 25px;">
                                    <div class="item">
                                        <div class="card">
                                            <div class="item7-card-img"><a href="javascript:void(0);"></a> <img src="{{ asset('frontend/images/15.jpg') }}" alt="img" class="cover-image" /></div>
                                            <div class="card-body p-4">
                                                <div class="item7-card-desc d-flex mb-2">
                                                    <a href="javascript:void(0);"><i class="fa fa-calendar-o text-muted me-2"></i>Nov-28-2019</a>
                                                    <div class="ms-auto">
                                                        <a href="javascript:void(0);"><i class="fa fa-comment-o text-muted me-2"></i>2 Comments</a>
                                                    </div>
                                                </div>
                                                <a href="blog-details.html" class="text-dark"><h4 class="font-weight-semibold">Sed ut perspiciatis unde omnis iste</h4></a>
                                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum</p>
                                                <div class="d-flex align-items-center pt-2 mt-auto">
                                                    <img  src="{{ asset('frontend/images/5.jpg') }}" class="avatar brround avatar-md me-3" alt="avatar-img" />
                                                    <div><a href="profile.html" class="text-default">Rosita Chatmon</a> <small class="d-block text-muted">10 days ago</small></div>
                                                    <div class="ms-auto text-muted">
                                                        <a href="javascript:void(0)" class="icon d-none d-md-inline-block ms-3"><i class="fe fe-heart me-1"></i></a>
                                                        <a href="javascript:void(0)" class="icon d-none d-md-inline-block ms-3"><i class="fa fa-thumbs-o-up"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 375.333px; margin-right: 25px;">
                                    <div class="item">
                                        <div class="card">
                                            <div class="item7-card-img"><a href="javascript:void(0);"></a> <img src="{{ asset('frontend/images/16.jpg') }}" alt="img" class="cover-image" /></div>
                                            <div class="card-body p-4">
                                                <div class="item7-card-desc d-flex mb-2">
                                                    <a href="javascript:void(0);"><i class="fa fa-calendar-o text-muted me-2"></i>Nov-19-2019</a>
                                                    <div class="ms-auto">
                                                        <a href="javascript:void(0);"><i class="fa fa-comment-o text-muted me-2"></i>8 Comments</a>
                                                    </div>
                                                </div>
                                                <a href="blog-details.html" class="text-dark"><h4 class="font-weight-semibold">At vero eos et accusamus et iusto</h4></a>
                                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum</p>
                                                <div class="d-flex align-items-center pt-2 mt-auto">
                                                    <img  src="{{ asset('frontend/images/6.jpg') }}" class="avatar brround avatar-md me-3" alt="avatar-img" />
                                                    <div><a href="profile.html" class="text-default">Loyd Nolf</a> <small class="d-block text-muted">15 days ago</small></div>
                                                    <div class="ms-auto text-muted">
                                                        <a href="javascript:void(0)" class="icon d-none d-md-inline-block ms-3"><i class="fe fe-heart me-1"></i></a>
                                                        <a href="javascript:void(0)" class="icon d-none d-md-inline-block ms-3"><i class="fa fa-thumbs-o-up"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 375.333px; margin-right: 25px;">
                                    <div class="item">
                                        <div class="card">
                                            <div class="item7-card-img"><a href="javascript:void(0);"></a> <img src="{{ asset('frontend/images/11.jpg') }}" alt="img" class="cover-image" /></div>
                                            <div class="card-body p-4">
                                                <div class="item7-card-desc d-flex mb-2">
                                                    <a href="javascript:void(0);"><i class="fa fa-calendar-o text-muted me-2"></i>Dec-03-2019</a>
                                                    <div class="ms-auto">
                                                        <a href="javascript:void(0);"><i class="fa fa-comment-o text-muted me-2"></i>4 Comments</a>
                                                    </div>
                                                </div>
                                                <a href="blog-details.html" class="text-dark"><h4>Duis aute irure reprehenderit</h4></a>
                                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum</p>
                                                <div class="d-flex align-items-center pt-2 mt-auto">
                                                    <img  src="{{ asset('frontend/images/5.jpg') }}" class="avatar brround avatar-md me-3" alt="avatar-img" />
                                                    <div><a href="profile.html" class="text-default">Joanne Nash</a> <small class="d-block text-muted">1 day ago</small></div>
                                                    <div class="ms-auto text-muted">
                                                        <a href="javascript:void(0)" class="icon d-none d-md-inline-block ms-3"><i class="fe fe-heart me-1"></i></a>
                                                        <a href="javascript:void(0)" class="icon d-none d-md-inline-block ms-3"><i class="fa fa-thumbs-o-up"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 375.333px; margin-right: 25px;">
                                    <div class="item">
                                        <div class="card">
                                            <div class="item7-card-img"><a href="javascript:void(0);"></a> <img src="{{ asset('frontend/images/12.jpg') }}" alt="img" class="cover-image" /></div>
                                            <div class="card-body p-4">
                                                <div class="item7-card-desc d-flex mb-2">
                                                    <a href="javascript:void(0);"><i class="fa fa-calendar-o text-muted me-2"></i>Nov-28-2019</a>
                                                    <div class="ms-auto">
                                                        <a href="javascript:void(0);"><i class="fa fa-comment-o text-muted me-2"></i>2 Comments</a>
                                                    </div>
                                                </div>
                                                <a href="blog-details.html" class="text-dark"><h4>Nam libero tempore soluta</h4></a>
                                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum</p>
                                                <div class="d-flex align-items-center pt-2 mt-auto">
                                                    <img  src="{{ asset('frontend/images/7.jpg') }}" class="avatar brround avatar-md me-3" alt="avatar-img" />
                                                    <div><a href="profile.html" class="text-default">Tanner Mallari</a> <small class="d-block text-muted">2 days ago</small></div>
                                                    <div class="ms-auto text-muted">
                                                        <a href="javascript:void(0)" class="icon d-none d-md-inline-block ms-3"><i class="fe fe-heart me-1"></i></a>
                                                        <a href="javascript:void(0)" class="icon d-none d-md-inline-block ms-3"><i class="fa fa-thumbs-o-up"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 375.333px; margin-right: 25px;">
                                    <div class="item">
                                        <div class="card">
                                            <div class="item7-card-img"><a href="javascript:void(0);"></a> <img src="{{ asset('frontend/images/13.jpg') }}" alt="img" class="cover-image" /></div>
                                            <div class="card-body p-4">
                                                <div class="item7-card-desc d-flex mb-2">
                                                    <a href="javascript:void(0);"><i class="fa fa-calendar-o text-muted me-2"></i>Nov-19-2019</a>
                                                    <div class="ms-auto">
                                                        <a href="javascript:void(0);"><i class="fa fa-comment-o text-muted me-2"></i>8 Comments</a>
                                                    </div>
                                                </div>
                                                <a href="blog-details.html" class="text-dark"><h4>At vero eos et accusamus et iusto</h4></a>
                                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum</p>
                                                <div class="d-flex align-items-center pt-2 mt-auto">
                                                    <img  src="{{ asset('frontend/images/12.jpg') }}" class="avatar brround avatar-md me-3" alt="avatar-img" />
                                                    <div><a href="profile.html" class="text-default">Aracely Bashore</a> <small class="d-block text-muted">5 days ago</small></div>
                                                    <div class="ms-auto text-muted">
                                                        <a href="javascript:void(0)" class="icon d-none d-md-inline-block ms-3"><i class="fe fe-heart me-1"></i></a>
                                                        <a href="javascript:void(0)" class="icon d-none d-md-inline-block ms-3"><i class="fa fa-thumbs-o-up"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-nav">
                            <button type="button" role="presentation" class="owl-prev"><span aria-label="Previous"></span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button>
                        </div>
                        <div class="owl-dots disabled"></div>
                    </div>
                </div>
            </section>
            <!--/Section-->
            <!--Section-->
            <section class="sptb section-bg d-none">
                <div class="container">
                    <div class="section-title center-block text-center">
                        <h2>Download Apps</h2>
                        <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="text-center text-wrap">
                                <div class="btn-list">
                                    <a href="javascript:void(0);" class="btn btn-primary btn-lg mb-sm-0"><i class="fa fa-apple fa-1x me-2"></i> App Store</a>
                                    <a href="javascript:void(0);" class="btn btn-secondary btn-lg mb-sm-0"><i class="fa fa-android fa-1x me-2"></i> Google Play</a>
                                    <a href="javascript:void(0);" class="btn btn-info btn-lg mb-0"><i class="fa fa-windows fa-1x me-2"></i> Windows</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--/Section-->

@endsection