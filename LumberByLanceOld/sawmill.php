<?php
include_once('page_setup.php');
$header = printHeader();
echo $header;

$pageContent = <<<HTML
    <div id='pageText'>
        <div class='pageTextHeader'>
            Portable Sawmill
        </div>
        <p>
            By using a portable sawmill, we can come to your site and start cutting your wood in as little as 2 weeks.
        </p>
        <div class='center'>
            <img src='images/woodmizer.jpg' class='pageImg' />
        </div>
        <p>
            We use a fully-hydraulic Woodmizer portable bandsaw. This allows very little wood to be wasted.
        </p>
        <p>
            We can cut logs up to 20 foot in length and 22 inches in diameter. Cutting your logs into lumber
            can save you up to 75% of the cost of going to the store and buying that same wood. Even with Kiln 
            drying, the cost saving can be enormous.
        </p>
        <p>
            Contact for information and scheduling.
        </p>
    </div>
HTML;

echo $pageContent;

$footer = printFooter();
echo $footer;
?>