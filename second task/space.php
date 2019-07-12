<?php
$text = " one     two      three ";
$text = preg_replace('| +|', ' ', $text);
echo "$text";
?>

