<?php
/*
$dir = opendir("upload");
while (($file_name = readdir($dir)) != false) {
if ($file_name != "." && $file_name != "..") {
echo '<div class="queque">' . $file_name . '</div>';
}
}
 */
;
exec("lpq", $lpq, $right);
if (!right) {
    echo "failed!";
}
//echo '<table border="2" cellspacing="0">';
foreach ($lpq as $key => $value) {
    if ($key == 1) {
        //echo "<ul>序列  文件名  大小  操作</li>";
        //echo "<li class="queque">拥有者</li>";
    }
    if ($key > 1) {
        $arr   = array();
        $token = strtok($value, " ");
        while ($token !== false) {
            if (!empty($token)) {
                $arr[] = $token;
            }
            $token = strtok(" ");
        }
        $img   = '<img class="img_delete" ' . 'alt=" " title="删除"/>';
        $img_a = '<a href="index.php?act=delete&jobid=' . $arr[2] . '">' . $img . '</a>';
        if ($arr[0] === "active") {
            echo '<div class="queque">' . "正在打印:" . "\t" . $arr[3] . "\t" . getsize($arr[4]) . "\t" . $img_a . "</div>";
        } else {
            echo '<div class="queque">' . "等待:\t" . $arr[0] . "\t" . $arr[3] . "\t" . getsize($arr[4]) . "\t" . $img_a . "</div>";
        }
    }
}
//echo '</table>';
