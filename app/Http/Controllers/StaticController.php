<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Http\Requests\contactRequest;

class StaticController extends Controller
{
   
    public function home()
    {
        return view('article.index');
    }
    public function about()
    {
        return view('about');
    }
    public function contact()
    {
        return view('contact')->with('data',null);
    }
    public function saveContact(contactRequest $request)
    {
        return back()->with('status','your messsage has been received');
    }
}
