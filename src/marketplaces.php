<?
    include_once('./_config.php');
?>
<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta name="description" content="블렌드스페이스는 사람과 기회를 연결하여 성공을 만들어가는 플랫폼입니다.">
  <meta name="keywords" content="블렌드스페이스, 연결의 힘, 성공의 시작, 네트워크, 협업, 플랫폼">
  <meta name="naver-site-verification" content="2b81d63df7d0cf57d08c72105459dfe674347377" />
  <meta name="google-site-verification" content="Lyp-miUsepjXhQErDwAbRI3ACyqoTxJZPeibkvz_06w" />

  <link href="<?=$path?>/css/output.css" rel="stylesheet">
  <link href="<?=$path?>/css/style.css" rel="stylesheet">
  
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

  <title>블렌드스페이스 - 연결의 힘, 성공의 시작</title>
</head>
<body>
  <div id="background" class="fixed inset-0 opacity-50 z-40"></div>

  <!-- header -->
  <?
    include_once($path.'section/header.php');
  ?>

  <!-- content sections -->
  <?
    include_once($path.'section/contentSections.php');
  ?>

  <!-- product overview -->
  <?
    include_once($path.'section/productOverview.php');
  ?>

  <!-- category preview -->
  <?
    include_once($path.'section/categoryPreview.php');
  ?>

  <!-- product Lists -->
  <?
    include_once($path.'section/productLists.php');
  ?>

  <!-- product features -->
  <?
    include_once($path.'section/productFeatures.php');
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