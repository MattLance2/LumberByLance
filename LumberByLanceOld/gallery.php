<?php
include_once('page_setup.php');
$header = printHeader();
echo $header;

$pageContent = <<<HTML
    <div id='pageText'> 
        <p>
            This is just a sample of the wood that Lumber by Lance has cut for our 
            pleased customers. Browse around to learn more about each of the species,
            and find the one that you enjoy the most! 
        </p>
        <table>
            <tr>
                <td>
                    <a href="images/craigs_porch/Full_Porch.jpg">
                        <img src='images/craigs_porch/Full_Porchcopy.jpg' class='galleryCopyImg' />
                    </a>
                </td>
                <td class='galleryTablePaddingLeft'>
                    This is a beautiful porch that is sided and floored with pecan. 
                    The tree was harvested form Craig's own back yard!
                    <br />
                    <a href='craigs_porch.php'>More Pictures Here.</a>
                </td>
            </tr>
            <tr>
                <td>
                    <a href="images/rest/Front.jpg">
                        <img src='images/rest/Frontcopy.jpg' class='galleryCopyImg' />
                    </a>
                </td>
                <td class='galleryTablePaddingLeft'>
                    This cozy restaurant was refashioned using our cut boards - including 
                    the use of pecky Cypress on the walls and some new Pine floorboards upstairs.
                    <br />
                    <a href='rest.php'>More Pictures Here.</a>
                </td>
            </tr>
        </table>
		<br />
		<div class='center'>
			Below is a short clip of how Lumber by Lance opperates on a job site.
			<iframe width="420" height="315" src="//www.youtube.com/embed/a6udNfX15lc" frameborder="0" allowfullscreen></iframe>
		</div>
    </div>
HTML;

echo $pageContent;

$footer = printFooter();
echo $footer;
?>