<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct()
	{
		$this->middleware("auth");
	}

	public function flashMessage($icon, $message, $alert){
		\Session::flash('flash_message',[
			'msg'=>"<i class='fa fa-fw fa-$icon'></i> $message",
			'class'=>"alert-$alert"
    	]);
	}
}
