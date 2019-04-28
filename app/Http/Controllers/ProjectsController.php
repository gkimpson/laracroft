<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    function index()
    {
        $projects = \App\Project::all();
        return view('projects.index', compact('projects'));
    }
}
