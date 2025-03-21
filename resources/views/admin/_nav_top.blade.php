
        <!-- Page Header Start-->
        <div class="header-wrapper col m-0">
          <div class="row">
            <form class="form-inline search-full col" action="#" method="get">
              <div class="form-group w-100">
                <div class="Typeahead Typeahead--twitterUsers">
                  <div class="u-posRelative">
                    <input class="demo-input Typeahead-input form-control-plaintext w-100" type="text" placeholder="Search Mofi .." name="q" title="" autofocus>
                    <div class="spinner-border Typeahead-spinner" role="status"><span class="sr-only">Loading...</span></div><i class="close-search" data-feather="x"></i>
                  </div>
                  <div class="Typeahead-menu"></div>
                </div>
              </div>
            </form>
            <div class="header-logo-wrapper col-auto p-0">
              <div class="logo-wrapper"><a href="index"><img class="img-fluid" src="{{asset('frontend/img/desktop_logo.png')}}" alt=""></a></div>
              <div class="toggle-sidebar">
                <svg class="stroke-icon sidebar-toggle status_toggle middle">
                  <use href="{{asset('frontend/img/desktop_logo.png')}}"></use>
                </svg>
              </div>
            </div>
            <div class="nav-right col-xxl-8 col-xl-6 col-md-7 col-8 pull-right right-header p-0 ms-auto">
              <ul class="nav-menus">
                {{-- <li>                         <span class="header-search">
                    <svg>
                      <use href="{{asset('backend/assets/svg/icon-sprite.svg#search')}}"></use>
                    </svg></span></li>
                <li>
                  <div class="form-group w-100">
                    <div class="Typeahead Typeahead--twitterUsers">
                      <div class="u-posRelative d-flex align-items-center">
                        <svg class="search-bg svg-color"> 
                          <use href="{{asset('backend/assets/svg/icon-sprite.svg#search')}}"></use>
                        </svg>
                        <input class="demo-input py-0 Typeahead-input form-control-plaintext w-100" type="text" placeholder="Search Mofi .." name="q" title="">
                      </div>
                    </div>
                  </div>
                </li>
                <li class="onhover-dropdown">
                  <div class="notification-box">
                    <svg>
                      <use href="{{asset('backend/assets/svg/icon-sprite.svg#notification')}}"></use>
                    </svg><span class="badge rounded-pill badge-primary">4 </span>
                  </div>
                  <div class="onhover-show-div notification-dropdown">
                    <h5 class="f-18 f-w-600 mb-0 dropdown-title">Notitications                               </h5>
                    <ul class="notification-box">
                      <li class="d-flex"> 
                        <div class="flex-shrink-0 bg-light-primary"><img src="{{asset('backend/assets/images/dashboard/icon/wallet.png')}}" alt="Wallet"></div>
                        <div class="flex-grow-1"> <a href="private-chat.html">
                            <h6>New daily offer added</h6></a>
                          <p>New user-only offer added</p>
                        </div>
                      </li>
                      <li class="d-flex"> 
                        <div class="flex-shrink-0 bg-light-info"><img src="{{asset('backend/assets/images/dashboard/icon/shield-dne.png')}}" alt="Shield-dne"></div>
                        <div class="flex-grow-1"> <a href="private-chat.html">
                            <h6>Product Evaluation</h6></a>
                          <p>Changed to a new workflow</p>
                        </div>
                      </li>
                      <li class="d-flex"> 
                        <div class="flex-shrink-0 bg-light-warning"><img src="{{asset('backend/assets/images/dashboard/icon/graph.png')}}" alt="Graph"></div>
                        <div class="flex-grow-1"> <a href="private-chat.html">
                            <h6>Return of a Product</h6></a>
                          <p>452 items were returned</p>
                        </div>
                      </li>
                      <li class="d-flex"> 
                        <div class="flex-shrink-0 bg-light-tertiary"><img src="{{asset('backend/assets/images/dashboard/icon/ticket-star.png')}}" alt="Ticket-star"></div>
                        <div class="flex-grow-1"> <a href="private-chat.html">
                            <h6>Recently Paid</h6></a>
                          <p>Mastercard payment of $343</p>
                        </div>
                      </li>
                      <li><a class="f-w-700" href="private-chat.html">Check all     </a></li>
                    </ul>
                  </div>
                </li>
                <li class="onhover-dropdown">
                  <svg>
                    <use href="{{asset('backend/assets/svg/icon-sprite.svg#header-bookmark')}}"></use>
                  </svg>
                  <div class="onhover-show-div bookmark-flip">
                    <div class="flip-card">
                      <div class="flip-card-inner">
                        <div class="front">
                          <h5 class="f-18 f-w-600 mb-0 dropdown-title">Bookmark</h5>
                          <ul class="bookmark-dropdown">
                            <li>
                              <div class="row">
                                <div class="col-4 text-center">
                                  <div class="bookmark-content">
                                    <div class="bookmark-icon bg-light-primary"><i class="stroke-primary" data-feather="file-text"></i></div><span class="font-primary">Forms</span>
                                  </div>
                                </div>
                                <div class="col-4 text-center">
                                  <div class="bookmark-content">
                                    <div class="bookmark-icon bg-light-secondary"><i class="stroke-secondary" data-feather="user"></i></div><span class="font-secondary">Profile</span>
                                  </div>
                                </div>
                                <div class="col-4 text-center">
                                  <div class="bookmark-content">
                                    <div class="bookmark-icon bg-light-warning"><i class="stroke-warning" data-feather="server"></i></div><span class="font-warning">Tables</span>
                                  </div>
                                </div>
                              </div>
                            </li>
                            <li class="text-center"><a class="flip-btn f-w-700" id="flip-btn" href="javascript:void(0)">Add New Bookmark</a></li>
                          </ul>
                        </div>
                        <div class="back">
                          <ul>
                            <li>
                              <div class="bookmark-dropdown flip-back-content">
                                <input type="text" placeholder="search...">
                              </div>
                            </li>
                            <li><a class="f-w-700 d-block flip-back" id="flip-back" href="javascript:void(0)">Back</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="mode">
                    <svg>
                      <use href="{{asset('backend/assets/svg/icon-sprite.svg#moon')}}"></use>
                    </svg>
                  </div>
                </li>
                <li class="onhover-dropdown">
                  <div class="notification-box">
                    <svg>
                      <use href="{{asset('backend/assets/svg/icon-sprite.svg#header-message')}}"></use>
                    </svg><span class="badge rounded-pill badge-info">3 </span>
                  </div>
                  <div class="onhover-show-div notification-dropdown">
                    <h5 class="f-18 f-w-600 mb-0 dropdown-title">Messages             </h5>
                    <ul class="messages">
                      <li class="d-flex b-light1-primary gap-2"> 
                        <div class="flex-shrink-0"><img src="{{asset('backend/assets/images/dashboard-2/user/1.png')}}" alt="Graph"></div>
                        <div class="flex-grow-1"> <a href="private-chat.html">
                            <h6 class="font-primary f-w-600">Hackett Yessenia</h6></a>
                          <p>Hello Miss...&#128522;</p>
                        </div><span>10 min.</span>
                      </li>
                      <li class="d-flex b-light1-secondary gap-2"> 
                        <div class="flex-shrink-0"><img src="{{asset('backend/assets/images/dashboard-2/user/2.png')}}" alt="Graph"></div>
                        <div class="flex-grow-1"> <a href="private-chat.html">
                            <h6 class="font-secondary f-w-600">schneider Adan</h6></a>
                          <p>Wishing You a Happy Birthday Dear..  🥳&#127882;</p>
                        </div><span>25 min.</span>
                      </li>
                      <li class="d-flex b-light1-success gap-2"> 
                        <div class="flex-shrink-0"><img src="{{asset('backend/assets/images/dashboard-2/user/3.png')}}" alt="Graph"></div>
                        <div class="flex-grow-1"> <a href="private-chat.html">
                            <h6 class="font-success f-w-600">Mahdi Gholizadeh</h6></a>
                          <p>Hello Dear!! This Theme Is Very beautiful</p>
                        </div><span>1 hours</span>
                      </li>
                      <li><a class="f-w-700" href="email-application.html">Check all</a></li>
                    </ul>
                  </div>
                </li>--}}
                <li class="d-none cart-nav onhover-dropdown">
                  <div class="cart-box">
                    <a href="/logout"><span> log out</span> <i data-feather="log-in"> </i></a>
                  </div>
                  <div class="d-none cart-dropdown onhover-show-div">
                    <h5 class="f-18 f-w-600 mb-0 dropdown-title">Cart</h5>
                    <ul>
                      <li>
                        <div class="d-flex"><img class="img-fluid b-r-5 me-3 img-60" src="{{asset('backend/assets/images/other-images/cart-img.jpg')}}" alt="">
                          <div class="flex-grow-1"><span class="f-w-600">Furniture Chair for Home</span>
                            <div class="qty-box">
                              <div class="input-group"><span class="input-group-prepend">
                                  <button class="btn quantity-left-minus" type="button" data-type="minus" data-field="">-</button></span>
                                <input class="form-control input-number" type="text" name="quantity" value="1"><span class="input-group-prepend">
                                  <button class="btn quantity-right-plus" type="button" data-type="plus" data-field="">+</button></span>
                              </div>
                            </div>
                            <h6 class="font-primary">$500</h6>
                          </div>
                          <div class="close-circle"><a class="bg-danger" href="#"><i data-feather="x"></i></a></div>
                        </div>
                      </li>
                      <li>
                        <div class="d-flex"><img class="img-fluid b-r-5 me-3 img-60" src="{{asset('backend/assets/images/other-images/table-img.jpg')}}" alt="">
                          <div class="flex-grow-1"><span class="f-w-600">Furniture Table for Office</span>
                            <div class="qty-box">
                              <div class="input-group"><span class="input-group-prepend">
                                  <button class="btn quantity-left-minus" type="button" data-type="minus" data-field="">-</button></span>
                                <input class="form-control input-number" type="text" name="quantity" value="1"><span class="input-group-prepend">
                                  <button class="btn quantity-right-plus" type="button" data-type="plus" data-field="">+</button></span>
                              </div>
                            </div>
                            <h6 class="font-primary">$500.00</h6>
                          </div>
                          <div class="close-circle"><a class="bg-danger" href="#"><i data-feather="x"></i></a></div>
                        </div>
                      </li>
                      <li class="total">
                        <h6 class="mb-0">Order Total : <span class="f-w-600 f-right">$1000.00</span></h6>
                      </li>
                      <li class="text-center"><a class="d-block mb-3 view-cart f-w-700" href="cart.html">Go to your cart</a><a class="btn btn-primary view-checkout" href="checkout.html">Checkout</a></li>
                    </ul>
                  </div>
                </li> 
                <li class="profile-nav onhover-dropdown px-0 py-0">
                  <div class="d-flex profile-media align-items-center"><img class="img-30" src="{{asset('backend/assets/images/dashboard/profile.png')}}" alt="">
                    <div class="flex-grow-1"><span>{{session('user.name')}}</span>
                      <p class="mb-0 font-outfit">{{session('user.type')}}<i class="fa fa-angle-down"></i></p>
                    </div>
                  </div>
                  <ul class="profile-dropdown onhover-show-div">
                    <li><a href="/profile"><i data-feather="user"></i><span>Account </span></a></li>
                    {{-- <li><a href="letter-box.html"><i data-feather="mail"></i><span>Inbox</span></a></li>
                    <li><a href="task.html"><i data-feather="file-text"></i><span>Taskboard</span></a></li> --}}
                    <li><a href="/settings"><i data-feather="settings"></i><span>Settings</span></a></li>
                    <li><a href="/logout"><i data-feather="log-in"> </i><span>Log Out</span></a></li>
                  </ul>
                </li>
              </ul>
            </div>
            <script class="result-template" type="text/x-handlebars-template">
              <div class="ProfileCard u-cf">                        
              <div class="ProfileCard-avatar"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay m-0"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg></div>
              <div class="ProfileCard-details">
              <div class="ProfileCard-realName">Name</div>
              </div>
              </div>
            </script>
            <script class="empty-template" type="text/x-handlebars-template"><div class="EmptyMessage">Your search turned up 0 results. This most likely means the backend is down, yikes!</div></script>
          </div>
        </div>
        <!-- Page Header Ends                              -->
      </div>
      <!-- Page Body Start-->
      <div class="page-body-wrapper">
        <!-- Page Sidebar Start-->
        <div class="sidebar-wrapper" data-layout="stroke-svg">
          <div>
            <div class="logo-wrapper"><a href="/dashboard"><img class="img-fluid" src="{{asset('backend/assets/images/logo/logo.png')}}" alt=""></a>
              <div class="back-btn"><i class="fa fa-angle-left"></i></div>
              <div class="toggle-sidebar">
                <svg class="stroke-icon sidebar-toggle status_toggle middle">
                  <use href="{{asset('backend/assets/svg/icon-sprite.svg#toggle-icon')}}"></use>
                </svg>
                <svg class="fill-icon sidebar-toggle status_toggle middle">
                  <use href="{{asset('backend/assets/svg/icon-sprite.svg#fill-toggle-icon')}}"></use>
                </svg>
              </div>
            </div>
            <div class="logo-icon-wrapper"><a href="index.html"><img class="img-fluid" src="{{asset('backend/assets/images/logo/logo-icon.png')}}" alt=""></a></div>
            <nav class="sidebar-main">
              <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
              <div id="sidebar-menu">
                <ul class="sidebar-links" id="simple-bar">
                  <li class="back-btn"><a href="index.html"><img class="img-fluid" src="{{asset('backend/assets/images/logo/logo-icon.png')}}" alt=""></a>
                    <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                  </li>
                  <li class="pin-title sidebar-main-title">
                    <div> 
                      <h6>Pinned</h6>
                    </div>
                  </li>
               
                  <li class="sidebar-main-title">
                    <div>
                      <h6 class="lan-8">Dashboard</h6>
                    </div>
                  </li>

                  
                <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav" href="/profile">
                    <svg class="stroke-icon">
                      <use href="{{asset('backend/assets/svg/icon-sprite.svg#stroke-file')}}"></use>
                    </svg>
                    <svg class="fill-icon">
                      <use href="{{asset('backend/assets/svg/icon-sprite.svg#fill-file')}}"></use>
                    </svg><span>Profile</span></a>
                </li>
                <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav" href="/posts">
                    <svg class="stroke-icon">
                      <use href="{{asset('backend/assets/svg/icon-sprite.svg#stroke-file')}}"></use>
                    </svg> 
                    <svg class="fill-icon"> 
                      <use href="{{asset('backend/assets/svg/icon-sprite.svg#fill-file')}}"></use> 
                    </svg><span>Posts</span></a> 
                </li> 
                
                <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav" href="/appointments">
                    <svg class="stroke-icon">
                      <use href="{{asset('backend/assets/svg/icon-sprite.svg#stroke-file')}}"></use>
                    </svg> 
                    <svg class="fill-icon"> 
                      <use href="{{asset('backend/assets/svg/icon-sprite.svg#fill-file')}}"></use> 
                    </svg><span>Appointments</span></a> 
                </li>
              
                
                
                <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav" href="/doctors">
                    <svg class="stroke-icon">
                      <use href="{{asset('backend/assets/svg/icon-sprite.svg#stroke-file')}}"></use>
                    </svg> 
                    <svg class="fill-icon"> 
                      <use href="{{asset('backend/assets/svg/icon-sprite.svg#fill-file')}}"></use> 
                    </svg><span>Doctors</span></a> 
                </li>
                <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav" href="/hospitals">
                    <svg class="stroke-icon">
                      <use href="{{asset('backend/assets/svg/icon-sprite.svg#stroke-file')}}"></use>
                    </svg> 
                    <svg class="fill-icon"> 
                      <use href="{{asset('backend/assets/svg/icon-sprite.svg#fill-file')}}"></use> 
                    </svg><span>Hospitals</span></a> 
                </li>
                <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav" href="/zones">
                    <svg class="stroke-icon">
                      <use href="{{asset('backend/assets/svg/icon-sprite.svg#stroke-file')}}"></use>
                    </svg> 
                    <svg class="fill-icon"> 
                      <use href="{{asset('backend/assets/svg/icon-sprite.svg#fill-file')}}"></use> 
                    </svg><span>Zones</span></a> 
                </li>

                <li class="sidebar-list"><i class="fa fa-thumb-tack">    </i><a class="sidebar-link sidebar-title" href="javascript:void(0)">
                  <svg class="stroke-icon">
                    <use href="{{asset('backend/assets/svg/icon-sprite.svg#stroke-project')}}"></use>
                  </svg>
                  <svg class="fill-icon">
                    <use href="{{asset('backend/assets/svg/icon-sprite.svg#fill-project')}}"></use>
                  </svg><span>Blogs</span></a>
                <ul class="sidebar-submenu">
                  <li><a href="/blogs">Blog Posts</a></li>
                  <li><a href="/blog-categories">Categories</a></li>
                </ul>
              </li>
              


                <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav" href="/settings">
                  <svg class="stroke-icon">
                    <use href="{{asset('backend/assets/svg/icon-sprite.svg#stroke-file')}}"></use>
                  </svg>
                  <svg class="fill-icon">
                    <use href="{{asset('backend/assets/svg/icon-sprite.svg#fill-file')}}"></use>
                  </svg><span>Settings</span></a>
              </li>

              

                {{-- <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav" href="/add-appointment">
                    <svg class="stroke-icon">
                      <use href="{{asset('backend/assets/svg/icon-sprite.svg#stroke-file')}}"></use>
                    </svg>
                    <svg class="fill-icon">
                      <use href="{{asset('backend/assets/svg/icon-sprite.svg#fill-file')}}"></use>
                    </svg><span>Appointment</span></a>
                </li> --}}

                  <li class="d-none sidebar-list"><i class="fa fa-thumb-tack">    </i><a class="sidebar-link sidebar-title" href="javascript:void(0)">
                      <svg class="stroke-icon">
                        <use href="{{asset('backend/assets/svg/icon-sprite.svg#stroke-project')}}"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="{{asset('backend/assets/svg/icon-sprite.svg#fill-project')}}"></use>
                      </svg><span>Sub Menu           </span></a>
                    <ul class="sidebar-submenu">
                      <li><a href="/posts
                      ">Posts</a></li>
                      <li><a href="projectcreate.html">Menu 2</a></li>
                    </ul>
                  </li>
                  
               
                </ul>
              </div>
              <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
            </nav>
          </div>
        </div>