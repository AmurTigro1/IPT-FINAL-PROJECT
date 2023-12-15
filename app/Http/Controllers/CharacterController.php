<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Character;
use App\Models\Skill;
class CharacterController extends Controller
{
    public function index()
    {
       $character = character::orderBy("id")->get();

       return view('Character.character',['characters'=> $character]);
    }

    
    public function create() {
        $skills = Skill::list();
        return view('Character.create', ['skills' => $skills]);
    }
    public function store(Request $request) {
        $request->validate([
            'skill_id'     => 'required',
            'appearance'   => 'required',
            'personality'  => 'required',
            'name'         => 'required'
        ]);
        Character::create([
            'skill_id'     => $request->skill_id,
            'appearance'   => $request->appearance,
            'personality'  => $request->personality,
            'name'         => $request->name
        ]);
        return redirect('/characters')->with('message', 'A new Character has been added');
    }

    public function edit(Character $character) {
        return view('Character.edit', compact('character'));
    }


    public function update(Character $character, Request $request) {
    $request->validate([
        'skill_id' => 'required|sometimes|string',
        'appearance' => 'required|sometimes|string',
        'personality' => 'required|sometimes|string',
        'name' => 'required|sometimes|string',

    ]);

    
    $character->update($request->all());
    return redirect('/characters')->with('message', 'Updated successfully');
 }

    public function delete(Character $character) {
        $character->delete();
        return redirect('/characters')->with('message', "$character->name Character Deleted successfully");
    }

}
