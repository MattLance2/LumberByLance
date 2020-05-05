<?php
include_once('page_setup.php');
$header = printHeader();
echo $header;

$pageContent = <<<HTML
    <div id='pageText'>
        <div class='pageTextHeader'>
            Preparing your Site for the Sawmill
        </div>
        <p>
            <strong>In preparation for the sawmilling, you should do the following:</strong>
        </p>
        <p>
            <ul>
                <li>
                    The logs need to be stacked in a pile with all ends pointing the same way 
                    (similar to a package of hotdogs).
                </li>
                <li>
                    To reduce the fraying of the logs, which is caused from the moisture leaving 
                    the ends of the boards, the ends should be painted (any paint will work). 
                </li>
                <li>
                    The logs need to be free of dirt and rocks. This can be achieved with a 
                    broom or by using water to wash the logs off.
                </li>
            </ul>
        </p>
        <p>
            <strong>Decide where the lumber will be stored:</strong>
        </p>
        <div class='center'>
            <img src='images/sticker_stack2.jpg' class='pageImg' />
        </div>
        <p>
            <ul>
                <li>
                    The wood will need to be "sticker stacked". Stickers are four foot long 
                    1"x1" pieces of wood, which are used in between the layers of lumber. This
                    allows air flow between the drying lumber. 
                </li>
                <li>
                    The wood should be stacked off of the ground, usually elevated by a few 
                    concrete cinder blocks beneath the bottom. 
                </li>
                <li>
                    Once cut, the lumber should be air dried for 90 days if it is going to 
                    the kiln or a year per inch of thickness if it is not going to be kiln dried. 
                </li>
                <li>
                    The storage area should have good circulation, a roof so no direct sun will 
                    hit the lumber, and it will need to be elevated off the ground. A good roof 
                    could consist of some simple roofing tin.
                </li>
                <li>
                    To reduce and prevent bugs, a thin layer of the laundry detergent 'Borax' 
                    should be sprinkled throughout the layers. 
                </li>
            </ul>
        </p>
        <div class='center'>
            <img src='images/sticker_stack.jpg' class='pageImg' />
        </div>
        <p>
            If you have any questions about preparing your site, e-mail us at preperation@lumberbylance.com 
        </p>
    </div>
HTML;

echo $pageContent;

$footer = printFooter();
echo $footer;
?>