<!DOCTYPE html>
<html lang="ko">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ko" lang="ko">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximun-scale=1,">
  <title>JUN · Hub page</title>
  <link rel="stylesheet" href="../../common/css/default.css?<?=md5(microtime())?>">
  <link rel="stylesheet" href="../../common/css/main_nav/main_nav.css?<?=md5(microtime())?>">
  <link href="https://fonts.googleapis.com/css?family=Domine:400,700" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Arimo|Nanum+Gothic|Nanum+Myeongjo|Oswald|PT+Sans+Narrow|Raleway|Roboto+Condensed|Share+Tech" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Great+Vibes" rel="stylesheet">
  <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../../common/loading/loading.css">
  <link rel="stylesheet" href="../../common/main_nav/main_navi.css">
</head>

<body class="main-nav-body"><span class="body-bg-control">by JunYeong</span>
  <?php include("../../common/loading/loading.php"); ?>
  <?php include("../../common/main_nav/main_navi.php"); ?>

  <!-- 메인 info -->
  <div class="info-card">

    <div class="info-card__image-exposure info-card__content picchange">
      <div class="card1">
        <div class="info-card__image-exposure--blend">
        </div>
        <div class="info-card_pic">
        </div>
      </div>

      <div class="card2">
        <svg width="0" height="0">
                          <defs>
                            <clipPath id="mylogo" clipPathUnits="objectBoundingBox">
                              <path d="M0.500, 0.945 L0.994, 0.090 L0.006, 0.090 L0.500, 0.945 L0.500, 0.650 L0.262, 0.238 L0.738, 0.237 L0.500, 0.650z"></path>
                            </clipPath>
                          </defs>
                        </svg>

        <!-- 메인 로고  -->
        <div class="triangle logo_first"></div>
        <div class="triangle logo_second"></div>
      </div>

    </div>

    <div class="info-card_bio info-card__content">
      <div class="info-change">
        <h2 class="info-card-title">JunYeong Lee <small>(Phantom05)</small> <span class="arrow"><img src="../../common/img/mainnav/arrow.png" alt=""></span></h2>
        <div id="info-change-click">

        </div>
      </div>
    </div>

    <div class="close-area">
      <span class="close"></span>
    </div>

  </div>
  <!-- 메인 info -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script>
    <?php include_once("../../common/loading/loading.js"); ?>
    <?php include_once("../../common/main_nav/main_navi.js"); ?>

    window.addEventListener('DOMContentLoaded', function() {
      function vue_v1() {
        console.log('here v1');
        let xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
          if (xhr.status === 200 && xhr.readyState === 4) {
            ajax_info.innerHTML = xhr.responseText;
            get_click_info = 'false';
          }
        }
        xhr.open('POST', '../../common/css/main_nav/info-change.php', true);
        xhr.setRequestHeader('Content-type','application/x.www.form.urlencoded');
        xhr.send();
      }

      function vue_v2() {
        let vjx = new XMLHttpRequest();
        vjx.onreadystatechange = function() {
          if (this.status === 200 && this.readyState === 4) {
            console.log('here v2');
            ajax_info.innerHTML = vjx.responseText;
            get_click_info = 'true';
          }
        }
        vjx.open('POST', '../../common/css/main_nav/info-change1.php', true);
        vjx.setRequestHeader('Content-type','application/x.www.form.urlencoded');
        vjx.send();
      }

      var get_click_info = 'true';
      vue_v2();

      var ajax_info = document.getElementById('info-change-click');
      var arrowButton = document.getElementsByClassName('arrow');

      arrowButton[0].addEventListener('click', function() {
        if (get_click_info === 'true') {
          vue_v1();
        } else {
          vue_v2();
        }
      });
    });
  </script>
</body>

</html>