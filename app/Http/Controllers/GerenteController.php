<?php

namespace papusclub\Http\Controllers;

use Illuminate\Http\Request;

use papusclub\Http\Requests;
use Auth;
use Session;
use Redirect;
use papusclub\Http\Controllers\Controller;
use papusclub\User;

class gerenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    

    public function index()
    {
        return view('gerente.inicio-al-gerente');
    }

    public function cuenta()
    {
       return view('gerente.cuenta-al-gerente');
    }

}
