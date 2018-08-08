<!DOCTYPE html>
<html lang="en">
<head>
	<title>Quantum Able Bootstrap 4 Admin Dashboard Template by Phoenixcoded</title>

	 <!-- HTML5 Shim and Respond.js IE9 support of HTML5 elements and media queries -->
   	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  		<!--[if lt IE 9]>
  			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  			<![endif]-->

	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<meta name="description" content="Phoenixcoded">
	<meta name="keywords"
	content=", Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
	<meta name="author" content="Phoenixcoded">

	<!-- Favicon icon -->
	<link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
	<link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

	<!-- Google font-->
   <link href="https://fonts.googleapis.com/css?family=Ubuntu:400,500,700" rel="stylesheet">

	<!--ico Fonts-->
	<link rel="stylesheet" type="text/css" href="assets/icon/icofont/css/icofont.css">
	<!-- Required Fremwork -->
	<link rel="stylesheet" type="text/css" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">

	<!-- waves css -->
	<link rel="stylesheet" type="text/css" href="../bower_components/Waves/dist/waves.min.css">

	<!-- Style.css -->
	<link rel="stylesheet" type="text/css" href="assets/css/main.css">

	<!-- Responsive.css-->
	<link rel="stylesheet" type="text/css" href="assets/css/responsive.css">

	<!--color css-->
    <link rel="stylesheet" type="text/css" href="assets/css/color/inverse.css " id="color"/>

</head>
<body>
	<section class="login common-img-bg">
		<!-- Container-fluid starts -->
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-12">
					<div class="login-card card-block bg-white">
					<form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                        @csrf
							<div class="text-center">
								<img src="assets/images/logo.png">
							</div>
							<h3 class="text-center txt-primary">Create an account </h3>
							<div class="row">
								<div class="col-md-12">
									<div class="md-input-wrapper">
										<input id="name" type="text" class="md-form-control"name="name" value="{{ old('name') }}" required>
										<label>Name</label>
									</div>
								</div>
								@if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
							</div>
							<div class="md-input-wrapper">
								<input type="email" class="md-form-control" required="required">
								<label>Email Address</label>
							</div>
							<div class="md-input-wrapper">
								<input type="password" class="md-form-control" required="required">
								<label>Password</label>
							</div>
							<div class="md-input-wrapper">
								<input type="password" class="md-form-control" required="required">
								<label>Confirm Password</label>
							</div>

							
							<div class="col-xs-10 offset-xs-1">
								<button type="submit" class="btn btn-primary btn-md btn-block waves-effect waves-light m-b-20">Sign up
								</button>
							</div>
							<div class="row">
								<div class="col-xs-12 text-center">
									<span class="text-muted">Already have an account?</span>
									<a href="login1.html" class="f-w-600 p-l-5"> Sign In Here</a>

								</div>
							</div>
						</form>
						<!-- end of form -->
					</div>
					<!-- end of login-card -->
				</div>
				<!-- end of col-sm-12 -->
			</div>
				<!-- end of row-->
			</div>
			<!-- end of container-fluid -->
	</section>

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
	<!-- tether.js -->
	<script src="../bower_components/tether/dist/js/tether.min.js"></script>
	<!-- waves effects.js -->
	<script src="../bower_components/Waves/dist/waves.min.js"></script>
	<!-- Required Framework -->
	<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

	<!--text js-->
	<script type="text/javascript" src="assets/pages/elements.js"></script>


</body>
</html>
