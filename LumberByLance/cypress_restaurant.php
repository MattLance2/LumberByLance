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
                    <a href="img/rest/Side_Wall.jpg">
                        <img src='img/rest/Side_Wallcopy.jpg' class='galleryCopyImg' />
                    </a>
                </div>
                <p class="centerInfoText">This small-town restaurant contacted Lumber by Lance, looking to redecorate their interior. When propositioned with this offer, we thought that a great choice for their scheme would be pecky Cypress. As seen in the photos, the Cypress was the perfect match.</p>
            </article>
        </div>
    </section>
    <section>
        <div id="container">
            <article class="centerInfo">
                <div class="centerInfoText">
                    <a href="img/rest/Fire_Place.jpg">
                        <img src='img/rest/Fire_Placecopy.jpg' class='galleryCopyImg' />
                    </a>
                    <a href="img/rest/Fire_Place_Mount.jpg">
                        <img src='img/rest/Fire_Place_Mountcopy.jpg' class='galleryCopyImg' />
                    </a>
                </div>
                <p class="centerInfoText">Shown here is a cypress mantle that adds finishing touches to the rest of the seating area.</p>
            </article>
        </div>
    </section>
    <section>
        <div id="container">
            <article class="centerInfo">
                <div class="centerInfoText">
                    <a href="img/rest/The_Beautiful_Floors.jpg">
                        <img src='img/rest/The_Beautiful_Floorscopy.jpg' class='galleryCopyImg' />
                    </a>
                    <a href="img/rest/Stair_Case.jpg">
                        <img src='img/rest/Stair_Casecopy.jpg' class='galleryCopyImg' />
                    </a>
                </div>
                <p class="centerInfoText">
                    Some of the floorboards in the upstairs of the restaurant were rotting 
                    and were unsightly. We were able to cut some pine logs into the exact 
                    dimensions that fit the existing holes. Once the boards were cut, we 
                    shipped them off to our planer to get molded into floorboards. Once the 
                    boards were ready to be installed, we suggested a particular finish 
                    stain that seamlessly integrated the new boards with the old.
                </p>
            </article>
        </div>
    </section>

HTML;

echo $pageContent;

$footer = printFooter();
echo $footer;
?>