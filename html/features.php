<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"/>
<title>Viveka Prabha</title>
<link href="style/reset.css"  rel="stylesheet"  />
<link href="style/archivestyle.css" rel="stylesheet"/>
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
					<li><a href="authors.php">ಲೇಖಕರು</a></li>
					<li>|</li>
					<li><a href="volumes.php">ಸಂಪುಟಗಳು</a></li>
					<li>|</li>
					<li><a class="active" href="features.php">ಸ್ಥಿರ ಶೀರ್ಷಿಕೆ </a></li>
				</ul>
			</div>
			<div class="archive_title">ಸ್ಥಿರ ಶೀರ್ಷಿಕೆಗಳು</div>
			<div class="scroll">
				<ul>
				
<?php


include("connect.php");
$query1 = "select distinct feature from article order by feature";
$result1 = $mysqli->query($query1);
$num_rows1 = $result1->num_rows;

if($num_rows1)
{
	for($i1=1;$i1<=$num_rows1;$i1++)
	{	
		$row1 = $result1->fetch_assoc();
		$feature=$row1['feature'];
		$feature1=preg_replace("/ /","%20",$feature);
		
		if($feature != '')
		{
			echo "<li><span class=\"featurespan\"><a href=\"feat.php?feature=$feature1\">$feature</a></span></li>";
		}
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
