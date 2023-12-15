<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Manhwa;
class ManhwaController extends Controller
{
    public function index()
    {
       $manhwa = Manhwa::orderBy("id")->get();

       return view('Manhwa.manhwa',['manhwas'=> $manhwa]);
    }

   public function create() 
   {
         return view('Manhwa.create');
    }
    public function store(Request $request) {
        $request->validate([
            'title'    => 'required',
            'synopsis' => 'required',
            'genre'    => 'required'
        ]);
        Manhwa::create([
            'title'    => $request->title,
            'synopsis' => $request->synopsis,
            'genre'    => $request->genre
        ]);
        return redirect('/manhwas')->with('message', 'A new Manhwa has been added');
    }

    public function edit(Manhwa $manhwa) {
        return view('Manhwa.edit', compact('manhwa'));
    }


    public function update(Manhwa $manhwa, Request $request) {
    $request->validate([
        'title'       => 'required',
        'synopsis'    => 'required',
        'genre'       => 'required'
    ]);

    
    $manhwa->update($request->all());
    return redirect('/manhwas')->with('message', 'Updated successfully');
    }

    public function delete(Manhwa $manhwa) {
        $manhwa->delete();
        return redirect('/manhwas')->with('message', "$manhwa->title Manhwa Deleted successfully");
    }
}
