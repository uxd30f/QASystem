<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>后台登录</title>
    <meta name="keywords" content="index">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="renderer" content="webkit">
    <link rel="stylesheet" href="/QASystem/Public/Admin/assets/css/amazeui.min.css"/>
    <link rel="stylesheet" href="/QASystem/Public/Admin/assets/css/app.css">
    <link rel="stylesheet" href="/QASystem/Public/layer/theme/default/layer.css">
    <script src="/QASystem/Public/Admin/assets/js/jquery.min.js"></script>
    <script src="/QASystem/Public/layer/layer.js"></script>
</head>
<body data-type="login">
<script src="/QASystem/Public/Admin/assets/js/theme.js"></script>
<div class="am-g tpl-g">
    <div class="tpl-login">
        <div class="tpl-login-content">
            <form class="am-form tpl-form-line-form">
                <div class="am-form-group">
                    <input type="text" class="tpl-form-input" id="UserName" name="UserName" placeholder="请输入账号"
                           value="">
                </div>
                <div class="am-form-group">
                    <input type="password" class="tpl-form-input" id="Password" name="Password" placeholder="请输入密码"
                           value="">
                </div>
                <div class="am-form-group tpl-login-remember-me">
                    <input id="remember-me" type="checkbox">
                    <label for="remember-me">
                        记住密码
                    </label>
                </div>
                <div class="am-form-group">
                    <button type="button"
                            class="am-btn am-btn-primary  am-btn-block tpl-btn-bg-color-success  tpl-login-btn">提交
                    </button>
                </div>

            </form>
        </div>
    </div>
</div>
<script>
    $(function () {
        $(document).on('click', '.am-btn-primary', function () {
            var UserName = $.trim($('#UserName').val());
            var Password = $.trim($('#Password').val());
            if (UserName.length == 0 || Password.length == 0) {
                layer.alert('用户名或密码不能为空', {
                    icon: 0
                });
            } else {
                $.ajax({
                    url: '<?php echo U("Index/CheckLogin");?>',
                    type: 'POST',
                    data: {
                        account: UserName,
                        password: Password
                    },
                    dataType: 'json',
                    success: function (res) {
                        if (res.status == 0) {
                            window.location.href = res.url;
                        } else {
                            layer.alert(res.msg, {
                                icon: 2
                            });
                        }
                    }, error: function () {
                        layer.alert('服务器错误,请稍后重试', {
                            icon: 0
                        });
                    }
                });
            }
        });
    });
</script>
</body>

</html>