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
					<div class="entry-content container">
						<!-- Container for the image gallery -->


<?php //Setup for Gallery
$directory = 'images/gallery/'; ?>

<?php // cycle each image file
foreach(array_slice(scandir($directory), 2) as $ifile){
	$iinfo = getimagesize($directory.$ifile);
	if( $iinfo !== false){
		// echo $iinfo[0].'<br>'; //w
		// echo $iinfo[1].'<br>'; //h
		// echo $iinfo[3].'<br>'; //width="4160" height="2340"
		?>
		<!-- Full-width images with number text -->
		<div class="mySlides">
		<div class="numbertext">1 / 6</div>
		    <?= '<img src="'.$directory.$ifile.'" alt="" '.$iinfo[3].' style="width:100%">'; ?>
		</div>
	<?php
	}
} //[END] Cycle each image file ?>

<!-- Next and previous buttons -->
<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

<script>
let slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("thumb");
  let captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>



					</div><!-- entry-content -->
				</article>
			</div><!-- end main -->
			<?php include('sidebar.php'); ?>
		</div><!-- end container -->
	</div><!-- end page-wrap -->
<?php include('footer.php'); ?>

</body>
</html>
