<?php
function printHeader(){
	$pageHtml = <<<HTML
<!DOCTYPE html>
<html>
<head>
    <meta charset=utf-8" />
    <meta name="viewport" content="width=device-width" />
    <title>Lumber by Lance</title>
    <meta name="keywords" content="North Florida sawmill, affordable sawmill, Jim Lance" />
    <meta name="description" content="Lumber by Lance" />
    <meta name="author" content="Matthew Lance" />
    <link href="./css/style.css" rel="stylesheet" />
</head>
<body>
    
HTML;

    $pageHtml .= printNavigation();
    
    return $pageHtml;
}

function printFooter(){
	return <<<HTML

    <footer>
        Lumber by Lance | Jim Lance | (352) 317-5141
    </footer>

<!-- footer ends-->
</body>
</html>
HTML;
}

function printNavigation(){
    return <<<HTML
    <header>
        <div class="container">
            <div id="branding">
                <h1>Lumber By Lance</h1>
            </div>
            <nav>
                <ul>
                    <li class="current"><a href='index.php'>HOME</a></li>
                    <li><a href='sawmill.php'>SAWMILL</a></li>
                    <li><a href='preparation.php'>PREPARATION</a></li>
                    <li><a href='kiln.php'>KILN</a></li>
                    <li><a href='gallery.php'>GALLERY</a></li>
                    <li><a href='contact.php'>CONTACT</a></li>
                </ul>
            </nav>
        </div>
    </header>
HTML;
}
?>