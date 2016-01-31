<?php
namespace Admin\Controller;
use Think\Controller;
header('content-type:text/html;charset=utf-8');
class MemberController extends CommonController {
	    public function team(){
        $memb = M('Member');
        $data=$memb->select();
        $this->assign('data',$data);
        $this->display();
    }
public function picload(){
	$member =M('Index');
	$result= $member->where(array('i_id'=>$_GET['id']))->select();
	if($_FILES['thumb']['name']){
  		$thumb = imgFile();
        $info = $thumb['info'];
	    if(!$info) {// 上传错误提示错误信息
               $error;
            }else{// 上传成功
               $path = $info['thumb']['savepath'];
               $p = ltrim($path,'.');
               $img = $info['thumb']['savename'];
               $src=$p.$img;	
			   $res= $member->where(array('i_id'=>$_GET['id']))->save(array('i_thumb'=>$src));
			   if($res){
			   	 echo "<script>alert('更新成功');window.location.href='/index.php/Admin/Member/teacher';</script>";
			     }else{
			      echo "<script>alert('更新失败');window.location.href='/index.php/Admin/Member/teacher';</script>";	
			     }
			}
		
	 }

    $this->assign('result',$result[0]);
	$this->display();
}

 public function teacher(){
        $memb = M('Index');
        $data=$memb->where(array('i_class'=>5))->select();
		if(IS_POST){
			$data=array('i_job'=>$_POST['job'],'i_title'=>$_POST['title'],'i_content'=>$_POST['content'],'i_content1'=>$_POST['content0'],'i_content2'=>$_POST['content2'],'i_content3'=>$_POST['content3']);
			$id=$_POST['id'];
			$res= $memb->where(array('i_id'=>$id))->save($data);
			if($res){
				 echo "<script>alert('修改成功');window.location.href = '/index.php/Admin/Member/teacher';</script>";
			}else{
				 echo "<script>alert('尚未修改');window.location.href = '/index.php/Admin/Member/teacher';</script>";
			}
		
		}
		
        $this->assign('data',$data);
        $this->display();
    }	
		
 public function tran(){
        $memb = M('Index');
        $data=$memb->where(array('i_class'=>4))->select();
		if(IS_POST){
			$data=array('i_title'=>$_POST['title'],'i_content'=>$_POST['content']);
			$id=$_POST['id'];
			$res= $memb->where(array('i_id'=>$id))->save($data);
			if($res){
				 echo "<script>alert('修改成功');window.location.href = '/index.php/Admin/Member/tran';</script>";
			}else{
				 echo "<script>alert('尚未修改');window.location.href = '/index.php/Admin/Member/tran';</script>";
			}
		
		}
		
        $this->assign('data',$data);
        $this->display();
    }		
		
	
    public function index(){
        $memb = M('Member');
        $data=$memb->select();
        $this->assign('data',$data);
        $this->display();
    }

    public function delete(){
        $id = I('get.id');
        $memb = M('Member');
        $res = $memb->where(array('p_id'=>$id))->delete();
        if($res){
            echo "<script>alert('删除成功');window.location.href = '/index.php/Admin/Member/index';</script>";
        }else{
            echo "<script>alert('删除失败');window.history.go(-1);</script>";
        }
    }

    public function add(){
    	$cate =M('mcate');
		$data= $cate->select();
        if(IS_POST){
            $memb = M('Member');
			$time =date('Y.m.d',time());
             $arr = array(
                    'p_title'=>I('post.title'),
                    'p_content'=>I('post.content1'),
                    'p_cate'=>I('post.cate'),
                    'p_addtime'=>$time,
                    'p_author'=>I('post.author'),
                    'p_source'=>I('post.source'),
                );
                $memb = M('Member');
                $id = $memb->add($arr);
				if($_FILES['thumb']['name']){
                    $thumb = imgFile();
					$path = $thumb['info']['thumb']['savepath'];
                    $p = ltrim($path,'.');
                    $img = $thumb['info']['thumb']['savename'];
                    $src=$p.$img;
					
                 $memb->where(array('p_id'=>$id))->save(array('p_thumb'=>$src));                 
				}
                if($id){
                    echo "<script>alert('添加成功');window.location.href = '/index.php/Admin/Member/add';</script>";
                }else{
                     echo "<script>alert('添加失败');window.history.go(-1);</script>";
                }
            }
//		print_r($data);die;
        $this->assign('data',$data);
        $this->display();
    }
    function edit(){
    	$id =$_GET['id'];
		$member=M('Member');
		$mcate=M('Mcate');
		$Mdata= $mcate->select();   //所有父类名称
		$res=$member->where(array('p_id'=>$id))->select();
		if(IS_POST){
			$memb = M('Member');
			$time =date('Y.m.d',time());
             $arr = array(
                    'p_title'=>I('post.title'),
                    'p_content'=>I('post.content1'),
                    'p_cate'=>I('post.cate'),
                    'p_addtime'=>$time,
                    'p_author'=>I('post.author'),
                    'p_source'=>I('post.source'),
                );
                $memb = M('Member');
                $num= $memb->where(array('p_id'=>$id))->save($arr);
                if($_FILES['thumb']['name']){
                    $thumb = imgFile();
					$path = $thumb['info']['thumb']['savepath'];
                    $p = ltrim($path,'.');
                    $img = $thumb['info']['thumb']['savename'];
                    $src=$p.$img;
					
                 $rnum= $memb->where(array('p_id'=>$id))->save(array('p_thumb'=>$src));  
				}
                if($id||$rnum){
                    echo "<script>alert('修改成功');window.location.href = '/index.php/Admin/Member/index';</script>";
                }else{
                     echo "<script>alert('修改失败');window.history.go(-1);</script>";
                }                
		}
		
		$cate=  $res[0]['p_cate'];
		$Mname=$mcate->where(array('m_id'=>$cate))->select();  //当前id的父类名称
		
		$this->assign('data',$res[0]);    //当前id数据
		$this->assign('Mdata',$Mdata);
		$this->assign('Mname',$Mname[0]);
        $this->display();
    }
    function user(){
        $user = $_POST['user'];
        $memb = M('Member');
        $res = $memb->where(array('vip_username'=>$user))->select();
        echo json_encode($res);
    }
   function state(){
        $id = $_POST['id'];
        $memb = M('Member');
        $vip = $memb->where(array('vip_id'=>$id))->find();
        if($vip['vip_state']){
            $res = $memb->where(array('vip_id'=>$id))->save(array('vip_state'=>0));
        }else{
            $res = $memb->where(array('vip_id'=>$id))->save(array('vip_state'=>1));
        }
        $url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?'.$_SERVER['QUERY_STRING'];
        $arr = array(
                'url'=>$url,
                'res'=>$res
            );
        echo json_encode($arr);
   }
}