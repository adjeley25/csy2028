<main class="sidebar">

	<section class="left">
		
	</section>
	<section class="right">

<br><h3><u>IMPORTANT BOOKING INFORMATION</u></h3><br>
​
<p>Thank you for choosing Kate's Kitchen We want you to have the best possible experience when you visit us, so it’s really important that you check Government restrictions on the number of households that can socialise together before your visit.
</p>

<form action=""   method="post">
<p><h4><u>Booking Form</u></h4></p>
<input type="hidden" name="bookings[id]" value="<?=$bookings['id'] ?? ''?> "/>
<label>Name</label>
<input type="text"  name="bookings[name]"  value="<?=$bookings['name'] ?? ''?> "/>

<label>Email</label>
<input type="text"  name="bookings[email]"  value="<?=$bookings['email'] ?? ''?> "/> 
<label>Telephone </label>
<input type="text"  name="bookings[telephone]"  value="<?=$bookings['telephone'] ?? ''?> "/>
<label>Guests</label>
<input type="number"  name="bookings[guests]" min='1'max='10'  value="<?=$bookings['guests'] ?? ''?> "/> 
<label>Date</label>
<input type="date"  name="bookings[bookingdate]"  value="<?=$bookings['bookingdate'] ?? ''?> "/>
<label>Time</label>
<input type="time" id="" name="bookings[time]"  value="<?=$bookings['time'] ?? ''?> "/>
        </p>
<input type="submit"  name="submit" value="submit" />
</form>

