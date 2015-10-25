<?php

namespace Notas\Http\Controllers;
use DB;
use Input;
use View;
use Auth;
use Session;
use Validator;
use Redirect;
use Illuminate\Http\Request;
use Notas\Http\Requests;
use Notas\Http\Requests\LoginRequest;
use Notas\Http\Controllers\Controller;

class NotesController extends Controller
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
        return view('login.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        \Notas\User::create([
            'username' => $request['username'],
            'password' => bcrypt($request['password']),
            'firstname' => $request['first'],
            'lastname' => $request['last'],
            'email' => $request['email'],
            'cod_curso' =>  $request['grade'],
            'id_school' =>  $request['schools'],
            'pass' =>  $request['password'],
            
        ]);
        Session::flash('message-success', 'Se ha creado un nuevo usuario');
        return Redirect::to('/login/create');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {


      $users = DB::table('users')
            ->join('courses', 'users.cod_curso', '=', 'courses.id')
            ->select('users.id','users.firstname','users.lastname','courses.grade','courses.section')
            ->select('users.id','users.firstname', 'courses.grade','courses.section')
            ->get();

         return view('login.show',compact('users'));

    }

    public function user()
    {
         return view('user.profile');

    }
 public function login(LoginRequest $request){

        $rules = array(
        'username'   => 'required|max:200|',
        'password' => 'required|max:160|',
        );
        $messages = array(
        'required' => 'Este campo es requerido',
        'max'      => 'Este campo debe tener un máximo de :max caracteres',
        'different'     =>  'No esta este nombre de usuario',
        );
       
        $users = DB::table('users')
            ->where('username','=',Input::get('username'))
            ->where('password','=',Input::get('password'))
            ->get();
            $validation = Validator::make(Input::all(),$rules, $messages);
           
/*/Start Auth
            if (Auth::attempt(['username' => $request['username'], 'password' => $request['password']]))
            {
            return View::make('user.profile',compact('users'));
            }else{
            Session::flash('message-error', 'Datos son Incorrectos');
            return Redirect::to('/login');
            }
*///End Auth 
       
            if ($validation->fails()) {
               return Redirect::back()->withInput()->withErrors($validation);
           } 
           if (empty($users)) {
                Session::flash('message-error', 'Datos son Incorrectos');
                return Redirect::to('/login');
            }
            else{
            $request -> session() -> put('user',Input::get('username'));
            return View::make('user.profile',compact('users'));
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
        $user = User::find($id);
        return view('login.edit',['user'=>$user]);
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
