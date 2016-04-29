<?php
echo "
		<form method='POST' action ='reply.php?postID=" . $_GET ['postID'] . "'>
				<div class= 'post'>
		<p><textarea class='bigBox' input='content' name='content' maxlength='500' placeholder='Type Content Here' required></textarea></p>
		<input type='submit' value='Post'>
		<input type='reset' value='Reset'>
		</p</div>
		</form>";

if (isset ( $_POST ['textField'] )) {
	
	$textField = htmlspecialchars ( $_POST ['textField'] );
	
	echo "<h2> Replies </h2>";
	echo "<p>Text: " . $textField . "</p>";
}
?>