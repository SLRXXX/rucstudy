<?php
class CommonCourseAction extends Action
{
	public function _initialize()
	{
		if(!isset($_SESSION['uid']))
		{
			$this->redirect('Index/Index/index');
		}
		else
		{
			if(session('type')!='teacher')
			{
				$this->redirect('Index/Index/index');
			}
		}

		//身份验证
		if(!courseverify(I('cno')))
		{
			$this->error('没有权限');
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