<?php
  /**
   * index.php.
   *
   * Currant Pi - Raspberry Pi Status
   *
   * @author     Colin Waddell
   * @license    https://opensource.org/licenses/MIT  The MIT License (MIT)
   *
   * @link       https://github.com/ColinWaddell/CurrantPi
   */

  /*
   * Libraries and helper function
   */
  include('lib/StringHelpers.php');
  include('lib/CurrantModule.php');

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Header -->
    <?php include('content/header/HeaderView.php'); ?>
  </head>

  <body>

    <div class="container">
        <!-- Banner -->
      <div class="header clearfix title-area">
        <?php include('content/banner/BannerView.php'); ?>
      </div>

      <div class="row">
        <!-- Hardware -->
        <div class="col-lg-6 widget-padding">
            <?php include('content/hardware/HardwareView.php'); ?>
        </div>
        <!-- Network -->
        <div class="col-lg-6 widget-padding">
            <?php include('content/network/NetworkView.php'); ?>
        </div>
      </div>

      <div class="row">
        <!-- Load Average -->
        <div class="col-lg-6 widget-padding">
            <?php include('content/load_average/LoadAverageView.php'); ?>
        </div>
        <div class="col-lg-6 widget-padding">
          <!-- Memory -->
            <?php include('content/memory/MemoryView.php'); ?>
        </div>
      </div>

      <div class="row">
        <!-- Storage -->
        <div class="col-lg-12 widget-less-padding">
            <?php include('content/storage/StorageView.php'); ?>
        </div>
      </div>
      
      <div class="row">
        <!-- Raspotify Status -->
        <div class="col-lg-12 widget-less-padding">
            <?php include('content/raspotify/status'); ?>
        </div>
      </div>

      <!-- Footer -->
      <footer class="footer">
        <?php include('content/footer/FooterView.php'); ?>
      </footer>

    </div> <!-- /container -->

  </body>
</html>
