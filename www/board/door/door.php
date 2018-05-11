<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>Board Project</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../common/door.css">
    <link rel="stylesheet" href="../../common/css/default.css">
    <link href="https://fonts.googleapis.com/css?family=Nanum+Gothic|Nanum+Gothic+Coding|Nanum+Myeongjo|Roboto+Condensed" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body>
   
    <span class="skip">skip</span>
    <span class="menu"><i class="material-icons">&#xE3C7;</i></span>
    <div class="menu_bar">
      <div>
          <p class="menu_introduce"><img src="http://pluspng.com/img-png/abstract-png-abstract-line-png-image-9083-1139.png" alt="menu_logo" class="menu_logo"> Introduce</p>
      </div>
       <ul class="menu_bar_control">
           <li><a href="http://monster2jy.cafe24.com/board/index/index.php">게시판 메인</a></li>
           <li><a href="">게시판 글쓰기</a></li>
           <li><a href="">카테고리</a></li>
           <li><a href="">카테고리</a></li>
           <li><a href="">카테고리</a></li>
       </ul>
        
    </div>

<div class="conteneur" align="center">
   <div class="control">
    <div class="door_main">
      <img src="http://cfile4.uf.tistory.com/image/99A391425AB32373298B4E"/>
        <div class="txtcss">
         <p>Hello, Guys</p>
        <p>WE COMPANY SO CRAZY</p>
        </div>
    </div>
    <div class="html5_div">
      <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/173024/logo_html5.png"/>
      <div class="txthtml">
       <p>Board Project</p>
          <p class="txthtml2">Welcome to our Project</p>
      </div>
    </div>
    <div class="door_info_dev1">
       <p>Front-End Developer</p>
       <p>(JunYeong-Lee)</p>
    </div>
    <div class="door_info_dev2">
       <p>Back-End Developer</p>
       <p>(ByungChul-Seon)</p>
    </div>
    <div class="door_intro">
        <p class="door_hello">Soon, You will say wonderful!</p>
    </div>
     <div class="site_in1">
        <a href="http://monster2jy.cafe24.com/board/index/index.php">
         <p class="site_font">Click !</p>
         <p>(Site in)</p>
         </a>
     </div>
      </div>
      
      <div class="skip_site_in2">
         <a href="http://monster2jy.cafe24.com/board/index/index.php">
          <p class="site_font">Click !</p>
          <p>(Site in)</p>
          </a>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script>
        $('.door_intro').delay(15000).fadeIn(1000).delay(2000).fadeOut(1000);
        $('.html5_div').delay(18000).fadeOut(1000);
        $('.site_in1').delay(20000).fadeIn(1000);
        $('.txthtml2').delay(4000).show(2000);
        $('.skip').click(function(){
            $('.control').fadeOut(1000);
            $('.skip_site_in2').delay(2000).fadeIn(1000);
        });
        
         $('.menu').click(function(){
             $('.menu_bar').toggleClass('menu_bar_active');
             $('.menu i').toggleClass('menu_color');
     });
        
     
    </script>
</body>
</html>