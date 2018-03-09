<?php

namespace App\Http\Controllers;

use App\Notification;
use App\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //dd(Page::get());
        return view('page.index',['pages'=>Page::get()]);//recibir datos
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('page.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $page = new Page();
        $page->fill($request->all());
        //dd($page);
        $file = Input::file('image');
        $nombre = $file->getClientOriginalName();

        $page->image = $nombre;

        \Storage::disk('local')->put($nombre, \File::get($file));
        $page->save();
        return redirect('page');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   $page=Page::find($id);
        //dd(\Storage::url($page->image));
        $noticacion=Notification::first();
        $total=1000;
        return view('page.show',['page'=>$page,'total'=>$total,'noti'=>$noticacion]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $page = Page::find($id);
        //dd($page);
        return view('page.edit',['page'=>$page]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //dd($request);
        $page = Page::find($id);
        request()->validate([
            'title' => 'required',
            'description' => 'required',
        ]);
        $input = $request->all();
        $page->fill($input)->save();
        //Page::find($id)->update($request->all());
        return redirect()->route('page.index')
            ->with('success','Article updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //dd($id);
        Page::find($id)->delete();
        return redirect()->route('page.index')
            ->with('success','Article deleted successfully');
    }
}
