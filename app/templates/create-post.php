<?php 
	$this->layout('master', [
		'title'=>'Post page',
		'desc'=>'View an individual post'
	]);
?>

<h2>Write up a blog!</h2>
<br><br>

<form action="index.php?page=new-post" method="post">
	
	<label>Name: </label>
	<input type="text" name="name">
	<?php if(isset($nameError)): ?>
	<p><?= $nameError ?></p>
	<?php endif; ?>
  	<br><br>

	<label>Title: </label>
	<input type="text" name="title">
	<?php if(isset($titleError)): ?>
	<p><?= $titleError ?></p> 
	<?php endif; ?>
	<br><br>

	<label>Text: </label>
	<textarea name="desc" id="desc" rows="5" cols="40"></textarea>
	<?php if(isset($descError)): ?>
	<p><?= $descError ?></p>
	<?php endif; ?>
	<br><br>

	<input class="btn btn-default" type="submit" name="create-post">

</form>