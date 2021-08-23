
<?php 
 include("admin/class/function.php");
 $obj = new Admin();

?>



<?php include_once("includes/head.php"); ?>

<body>

  <!-- ***** Preloader Start ***** -->
  <?php include_once("includes/preload.php"); ?>
  <!-- ***** Preloader End ***** -->

  <!-- Header -->
  <?php include_once("includes/header.php"); ?>

  <!-- Page Content -->
  <!-- Banner Starts Here -->
  <?php include_once("includes/banner.php"); ?>
  <!-- Banner Ends Here -->

  <?php include_once("includes/cta.php"); ?>

  <section class="blog-posts">
    <div class="container">
      <div class="row">
        <?php include_once("includes/blog_post.php"); ?>
        <?php include_once("includes/sidebar.php"); ?>

      </div>
    </div>
  </section>

  <?php include_once("includes/footer.php"); ?>

  <!-- Bootstrap core JavaScript -->

  <?php include_once("includes/script.php"); ?>


</body>

</html>