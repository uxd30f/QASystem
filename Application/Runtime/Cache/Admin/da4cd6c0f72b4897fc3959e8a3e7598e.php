<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>后台管理-
        控制台
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
                <a href="<?php echo U('Index/index');?>" class="active">
                    <i class="am-icon-home sidebar-nav-link-logo"></i> 控制台
                </a>
            </li>
            <li class="sidebar-nav-link">
                <a href="<?php echo U('User/index');?>" class="">
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

            
    <div class="am-u-sm-12 am-u-md-12 am-u-lg-4">
        <div class="widget am-cf">
            <div class="widget-head am-cf">
                <div class="widget-title am-fl">月度财务收支计划</div>
                <div class="widget-function am-fr">
                    <a href="javascript:;" class="am-icon-cog"></a>
                </div>
            </div>
            <div class="widget-body am-fr">
                <div class="am-fl">
                    <div class="widget-fluctuation-period-text">
                        ￥61746.45
                        <button class="widget-fluctuation-tpl-btn">
                            <i class="am-icon-calendar"></i>
                            更多月份
                        </button>
                    </div>
                </div>
                <div class="am-fr am-cf">
                    <div class="widget-fluctuation-description-amount text-success" am-cf>
                        +￥30420.56

                    </div>
                    <div class="widget-fluctuation-description-text am-text-right">
                        8月份收入
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="am-u-sm-12 am-u-md-6 am-u-lg-4">
        <div class="widget widget-primary am-cf">
            <div class="widget-statistic-header">
                本季度利润
            </div>
            <div class="widget-statistic-body">
                <div class="widget-statistic-value">
                    ￥27,294
                </div>
                <div class="widget-statistic-description">
                    本季度比去年多收入 <strong>2593元</strong> 人民币
                </div>
                <span class="widget-statistic-icon am-icon-credit-card-alt"></span>
            </div>
        </div>
    </div>
    <div class="am-u-sm-12 am-u-md-6 am-u-lg-4">
        <div class="widget widget-purple am-cf">
            <div class="widget-statistic-header">
                本季度利润
            </div>
            <div class="widget-statistic-body">
                <div class="widget-statistic-value">
                    ￥27,294
                </div>
                <div class="widget-statistic-description">
                    本季度比去年多收入 <strong>2593元</strong> 人民币
                </div>
                <span class="widget-statistic-icon am-icon-support"></span>
            </div>
        </div>
    </div>
    <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
        <div class="widget am-cf">
            <div class="widget-head am-cf">
                <div class="widget-title am-fl">月度财务收支计划</div>
                <div class="widget-function am-fr">
                    <a href="javascript:;" class="am-icon-cog"></a>
                </div>
            </div>
            <div class="widget-body am-fr">

            </div>
        </div>

    </div>
    <div class="am-u-sm-12 am-u-md-12 am-u-lg-8">
        <div class="widget am-cf">
            <div class="widget-head am-cf">
                <div class="widget-title am-fl">月度财务收支计划</div>
                <div class="widget-function am-fr">
                    <a href="javascript:;" class="am-icon-cog"></a>
                </div>
            </div>
            <div class="widget-body am-fr">
                <div class="am-fl">
                    <div class="widget-fluctuation-period-text">
                        ￥61746.45
                        <button class="widget-fluctuation-tpl-btn">
                            <i class="am-icon-calendar"></i>
                            更多月份
                        </button>
                    </div>
                </div>
                <div class="am-fr am-cf">
                    <div class="widget-fluctuation-description-amount text-success" am-cf>
                        +￥30420.56

                    </div>
                    <div class="widget-fluctuation-description-text am-text-right">
                        8月份收入
                    </div>
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