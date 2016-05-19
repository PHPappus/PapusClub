<?php

namespace papusclub\Http\Controllers;

use Illuminate\Http\Request;

use papusclub\Http\Requests;



use papusclub\Http\Requests\LoginRequest;
use Auth;
use Session;
use Redirect;
use papusclub\Http\Controllers\Controller;
use papusclub\User;

class LogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        if(Auth::attempt(['email'=>$request['email'], 'password'=>$request['password'], 'perfil_id'=>$request['perfil_id']])){
            if ($request['perfil_id']==1)
                return Redirect::to('/socio');
            if($request['perfil_id']==5)
                return Redirect::to('/gerente');
            if($request['perfil_id']==4)
                return Redirect::to('/admin-registros');
            if($request['perfil_id']==3)
                return Redirect::to('/admin-pagos');
            if($request['perfil_id']==2)
                return Redirect::to('/admin-general');


        }
         return $request['perfil_id'];
        Session::flash('message-error','Datos son incorrectos');
        return Redirect::to('/login');

    }

    public function logout(){
        Auth::logout();
        return Redirect::to('/');
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
