<header class="wrapper bg-soft-primary">
    <nav class="navbar navbar-expand-lg extended navbar-light navbar-bg-light caret-none">
        <div class="container flex-lg-column">
            <div class="topbar d-flex flex-row w-100 justify-content-between align-items-center">
                <div class="navbar-brand"><a href="index"><img src="assets/img/logo-dark.png" srcset="./assets/img/logo-dark@2x.png 2x" alt="" /></a></div>
                <div class="navbar-other ms-auto">
                    <ul class="navbar-nav flex-row align-items-center">
                        <li class="nav-item"><a class="nav-link" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-info"><i class="uil uil-info-circle"></i></a></li>
                        <li class="nav-item d-lg-none">
                            <button class="hamburger offcanvas-nav-btn"><span></span></button>
                        </li>
                    </ul>
                    <!-- /.navbar-nav -->
                </div>
                <!-- /.navbar-other -->
            </div>
            <!-- /.d-flex -->
            <div class="navbar-collapse-wrapper bg-white d-flex flex-row align-items-center">
                <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
                    <div class="offcanvas-header d-lg-none">
                        <h3 class="text-white fs-30 mb-0">Sandbox</h3>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body d-flex flex-column h-100">
                        <ul class="navbar-nav">

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Pages</a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown dropdown-submenu dropend" data-bs-dismiss="offcanvas" aria-label="Close"><a onclick='loadNewPage("functions/ajax.php", <?= json_encode(["page" => "#student_search"]); ?>)' class="dropdown-item" href="#" data-bs-toggle="dropdown">Student Search</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Projects</a>
                                <div class="dropdown-menu dropdown-lg">
                                    <div class="dropdown-lg-content">
                                        <div>
                                            <h6 class="dropdown-header">In Development</h6>
                                            <ul class="list-unstyled">
                                                <li><a class="dropdown-item" href="#">Mass Mail Messaging</a></li>
                                                <li><a class="dropdown-item" href="#">Mass Whatsapp Messaging</a></li>
                                                <li><a class="dropdown-item" href="#">Assignments</a></li>
                                                <li><a class="dropdown-item" href="#">Mass SMS</a></li>
                                            </ul>
                                        </div>
                                        <!-- /.column -->
                                        <div>
                                            <h6 class="dropdown-header">Upcoming</h6>
                                            <ul class="list-unstyled">
                                                <li><a class="dropdown-item" href="#">Data Visualization</a></li>
                                                <li><a class="dropdown-item" href="#">Class Group Assembly</a></li>
                                                <li><a class="dropdown-item" href="#">Group Project State Monitoring</a></li>
                                            </ul>
                                        </div>
                                        <!-- /.column -->
                                    </div>
                                    <!-- /auto-column -->
                                </div>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Documentation</a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown dropdown-submenu dropend"><a onclick='loadNewPage("functions/ajax.php", <?= json_encode(["page" => "#home"]); ?>)' class="dropdown-item" href="#" data-bs-toggle="dropdown">Site Code</a>
                                    </li>
                                    <li class="dropdown dropdown-submenu dropend"><a onclick='loadNewPage("functions/ajax.php", <?= json_encode(["page" => "#home"]); ?>)' class="dropdown-item" href="#" data-bs-toggle="dropdown">Student Database</a>
                                    </li>
                                    <li class="dropdown dropdown-submenu dropend"><a onclick='loadNewPage("functions/ajax.php", <?= json_encode(["page" => "#home"]); ?>)' class="dropdown-item" href="#" data-bs-toggle="dropdown">Documentation</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <!-- /.navbar-nav -->
                        <div class="offcanvas-footer d-lg-none">
                            <div>
                                <br /> 00 (123) 456 78 90 <br />
                                <nav class="nav social social-white mt-4">
                                    <a href="#"><i class="uil uil-twitter"></i></a>
                                    <a href="#"><i class="uil uil-facebook-f"></i></a>
                                    <a href="#"><i class="uil uil-dribbble"></i></a>
                                    <a href="#"><i class="uil uil-instagram"></i></a>
                                    <a href="#"><i class="uil uil-youtube"></i></a>
                                </nav>
                                <!-- /.social -->
                            </div>
                        </div>
                        <!-- /.offcanvas-footer -->
                    </div>
                </div>
                <!-- /.navbar-collapse -->
                <div class="navbar-other ms-auto w-100 d-none d-lg-block">
                    <nav class="nav social social-muted justify-content-end text-end">
                        <a href="#"><i class="uil uil-twitter"></i></a>
                        <a href="#"><i class="uil uil-facebook-f"></i></a>
                        <a href="#"><i class="uil uil-dribbble"></i></a>
                        <a href="#"><i class="uil uil-instagram"></i></a>
                    </nav>
                    <!-- /.social -->
                </div>
                <!-- /.navbar-other -->
            </div>
            <!-- /.navbar-collapse-wrapper -->
        </div>
        <!-- /.container -->
    </nav>
    <!-- /.navbar -->
    <div class="offcanvas offcanvas-end text-inverse" id="offcanvas-info" data-bs-scroll="true">
        <div class="offcanvas-header">
            <h3 class="text-white fs-30 mb-0">Sandbox</h3>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body pb-6">
            <div class="widget mb-8">
                <p>Tech Acoustic is a tech company built in Enugu state. We proud ourselves in homegrown talent</p>
            </div>
            <!-- /.widget -->
            <div class="widget mb-8">
                <h4 class="widget-title text-white mb-3">Contact Info</h4>
                <address> Moonshine St. 14/05 <br /> Opposite Nnamdi Azikiwe Stadium, Enugu </address>
                <a href="admin@techac.net"></a>
            </div>
            <!-- /.widget -->
            <div class="widget mb-8">
                <h4 class="widget-title text-white mb-3">Learn More</h4>
                <ul class="list-unstyled">
                    <li><a href="https://techac.net">Our Story</a></li>
                    <li><a href="https://techac.net">Terms of Use</a></li>
                    <li><a href="https://techac.net">Privacy Policy</a></li>
                    <li><a href="https://techac.net">Contact Us</a></li>
                </ul>
            </div>
            <!-- /.widget -->
            <div class="widget">
                <h4 class="widget-title text-white mb-3">Follow Us</h4>
                <nav class="nav social social-white">
                    <a href="#"><i class="uil uil-twitter"></i></a>
                    <a href="#"><i class="uil uil-facebook-f"></i></a>
                    <a href="#"><i class="uil uil-dribbble"></i></a>
                    <a href="#"><i class="uil uil-instagram"></i></a>
                    <a href="#"><i class="uil uil-youtube"></i></a>
                </nav>
                <!-- /.social -->
            </div>
            <!-- /.widget -->
        </div>
        <!-- /.offcanvas-body -->
    </div>
    <!-- /.offcanvas -->
</header>
<!-- /header -->