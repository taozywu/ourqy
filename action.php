<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if ($_FILES["file"]["error"] > 0) {
        echo "文件上传错误";
    }
    if (strstr($_FILES["file"]["name"], ' ')) {
        echo "文件名包含空格";
    }
    if ($_POST["number"] <= 0) {
        echo "打印数目有误";
    }
    if (file_exists("upload/" . $_FILES["file"]["tmp_name"])) {
        echo "文件已存在";
    }
    move_uploaded_file($_FILES["file"]["tmp_name"], "upload/" . $_FILES["file"]["name"]);
    if ($_FILES["file"]["type"] == "application/pdf" ||
        $_FILES["file"]["type"] == "image/jpeg" ||
        $_FILES["file"]["type"] == "image/gif" ||
        $_FILES["file"]["type"] == "image/bmp" ||
        $_FILES["file"]["type"] == "image/png"
    ) {
        $path = "./upload/" . $_FILES["file"]["name"];
        printNormal($path, $_POST[number]);
        Header("Location:index.php");
    }
    if ($_FILES["file"]["type"] == "application/msword" |
        $_FILES["file"]["type"] == "application/vnd.ms-powerpoint"
    ) {
        //set_time_limit(20);
        //$path = $_FILES["file"]["name"];
        //printOffice($path);
        //$parameter = 'unoconv -f pdf ' . './upload/' . $path;
        $result = shell_exec("unoconv -f pdf upload/test.doc");
        echo $result;
        //exec("pwd", $result);
        //echo shell_exec('whoami');
        //echo $parameter;
        //system($parameter);
        //exec($parameter, $result, $status);
        //print_r($result);
        //echo $status;
        //$command = $parameter . " && rm " . "upload/" . $_FILES["file"]["name"] . " && lpr " . basename($_FILES["file"]["name"], ".doc") . ".pdf";
        //system($command);
        //Header("Location:index.php");
    }
}
if ($_GET['act'] == 'delete') {
    system("cancel {$_GET['jobid']}");
    Header("Location:index.php");
    //echo "<script type 'text/javascript'>location.href='index.php'</script>";
}
if ($_GET['act'] == 'print') {
    $command = "lpr " . "model/" . $_GET['filename'];
    echo $command;
    system($command);
    Header("Location:index.php");
}
if ($_GET['act'] == 'delete_model') {
    $command = "rm " . "model/" . $_GET['filename'];
    system($command);
    Header("Location:index.php");
}
if ($_GET['act'] == 'to_model') {
    $command = "mv " . "processed/" . $_GET['filename'] . " model";
    //echo $command;
    system($command);
    Header("Location:index.php");
}
if ($_GET['act'] == 'repeat') {
    $command = "lpr " . "processed/" . $_GET['filename'];
    system($command);
    Header("Location:index.php");
    //echo "<script type 'text/javascript'>location.href='index.php'</script>";
}
if ($_GET['act'] == 'delete_record') {
    $command = "rm " . "processed/" . $_GET['filename'];
    system($command);
    Header("Location:index.php");
}
