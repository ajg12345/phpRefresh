<?php
include_once "header.php";
$_SESSION['username'] = "Admin";		//this is a cheat because I wont be implementing a complete login system here.

?>
<body>
 <div class= "grid">

	<div class="title">title</div>

	<div class="header">header</div>

	<div class="sidebar">sidebar</div>

	<div class="content">
		<div class="gallery-container">	
		<?php
			include_once "includes/dbh.inc.php";
			$sql = "SELECT * FROM gallery ORDER BY  orderGallery desc;";
			$stmt = mysqli_stmt_init($conn);
			if (!mysqli_stmt_prepare($stmt, $sql)){
				echo "sql statement fail";
			} else {
				mysqli_stmt_execute($stmt);
				$result = mysqli_stmt_get_result($stmt);
			}
			while($row = mysqli_fetch_assoc($result)){
				echo "<a href='#'>
					<div style='background-image: url(img/gallery/". $row['imgFullNameGallery'].");'>
					<h3>".$row['titleGallery']."</h3>
					<p>".$row['descGallery']."</p>
					</div>
				</a>";
			}
		?>
		</div>
		<?php
		if (isset($_SESSION['username'])){	
			echo '<div class="gallery-upload">
				<form action="includes/gallery-upload.inc.php" method="POST" enctype="multipart/form-data">
				<input type="text" name="filename" placeholder="File name...">
				<input type="text" name="filetitle" placeholder="Image title...">
				<input type="text" name="filedesc" placeholder="Image desc...">
				<input type="file" name="file">
				<button method="submit" name="submit"> UPLOAD</button>
				
				</form>
				</div>';
		}
		?>
	</div>

	<div class="footer">footer</div>
</div>	

<?php
include_once "footer.php";
?>