<form action="/review/edit" method="post">
<h2>Feedback</h2>
<h3>Please provide your feedback below:</h3>
<h4>How do you rate your overall experience?</h4>

<input type="hidden" name="review[id]" value="<?=$review['id'] ?? ''?> "/>
<label>Title</label>
 <input type="text" name="review[title]"  value="<?=$review['title'] ?? ''?> "/>
 <label>Email</label>
 <input type="text" name="review[email]"  value="<?=$review['email'] ?? ''?> "/>	
<label>Review</label>
 
<input type="text" name="review[review]"  value="<?=$review['review'] ?? ''?> "/>	
 <input type="hidden" name="review[date]"  value="<?=$review['date'] ?? ''?> "/>

 <input type="submit"  name="submit" value="submit" /></p>
</form>




