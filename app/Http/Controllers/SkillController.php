<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skill;
class SkillController extends Controller
{
    public function index()
    {
       $skill = Skill::orderBy("id")->get();

       return view('Skill.skill',['skills'=> $skill]);
   }

   public function create() 
   {
         return view('Skill.create');
    }
    public function store(Request $request) {
        $request->validate([
            'name'    => 'required',
            'description' => 'required',
            'type'    => 'required'
        ]);
        Skill::create([
            'name'    => $request->name,
            'description' => $request->description,
            'type'    => $request->type
        ]);
        return redirect('/skills')->with('message', 'A new Skill has been added');
    }

    public function edit(Skill $skill) {
        return view('Skill.edit', compact('skill'));
    }


    public function update(Skill $skill, Request $request) {
    $request->validate([
        'name'       => 'required',
        'description'    => 'required',
        'type'       => 'required'
    ]);

    
    $skill->update($request->all());
    return redirect('/skills')->with('message', 'Updated successfully');
    }

    public function delete(Skill $skill) {
        $skill->delete();
        return redirect('/skills')->with('message', "$skill->name skill Deleted successfully");
    }
}
