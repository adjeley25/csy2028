

<form action="" method="post">
<input type="hidden" name ="user[id]" value="<?=$user['id'] ?? ''?> "/>
<label>First name</label>

 <input type ="text" name="user[firstname]" value="<?=$user['fname'] ?? ''?> "/>

<label>Surname</label>
<input type ="text" name="user[surname]" value="<?=$user['surname'] ?? ''?> "/>

 <label>Email</label>
<input  type ="text" name="user[email]" value="<?=$user['email'] ?? ''?> "/>

 <label>Password</label>
<input  type ="password" name="user[password]" value="<?=$user['password'] ?? ''?> "/>
 
 <input type="submit"  value="Add" />
</form>
