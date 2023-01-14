<?php
$username = "virtual";
if(isset($_COOKIE['user'])) {
	$userSQL = 'SELECT * FROM users WHERE id=' . $_COOKIE['user'];
	// var_dump($userSQL);
	$userResault = $conn->query($userSQL);
	if($userResault) {
		$user = $userResault->fetch_assoc();
		$username = $user['a_name'];
		//var_dump(username);
	}
} // напутано, треба ще раз розібратись з цим
?>  

<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
	<aside id="colorlib-aside" role="complementary" class="js-fullheight text-center">
	<h1 id="colorlib-logo"><a href="#"><?php echo $username; ?><span>.</span></a></h1>
	<nav id="colorlib-main-menu" role="navigation">
		<ul>
			<li <?php if(!isset($_GET['p']) || $_GET['p'] == 'home'): ?>class="colorlib-active" <?php endif; ?>>
				<a href="/?p=home.php">Home</a>
			</li>
			<li <?php if(isset($_GET['p']) && $_GET['p'] == 'photography'): ?> class="colorlib-active" <?php endif; ?>>
				<a href="/?p=photography.php">Photography</a>
			</li>
			<li <?php if(isset($_GET['p']) && $_GET['p'] == 'travel'): ?> class="colorlib-active" <?php endif; ?>>
				<a href="/?p=travel.php">Travel</a>
			</li>
			<li <?php if(isset($_GET['p']) && $_GET['p'] == 'fashion'): ?> class="colorlib-active" <?php endif; ?>>
				<a href="/?p=fashion.php">Fashion</a>
			</li>
			<li <?php if(isset($_GET['p']) && $_GET['p'] == 'about'): ?> class="colorlib-active" <?php endif; ?>>
				<a href="/?p=about.php">About</a>
			</li>
			<li <?php if(isset($_GET['p']) && $_GET['p'] == 'contact'): ?> class="colorlib-active" <?php endif; ?>>
				<a href="/?p=contact.php">Contact</a>
			</li>
			<li <?php if(!isset($_GET['p']) || $_GET['p'] == 'login'): ?>class="colorlib-active" <?php endif; ?>>
				<a href="/?p=login.php">Login</a>
			</li>
		</ul>
	</nav>

	<div class="colorlib-footer">
		<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
			  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://app.netlify.com/teams/citrusdolar/sites" target="_blank">Slutsenko Volodymyr</a>
		<ul>
			<li><a href="https://www.facebook.com/profile.php?id=100022273695820" target="_blank"><i class="icon-facebook"></i></a></li>
			
			<li><a href="https://www.linkedin.com/in/volodymyr-slutsenko-85aa59222/" target="_blank"><i class="icon-linkedin"></i></a></li>
		</ul>
	</div>
</aside>
         <!-- END COLORLIB-ASIDE -->