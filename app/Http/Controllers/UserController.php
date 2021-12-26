<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $txt=trim($request->get('txt'));
        $users=User::where('name','LIKE','%'.$txt.'%')
        ->sortable()
        ->paginate(15);
        $roles=[
            1=>"Administrador",
            2=>"Usuario",
            3=>"Invitado"
        ];
        return view('users.index',compact('users','txt','roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('users.create');
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
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required|email|unique:users,email',
            'telefono'=>'size:10',
        ]);
        $user=new User;
        $user->name=$request->input('name');
        $user->email=$request->input('email');
        $user->password = Hash::make('12345678');
        $user->direccion=$request->input('direccion');
        $user->telefono=$request->input('telefono');
        $user->fechanacimiento=$request->input('fechanacimiento');
        $user->rol=$request->input('rol');
        $user->save();
        return redirect()->route('users.index')->with('success','Usuario creado exitosamente!');
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
        $user=User::findOrFail($id);
        $roles=[
            1=>"Administrador",
            2=>"Usuario",
            3=>"Invitado"
        ];
         return view('users.show',compact('user','roles'));  
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
        $user=User::findOrFail($id);
         return view('users.edit',compact('user'));        
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
         $this->validate($request,[
             'name'=>'required',
             'email'=>'required|email',
             'telefono'=>'size:10',
         ]);
        $user=User::findOrFail($id);
        $user->name=$request->input('name');
        $user->email=$request->input('email');
        $user->password=Hash::make('12345678');;
        $user->direccion=$request->input('direccion');
        $user->telefono=$request->input('telefono');
        $user->fechanacimiento=$request->input('fechanacimiento');
        $user->rol=$request->input('rol');
        $user->save();
        return redirect()->route('users.index')->with('success','Usuario editado exitosamente!');
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
        $user=User::findOrFail($id);
        $user->delete();
        return redirect()->route('users.index')->with('success','Usuario eliminado exitosamente!');
    }
    public function sortBy($columnName){
        redirect()->route('users.index')->with('success','Usuario eliminado exitosamente!');
    }
}
