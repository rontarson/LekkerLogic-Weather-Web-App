<?php 
$latitude = 25.761484;
$longitude = -80.198975;
require 'php/api.php';
date_default_timezone_set($tz);
$activePage = "miami";
?>

<!DOCTYPE html>
<html lang="en">

<!-- HEADER -->
<?php require 'partials/part_header.php' ?>

  <body onload="getLocation()">

    <!-- NAV BAR -->
    <?php require 'partials/part_nav.php' ?>

    <div class="container">

      <div class="row">
      <h3 class="ml-15 text-info">Miami, FL</small></h3>

        <!-- CURRENT CONDITIONS -->
        <?php require 'partials/part_current.php' ?>

        <!-- TODAY FORECAST -->
        <?php require 'partials/part_today.php' ?>

      </div> <!-- /row -->

      <!-- HOURLY -->
      <?php require 'partials/part_hourly.php' ?>

      <!-- WEEK FORECAST -->
      <?php require 'partials/part_daily.php' ?>

    </div> <!-- /container -->

    <?php require 'partials/part_footer.php' ?>

  </body>
</html>