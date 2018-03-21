<?php

namespace App\Http\Controllers;

use App\Notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;


class NotificationsController extends Controller
{
   public function __construct()
    {
        $this->middleware('auth');
    }

     public function index(){
        return view('notification.index', ['notifications'=>Notification ::get()]);
    }
    public function create()
    {
        return view('notification.create');
    }
    public function store(Request $request){
        //dd($request);
        $notification = new Notification();
        $notification->title = $request->title;
        $notification->description = $request->description;
        $notification->file = 'archivo.png';
        $notification->save();
        return redirect()->route('notification.index');
    }
    public function show($id)
    {
        $notification =Notification::find($id);
        //dd(\Storage::url($notification->image));
        return view('notification.show',['notification'=>$notification]);
    }
    public function edit($id)
    {
        $notification = Notification::find($id);
        //dd($page);
        return view('notification.edit',['notification'=>$notification]);
    }
    public function update(Request $request, $id)
    {
        //dd($request);
        $notification = Notification::find($id);
        request()->validate([
            'title' => 'required',
            'description' => 'required',
        ]);
        $input = $request->all();
        $notification->fill($input)->save();
        //Page::find($id)->update($request->all());
        return redirect()->route('notification.index')
            ->with('success','Article updated successfully');
    }
    public function destroy($id)
    {
        //dd($id);
        Notification::find($id)->delete();
        return redirect()->route('notification.index')
            ->with('success','Article deleted successfully');
    }
}