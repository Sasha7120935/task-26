<?php

$text = '<title> my name is Sasha </title>';
if(preg_match("!<title>(.*)</title>!",$text,$preg))
    print_r($preg);
?>

