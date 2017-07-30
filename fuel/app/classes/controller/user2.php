<?php

class Controller_User2 extends Controller
{
	/**
	 * プレゼンター利用
	 */
	public function action_index()
	{
		// プレゼンターを使う例
		return Response::forge(Presenter::forge('user2', 'view', null, 'user2/index'));
	}

	/**
	 * クエリビルダー利用
	 */
	public function action_select()
	{
		$users = DB::select('name', 'email', 'sex')
			->from('users')
			->limit(1)
			->order_by('sex', 'desc')
			->order_by('id', 'asc')
			->execute()
			->as_array();
		return View::forge('user2/select', array(
			'title' => 'クエリのテスト',
			'users' => $users
		));
	}

	/**
	 * 直クエリ実行
	 */
	public function action_query()
	{
		$users = DB::query('SELECT `name`, `email`, `sex` FROM users LIMIT 10;')
			->execute()
			->as_array();
		return View::forge('user2/select', array(
			'title' => 'クエリのテスト',
			'users' => $users
		));
	}
}
