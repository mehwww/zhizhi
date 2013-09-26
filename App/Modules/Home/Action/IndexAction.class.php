<?php

class IndexAction extends Action{
	public function index() {
		// import('@.Lib.COM.ZhiZhi.SNS.Oauth');
		// import( 'ORG.ThinkSDK.ThinkOauth' );
		// $sns = Oauth::getInstance( 'sina' );
		$this->display();
	}
	public function login() {
		import( 'ORG.ThinkSDK.ThinkOauth' );
		$sns = ThinkOauth::getInstance( 'sina' );
		redirect( $sns->getRequestCodeURL() );
	}
	public function callback( $code ) {
		$this->display();
		import( 'ORG.ThinkSDK.ThinkOauth' );
		$sns = ThinkOauth::getInstance( 'sina' );

		$token = $sns->getAccessToken( $code );

		if ( is_array( $token ) ) {
			dump( $token );
		}

	}
}
