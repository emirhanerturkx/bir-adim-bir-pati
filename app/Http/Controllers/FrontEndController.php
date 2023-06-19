<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\FrontendModel;

class FrontEndController extends Controller
{
    public function index()
    {

        $data = FrontendModel::all();

        return view('index', ['data' => $data[0]]);
    }

    public function about_us(){
        $data = FrontendModel::all();

        return view('about-us', ['data' => $data[0]]);
    }
    public function make_an_application(){
        $data = FrontendModel::all();

        return view('make-an-application', ['data' => $data[0]]);
    }
    public function gallery(){
        $data = FrontendModel::all();

        return view('gallery', ['data' => $data[0]]);
    }
}
