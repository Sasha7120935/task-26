<html>
<head>
    <meta charset="UTF-8"/>
    <title>index.PHP</title>
</head>
<body>
<form method="POST">
    login:                 <input type="text" name="login"/>
    password:              <input type="text" name="password"/>
    email:                <input type="text" name="email"/>
    personal information:  <input type="text" name="personal information"/>
    <input type="submit"  value="Отправить"/>
</form>

<?php

if(isset($_POST)) {
    if (preg_match('/^[a-zA-Z0-9._-]{1,15}/', "abcd1234567891-")) {
        echo "abcd1234567891-";
    } else {
        echo "not";
    }
    if (preg_match('/^[a-zA-Z0-9._-]{8,}/', "1a34567-")) {
        echo "1a34567-";
    } else {

        echo "not";
    }
    if (preg_match('/^[a-zA-Z0-9][a-zA-Z0-9._-]{1,}[a-zA-Z0-9]@[a-zA-Z0-9][a-zA-Z0-9-]{1,}\.[a-zA-Z]{2,5}$/', "belousalek@gmail.com")) {
        echo "belousalek@gmail.com";
    } else {
        echo "not";
    }


    $text = "MY NAME BELOUS ALEK";
    $text = preg_replace_callback(
        "|[A-Z]{2,}|u",
        "replace_text", $text);
    echo $text;
    }

    function replace_text($matcher)
    {
        return mb_substr($matcher[0], 0, 1) . mb_strtolower(substr($matcher[0], 1));
    }



?>

</body>

</html>


