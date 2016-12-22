 <?php
  $this->layout('master',[
    'title'=> "Super Blog",
    'description'=> "Enjoy this thing."
    ]);
 ?>
	<header>

	<div class="w3-content w3-display-container" style="max-width:900px;">
		<img class="mySlides" src="img/joker.jpg" style="width:100%;">
		<img class="mySlides" src="img/thor.jpg" style="width:100%;">
		<img class="mySlides" src="img/batman.jpg" style="width:100%;">
		<img class="mySlides" src="img/thanos.jpg" style="width:100%;">

		<a class="w3-btn-floating w3-display-left" onclick="plusDivs(-1)">&#10094;</a>
  		<a class="w3-btn-floating w3-display-right" onclick="plusDivs(1)">&#10095;</a>
	</div>

	

	</header>

		<div class="container marketing">
			<div class="row">
				<div class="col-lg-4">
					<img class="img-circle" src="img/superman.jpg" alt="Generic placeholder image" width="140" height="140">
					<h2>Superman</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. </p>
					<p><a class="btn btn-default" role="button">View Details</a></p>
				</div>
				<div class="col-lg-4">
					<img class="img-circle" src="img/ironman.jpg" alt="Generic placeholder image" width="140" height="140">
					<h2>Iron Man</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. </p>
					<p><a class="btn btn-default" role="button">View Details</a></p>
				</div>
				<div class="col-lg-4">
					<img class="img-circle" src="img/spiderman.jpg" alt="Generic placeholder image" width="140" height="140">
					<h2>Spiderman</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. </p>
					<p><a class="btn btn-default" role="button">View Details</a></p>
				</div>
			</div>

			<hr class="featurette-divider">

			<div class="row featurette">
				<div class="col-md-7">
					<h2 class="featurette-heading">Hulk <span class="text-muted">will smash</span></h2>
					<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
				<div class="col-md-5">
					<img class="featurette-image img-responsive center-block" src="img/hulk.jpg" alt="Generic placeholder image" width="500px" height="500px">
				</div>
			</div>

			<hr class="featurette-divider">

			<div class="row featurette">
				<div class="col-md-7 col-md-push-5">
					<h2 class="featurette-heading">Shazam <span class="text-muted">will blow your mind</span></h2>
					<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
				<div class="col-md-5 col-md-pull-7">
					<img class="featurette-image img-responsive center-block" src="img/shazam.jpg" alt="Generic placeholder image" width="500px" height="500px">
				</div>
			</div>

			<hr class="featurette-divider">

			<div class="row featurette">
				<div class="col-md-7">
					<h2 class="featurette-heading">Spiderman <span class="text-muted">your friendly neighborhood hero</span></h2>
					<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
				<div class="col-md-5">
					<img class="featurette-image img-responsive center-block" src="img/spiderman.jpg" alt="Generic placeholder image" width="500px" height="500px">
				</div>
			</div>

			<hr class="featurette-divider">

			<div class="row featurette">
				<div class="col-md-7 col-md-push-5">
					<h2 class="featurette-heading">Deadpool <span class="text-muted">will love you</span></h2>
					<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
				<div class="col-md-5 col-md-pull-7">
					<img class="featurette-image img-responsive center-block" src="img/deadpool.jpg" alt="Generic placeholder image" width="500px" height="500px">
				</div>
			</div>

			<hr class="featurette-divider">

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  x[slideIndex-1].style.display = "block";
}
</script>
		
	