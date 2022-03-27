<?php

namespace App\Http\Controllers;

use App\Models\Thread;
use App\Models\Topic;
use Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Str;

class ThreadController extends Controller
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
    public function store(Request $request) : RedirectResponse
    {
        $this->validate($request, [
            'name' => ['required', 'min:2', 'max:100', 'unique:threads'],
            'description' => ['required', 'min:2', 'max:300'],


        ]);
        $user = Auth::user();
        $topic= Topic::find($request->input('topic'));
        $thread = new Thread();
        $thread->name = $request->input('name');
        $thread->description = $request->input('description');
        $thread->slug = Str::slug($request->input('name'));
        $thread->user()->associate($user);
        $thread->topic()->associate($topic);
        $thread->save();
        return redirect()->to(route('topic.show', $topic));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Thread  $thread
     * @return \Illuminate\Http\Response
     */
    public function show(Thread $thread)
    {
        return view('thread.show', ['replies'=> $thread->replies()->get(), 'thread' => $thread, 'topic' => $thread->topic()->get()->first()] );

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Thread  $thread
     * @return \Illuminate\Http\Response
     */
    public function edit(Thread $thread)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Thread  $thread
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Thread $thread)
    {
        $this->validate($request, [
            'name' => ['required', 'min:2', 'max:100'],
            'description' => ['required', 'min:2', 'max:300'],


        ]);
        $thread->description = $request->input('description');
        $thread->slug = Str::slug($request->input('name'));
        $thread->name = $request->input('name');
        $thread->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Thread  $thread
     * @return \Illuminate\Http\Response
     */
    public function destroy(Thread $thread)
    {
        $thread->replies()->delete();
        $thread->delete();
        return redirect()->back();
    }
}
