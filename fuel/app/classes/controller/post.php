<?php

/**
 * 投稿情報
 */
class Controller_Post extends Controller
{
	/**
	 * 自動投稿処理
	 *
	 * @access  public
	 * @return  void
	 */
	public function action_auto_insert()
	{
		$now = date('Ymd');
		for ($i=0; $i<10; ++$i)
		{
			// Model_Postクラスのオブジェクトを作成する
			$post = Model_Post2::forge();

			// 投入用のダミーデータを配列として作成
			$row = array(
				'title'      => $i.'番目の投稿の件名',
				'summary'    => $i.'番目の概要',
				'body'       => 'これは'.$i.'番目の投稿です。'."\n".'テストで自動渡航しています。',
				'created_at' => $now,
				'updated_at' => $now
			);

			// 配列からModel_Postクラスのオブジェクトに値を設定する
			$post->set($row);

			// オブジェクトを保存する
			$post->save();
		}
		echo 'Finished!';
	}

	/**
	 * 投稿一覧ページ
	 *
	 * @access  public
	 * @return  View
	 */
	public function action_index()
	{
		$data = array('rows' => Model_Post2::find_all());
		return View::forge('post/list', $data);
	}

	/**
	 * フォーム送信
	 *
	 * @access  public
	 * @return  View
	 */
	public function action_form()
	{
		return View::forge('post/form');
	}

	/**
	 * 投稿処理
	 *
	 * @access  public
	 * @return  void
	 */
	public function action_save()
	{
		$now  = date('Ymd');
		$form = array(
			'title'      => Input::post('title'),
			'summary'    => Input::post('summary'),
			'body'       => Input::post('body'),
			'created_at' => $now,
			'updated_at' => $now
		);
		Model_Post2::forge()
			->set($form)
			->save();
		Response::redirect('post');
	}
}