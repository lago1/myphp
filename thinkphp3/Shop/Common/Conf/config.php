<?php
return array(
	//'配置项'=>'配置值'
    //系统中允许访问的模块
    'MODULE_ALLOW_LIST' => array('Home','Admin'),
    //默认访问的模块
    'DEFAULT_MODEL' => 'Home',
    //设置URL不区分大小写
    'URL_CASE_INSENSITIVE' => true,
    //默认模板后缀文件名
    'TMPL_TEMPLATE_SUFFIX' => '.html',
    //模板中变量的左右分隔符
    'TMPL_L_DELIM' => '{',
    'TMPL_R_DELIM' => '}',
    /* 数据库设置 */
    'DB_TYPE'               =>  'mysql',     // 数据库类型
    'DB_HOST'               =>  '127.0.0.1', // 服务器地址
    'DB_NAME'               =>  'shop',          // 数据库名
    'DB_USER'               =>  'root',      // 用户名
    'DB_PWD'                =>  'root',          // 密码
    'DB_PORT'               =>  '3306',        // 端口
    'DB_PREFIX'             =>  'sh_',    // 数据库表前缀
);