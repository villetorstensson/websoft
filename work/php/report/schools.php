/** PHP code */
<?php
$pageTitle = "Schools";
require __DIR__ . "/view/header.php"; ?>

<article>

        <h1>Schools</h1>
        
        <div id="content">
            <p>Choose a school to fetch down below</p>
        </div>

</article>


<form name="form2">
    <select name="jumpmenu" onChange="jumpto(document.form2.jumpmenu.options[document.form2.jumpmenu.options.selectedIndex].value)">
    <option>Choose municipality...</option>
    <option value='https://cors-anywhere.herokuapp.com/https://api.scb.se/UF0109/v2/skolenhetsregister/sv/kommun/1083'>Sölvesborg</option>
    <option value='https://cors-anywhere.herokuapp.com/https://api.scb.se/UF0109/v2/skolenhetsregister/sv/kommun/1290',>Kristianstad</option>
    </select>
    </form>


    <div id="container"></div>
<script type="text/javascript" src="js/school.js">jumpto(document.form2.jumpmenu.options[document.form2.jumpmenu.options.selectedIndex].value);</script> 

/** PHP code */
<?php require __DIR__ . "/view/footer.php"; ?>

