<?php
echo "
		<h2> Register </h2>
		
		<form method='POST' action ='register.php' autocomplete='on'>
		<p>
		<label>First Name:</label>
		</p>
		<p>
		<input type='text' name='fName' maxlength='20' pattern='[A-Z][a-zA-Z]{2,20}' placeholder='2 - 20 Letters, First Letter Capital' autocomplete required>
		</p>
		<p>
		<label>Last Name:</label>
		</p>
		<p>
		<input type='text' name='lName' maxlength='20' pattern='[A-Z][a-zA-Z]{2,20}' placeholder='2 - 20 Letters, First Letter Capital' autocomplete required>
		</p>
		<p>
		<label>Username:</label>
		</p>
		<p>
		<input type='text' name='username' maxlength='20' pattern='[a-zA-Z0-9]{1,20}' placeholder='1 - 20 Letters or Numbers' autocomplete required>
		</p>
		<p>
		<label>Password:</label>
		</p>
		<p>
		<input type='password' name='password' maxlength='20' pattern='(?=.*\d).{4,18}' placeholder='4 - 18 digits, atleast 1 number' autocomplete required>
		</p>
		<p>
		<label>Re-Type Password:</label>
		</p>
		<p>
		<input type='password' name='password2' maxlength='20' pattern='(?=.*\d).{4,18}' placeholder='4 - 18 digits, atleast 1 number' autocomplete required>
		</p>
		<p>
		<label>Email:</label>
		</p>
		<p>
		<input type='text' name='email' maxlength='32' pattern='[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$' placeholder='youremail@provider.domain' autocomplete required>
		</p>
		<p>
		<input type='submit' value='Submit'>
		<input type='reset' value='Reset'>
		</p>
		</form>";
?>