<?php
	include_once 'header.php'
?>
<main>
	<div class="main-wrapper">
		<section class="main-container">		
		<?php
			if (isset($_SESSION['useruid']))  {
				$uid = $_SESSION['useruid'];
				echo '<p class="login-status">Welcome '.$uid.'</p>';
			} else {
				echo '<p class="login-status">You are logged out!</p>';
			}
		?>
			
		</section>
	</div>
</main>

<?php
	include_once 'footer.php'
?>


	