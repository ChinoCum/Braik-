<?php namespace Notas\Http\Controllers;

class testController extends Controller{

	public function index()
	{
		return view('login.login');
	}

	public function create()
	{
		return view('login.create');
	}

	public function store()
    {
        return "Quiubole Mi Shavo: ";
    }

	public function user($nombre)
	{
		return "HOLA MI NOMBRE ES: ".$nombre;
	}
}