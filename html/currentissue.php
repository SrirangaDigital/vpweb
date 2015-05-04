<?php 
	include("connect.php");
	$month=array("ಜನವರಿ","ಫೆಬ್ರವರಿ","ಮಾರ್ಚ್","ಏಪ್ರಿಲ್","ಮೇ","ಜೂನ್","ಜುಲೈ","ಆಗಸ್ಟ್","ಸೆಪ್ಟೆಂಬರ್","ಅಕ್ಟೋಬರ್","ನವೆಂಬರ್","ಡಿಸೆಂಬರ್");
	$db=mysql_connect($host,$user,$password) or die("Not Connected To Database".mysql_error());
	mysql_select_db($database,$db);
	mysql_set_charset("utf8",$db);
	$result=mysql_query("select * from article where volume=$volume and issue=$issue and feature='ಸಂಪಾದಕೀಯ' limit 1");
	$row=mysql_fetch_assoc($result);
	
	echo "<div class=\"widget\">"; 
	echo "<div class=\"tbar\">".$month[$row['issue']-1]." ಸಂಚಿಕೆ</div>";
	echo "<img src=\"images/viveka.png\" alt=\"cover\"/><br />";
	echo "<img src=\"images/cover.png\" alt=\"175 Anniversary\"/><br />";
	echo "<span class=\"title\">&apos;".$row['theme']."&apos;</span><br />";
	echo "<span class=\"text\"><a href=\"../Volumes/".$row['volume']."/".$row['issue']."/index.djvu?djvuopts&page=".$row['page']."&zoom=page\" target=\"_blank\">ಸಂಪಾದಕೀಯ: ".$row['title']."</a></span>";
	echo "</div>"; 
?>
