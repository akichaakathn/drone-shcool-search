<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\School;

class SchoolController extends Controller
{
    public function add ()
    {
        return view('admin.school.create');
    }

    public function create(Request$request)
    {
        $this->validate($request,School::$rules);
        $school = new School;
        $form = $request->all();
        
        unset($form['_token']);
        $school->fill($form);
        $school->save();
        
        return redirect('admin/profile/create');
    }


    public function index(Request $request)
    {
        $cond_school = $request->cond_school;
        if($cond_school !=''){
            $posts = School::where('sdhool',$cond_school)->get();
        }else{
            $posts=school::all();
        }
        return view('sdmin.school.index',['posts' =>$posts,'cond_school'=>$cond_school]);
        }
}
