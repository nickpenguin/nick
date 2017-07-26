<?php

	$zoom_inc_prc = 23 ;

?><!DOCTYPE>
<html><head>
	<link rel="stylesheet" href="css/normalize.min.css" />
	<link rel="stylesheet" href="css/style.css" />
	<title>ArtCrowd - About</title>
</head>
<body>
	<div style="border-bottom:4px solid #fff;position:relative;width:100%;height:100%;background-image:url(images/aac.png);background-size:cover;background-position:center;z-index:10"></div>
	<div style="width:100%;height:100%" id="mark"></div>
	<div style="width:100%;height:100%"></div>
	<div style="width:100%;height:100%"></div>
	<div style="width:100%;height:100%"></div>
	<div style="width:100%;height:100%"></div>
	<div style="width:100%;height:100%"></div>
	<div style="width:100%;height:100%"></div>
	<div style="width:100%;height:100%"></div>
	<div style="width:100%;height:100%"></div>
	<div id="f0" style="position:fixed;border-bottom:4px solid #fff;left:50%;top:50%;width:<?=(100 + $zoom_inc_prc)?>%;height:<?=(100 + $zoom_inc_prc)?>%;background-image:url(images/a03.jpg);background-size:cover;background-position:center;z-index:9"></div>
	<div id="f1" style="position:fixed;border-bottom:4px solid #fff;left:50%;top:50%;width:<?=(100 + $zoom_inc_prc)?>%;height:<?=(100 + $zoom_inc_prc)?>%;background-image:url(images/a01.jpg);background-size:cover;background-position:center;z-index:8"></div>
	<div id="f2" style="position:fixed;border-bottom:4px solid #fff;left:50%;top:50%;width:<?=(100 + $zoom_inc_prc)?>%;height:<?=(100 + $zoom_inc_prc)?>%;background-image:url(images/a02.jpg);background-size:cover;background-position:center;z-index:7"></div>
	<div id="f3" style="position:fixed;border-bottom:4px solid #fff;left:50%;top:50%;width:<?=(100 + $zoom_inc_prc)?>%;height:<?=(100 + $zoom_inc_prc)?>%;background-image:url(images/a04.jpg);background-size:cover;background-position:center;z-index:6"></div>
	<div id="f4" style="position:fixed;border-bottom:4px solid #fff;left:50%;top:50%;width:<?=(100 + $zoom_inc_prc)?>%;height:<?=(100 + $zoom_inc_prc)?>%;background-image:url(images/a05.jpg);background-size:cover;background-position:center;z-index:5"></div>
	<div id="f5" style="position:fixed;border-bottom:4px solid #fff;left:50%;top:50%;width:<?=(100 + $zoom_inc_prc)?>%;height:<?=(100 + $zoom_inc_prc)?>%;background-image:url(images/a06.jpg);background-size:cover;background-position:center;z-index:4"></div>
	<div id="f6" style="position:fixed;border-bottom:4px solid #fff;left:50%;top:50%;width:<?=(100 + $zoom_inc_prc)?>%;height:<?=(100 + $zoom_inc_prc)?>%;background-image:url(images/a07.jpg);background-size:cover;background-position:center;z-index:3"></div>
	<div id="f7" style="position:fixed;border-bottom:4px solid #fff;left:50%;top:50%;width:<?=(100 + $zoom_inc_prc)?>%;height:<?=(100 + $zoom_inc_prc)?>%;background-image:url(images/a08.jpg);background-size:cover;background-position:center;z-index:2"></div>
	<div id="f8" style="position:fixed;border-bottom:4px solid #fff;left:50%;top:50%;width:<?=(100 + $zoom_inc_prc)?>%;height:<?=(100 + $zoom_inc_prc)?>%;background-image:url(images/a09.jpg);background-size:cover;background-position:center;z-index:1"></div>
	
	<script src="js/jquery.min.js"></script>
	<script type="text/javascript">
		var pi = <?=$zoom_inc_prc?> ;
		var ot  ;
		window.onbeforeunload = function () { window.scrollTo(0, 0);}
		$(function() {
			ot = $('#mark').offset().top ;
			var p = 100 + pi ;
			$('#f0').css({'margin-left' : '-' + $('#f0').width()/2 + 'px'});
			$('#f0').css({'margin-top' : (ot*pi/100)/2 + 'px'});
		});
		$(window).scroll(function() {
			var scrollTop = $(window).scrollTop();
			var n = Math.floor(scrollTop/ot);
			
			var p = 100 + pi - pi*(scrollTop - n*ot)/ot ;
			if (p < 100) p = 100 ;
			$('#f' + n).css({'width' : p + '%', 'height' : p + '%'});
			//console.log('#f' + n);
			//console.log(p);
			var mt = (ot*p/100)/2 ;
			/*if (n == 0)
				console.log(ot);*/
			$('#f' + n).css({'margin-top' : '-' + mt + 'px'});
			$('#f' + n).css({'margin-left' : '-' + $('#f' + n).width()/2 + 'px'});
			while (n > 0) {
				var i = n - 1 ;
				var p = 125*(scrollTop - n*ot)/ot ;
				$('#f' + i).css({'margin-top' : '-' + (ot/2 + ot*p/100) + 'px'});
				console.log((ot/2 + ot*p/100));
				n = i ;
			}
		});
	</script>
</body>
</html>