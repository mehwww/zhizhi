<?php
// +----------------------------------------------------------------------
// | Author: mwh<136284028@qq.com> 
// +----------------------------------------------------------------------
// | OSSUpload.class.php 2013-03-05
// +----------------------------------------------------------------------



require_once 'SDK/aliyun.php';

use \Aliyun\OSS\OSSClient;
class OSSClass {
	protected $client;
	protected $_config = array (
			'ACCESS_KEY_ID' => '',
			'ACCESS_KEY_SECRET' => '',
			'BUCKET_NAME' => '' 
	);
	public static function factory() {
		return new static ();
	}
	protected function __construct() {
		$this->_config = C ( 'OSS_CONFIG' );
		$this->client = OSSClient::factory ( array (
				'AccessKeyId' => $this->_config ['ACCESS_KEY_ID'],
				'AccessKeySecret' => $this->_config ['ACCESS_KEY_SECRET'] 
		) );
	}
	/**
	 * OSS上传文件
	 * @param unknown $file 要上传的文件
	 * @param string $filename 设置上传文件名（包含路径）
	 * @return string|boolean
	 */
	public function uploadFile($file, $key = '') {
		if ($file) {
			$key = $key ? $key : $file ['name'];
			//$key = 'avatar/' . md5 ( time () ) . image_type_to_extension ( $avatar [2] );
			$this->client->putObject ( array (
					'Bucket' => $this->_config ['BUCKET_NAME'],
					'Key' => $key,
					'Content' => fopen ( $file ['tmp_name'], 'r' ),
					'ContentLength' => filesize ( $file ['tmp_name'] ) 
			) );
			return 'http://' . $this->_config ['BUCKET_NAME'] . '.oss.aliyuncs.com/' . $key;
		} else {
			return false;
		}
	}
}