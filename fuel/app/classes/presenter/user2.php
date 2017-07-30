<?php

class Presenter_User2 extends Presenter
{
	private $sexes = array(0 => '未選択', 1 => '男性', 2 => '女性');

	public function view()
	{
		$users = Model_User::find_all(10);
		$this->title = 'プレゼンターのテスト';
		$this->users = ($users === null) ? array() : $users;
		array_walk($this->users, array($this, '_presentational'));
	}

	private function _presentational(&$data)
	{
		$data->sex_string = $this->sexes[$data->sex];
	}
}
