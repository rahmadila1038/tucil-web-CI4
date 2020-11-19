<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('pages/index');
	}
	public function register()
	{
		return view('pages/register');
	}

	public function login()
	{
		return view('pages/login');
	}
	public function skinAqua()
	{
		return view('pages/detailProduk/skinAqua');
	}
	public function lipBalm()
	{
		return view('pages/detailProduk/lipBalm');
	}

	public function about()
	{
		return view('pages/about');
	}

	

}



