<div>
    <!-- Simplicity is an acquired taste. - Katharine Gerould -->
    <footer id="footer">
        <div class="container">
            <div class="footer-ribbon">
                <span>Get in Touch</span>
            </div>
            <div class="row py-5 my-4">
                <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                    <h5 class="text-3 mb-3">NEWSLETTER</h5>
                    <p class="pe-1">Enter your e-mail address and subscribe to Sen. T.A Orji's newsletter.</p>
                    <div class="alert alert-success d-none" id="newsletterSuccess">
                        <strong>Success!</strong> You've been added to our email list.
                    </div>
                    <div class="alert alert-danger d-none" id="newsletterError"></div>
                    <form id="newsletterForm" action="php/newsletter-subscribe.php" method="POST" class="me-4 mb-3 mb-md-0">
                        <div class="input-group input-group-rounded">
                            <input class="form-control form-control-sm bg-light" placeholder="Email Address" name="newsletterEmail" id="newsletterEmail" type="email">
                            <button class="btn btn-light text-color-dark" type="submit"><strong>GO!</strong></button>
                        </div>
                    </form>
                </div>
                <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
                    <h5 class="text-3 mb-3">LATEST TWEETS</h5>
                    <div id="tweet" class="twitter" data-plugin-tweets data-plugin-options="{'username': '', 'count': 2}">
                        <p>Please wait...</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4 mb-md-0">
                    <div class="contact-details">
                        <h5 class="text-3 mb-3">CONTACT US</h5>
                        <ul class="list list-icons list-icons-lg">
                            <li class="mb-1"><i class="far fa-dot-circle text-color-primary"></i><p class="m-0">Abuja, Nigeria</p></li>
                            <li class="mb-1"><i class="fab fa-whatsapp text-color-primary"></i><p class="m-0"><a href="tel:+2348038888612">0803 8888 612</a></p></li>
                            <li class="mb-1"><i class="far fa-envelope text-color-primary"></i><p class="m-0"><a href="mailto:scholarship@senatortaorji.com">scholarship@senatortaorji.com</a></p></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-2">
                    <h5 class="text-3 mb-3">FOLLOW US</h5>
                    <ul class="social-icons">
                        <li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                        <li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                        <li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container py-2">
                <div class="row py-4">
                    <div class="col-lg-1 d-flex align-items-center justify-content-center justify-content-lg-start mb-2 mb-lg-0">
                        <a href="index.html" class="logo pe-0 pe-lg-3">
                            <img alt="Logo" src="{{ asset('img/logo-red.png') }}" class="opacity-5" width="49" height="48" data-plugin-options="{'appearEffect': 'fadeIn'}">
                        </a>
                    </div>
                    <div class="col-lg-7 d-flex align-items-center justify-content-center justify-content-lg-start mb-4 mb-lg-0">
                        <p>© Copyright 2021. All Rights Reserved.</p>
                    </div>
                    <div class="col-lg-4 d-flex align-items-center justify-content-center justify-content-lg-end">
                        <nav id="sub-menu">
                            {{-- <ul>
                                <li><i class="fas fa-angle-right"></i><a href="" class="ms-1 text-decoration-none"> Home</a></li>
                                <li><i class="fas fa-angle-right"></i><a href="" class="ms-1 text-decoration-none"> Scholarship</a></li>
                                <li><i class="fas fa-angle-right"></i><a href="" class="ms-1 text-decoration-none"> Form</a></li>
                            </ul> --}}
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </footer>

</div>