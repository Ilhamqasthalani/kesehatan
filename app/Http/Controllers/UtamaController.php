<?php

namespace App\Http\Controllers;

class UtamaController extends Controller
{
	public function login()
	{
		return view("view-1");
	}

	public function daftar()
	{
		return view("view-2");
	}

	public function index()
	{
		return view("test-tema"); // tema dengan templates
	}

	public function home()
	{
		return view("home"); // tema dengan templates
	}

	public function artikel()
	{
		return view("artikel");
	}

	public function medis()
	{
		return view("medis");
	}

	public function info_kesehatan()
	{
		return view("info");
	}

	public function life()
	{
		return view("life");
	}

	public function about()
	{
		return view("about");
	}
}
