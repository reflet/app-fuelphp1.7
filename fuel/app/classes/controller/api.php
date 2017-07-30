<?php

class Controller_Api extends Controller_Rest
{
	/**
	 * [GET] 検索
	 *
	 * ex)
	 * http://fuel.example.com/api/find.json
	 *
	 * @access  public
	 * @return  string
	 */
	public function get_find()
	{
		$data = array(
			0 => array(
				'name' => 'orange',
				'color' => 'orange'
			),
			1 => array(
				'name' => 'apple',
				'color' => 'red'
			)
		);
		return $this->response($data);
	}

	/**
	 * [POST] 編集
	 *
	 * ex)
	 * http://fuel.example.com/api/edit/1234.json
	 *
	 * @access  public
	 * @param   integer $id
	 * @return  string
	 */
	public function post_edit($id = null)
	{
		return $this->response(array_merge(
			array('id' => $id),
			Input::post()
		));
	}
}
