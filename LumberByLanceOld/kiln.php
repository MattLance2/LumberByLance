<?php
include_once('page_setup.php');
$header = printHeader();
echo $header;

$pageContent = <<<HTML
    <div id='pageText'>
        <div class='pageTextHeader'>
            Dry Kiln
        </div>
        <div class='center'>
            <img src='images/dry_kiln.jpg' id='dryKilnImg' />
        </div>
        <p>
            We offer Kiln drying of wood so it can be used in all types of applications. 
            The process for drying wood is simple:
        </p>
        <p>
            <ul>
                <li>
                    Often the first step is to allow the lumber to cure for three months, 
                    to reduce most of the moisture. 
                </li>
                <li>
                    Then the wood is kiln dried to reduce the moisture further. The wood 
                    is normally dried to 8 to 12 percent moisture for flooring and furniture 
                    purposes. 
                    <ul>
                        <li>
                            For soft woods like cedar, pine or cypress the process can take 
                            a little over a week. 
                        </li>
                        <li>
                            For the hard woods like oak, cherry, dogwood, or hickory the 
                            process can take a little over two weeks.
                        </li>
                    </ul>
                </li>
                <li>
                    Once the wood is kiln dried, the wood can then be planed or molded, or 
                    used as is for the desired application.
                </li>
            </ul>
        </p>
    </div>
HTML;

echo $pageContent;

$footer = printFooter();
echo $footer;
?>