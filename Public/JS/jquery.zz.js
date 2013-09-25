;
function p(data){
    console.log(data);
}
(function($){
    $.fn.extend({
        /**
         * 注册验证
         */
        'validation': function(){
            /**
             * Email验证
             */
            var $email = $(this).find('#email');
            $email.blur(function(){
                var $cgroup = $email.parent().parent();
                var $helpmsg = $email.next().next();
                if ($(this).val() == '') {
                    $cgroup.addClass('error');
                    $helpmsg.text("邮箱不能为空！");
                }
                else {
                    if (/^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/.test($.trim($(this).val())) == false) {
                        $cgroup.addClass('error');
                        $helpmsg.text("请输入正确的邮箱！");
                    }
                    else {
                        $.post($URL['chk_email'], {
                            email: $(this).val(),
                        }, function(json){
                            if (json['code'] !== '1000') {
                                $cgroup.addClass('error');
                                $helpmsg.text(json['data']['msg']);
                            }
                            else {
                                $cgroup.addClass('success');
                                $helpmsg.html('&nbsp');
                            }
                        });
                    }
                }
            });
            $email.focus(function(){
                var $cgroup = $email.parent().parent();
                var $helpmsg = $email.next().next();
                $cgroup.removeClass('success').removeClass('error');
                $helpmsg.html('&nbsp');
            });
            /**
             * 密码验证
             */
            var $pword = $(this).find('#password');
            $pword.blur(function(){
                var $cgroup = $pword.parent().parent();
                var $helpmsg = $pword.next().next();
                if ($(this).val() == '') {
                    $cgroup.addClass('error');
                    $helpmsg.text("密码不能为空！");
                }
                else {
                    if ($(this).val().length < 6 || $(this).val().length > 20) {
                        $cgroup.addClass('error');
                        $helpmsg.text("请输入6-20位的密码！");
                    }
                    else {
                        $cgroup.addClass('success');
                        $helpmsg.html('&nbsp');
                    }
                }
            });
            $pword.focus(function(){
                var $cgroup = $pword.parent().parent();
                var $helpmsg = $pword.next().next();
                $cgroup.removeClass('success').removeClass('error');
                $helpmsg.html('&nbsp');
            });
            return this;
        },
        /**
         * 关注按钮样式切换
         */
        'followBtnSwitch': function(status){
            switch (status) {
                case 0:
                case 'follow':
                    $('.js-follow-btn').removeClass('btn-primary').removeClass('btn-info').removeClass('btn-danger');
                    $('.js-follow-btn').addClass('btn-primary');
                    $('.js-follow-btn').find('.btn-text').css('display', 'none');
                    $('.js-follow-btn').find('.follow-text').css('display', 'block');
                    //                    console.log('fff0')
                    break;
                case 1:
                case 'following':
                    $('.js-follow-btn').removeClass('btn-primary').removeClass('btn-info').removeClass('btn-danger');
                    $('.js-follow-btn').addClass('btn-info');
                    $('.js-follow-btn').find('.btn-text').css('display', 'none');
                    $('.js-follow-btn').find('.following-text').css('display', 'block');
                    //                    console.log('fff1')
                    break;
                case 2:
                case 'unfollow':
                    $('.js-follow-btn').removeClass('btn-primary').removeClass('btn-info').removeClass('btn-danger');
                    $('.js-follow-btn').addClass('btn-danger');
                    $('.js-follow-btn').find('.btn-text').css('display', 'none');
                    $('.js-follow-btn').find('.unfollow-text').css('display', 'block');
                    //                    console.log('fff2')
                    break;
            }
        },
        /**
         * 关注按钮绑定
         */
        'followBtn': function(isFollowing){
            var p = isFollowing;
            if (p) {
                $(this).followBtnSwitch(1);
            }
            else {
                $(this).followBtnSwitch(0);
            }
            
            $(this).hover(function(){
                if (p) {
                    $(this).followBtnSwitch(2);
                }
            }, function(){
                if (p) {
                    $(this).followBtnSwitch(1);
                }
            })
            
            $(this).click(function(){
                if (p) {
                    $.post($URL['unfollow'], {
                        'uid': $CONFIG['uid'],
                        'oid': $CONFIG['oid'],
                    }, function(json){
                        p = false;
                        $(this).followBtnSwitch(0);
                    })
                }
                else {
                    $.post($URL['follow'], {
                        'uid': $CONFIG['uid'],
                        'oid': $CONFIG['oid'],
                    }, function(json){
                        p = true;
                        $(this).followBtnSwitch(1);
                    })
                }
            })
        }
    })
})(jQuery);



$(function(){
    $('#register form').ajaxForm({
        beforeSubmit: function(formData, jqForm){
            var $email = $('#register').find('#email');
            var $pword = $('#register').find('#password');
            if ($email.parent().parent().hasClass('error') || $pword.parent().parent().hasClass('error')) {
                return false;
            }
            else {
                return true;
            }
        }
    });
    
    $('#login form input').focus(function(){
        var $error = $('#error');
        var $cgroup = $error.parent().parent();
        $error.text("");
        $cgroup.css('display', 'none');
        
    });
    
    $('#login form').ajaxForm({
        beforeSubmit: function(formData, jqForm){
        
        },
        error: function(){
            var $error = $('#error');
            var $cgroup = $error.parent().parent();
            $error.text("网络错误，请稍后再试");
            $cgroup.css('display', '');
            //            $email = $('#login').find('#email');
            //            var $helpmsg = $email.next().next();
            //            var $cgroups = $('#login').find('.control-group');
            //            $cgroups.removeClass('success').addClass('error');
            //            $helpmsg.text("网络错误，请稍后再试");
        },
        success: function(json){
            if (json['code'] !== '1000') {
                var $error = $('#error');
                var $cgroup = $error.parent().parent();
                $error.text(json['data']['msg']);
                $cgroup.css('display', '');
            }
            else {
                window.location.href = json['data']['url'];
            }
            //			            var $error = $('#error');
            //            var $cgroup = $error.parent().parent();
            //			$error.text("网络错误，请稍后再试");
            //			$cgroup.css('display','');
            //p(data);
            //            var $cgroups = $('#login').find('.control-group');
            //            p($cgroups);
            //            $cgroups.removeClass('success').addClass('error');
            //            p(data);
            //            p(data['status']);
        }
    });
    
    
    
    
});
