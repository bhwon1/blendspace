<?
    include_once('./_config.php');
?>

<?php
http_response_code(404);
?>

<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="<?=$path?>/css/output.css" rel="stylesheet">
  <link href="<?=$path?>/css/style.css" rel="stylesheet">
  
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

  <title>Connect&</title>
</head>
<body>
  <div id="background" class="fixed inset-0 opacity-50 z-40"></div>

  <!-- header -->
  <?
    include_once($path.'section/header.php');
  ?>

  <!-- logo clouds -->
  <?
    include_once($path.'section/logoClouds.php');
  ?>
  
  <!-- footer -->
  <?
      include_once($path.'section/footer.php');
  ?>

  <!-- 공용 -->
   <script src="./js/script.js"></script>
</body>
</html>