<?php
include_once('page_setup.php');
$header = printHeader();
echo $header;


$pageContent = <<<HTML
    <section id="main">
        <div class="container">
            <h1 class="page-title">Contact info</h1>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="centerInfo">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3458.396268878936!2d-82.70303078467688!3d29.910492031842576!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88e8cd128ca63e93%3A0xea11ead69dfa7bd8!2sLumber%20By%20Lance!5e0!3m2!1sen!2sus!4v1588708783666!5m2!1sen!2sus" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="centerInfo">
                <div class="centerInfoText">
                    <h3>Contact Us</h3>
                    <address>Address: 6464 S, US-27, Fort White, FL 32038</address>
                    <p>Phone: <a href="tel:352-317-5141">(352)317-5141</a></p>
                </div>
            </div>
        </div>
    </section>
HTML;

echo $pageContent;

$footer = printFooter();
echo $footer;