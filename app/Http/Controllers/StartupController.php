<?php

namespace App\Http\Controllers;

use App\Models\Startup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StartupController extends Controller
{
    public function index()
    {
        return view('startup.index');
    }


    public function create()
    {
        return view('startup.create');
    }


    public function store(Request $request)
    {
        $this->validate($request,[
            'title' => 'required',
            'description' => 'required',
            'tagline' => 'required|max:50',
            'logo' => 'required|image',
            'need_money' => 'required|integer|digits:7'
        ]);


        $logo = '';
        if ($request->hasFile('logo')) {
            $logo = time().'.'.$request->logo->getClientOriginalExtension();
            $request->logo->move(public_path('uploads/startup/logo'), $logo);
        }


        $startup = Startup::create([
            'title' => $request->title,
            'description' => $request->description,
            'tagline' => $request->tagline,
            'need_money' => $request->need_money,
            'creator_id' => Auth::id(),
            'logo' => $logo,
        ]);

        return redirect(route('startup.show', $startup->id));
    }


    public function show($id)
    {
        $startup = Startup::find($id);
        if($startup){
            return view('startup.show', compact('startup'));
        }
        return view('layouts.404');
    }


    public function getStartup()
    {
        $startup = Startup::latest()->first();
        return response()->json($startup, 200);

    }
}
