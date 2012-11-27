<?php
App::import('Vendor', 'TopConfig');

class TopApi{
	
	function __construct()
	{
        include "TopApi/TopSdk.php";
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
}