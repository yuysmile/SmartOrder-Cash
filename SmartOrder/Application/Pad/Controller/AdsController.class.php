<?php
namespace Pad\Controller;
use Think\Controller;
/**
 * 广告控制器
 */
Class AdsController extends Controller{
	//读取后台数据库中的广告内容
	Public function GetAds(){
		
		$ads = M('ads');
		$ret = $ads->select();
		// dump($ret);die();
		$this->ajaxReturn($ret,"jsonp");
	}
}


?>