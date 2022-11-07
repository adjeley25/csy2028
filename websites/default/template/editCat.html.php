<section class="left">
		<ul>
			<li><a href="/menu/list">Menu</a></li>
			<li><a href="/category/list">Categories</a></li>

		</ul>
	</section>

	<section class="right">	
				
				<form action="" method="POST">

					<input type="hidden" name="category[id]" value="<?$category['id'] ??''?>" />
					<label>Name</label>
					<input type="text" name="category[name]" value="<?=$category['name'] ?? ''?> "/>
                    
					<input type="submit" name="submit" value="Save Category" />
					
				</form>
			
</section>