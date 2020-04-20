<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BackendController extends Controller
{
    public function index()
    {
        return view('backend.index');
    }

    public function cities()
    {
        return view('backend.cities');
    }

    public function myObjects()
    {
        return view('backend.myobjects');
    }

    public function article()
    {
        return view('backend.article');
    }

    public function profile()
    {
        return view('backend.profile');
    }

    public function saveObject()
    {
        return view('backend.saveobject');
    }

    public function saveRoom()
    {
        return view('backend.saveroom');
    }
}
