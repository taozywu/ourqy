<!DOCTYPE html>
<html lang="zh-CN">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link id="favicon" href="img/logo.ico" rel="icon" type="image/x-icon" />
  <title>寝印</title>
  <link rel="stylesheet" href="include/style.css" type="text/css" media="screen"/>
  <script type="text/javascript" src="js/pdfobject.js"></script>
</head>
<body>
<script type="text/javascript">
  function viewpdf(id){
    var str=id.innerHTML;
    //alert(str);
    var url = "model/"+str.match("(.*?pdf)")[1];
        new PDFObject({ url: url }).embed("pdfview");
    x=document.getElementById("footer");
    x.style.display="none";
    x=document.getElementById("main_2");
    x.style.display="block";
    x=document.getElementById("main");
    x.style.display="none";
    x=document.getElementById("viewtitle");
    x.innerHTML=str.match("(.*?pdf)")[1]+"\t"+"(点击此返回)";
  }
  function viewpdf2(id){
    var str=id.innerHTML;
    //alert(str);
    var url = "processed/"+str.match("(.*?pdf)")[1];
        new PDFObject({ url: url }).embed("pdfview");
    x=document.getElementById("footer");
    x.style.display="none";
    x=document.getElementById("main_2");
    x.style.display="block";
    x=document.getElementById("main");
    x.style.display="none";
    x=document.getElementById("viewtitle");
    x.innerHTML=str.match("(.*?pdf)")[1]+"\t"+"(点击此返回)";
  }
  function hideview(){
    //alert("hello");
    x=document.getElementById("main_2");
    x.style.display="none";
    x=document.getElementById("main");
    x.style.display="block";
    x=document.getElementById("footer");
    x.style.display="block";
  }
</script>
<?php
require_once "function.php";
?>

<?php
include_once "include/header.html";
?>

<?php
require_once "action.php";
?>
<div id="main_index" position="relative">
<div id="main" position="absolute">
  <div id="left">
    <div id="upload_list">
      <div class="high_div">&nbsp;</div>
      <div class="high_div">&nbsp;</div>
      <div id="warn_title"><b>文档格式支持:pdf(推荐)<br />图片格式支持:jpg/png/bmp/gif</b></div>
      <div class="high_div">&nbsp;</div>
      <center>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
          <table id="table">
            <tr>
              <td width="15%">浏览:</td>
              <td width="85%"><input type="file" name="file" class="table_input" /></td>
            </tr>
            <tr>
              <td width="15%">份数:</td>
              <td width="85%"><input type="number" name="number" class="table_input"  value="1" /></td>
            </tr>
            <tr>
              <td colspan="2"><center>
                  <input type="image" src="img/begin_print.png" id="image"/>
                </center></td>
            </tr>
          </table>
        </form>
      </center>
      <div id="ad">

      </div>
    </div>
    <!--下一块-->
    <div id="model_list">
    <div class="high_div">&nbsp;</div>
      <?php
require_once "model.php";
?>
    </div>
  </div>
  <div id="right">
    <div id="queque_list">
    <div class="high_div">&nbsp;</div>
      <?php
require_once "queque_list.php";
?>
    </div>
    <!--下一块-->
    <div id="processed_list">
    <div class="high_div">&nbsp;</div>
      <?php
require_once "processed.php";
?>
    </div>
  </div>
</div>
  <div id="main_2" position="absolute">
    <div id="viewtitle" onclick="hideview()" title="点击返回">
    </div>
    <div id="pdfview">
    </div>
  </div>
</div>
<?php
include_once "include/footer.html";
?>
</body>
</html>