<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=1000">
<meta name="description" content="How to read the time in Korean. 한국어로 시간 읽는 법을 가르쳐주는 사이트입니다. ">
<meta name="author" content="ericbang2000@gmail.com">
<link rel="icon" href="favicon.ico"> 
<meta name="title" content="한국어시계" />
<meta name="keywords" content="Korean, Clock, Time, howto, Read">
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/earlyaccess/hanna.css">
<link rel="stylesheet" href="flipclock<?php if($_GET['m']=='hi')echo '2';?>.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="flipclock<?php if($_GET['m']=='hi')echo '2';?>.min.js?v=3"></script>		
</head>
<body>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-37829069-9', 'auto');
  ga('send', 'pageview');
</script>
	<div class="wrap">
		<div class="clock"></div> 
	</div>
	<?php if( ! isset($_GET['app']) ){?>
	<div class="btn_area"><a href="/download.php" target="_blank"><img src="btn_download.png" alt="Get Free ScreenSaver for MAC"></a></div>
	<?php }?>
	<script type="text/javascript">
		var clock;
		$(document).ready(function() {
			clock = $('.clock').FlipClock({
				clockFace: 'TwelveHourClock',
				showSeconds: <?if($_GET['m']=='hi'){ echo 'false';}else{echo 'true';}?>
			});
		});
	</script>
</body>
</html>