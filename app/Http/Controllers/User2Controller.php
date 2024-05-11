<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class User2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        /*        dd($request->collect());*/
        //        if ($request->hasFile('image')) {
        //            dd($request->file('image')->store('images', 'public'));
        //        }

        $request->validate([
        ], [
            //'name.required' => 'Имя обязательно',
        ]);

        return response()->json(User::all()->select('name', 'email'))->cookie('asdf', 'value', 5);
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        dump($user->name);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
