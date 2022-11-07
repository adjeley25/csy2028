<ul>
			<li><a href="/menu/list"> Menu</a></li>
			<li><a href="/category/list">Category</a></li>
            <li><a href="/user/list"> Users</a></li>
			<li><a href="/bookings/list">Bookings</a></li>
            <li><a href="/review/list">Reviews </a></li>
            <li><a href="/home/list">Home </a></li>

</ul>


<section class="right">
	<h2>Reviews</h2>
	<table>
		<thead>
		<tr>
		<th>Product</th>
        <th>Email</th>
        <th>Review</th>
		<th style="width: 15%">Date</th>
		<th style="width: 5%">&nbsp;</th>
		<th style="width: 15%">&nbsp;</th>
		<th style="width: 5%">&nbsp;</th>
		<th style="width: 5%">&nbsp;</th>
		</tr>
		<?php
		foreach ($review as $review) {?>
		 
			<tr>
			<td><?=$review['title']?></td>
			<td><?=$review['email']?></td>
			<td><?=$review['review']?></td>
            <td><?=$review['date']?></td>
			


			<td><form action="/review/delete"  method="POST" >
			<input type="hidden"  name="id"   value="<?=$review['id']?>" />
			<input type="submit"  name="submit" value="Delete" />
			</form></td>
			</tr>
			<?php
		   }
		?>
		 </thead>
		 </table>
</section>