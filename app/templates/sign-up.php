 <?php
  $this->layout('master',[
    'title'=> "Welcome to Krish Fitness",
    'description'=> "Enjoy this thing."
    ]);
 ?>

<body>
	<div class="container padding-top-10">
		<div class="panel panel-default">
			<div class="panel-heading" style="font-size:24px;"><strong>Sign Up</strong></div>
			<div class="panel-body">
				<form action="index.php?page=sign-up" method="post">
					<label for="firstname" class="control-label">Name:</label>
					<div class="row ">
						<div class="col-md-6 padding-top-10">
							<input type="text" class="form-control" id="firstname" name="firstname" placeholder="First" value="<?= isset($_POST['firstname']) ? $_POST['firstname'] : '' ?>"></input>
							<?php if( isset($firstNameMessage) ) : ?>
           						<p> <?= $firstNameMessage ?> </p>
            				<?php endif; ?>
						</div>
						<div class="col-md-6 padding-top-10">
							<input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last" value="<?= isset($_POST['lastname']) ? $_POST['lastname'] : '' ?>"></input>
							<?php if( isset($lastnameMessage) ) : ?>
           						<p> <?= $lastnameMessage ?> </p>
            				<?php endif; ?>
						</div>
					</div>

					<label for="email" class="control-label padding-top-10" style="margin-top:18px;">Email:</label>
					<div class="row padding-top-10">
						<div class="col-md-6">
							<input type="text" class="form-control" id="email" name="email" placeholder="Email" value="<?= isset($_POST['email']) ? $_POST['email'] : '' ?>"></input>
							<?php if( isset($emailMessage) ) : ?>
           						<p> <?= $emailMessage ?> </p>
            				<?php endif; ?>
						</div>
					</div>

					<div class="row">
						<div class="col-md-6 padding-top-10">
							<label for="password" class="control-label" style="margin-top:18px;">Password:</label>
							<input type="password" class="form-control" id="password" name="password" placeholder="Enter password" value="<?= isset($_POST['password']) ? $_POST['password'] : '' ?>"></input>
							<?php if( isset($passwordMessage) ) : ?>
           						<p> <?= $passwordMessage ?> </p>
            				<?php endif; ?>
						</div>
						<div class="col-md-6 padding-top-10">
							<label for="confirm-password" class="control-label" style="margin-top:18px;">Confirm Password:</label>
							<input type="password" class="form-control" id="confirm-password" name="confirm-password" placeholder="Confirm password" value="<?= isset($_POST['confirm-password']) ? $_POST['confirm-password'] : '' ?>"></input>
							<?php if( isset($confirmPasswordMessage) ) : ?>
           						<p> <?= $confirmPasswordMessage ?> </p>
            				<?php endif; ?>
						</div>
					</div>

					<div class="row">
						<div class="col-md-2 padding-top-10">
							<button type="submit" class="btn btn-success" name="sign-up" style="margin-top:10px;">Register</button>
						</div>
						<div class="col-md-2 padding-top-10 col-md-push-5">
							<a href="index.php?=home"><button type="button" class="btn btn-primary" role="button" style="margin-top:10px;">Home</button></a>
						</div>
					</div>
										
				</form>
			</div>
		</div>
	</div>
</body>
</html>
