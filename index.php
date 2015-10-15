<?php 
$latitude = 39.753691;
$longitude = -105.000616;
require 'php/api.php';
date_default_timezone_set($tz);
$activePage = "denver";
?>

<!DOCTYPE html>
<html lang="en">

<!-- HEADER -->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="author" content="LekkerLogic, LLC">
  <link rel="icon" type="image/png" sizes="192x192"  href="css/fav-icons/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="css/fav-icons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="css/fav-icons/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="css/fav-icons/favicon-16x16.png">

  <title>Weather</title>

  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/weather-icons/2.0.5/css/weather-icons.min.css">

  <!-- Custom styles -->
  <link href="css/weather.css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <script>
    var x = document.getElementById("body");
    function getLocation()
    {
      if (navigator.geolocation)
      {
        navigator.geolocation.getCurrentPosition(bindPosition);
      }
      else {
        x.innerHTML = "Geolocation is not supported by this browser.";
      }
    }
    function bindPosition(position) {
      $("input[name='latitude']").val(position.coords.latitude);
      $("input[name='longitude']").val(position.coords.longitude);
    }
  </script>

</head>

  <body onload="getLocation()">

    <!-- NAV BAR -->
    <?php require 'partials/part_nav.php' ?>

    <div class="container">

      <div class="row">
      <h3 class="ml-15 text-info">Denver, CO</small></h3>
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
