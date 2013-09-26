<?php
return array (
		//数据库设置
		'DB_TYPE'               => 'mysql',     // 数据库类型
		'DB_HOST'               => 'localhost', // 服务器地址
		'DB_NAME'               => 'zz',          // 数据库名
		'DB_USER'               => 'root',      // 用户名
		'DB_PWD'                => '19910523',          // 密码
		'DB_PORT'               => '3306',        // 端口
		'DB_PREFIX'             => 'zz_',    // 数据库表前缀
		
		//显示调试信息
		'SHOW_PAGE_TRACE'       =>true,
		
		//URL配置
		'URL_CASE_INSENSITIVE'  =>true,
		'URL_MODEL'             => 2,
		
		//分组设置
		'APP_GROUP_MODE'        =>  1,  // 分组模式 0 普通分组 1 独立分组
		'APP_GROUP_PATH'        =>  'Modules', // 分组目录 独立分组模式下面有效
		'APP_GROUP_LIST'		=> 'Home,Admin',
		'DEFAULT_GROUP' 		=> 'Home',
		
		//session设置
		'SESSION_TYPE'          => 'Db', // session hander类型 默认无需设置 除非扩展了session hander驱动
		'SESSION_EXPIRE'		=> 3600, // session 过期时间
		
		//cookie设置
		'COOKIE_EXPIRE'         => 3600*24,    // Coodie有效期
		
		//模板设置
		'TMPL_FILE_DEPR' 		=> '/',		//模板分隔符
		
		//URL伪静态
		'URL_HTML_SUFFIX'		=> '',
		
		
);
?>