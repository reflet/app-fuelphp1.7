<?php

class Controller_Staff extends Controller
{
	public function action_top()
	{
		return View::forge('staff/top', array(
			'name' => 'テスト<b>太郎</b>'
		));
	}

	public function action_top2()
	{
		$view = View::forge('staff/top');
		$view->name = 'テスト<b>太郎</b>';
		return $view;
	}

	public function action_top3()
	{
		return View::forge()
			->set_filename('staff/top3')               // viewファイル指定
			->set('title', 'スタッフ<b>詳細</b>', false) // サニタイズ解除(個別)
			->set('name', 'テスト<b>太郎</b>');          // サニタイズ自動実行
	}

	public function action_list()
	{
		return View::forge()
			->set_filename('staff/list')  // viewファイル指定
			->auto_filter(false)          // サニタイズ解除(一括)
			->set('title', 'スタッフ<b>一覧</b>')
			->set('staff', array(
				array('id' => 1, 'name' => 'テスト<b>太郎</b>'),
				array('id' => 2, 'name' => 'テスト<b>次郎</b>'),
				array('id' => 3, 'name' => 'テスト<b>花子</b>')
			));
	}
}
