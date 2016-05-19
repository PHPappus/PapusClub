<?php

namespace papusclub\Http\Controllers;

use Illuminate\Http\Request;

use papusclub\Http\Requests;

class adminGeneralController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin-general.inicio-al-admin');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function sede(){
        return view('admin-general.sede.index');
    }
    public function newsede(){
        return view('admin-general.sede.newSede');
    }
     public function editsede(){
        return view('admin-general.sede.editSede');
    }
    public function cuenta()
    {
       return view('admin-general.cuenta-al-adming');
    }
    public function postulante()
    {
        return view('postulante-al-admin');
    }

}
