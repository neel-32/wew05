 <?php
  $this->layout('master',[
    'title'=> "Welcome to Krish Fitness",
    'description'=> "Enjoy this thing."
    ]);
 ?>

	<div class="container">
		<!-- PHP loop over $allPosts -->

		<?php  foreach($allPosts as $post):  ?>

		<h3><?= $this->e ($post['title']) ?></h3>
		<h4><?= $post['id'] ?></h4>
		<p><?= $this->e ($post['description']) ?></p>
		<p><em><?= $post['user_id'] ?></em></p>
		<p><?= $this->e ($post['created_at']) ?></p>

		<?php  

			if (isset($_SESSION['id']) ) {

				if( $_SESSION['id'] == $post['user_id'] ){
					// You own the post
		?>
	<li> 
		<a href="index.php?page=edit-post&id=<?= $post['id'] ?>">Edit</a>
	</li>
	<li> 
		<a href="index.php?page=delete-post&id=<?= $post['id'] ?>">Delete</a>
	</li>
					<?php 

					
				}
				
			}

		?>

		<?php endforeach; ?>

		

		<br>


	</div>


		<nav>
			<ul class="pager">
				<li>
					<a href="#">Previous</a>
				</li>
				<li>
					<a href="#">Next</a>
				</li>
			</ul>
		</nav>
	</div>