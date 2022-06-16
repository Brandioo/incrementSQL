<?php
$text = ["Card Identity", "Other Document"];

foreach ($text as $value) {
    $replaceWord = lcfirst(str_replace(" ", "", ucwords(strtolower($value), " ")));
    $replaceWord = preg_replace("/[^A-Za-z0-9 ]/", '', $replaceWord);
    echo "UPDATE `iDocIP`.`DocumentList` SET `iDocIP`.`DocumentList`.`document_identifier` = \"$replaceWord\" WHERE TRIM(`iDocIP`.`DocumentList`.`documentName`) = \"$value\"\n";
}
?>