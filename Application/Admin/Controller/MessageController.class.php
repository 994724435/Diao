<?php

namespace Admin\Controller;
use Think\Controller;
header('content-type:text/html;charset=utf-8');
class MessageController extends CommonController {
	public function index(){
		$msg = M('Message');
		$current = I('get.page',1);
        $limit = I('get.limit',1);
        $art = ($current-1)*$limit;
        $url = get_url();//获取当前页面的URL地址
        $fir = strpos($url,'page');
        if($fir){
            $purl = mb_substr($url,0,$fir-1);
        }else{
            $purl = $url;
        }
        $count=$msg->count();
        $show = list_page($current,$limit,$count,$purl);
        $msg = $msg->order('msg_addtime DESC')->limit($art,$limit)->select();
        foreach($msg as $key=>$val){
        	$msg[$key]['msg_ctitle'] = str_cut($val['msg_content'], 0, 21);
        }
        $data = array(
                'msg'=>$msg,
                'show'=>$show
            );
        $this->assign($data);
		$this->display();
	}

    function new_age(){
        $msg = M('Message');
        $limit = $_POST['limit'];
        $current = I('get.page',1);
        $art = ($current-1)*$limit;
        $url = get_url();//获取当前页面的URL地址
        $fir = strpos($url,'page');
        if($fir){
            $purl = mb_substr($url,0,$fir-1);
        }else{
            $purl = $url;
        }
        $count=$msg->count();
        $show = list_page($current,$limit,$count,$purl);
        $msg = $msg->order('msg_addtime DESC')->limit($art,$limit)->select();
        foreach($msg as $key=>$val){
            $msg[$key]['msg_ctitle'] = str_cut($val['msg_content'], 0, 21);
        }
        $data = array(
                'msg'=>$msg,
                'show'=>$show
            );
        echo json_encode($data);
    }

    public function delete(){
        $id = I('get.msg_id');
        $msg = M('Message');
        $res = $msg->where(array('msg_id'=>$id))->delete();
        if($res){
            echo "<script>window.location.href='/index.php/Admin/Message/index';</script>";die;
        }else{
            echo "<script>alert('删除失败');window.location.href='/index.php/Admin/Message/index';</script>";exit;
        }
    }


}