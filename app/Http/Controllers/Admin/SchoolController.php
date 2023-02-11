<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\School;
use App\MOdel\History;
use Carbon\Carbon;

class SchoolController extends Controller
{
    public function add ()
    {
        return view('admin.school.create');
    }

    public function create(Request$request)
    {
        $this->validate($request, School::$rules);
        $school = new School;
        $form = $request->all();
        
        unset($form['_token']);
        
        $school->fill($form);
        $school->save();
        
        return redirect('admin/school/create');
    }


    public function index(Request $request)
    {
        $cond_school = $request->cond_school;
        if($cond_school !=''){
            $posts = School::where('sdhool',$cond_school)->get();
        }else{
            $posts=School::all();
        }
        
        return view('admin.school.index',['posts' =>$posts,'cond_school'=>$cond_school]);
    }
    
    public function edit(Request $request)
    {
        $school = School::find($request->school);
        if(empty($school)){
            abort(404);
        }
        return view('admin.school.edit',['school_form' =>$school]);
    }
    
    public function update(Request $request)
    {
        $this->validate($request,School::$rules);
        
        $school = School::find($request->school);
        
        $school_form = $request->all();
        unset($school_form['_token']);
        
        $school->fill($school_form)->save();
        
        $history = new History();
        $history->news_id = $news->id;
        $history->edited_at = Carbon::now();
        $history->save();
        
        return redirect('admin/school');
    }
    
    public function delete(Request $request)
    {
        $school = School::find($request->school);
        
        $school->delete();
        
        return redirect('admin/school/');
    }
        
}
    
    
}
