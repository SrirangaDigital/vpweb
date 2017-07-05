<?php

function getCurrentVolumeIssue($mysqli)
{

	$query11 = "select distinct volume, issue from article order by volume desc, issue desc limit 1";
	$result11 = $mysqli->query($query11);
	$row11 = $result11->fetch_assoc();

	$details['volume'] = $row11['volume'];	
	$details['issue'] = $row11['issue'];	

	return $details;
}

?>
