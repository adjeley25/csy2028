<!DOCTYPE html>
<html>
	<head>
	<link rel="stylesheet" href="/styles.css"/>
	<title><?=$title?></title>
	</head>
	<body>
	<header>
		<section>
			<aside>
				<h3>Opening times:</h3>
				<p>Sun-Thu: 12:00-22:00</p>
				<p>Fri-Sat: 12:00-23:30</p>
			</aside>
			<h1>Kate's Kitchen</h1>

		</section>
	</header>
	<nav>
		<ul>
			<li><a href="/">Home</a></li>
			<li><a href="/viewers/list">Menu List</a></li>
					
			<li>Menu
				<ul>
				<li><a href="">Starters</a></li>
					<li><a href="">Mains</a></li>
					<li><a  href="">Dessert</a></li>
					<li><a href="/faqs.php">FAQS</a></li>				
					
				</ul>
			</li>
			
			<li><a href="/admin/about">About Us</a></li>
			<li><a href="/admin.php">Admin</a></li>
			<li><a href="/bookings/edit">Bookings</a></li>
			<li><a href="/review/edit">Reviews</a></li>
		</ul>
		
	</nav>
<img src="images/randombanner.php"/>
	<main class="home">
	
    <?=$output?>
	</main>
	<footer>
		&copy; Kate's Kitchen 2021
	</footer>
</body>
</html>
