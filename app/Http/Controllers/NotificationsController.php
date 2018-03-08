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
        return view ('notifications');
    }
    public function store(Request $request){
        //dd($request);
        try{
            $notification = new Notification();
            //notifications::create($request->all());
            $notification->fill($request->all());

            $file = Input::file('image');
            $nombre = $file->getClientOriginalName();

            $notification->file=$nombre;

            \Storage::disk('local')->put($nombre,  \File::get($file));
            $notification->save();
        }catch (\Exception $e){
            dd($e->getMessage());
        }

        return ('Listo');
    }
}
