<?php 
APP::import('Vendor', 'ImageGD/Resize');
class Item extends Model{
	public $name = "Item";
	
	
	/**
	 * 图片大小处理先放着，后续再做
	 * @param unknown_type $image_source_url
	 * @param unknown_type $image_new_name
	 */
	public function saveImage($image_source_url,$image_new_name){
		// 判断是否存在images目录并创建，能写到try-catch里更好
		if(!is_dir(APP.'images')){
			mkdir(APP.'images',0777);
		}
		
        if(preg_match("/jpg/i",$image_source_url)){
            $src_im = imagecreatefromjpeg($image_source_url);
            if(!$src_im){
                throw new Exception("载入jpeg图片错误！");
            }
            return resizeImage($src_im,230,230,'images/',$image_new_name,'.jpg');
        }else if(preg_match("/png/i",$image_source_url)){
            $src_im = imagecreatefrompng($image_source_url);
            if(!$src_im){
                throw new Exception("载入png图片错误！");
            }
            return resizeImage($src_im,230,230,'images/',$image_new_name,'.png');
        }else if(preg_match("/gif/i",$image_source_url)){
            $src_im = imagecreatefromgif($image_source_url);
            if(!$src_im){
                throw new Exception("载入gif图片错误！");
            }
            return resizeImage($src_im,230,230,'images/',$image_new_name,'.gif');
        }
        throw new Exception("无法识别的图片类型！");
	}
}
?>