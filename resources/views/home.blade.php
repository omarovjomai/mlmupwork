<!DOCTYPE html>
<html lang="en">

<head>
   <title>Quantum Able Bootstrap 4 Admin Dashboard Template by Phoenixcoded</title>
   <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
   <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
   <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

   <!-- Meta -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
   <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <meta name="description" content="Phoenixcoded">
   <meta name="keywords" content=", Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
   <meta name="author" content="Phoenixcoded">
   <meta name="csrf-token" content="{{ csrf_token() }}">

   <!-- Favicon icon -->
   <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
   <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

   <!-- Google font-->
   <link href="https://fonts.googleapis.com/css?family=Ubuntu:400,500,700" rel="stylesheet">

   <!-- themify -->
   <link rel="stylesheet" type="text/css" href="assets/icon/themify-icons/themify-icons.css">

   <!-- iconfont -->
   <link rel="stylesheet" type="text/css" href="assets/icon/icofont/css/icofont.css">

   <!-- simple line icon -->
   <link rel="stylesheet" type="text/css" href="assets/icon/simple-line-icons/css/simple-line-icons.css">

   <!-- Required Fremwork -->
   <link rel="stylesheet" type="text/css" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">

   <!-- Chartlist chart css -->
   <link rel="stylesheet" href="../bower_components/chartist/dist/chartist.css" type="text/css" media="all">

   <!-- Weather css -->
   <link href="assets/css/svg-weather.css" rel="stylesheet">

   <!-- Style.css -->
   <link rel="stylesheet" type="text/css" href="assets/css/main.css">

   <!-- Responsive.css-->
   <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">

   <!--color css-->
   <link rel="stylesheet" type="text/css" href="assets/css/color/inverse.css" id="color" />

</head>

<body class="sidebar-mini fixed">
   <div class="wrapper">
      <div class="loader-bg">
         <div class="loader-bar">
         </div>
      </div>
      <!-- Navbar-->
      <header class="main-header-top hidden-print">
         <a href="index.html" class="logo"><img class="img-fluid able-logo" src="assets/images/logo.png" alt="Theme-logo"></a>
         <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#!" data-toggle="offcanvas" class="sidebar-toggle"></a>
            <ul class="top-nav lft-nav">
               <li>
                  <a href="#!" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle drop icon-circle drop-image">
                      </i><span> Jobs</span>
                  </a>
               </li>
               <li>
                <a href="#!" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle drop icon-circle drop-image">
                    </i><span> Services</span>
                </a>
             </li>
               
            
            </ul>
            <!-- Navbar Right Menu-->
            <div class="navbar-custom-menu">
               <ul class="top-nav">
                  <!--Notification Menu-->
                  <li class="dropdown notification-menu">
                     <a href="#!" data-toggle="dropdown" aria-expanded="false" class="dropdown-toggle">
                        <i class="icon-bell"></i>
                        <span class="badge badge-danger header-badge">9</span>
                     </a>
                     <ul class="dropdown-menu">
                        <li class="not-head">You have <b class="text-primary">4</b> new notifications.</li>
                        <li class="bell-notification">
                           <a href="javascript:;" class="media">
                              <span class="media-left media-icon">
                    <img class="img-circle" src="assets/images/avatar-1.png" alt="User Image">
                  </span>
                              <div class="media-body"><span class="block">Lisa sent you a mail</span><span class="text-muted block-time">2min ago</span></div>
                           </a>
                        </li>
                        <li class="bell-notification">
                           <a href="javascript:;" class="media">
                              <span class="media-left media-icon">
                    <img class="img-circle" src="assets/images/avatar-2.png" alt="User Image">
                  </span>
                              <div class="media-body"><span class="block">Server Not Working</span><span class="text-muted block-time">20min ago</span></div>
                           </a>
                        </li>
                        <li class="bell-notification">
                           <a href="javascript:;" class="media"><span class="media-left media-icon">
                    <img class="img-circle" src="assets/images/avatar-3.png" alt="User Image">
                  </span>
                                    <div class="media-body"><span class="block">Transaction xyz complete</span><span class="text-muted block-time">3 hours ago</span></div></a>
                        </li>
                        <li class="not-footer">
                           <a href="#!">See all notifications.</a>
                        </li>
                     </ul>
                  </li>
                  <!-- chat dropdown -->
                
                  <!-- window screen -->
                  <li class="pc-rheader-submenu">
                     <a href="#!" class="drop icon-circle" onclick="javascript:toggleFullScreen()">
                        <i class="icon-size-fullscreen"></i>
                     </a>

                  </li>
                  <!-- User Menu-->
                  <li class="dropdown">
                     <a href="#!" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle drop icon-circle drop-image">
                        <span><img class="img-circle " src="assets/images/avatar-1.png" style="width:40px;" alt="User Image"></span>
                        <span> <b>{{ Auth::user()->name }}</b> <i class=" icofont icofont-simple-down"></i></span>

                     </a>
                     <ul class="dropdown-menu settings-menu">
                        <li><a href="#!"><i class="icon-settings"></i> Settings</a></li>
                        <li><a href="#!"><i class="icon-user"></i> Profile</a></li>
                        
                        <li class="p-0">
                           <div class="dropdown-divider m-0"></div>
                        </li>
                        
                        <li>      <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form></li>
                                    </li>

                         

                     </ul>
                  </li>
               </ul>

               <!-- search -->
               <div id="morphsearch" class="morphsearch">
                  <form class="morphsearch-form">

                     <input class="morphsearch-input" type="search" placeholder="Search..." />

                     <button class="morphsearch-submit" type="submit">Search</button>

                  </form>
                  <div class="morphsearch-content">
                     <div class="dummy-column">
                        <h2>People</h2>
                        <a class="dummy-media-object" href="#!">
                           <img class="round" src="http://0.gravatar.com/avatar/81b58502541f9445253f30497e53c280?s=50&d=identicon&r=G" alt="Sara Soueidan" />
                           <h3>Sara Soueidan</h3>
                        </a>

                        <a class="dummy-media-object" href="#!">
                           <img class="round" src="http://1.gravatar.com/avatar/9bc7250110c667cd35c0826059b81b75?s=50&d=identicon&r=G" alt="Shaun Dona" />
                           <h3>Shaun Dona</h3>
                        </a>
                     </div>
                     <div class="dummy-column">
                        <h2>Popular</h2>
                        <a class="dummy-media-object" href="#!">
                           <img src="assets/images/avatar-1.png" alt="PagePreloadingEffect" />
                           <h3>Page Preloading Effect</h3>
                        </a>

                        <a class="dummy-media-object" href="#!">
                           <img src="assets/images/avatar-1.png" alt="DraggableDualViewSlideshow" />
                           <h3>Draggable Dual-View Slideshow</h3>
                        </a>
                     </div>
                     <div class="dummy-column">
                        <h2>Recent</h2>
                        <a class="dummy-media-object" href="#!">
                           <img src="assets/images/avatar-1.png" alt="TooltipStylesInspiration" />
                           <h3>Tooltip Styles Inspiration</h3>
                        </a>
                        <a class="dummy-media-object" href="#!">
                           <img src="assets/images/avatar-1.png" alt="NotificationStyles" />
                           <h3>Notification Styles Inspiration</h3>
                        </a>
                     </div>
                  </div>
                  <!-- /morphsearch-content -->
                  <span class="morphsearch-close"><i class="icofont icofont-search-alt-1"></i></span>
               </div>
               <!-- search end -->
            </div>
         </nav>
      </header>
      <!-- Side-Nav-->
      <aside class="main-sidebar hidden-print ">
         <section class="sidebar" id="sidebar-scroll">
            <!-- Sidebar Menu-->
            <ul class="sidebar-menu">
                <hr/>
            
               <li><a href="dashboard.html"><i class="ti-dashboard text-purple"></i><span> Dashboard</span></a> </li>
               <hr/>
               <li><a href="dashboard.html"><i class="icofont icofont-idea text-warning-color "></i><span> My service</span></a> </li> <hr/>
               <li><a href="dashboard.html"><i class="icofont icofont-briefcase-alt-2 text-primary-color"></i></i><span> My Job</span></a> </li> <hr/>
               <li><a href="dashboard.html"><i class="icofont icofont-company text-danger-color"></i><span> Refer</span></a> </li> <hr/>
               <li><a href="dashboard.html"><i class="icofont icofont-people icofont text-success-color"></i><span> Marketing Plan</span></a> </li> <hr/>
               <li><a href="dashboard.html"><i class="icofont icofont-credit-card text-info"></i><span> Withdraw</span></a> </li> <hr/>
               <li><a href="dashboard.html"><i class="icofont icofont-settings-alt text-secondary"></i><span> Settings</span></a> </li> <hr/>
               
            
            
              
              
               
            </ul>
         </section>
      </aside>
      <!-- Sidebar chat start -->
    
      <div class="showChat_inner">
         <div class="media chat-inner-header">
            <a class="back_chatBox">
               <i class="icofont icofont-rounded-left"></i> Josephin Doe
            </a>
         </div>
         <div class="media chat-messages">
            <a class="media-left photo-table" href="#!">
               <img class="media-object img-circle m-t-5" src="assets/images/avatar-1.png" alt="Generic placeholder image">
               <div class="live-status bg-success"></div>
            </a>
            <div class="media-body chat-menu-content">
               <div class="">
                  <p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
                  <p class="chat-time">8:20 a.m.</p>
               </div>
            </div>
         </div>
         <div class="media chat-messages">
            <div class="media-body chat-menu-reply">
               <div class="">
                  <p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
                  <p class="chat-time">8:20 a.m.</p>
               </div>
            </div>
            <div class="media-right photo-table">
               <a href="#!">
                  <img class="media-object img-circle m-t-5" src="assets/images/avatar-2.png" alt="Generic placeholder image">
                  <div class="live-status bg-success"></div>
               </a>
            </div>
         </div>
         <div class="media chat-reply-box">
            <div class="md-input-wrapper">
               <input type="text" class="md-form-control" id="inputEmail" name="inputEmail">
               <label>Share your thoughts</label>
               <span class="highlight"></span>
               <span class="bar"></span> <button type="button" class="chat-send waves-effect waves-light">
                     <i class="icofont icofont-location-arrow f-20 "></i>
                 </button>

            </div>

         </div>
      </div>
      <!-- Sidebar chat end-->
      <div class="content-wrapper">
         <!-- Container-fluid starts -->
         <!-- Main content starts -->
         <div class="container-fluid">
            <div class="row">
               <div class="col-sm-12 p-0">
                  <div class="main-header">
                     <h4>Dashboard</h4>
                  </div>
               </div>
            </div>

            <!-- 1-3-block row start -->
         
            <!-- 1-3-block row end -->

            <!-- 3-1-block start -->
            <div class="row">
         
               <!-- Online user block start -->
               <div class="col-xl-4 col-lg-12 grid-item widget-user-block">
                  <div class="card freelance-card">
                      
                     <div class="card-block text-center">
                        <div class="freelance">
                           <img class="d-inline-block img-circle" src="assets/images/widget/user-4.png" alt="New user" />
                           <div class="bg-success online-dot"></div>
                        </div>
                        <h4 class="txt-primary">Jake Applesed</h4>
                        <h6 class="f-w-400">London,UK</h6>

                     </div>
                   
                  </div>
               </div>
               <!-- Online user block end -->
            </div>
            <div class="row widget-social-list">
                <div class="col-xl-3 col-lg-6 grid-item">
                    <div class="card">
                       <div class="row">
                          <div class="col-sm-12 d-flex">
                             <div class="col-sm-5 bg-warning">
                                <div class="p-20 text-center">
                                   <i class="icofont icofont-clock-time f-64"></i>
                                </div>
                             </div>
                             <div class="col-sm-7">
                                <div class="text-center">
                                   <h1 class="txt-warning">11 : 45</h1>
                                   <span>December, 14, 2014</span>

                                </div>
                             </div>
                          </div>
                       </div>

                    </div>
                 </div>
                 <div class="col-xl-3 col-lg-6 grid-item">
                    <div class="card">
                       <div class="card-block">
                          <div class="media d-flex">
                             <div class="media-left media-middle">
                                <div class="new-orders">
                                   <i class="icofont icofont icofont-cur-bitcoin-true bg-success"></i>
                                </div>
                             </div>
                             <div class="media-body">
                                <span class="counter-txt f-w-600 f-20">
                                        <span class=" ">1.5</span> BTC
                                </span>
                                <h6 class="f-w-300 m-t-5">Balance</h6>
                             </div>
                          </div>
                          <ul>
                             <li class="new-users">
                             </li>
                          </ul>
                       </div>
                    </div>
                 </div>
             
            </div>
            <div class="row dashboard-header">
                <div class="col-lg-3 col-md-4">
                   <div class="card dashboard-product">
                      <span>Total Bonus</span>
                      <h2 class="dashboard-total-products">3.5 BTC</h2> 
                      <span class="label label-warning">Bonus</span>From starting
                      <div class="side-box">
                       
                        
                         <i class="icofont icofont-cur-bitcoin  text-warning-color"></i>
                      </div>
                   </div>
                </div>
                <div class="col-lg-3 col-md-4">
                   <div class="card dashboard-product">
                      <span>Freedom Points</span>
                      <h2 class="dashboard-total-products">37,500 </h2>
                      <span class="label label-primary">Points</span>FPTS
                      <div class="side-box ">
                         <i class="ti-gift text-primary-color"></i>
                      </div>
                   </div>
                </div>
                <div class="col-lg-3 col-md-4">
                   <div class="card dashboard-product">
                      <span>Partners</span>
                      <h2 class="dashboard-total-products"><span>780</span></h2>
                      <span class="label label-success">Refer</span>Team
                      <div class="side-box">
                         <i class="icofont icofont-group text-success-color"></i>
                      </div>
                   </div>
                </div>
                <div class="col-lg-3 col-md-4">
                   <div class="card dashboard-product">
                      <span>Career Status</span>
                      <h2 class="dashboard-total-products"><span>Diamond</span></h2>
                      <span class="label label-danger">rank</span>CST
                      <div class="side-box">
                         <i class="ti-star text-danger-color"></i>
                      </div>
                   </div>
                </div>
             </div>
            <!-- 3-1-block end -->

            <!-- 2-1 block start -->
            
            <!-- 2-1 block end -->
         </div>
         <!-- Container-fluid ends -->
      </div>
   </div>

   <!-- Main content ends -->

   <!-- Warning Section Starts -->
   <!-- Older IE warning message -->
   <!--[if lt IE 9]>
              <div class="ie-warning">
                  <h1>Warning!!</h1>
                  <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
                  <div class="iew-container">
                      <ul class="iew-download">
                          <li>
                              <a href="http://www.google.com/chrome/">
                                  <img src="assets/images/browser/chrome.png" alt="Chrome">
                                  <div>Chrome</div>
                              </a>
                          </li>
                          <li>
                              <a href="https://www.mozilla.org/en-US/firefox/new/">
                                  <img src="assets/images/browser/firefox.png" alt="Firefox">
                                  <div>Firefox</div>
                              </a>
                          </li>
                          <li>
                              <a href="http://www.opera.com">
                                  <img src="assets/images/browser/opera.png" alt="Opera">
                                  <div>Opera</div>
                              </a>
                          </li>
                          <li>
                              <a href="https://www.apple.com/safari/">
                                  <img src="assets/images/browser/safari.png" alt="Safari">
                                  <div>Safari</div>
                              </a>
                          </li>
                          <li>
                              <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                                  <img src="assets/images/browser/ie.png" alt="">
                                  <div>IE (9 & above)</div>
                              </a>
                          </li>
                      </ul>
                  </div>
                  <p>Sorry for the inconvenience!</p>
              </div>
              <![endif]-->
   <!-- Warning Section Ends -->


   <!-- Required Jqurey -->
   <script src="../bower_components/Jquery/dist/jquery.min.js"></script>
   <script src="../bower_components/jquery-ui/jquery-ui.min.js"></script>
   <script src="../bower_components/tether/dist/js/tether.min.js"></script>

   <!-- Required Fremwork -->
   <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

   <!-- waves effects.js -->
   <script src="../bower_components/Waves/dist/waves.min.js"></script>

   <!-- Scrollbar JS-->
   <script src="../bower_components/jquery-slimscroll/jquery.slimscroll.js"></script>
   <script src="../bower_components/jquery.nicescroll/dist/jquery.nicescroll.min.js"></script>

   <!--classic JS-->
   <script src="../bower_components/classie/classie.js"></script>

   <!-- notification -->
   <script src="assets/plugins/notification/js/bootstrap-growl.min.js"></script>

   <!-- Counter js  -->
   <script src="assets/plugins/countdown/js/jquery.counterup.js"></script>
   <script src="../bower_components/waypoints/lib/jquery.waypoints.min.js"></script>

   <!-- High Chart js -->
   <script src="../bower_components/highcharts/highcharts.js"></script>
   <script src="{{ asset('js/app.js') }}" defer></script>

   <!-- Rickshaw Chart js -->
   <script src="../bower_components/d3/d3.js"></script>
   <script src="../bower_components/rickshaw/rickshaw.js"></script>

   <!-- Sparkline charts -->
   <script src="../bower_components/jquery-sparkline/dist/jquery.sparkline.js"></script>

   <!-- Morris Chart js -->
   <script src="../bower_components/raphael/raphael.min.js"></script>
   <script src="../bower_components/morris.js/morris.js"></script>

   <!-- Float Chart js -->
   <script src="../bower_components/flot/jquery.flot.js"></script>
   <script src="../bower_components/flot/jquery.flot.categories.js"></script>
   <script src="../bower_components/flot/jquery.flot.pie.js"></script>
   <script src="../bower_components/flot/jquery.flot.stack.js"></script>
   <script src="../bower_components/flot/jquery.flot.crosshair.js"></script>

   <!-- custom js -->
   <script type="text/javascript" src="assets/js/main.min.js"></script>
   <script type="text/javascript" src="assets/pages/dashboard2.js"></script>
   <script type="text/javascript" src="assets/pages/elements.js"></script>
   <script src="assets/js/menu.min.js"></script>

</body>

</html>
