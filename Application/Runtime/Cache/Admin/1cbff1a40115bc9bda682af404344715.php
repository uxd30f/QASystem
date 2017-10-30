<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>后台管理-
        用户管理
    </title>
    <meta name="description" content="这是一个 index 页面">
    <meta name="keywords" content="index">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="renderer" content="webkit">
    <meta name="apple-mobile-web-app-title" content="Amaze UI"/>
    <script src="/QASystem/Public/Admin/assets/js/echarts.min.js"></script>
    <link rel="stylesheet" href="/QASystem/Public/Admin/assets/css/amazeui.min.css"/>
    <link rel="stylesheet" href="/QASystem/Public/Admin/assets/css/amazeui.datatables.min.css"/>
    <link rel="stylesheet" href="/QASystem/Public/Admin/assets/css/app.css">
    <script src="/QASystem/Public/Admin/assets/js/jquery.min.js"></script>
</head>
<body data-type="index">
<script src="/QASystem/Public/Admin/assets/js/theme.js"></script>
<div class="am-g tpl-g">
    <!-- 头部 -->
    <header>
        <!-- logo -->
        <div class="am-fl tpl-header-logo">
            <a href="javascript:;"><img src="/QASystem/Public/Admin/assets/img/logo.png" alt=""></a>
        </div>
        <!-- 右侧内容 -->
        <div class="tpl-header-fluid">
            <!-- 侧边切换 -->
            <div class="am-fl tpl-header-switch-button am-icon-list">
                    <span>

                </span>
            </div>
            <!-- 其它功能-->
            <div class="am-fr tpl-header-navbar">
                <ul>
                    <!-- 欢迎语 -->
                    <li class="am-text-sm tpl-header-navbar-welcome">
                        <a href="javascript:;">欢迎你, <span><?php echo (session('Admin')); ?></span></a>
                    </li>

                    <!-- 退出 -->
                    <li class="am-text-sm">
                        <a href="<?php echo U('Index/Exits');?>">
                            <span class="am-icon-sign-out"></span> 退出
                        </a>
                    </li>
                </ul>
            </div>
        </div>

    </header>
    <!-- 侧边导航栏 -->
    <div class="left-sidebar">
        <!-- 用户信息 -->
        <div class="tpl-sidebar-user-panel">
            <div class="tpl-user-panel-slide-toggleable">
                <div class="tpl-user-panel-profile-picture">
                    <img src="/QASystem/Public/Admin/assets/img/user04.png" alt="">
                </div>
                <span class="user-panel-logged-in-text">
              <i class="am-icon-circle-o am-text-success tpl-user-panel-status-icon"></i>
              <?php echo (session('Admin')); ?>
          </span>
            </div>
        </div>

        <!-- 菜单 -->
        <ul class="sidebar-nav">
            <li class="sidebar-nav-link">
                <a href="<?php echo U('Index/index');?>" class="">
                    <i class="am-icon-home sidebar-nav-link-logo"></i> 控制台
                </a>
            </li>
            <li class="sidebar-nav-link">
                <a href="<?php echo U('User/index');?>" class="active">
                    <i class="am-icon-table sidebar-nav-link-logo"></i> 用户管理
                </a>
            </li>
            <li class="sidebar-nav-link">
                <a href="calendar.html">
                    <i class="am-icon-calendar sidebar-nav-link-logo"></i> 日历
                </a>
            </li>
            <li class="sidebar-nav-link">
                <a href="form.html">
                    <i class="am-icon-wpforms sidebar-nav-link-logo"></i> 表单

                </a>
            </li>
            <li class="sidebar-nav-link">
                <a href="chart.html">
                    <i class="am-icon-bar-chart sidebar-nav-link-logo"></i> 图表

                </a>
            </li>
            <li class="sidebar-nav-link">
                <a href="javascript:;" class="sidebar-nav-sub-title">
                    <i class="am-icon-table sidebar-nav-link-logo"></i> 数据列表
                    <span class="am-icon-chevron-down am-fr am-margin-right-sm sidebar-nav-sub-ico"></span>
                </a>
                <ul class="sidebar-nav sidebar-nav-sub">
                    <li class="sidebar-nav-link">
                        <a href="table-list.html">
                            <span class="am-icon-angle-right sidebar-nav-link-logo"></span> 文字列表
                        </a>
                    </li>

                    <li class="sidebar-nav-link">
                        <a href="table-list-img.html">
                            <span class="am-icon-angle-right sidebar-nav-link-logo"></span> 图文列表
                        </a>
                    </li>
                </ul>
            </li>
            <li class="sidebar-nav-link">
                <a href="sign-up.html">
                    <i class="am-icon-clone sidebar-nav-link-logo"></i> 注册
                    <span class="am-badge am-badge-secondary sidebar-nav-link-logo-ico am-round am-fr am-margin-right-sm">6</span>
                </a>
            </li>
            <li class="sidebar-nav-link">
                <a href="login.html">
                    <i class="am-icon-key sidebar-nav-link-logo"></i> 登录
                </a>
            </li>
            <li class="sidebar-nav-link">
                <a href="404.html">
                    <i class="am-icon-tv sidebar-nav-link-logo"></i> 404错误
                </a>
            </li>

        </ul>
    </div>


    <!-- 内容区域 -->
    <div class="tpl-content-wrapper">

        <div class="container-fluid am-cf">

            
    <div class="am-u-sm-12 am-u-md-12 am-u-lg-12 widget-margin-bottom-lg">

        <div class="widget am-cf widget-body-lg">

            <div class="widget-body  am-fr">
                <div class="am-scrollable-horizontal ">
                    <table width="100%" class="am-table am-table-compact am-text-nowrap tpl-table-black "
                           id="">
                        <thead>
                        <tr>
                            <th width="100">用户编号</th>
                            <th width="100">用户名</th>
                            <th width="100">昵称</th>
                            <th width="150">邮箱</th>
                            <th width="150">电话</th>
                            <th width="100">经验值</th>
                            <th width="100">提问次数</th>
                            <th width="100">回答次数</th>
                            <th width="100">发表次数</th>
                            <th width="100">状态</th>
                            <th width="180">注册时间</th>
                            <th>操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?><tr>
                                <td><?php echo ($item["id"]); ?></td>
                                <td><?php echo ($item["account"]); ?></td>
                                <td><?php echo ($item["nikename"]); ?></td>
                                <td><?php echo ($item["useremail"]); ?></td>
                                <td><?php echo ($item["userphone"]); ?></td>
                                <td><?php echo ($item["experience"]); ?></td>
                                <td><?php echo (count($item["Question"])); ?></td>
                                <td><?php echo (count($item["Answer"])); ?></td>
                                <td><?php echo ($item["id"]); ?></td>
                                <td>
                                    <?php if($item["status"] == 0): ?><span style="color: grey;">未激活</span>
                                        <?php elseif($item["status"] == 1): ?>
                                        <span style="color: green;">正常</span>
                                        <?php else: ?>
                                        <span style="color: #FF0000;">封停</span><?php endif; ?>
                                </td>
                                <td><?php echo ($item["registertime"]); ?></td>
                                <td>
                                    <div class="tpl-table-black-operation">
                                        <a href="javascript:;">
                                            <i class="am-icon-unlock"></i> 解封
                                        </a>
                                        <a href="javascript:;" class="tpl-table-black-operation-del">
                                            <i class="am-icon-lock"></i> 封停
                                        </a>
                                    </div>
                                </td>
                            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                        <!-- more data -->
                        </tbody>
                    </table>
                    <?php echo ($page); ?>
                </div>
            </div>
        </div>

    </div>



        </div>


    </div>
</div>
</div>
<script src="/QASystem/Public/Admin/assets/js/amazeui.min.js"></script>
<script src="/QASystem/Public/Admin/assets/js/amazeui.datatables.min.js"></script>
<script src="/QASystem/Public/Admin/assets/js/dataTables.responsive.min.js"></script>
<script src="/QASystem/Public/Admin/assets/js/app.js"></script>
<script>
    $(function () {


        $('.sidebar-nav-link a').click(function () {
            $('.sidebar-nav-link a').removeClass('active');
            $(this).addClass('active');
        });
    })
</script>
</body>

</html>