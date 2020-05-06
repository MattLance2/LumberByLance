<?php
include_once('page_setup.php');
$header = printHeader();
echo $header;


$pageContent = <<<HTML
    <section id="main">
        <div class="container">
            <h1 class="page-title">Dry Kiln</h1>
        </div>
    </section>
    <section class="kiln">
        <div class="container">
            <article>
                <h3>We offer Kiln drying of wood!</h3>
                <p>The process for drying wood is simple:
                    <ul id="dryWood">
                        <li>Often the first step is to allow the lumber to cure for three months, to reduce most of the moisture.</li>
                        <li>
                            Then the wood is kiln dried to reduce the moisture further. The wood is normally dried to 8 to 12 percent moisture for flooring and furniture purposes.
                            <ul id="woodMoisture">
                                <li>For soft woods like cedar, pine or cypress the process can take a little over a week.</li>
                                <li>For the hard woods like oak, cherry, dogwood, or hickory the process can take a little over two weeks.</li>
                            </ul>
                        </li>
                        <li>Once the wood is kiln dried, the wood can then be planed or molded, or used as is for the desired application.</li>
                    </ul>
                <p>
            </article>
            <img src="img/dry_kiln.jpg" >
        </div>
    </section>
HTML;

echo $pageContent;

$footer = printFooter();
echo $footer;