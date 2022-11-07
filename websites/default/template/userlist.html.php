<ul>
			<li><a href="/menu/list">Menu </a></li>
			<li><a href="/category/list">Category </a></li>
            <li><a href="/user/list"> Users </a></li>
			<li><a href="/bookings/list">Bookings</a></li>
			<li><a href="/home/list">Home </a></li>
</ul>

<h2>User File</h2>
    <a class="new" href="/user/edit">Add new User</a>
		<table>
		<thead>
		<tr>
		
        <th>Email</th>
		<th>Password</th>
		<th style="width: 5%">&nbsp;</th>
		<th style="width: 5%">&nbsp;</th>
		</tr>
		<?php
		foreach ($user as $user) {?>
		 
			<tr>
			<td><?=$user['email']?></td>
			<td><?=$user['password']?></td>
			<td><a style="float: right" href="/user/edit?id=<?=$user['id']?>">Edit</a></td>

			<td><form action="/user/delete"  method="POST" >
			<input type="hidden"  name="id"   value="<?=$user['id']?>" />
			<input type="submit"  name="submit" value="Delete" />
			</form></td>
			</tr>
			<?php
		   }
		?>
		 </thead>
		 </table>
</section>
