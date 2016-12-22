 <?php
  $this->layout('master',[
    'title'=> "Super Blog",
    'description'=> "Enjoy this thing."
    ]);
 ?>

<body data-gr-c-s-loaded="true">
	<div class="container">
		<form class="form-signin" method="post" action="index.php?page=login">
			<h2 class="form-signin-heading">Please Login</h2>
			<label for="inputEmail" class="sr-only">Email address</label>
			<input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus name="email"> 
							<?php if( isset($emailMessage) ) : ?>
           						<p> <?= $emailMessage ?> </p>
            				<?php endif; ?>
			<label for="inputPassword" class="sr-only">Password</label>
			<input type="password" id="inputPassword" class="form-control" placeholder="Password" required name="password">
							<?php if( isset($passwordMessage) ) : ?>
           						<p> <?= $passwordMessage ?> </p>
            				<?php endif; ?>

			<div class="checkbox">
				<label>
					<input type="checkbox" value="remember-me">
					Remember me
								
				</label>
			</div>
			<input type="submit" name="login" value="Login" class="btn btnlg btn-info btn-block">
			<a href="index.php?page=sign-up"><button class="btn btnlg btn-primary btn-block" type="button">Sign up</button></a>
		</form>
	</div>
	<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
