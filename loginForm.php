<?php
echo "
<form method='POST' action ='login.php' autocomplete='on'>

<h2> Login </h2>
<p>
<label>Username:</label>
</p>
<p>
<input type='text' name='username' maxlength='20' placeholder='2 - 20 Letters, First Letter Capital' pattern='[a-zA-Z0-9]{1,20}' required>
</p>
<p>
<label>Password:</label>
</p>
<p>
<input type='password' name='password' maxlength='20' placeholder='4 - 18 digits, at least 1 number' pattern='(?=.*\d).{4,18}' required>
</p>
<p>
<input type='submit' value='Submit'>
<input type='reset' value='Reset'>
</p>
</form>
";
?>