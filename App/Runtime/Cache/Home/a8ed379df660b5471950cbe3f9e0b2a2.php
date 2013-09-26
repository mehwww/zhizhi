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
    <div class="container well msg">
      <div class="row">
        <div class="span12">
          <textarea rows="4" id="textarea" class="input-xlarge" style="resize: none; ">
          </textarea>
        </div>
        <div class="span3">
          <button class="btn btn-primary">
            发布
          </button>
        </div>
      </div>
    </div>
    <div class="container well">
      <div class="row">
        <div class="span12">
          <a class="btn" href="<?php echo U('logout','','','',true);?>">登出</a>
        </div>
      </div>
    </div>
  </body>
  <script type="text/javascript">

    
    $('.msg button').click(function(){
        //		alert('asdfsdafsda');
        $.post($URL['send_msg'], {
            msg: $('.msg textarea').text()
        },function(){
			alert('sasssss');
		});
        
    });
  </script>
</html>