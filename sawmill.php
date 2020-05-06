<?php
include_once('page_setup.php');
$header = printHeader();
echo $header;


$pageContent = <<<HTML

    <section id="main">
        <div class="container">
            <h1 class="page-title">Portable Sawmill</h1>
            <article id="main-col">
                <h3>We use a fully-hydraulic Woodmizer portable bandsaw. This allows very little wood to be wasted.</h3>
                <p>We can cut logs up to 20 foot in length and 22 inches in diameter. Cutting your logs into lumber can save you up to 75% of the cost of going to the store and buying that same wood. Even with Kiln drying, the cost saving can be enormous.</p>
                <img src="img/woodmizer.jpg" >
                <p>Contact for information and scheduling.</p>
            </article>
            <aside id="sidebar">
                <div class="dark"> 
                    <h3>Portability</h3>
                    <p>By using a portable sawmill, we can come to your site and start cutting your wood in as little as 2 weeks.</p>
                </div>
            </aside>
        </div>
    </section>
    
HTML;

echo $pageContent;

$footer = printFooter();
echo $footer;