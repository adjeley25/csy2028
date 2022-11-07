
		<p>Welcome to Kate's Kitchen, we're a familyl run resturaunt in northampton. Take a look around our site to see our menu!</a></p>

		<h2>Take a look at our menu:</h2>
				<ul>
					<li><a href="starters.php">Starters</a></li>
					<li><a href="mains.php">Mains</a></li>
					<li><a href="dessert.php">Dessert</a></li>
					<li><a href="FAQs.php">FAQs</a></li>
					
				</ul>
				
			</li>
            <section class="right">

<h3> THE REALLY GOOD STUFF</h3>
<P>Check out our offers for this week</P>

<ul class="listing">

	<?php
    foreach ($home as $home){ ?>
        <li>
        <div class="details">
        <h3><?=$home['pname'];?></h3>
         <p><?=$home['description'];?></p>
         <h3>£<?=$home['Price'];?></h3>
         <h3><?=$home['date'];?></h3>
     
       
<?php
}
?>	


