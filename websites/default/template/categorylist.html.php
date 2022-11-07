<section class="left">
<ul>
			<li><a href="/menu/list"> Menu</a></li>
			<li><a href="/category/list">Category </a></li>
            <li><a href="/user/list"> Users</a></li>
			<li><a href="/bookings/list">Bookings</a></li>
			<li><a href="/review/list">Reviews </a></li>
			<li><a href="/home/list">Home </a></li>

</ul>
</section>

<section class="right">
		
			<table>
			<thead>
			<tr>
			<th>Categories</th>
			<a class="new" href="/category/edit">Add new category</a>
			<table>
			<thead>
			<tr>
			
			<?php
foreach ($category as $category) {?>
			<tr> 
			<td><?=$category['name']?></td>  
			<td><a style="float: right" href="/category/edit?id=<?=$category['id']?>">Edit</a></td>

			<td><form action="/category/delete"  method="POST">
			<input type="hidden" name="id" value="<?=$category['id']?>"/>
			<input type="submit" name="submit" value="Delete" />
			</form></td>
			</tr>
			<?php
			}
			?>
			</thead>
			</table>
</section>