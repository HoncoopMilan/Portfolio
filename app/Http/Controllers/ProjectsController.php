<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('projects.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'naam' => ['required', 'max:255'],
        ]);
        Project::create($request->all());
        return redirect()->route('dashboard')->with('succes', 'Project met succes toegevoegd!');
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
    public function edit($id)
    {
        
        return view('projects.update');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        
        $request->validate([
            'naam' => ['required', 'max:255'],
        ]);
        $project->fill($request->post())->save();

        return redirect()->route('dashboard')->with('succes', 'Project is aangepast');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        
        $project->delete();
        
        return redirect()->route('dashboard')->with('succes', 'project is verwijderd');
    }
}

    

