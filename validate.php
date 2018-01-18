
<?php
function val_array($input)
{
	static $result = array();
	foreach ($input as $k) {
		if (is_array($k)) val_array($k);
		else{
			$k = stripslashes($k);
			$k = strip_tags($k);
			$k = htmlentities($k);
			$result[] = htmlentities($k);
		}
	}
	return $result;
}
?>
