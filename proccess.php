<?php
if ($_SERVER['REQUEST_METHOD'] !== "POST") {
    return;
}
include "autoload.php";


[$title, $content, $format] = [$_POST['title'], $_POST['content'], $_POST['format']];



if ($title == "" || $content == "" || $format == "") {
    echo "please fill in all the fields";
    return;
}

$class = "Exporter\\{$format}Exporter";

$ex = new $class(['title' => $title, 'content' => $content]);
$ex->export();
