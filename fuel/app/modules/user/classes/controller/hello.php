<?php

namespace User;

class Controller_Hello extends \Controller
{
	public function action_index()
	{
		if (\Request::main() === \Request::active()) {
			//:
			echo '通常のリクエストの場合の処理';
			//:
		} else {
			//:
			echo 'HMVCリクエストの場合の処理';
			//:
		}
	}
}
