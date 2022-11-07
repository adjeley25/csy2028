<ul>
			<li><a href="/menu/list">Menu </a></li>
			<li><a href="/category/list">Category </a></li>
            <li><a href="/user/list"> Users </a></li>
			<li><a href="/bookings/list">Bookings</a></li>
			<li><a href="/review/list">Reviews </a></li>
			<li><a href="/home/list">Home </a></li>

</ul>


	<h2>Menu</h2>
    <a class="new" href="/menu/edit">Add new dish</a>
		<table>
		<thead>
		<tr>
		<th>Title</th>
		<th style="width: 15%">Dishes</th>
		<th style="width: 5%">&nbsp;</th>
		<th style="width: 15%">&nbsp;</th>
		<th style="width: 5%">&nbsp;</th>
		<th style="width: 5%">&nbsp;</th>
		</tr>
		<?php
		foreach ($menu as $menu) {?>
		 
			<tr>
			<td><?=$menu['name']?></td>
			<td><?=$menu['price']?></td>
			<td><?=$menu['description']?></td>
			<td><a style="float: right" href="/menu/edit?id=<?=$menu['id']?>">Edit</a></td>

			<td><form action="/menu/Hide"  method="POST" >
			<input type="hidden"  name="id"   value="<?=$menu['id']?>" />
			<input type="submit"  name="submit" value="Hide" />

			<td><form action="/menu/delete"  method="POST" >
			<input type="hidden"  name="id"   value="<?=$menu['id']?>" />
			<input type="submit"  name="submit" value="Delete" />
			</form></td>
			</tr>
			<?php
		   }
		?>
		 </thead>
		 </table>
</section>

