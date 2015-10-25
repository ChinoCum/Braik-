<?php

namespace Notas\Http\Controllers;

use Illuminate\Http\Request;
use Notas\Http\Requests;
use DB;
use Input;
use View;
use Auth;
use Session;
use Validator;
use Notas\User;
use Redirect;
use Notas\Http\Requests\LoginRequest;
use Notas\Http\Controllers\Controller;

class LogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          if (Auth::check())
            {
            $id = Auth::user()->id;
            $user = User::find($id);
             if ($user->is('admin'))
            {
            return Redirect::to('/thprofile');
            }else{
            return Redirect::to('/profile');   
            } 
            }else{
         return view('login.login');
        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     public function store(LoginRequest $request)
    {

        if (Auth::attempt(['username' => $request['username'], 'password' => $request['password']]))
            {
            $id = Auth::user()->id;
            $user = User::find($id);
             if ($user->is('admin'))
            {
            return Redirect::to('/thprofile');
            }else{
            return Redirect::to('/profile');   
            }
            }else{
            Session::flash('message-error', 'Datos son Incorrectos');
            return Redirect::to('/login');
            }
    }
     public function logout(){
        Auth::logout();
        return Redirect::to('/login');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
