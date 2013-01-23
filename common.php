<?php
// ===========================================================================================
//
//	file name: common.php
//
// 	Description: header and footer to be included on every php-page
//
// 	Author: Jörgen Stegeby
//
// -------------------------------------------------------------------------------------------
//
// Common header used in all PHP pages
//
$header = <<< JST
<div>
<a href='http://www.student.bth.se/~jgst11/phpmvc/mvc/index.php?id=2'>Min startsida</a>
<a href='http://www.student.bth.se/~jgst11/phpmvc/mvc/index.php?id=3'>Redovisning</a>
<a href='http://www.student.bth.se/~jgst11/phpmvc/mvc/source.php'>Visa k&auml;llkod</a>
<!-- a href='http://www.student.bth.se/~jgst11/adventure/adventure.php'>Spela Äventyrsspelet</a> -->
<!-- a href='http://www.student.bth.se/~jgst11/adventure/kompis.php'>Databas sökning av kompis</a> -->
<!-- a href='http://www.student.bth.se/~jgst11/dice/dicegame.php'>Kasta Gris</a -->
<!-- a href='http://www.student.bth.se/~jgst11/hangman/ritahuvud.php'>Rita Huvud</a> -->
<a href='http://validator.w3.org/check/referer'>XHTML</a>
<a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a>
<a href="http://catb.org/esr/faqs/hacker-howto.html">How to become a hacker</a>
</div>
JST;


// -------------------------------------------------------------------------------------------
//
// Common footer used in all PHP pages
//
$footer = <<< JST
<div style='margin-left: auto; text-align: center; font-size: small;'>
&copy; J&ouml;rgen Stegeby, 2012
</div>
JST;

?>
