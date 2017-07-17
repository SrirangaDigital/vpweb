<?php 
	include("connect.php");
	include("functions.php");

	#get current volume, issue details
	$currentIssueDetails = getCurrentVolumeIssue($mysqli);
	$volume = $currentIssueDetails['volume'];
	$issue = $currentIssueDetails['issue'];	

	$result = $mysqli->query("select * from article where volume=$volume and issue=$issue and feature='ಸಂಪಾದಕೀಯ' limit 1");
	$row = $result->fetch_assoc();
	
	echo "<div class=\"widget\">"; 
	echo "<div class=\"tbar\">".$nom[$row['issue']-1]." ಸಂಚಿಕೆ</div>";
	echo "<img src=\"images/viveka.png\" alt=\"cover\"/><br />";
	echo "<img src=\"images/cover.png\" alt=\"175 Anniversary\"/><br />";
	echo "<span class=\"title\">&apos;".$row['theme']."&apos;</span><br />";
	echo "<span class=\"text\"><a href=\"../Volumes/".$row['volume']."/".$row['issue']."/index.djvu?djvuopts&page=".$row['page']."&zoom=page\" target=\"_blank\">ಸಂಪಾದಕೀಯ: ".$row['title']."</a></span>";
	echo "</div>"; 
?>
