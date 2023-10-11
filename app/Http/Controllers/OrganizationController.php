<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\Organization;

class OrganizationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //        
        $organizations = Organization::all();
        return view('organizations.index', compact('organizations'));
        
    }


//     public function index()
//   {
//     $posts = Post::all();
//     return view('posts.index', compact('posts'));
//   }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        dd('soy el create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
