<?php
function printHeader(){
	$pageHtml = <<<HTML
<html">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Lumber by Lance</title>
	<meta name="keywords" content="North Florida Sawmill" />
	<meta name="description" content="Lumber by lance" />
	<link href="style.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<div id='leftWood'>&nbsp;</div>
<div id="content">
	<!-- header begins -->
	<div id="header"> 
		<div id="logo">
			<div id="orangeHeaderText">
				Lumber By Lance
			</div>
			<table id='headerInfo'>
				<tr>
					<td id='headerLeftText'>Logs to lumber at your site!</td>
                    <td><img src="images/recycle.png" /></td>
					<td id='headerRightText'>Jim Lance<br />(352)317-5141</td>
				</tr>
			</table>
		</div>
	</div>
HTML;

    $pageHtml .= printNavigation();
    
    return $pageHtml;
}

function printFooter(){
	return <<<HTML
	<div style="clear:both"></div>

    <div id="footer">
        321 SW Wells St. | Fort White, FL 32038 | (352) 317-5141 
    </div>
</div>
<!-- footer ends-->
</body>
</html>
HTML;
}

function printNavigation(){
    return <<<HTML
    <div id='siteNav'>
        <div id='topOrange'>
            <table id='navOptions'>
                <tr>
                    <td>|</td>
                    <td><a href='index.php'>HOME</a></td>
                    <td>|</td>
                    <td><a href='sawmill.php'>SAWMILL</a></td>
                    <td>|</td>
                    <td><a href='preparation.php'>PREPARATION</a></td>
                    <td>|</td>
                    <td><a href='kiln.php'>KILN</a></td>
                    <td>|</td>
                    <td><a href='gallery.php'>GALLERY</a></td>
                    <!--<td>|</td>-->
                    <!--<td><a href='contact.php'>CONTACT</a></td>-->
					<!--<td><a href='recycle.php'>RECYCLE</a></td>-->
                    <td>|<td>
                </tr>
            </table>
        </div>
    </div>
HTML;
}
?>