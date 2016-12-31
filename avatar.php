<?php
$im = new Imagick("images/template.png");
// Background/main colors
$backgroundColor = isset($_GET["background_color"]) ? $_GET["background_color"] : "#ececec";
$maincolor = isset($_GET["main_color"]) ? $_GET["main_color"] : "#64d958";
$fuzz = $im->getQuantumRange()["quantumRangeLong"] * 0.05;
$im->paintOpaqueImage("#ffffff", $backgroundColor, $fuzz, Imagick::CHANNEL_DEFAULT);
$im->paintOpaqueImage("#000000", $maincolor, $fuzz, Imagick::CHANNEL_DEFAULT);
// Rounding 1/2
$round = isset($_GET["round"]) ? abs($_GET["round"]) : 0;
$im->roundCorners($round, $round, 0, 0, 0);
// Border
$borderColor = isset($_GET["border_color"]) ? $_GET["border_color"] : "#ffffff";
$borderWidth = isset($_GET["border_width"]) ? abs($_GET["border_width"]) : 0;
$im->borderImage($borderColor, $borderWidth, $borderWidth);
// Rounding 2/2
$im->roundCorners($round, $round, 0, 0, 0);
// Rotation
$rotate = isset($_GET["rotate"]) ? $_GET["rotate"] : 0;
switch($rotate){
    case 90:
    case 180:
    case 270:
        $im->rotateImage("#000000", $rotate);
        break;
}
// Output result image
header("Content-Type: image/png");
echo $im->getImageBlob();
// Destroy image to release resources
$im->destroy();