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
	public function admin()
	{
		return view('pages/admin');
	}
	public function skinAqua()
	{
		return view('pages/detailProduk/skinAqua');
	}
	public function lipBalm()
	{
		return view('pages/detailProduk/lipBalm');
	}
	public function MWNivea()
	{
		return view('pages/detailProduk/MWNivea');
	}
	public function maybelline()
	{
		return view('pages/detailProduk/maybelline');
	}

	public function about()
	{
		return view('pages/about');
	}

	

}



