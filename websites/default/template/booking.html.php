
	<ul>
			<li><a href="/menu/list"> Menu</a></li>
			<li><a href="/category/list">Category</a></li>
            <li><a href="/user/list"> Users</a></li>
			<li><a href="/bookings/list">Bookings</a></li>
            <li><a href="/review/list">Reviews </a></li>
            <li><a href="/home/list">Home </a></li>

</ul>


<section class="right">
	<h1>Bookings</h1>
	<ul class="listing">

    <?php 
foreach($bookings as $bookings){ ?>
    <li>
    <div class="bookings">
    <h2><?=$bookings['name'];?></h2>
    <p>Name: <strong><em><?=$bookings['name'];?></em></strong></p>
    <p>Email: <strong><em><?=$bookings['email'];?></em></strong></p>
    <p>Telephone: <strong><em><?=$bookings['telephone'];?></em></strong></p>
    <p>Guests: <strong><em><?=$bookings['guests'];?></em></strong></p>
     <p> Date: <strong><em><?=$bookings['bookingdate'];?></em></strong></p>
    <p> Time: <strong><em><?=$bookings['time'];?></em></strong></p>

<?php
}
?>

</li>
</ul>
</section>
