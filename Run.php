<?php
$text = ["Card Identity", "Other Document"];

foreach ($text as $value) {
    $replaceWord = lcfirst(str_replace(" ", "", ucwords(strtolower($value), " ")));
    $replaceWord = preg_replace("/[^A-Za-z0-9 ]/", '', $replaceWord);
    echo "UPDATE ``.`` SET ``.``.`_` = \"$replaceWord\" WHERE TRIM(``.``.``) = \"$value\"\n";
}
?>
