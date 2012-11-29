<?php
App::import('Vendor', 'TopConfig');

class TopApi {
	
	function __construct()
	{
        include "TopApi/TopSdk.php";
	}
    /**
    * Get Item by num_iid
    * @return object
    * @author whenjonny
    */
    function getItemByNumIid($num_iid, $cid){
	$c = new TopClient;
	$c->appkey = APPKEY;
	$c->secretKey = SECRETKEY;

	$req = new TaobaokeItemsGetRequest;
    	$req->setFields("num_iid,title,nick,pic_url,price,click_url,commission,commission_rate,commission_num,commission_volume,shop_click_url,seller_credit_score,item_location,volume");
	$req->setPid(PID);
	$req->setCid($cid);
	$req->setKeyword($num_iid);
	$resp = $c->execute($req);
	return $resp;
    }
    /**
     * Search
     * @param string $keyword  
     * @param integer $cid  category ID
     * @return String $resp XML String
     * @author whenjonny
     */
    function searchItem($keyword, $cid , $area){
    	// get Top Client Object
    	$c = new TopClient;
    	$c->appkey = APPKEY;
    	$c->secretKey = SECRETKEY;

    	$req = new TaobaokeItemsGetRequest;
    	$req->setFields("num_iid,title,nick,pic_url,price,click_url,commission,commission_rate,commission_num,commission_volume,shop_click_url,seller_credit_score,item_location,volume");
    	//("num_iid,title,click_url,pic_url,price,commission,commission_num,volume,nick,");
    	// Send taobao PID and it will return the url for money
    	$req->setPid(PID);
    	$req->setCid($cid);
    	$req->setKeyword($keyword);
//		$req->setSort("commissionVolume_desc");
    	$req->setSort("credit_desc");
    	$req->setGuarantee("true");
    	$req->setArea($area);
    	$req->setStartCommissionRate("500");
    	$req->setEndCommissionRate("5000");
    	$req->setMallItem("true");
    	$req->setPageNo(1);
    	$req->setPageSize(80);
    	$req->setOuterCode("abc");
    	// execute api and get XML results
    	$resp = $c->execute($req);
    	return $resp;
    }

    /**
     * Get detail info including pictures
     *
     * @param integer $item_id  
     * @return string $resp  Data With xml and pic_url
     */
    function getItemInfo($item_id){
        $c = new TopClient;
        $c->appkey = APPKEY;
        $c->secretKey = SECRETKEY;
        $req = new ItemGetRequest;
        //prop_imgs 选择颜色的时候出现的图
        //item_imgs->item_img->url 所有的大图
        //desc 好像很厉害的样子
        $req->setFields("prop_img.url,item_img.url,nick");
        //	$req->setFields("detail_url,num_iid,title,nick,type,cid,seller_cids,props,input_pids,input_str,desc,pic_url,num,valid_thru,list_time,delist_time,stuff_status,location,price,post_fee,express_fee,ems_fee,has_discount,freight_payer,has_invoice,has_warranty,has_showcase,modified,increment,approve_status,postage_id,product_id,auction_point,property_alias,item_img,prop_img,sku,video,outer_id,is_virtual");
        $req->setNumIid($item_id);
        $resp = $c->execute($req);


        return $resp;
    }

    /**
     * Get child category
     * @desc This function for admin to separate
     * @param $parentid parent category
     */
    function getCats($parentid){
        $c = new TopClient;
        $c->appkey = APPKEY;
        $c->secretKey = SECRETKEY;

        $req = new ItemcatsGetRequest;
        $req->setFields("cid,parent_cid,name,is_parent");
        $req->setParentCid($parentid);
        return $c->execute($req);
    }


    public function fetch($id) {
	$c = new TopClient;
	$c->appkey = APPKEY;//$taoke_setting['taobao_appkey'];
	$c->secretKey = SECRETKEY;//$taoke_setting['taobao_appsecret'];
	$req = new ItemGetRequest;
	$req->setFields("detail_url,title,nick,pic_url,price");
	$req->setNumIid($id);
	$resp = $c->execute($req);
	$res=(array)$resp;

	if(isset($res['code'])){
		return false;
	}
       //print_r($resp);exit;
	if (!isset($resp->item)) {
		return false;
	}

	$item = (array) $resp->item;
	$result = array();
	$result['item']['num_iid'] = $id;
	$result['item']['title'] = $item['title'];
	$result['item']['price'] = $item['price'];
	$result['item']['pic_url'] = $item['pic_url'];
	$result['img'][] = $item['pic_url'] . '_310x310.jpg';//210x1000.jpg';
	$result['img'][] = $item['pic_url'] . '_64x64.jpg';
	$result['item']['click_url'] = $item['detail_url'];

	$shop_click_url = '';
	$req = new TaobaokeItemsDetailGetRequest; //$tb_top->load_api('TaobaokeItemsDetailGetRequest');
	$req->setFields("click_url, shop_click_url, location, cid, nick");
	$req->setNumIids($id);
	$req->setPid(PID);
	$resp = $c->execute($req);

	if (isset($resp->taobaoke_item_details)) {
		$taoke = (array) $resp->taobaoke_item_details->taobaoke_item_detail;
		if ($taoke['click_url']) {
			$result['item']['click_url'] = $taoke['click_url'];
			$result['item']['item_location'] = $taoke['item']->location->state.$taoke['item']->location->city;
			$result['item']['shop_click_url'] = $taoke['shop_click_url'];
			$result['item']['cid'] = $taoke['item']->cid->__toString();
			$result['item']['content_id'] = $taoke['item']->cid->__toString();
			$result['item']['nick'] = $taoke['item']->nick->__toString();
		}
	}
//	$result['item']['resq'] = $taoke;
	return $result;
    }

    public function get_id($url) {
	$id = 0;
	$parse = parse_url($url);
	if (isset($parse['query'])) {
		parse_str($parse['query'], $params);
		if (isset($params['id'])) {
			$id = $params['id'];
		} elseif (isset($params['item_id'])) {
			$id = $params['item_id'];
		} elseif (isset($params['default_item_id'])) {
			$id = $params['default_item_id'];
		}
	}
	return $id;
    }
}
