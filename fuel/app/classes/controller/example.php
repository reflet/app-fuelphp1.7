<?php

/**
 * サンプルコード
 */
class Controller_Example extends Controller
{
	/**
	 * 独自ルーティング定義
	 *
	 * @access  public
	 * @param   string $method
	 * @param   array  $params
	 * @return  mixed (Response, View, string, integer, boolean, null)
	 */
	#public function router($method, $params)
	#{
	#	echo 'router( )';
	#	echo '<pre>';
	#	var_dump($method, $params);
	#	echo '</pre>';
	#	return call_fuel_func_array(array($this, 'action_'.$method), $params);
	#}

	/**
	 * 事前処理
	 *
	 * @access  public
	 * @return  void
	 */
	public function before()
	{
		echo 'before( )<br>';
	}

	/**
	 * 事後処理
	 *
	 * @access  public
	 * @param   mixed (Response, View, string, integer, boolean, null)
	 * @return  Response
	 */
	public function after($response)
	{
		echo 'after( )<br>';

		//「$response」はコントローラからの戻り値であり、
		// Responseオブジェクトでない可能性があるため、親メソッドを実行する。
		$response = parent::after($response);

		// header情報を追加
		return $response
			->set_header('Cache-Control', 'no-cache, no-store, max-age=0, must-revalidate')
			->set_header('Expires', 'Mon, 26 Jul 1977 05:00:00 GMT');
	}

	/**
	 * テストページ
	 *
	 * @access  public
	 * @param   string $title
	 * @param   string $username
	 */
	public function action_index($title = null, $username = null)
	{
		// 全てのパラメータを取得
		$data = $this->request->route->method_params;
		echo '<pre>';
		var_dump($data);
		echo '</pre>';

		// 画面表示
		return View::forge('example/index')
			->set('title', ($title) ? $title : 'Test Page')
			->set('username', ($username) ? $username : 'John Doe');
	}

	/**
	 * 値を返さないメソッド (404 not found.)
	 *
	 * @access  public
	 * @return  void
	 */
	public function action_test()
	{
		$this->response_status = 404;
		echo 'action_test2( )<br>';
	}
}