<?php

namespace App\Http\Controllers;

use App\Models\Reply;
use App\Models\Thread;
use Auth;
use Illuminate\Http\Request;
use Str;

class ReplyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => ['required', 'min:2', 'max:100', 'unique:replies'],
            'description' => ['required', 'min:2', 'max:300'],


        ]);
        $user = Auth::user();
        $thread= Thread::find($request->input('thread'));
        $reply = new Reply();
        $reply->name = $request->input('name');
        $reply->description = $request->input('description');
        $reply->user()->associate($user);
        $reply->thread()->associate($thread);
        $reply->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reply  $reply
     * @return \Illuminate\Http\Response
     */
    public function show(Reply $reply)
    {
        return redirect()->back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reply  $reply
     * @return \Illuminate\Http\Response
     */
    public function edit(Reply $reply)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reply  $reply
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reply $reply)
    {
        $this->validate($request, [
            'name' => ['required', 'min:2', 'max:100'],
            'description' => ['required', 'min:2', 'max:300'],


        ]);
        $reply->description = $request->input('description');
        $reply->name = $request->input('name');
        $reply->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reply  $reply
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reply $reply)
    {
        $reply->delete();
        return redirect()->back();
    }
}
