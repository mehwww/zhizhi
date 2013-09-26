<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>吱吱</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <script type="text/javascript">
      var $CONFIG = {};
      $CONFIG['uid'] = "<?php echo $_SESSION['uid'] ?>";
      $CONFIG['oid'] = "<?php echo $data['oid'] ?>";
      
      var $URL = {};
      $URL['chk_email'] = "<?php echo U('isEmailUnqiue','','','',true) ?>";
      $URL['send_msg'] = "<?php echo U('Msg/addMsg','','','',true) ?>";
    </script>
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/CSS/bootstrap.css" />
    <script type="text/javascript" src="http://lib.sinaapp.com/js/jquery/2.0.2/jquery-2.0.2.min.js">
    </script>
    <script type="text/javascript" src="http://lib.sinaapp.com/js/bootstrap/2.3.1/js/bootstrap.min.js">
    </script>
    <script type="text/javascript" src="__PUBLIC__/JS/jquery.form.js"></script><script type="text/javascript" src="__PUBLIC__/JS/jquery.zz.js"></script>
    <style type="text/css">
      body {
          padding-top: 60px;
          padding-bottom: 40px;
          padding-left: 20px;
      }
    </style>
  </head>
  <body>
    <div class="container logo">
  <h1>Fuuuuuuuuuuuuuuuck you !</h1>
  <img src = "http://zhizhi.oss.aliyuncs.com/126543885521621554.jpg"/>
</div>
<script type="text/javascript">
  $(function(){
      $('.logo').click(function(){
          window.location.href = "/3/"
      });
  })
</script>

    <form id="upload" method="post" action="<?php echo U('User/uploadAvatar','','','',true);?>" enctype="multipart/form-data">
      <input name="avatar" type="file" /><input type="submit" value="提交" />
    </form>
  </body>
  <script type="text/javascript">
    $(function(){
        $('#upload').ajaxForm();
    })
  </script>
</html>