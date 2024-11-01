<!DOCTYPE HTML>
<html lang="en">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
		<meta charset="UTF-8">
		<title>First anniversary</title>
		<link rel="stylesheet" href="{{ asset('css/format.css') }}">
	</head>

	<body style="margin:0px">
		<audio autoplay loop>
			<source src="music/music.mp3" type="audio/mpeg">
			Your browser does not support the audio.
		</audio>
		<canvas></canvas>
		<div id="imgTxt">
			<span id="Txt"></span> <br />
			<span id="tmp"></span>
			<img id="img" src="">
		</div>
		<div id="heartTxt">
			<span id="clickMe">Click!</span>
			<div id="heart">
				<button id="button" onclick="play()"></button>
			</div>
		</div>
		<div id="content">
			<h2 id="together">JengJeng!!! Sudah Segini AHAHAHAHAHA</h2>
			<div id="timer">
				<b id="d"></b> Days 
				<b id="h"></b> Hours
				<b id="m"></b> Minutes
				<b id="s"></b> Seconds
			</div>
		</div>

    	<div id = "typeDiv">
        	<span id="txt1"></span> <br />
        	<span id="txt2"></span>
    	</div>		

		<script >
			var ok = 0;
			var flag = 1;
			var myImage = document.getElementById("img");
			var myTxt = document.getElementById("Txt");
			var imageArray = ["pic/pic1.png", "pic/pic2.png", "pic/pic3.png", "pic/pic4.png", "pic/pic5.png", "pic/pic6.png", 
			"pic/pic7.png", "pic/pic8.png", "pic/pic9.png", "pic/pic10.png", "pic/pic11.png", "pic/pic12.png", "pic/pic13.png",
			"pic/pic14.png", "pic/pic15.png", "pic/pic16.png"];
			var imageIndex = 0;
			var txtArray = ["Ini Pertama kali ketemu ygy", "Ini Pas Lagi di NakoSumrec -`-", "Ini pas Ancol cuyy(｡･ω･｡)ﾉ♡",
			 "Pas lagi di istana bogor nich", "Makan bareng keluar kamuch ~", "Dirumah kamu kwkw", "o(≧v≦)o",
			 "Di Pantai Ancol nichh!!!", "BUEHEHEH", "Photoboxx HUHEHEHE", "Maskeran nihh", 
			 "Museum lagi nihhh۶", "Bareng tante buahahah", "Di MR DI AI WAY", "MUSEUM LAGEHHHH", "(๑òωó๑)"];
			 var len = imageArray.length;
			var t = 0;
		</script>
		
		<script type="text/javascript" src="./js/stars.js"></script>	
		<script type="text/javascript" src="./js/typeWriter.js"></script>
		<script type="text/javascript" src="./js/date.js"></script>
		<script type="text/javascript" src="./js/playImg.js"></script>
	</body>
</html>
