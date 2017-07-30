<?php

/**
 * 会員コントローラ（親）
 */
abstract class Controller_Member extends Controller
{
	public function before()
	{
		echo 'before( ): '.__FILE__.'<br>';
	}
}
