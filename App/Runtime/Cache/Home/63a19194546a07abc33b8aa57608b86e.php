<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=">
    <title>oss测试</title>
    <script type="text/javascript" src="http://lib.sinaapp.com/js/jquery/2.0.2/jquery-2.0.2.min.js">
    </script>
    <script type="text/javascript" src="__PUBLIC__/JS/jquery.form.js"></script>
  </head>
  <body>
    <form id="upload" method="post" action="<?php echo U('Index/test4','','','',true);?>" enctype="multipart/form-data">
      <input name="oss" type="file" /><input type="submit" value="提交" />
    </form>
  </body>
  <script type="text/javascript">
    $(function(){
        $('#upload').ajaxForm();
    })
  </script>
</html>