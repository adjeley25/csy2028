

	<section class="right">

			<form action="" method="POST">
				<input type="hidden" name="menu[id]" value="<?$menu['id'] ?? ''?>" />
				<label>Category Id</label>
				<input type="text" name="menu[categoryId]" value="<?=$menu['category']  ??''?>" />
				<label>Name</label>
				<input type="text" name="menu[name]" value="<?=$menu['name']  ??''?>" />

				<label>Description</label>
				<textarea id="description" name="menu[description]" rows="5" cols="60"><?=$menu['description'] ?? ''?></textarea>

				<label>Price</label>
                <input type="text" name="menu[price]" value="<?=$menu['price']  ??''?>" />
				<input type="submit" value="Submit">
			</form>
</section>