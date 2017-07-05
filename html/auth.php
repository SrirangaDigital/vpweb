<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"/>
<title>Viveka Prabha</title>
<link href="style/reset.css" rel="stylesheet"/>
<link href="style/archivestyle.css" rel="stylesheet"/>
<link rel="icon" type="image/png" href="images/favicon.png">
</head>

<body>
<div class="page">
	<div class="header">
		<div class="logo">
			<img class="logo_img" src="images/Logo.jpg" alt="Logo" title="Logo"/>
		</div>
		<div class="title">
			ವಿವೇಕಪ್ರಭ
		</div>
		<div class="toptitle">
			ಶ್ರೀರಾಮಕೃಷ್ಣ ಆಶ್ರಮ, ಮೈಸೂರು
		</div>
		<div class="subtitle">
			ರಾಮಕೃಷ್ಣ ಮಹಾಸಂಘದ ಏಕೈಕ ಕನ್ನಡ ಮಾಸಪತ್ರಿಕೆ
		</div>
		<div id="headnav">
			<ul>
				<li><a href="javascript:void()">Font Help</a></li>
				<li>|</li>
				<li><a href="javascript:void()">Site Map</a></li>
				<li>|</li>
				<li><a href="javascript:void()">Register</a></li>
				<li>|</li>
				<li><a href="javascript:void()">Contact us</a></li>
			</ul>
		</div>
		<div id="nav">
			<ul>
				<li><a href="../index.php">ವಿವೇಕಪ್ರಭ</a></li>
				<li><a href="dhyeya.php">ಧ್ಯೇಯ </a></li>
				<li><a class="active" href="volumes.php">ಹಿಂದಿನ ಸಂಚಿಕೆಗಳು</a></li>
			</ul>
		</div>

	</div>
	<div class="body">
		<div class="column1">
			<div class="subnav">
				<ul>
					<li><a href="articles.php">ಲೇಖನಗಳು</a></li>
					<li>|</li>
					<li><a class="active" href="authors.php">ಲೇಖಕರು</a></li>
					<li>|</li>
					<li><a href="volumes.php">ಸಂಪುಟಗಳು</a></li>
					<li>|</li>
					<li><a href="features.php">ಸ್ಥಿರ ಶೀರ್ಷಿಕೆ </a></li>
				</ul>
			</div>
<?php

include("connect.php");
$authid = $_GET['authid'];

if($authid != 0)
{
						
	$query2 = "select * from author where authid=$authid";
	$result2 = $mysqli->query($query2);
	$row2 = $result2->fetch_assoc();
					
	$authorname=$row2['authorname'];
	$salutation=$row2['salutation'];

	if($salutation == '')
	{
		echo "<div class=\"archive_title\">$authorname ಅವರ ಲೇಖನಗಳು</div>";
	}
	else
	{
		echo "<div class=\"archive_title\">$authorname, $salutation ಅವರ ಲೇಖನಗಳು</div>";
	}

	echo "<div class=\"scroll\">\n<ul>\n";
			

}
	
$query1 = "select * from article where authid='$authid' order by volume, issue, page";
$result1 = $mysqli->query($query1);
$num_rows1 = $result1->num_rows;
		
if($num_rows1)
{
	for($i1=1;$i1<=$num_rows1;$i1++)
	{	
		$row1 = $result1->fetch_assoc();
		$title = $row1['title'];
		$feature = $row1['feature'];
		$authid = $row1['authid'];
		$volume = $row1['volume'];
		$year = $row1['year'];
		$month = $row1['month'];
		$issue = $row1['issue'];
		$page = $row1['page'];
						
		echo "<li><span class=\"titlespan\"><a href=\"../Volumes/$volume/$issue/index.djvu?djvuopts&page=$page&zoom=page\" target=\"_blank\">" . $title . "</a></span>";
		echo "<br />&nbsp;&nbsp;&nbsp;&nbsp;<span class=\"yearspan\"><a href=\"year.php?volume=$volume&year=$year\">ಸಂಪುಟ&nbsp;<span class=\"eng\">".intval($volume)."</span></a></span>&nbsp;<span class=\"yearspan\"><a href=\"toc.php?volume=$volume&issue=$issue&month=$month&year=$year\">".$nom[$month-1]."&nbsp;<span class=\"eng\">($year)</span></a></span></li>";				
	}
}

?>			
				</ul>
			</div>
		</div>
		<div class="column2">
		<?php include("currentissue.php");?>
		</div>
	</div>
	<div class="footer">
		<div class="foot_box">
			<div class="left">
				<ul>
					<li><a href="javascript:void()">Terms of Use</a></li>
					<li>|</li>
					<li><a href="javascript:void()">Privacy Policy</a></li>
					<li>|</li>
					<li><a href="javascript:void()">Contact us</a></li>
				</ul>
			</div>
			<div class="right">
				&copy;2011-2013 Sri Ramakrishna Ashrama, Mysore. All Rights Reserved
			</div>
		</div>
	</div>
</div>

</body>
</html>
