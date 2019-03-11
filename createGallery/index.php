<?php
include_once "header.php";
?>
<body>
 <div class= "grid">

	<div class="title">title</div>

	<div class="header">header</div>

	<div class="sidebar">sidebar</div>

	<div class="content">
		<div class="gallery-container">	
			<a href="#">
				<div>
				<h3>This is a title</h3>
				<p>This is a paragraph</p>
				</div>
			</a>
			<a href="#">
				<div>
				<h3>This is a title</h3>
				<p>This is a paragraph</p>
				</div>
			</a>
			<a href="#">
				<div>
				<h3>This is a title</h3>
				<p>This is a paragraph</p>
				</div>
			</a>
			<a href="#">
				<div>
				<h3>This is a title</h3>
				<p>This is a paragraph</p>
				</div>
			</a>
		</div>
		<div class="gallery-upload">
			<form action="includes/gallery-upload.inc.php" method="POST" enctype="multipart/form-data">
			<input type="text" name="filename" placeholder="File name...">
			<input type="text" name="filetitle" placeholder="Image title...">
			<input type="text" name="filedesc" placeholder="Image desc...">
			<input type="file" name="file">
			<button method="submit" name="submit"> UPLOAD</button>
			
			</form>
		</div>
	</div>

	<div class="footer">footer</div>
</div>	

<?php
include_once "footer.php";
?>