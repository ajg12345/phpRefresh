<?php
include 'header.php'
?>
<h1>Search Page</h1>

<div class="article-container">
<?php
	if (isset($_POST['submit-search'])) {
		$search = mysqli_real_escape_string($conn, $_POST['search']);
		$sql = "SELECT * FROM article WHERE a_title like '%".$search."%' 
										 OR a_text like '%".$search."%'
										 OR a_author like '%".$search."%'
										 OR a_date like '%".$search."%';";
		$result = mysqli_query($conn, $sql);
		$queryResult = mysqli_num_rows($result);
		
		if ($queryResult > 0) {
			while ($row = mysqli_fetch_assoc($result)){
				echo "<a href='article.php?title=".$row['a_title']."&date=".$row['a_date']."'><div class='article-box'>
						<h3>".$row['a_title']."</h3>
						<p>".$row['a_author']."</p>
						<p>".$row['a_date']."</p>
						<p>".$row['a_text']."</p>
					</div></a>";
			}
		} else {
			echo "<p>There are no results matching your search</p>";
		}
	}
?>
</div>
</body>
</html>