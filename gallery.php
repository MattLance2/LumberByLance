<?php
include_once('page_setup.php');
$header = printHeader();
echo $header;


$pageContent = <<<HTML
    <section id="main">
        <div class="container">
            <h1 class="page-title">Gallery</h1>
        </div>
    </section>
    <section>
        <div id="container">
            <article class="centerInfo">
                <div class="centerInfoText">
                    <p class="dark">This is just a sample of the wood that Lumber by Lance has cut for our pleased customers. Browse around to learn more about each of the species, and find the one that you enjoy the most!</p>
                </div>
            </article>
        </div>
    </section>
    <section class="galleryBoxes">
        <div class="container">
            <div class="box"> 
                <h3>Porch</h3>
                <a href="img/craigs_porch/Full_Porch.jpg">
                    <img src='img/craigs_porch/Full_Porchcopy.jpg' class='galleryCopyImg' />
                </a>
                <p>This is a beautiful porch that is sided and floored with pecan. The tree was harvested form Craig's own back yard!</p>
                <a href="pecan_porch.php">More Pictures Here</a>
            </div>
            <div class="box"> 
                <h3>Restaurant</h3>
                <a href="img/rest/Front.jpg">
                    <img src='img/rest/Frontcopy.jpg' class='galleryCopyImg' />
                </a>
                <p>This cozy restaurant was refashioned using our cut boards - including the use of pecky Cypress on the walls and some new Pine floorboards upstairs.</p>
                <a href="cypress_restaurant.php">More Pictures Here</a>
            </div>
        </div>
    </section>
    <section class="centerVideo">
        <div class="container">
                <h3>Cabin</h3>
                <p>This cabin was built with all locally cut, milled, dried, and finished wood. No detail was left untouched.</p>
                <iframe width="420" height="315" src="https://www.youtube.com/embed/a6udNfX15lc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </section>
HTML;

echo $pageContent;

$footer = printFooter();
echo $footer;