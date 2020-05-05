<?php
include_once('page_setup.php');
$header = printHeader();
echo $header;

$pageContent = <<<HTML
    <div id='pageText'> 
        
        <div class='center'>
            <a href="images/craigs_porch/Side_Wall.jpg">
                <img src='images/craigs_porch/Side_Wallcopy.jpg' class='galleryCopyImg' />
            </a>
            <a href="images/craigs_porch/Door_Border.jpg">
                <img src='images/craigs_porch/Door_Bordercopy.jpg' class='galleryCopyImg' />
            </a>
            <a href="images/craigs_porch/Side_Wall_2.jpg">
                <img src='images/craigs_porch/Side_Wall_2copy.jpg' class='galleryCopyImg' />
            </a>
        </div>
        <div>
            This porch, built and owned by Craig Gardner, was completely finished with pecan 
            boards from a single tree. Pecan is a great wood to use for this if you like to 
            stand out from the ordinary
        </div>
        <div class='center'>
            <a href="images/craigs_porch/Cypress_Tree.jpg">
                <img src='images/craigs_porch/Cypress_Treecopy.jpg' class='galleryCopyImg' />
            </a>
            <a href="images/craigs_porch/Plaque.jpg">
                <img src='images/craigs_porch/Plaquecopy.jpg' class='galleryCopyImg' />
            </a>
        </div>
    </div>
HTML;

echo $pageContent;

$footer = printFooter();
echo $footer;
?>