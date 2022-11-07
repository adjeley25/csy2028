<section>

<ul>
			<li><a href="/menu/list">  Menu </a></li>
			<li><a href="/category/list">Category </a></li>
            <li><a href="/user/list">users</a></li>
			<li><a href="/bookings/list">Bookings</a></li>
			<li><a href="/review/list">Reviews</a></li>
			<li><a href="/home/list">Home</a></li>

</ul>

<table>
		<thead>
		<tr>
		<th>User</th>
		<th style="width: 15%">Email</th>
		<th style="width: 5%">&nbsp;</th>
		<th style="width: 15%">&nbsp;</th>
		<th style="width: 5%">&nbsp;</th>
		<th style="width: 5%">&nbsp;</th>
		</tr>
		<?php
		foreach ($user as $user) {?>
			<tr>
			<td><?=$user['surname']?></td>
			<td><?=$user['email']?></td>
			<td><a style="float: right" href="/user/edit?id=<?=$user['id']?>">Edit</a></td>

			<td><form action="/user/delete"  method="POST" >
			<input type="hidden" name="id" value="<?=$user['id']?>" />
			<input type="submit"  name ="submit" value="Delete" />
			</form></td>
			</tr>
			<?php
		   }
		?>
		 </thead>
		 </table>
</section>