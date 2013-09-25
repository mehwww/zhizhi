<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>吱吱</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Le styles -->
    <script type="text/javascript">

      
      
      
      var $CONFIG = {};
      $CONFIG['uid'] = "<?php echo $_SESSION['uid']?>";
      var $URL = {};
      $URL['chk_email'] = "<?php echo U('isEmailUnqiue','','','',true) ?>";
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
    <div class="container">
      <h1>Fuuuuuuuuuuuuuuuck you !</h1>
    </div>
    <div class="container well" id="sendmsg">
      <form class="form-horizontal well" action="<?php echo U('Msg/addMsg','','','',true);?>" method="post">
        <fieldset>
          <div class="control-group">
            <label class="control-label">
              发布新信息
            </label>
            <div class="controls">
              <textarea name="msg" class="input-xlarge" rows="3" style="resize: none;">
              </textarea>
              <input id="uid" name="uid" type="hidden" value="<?php echo $_SESSION['uid'];?>">
            </div>
          </div>
          <div class="control-group">
            <div class="controls">
              <button class="btn btn-primary">
                发布
              </button>
            </div>
          </div>
        </fieldset>
      </form>
    </div>
    <div class="container well">
      <div class="row">
        <div class="span3">
          <a class="btn" href="<?php echo U('User/logout','','','',true);;?>">登出</a>
        </div>
        <div class="span3">
          $_GET:
          <br>
          uid:<?php echo ($data["uid"]); ?>
        </div>
      </div>
    </div>
  </body>
  <script type="text/javascript">
    $(function(){
        $('#sendmsg form').ajaxForm();
    })
  </script>
</html>