<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>吱吱</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <script type="text/javascript">

      
      
      
      
      
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
    <div class="container">
      <h1>Fuuuuuuuuuuuuuuuck you !</h1>
    </div>
    <div class="container msg">
      <div class="row">
        <div class="span2">
          <div class="well">
            uid:<?php echo ($user["id"]); ?>
            <br>
          	email:<?php echo ($user["email"]); ?>
          </div>
        </div>
        <div class="span10">
          <?php if(is_array($msgs)): $i = 0; $__LIST__ = $msgs;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class ="well">
              <?php echo ($vo["msg"]); ?> [<?php echo ($vo["user_id"]); ?> <?php echo (date('Y-m-d H:i:s',$vo["time"])); ?>]
            </div><?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
      </div>
    </div>
  </body>
</html>