<?php
function getSize($size)
{
    $arr = array("Byte", "KB", "MB", "GB");
    $i   = 0;
    while ($size >= 1024 && $i < 3) {
        $size /= 1024;
        $i++;
    }
    return round($size, 2) . $arr[$i];
}
function printNormal($path, $num)
{
    $newpath  = "processed/";
    $command  = "lpr -# " . $num . " " . $path;
    $command2 = $command . " && " . "mv " . $path . " " . $newpath;
    exec($command2, $result, $right);
    return $right;
}
function printOffice($path)
{

    //$command = 'cd upload && libreoffice --headless --convert-to pdf "./' . $path . '"';

    $command = "./tpdf" . " ./upload/" . $path;
    //$command = 'libreoffice --headless --convert-to pdf "./upload/test.doc"';
    echo $command;
    exec($command, $result, $right);
    print_r($result);
    return $right;
}
