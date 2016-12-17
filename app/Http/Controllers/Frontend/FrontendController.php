<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

/**
 * Class FrontendController
 * @package App\Http\Controllers
 */
class FrontendController extends Controller
{
	/**
	 * @return \Illuminate\View\View
	 */
	public function index()
	{
		return view('frontend.index');
	}

	/**
	 * @return \Illuminate\View\View
	 */
	public function macros()
	{
		return view('frontend.macros');
	}

	/**
	 * @return \Illuminate\View\View
	 */
	public function concienciaSocial()
	{
		return view('frontend.pages.conciencia_social');
	}
	
	/**
	 * @return \Illuminate\View\View
	 */
	public function eventos()
	{
		$eventos = [];
		
		return view('frontend.pages.eventos')->with(compact('eventos'));
	}

	/**
	 * @return \Illuminate\View\View
	 */
	public function legislacion()
	{
		return view('frontend.pages.legislacion');
	}
}
