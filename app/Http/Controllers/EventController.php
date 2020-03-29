<?php

namespace App\Http\Controllers;
use App\Event;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class EventController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['showallevent']);
    }

    public function showallevent()
    {
        $events=Event::all();
        return view('/allevent',compact('events'));
    }
    public function show()
    {
        return view('events.addevent');
    }
    public function add(Request $request){
        $request->validate([
            'name'=>'required',
            'place'=>'required',
            'cover'=>'image|mimes:jpg,png,jpeg|max:1999',
            'time'=>'required',
            'state'=>'required'
        ]);
        if($request->hasFile('cover')){
            $file=$request->file('cover');
            $ext=$file->getClientOriginalExtension();
            $name = 'event_'.$request->name.'.'.$ext;
            $destinationPath = public_path('/images/events');
            $file->move($destinationPath, $name);
        }
        $event=new Event();
        $event->name=$request->name;
        $event->place=$request->place;
        $event->cover=$name;
        $event->time=$request->time;
        $event->state=$request->state;
        $event->save();

        return redirect('/events/index.blade.php');
    }
    public function allevent()
    {
        $events=Event::all();
        return view('events.index',compact('events'));
    }

    public function edit($id)
    {
        $event=Event::find($id);
        return view('events.edit',compact('event'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=>'required',
            'place'=>'required',
            'time'=>'required',
            'state'=>'required'
        ]);
        $event =Event::find($id);
        $event->name=$request->name;
        $event->place=$request->place;
        $event->time=$request->time;
        $event->state=$request->state;
        $event->save();
        return redirect('/events/index.blade.php');
    }

    public function destroy($id)
    {
        $event =Event::find($id);
        unlink(public_path('images/events/'.$event->cover));
        $event->delete();
        return redirect('/events/index.blade.php');
    }


}
