<!DOCTYPE html>
<html>
<head>
<meta charset = "UTF-8"/>
<title>Viveka Prabha</title>
<link href="style/reset.css" rel="stylesheet"/>
<link href="style/archivestyle.css" rel="stylesheet"/>
<link rel="icon" type="image/png" href="images/favicon.png">
</head>
<?php
	isset($_GET['author'])? $akey = $_GET['author']: $akey = "";
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
					<li><a href="articles.php">ಲೇಖನಗಳು</a></li>
					<li>|</li>
					<li><a class="active" href="authors.php">ಲೇಖಕರು</a></li>
					<li>|</li>
					<li><a href="volumes.php">ಸಂಪುಟಗಳು</a></li>
					<li>|</li>
					<li><a href="features.php">ಸ್ಥಿರ ಶೀರ್ಷಿಕೆ </a></li>
				</ul>
			</div>
			<div class="archive_title">ಲೇಖಕರ ಪಟ್ಟಿ</div>
			<div class="alpha_list">
				<span <?php if($akey=='ಅ'): ?> class=".searchletter" <?php else: ?>class="alphaspan"> <?php endif;?><a href="authors.php?author=ಅ">&nbsp;ಅ</a>&nbsp;</span>
				<span <?php if($akey=='ಆ'): ?> class=".searchletter" <?php else: ?>class="alphaspan"> <?php endif;?><a href="authors.php?author=ಆ">&nbsp;ಆ</a>&nbsp;</span>
				<span <?php if($akey=='ಈ'): ?> class=".searchletter" <?php else: ?>class="alphaspan"> <?php endif;?><a href="authors.php?author=ಈ">&nbsp;ಈ</a>&nbsp;</span>
				<span <?php if($akey=='ಉ'): ?> class=".searchletter" <?php else: ?>class="alphaspan"> <?php endif;?><a href="authors.php?author=ಉ">&nbsp;ಉ</a>&nbsp;</span>
				<span <?php if($akey=='ಎ'): ?> class=".searchletter" <?php else: ?>class="alphaspan"> <?php endif;?><a href="authors.php?author=ಎ">&nbsp;ಎ</a>&nbsp;</span>
				<span <?php if($akey=='ಓ'): ?> class=".searchletter" <?php else: ?>class="alphaspan"> <?php endif;?><a href="authors.php?author=ಓ">&nbsp;ಓ</a>&nbsp;</span>
				<span <?php if($akey=='ಕ'): ?> class=".searchletter" <?php else: ?>class="alphaspan"> <?php endif;?><a href="authors.php?author=ಕ">&nbsp;ಕ</a>&nbsp;</span>
				<span <?php if($akey=='ಗ'): ?> class=".searchletter" <?php else: ?>class="alphaspan"> <?php endif;?><a href="authors.php?author=ಗ">&nbsp;ಗ</a>&nbsp;</span>
				<span <?php if($akey=='ಚ'): ?> class=".searchletter" <?php else: ?>class="alphaspan"> <?php endif;?><a href="authors.php?author=ಚ">&nbsp;ಚ</a>&nbsp;</span>
				<span <?php if($akey=='ಜ'): ?> class=".searchletter" <?php else: ?>class="alphaspan"> <?php endif;?><a href="authors.php?author=ಜ">&nbsp;ಜ</a>&nbsp;</span>
				<span <?php if($akey=='ಡ'): ?> class=".searchletter" <?php else: ?>class="alphaspan"> <?php endif;?><a href="authors.php?author=ಡ">&nbsp;ಡ</a>&nbsp;</span>
				<span <?php if($akey=='ಟ'): ?> class=".searchletter" <?php else: ?>class="alphaspan"> <?php endif;?><a href="authors.php?author=ಟ">&nbsp;ಟ</a>&nbsp;</span>
				<span <?php if($akey=='ತ'): ?> class=".searchletter" <?php else: ?>class="alphaspan"> <?php endif;?><a href="authors.php?author=ತ">&nbsp;ತ</a>&nbsp;</span>
				<span <?php if($akey=='ಥ'): ?> class=".searchletter" <?php else: ?>class="alphaspan"> <?php endif;?><a href="authors.php?author=ಥ">&nbsp;ಥ</a>&nbsp;</span>				
				<span <?php if($akey=='ದ'): ?> class=".searchletter" <?php else: ?>class="alphaspan"> <?php endif;?><a href="authors.php?author=ದ">&nbsp;ದ</a>&nbsp;</span>
				<span <?php if($akey=='ಧ'): ?> class=".searchletter" <?php else: ?>class="alphaspan"> <?php endif;?><a href="authors.php?author=ಧ">&nbsp;ಧ</a>&nbsp;</span>
				<span <?php if($akey=='ನ'): ?> class=".searchletter" <?php else: ?>class="alphaspan"> <?php endif;?><a href="authors.php?author=ನ">&nbsp;ನ</a>&nbsp;</span>
			</div>
			<div class="alpha_list">
				<span <?php if($akey=='ಪ'): ?> class=".searchletter" <?php else: ?>class="alphaspan"> <?php endif;?><a href="authors.php?author=ಪ">&nbsp;ಪ</a>&nbsp;</span>
				<span <?php if($akey=='ಬ'): ?> class=".searchletter" <?php else: ?>class="alphaspan"> <?php endif;?><a href="authors.php?author=ಬ">&nbsp;ಬ</a>&nbsp;</span>
				<span <?php if($akey=='ಭ'): ?> class=".searchletter" <?php else: ?>class="alphaspan"> <?php endif;?><a href="authors.php?author=ಭ">&nbsp;ಭ</a>&nbsp;</span>
				<span <?php if($akey=='ಮ'): ?> class=".searchletter" <?php else: ?>class="alphaspan"> <?php endif;?><a href="authors.php?author=ಮ">&nbsp;ಮ</a>&nbsp;</span>
				<span <?php if($akey=='ಯ'): ?> class=".searchletter" <?php else: ?>class="alphaspan"> <?php endif;?><a href="authors.php?author=ಯ">&nbsp;ಯ</a>&nbsp;</span>
				<span <?php if($akey=='ರ'): ?> class=".searchletter" <?php else: ?>class="alphaspan"> <?php endif;?><a href="authors.php?author=ರ">&nbsp;ರ</a>&nbsp;</span>
				<span <?php if($akey=='ಲ'): ?> class=".searchletter" <?php else: ?>class="alphaspan"> <?php endif;?><a href="authors.php?author=ಲ">&nbsp;ಲ</a>&nbsp;</span>
				<span <?php if($akey=='ವ'): ?> class=".searchletter" <?php else: ?>class="alphaspan"> <?php endif;?><a href="authors.php?author=ವ">&nbsp;ವ</a>&nbsp;</span>
				<span <?php if($akey=='ಶ'): ?> class=".searchletter" <?php else: ?>class="alphaspan"> <?php endif;?><a href="authors.php?author=ಶ">&nbsp;ಶ</a>&nbsp;</span>
				<span <?php if($akey=='ಸ'): ?> class=".searchletter" <?php else: ?>class="alphaspan"> <?php endif;?><a href="authors.php?author=ಸ">&nbsp;ಸ</a>&nbsp;</span>
				<span <?php if($akey=='ಹ'): ?> class=".searchletter" <?php else: ?>class="alphaspan"> <?php endif;?><a href="authors.php?author=ಹ">&nbsp;ಹ</a>&nbsp;</span>
			</div>
			<div class="scroll">
				<ul>
				
<?php
		include("connect.php");

		$akey != "" ? $query = "select * from author where authorname like '$akey%' order by authorname": $query = "select * from author order by authorname";
		$result = $mysqli->query($query);
		$num_rows = $result->num_rows;
		
		if($num_rows)
		{
			for($i=0;$i<$num_rows;$i++)
			{	
				$row = $result->fetch_assoc();
				$authorname = $row['authorname'];
				$salutation = $row['salutation'];
				$authid = $row['authid'];
				
				if($salutation == '')
				{
					echo "<li><span class=\"authorspan\"><a href=\"auth.php?authid=$authid\">$authorname</a></span></li>";
				}
				else	
				{
					echo "<li><span class=\"authorspan\"><a href=\"auth.php?authid=$authid\">$authorname, $salutation</a></span></li>";
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
