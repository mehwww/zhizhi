<?php
define( 'URL_CALLBACK', 'http://mwhwww.sinaapp.com/index/callback/' );

return array (

	'APP_AUTOLOAD_PATH' => implode( ',', array (
			'@.Lib.COM.ZhiZhi.SNS.Oauth',
			'@.Lib.COM.ZhiZhi.SNS.Client',
		) ),

	'OAUTH' =>array(
		'SINA' =>array(
			'APP_KEY'    => '3584608587',
			'APP_SECRET' => '0c144684b6702559984b0217699ef959',
			'CALLBACK'   => URL_CALLBACK,
		) 
	);


	'OAUTH_SINA' =>array(
	),
);
?>
