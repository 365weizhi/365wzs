<?php
App::import('Vendor', 'OAuthApi');

/**
 * Oauth Controller
 * By Denglu
 */
class OauthController extends AppController {
    public $uses = array('User', 'Profile', 'Registration','Content');
	public $autoRender = false;
	
    public function index(){
    	//echo '<a rel="nofollow" title="用QQ账号登录" target="_blank" href="/transfer/qzone?appid=1&amp;redirect_uri=http%3A%2F%2Fopen.denglu.cc%2Flogin%3Freturn%3Dhttp%253A%252F%252Fopen.denglu.cc%252F" class="denglu_icon2 denglu_icon2_qzone_second">QQ</a>';
    	//echo "<script type='text/javascript' charset='utf-8' src='http://open.denglu.cc/connect/commentcode?appid=87834denx58Js58SfV9gxM16Vx13VA&mini=true&height=500'></script>";
    	echo "<a href='http://open.denglu.cc/transfer/qzone?appid=87834denx58Js58SfV9gxM16Vx13VA'>QQ</a>";
    }
}
