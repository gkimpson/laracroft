<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    function index()
    {
        $names = ['gavin', 'mo', 'matt', 'liviu', 'marc', 'kamil'];
        return view('pages.index', [
            'names' => $names
        ]);
    }
}
