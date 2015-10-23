<?php

namespace Notas\Http\Controllers;
use DB;
use Input;
use View;
use Validator;
use Redirect;
use Illuminate\Http\Request;
use Notas\Http\Requests;
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
        return view('login.login');
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
            'last' => $request['last'],
            'email' => $request['email'],
            
        ]);
        return view('user.profile');


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
<<<<<<< HEAD
            ->select('users.id','users.firstname','users.lastname','courses.grade','courses.section')
=======
            ->select('users.id','users.firstname', 'courses.grade','courses.section')
            ->where('users.cod_curso', '=', '41')
>>>>>>> origin/master
            ->get();

         return view('login.show',compact('users'));

    }

    public function user()
    {
         return view('user.profile');

    }
 public function login(Request $request){
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
            if ($validation->fails()) {
                return Redirect::back()->withInput()->withErrors($validation);
            } 
            //if($request['username'] != 'username' || $request['password'] != 'password'){
            //    return Redirect::to('loginfailed');
            //}
            else{
            $request -> session() -> put('user',Input::get('username'));
            //return view('user.profile',compact('users'));
            return View::make('user.profile',compact('users'));
            //return $request -> session() -> get('user');
            //$view = View::make('profile')->with('name', 'Steve');
            // return Redirect::to('user/profile')->with($request -> session() -> get('user'));

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
