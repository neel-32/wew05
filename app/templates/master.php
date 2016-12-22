<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Home</title>
	<meta name="description" content="Between 150 and 160 characters">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="styles.css">
	<script src="js/jquery.js"></script>
</head>
<body>

	<div class="navbar-wrapper">
		<div class="container">
			<nav class="navbar navbar-inverse navbar-static-top">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="coolapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="">Super Blog</a>
				</div>
				<div id="navbar" class="navbar-collapse collapse">
					<ul class="nav navbar-nav">
						<li class="active">
							<a href="index.php?page=home">Home</a>
						</li>

						<li>
							<a href="index.php?page=blog">Blog</a>
						</li>

						<li>
							<a href="index.php?page=new-post">Post a Blog</a>
						</li>

						<li>
							<div class="col-md-7 col-md-push-5 pull-right">
								<?php if(isset($_SESSION['id'])): ?>
									<a class="btn btn-primary" role="button" href="index.php?page=logout" style="margin-top:8px;">Logout</a>
								<?php else: ?>
									<a class="btn btn-primary" role="button" href="index.php?page=login" style="margin-top:8px;">Login/Sign up</a>
								<?php endif; ?>
									

							</div>
						</li>

						
					</ul>
				</div>
			</nav>
		</div>
	</div>

	<div class="container">
		<main>
		 <?php echo $this->section('content')?>
		</main>
	</div>

	<div class="container">
		<footer>
			<p class="pull-right"><a href="#">Back to top</a></p>
			<p>&copy; 2016 Company, Inc. &middot; <?php echo date ('Y') ?> <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
		</footer>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>	
</body>
</html>