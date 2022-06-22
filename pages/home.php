 <!-- section start -->
 <section class="wrapper bg-soft-primary">
     <div class="container pt-10 pb-15 pt-md-14 pb-md-20">
         <div class="row gx-lg-8 gx-xl-12 gy-10 mb-5 align-items-center">
             <div class="col-md-10 offset-md-1 offset-lg-0 col-lg-5 text-center text-lg-start order-2 order-lg-0" data-cues="slideInDown" data-group="page-title" data-delay="600">
                 <h1 class="display-1 mb-5 mx-md-n5 mx-lg-0">Fast. Simple. Electric.</h1>
                 <p class="lead fs-lg mb-7">The goal is to utilize the tools available to our generation to make things easier.</p>
                 <div class="d-flex justify-content-center justify-content-lg-start" data-cues="slideInDown" data-group="page-title-buttons" data-delay="900">
                     <span><a class="btn btn-primary rounded me-2">Documentation</a></span>
                     <span><a onclick='loadNewPage("functions/ajax.php", <?= json_encode(["page" => "student_search"]); ?>)' class="btn btn-yellow rounded">Student Search</a></span>
                 </div>
             </div>
             <!-- /column -->
             <div class="col-lg-7" data-cue="slideInDown">
                 <figure><img class="w-auto" src="assets/img/illustrations/i6.png" srcset="./assets/img/illustrations/i6@2x.png 2x" alt="" /></figure>
             </div>
             <!-- /column -->
         </div>
         <!-- /.row -->
     </div>
     <!-- /.container -->
 </section>
 <!-- section end -->

 <!-- /section start-->
 <section class="wrapper bg-light">
     <div class="container py-14 py-md-16 pb-md-17">
         <div class="row gx-md-5 gy-5 mt-n18 mt-md-n21 mb-14 mb-md-17">
             <div class="col-md-6 col-xl-3">
                 <div class="card shadow-lg card-border-bottom border-soft-yellow">
                     <div class="card-body">
                         <img src="assets/img/icons/lineal/bar-chart.svg" class="svg-inject icon-svg icon-svg-md text-yellow mb-3" alt="" />
                         <h4>Data Visualization</h4>
                         <p class="mb-2">View large collected graphical data with a single click.</p>
                         <a href="#" class="more hover link-yellow">Learn More</a>
                     </div>
                     <!--/.card-body -->
                 </div>
                 <!--/.card -->
             </div>
             <!--/column -->
             <div class="col-md-6 col-xl-3">
                 <div class="card shadow-lg card-border-bottom border-soft-green">
                     <div class="card-body">
                         <img src="assets/img/icons/lineal/chat-2.svg" class="svg-inject icon-svg icon-svg-md text-green mb-3" alt="" />
                         <h4>Social Engagement</h4>
                         <p class="mb-2">Share messages quickly to your fellow students.</p>
                         <a href="#" class="more hover link-green">Learn More</a>
                     </div>
                     <!--/.card-body -->
                 </div>
                 <!--/.card -->
             </div>
             <!--/column -->
             <div class="col-md-6 col-xl-3">
                 <div class="card shadow-lg card-border-bottom border-soft-orange">
                     <div class="card-body">
                         <img src="assets/img/icons/lineal/id-card.svg" class="svg-inject icon-svg icon-svg-md text-orange mb-3" alt="" />
                         <h4>Student Identity</h4>
                         <p class="mb-2">View student info and data at the speed of a click.</p>
                         <a href="#" class="more hover link-orange">Learn More</a>
                     </div>
                     <!--/.card-body -->
                 </div>
                 <!--/.card -->
             </div>
             <!--/column -->
             <div class="col-md-6 col-xl-3">
                 <div class="card shadow-lg card-border-bottom border-soft-blue">
                     <div class="card-body">
                         <img src="assets/img/icons/lineal/networking.svg" class="svg-inject icon-svg icon-svg-md text-blue mb-3" alt="" />
                         <h4>Easy Collaboration</h4>
                         <p class="mb-2">Collaborate more effectively with team mates</p>
                         <a href="#" class="more hover link-blue">Learn More</a>
                     </div>
                     <!--/.card-body -->
                 </div>
                 <!--/.card -->
             </div>
             <!--/column -->
         </div>

         <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
             <div class="col-lg-7 order-lg-2">
                 <figure><img class="w-auto" src="assets/img/illustrations/i2.png" srcset="./assets/img/illustrations/i2@2x.png 2x" alt="" /></figure>
             </div>
             <!--/column -->
             <div class="col-lg-5">
                 <h3 class="display-4 mb-7 mt-lg-10">Some Problems We Solve.</h3>
                 <div class="accordion accordion-wrapper" id="accordionExample">
                     <div class="card plain accordion-item">
                         <div class="card-header" id="headingOne">
                             <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"> Finding Students </button>
                         </div>
                         <!--/.card-header -->
                         <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                             <div class="card-body">
                                 <p>We help you find classmates that would be otherwise difficult to do manually. Here we have collated names, reg numbers, phone numbers, even emails.</p>
                             </div>
                             <!--/.card-body -->
                         </div>
                         <!--/.accordion-collapse -->
                     </div>
                     <!--/.accordion-item -->
                     <div class="card plain accordion-item">
                         <div class="card-header" id="headingTwo">
                             <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"> Mass Messaging </button>
                         </div>
                         <!--/.card-header -->
                         <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                             <div class="card-body">
                                 <p>With our site, you can easily send emails, sms' or whatsapp messages to numerous people at once. People can be notified of classes, notified of assignments and so on</p>
                             </div>
                             <!--/.card-body -->
                         </div>
                         <!--/.accordion-collapse -->
                     </div>
                     <!--/.accordion-item -->
                     <div class="card plain accordion-item">
                         <div class="card-header" id="headingThree">
                             <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"> Easy Class Data Access </button>
                         </div>
                         <!--/.card-header -->
                         <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                             <div class="card-body">
                                 <p>All data about the class, including names, assignments, lecturers, timetables are easily and conveniently available.</p>
                             </div>
                             <!--/.card-body -->
                         </div>
                         <!--/.accordion-collapse -->
                     </div>
                     <!--/.accordion-item -->
                 </div>
                 <!--/.accordion -->
             </div>
             <!--/column -->
         </div>
         <!--/.row -->
     </div>
     <!-- /.container -->
 </section>
 <!-- /section end -->

 <!-- section start -->
 <section class="wrapper bg-soft-primary">
     <div class="container py-14 pt-md-17 pb-md-20">
         <div class="row gx-lg-8 gx-xl-12 gy-10 gy-lg-0">
             <div class="col-lg-4 text-center text-lg-start">
                 <h3 class="display-4 mb-3 pe-xl-15">We are making progress</h3>
                 <p class="lead fs-lg mb-0 pe-xxl-10">Over 100 students data are recorded.</p>
             </div>
             <!-- /column -->
             <div class="col-lg-8 mt-lg-2">
                 <div class="row align-items-center counter-wrapper gy-6 text-center">
                     <div class="col-md-4">
                         <img src="assets/img/icons/lineal/check.svg" class="svg-inject icon-svg icon-svg-md text-primary mb-3" alt="" />
                         <h3 class="counter">2</h3>
                         <p>Completed Projects</p>
                     </div>
                     <!--/column -->
                     <div class="col-md-4">
                         <img src="assets/img/icons/lineal/user.svg" class="svg-inject icon-svg icon-svg-md text-primary mb-3" alt="" />
                         <h3 class="counter">116</h3>
                         <p>Registered Classmates</p>
                     </div>
                     <!--/column -->
                     <div class="col-md-4">
                         <img src="assets/img/icons/lineal/briefcase-2.svg" class="svg-inject icon-svg icon-svg-md text-primary mb-3" alt="" />
                         <h3 class="counter">207</h3>
                         <p>Page Visits</p>
                     </div>
                     <!--/column -->
                 </div>
                 <!--/.row -->
             </div>
             <!-- /column -->
         </div>
         <!-- /.row -->
     </div>
     <!-- /.container -->
 </section>
 <!-- section end -->

 <!-- section start -->
 <section class="wrapper bg-light">
     <div class="container py-14 py-md-17">
         <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
             <div class="col-lg-7">
                 <figure><img class="w-auto" src="assets/img/illustrations/i5.png" srcset="./assets/img/illustrations/i5@2x.png 2x" alt="" /></figure>
             </div>
             <!--/column -->
             <div class="col-lg-5">
                 <h3 class="display-4 mb-7">Got any questions? Don't hesitate to get in touch.</h3>
                 <div class="d-flex flex-row">
                     <div>
                         <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-location-pin-alt"></i> </div>
                     </div>
                     <div>
                         <h5 class="mb-1">Address</h5>
                         <address>Moonshine St. 14/05 Light City, London</address>
                     </div>
                 </div>
                 <div class="d-flex flex-row">
                     <div>
                         <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-phone-volume"></i> </div>
                     </div>
                     <div>
                         <h5 class="mb-1">Phone</h5>
                         <p>00 (123) 456 78 90</p>
                     </div>
                 </div>
                 <div class="d-flex flex-row">
                     <div>
                         <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-envelope"></i> </div>
                     </div>
                     <div>
                         <h5 class="mb-1">E-mail</h5>
                         <p class="mb-0"><a href="cdn-cgi/l/email-protection.html#760517181214190e36131b171f1a5815191b" class="link-body"><span class="__cf_email__" data-cfemail="b7c4d6d9d3d5d8cff7d2dad6dedb99d4d8da">[email&#160;protected]</span></a></p>
                     </div>
                 </div>
             </div>
             <!--/column -->
         </div>
         <!--/.row -->
     </div>
     <!-- /.container -->
 </section>
 <!-- section end -->

 <!-- /section -->