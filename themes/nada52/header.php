<style>
.site-header .navbar-light .no-logo .navbar-brand--sitename {border:0px!important;margin-left:0px}
.site-header .navbar-light .no-logo .nada-site-title { /*font-size:18px;*/ }
</style>
<header class="site-header bg-white sticky-top">
  <?php /*?>
  <div class="container-fluid wb-user-bar">
    <div class="row">
      <div class="col-12">
        <div class="container">
          <?php //require 'user-bar.php';?>
        </div>
      </div>
    </div>
  </div>
  <?php */ ?>

  <?php //language bar ?>
  <?php require 'lang-bar.php';?>

  <div class="container">

    <div class="row">
      <div class="col-12">
        <nav class="navbar navbar-expand-md navbar-light rounded navbar-toggleable-md wb-navbar">

          <?php /**
           * 
           * LOGO + Text
           **/  ?>
          <?php /* ?>
          <div class="navbar-brand">
            <div class="navbar-brand--logo">
              <img src="<?php echo base_url();?>themes/nada52/images/logo.svg" >
            </div>
            <div class="navbar-brand--sitename">
              <div>
                <a class="nada-site-title" href="<?php echo site_url(); ?>">
                  <?php
                    // echo $this->config->item( 'website_title' );
                    echo $this->config->item( 'site_name' );
                  ?>
                </a>
              </div>
              <div class="nada-site-subtitle">An Online Microdata Catalog</div>
            </div>
          </div>
          <?php */ ?>


          <?php /**
           * 
           * text only 
           **/  ?>
          <?php /**/ ?>
          <div class="navbar-brand no-logo">
            <div class="navbar-brand--logo">
              <a class="" href="<?php echo site_url(); ?>">
                <img src="<?php echo base_url();?>themes/nada52/images/IDE-Home_MME.png" >
              </a>
            </div>

            <div class="navbar-brand--sitename">
              <div>
                <a class="nada-site-title text-white h4" href="<?php echo site_url(); ?>">
                  <?php
                    // echo $this->config->item( 'website_title' );
                    // echo $this->config->item( 'site_name' );
                  ?>
                </a>
              </div>
              <!-- <div class="nada-site-subtitle text-white h6">Data Catalog</div> -->
            </div>
          </div>
          <?php /**/?>
          

          <button class="navbar-toggler navbar-toggler-right collapsed wb-navbar-button-toggler" type="button" data-toggle="collapse" data-target="#containerNavbar" aria-controls="containerNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <!-- Start menus -->
          <?php require 'nav-menu.php'; ?>
          <!-- Close Menus -->

        </nav>
      </div>

    </div>
    <!-- /row -->

  </div>

</header>