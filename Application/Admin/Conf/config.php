<?php
return array(
	//'配置项'=>'配置值'
//    'LAYOUT_ON'=>true,
//    'LAYOUT_NAME'=>'layout/layout',
    'SHOW_PAGE_TRACE' =>true,
    'TOKEN_ON' => true, // 是否开启令牌验证 默认关闭
    'TOKEN_NAME' => 'token', // 令牌验证的表单隐藏字段名称，默认为__hash__
    'TOKEN_TYPE' => 'md5', //令牌哈希验证规则 默认为MD5
    'TOKEN_RESET' => true, //令牌验证出错后是否重置令牌 默认为true
);