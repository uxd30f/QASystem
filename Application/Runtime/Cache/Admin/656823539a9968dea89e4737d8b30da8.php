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
    <script src="/tp/Public/Admin/assets/js/echarts.min.js"></script>
    <link rel="stylesheet" href="/tp/Public/Admin/assets/css/amazeui.min.css"/>
    <link rel="stylesheet" href="/tp/Public/Admin/assets/css/amazeui.datatables.min.css"/>
    <link rel="stylesheet" href="/tp/Public/Admin/assets/css/app.css">
    <script src="/tp/Public/Admin/assets/js/jquery.min.js"></script>
</head>
<body data-type="index">
<script src="/tp/Public/Admin/assets/js/theme.js"></script>
<div class="am-g tpl-g">
    <!-- 头部 -->
    <header>
        <!-- logo -->
        <div class="am-fl tpl-header-logo">
            <a href="javascript:;"><img src="/tp/Public/Admin/assets/img/logo.png" alt=""></a>
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
                        <a href="javascript:;">欢迎你, <span>Amaze UI</span> </a>
                    </li>

                    <!-- 退出 -->
                    <li class="am-text-sm">
                        <a href="javascript:;">
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
                    <img src="/tp/Public/Admin/assets/img/user04.png" alt="">
                </div>
                <span class="user-panel-logged-in-text">
              <i class="am-icon-circle-o am-text-success tpl-user-panel-status-icon"></i>
              禁言小张
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
                <a href="<?php echo U('UserInfo/index');?>" class="active">
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
                       id="example-r">
                    <thead>
                    <tr>
                        <th>文章标题</th>
                        <th>作者</th>
                        <th>时间</th>
                        <th>操作</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="gradeX">
                        <td>新加坡大数据初创公司 Latize 获 150 万美元风险融资</td>
                        <td>张鹏飞</td>
                        <td>2016-09-26</td>
                        <td>
                            <div class="tpl-table-black-operation">
                                <a href="javascript:;">
                                    <i class="am-icon-pencil"></i> 编辑
                                </a>
                                <a href="javascript:;" class="tpl-table-black-operation-del">
                                    <i class="am-icon-trash"></i> 删除
                                </a>
                            </div>
                        </td>
                    </tr>
                    <tr class="even gradeC">
                        <td>自拍的“政治角色”：观众背对希拉里自拍合影表示“支持”</td>
                        <td>天纵之人</td>
                        <td>2016-09-26</td>
                        <td>
                            <div class="tpl-table-black-operation">
                                <a href="javascript:;">
                                    <i class="am-icon-pencil"></i> 编辑
                                </a>
                                <a href="javascript:;" class="tpl-table-black-operation-del">
                                    <i class="am-icon-trash"></i> 删除
                                </a>
                            </div>
                        </td>
                    </tr>
                    <tr class="gradeX">
                        <td>关于创新管理，我想和你当面聊聊。</td>
                        <td>王宽师</td>
                        <td>2016-09-26</td>
                        <td>
                            <div class="tpl-table-black-operation">
                                <a href="javascript:;">
                                    <i class="am-icon-pencil"></i> 编辑
                                </a>
                                <a href="javascript:;" class="tpl-table-black-operation-del">
                                    <i class="am-icon-trash"></i> 删除
                                </a>
                            </div>
                        </td>
                    </tr>
                    <tr class="even gradeC">
                        <td>究竟是趋势带动投资，还是投资引领趋势？</td>
                        <td>着迷</td>
                        <td>2016-09-26</td>
                        <td>
                            <div class="tpl-table-black-operation">
                                <a href="javascript:;">
                                    <i class="am-icon-pencil"></i> 编辑
                                </a>
                                <a href="javascript:;" class="tpl-table-black-operation-del">
                                    <i class="am-icon-trash"></i> 删除
                                </a>
                            </div>
                        </td>
                    </tr>
                    <tr class="even gradeC">
                        <td>Docker领域再添一员，网易云发布“蜂巢”，加入云计算之争</td>
                        <td>醉里挑灯看键</td>
                        <td>2016-09-26</td>
                        <td>
                            <div class="tpl-table-black-operation">
                                <a href="javascript:;">
                                    <i class="am-icon-pencil"></i> 编辑
                                </a>
                                <a href="javascript:;" class="tpl-table-black-operation-del">
                                    <i class="am-icon-trash"></i> 删除
                                </a>
                            </div>
                        </td>
                    </tr>
                    <!-- more data -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>



        </div>


    </div>
</div>
</div>
<script src="/tp/Public/Admin/assets/js/amazeui.min.js"></script>
<script src="/tp/Public/Admin/assets/js/amazeui.datatables.min.js"></script>
<script src="/tp/Public/Admin/assets/js/dataTables.responsive.min.js"></script>
<script src="/tp/Public/Admin/assets/js/app.js"></script>
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