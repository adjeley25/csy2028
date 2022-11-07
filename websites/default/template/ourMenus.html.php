<section class="right">

<h1> Menu List</h1>

<ul class="listing">

	<?php
    foreach($menu as $menu){ ?>
        <li>
        <div class="details">
        <h3>£<?=$menu['price'];?></h3>
        <h4><?=$menu['name'];?></h4>
        <p><?=$menu['description'];?></p>
<?php
}
?>	
<li><a href="/review/edit">CLICK HERE TO WRITE A REVIEW</a></li>