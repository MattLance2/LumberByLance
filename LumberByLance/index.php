<?php
include_once('page_setup.php');
$header = printHeader();
echo $header;

$pageContent = <<<HTML
    
    <section id="showcase">
        <div class="container">
            <h1>Logs to Lumber at your site</h1>
            <p>We serve the North Central Florida Region, located in Fort White, Fl.</p>
        </div>
    </section>
    
    <section id="indexBoxes">
        <div class="container">
            <div class="box"> 
                <h3>Portable Sawmill</h3>
                <p>Using a Woodmizer portable sawmill, we can come to your site and cut your logs into valuable lumber.</p>
            </div>
            <div class="box"> 
                <h3>Dry Kiln</h3>
                <p>We can kiln dry your wood so it can be used in all types of applications.</p>
            </div>
            <div class="box"> 
                <h3>Lumber</h3>
                <p>We also offer wood for sale. This wood has been cut and kiln dried and is ready for use.</p>
            </div>
        </div>
    </section>
    <section class="centerVideo">
        <div class="container">
            <iframe width="480" height="360" src="https://www.youtube.com/embed/noQoECtyzmQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <p>This is a walkthrough of the sawmilling in action. Turning the logs into lumber for this happy customer.</p>            
        </div>
    </section>

    
HTML;

echo $pageContent;

$footer = printFooter();
echo $footer;
?>