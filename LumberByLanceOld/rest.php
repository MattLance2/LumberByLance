<?php
include_once('page_setup.php');
$header = printHeader();
echo $header;

$pageContent = <<<HTML
    <div id='pageText'>
        <br />
        <div class='center'>
            <a href="images/rest/Side_Wall.jpg">
                <img src='images/rest/Side_Wallcopy.jpg' class='galleryCopyImg' />
            </a>
        </div>
        <br />
        <div>
            This small-town restaurant contacted Lumber by Lance, looking to 
            redecorate their interior. When propositioned with this offer, we 
            thought that a great choice for their scheme would be pecky Cypress. 
            As seen in the photos, the Cypress was the perfect match.
        </div>
        <br />
        <div class='center'>
            <a href="images/rest/Fire_Place.jpg">
                <img src='images/rest/Fire_Placecopy.jpg' class='galleryCopyImg' />
            </a>
            <a href="images/rest/Fire_Place_Mount.jpg">
                <img src='images/rest/Fire_Place_Mountcopy.jpg' class='galleryCopyImg' />
            </a>
        </div>
        <br />
        <div>
            Shown here is a cypress mantle that adds finishing touches to the rest 
            of the seating area.
        </div>
        <br />
        <div class='center'>
            <a href="images/rest/The_Beautiful_Floors.jpg">
                <img src='images/rest/The_Beautiful_Floorscopy.jpg' class='galleryCopyImg' />
            </a>
            <a href="images/rest/Stair_Case.jpg">
                <img src='images/rest/Stair_Casecopy.jpg' class='galleryCopyImg' />
            </a>
        </div>
        <br />
        <div>
            Some of the floorboards in the upstairs of the restaurant were rotting 
            and were unsightly. We were able to cut some pine logs into the exact 
            dimensions that fit the existing holes. Once the boards were cut, we 
            shipped them off to our planer to get molded into floorboards. Once the 
            boards were ready to be installed, we suggested a particular finish 
            stain that seamlessly integrated the new boards with the old.
        </div>
    </div>
HTML;

echo $pageContent;

$footer = printFooter();
echo $footer;
?>