<?php $this->layout('master'); ?>

<body>


<form action="<?= $_SERVER['REQUEST_URI'] ?>" method="post" enctype="multipart/form-data">
	
	<div>
		<label for="title">Title: </label>
		<input type="text" value="<?= $post['title'] ?>" id="title" name="title">
		<?= isset($titleError) ? $titleError : '' ?>
	</div>

	<div>
		<label for="desc">Description: </label>
		<textarea id="desc" name="description"><?= $post['description'] ?></textarea>
		<?= isset($descError) ? $descError : '' ?>
	</div>

	<input type="submit" name="edit-post">
	<?= isset($updateMessage) ? $updateMessage : '' ?>

</form>