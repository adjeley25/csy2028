<main class="sidebar">

	<section class="left">
		
	</section>
	<section class="right">

	<ul>
			<li><a href="/menu/list"> Menu</a></li>
			<li><a href="/category/list">Category</a></li>
            <li><a href="/user/list"> Users</a></li>
			<li><a href="/bookings/list">Bookings</a></li>
            <li><a href="/review/list">Reviews </a></li>
            <li><a href="/home/list">Home </a></li>

</ul>
<h2>Add To Home</h2>
<section class="right">

<form action="" method="POST">
    <input type="hidden" name="home[id]" value="<?$home['id'] ?? ''?>" />
    
    <label>Product Name</label>
    <input type="text" name="home[pname]" value="<?=$home['pname']  ??''?>" />

    <label>Description</label>
    <textarea id="description" name="home[description]" rows="5" cols="60"><?=$home['description'] ?? ''?></textarea>

    <label>Price</label>
    <input type="text" name="home[price]" value="<?=$home['price']  ??''?>" />
    <label>Date</label>
    <input type="date" name="home[date]" value="<?=$home['date']  ??''?>" />
     <input type="submit" value="Submit">
</form>
</section>
