<?php
// +----------------------------------------------------------------------
// | Author: mwh<136284028@qq.com> 
// +----------------------------------------------------------------------
// | OSSUpload.class.php 2013-03-05
// +----------------------------------------------------------------------
class OSSAvatar extends OSSClass {
	protected $file;
	protected $image;
	protected $check = array (
			'size' => 2097152, //2M
			'type' => array (
					IMG_JPG,
					IMG_GIF,
					IMG_PNG 
			) 
	);
	public function uploadAvatar($file) {
		$this->file = $file;
		$this->image = getimagesize ( $this->file ['tmp_name'] );
		
		if (! ($this->image && in_array ( $this->image [2], $this->check ['type'] ))) {
			throw new IOException ( IOException::INPUT_ERROR, '请上传正确的图片类型' );
		}
		if ($this->file ['size'] > $this->check ['size']) {
			throw new IOException ( IOException::INPUT_ERROR, '图片大小不符' );
		}
		return $this->uploadFile ( $this->file );
	}
}