<?php
//$regexp = '/[0-5]{5}$/';
//$str = '12345';


//echo preg_match($regexp,$str);

if (preg_match("/^[0-9]{1,5}$/", "12345")){

    echo "Is a string number";

}else {

    echo "not a string number";

}



