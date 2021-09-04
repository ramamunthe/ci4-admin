<?php

namespace App\Controllers;

class AdminControlller extends BaseController
{
	public function index()
	{
		return view('admin/mobil');
	}

	public function create()
	{
		return view('admin/mobil_create');
	}

	public function show()
	{
		return view('admin/mobil_show');
	}
}
