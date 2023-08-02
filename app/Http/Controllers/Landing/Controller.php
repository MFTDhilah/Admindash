<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{

	public function flashMessage($icon, $message, $alert){
		\Session::flash('flash_message',[
			'msg'=>"<i class='fa fa-fw fa-$icon'></i> $message",
			'class'=>"alert-$alert"
    	]);
	}
}
