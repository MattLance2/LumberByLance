<?php
include_once('page_setup.php');
$header = printHeader();
echo $header;

$sideWallPicLink = setupLink("craigs_porch/Side_Wall.jpg");
$doorBorderPicLink = setupLink("craigs_porch/Door_Border.jpg");
$sideWallTwoPicLink = setupLink("craigs_porch/Side_Wall_2.jpg");
$cypressTreePicLink = setupLink("craigs_porch/Cypress_Tree.jpg");
$plaquePicLink = setupLink("craigs_porch/Plaque.jpg");

$pageContent = <<<HTML

    <section id="main">
        <div class="container">
            <h1 class="page-title">Pecan Porch</h1>
        </div>
    </section>
    <section>
        <div id="container">
            <article class="centerInfo">
                <div class="centerInfoText">
                    <a {$sideWallPicLink}">
                        <img src='img/craigs_porch/Side_Wallcopy.jpg' class='galleryCopyImg' />
                    </a>
                    <a {$doorBorderPicLink}>
                        <img src='img/craigs_porch/Door_Bordercopy.jpg' class='galleryCopyImg' />
                    </a>
                    <a {$sideWallTwoPicLink}>
                        <img src='img/craigs_porch/Side_Wall_2copy.jpg' class='galleryCopyImg' />
                    </a>
                </div>
                <p class="centerInfoText">
                    This porch, built and owned by Craig Gardner, was completely finished with pecan 
                    boards from a single tree. Pecan is a great wood to use for this if you like to 
                    stand out from the ordinary
                </p>
                <a {$cypressTreePicLink}>
                    <img src='img/craigs_porch/Cypress_Treecopy.jpg' class='galleryCopyImg' />
                </a>
                <a {$plaquePicLink}>
                    <img src='img/craigs_porch/Plaquecopy.jpg' class='galleryCopyImg' />
                </a>
            </article>
        </div>
    </section>
HTML;

echo $pageContent;

$footer = printFooter();
echo $footer;


function setupLink($picLink){
    return 'href="pic.php?heading=Pecan Porch&imgPath=img/' . $picLink . '"';
}
?>