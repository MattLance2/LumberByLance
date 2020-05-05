<?php
include_once('page_setup.php');
$header = printHeader();
echo $header;

$pageContent = <<<HTML
    <div id='pageText'>
        <div class='pageTextHeader'>
            Welcome to Lumber By Lance
        </div>
        <div class='center' id='mainTopText'>
            We serve the <strong>North Central Florida Region</strong>, located in <strong>Fort White, Fl</strong>. 
        </div>
        <div>
            <ul>
                <li><strong>Portable Sawmill</strong> - Using a Woodmizer portable sawmill, we can come to your site and cut your logs into valuable lumber.</li>
                <li><strong>Dry Kiln</strong> - We can kiln dry your wood so it can be used in all types of applications.</li>
                <li><strong>Lumber!</strong> - We also offer wood for sale. This wood has been cut and kiln dried and is ready for use.</li>

            </ul>
        </div>
        <div class='center'>
            <!--<embed height="360" width="480" allowfullscreen="true" enablejavascript="false" allowscriptaccess="never" type="application/x-shockwave-flash" src="http://www.youtube.com/v/KkfDSXHuR60&autoplay=0">-->
            <embed height="360" width="480" allowfullscreen="true" enablejavascript="false" allowscriptaccess="never" type="application/x-shockwave-flash" src="http://www.youtube.com/v/noQoECtyzmQ&autoplay=0">
        </div>
        <br />
        <div>
            Please visit our gallery for examples of how wood that has been produced by Lumber by Lance has been used. 
        </div>
    </div>
HTML;

echo $pageContent;

$footer = printFooter();
echo $footer;
?>