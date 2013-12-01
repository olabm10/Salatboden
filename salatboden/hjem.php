<?php 
	include 'database/init.php' ;
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Salatboden </title>
	
	<!-- CSS -->
	<link rel="stylesheet" href="css/salatboden.css" rel="stylesheet" type="text/css">
	
	<!-- nivo slider css -->
    <link rel="stylesheet" href="css/nivo-slider.css" type="text/css" />
    <link rel="stylesheet" href="css/default.css" type="text/css"/>
    <!--nivo slider js fil -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js" type="text/javascript"></script>
    <script src="js/jquery.nivo.slider.pack.js" type="text/javascript"></script>



</head>

<body>



<div id="container">

	<!--hele header, altså logo og innloggings felt-->
	<?php 	include 'database/sideboks.php'; ?>
	

	 
	<header class="mainheader">

		<nav>
			<ul>
				<li class="active"><a href="hjem.php">Hjem</a></li>
				<li><a href="meny.php">Meny</a></li>
				<li><a href="bestill.php">Bestill</a></li>
				<li><a href="restaurant.php">Restaurant</a></li>
                <li><a href="omoss.php">Om Oss</a></li>
			</ul>
		</nav>
	</header>	
<!--
<div id="navcontainer">
	<ul id="navlist" >
        <li class="active"><a href="hjem.php">Hjem</a>
        <li><a href="meny.php" >Meny</a>
        <li><a href="bestill.php" >Bestill Online</a>
        <li><a href="restaurant.php" > Restaurant</a>
        <li><a href="omoss.php" > Om Oss</a>
	</ul>
</div>-->



<div>

<!-- unikt innhold på siden -->
<div id="content">

	<h1>Velkommen til Salatboden</h1> <br>
    

    
<div id="tekst">
    <div id="text-left">

  	Hos Salatboden kan du bestille nettopp den salaten du måtte ønske. Du kan velge å bestille den hjem på døren, 
	eller du kan komme innom et av våre spisesteder. 
 	Vi har restaurant i Kristiansand, Grimstad og på Sørlandssenteret.
 
	</div>
    <div id="text-right">
	 
 	Er du på farten eller ønsker du et enkelt alternativ til lunsj eller middag kan en deilig salat være et godt valg. 
	Med godt tilbehør og spennende ingredienser får du et fullverdig og sunt måltid. 
    </div>
</div>






	<!-- nivo slider-->
    <div class="slider-wrapper theme-default"> 
        <div class="ribbon"></div> 
            <div id="slider" class="nivoSlider">
                <img src="img/salat1.jpg" alt="" />
              <!--  <img src="img/pancake.jpg" alt=""  /> -->
                <img src="img/salad44.jpg" alt="" />
                <img src="img/dessert.jpg" alt="" />
            </div>
		</div>
	</div>


	<script type="text/javascript">
    	$(window).load(function() {
        	$('#slider').nivoSlider({
			effect: 'random',               // Specify sets like: 'fold,fade,sliceDown'
			slices: 15,                     // For slice animations
			boxCols: 8,                     // For box animations
			boxRows: 4,                     // For box animations
			animSpeed: 500,                 // Slide transition speed
			pauseTime: 5000,                // How long each slide will show
			startSlide: 0,                  // Set starting Slide (0 index)
			directionNav: true,             // Next & Prev navigation
			controlNav: true,               // 1,2,3... navigation
			controlNavThumbs: false,        // Use thumbnails for Control Nav
			pauseOnHover: true,             // Stop animation while hovering
			manualAdvance: false,           // Force manual transitions
			prevText: 'Prev',               // Prev directionNav text
			nextText: 'Next',               // Next directionNav text
			randomStart: false,             // Start on a random slide
			beforeChange: function(){},     // Triggers before a slide transition
			afterChange: function(){},      // Triggers after a slide transition
			slideshowEnd: function(){},     // Triggers after all slides have been shown
			lastSlide: function(){},        // Triggers when last slide is shown
			afterLoad: function(){}         // Triggers when slider has loaded
			});
    	});
    </script>


</div>
 
 <!--Footer-->
 
 <?php  include 'footer.php' ;  ?>
 

</body>
</html>
