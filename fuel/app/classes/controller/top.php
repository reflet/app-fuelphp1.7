<?php
/**
 * Fuel is a fast, lightweight, community driven PHP5 framework.
 *
 * @package    Fuel
 * @version    1.7
 * @author     Fuel Development Team
 * @license    MIT License
 * @copyright  2010 - 2015 Fuel Development Team
 * @link       http://fuelphp.com
 */

/**
 * The Welcome Controller.
 *
 * A basic controller example.  Has examples of how to set the
 * response body and status.
 *
 * @package  app
 * @extends  Controller
 */
class Controller_Top extends Controller
{
	/**
	 * The basic welcome message
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_index()
	{
		return Response::forge(View::forge('welcome/index'));
	}

	/**
	 * A typical "Hello, Bob!" type example.  This uses a Presenter to
	 * show how to use them.
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_hello()
	{
		return Response::forge(Presenter::forge('welcome/hello'));
	}

	/**
	 * The 404 action for the application.
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_404()
	{
		return Response::forge(Presenter::forge('welcome/404'), 404);
	}

	/**
	 * ビューのテスト
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_test()
	{
		$data = array('name' => '早川');
		return Response::forge(View::forge('welcome/test'), $data);
	}

	/**
	 * modulesからの読み出し
	 *
	 * ex)
	 * http://fuel.example.com/top/modules/
	 * http://fuel.example.com/user/hello/
	 *
	 * @access  public
	 * @return  void
	 */
	public function action_modules()
	{
		$user_page = Request::forge('user/hello')->execute();
		echo $user_page;
	}
}
