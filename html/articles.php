<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"/>
<title>Viveka Prabha</title>
<link href="style/reset.css" rel="stylesheet"/>
<link href="style/archivestyle.css" rel="stylesheet"/>
<link rel="icon" type="image/png" href="images/favicon.png">
</head>
<?php
	isset($_GET['article']) ? $article = $_GET['article'] : $article = "";
?>
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
					<li><a class="active" href="articles.php">ಲೇಖನಗಳು</a></li>
					<li>|</li>
					<li><a href="authors.php">ಲೇಖಕರು</a></li>
					<li>|</li>
					<li><a href="volumes.php">ಸಂಪುಟಗಳು</a></li>
					<li>|</li>
					<li><a href="features.php">ಸ್ಥಿರ ಶೀರ್ಷಿಕೆ </a></li>
				</ul>
			</div>
			<div class="archive_title">ಲೇಖನಗಳ ಪಟ್ಟಿ</div>
			<div class="alpha_list">
				<span <?php if($article=='ಅ'): ?> class=".searchletter" <?php else: ?>class="alphaspan"> <?php endif;?><a href="articles.php?article=ಅ">&nbsp;ಅ</a>&nbsp;</span>
				<span <?php if($article=='ಆ'): ?> class=".searchletter" <?php else: ?>class="alphaspan"> <?php endif;?><a href="articles.php?article=ಆ">&nbsp;ಆ</a>&nbsp;</span>
				<span <?php if($article=='ಇ'): ?> class=".searchletter" <?php else: ?>class="alphaspan"> <?php endif;?><a href="articles.php?article=ಇ">&nbsp;ಇ</a>&nbsp;</span>
				<span <?php if($article=='ಈ'): ?> class=".searchletter" <?php else: ?>class="alphaspan"> <?php endif;?><a href="articles.php?article=ಈ">&nbsp;ಈ</a>&nbsp;</span>
				<span <?php if($article=='ಉ'): ?> class=".searchletter" <?php else: ?>class="alphaspan"> <?php endif;?><a href="articles.php?article=ಉ">&nbsp;ಉ</a>&nbsp;</span>
				<span <?php if($article=='ಊ'): ?> class=".searchletter" <?php else: ?>class="alphaspan"> <?php endif;?><a href="articles.php?article=ಊ">&nbsp;ಊ</a>&nbsp;</span>
				<span <?php if($article=='ಋ'): ?> class=".searchletter" <?php else: ?>class="alphaspan"> <?php endif;?><a href="articles.php?article=ಋ">&nbsp;ಋ</a>&nbsp;</span>
				<span <?php if($article=='ಎ'): ?> class=".searchletter" <?php else: ?>class="alphaspan"> <?php endif;?><a href="articles.php?article=ಎ">&nbsp;ಎ</a>&nbsp;</span>
				<span <?php if($article=='ಏ'): ?> class=".searchletter" <?php else: ?>class="alphaspan"> <?php endif;?><a href="articles.php?article=ಏ">&nbsp;ಏ</a>&nbsp;</span>
				<span <?php if($article=='ಐ'): ?> class=".searchletter" <?php else: ?>class="alphaspan"> <?php endif;?><a href="articles.php?article=ಐ">&nbsp;ಐ</a>&nbsp;</span>
				<span <?php if($article=='ಒ'): ?> class=".searchletter" <?php else: ?>class="alphaspan"> <?php endif;?><a href="articles.php?article=ಒ">&nbsp;ಒ</a>&nbsp;</span>
				<span <?php if($article=='ಓ'): ?> class=".searchletter" <?php else: ?>class="alphaspan"> <?php endif;?><a href="articles.php?article=ಓ">&nbsp;ಓ</a>&nbsp;</span>
				<span <?php if($article=='ಕ'): ?> class=".searchletter" <?php else: ?>class="alphaspan"> <?php endif;?><a href="articles.php?article=ಕ">&nbsp;ಕ</a>&nbsp;</span>
				<span <?php if($article=='ಖ'): ?> class=".searchletter" <?php else: ?>class="alphaspan"> <?php endif;?><a href="articles.php?article=ಖ">&nbsp;ಖ</a>&nbsp;</span>
				<span <?php if($article=='ಗ'): ?> class=".searchletter" <?php else: ?>class="alphaspan"> <?php endif;?><a href="articles.php?article=ಗ">&nbsp;ಗ</a>&nbsp;</span>
				<span <?php if($article=='ಘ'): ?> class=".searchletter" <?php else: ?>class="alphaspan"> <?php endif;?><a href="articles.php?article=ಘ">&nbsp;ಘ</a>&nbsp;</span>
				<span <?php if($article=='ಚ'): ?> class=".searchletter" <?php else: ?>class="alphaspan"> <?php endif;?><a href="articles.php?article=ಚ">&nbsp;ಚ</a>&nbsp;</span>
				<span <?php if($article=='ಜ'): ?> class=".searchletter" <?php else: ?>class="alphaspan"> <?php endif;?><a href="articles.php?article=ಜ">&nbsp;ಜ</a>&nbsp;</span>
			</div>
			<div class="alpha_list">
				<span <?php if($article=='ಟ'): ?> class=".searchletter" <?php else: ?>class="alphaspan"> <?php endif;?><a href="articles.php?article=ಟ">&nbsp;ಟ</a>&nbsp;</span>
				<span <?php if($article=='ಠ'): ?> class=".searchletter" <?php else: ?>class="alphaspan"> <?php endif;?><a href="articles.php?article=ಠ">&nbsp;ಠ</a>&nbsp;</span>
				<span <?php if($article=='ತ'): ?> class=".searchletter" <?php else: ?>class="alphaspan"> <?php endif;?><a href="articles.php?article=ತ">&nbsp;ತ</a>&nbsp;</span>
				<span <?php if($article=='ಥ'): ?> class=".searchletter" <?php else: ?>class="alphaspan"> <?php endif;?><a href="articles.php?article=ಥ">&nbsp;ಥ</a>&nbsp;</span>				
				<span <?php if($article=='ದ'): ?> class=".searchletter" <?php else: ?>class="alphaspan"> <?php endif;?><a href="articles.php?article=ದ">&nbsp;ದ</a>&nbsp;</span>
				<span <?php if($article=='ಧ'): ?> class=".searchletter" <?php else: ?>class="alphaspan"> <?php endif;?><a href="articles.php?article=ಧ">&nbsp;ಧ</a>&nbsp;</span>
				<span <?php if($article=='ನ'): ?> class=".searchletter" <?php else: ?>class="alphaspan"> <?php endif;?><a href="articles.php?article=ನ">&nbsp;ನ</a>&nbsp;</span>
				<span <?php if($article=='ಪ'): ?> class=".searchletter" <?php else: ?>class="alphaspan"> <?php endif;?><a href="articles.php?article=ಪ">&nbsp;ಪ</a>&nbsp;</span>
				<span <?php if($article=='ಬ'): ?> class=".searchletter" <?php else: ?>class="alphaspan"> <?php endif;?><a href="articles.php?article=ಬ">&nbsp;ಬ</a>&nbsp;</span>
				<span <?php if($article=='ಭ'): ?> class=".searchletter" <?php else: ?>class="alphaspan"> <?php endif;?><a href="articles.php?article=ಭ">&nbsp;ಭ</a>&nbsp;</span>
				<span <?php if($article=='ಮ'): ?> class=".searchletter" <?php else: ?>class="alphaspan"> <?php endif;?><a href="articles.php?article=ಮ">&nbsp;ಮ</a>&nbsp;</span>
				<span <?php if($article=='ಯ'): ?> class=".searchletter" <?php else: ?>class="alphaspan"> <?php endif;?><a href="articles.php?article=ಯ">&nbsp;ಯ</a>&nbsp;</span>
				<span <?php if($article=='ರ'): ?> class=".searchletter" <?php else: ?>class="alphaspan"> <?php endif;?><a href="articles.php?article=ರ">&nbsp;ರ</a>&nbsp;</span>
				<span <?php if($article=='ಲ'): ?> class=".searchletter" <?php else: ?>class="alphaspan"> <?php endif;?><a href="articles.php?article=ಲ">&nbsp;ಲ</a>&nbsp;</span>
				<span <?php if($article=='ವ'): ?> class=".searchletter" <?php else: ?>class="alphaspan"> <?php endif;?><a href="articles.php?article=ವ">&nbsp;ವ</a>&nbsp;</span>
				<span <?php if($article=='ಶ'): ?> class=".searchletter" <?php else: ?>class="alphaspan"> <?php endif;?><a href="articles.php?article=ಶ">&nbsp;ಶ</a>&nbsp;</span>
				<span <?php if($article=='ಸ'): ?> class=".searchletter" <?php else: ?>class="alphaspan"> <?php endif;?><a href="articles.php?article=ಸ">&nbsp;ಸ</a>&nbsp;</span>
				<span <?php if($article=='ಹ'): ?> class=".searchletter" <?php else: ?>class="alphaspan"> <?php endif;?><a href="articles.php?article=ಹ">&nbsp;ಹ</a>&nbsp;</span>
			</div>
			<div class="scroll">
				<ul>
	<?php
		include("connect.php");
		
		$article!="" ? $query = "select * from article where title like '$article%' order by title, volume, issue, page": $query = "select * from article order by title, volume, issue, page";
		$result = $mysqli->query($query);
		$num_rows = $result->num_rows;
				
		if($num_rows)
		{
			for($i=1;$i<=$num_rows;$i++)
			{	
				$row = $result->fetch_assoc();
				$title = $row['title'];
				$feature = $row['feature'];
				$authid = $row['authid'];
				$volume = $row['volume'];
				$year = $row['year'];
				$month = $row['month'];
				$issue = $row['issue'];
				$page = $row['page'];
				echo "<li><span class=\"titlespan\"><a href=\"../Volumes/$volume/$issue/index.djvu?djvuopts&page=$page&zoom=page\" target=\"_blank\">" . $title . "</a></span>";
						
				if($authid != 0)
				{
					$query2 = "select * from author where authid=$authid";
					$result2 = $mysqli->query($query2);
					$row2 = $result2->fetch_assoc();
					
					$authorname=$row2['authorname'];
					$salutation=$row2['salutation'];
							
					if($salutation == '')
					{
						echo "&nbsp;&nbsp;<span class=\"authorspan\"><a href=\"auth.php?authid=$authid\">$authorname</a></span>";
					}
					else
					{
						echo "&nbsp;&nbsp;<span class=\"authorspan\"><a href=\"auth.php?authid=$authid\">$authorname, $salutation</a></span>";
					}
				}
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
