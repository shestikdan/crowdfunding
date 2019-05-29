<?php

namespace App\Http\Controllers;

use App\Models\Startup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
            'title' => 'required|unique:startups',
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
        $startup = DB::table('startups')->whereNotIn('id', function($q){
            $q->select('startup_id')->from('startup_user_upvote')->where('user_id', '=', Auth::id());
        })->first();

        if($startup == null)
        {
            return response()->json('empty', 200);
        }

        return response()->json($startup, 200);
    }


    public function upvote($id)
    {
        $startup = Startup::find($id);

        if ($startup->upvote != null) {
            foreach ($startup->upvote as $user) {
                if (Auth::id() == $user->id) {
                    return response()->json(['likes' => $startup->likes, 'upvote' => false ], 200);
                }
            }
        }
        $startup->upvote()->attach(Auth::id());
        $startup->likes = $startup->likes + 1;
        $startup->save();
        return response()->json(['likes' => $startup->likes, 'upvote' => true ], 200);
    }

    public function downvote($id)
    {
        $startup = Startup::find($id);

        if ($startup->downvote != null) {
            foreach ($startup->downvote as $user) {
                if (Auth::id() == $user->id) {
                    return response()->json(['likes' => $startup->likes, 'downvote' => false ], 200);
                }
            }
        }
        $startup->downvote()->attach(Auth::id());

        return response()->json(['likes' => $startup->likes, 'downvote' => true], 200);
    }
}
