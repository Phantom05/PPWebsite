<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="../common/css/website.css">
    <link rel="stylesheet" href="../common/css//default.css">
</head>
<body>

 <!---->
<div class="button">
	<a class="btn-open" href="#">전체보기</a>
</div>

<div class="overlay">
	<div class="wrap">
		<ul class="wrap-nav">
			<li><a href="#">About</a>
			<ul>
				<li><a href="#">About Company</a></li>
				<li><a href="#">Designers</a></li>
				<li><a href="#">Developers</a></li>
				<li><a href="#">Pets</a></li>
			</ul>
			</li>
			<li><a href="#">Services</a>
			<ul>
				<li><a href="https://www.google.hr/">Web Design</a></li>
				<li><a href="#">Development</a></li>
				<li><a href="#">Apps</a></li>
				<li><a href="#">Graphic design</a></li>
				<li><a href="#">Branding</a></li>
			</ul>
			</li>
			<li><a href="#">Work</a>
			<ul>
				<li><a href="#">Web</a></li>
				<li><a href="#">Graphic</a></li>
				<li><a href="#">Apps</a></li>
			</ul>
			</li>
		</ul>
		<div class="social">
			<a href="http://mario-loncarek.from.hr/">
			<div class="social-icon">
				<i class="fa fa-facebook"></i>
			</div>
			</a>
			<a href="#">
			<div class="social-icon">
				<i class="fa fa-twitter"></i>
			</div>
			</a>
			<a href="#">
			<div class="social-icon">
				<i class="fa fa-codepen"></i>
			</div>
			</a>
			<a href="#">
			<div class="social-icon">
				<i class="fa fa-behance"></i>
			</div>
			</a>
			<a href="#">
			<div class="social-icon">
				<i class="fa fa-dribbble"></i>
			</div>
			</a>
		</div>
	</div>
</div>

  
  <!---->
  
  
  
   <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script>
    $(document).ready(function(){
    $(".button a").click(function(){
        $(".overlay").fadeToggle(200);
       $(this).toggleClass('btn-open').toggleClass('btn-close');
    });
});
$('.overlay').on('click', function(){
    $(".overlay").fadeToggle(200);   
    $(".button a").toggleClass('btn-open').toggleClass('btn-close');
    open = false;
});
        
        
        
        
        
        
    </script>
</body>
</html>