<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Travel\Interfaces\FrontendRepositoryInterface;

class FrontendController extends Controller
{
    public function __construct(FrontendRepositoryInterface $repository)
    {
        $this->fR = $repository;
    }

    public function index()
    {
        $objects = $this->fR->getObjectsForMainPage();
        return view('frontend.index', compact('objects'));
    }
    public function article()
    {
        return view('frontend.article');
    }
    public function object($id)
    {
        $object = $this->fR->getObject($id);
        return view('frontend.object', compact('object'));
    }
    public function person()
    {
        return view('frontend.person');
    }
    public function room()
    {
        return view('frontend.room');
    }
    public function roomSearch()
    {
        return view('frontend.roomsearch');
    }

}
