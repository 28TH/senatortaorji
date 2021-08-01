<!DOCTYPE html>
<html>
	<head>

		<!-- Basic -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">	

		<title>SEN T.A ORJI| ANNUAL SCHOLARSHIP 2021 EDITION PORTAL</title>	

		<meta name="keywords" content="Scholarship" />
		<meta name="description" content="ANNUAL SCHOLARSHIP 2021 EDITION PORTAL">
		<meta name="author" content="WBL IT SOLUTIONS">

		<!-- Favicon -->
		<link rel="shortcut icon" href="../img/logo-red.png" type="image/x-icon" />
		<link rel="apple-touch-icon" href="../img/apple-touch-icon.png">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

		<!-- Web Fonts  -->
		<link id="googleFonts" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7CShadows+Into+Light&display=swap" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="../vendor/fontawesome-free/css/all.min.css">
		<link rel="stylesheet" href="../vendor/animate/animate.compat.css">
		<link rel="stylesheet" href="../vendor/simple-line-icons/css/simple-line-icons.min.css">
		<link rel="stylesheet" href="../vendor/owl.carousel/assets/owl.carousel.min.css">
		<link rel="stylesheet" href="../vendor/owl.carousel/assets/owl.theme.default.min.css">
		<link rel="stylesheet" href="../vendor/magnific-popup/magnific-popup.min.css">

		<!-- Theme CSS -->
		<link rel="stylesheet" href="../css/theme.css">
		<link rel="stylesheet" href="../css/theme-elements.css">
		<link rel="stylesheet" href="../css/theme-blog.css">
		<link rel="stylesheet" href="../css/theme-shop.css">

		<!-- Skin CSS -->
		{{-- <link id="skinCSS" rel="stylesheet" href="../css/skins/default.css"> --}}
        <link id="skinCSS" rel="stylesheet" href="css/skins/skin-corporate-6.css">


		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="../css/custom.css">

		<!-- Head Libs -->
		<script src="../vendor/modernizr/modernizr.min.js"></script>

	</head>
	<body data-plugin-page-transition>

		<div class="body">

            <x-header></x-header>

			<div role="main" class="main">

				<section class="page-header page-header-modern bg-color-light-scale-1 page-header-lg">
					<div class="container">
						<div class="row">
							<div class="col-md-12 align-self-center p-static order-2 text-center">
								<h1 class="font-weight-bold">Application Form</h1>
							</div>
							<div class="col-md-12 align-self-center order-1">
								<ul class="breadcrumb d-block text-center">
									<li><a href="{{ url('/scholarship') }}">Scholarship</a></li>
									<li class="active">Form</li>
								</ul>
							</div>
						</div>
					</div>
				</section>

				<div class="container pt-3 pb-2">

					<div class="row pt-2">
						<div class="col-lg-3 mt-4 mt-lg-0">

							<div class="d-flex justify-content-center mb-4">
								<div class="profile-image-outer-container">
									<div class="profile-image-inner-container bg-color-primary">
										<img src="../img/avatars/avatar.jpg">
										<span class="profile-image-button bg-color-dark">
											<i class="fas fa-camera text-light"></i>
										</span>
									</div>
									<input type="file" id="file" class="form-control profile-image-input">
								</div>
							</div>

							{{-- <aside class="sidebar mt-2" id="sidebar">
								<ul class="nav nav-list flex-column mb-5">
									<li class="nav-item"><a class="nav-link text-3 text-dark active" href="#">My Profile</a></li>
									<li class="nav-item"><a class="nav-link text-3" href="#">User Preferences</a></li>
									<li class="nav-item"><a class="nav-link text-3" href="#">Billing</a></li>
									<li class="nav-item"><a class="nav-link text-3" href="#">Invoices</a></li>
								</ul>
							</aside> --}}

						</div>
						<div class="col-lg-9">

							<form role="form" class="needs-validation">

                            	<div class="form-group row">
							        <label class="col-lg-3 col-form-label form-control-label line-height-9 pt-2 text-2 required">Full Name</label>
							        <div class="col-lg-3">
							            <input class="form-control text-3 h-auto py-2" type="text" name="surname" value="" placeholder="Surname" required>
							        </div>
							        <div class="col-lg-3">
							            <input class="form-control text-3 h-auto py-2" type="text" name="firstname" value="" placeholder="First Name" required>
							        </div>
                                    <div class="col-lg-3">
							            <input class="form-control text-3 h-auto py-2" type="text" name="othername" value="" placeholder="Other Name">
							        </div>
							    </div>

                                <div class="form-group row">
							        <label class="col-lg-3 col-form-label form-control-label line-height-9 pt-2 text-2 required">Contact</label>
							        <div class="col-lg-5">
							            <input class="form-control text-3 h-auto py-2" type="text" name="email" value="" placeholder="Email" required>
							        </div>
							        <div class="col-lg-4">
							            <input class="form-control text-3 h-auto py-2" type="text" name="phone" value="" placeholder="Phone Number" required>
							        </div>
							    </div>

                                <div class="form-group row">
							        <label class="col-lg-3 col-form-label form-control-label line-height-9 pt-2 text-2"></label>
							        <div class="col-lg-9">
							            <input class="form-control text-3 h-auto py-2" type="text" name="address" placeholder="Home Address" required>
							        </div>
							    </div>

							    <div class="form-group row">
							        <label class="col-lg-3 col-form-label form-control-label line-height-9 pt-2 text-2 required">State/LGA</label>
							        <div class="col-lg-5">
                                        <div class="custom-select-1">
							                <select id="state" class="form-control text-3 h-auto py-2" name="state" size="0" required>
							                    <option value="">Select State</option>
							                    <option value="">Dropdown 2</option>
							                </select>
							            </div>
							        </div>
							        <div class="col-lg-4">
                                        <div class="custom-select-1">
							                <select id="lga" class="form-control text-3 h-auto py-2" name="lga" size="0" required>
							                    <option value="">Select LGA</option>
							                    <option value="">Dropdown 2</option>
							                </select>
							            </div>
							        </div>
							    </div>

							    <div class="form-group row">
							        <label class="col-lg-3 col-form-label form-control-label line-height-9 pt-2 text-2 required">University</label>
							        <div class="col-lg-9">
							            <input class="form-control text-3 h-auto py-2" type="text" name="university" placeholder="Name of University" required>
							        </div>
							    </div>

							    <div class="form-group row">
							        <label class="col-lg-3 col-form-label form-control-label line-height-9 pt-2 text-2"></label>
							        <div class="col-lg-5">
							            <input class="form-control text-3 h-auto py-2" type="text" name="soo" value="" placeholder="Course of Study" required>
							        </div>
							        <div class="col-lg-4">
							            <input class="form-control text-3 h-auto py-2" type="text" name="lga" value="" placeholder="Grade" required>
							        </div>
							    </div>

							    <div class="form-group row">
							        <label class="col-lg-3 col-form-label form-control-label line-height-9 pt-2 text-2">LinkedIn Profile</label>
							        <div class="col-lg-9">
							            <input class="form-control text-3 h-auto py-2" type="url" name="linkedin" placeholder="">
							        </div>
							    </div>

                                <div class="form-group row">
							        <label class="col-lg-3 col-form-label form-control-label line-height-9 pt-2 text-2 required">Documents (500KB each):<br/> SSCE | Admission Letter</label>
							        <div class="col-lg-4">
							            <input class="form-control text-3 h-auto py-2" type="file" name="waec" placeholder="WAEC Doc" required>
							        </div>
							        <div class="col-lg-4">
							            <input class="form-control text-3 h-auto py-2" type="file" name="admission" placeholder="WAEC Doc" required>
							        </div>
							    </div>

                                <div class="form-group row">
							        <label class="col-lg-3 col-form-label form-control-label line-height-9 pt-2 text-2 required">Documents (500KB):<br/> Birth/Indigene Certificate</label>
							        <div class="col-lg-4">
							            <input class="form-control text-3 h-auto py-2" type="file" name="waec" placeholder="WAEC Doc" required>
							        </div>
							    </div>



							    <div class="form-group row">
									<div class="form-group col-lg-9">

									</div>
									<div class="form-group col-lg-3">
										<input type="submit" value="Submit" class="btn btn-success btn-modern float-end" data-loading-text="Loading...">
									</div>
							    </div>
							</form>

						</div>
					</div>

				</div>

			</div>

            <x-footer></x-footer>

		</div>

		<!-- Vendor -->
		<script src="../vendor/jquery/jquery.min.js"></script>
		<script src="../vendor/jquery.appear/jquery.appear.min.js"></script>
		<script src="../vendor/jquery.easing/jquery.easing.min.js"></script>
		<script src="../vendor/jquery.cookie/jquery.cookie.min.js"></script>
		<script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
		<script src="../vendor/jquery.validation/jquery.validate.min.js"></script>
		<script src="../vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
		<script src="../vendor/jquery.gmap/jquery.gmap.min.js"></script>
		<script src="../vendor/lazysizes/lazysizes.min.js"></script>
		<script src="../vendor/isotope/jquery.isotope.min.js"></script>
		<script src="../vendor/owl.carousel/owl.carousel.min.js"></script>
		<script src="../vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
		<script src="../vendor/vide/jquery.vide.min.js"></script>
		<script src="../vendor/vivus/vivus.min.js"></script>

		<!-- Theme Base, Components and Settings -->
		<script src="../js/theme.js"></script>

		<!-- Theme Custom -->
		<script src="../js/custom.js"></script>

		<!-- Theme Initialization Files -->
		<script src="../js/theme.init.js"></script>

	</body>
</html>
