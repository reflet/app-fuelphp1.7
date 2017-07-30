<?php

/**
 * 複数階層のサブディレクトリに配置したクラス
 */
class Controller_Member_Top extends Controller_Member
{
	/**
	 * 複数階層のサブディレクトリに配置したページ
	 *
	 * @access  public
	 * @return  void
	 */
	public function action_index()
	{
		echo __DIR__;
	}
}