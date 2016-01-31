<?php

namespace Admin\Controller;
use Think\Controller;
header('content-type:text/html;charset=utf-8');
class LinkController extends CommonController {
    public function img_link(){
        $img = M('Img_link');
        $bp = M('Img_link_page');
        $bp_id = I('get.bp',1);
        $img_page = $bp->select();
        $img_link = $img->where(array('img_pageid'=>$bp_id))->select();
        if(IS_POST){
            $idarr = I('post.idarr');
            $where = array('img_id'=>array('in',$idarr));
            $res = $img->where($where)->delete();
            if($res){
               echo "<script>window.location.href='/index.php/Admin/Link/img_link';</script>";exit;
            }else{
                echo "<script>alert('删除失败');window.hsitory.go(-1);</script>";exit;
            }
        }
        $data = array(
                'bp_id'=>$bp_id,
                'img_link'=>$img_link,
                'img_page'=>$img_page
            );
        $this->assign($data);
        $this->display();
    }
    public function img_add(){
        $bp = M('Img_link_page');
        $banner_page = $bp->select();
        $data = array('banner_page'=>$banner_page);
        if(IS_POST){
            $img_link = M('Img_link');
            // print_r($_FILES);die;
            $thumb = imgFile();
            $info = $thumb['info'];
            if(!$info) {// 上传错误提示错误信息
                echo "<script>alert('上传失败');window.history.go(-1);</script>";
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
                // list($width,$height)=getimagesize($uploadedfile);
                // $newwidth= 1000;
                // $newheight=($height/$width)*$newwidth;
                // img_create_small($uploadedfile,$newwidth,$newheight,$uploadedfile);
                $arr = array(
                    'img_name'=>I('post.img_name'),
                    'img_order'=>I('post.img_order'),
                    'img_gourl'=>I('post.img_gourl'),
                    'img_url'=>$src,
                    'img_pageid'=>I('post.check_page')
                );
                $res = $img_link->add($arr);
                if($res){
                    echo "<script>window.location.href='/index.php/Admin/Link/img_link';</script>";
                }else{
                    echo "<script>alert('添加失败');window.history.go(-1);</script>";
                }
            }
        }
        $this->assign($data);
        $this->display();
    }
    public function img_del(){
        $id = I('get.img_id');
        $img = M('Img_link');
        $res = $img->where(array('img_id'=>$id))->delete();
        if($res){
            echo "<script>window.location.href='/index.php/Admin/Link/img_link';</script>";
        }else{
            echo "<script>alert('删除失败');window.history.go(-1);</script>";
        }
    }
	public function words_link(){
        $bp = M('Banner_page');
        $words = M('Words_link');
        $bp_id = I('get.bp',1);
        $w_link = $words->where(array('wl_pageid'=>$bp_id))->select();
        $words_page = $bp->select();
        if(IS_POST){
            $idarr = I('post.idarr');
            $where = array('wl_id'=>array('in',$idarr));
            $res = $words->where($where)->delete();
            if($res){
               echo "<script>window.location.href='/index.php/Admin/Link/words_link';</script>";exit;
            }else{
                echo "<script>alert('删除失败');window.location.href='/index.php/Admin/Link/words_link';</script>";exit;
            }
        }
        $data = array(
                'bp_id'=>$bp_id,
                'words_page'=>$words_page,
                'w_link'=>$w_link
            );
        $this->assign($data);
        $this->display();
    }
    public function words_del(){
        $wid = I('get.wid');
        $words = M('Words_link');
        $res = $words->where(array('wl_id'=>$wid))->delete();
        if($res){
            echo "<script>window.location.href='/index.php/Admin/Link/words_link';</script>";
        }else{
            echo "<script>alert('删除失败');window.history.go(-1);</script>";
        }
    }
    public function words_add(){
        $bp = M('Banner_page');
        $banner_page = $bp->select();
        $data = array('banner_page'=>$banner_page);
        if(IS_POST){
            $arr = array(
                    'wl_name'=>I('post.wl_name'),
                    'wl_gourl'=>I('post.wl_gourl'),
                    'wl_order'=>I('post.wl_order'),
                    'wl_pageid'=>I('post.check_page'),
                );
            $words = M('Words_link');
            $res = $words->add($arr);
            if($res){
                echo "<script>window.location.href='/index.php/Admin/Link/words_link';</script>";
            }else{
                echo "<script>alert('添加失败');window.history.go(-1);</script>";
            }
        }
        $this->assign($data);
        $this->display();
    }
    function change_name(){
        $name = $_POST['wl_name'];
        $id = $_POST['id'];
        $words = M('Words_link');
        $img = M('Img_link');
        $arr = array('wl_name'=>$name);
        $brr = array('img_name'=>$name);
        $res[0] = $words->where(array('wl_id'=>$id))->save($arr);
        $res[1] = $img->where(array('img_id'=>$id))->save($brr);
        echo json_encode($res);
    }
    function change_gourl(){
        $gourl = $_POST['wl_gourl'];
        $id = $_POST['id'];
        $words = M('Words_link');
        $img = M('Img_link');
        $arr = array('wl_gourl'=>$gourl);
        $brr = array('img_gourl'=>$gourl);
        $res[0] = $words->where(array('wl_id'=>$id))->save($arr);
        $res[1] = $img->where(array('img_id'=>$id))->save($brr);
        echo json_encode($res);
    }
    function change_order(){
        $order = $_POST['wl_order'];
        $id = $_POST['id'];
        $words = M('Words_link');
        $img = M('Img_link');
        $arr = array('wl_order'=>$order);
        $brr = array('img_order'=>$order);
        $res[0] = $words->where(array('wl_id'=>$id))->save($arr);
        $res[1] = $img->where(array('img_id'=>$id))->save($brr);
        echo json_encode($res);
    }
}