<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"/>
<title>Viveka Prabha</title>
<link href="html/style/reset.css" rel="stylesheet"/>
<link href="html/style/indexstyle1.css"  rel="stylesheet"/>
<link rel="icon" type="image/png" href="html/images/favicon.png">
</head>

<body>
<div class="page">
	<div class="header">
		<div class="logo">
			<img class="logo_img" src="html/images/Logo.jpg" alt="Logo" title="Logo"/>
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
				<li><a href="javascript:void();">Font Help</a></li>
				<li>|</li>
				<li><a href="javascript:void();">Site Map</a></li>
				<li>|</li>
				<li><a href="javascript:void();">Register</a></li>
				<li>|</li>				
				<li><a href="javascript:void();">Contact us</a></li>				
			</ul>
		</div>
		<div id="nav">
			<ul>
				<li><a class="active" href="javascript:void();">ವಿವೇಕಪ್ರಭ</a></li>
				<li><a href="html/dhyeya.php">ಧ್ಯೇಯ </a></li>
				<li><a href="html/volumes.php">ಹಿಂದಿನ ಸಂಚಿಕೆಗಳು</a></li>
			</ul>
		</div>
	</div>
	<div class="body">
		<div class="column1">
			<?php 
					include("html/connect.php");
					include("html/functions.php");

					#get current volume, issue details
					$currentIssueDetails = getCurrentVolumeIssue($mysqli);
					$volume = $currentIssueDetails['volume'];
					$issue = $currentIssueDetails['issue'];
					
					//~ echo $volume . "->" . $issue . "<br />";

					
					$query2 = "select * from article where volume='$volume' and issue='$issue' and feature='ಸಂಪಾದಕೀಯ' limit 1";
					$result2 = $mysqli->query("select * from article where volume='$volume' and issue='$issue' and feature='ಸಂಪಾದಕೀಯ' limit 1");
					$row2 = $result2->fetch_assoc();
	
					echo "<div class=\"widget\">"; 
					echo "<div class=\"tbar\">".$nom[$row2['issue']-1]." ಸಂಚಿಕೆ</div>";
					echo "<img src=\"html/images/viveka.png\" alt=\"cover\"/><br />";
					echo "<img src=\"html/images/cover.png\" alt=\"175 Anniversary\"/><br />";
					echo "<span class=\"title\">".$row2['theme']."<br/></span>";
					echo "<span class=\"text\"><a href=\"Volumes/".$row2['volume']."/".$row2['issue']."/index.djvu?djvuopts&page=".$row2['page']."&zoom=page\" target=\"_blank\">ಸಂಪಾದಕೀಯ: ".$row2['title']."</a></span>";
					echo "</div>";
			?>
			<?php print_widget("ಭಾರತೀಯ ಸಂಗೀತ",0,$volume,$issue,'ಸಂಗೀತ ಮತ್ತು ಉಪಾಸನೆ');?>	
			<?php print_widget("ಭಾರತೀಯ ಸಂಗೀತ",0,$volume,$issue,'ಸಾಮವೇದ ಹಾಗೂ ಭಾರತೀಯ ಸಂಗೀತದ ಉಗಮ');?>									
			<?php print_widget("ಭಾರತೀಯ ಸಂಗೀತ",0,$volume,$issue,'ಸಂಗೀತದಲ್ಲಿ ಗುರು-ಶಿಷ್ಯ ಪರಂಪರೆ ಮತ್ತು ಆಧ್ಯಾತ್ಮಿಕತೆ');?>									
			<?php print_widget("ಭಾರತೀಯ ಸಂಗೀತ",0,$volume,$issue,'ಭಾರತೀಯ ಸಂಗೀತ ಮತ್ತು ನೃತ್ಯಕಲೆಗಳಲ್ಲಿ ಅಧ್ಯಾತ್ಮ');?>									
			<?php print_widget("ಭಾರತೀಯ ಸಂಗೀತ",0,$volume,$issue,'ಆಧ್ಯಾತ್ಮಿಕತೆಯೇ ಭಾರತೀಯ ಸಂಗೀತದ ಪರಮಲಕ್ಷ್ಯ');?>									
		</div>
		
		<div class="column2">
			<?php print_widget("ಭಾರತೀಯ ಸಂಗೀತ",1,$volume,$issue,'ಹಿಂದೂಸ್ತಾನಿ ಸಂಗೀತದಲ್ಲಿ ಭಕ್ತಿ');?>									
			<?php print_widget("ಭಾರತೀಯ ಸಂಗೀತ",1,$volume,$issue,'ಹಿಂದೂಸ್ತಾನಿ ಸಂಗೀತದಲ್ಲಿ ವಚನದಲ್ಲಿ ಮತ್ತು ದಾಸರ ಪದಗಳು: ಆಧ್ಯಾತ್ಮಿಕ ಅಭಿವ್ಯಕ್ತಿ ಆತ್ಮ ಸಾಕ್ಷಾತ್ಕಾರದ ವಿನೂತನ ವಿಧಾನ');?>									
			<?php print_widget("ಭಾರತೀಯ ಸಂಗೀತ",1,$volume,$issue,'ಹರಿಕಥಾ ಪರಂಪರೆ:ಸಂಗೀತ-ಭಕ್ತಿಗಳ ಸಮಾಗಮ');?>									
			<?php print_widget("ಭಾರತೀಯ ಸಂಗೀತ",1,$volume,$issue,'ಹರಿದಾಸರ ನಾದಯೋಗ');?>									
			<?php print_widget("ಭಾರತೀಯ ಸಂಗೀತ",1,$volume,$issue,"ಕರ್ನಾಟಕ ಸಂಗೀತ ತ್ರಿಮೂರ್ತಿಗಳ ಕೃತಿಗಳಲ್ಲಿ \`ಭಕ್ತಿ ಮತ್ತು ಅಧ್ಯಾತ್ಮ\'");?>									
			<?php print_widget("ಭಾರತೀಯ ಸಂಗೀತ",1,$volume,$issue,"ಶ್ರೀತ್ಯಾಗರರಾಜರ ಕೃತಿಗಳಲ್ಲಿ ಅಧ್ಯಾತ್ಮ");?>									
			<?php print_widget("ಭಾರತೀಯ ಸಂಗೀತ",1,$volume,$issue,"ಮುತ್ತುಸ್ವಾಮಿ ದೀಕ್ಷಿತರು ಮತ್ತು ಅಧ್ಯಾತ್ಮ");?>									
			<?php print_widget("ಭಾರತೀಯ ಸಂಗೀತ",1,$volume,$issue,"ಸಂಗೀತದಲ್ಲಿ ಸಾಹಿತ್ಯ ಸ್ಥಾನ");?>									
		</div>
		<div class="column3">
			<div class="art_widget_index">
				<div>
					<a href="html/year.php?volume=016&year=2015" target="_blank"><img src="html/images/2016.gif" alt="cover" title="Annual Index"/></a>
				</div>
				<div style="width: 50%;" class="text">
					<span class="furtherspan"><a href="html/year.php?volume=017&year=2016" target="_blank">೨೦೧೬<br />(ಸಂಪುಟ ೧೭)<br />ವಾರ್ಷಿಕ ಅನುಕ್ರಮಣಿಕೆ</a></span><br />
				</div>
			</div>
			<div class="art_widget">
				<div>
					<a href="http://www.caminova.net/en/downloads/download.aspx?id=1" target="_blank"><img src="html/images/djvu.png" alt="cover" title="ಡೆಜವೂ ಪ್ಲಗಿನ್"/></a>
				</div>
				<div style="width: 50%;" class="text">
					<span class="furtherspan"><a href="http://www.caminova.net/en/downloads/download.aspx?id=1" target="_blank">ಲೇಖನಗಳನ್ನು ಡೆಜವೂ (DjVu) ರೂಪದಲ್ಲಿಟ್ಟಿದೆ. ಅವುಗಳನ್ನು ನೋಡಲು ಡೆಜವೂ ಪ್ಲಗಿನ್ ಅಗತ್ಯ. ಇದು ಮುಕ್ತವಾಗಿ ಇಲ್ಲಿ ಸಿಗುತ್ತದೆ:</a></span><br />
				</div>				
			</div>			
			<?php print_widget("ರಾಮಕೃಷ್ಣ ಮಹಾಸಂಘದಲ್ಲಿ ಸಂಗೀತ -ಭಜನೆ",2,$volume,$issue,"ಸ್ವಾಮಿ ವಿವೇಕಾನಂದರು ಮತ್ತು ಸಂಗೀತ");?>							
			<?php print_widget("ರಾಮಕೃಷ್ಣ ಮಹಾಸಂಘದಲ್ಲಿ ಸಂಗೀತ -ಭಜನೆ",2,$volume,$issue,"ಸ್ವಾಮಿ ವಿವೇಕಾನಂದರ \`ಸಂಗೀತ ಕಲ್ಪತರು\'");?>							
			<?php print_widget("ರಾಮಕೃಷ್ಣ ಮಹಾಸಂಘದಲ್ಲಿ ಸಂಗೀತ -ಭಜನೆ",2,$volume,$issue,"ಶ್ರೀರಾಮಕೃಷ್ಣರು ಮತ್ತು ಸಂಗೀತ");?>							
			<?php print_widget("ರಾಮಕೃಷ್ಣ ಮಹಾಸಂಘದಲ್ಲಿ ಸಂಗೀತ -ಭಜನೆ",2,$volume,$issue,"ರಾಮಕೃಷ್ಣ ಆಶ್ರಮ ಹಾಗೂ ಭಕ್ತರ ಪರಂಪರೆಯಲ್ಲಿ ಕನ್ನಡದ ಭಜನೆಗಳು");?>							
			<?php print_widget("ರಾಮಕೃಷ್ಣ ಮಹಾಸಂಘದಲ್ಲಿ ಸಂಗೀತ -ಭಜನೆ",2,$volume,$issue,"ರಾಮಕೃಷ್ಣ ಮಹಾಸಂಘದಲ್ಲಿ ರಾಮನಾಮ ಸಂಕೀರ್ತನೆ");?>							
			<?php print_widget("ರಾಮಕೃಷ್ಣ ಮಹಾಸಂಘದಲ್ಲಿ ಸಂಗೀತ -ಭಜನೆ",2,$volume,$issue,"ಕಾಳೀಕೀರ್ತನೆ:ಒಂದು ಪರಿಚಯ");?>							
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
<?php
	function print_widget($feature, $column,$volume,$issue,$title)
	{
		include("html/connect.php");
		
		$query="select * from article where feature='$feature' and volume=$volume and issue=$issue and title='$title'";
		$result = $mysqli->query($query);
		$num_rows = $result->num_rows;
		if($num_rows>0)
		{
			if($column==0)
			{
				echo "<div class=\"art_widget_col1\">";
			}
			else
			{
				echo "<div class=\"art_widget\">";
			}
			
			echo "<div class=\"tbar\">$feature</div>";
			for($i=0;$i<$num_rows;$i++)
			{
				$row = $result->fetch_assoc();
				$authid = $row['authid'];
				
				$query = "select * from author where authid=$authid";
				$result1 = $mysqli->query($query);
				$row1 = $result1->fetch_assoc();
				$author = $row1['authorname'];
				
				echo "<div>";
				echo "<img class=\"art_widget_img\" src=\"Volumes/".$row['volume']."/".$row['issue']."/images/".$row['page'].".png\" alt=\"cover\"/>";
				echo "</div>";
				echo "<div style=\"width: 50%;\" class=\"text\">";
				echo "<span class=\"titlespan\"><a href=\"Volumes/".$row['volume']."/".$row['issue']."/index.djvu?djvuopts&page=".$row['page']."&zoom=page\" target=\"_blank\">".$row['title']."</a></span><br />";
				echo ($authid != 0) ? "<span class=\"authorspan\"><a href=\"html/auth.php?authid=".$authid."\" target=\"_blank\">".$author.", ".$row1['salutation']."</a></span><br />" : "";
				echo $row['text'];
				echo ($row['text'] == '') ? "" : "...";
				echo "</div>";
				echo "<div class=\"further\"><span class=\"furtherspan\"><a href=\"Volumes/".$row['volume']."/".$row['issue']."/index.djvu?djvuopts&page=".$row['page']."&zoom=page\" target=\"_blank\">ಮುಂದೆ ಓದಿ..</a></span></div>";
				if($i!=$num_rows-1)
				{
					echo "<div class=\"art_widget_rule\"></div>";
				}
				
			}
			echo "</div>";
		}
	}
?>	

</div>
</body>
</html>
