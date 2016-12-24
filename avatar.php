<?php
$rotate = isset($_GET["rotate"]) ? (int) $_GET["rotate"] : 0;
$im = new Imagick("template.png");
$fuzz = 0.05 * $im->getQuantumRange()["quantumRangeLong"];
$im->paintOpaqueImage("#ffffff", isset($_GET["background"]) ? $_GET["background"] : "#ececec", $fuzz, Imagick::CHANNEL_DEFAULT);
$im->paintOpaqueImage("#000000", isset($_GET["main"]) ? $_GET["main"] : "#64d958", $fuzz, Imagick::CHANNEL_DEFAULT);
switch($rotate){
    case 90:
    case 180:
    case 270:
        $im->rotateImage("#000000", $rotate);
        break;
}
header("Content-Type: image/png");
echo $im->getImageBlob();
$im->destroy();