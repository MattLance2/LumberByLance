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
    
    $phpPageName = getPageName();
    
    $indexCurrent = ($phpPageName == 'index.php') ? " class='current'" : "";
    $sawmillCurrent = ($phpPageName == 'sawmill.php') ? " class='current'" : "";
    $prepCurrent = ($phpPageName == 'preparation.php') ? " class='current'" : "";
    $kilnCurrent = ($phpPageName == 'kiln.php') ? " class='current'" : "";
    $contactCurrent = ($phpPageName == 'contact.php') ? " class='current'" : "";
    
    $galleryCurrent = pageIsGallery($phpPageName) ? " class='current'" : "";

    return "
    <header>
        <div class='container'>
            <div id='branding'>
                <h1>Lumber By Lance</h1>
            </div>
            <nav>
                <ul>
                    <li{$indexCurrent}><a href='index.php'>HOME</a></li>
                    <li{$sawmillCurrent}><a href='sawmill.php'>SAWMILL</a></li>
                    <li{$prepCurrent}><a href='preparation.php'>PREPARATION</a></li>
                    <li{$kilnCurrent}><a href='kiln.php'>KILN</a></li>
                    <li{$galleryCurrent}><a href='gallery.php'>GALLERY</a></li>
                    <li{$contactCurrent}><a href='contact.php'>CONTACT</a></li>
                </ul>
            </nav>
        </div>
    </header>
";
}

function getPageName(){
    $pageName = basename($_SERVER['PHP_SELF']);
    return $pageName;
}

function pageIsGallery($pageNameInput){
    $galleryPageList = array("gallery.php", "pecan_porch.php", "cypress_restaurant.php", "pic.php");
    if (in_array($pageNameInput, $galleryPageList))
        return true;
    return false;
}
?>