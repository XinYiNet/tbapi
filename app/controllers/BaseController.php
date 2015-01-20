<?php

abstract class BaseController extends Controller {

    protected $tpl = '';
    protected $vars = array();



    protected function with(array $vars){
        $this->vars = array_merge($this->vars,$vars);
        return $this;
    }


    protected function View($tpl,array $vars = array()){

        $this->with($vars);
        return View::make($tpl)->with($this->vars);

    }

    protected function View404($msg,$tpl = 'common.404'){
        return $this->View($tpl,array('msg'=>$msg));
    }
	
	public static function addAction($event, $listen, $priority = 0){
		Event::listen($event, $listen,$priority);
	}
	
	public static function doAction(){
		$vars = func_get_vars();
		
		$event = array_shift($vars);
		if(Event::hasListeners($filterName)){
			return Event::fire($event, array($vars));
		}
		return $vars;
	}
	
	public static function addFilter($filterName, $callback){
		$filterName	=	$filterName.'_filter';
		Event::listen($filterName, $callback);
		
	}
	
	public static function doFilter($filterName, $param){
		$filterName	=	$filterName.'_filter';
		if(Event::hasListeners($filterName)){
			$param =  Event::fire($filterName, $param);
			$param =  is_array($param) ? end($param) : $param;
		}
		return $param;
	}
	
}
