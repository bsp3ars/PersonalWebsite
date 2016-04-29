<?php
echo "
<form method='POST' action ='forum.php' autocomplete='off'>

<div class= 'post'>
<h2><textarea class='smallBox' input='thread' name='thread' maxlength='32'placeholder='Type Thread Title Here' required></textarea></h2>

<p><textarea class='bigBox' input='content' name='content' maxlength='500' placeholder='Type Content Here' required></textarea></p>

<input type='submit' value='Submit'>
<input type='reset' value='Reset'>
</div>
</form>
";
?>