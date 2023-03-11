<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SchoolController extends Controller
{
    public function index (Request $request)
    {
    
        $word = $request->get('word')
        $school =School:school();
        if(isset($word){
            $array_words = preg_split('/\s;ui',$word,-1,PREG_SPLIT_NO_EMPTY);
        foreach($array_words){
            $escape_word = addcslashes($w,'\\_%');
            $school = $school->where(DB::raw("CONCAT('school','','address')"),'like','%',$escape_word.'%');
        }
        else{
            $posts = School::all();
        }
    }
    if(is_array($request->input('qualification'))){

    $query->where(function($q) use($request){
        foreach($request->input('qualification') as $qalification){
            $q->orWhere('qualification',$qualification);
        }
        else{
            $posts=school::all();
        }
    }); School::all()
    
    if(is_array($request->input('area')))
    $articles = $school->get();
        return view('front',['posts' =>$posts]);
    }
}

    public function {