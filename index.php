<?php
require './ class/StrUtils.php';

$myStr = new StrUtils('php is awesome !');

echo $myStr->bold();
echo $myStr->italic();
echo $myStr->underline();
echo $myStr->capitalize();
echo $myStr->uglify();
// TODO n'oubliez pas de créer votre classe dans le dossier classes.

