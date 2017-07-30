<?php

/**
 * テンプレートを使うクラス
 */
class Controller_Templates extends Controller_Template
{
	public $template = 'templates/layout';

	/**
	 * デフォルトページ
	 *
	 * @access  public
	 * @return  void
	 */
	public function action_index()
	{
		// アクションごとにレイアウトを変更する場合
		#$this->template = View::forge('templates/layout');

		$this->template->title = 'FuelPHPの特徴';
		$this->template->content = View::forge('templates/index');
	}
}
