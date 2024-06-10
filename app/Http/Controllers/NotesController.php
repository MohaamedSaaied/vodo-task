<?php

namespace App\Http\Controllers;
use App\Models\Note;
use Illuminate\Http\Request;

class NotesController extends Controller
{
    public function mynotes(){
        return view('notes.mynotes');
    }
    public function create(){
        return view('notes.create');
    }
    # function that stores the user id and the new note to the notes table and the note id is set by the database automatically
    public function store(Request $request) {    
        $data=$request->input();
        $note=new Note;
        $note->userId=$data['userId'];
        $note->note=$data['note'];
        $note->save();
        return view('notes.mynotes'); 
    }
    # function that search the notes table by the user's id and retrive all the notes that belonges to him
    public function view($id){
        $notes = Note::where('userId', '=', $id)->get();
        return view('notes.view', ['notes'=>$notes]);
        
    } 
    # function that deletes the note that the user selected by searching by the note's id 
    public function delete($id){
        $data=Note::find($id);
        $data->delete();
        return redirect()->route('mynotes');  
    }
    # function that search the notes table by the note's id and return it to be updated 
    public function edit($id){   
        $data=Note::find($id);
        return view('notes.edit',['data'=>$data]);
    }
    # function that updates the note that the user selected by serching the notes table by the note id then storing the new value 
    public function update(Request $request){
        $data=Note::find($request->id);
        $data->id=$request->id;
        $data->userId=$request->userId;
        $data->note=$request->note;
        $data->save();
        return redirect()->route('mynotes');
    }
}
