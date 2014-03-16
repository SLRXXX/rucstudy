<?php
/**
 * 登录验证及基础控制器
 * by hfr
 */
class CommonAction extends Action
{
	public function _initialize()
	{
		if(!isset($_SESSION['uid']))
		{
			$this->redirect('Index/Index/index');
		}
		else 
		{
			if(session('type')!='student')
			{
				$this->redirect('Index/Index/index');
			}
		}
	}

	/**
	 * 下载模块
	 * modified by hfr at 201402081923
	 */
	public function download()
	{
		$furl=I('furl');

		if(fileDownload($furl)){

		}else{
			$this->error("文件不存在");
		}

	}
	
	
}
?>