<?php
$dir = opendir("model");
while (($file_name = readdir($dir)) != false) {
    if ($file_name != "." && $file_name != "..") {
        $img    = '<img class="img_print" ' . 'alt=" " title="打印模板"/>';
        $img_a  = '<a href="index.php?act=print&filename=' . $file_name . '">' . $img . '</a>';
        $img2   = '<img class="img_delete" ' . 'alt=" " title="删除模板"/>';
        $img_a2 = '<a href="index.php?act=delete_model&filename=' . $file_name . '">' . $img2 . '</a>';
        $temp   = "上传日期:" . date("Y/m/d h:i:s", filemtime("model/" . $file_name)) . " 文件大小: " . getsize(filesize("model/" . $file_name));
        //echo '<div class="model">' . $file_name . "\t" . $img_a . "\t" . $img_a2 . '<p>&nbsp</p>' . $temp . '</div>';
        echo '<div class="model" onclick="viewpdf(this)">' . $file_name . "\t" . $img_a . "\t" . $img_a2 . '<p>' . $temp . '</p>' . '</div>';
    }
}
