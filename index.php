<!DOCTYPE html>
<html lang="en">



<head>
  <?php require_once('includes/head.php') ?>
</head>

<body class="wrapper bg-soft-primary">
  <!-- preloader start -->
  <div class="preloader">
    <?php require_once('includes/preloader.php'); ?>
  </div>
  <!-- preloader end -->

  <!-- modal start -->
  <div class="content-wrapper">
    <?php require_once('includes/header.php') ?>
    <div class="modal fade modal-popup" id="modal-02" tabindex="-1">
      <?php require_once('includes/mail_list_modal.php') ?>
    </div>
    <!--/.modal end-->


    <!-- ///////////////////////////////////////////////////////////////  CENTRAL LOCATION START  ///////////////////////////////////////////////////////// -->
    <div id="central_content" class="mb-5">
      <?php require_once('pages/home.php') ?>
    </div>
    <!-- ///////////////////////////////////////////////////////////////  CENTRAL LOCATION END  ///////////////////////////////////////////////////////////// -->
  </div>

  <!-- footer start -->
  <footer class="bg-light pt-5">
    <?php require_once('includes/footer.php') ?>
  </footer>
  <!-- footer end -->
  <!-- <div class="button-wrap"><button data-dialog="somedialog" class="trigger">Open Dialog</button></div> -->

  <div class="progress-wrap">
    <?php require_once('includes/progress_wrap.php') ?>
  </div>
  <?php require_once('includes/js_includes.php') ?>
</body>

</html>