
	<ul>
			<li><a href="/menu/list">Menu </a></li>
			<li><a href="/category/list">Category </a></li>
            <li><a href="/user/list"> Users </a></li>
			<li><a href="/bookings/list">Bookings</a></li>
			<li><a href="/review/list">Reviews </a></li>
			<li><a href="/home/list">Home </a></li>

</ul>

	<h2>Add To HomePage</h2>
    <a class="new" href="/home/edit">Add new content</a>
	
	
		<table>
		<thead>
		<tr>
		<th>Product Name</th>
        <th>Description</th>
        <th>price</th>
        <th>Date</th>
		<th style="width: 5%">&nbsp;</th>
		<th style="width: 15%">&nbsp;</th>
		<th style="width: 5%">&nbsp;</th>
		<th style="width: 5%">&nbsp;</th>
		</tr>
		<?php
		foreach ($home as $home) {?>
		 
			<tr>
			<td><?=$home['pname']?></td>
			<td><?=$home['description']?></td>
            <td><?=$home['price']?></td>
            <td><?=$home['date']?></td>
			<td><a style="float: right" href="/home/edit?id=<?=$home['id']?>">Edit</a></td>

			<td><form action="/home/delete"  method="POST" >
			<input type="hidden"  name="id"   value="<?=$home['id']?>" />
			<input type="submit"  name="submit" value="Delete" />
			</form></td>
			</tr>
			<?php
		   }
		?>
		 </thead>
		 </table>
</section>

