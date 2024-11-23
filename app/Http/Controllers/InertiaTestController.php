<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\InertiaTest;

class InertiaTestController extends Controller
{
    //
    public function index()
    {
        return Inertia::render('Inertia/Index');
    }

    public function create()
    {
        return Inertia::render('Inertia/Create');
    }

    public function show($id)
    {
        // dd($id);
        return Inertia::render('Inertia/Show', 
        [
            'id' => $id
        ]);
    }

    public function store(Request $request)
    {

        $request->validate([
            'title' => ['required', 'max:20'],
            'content' => ['required'],
        ]);
        
        $ineriaTest = new InertiaTest();
        $ineriaTest->title = $request->title;
        $ineriaTest->content = $request->content;
        $ineriaTest->save();
        return \to_route('inertia.index');
    }



}