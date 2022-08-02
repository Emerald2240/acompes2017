<section class="wrapper bg-soft-primary">
    <div class="container py-14 py-md-16">
        <div class="row gx-md-8 gx-xl-12 gy-10 align-items-center">
            <div class="col-md-8 col-lg-6 offset-lg-0 col-xl-5 offset-xl-1 position-relative">
                <div class="shape bg-dot primary rellax w-17 h-21" data-rellax-speed="1" style="top: -2rem; left: -1.4rem;"></div>
                <?php if ($_POST['gender'] == 'm') { ?>
                    <figure class="rounded"><img src="assets/img/svg/undraw_male_avatar.svg" alt="Male Avatar"></figure>
                <?php } else { ?>
                    <figure class="rounded"><img src="assets/img/svg/undraw_female_avatar.svg" alt="Male Avatar"></figure>
                <?php } ?>
            </div>
            <!--/column -->
            <div class="col-lg-6">
                <h2 class="display-4 mb-8"><?php echo ucwords($_POST['last_name']) . ' ' . ucwords($_POST['first_name']) . ' ' . ucwords($_POST['middle_name']); ?></h2>
                <div class="d-flex flex-row">
                    <div>
                        <div class="icon text-primary fs-28 me-6 mt-n1"> <i class="uil uil-location-pin-alt"></i> </div>
                    </div>
                    <div>
                        <h5 class="mb-1">Address</h5>
                        <address>ESUT, Agbani<br class="d-none d-md-block" />Enugu, Nigeria</address>
                    </div>
                </div>
                <div class="d-flex flex-row">
                    <div>
                        <div class="icon text-primary fs-28 me-6 mt-n1"> <i class="uil uil-phone-volume"></i> </div>
                    </div>
                    <div>
                        <h5 class="mb-1">Phone</h5>
                        <p>
                            <a href="tel:<?php echo $_POST['telephone'] ?>"><?php echo $_POST['telephone'] ?></a>
                        </p>
                    </div>
                </div>
                <div class="d-flex flex-row">
                    <div>
                        <div class="icon text-primary fs-28 me-6 mt-n1"> <i class="uil uil-envelope"></i> </div>
                    </div>
                    <div>
                        <h5 class="mb-1">E-mail</h5>
                        <p class="mb-0"><a href="mailto:[<?php echo $_POST['email'] ?>]" class="link-body"><?php echo $_POST['email'] ?></a></p>
                    </div>
                </div>
            </div>
            <!--/column -->
        </div>
        <!--/.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /section -->