<?php
include_once('page_setup.php');
$header = printHeader();
echo $header;

$headerText = setupPicHeader();
$imagePath = getImagePath();


$pageContent = <<<HTML
    <section id="main">
        <div class="container">
            <h1 class="page-title">{$headerText}</h1>
        </div>
    </section>
    <section class="picPageContent">
        <div class="container">
            <img class="picPageImg" src="{$imagePath}" >
        </div>
    </section>
HTML;

echo $pageContent;

$footer = printFooter();
echo $footer;


function setupPicHeader(){
    if(isset($_GET["heading"]))
        return htmlentities($_GET["heading"], ENT_QUOTES, 'UTF-8');
    
    return "Gallery";
}

function getImagePath(){
    if(isset($_GET["imgPath"])){ 
        $currentImage = $_GET["imgPath"];
        
        if (file_exists($currentImage)){
            return $currentImage;
        }
    }
    
    return "";
}

?>