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
      $URL['chk_email'] = "<?php echo U('User/isEmailUnqiue','','','',true) ?>";
      $URL['get_relation'] = "<?php echo U('User/getRelation','','','',true) ?>";
      $URL['follow'] = "<?php echo U('User/follow','','','',true) ?>";
      $URL['unfollow'] = "<?php echo U('User/unfollow','','','',true) ?>";
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
      
      .follow-btn .btn-text {
          display: none;
      }
      
      .follow-btn {
          width: 100px;
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



    <div class="container msg">
      <div class="row">
        <div class="span2">
          <div class="well">
            uid:<?php echo ($data["obj"]["id"]); ?>
            <br>
            email:<?php echo ($data["obj"]["email"]); ?>
            <br>
            nickname:<?php echo ($data["obj"]["nickname"]); ?>
            <br>
            <?php if(!empty($data["uid"])): ?><button class = "js-follow-btn follow-btn btn">
                <span class="btn-text follow-text">+关注</span>
                <span class="btn-text following-text">正在关注</span>
                <span class="btn-text unfollow-text">取消关注</span>
              </button><?php endif; ?>
          </div>
        </div>
        <div class="span10">
          <?php if(empty($data["msgs"])): ?><div class="well">
              他还没有发过信息
            </div>
            <?php else: ?>
            <?php if(is_array($data["msgs"])): $i = 0; $__LIST__ = $data["msgs"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class ="well">
                <?php echo ($vo["msg"]); ?> [<?php echo ($vo["user_id"]); ?> <?php echo (date('Y-m-d H:i:s',$vo["time"])); ?>]
              </div><?php endforeach; endif; else: echo "" ;endif; endif; ?>
        </div>
      </div>
    </div>
  </body>
  <script type="text/javascript">
    $(function(){
        $.post($URL['get_relation'], {
            'uid': $CONFIG['uid'],
            'oid': $CONFIG['oid'],
        }, function(json){
            $('.js-follow-btn').followBtn(json.data.relation.following);
        }, 'json');
        
    })
  </script>
</html>