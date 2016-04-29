<?php
require ('connection.php');

if (isset ( $_SESSION ['visited'] )) {
	// DISPLAY HIT COUNTER ON PAGE
	$query = 'select * from hitcounter order by hitCount desc limit 1';
	
	if ($result = $dConnect->query ( $query )) {
		while ( $row = $result->fetch_assoc () ) {
			$nbrhits = $row ['hitCount'];
			// write it out
			echo '<p> Visitor #: ' . $nbrhits . '</p>';
		}
	} // close select if
} else {
	
	$_SESSION ['visited'] = 1; // record they have been to page
	                           
	// CREATE A NEW HIT
	$query = 'insert into hitcounter (hitCount) values (NULL)';
	
	if (! $dConnect->query ( $query )) {
		echo '<h2>Error: Cannot create record(' . $dConnect->connect_errno . ') ' . $dConnect->connect_error . '</h2>';
	} else {
		// DISPLAY HIT COUNTER ON PAGE
		$query = 'select * from hitcounter order by hitCount desc limit 1';
		$nbrhits = 0;
		
		if ($result = $dConnect->query ( $query )) { // if I get a record set
			while ( $row = $result->fetch_assoc () ) { // while I can get row from the record set
				
				$nbrhits = $row ['hitCount'];
				// write it out
				echo '<p> Visitor #: ' . $nbrhits . '</p>';
			} // close while
			  // empty the record set
			$result->free ();
			
			// DELETE THE HIT
			$query = 'delete from hitcounter where hitCount < ' . $nbrhits;
			
			if (! $dConnect->query ( $query )) {
				echo '<h2>Error: Cannot delete record(' . $dConnect->connect_errno . ') ' . $dConnect->connect_error . '</h2>';
			} // close delete if statement
		} // close select if statement
	} // close insert else
} // close if isset lse
  // close the connection
$dConnect->close ();
?>
