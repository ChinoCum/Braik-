<?php

namespace Notas\Http\Controllers;
use DB;
use Input;
use View;
use Auth;
use Session;
use Validator;
use Redirect;
use Notas\User;
use Illuminate\Http\Request;
use Notas\Http\Requests;
use Notas\Http\Controllers\Controller;

class NotasController extends Controller
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
            return view("teachers/thnotas");
            }else{
            return Redirect::to('/user/notas');   
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
       if (Auth::check())
            {
            $id = Auth::user()->id;
            $user = User::find($id);
             if ($user->is('admin'))
                {   
                $users = DB::table('users')
                ->join('grades', 'users.id', '=', 'grades.user_id')
                ->select($user,'users.firstname','users.lastname','grades.notas_especificas','grades.unit','grades.cod_class')
                ->select($user,'users.firstname', 'grades.notas_especificas','grades.unidad','grades.cod_class')
                ->get();
                return view('teachers.thshownotas',compact('users'));
                }
                else
                {
                     return Redirect::to('/profile');   
                }
            }
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
