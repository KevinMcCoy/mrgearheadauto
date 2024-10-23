<?php $thisPage = 'gallery'; include('head.php'); ?>
<body class="about custom-background">

	<div id="page-wrap" class="contain">

		<?php include('nav.php'); ?>

		<div id="container" class="contain">

			<div id="main" role="main">
				<article id="post-about" class="hentry">
					<div class="title">
						<h2 class="entry-title">Mr. Gearhead Gallery</h2>
					</div><!-- end title -->
					<div class="entry-content">

<?php

//Setup for Gallery
$directory = 'images/gallery/';
foreach(array_slice(scandir($directory), 2) as $ifile){
	$iinfo = getimagesize($directory.$ifile);
	if( $iinfo !== false){
		echo '<br>';
		// echo $iinfo[0].'<br>'; //w
		// echo $iinfo[1].'<br>'; //h
		// echo $iinfo[3].'<br>'; //width="4160" height="2340"
		echo '<img src="'.$directory.$ifile.'" alt="" '.$iinfo[3].'>';
		// echo '<img src="'.$directory.$ifile.'" alt="" width="540" height="840">';
		echo '<br>';
	}

}

?>

					</div><!-- entry-content -->
				</article>
			</div><!-- end main -->
			<?php include('sidebar.php'); ?>
		</div><!-- end container -->
	</div><!-- end page-wrap -->
<?php include('footer.php'); ?>

</body>
</html>
