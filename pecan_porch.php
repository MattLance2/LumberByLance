<?php
include_once('page_setup.php');
$header = printHeader();
echo $header;

$pageContent = <<<HTML

    <section id="main">
        <div class="container">
            <h1 class="page-title">Cypress Restaurant</h1>
        </div>
    </section>
    <section>
        <div id="container">
            <article class="centerInfo">
                <div class="centerInfoText">
                    <a href="img/craigs_porch/Side_Wall.jpg">
                        <img src='img/craigs_porch/Side_Wallcopy.jpg' class='galleryCopyImg' />
                    </a>
                    <a href="img/craigs_porch/Door_Border.jpg">
                        <img src='img/craigs_porch/Door_Bordercopy.jpg' class='galleryCopyImg' />
                    </a>
                    <a href="img/craigs_porch/Side_Wall_2.jpg">
                        <img src='img/craigs_porch/Side_Wall_2copy.jpg' class='galleryCopyImg' />
                    </a>
                </div>
                <p class="centerInfoText">
                    This porch, built and owned by Craig Gardner, was completely finished with pecan 
                    boards from a single tree. Pecan is a great wood to use for this if you like to 
                    stand out from the ordinary
                </p>
                <a href="img/craigs_porch/Cypress_Tree.jpg">
                    <img src='img/craigs_porch/Cypress_Treecopy.jpg' class='galleryCopyImg' />
                </a>
                <a href="img/craigs_porch/Plaque.jpg">
                    <img src='img/craigs_porch/Plaquecopy.jpg' class='galleryCopyImg' />
                </a>
            </article>
        </div>
    </section>
HTML;

echo $pageContent;

$footer = printFooter();
echo $footer;
?>