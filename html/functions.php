<?php

function getCurrentVolumeIssue($database,$db)
{

	mysql_select_db($database,$db);
	mysql_set_charset("utf8",$db);
	
	$query11 = "select distinct volume, issue from article order by volume desc, issue desc limit 1";
	$result11=mysql_query($query11);
	$row11=mysql_fetch_assoc($result11);

	$details['volume'] = $row11['volume'];	
	$details['issue'] = $row11['issue'];	

	return $details;
}

?>
