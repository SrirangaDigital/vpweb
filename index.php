<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"/>
<title>Viveka Prabha</title>
<link href="html/style/reset.css" rel="stylesheet"/>
<link href="html/style/indexstyle1.css"  rel="stylesheet"/>
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
					$month=array("ಜನವರಿ","ಫೆಬ್ರವರಿ","ಮಾರ್ಚ್","ಏಪ್ರಿಲ್","ಮೇ","ಜೂನ್","ಜುಲೈ","ಆಗಸ್ಟ್","ಸೆಪ್ಟೆಂಬರ್","ಅಕ್ಟೋಬರ್","ನವೆಂಬರ್","ಡಿಸೆಂಬರ್");
					$db=mysql_connect($host,$user,$password) or die("Not Connected To Database".mysql_error());
					mysql_select_db($database,$db);
					mysql_set_charset("utf8",$db);
					$query1 = "select * from article where volume='$volume' and issue='$issue' and feature='ಸಂಪಾದಕೀಯ' limit 1";
					$result=mysql_query("select * from article where volume='$volume' and issue='$issue' and feature='ಸಂಪಾದಕೀಯ' limit 1");
					$row=mysql_fetch_assoc($result);
	
					echo "<div class=\"widget\">"; 
					echo "<div class=\"tbar\">".$month[$row['issue']-1]." ಸಂಚಿಕೆ</div>";
					echo "<img src=\"html/images/viveka.png\" alt=\"cover\"/><br />";
					echo "<img src=\"html/images/cover.png\" alt=\"175 Anniversary\"/><br />";
					echo "<span class=\"title\">".$row['theme']."<br/></span>";
					echo "<span class=\"text\"><a href=\"Volumes/".$row['volume']."/".$row['issue']."/index.djvu?djvuopts&page=".$row['page']."&zoom=page\" target=\"_blank\">ಸಂಪಾದಕೀಯ: ".$row['title']."</a></span>";
					echo "</div>";
			?>
			<?php print_widget("ಶ್ರೀರಾಮಕೃಷ್ಣ ವಚನವೇದದಿಂದ",0);?>										
			<?php print_widget("ಯೋಗವಾಸಿಷ್ಠದ ಕಥೆಗಳು:ಕಥಾಗುಚ್ಛ ೩",0);?>
		</div>
		
		<div class="column2">
					<?php print_widget("ಯೋಗವಾಸಿಷ್ಠದ ಕಥೆಗಳು",1);?>
					<?php print_widget("ವಿಶೇಷ ಲೇಖನ",1);?>		
					<?php print_widget("ಭಗವದ್ಗೀತಾ ತತ್ತ್ವಸೌರಭ",1);?>		
					<?php print_widget("ಆಧ್ಯಾತ್ಮಿಕ ಸಂಭಾಷಣೆ",1);?>									
					<?php print_widget("ಚಿತ್ರಕಥೆ",1);?>							
		</div>
		<div class="column3">
			<div class="art_widget_index">
				<div>
					<a href="html/year.php?volume=015&year=2015" target="_blank"><img src="html/images/2014.gif" alt="cover" title="Annual Index"/></a>
				</div>
				<div style="width: 50%;" class="text">
					<span class="furtherspan"><a href="html/year.php?volume=015&year=2014" target="_blank">೨೦೧೪<br />(ಸಂಪುಟ ೧೫)<br />ವಾರ್ಷಿಕ ಅನುಕ್ರಮಣಿಕೆ</a></span><br />
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
			<?php print_widget("ಧಾರಾವಾಹಿ",2);?>
			<?php print_widget("ಜಪಾನಿನ ನೀತಿಕಥೆಗಳು",1);?>
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
	function print_widget($feature, $column)
	{
		include("html/connect.php");
		$db_con=mysql_connect($host,$user,$password) or die("Not connected To database");
		mysql_set_charset("utf8",$db_con);
		mysql_select_db($database,$db_con) or die("No Database".mysql_error());
		$query="select * from article where feature='$feature' and volume=$volume and issue=$issue";
		$result=mysql_query($query) or die("Invalid Article Query".mysql_error());
		$num_rows=mysql_num_rows($result);
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
				$row=mysql_fetch_assoc($result);
				$authid=$row['authid'];
				$query="select * from author where authid=$authid";
				$result1=mysql_query($query) or die("Invalid Author Query".mysql_error());
				$row1=mysql_fetch_assoc($result1);
				$author=$row1['authorname'];
				
				echo "<div>";
				echo "<img id=\"art_widget_img\" src=\"Volumes/".$row['volume']."/".$row['issue']."/images/".$row['page'].".png\" alt=\"cover\"/>";
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
