<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SchoolController extends Controller
{
    public function index (Request $request)
    {
    
        $word = $request->get('word')
        $school = School:schools();
        if(isset($word)){
            $array_words = preg_split('/\s;ui',$word,-1,PREG_SPLIT_NO_EMPTY);
        foreach($array_words){
            $escape_word = addcslashes($w,'\\_%');
            $school = $school->where(DB::raw("CONCAT('school','','qualification','','address','','area')"),'like','%',$escape_word.'%');
        }
    }
    $articles = $school->get();
        return view('front',['posts' =>$posts]);
    }
}