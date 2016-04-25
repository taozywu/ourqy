<?php
$dir = opendir("processed");
$arr = array();
while (($temp = readdir($dir)) != false) {
    if ($temp != '.' && $temp != '..') {
        if (!empty($temp)) {
            $date       = date("完成日期:Y/m/d h:i:s", fileatime("processed/" . $temp));
            $arr[$date] = $temp;
        }
    }
}
closedir($dir);
krsort($arr);

while (count($arr) > 20) {
    $temp = array_pop($arr);
    system("rm " . "processed/" . $temp);
}

foreach ($arr as $key => $temp) {
    $img   = '<img class="img_print" ' . 'alt=" " title="再次打印"/>';
    $img_a = '<a href="index.php?act=repeat&filename=' . $temp . '">' . $img . '</a>';

    $img2     = '<img class="img_model" ' . 'alt=" " title="成为模板"/>';
    $img_a2   = '<a href="index.php?act=to_model&filename=' . $temp . '">' . $img2 . '</a>';
    $img3     = '<img class="img_delete" ' . 'alt=" " title="删除记录与文件"/>';
    $img_a3   = '<a href="index.php?act=delete_record&filename=' . $temp . '">' . $img3 . '</a>';
    $filesize = "文件大小:" . getsize(filesize("processed/" . $temp));
    //echo '<div class="processed">' . $key . "\t" . $temp . "\t" . $img_a2 . "\t" . $img_a . "\t" . $img_a3 . '</div>';
    //$span = '<span>' . $img_a3 . '</span>';
    //echo '<div class="processed">' . $key . "\t" . $temp . "\t" . $img_a2 . "\t" . $img_a . $span . '</div>';
    echo '<div class="processed" onclick="viewpdf2(this)">' . $temp . "\t" . $img_a2 . "\t" . $img_a . "\t" . $img_a3 . '<p>' . $key . "\t" . $filesize . '</p>' . '</div>';
}
