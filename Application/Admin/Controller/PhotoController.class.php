<?php

namespace Admin\Controller;
use Think\Controller;
header('content-type:text/html;charset=utf-8');
class PhotoController extends CommonController {
	public function index(){
		$banner = M('Banner');
		$bp = M('Banner_page');
		$bp_id = I('get.bp',1);
		$banner_page = $bp->select();
		$data = $banner->select();
		if(IS_POST){
            $idarr = I('post.idarr');
            $where = array('ban_id'=>array('in',$idarr));
            $res = $banner->where($where)->delete();
            if($res){
               echo "<script>window.location.href='/index.php/Admin/Photo/index';</script>";exit;
            }else{
                echo "<script>alert('删除失败');window.location.href='/index.php/Admin/Photo/index';</script>";exit;
            }
        }

		$this->assign('data',$data);
        $this->display();
    }
    public function add(){
    	$bp = M('Banner_page');
    	$banner_page = $bp->select();
    	$data = array('banner_page'=>$banner_page);
    	if(IS_POST){
    		$banner = M('Banner');
    		$thumb = imgFile();
    		$info = $thumb['info'];
    		if(!$info) {// 上传错误提示错误信息
                $error;
            }else{// 上传成功
                $path = $info['ban_url']['savepath'];
                $p = ltrim($path,'.');
                $img = $info['ban_url']['savename'];
                $src=$p.$img;
                $root = rtrim($thumb['rootPath'],'\ThinkPHP/');
                $roo = str_replace("\\","/",$root);
                $url = ltrim($info['ban_url']['savepath'],'.');
                $uploadedfile = $roo.$url.$info['ban_url']['savename'];
                $tmp = imagecreatefromjpeg($uploadedfile);
                list($width,$height)=getimagesize($uploadedfile);
                $newwidth= 1903;
                $newheight=($height/$width)*$newwidth;
                img_create_small($uploadedfile,$newwidth,$newheight,$uploadedfile);
                $arr = array(
    				'ban_name'=>I('post.ban_name'),
    				'ban_order'=>I('post.ban_order'),
    				'ban_gourl'=>I('post.ban_gourl'),
    				'ban_url'=>$src,
    				'ban_pageid'=>I('post.check_page')
    			);
                $res = $banner->add($arr);
                if($res){
                	echo "<script>window.location.href='/index.php/Admin/Photo/index';</script>";
                }else{
                	echo "<script>alert('添加失败');window.history.go(-1);</script>";
                }
            }
    	}
    	$this->assign($data);
    	$this->display();
    }
    public function bandel(){
    	$id = I('get.ban_id');
    	$banner = M('Banner');
    	$res = $banner->where(array('ban_id'=>$id))->delete();
    	if($res){
    		echo "<script>window.location.href='/index.php/Admin/Photo/index';</script>";
    	}else{
    		echo "<script>alert('删除失败');window.history.go(-1);</script>";
    	}
    }
    function changeName(){
    	$name = $_POST['name'];
    	$id = $_POST['id'];
    	$banner = M('Banner');
    	$res = $banner->where(array('ban_id'=>$id))->save(array('ban_name'=>$name));
    	echo json_encode($res);
    }
    function changeOrder(){
    	$order = $_POST['order'];
    	$id = $_POST['id'];
    	$banner = M('Banner');
    	$res = $banner->where(array('ban_id'=>$id))->save(array('ban_order'=>$order));
    	echo json_encode($res);
    }
    function changeGourl(){
    	$gourl = $_POST['gourl'];
    	$id = $_POST['id'];
    	$banner = M('Banner');
    	$res = $banner->where(array('ban_id'=>$id))->save(array('ban_gourl'=>$gourl));
    	echo json_encode($res);
    }
}