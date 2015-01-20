<?php

class HomeController extends BaseController {

	public function __construct(){
		
	}
    /*
     * indexTpl
     */
	public function showIndex()
	{
        return $this->View('home.home');

	}

    public function showPost($postName){
		//$postName = self::doFilter('show_post.post_name',$postName);
        $postId = Config::get('post_alias.'.$postName,$postName);
		$postModel = new postModel();
		$post = $postModel->getPost($postId);
		$post = self::doFilter('show_post.postInfo',$post);
		if(!$post){
			$this->View404('不存在的文章');
		}
		$termModel = new termModel();
		$cat = $termModel->getTerm($post->term_id);
		if($cat){
			array_merge($cat, $post);
		}	
        return $this->View('home.post',array('postId'=>$postId,'post'=>$post));
    }



}
