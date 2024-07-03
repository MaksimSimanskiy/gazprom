<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home(){
        $reviews = new Contact();
        return view('review',['reviews' => $reviews -> all()]);
        //return view('review');
    }
    public function review_check(Request $request)
    {
        $valid = $request -> validate([
            'email' => 'required|min:4|max:100',
            'text' => 'required|min:4|max:100',
            'message' => 'required|min:15|max:500'
        ]);

        $review = new Contact();
        $review -> email = $request ->input('email');
        $review -> text = $request ->input('text');
        $review -> message = $request ->input('message');
        $review -> save();
        return redirect() -> route('/review');
        }
    }
