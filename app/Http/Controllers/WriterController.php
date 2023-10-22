<?php

namespace App\Http\Controllers;

use App\Models\Writer;
use Illuminate\Http\Request;

class WriterController extends Controller
{
    public function writer() {
        return view('writer', [
            'pagetitle' => 'Writer',
            'maintitle' => 'Writers in My Library',
            'writers' => Writer::index()
        ]);  
    }

    public function showWriter($id) {
        return view('show', [
            'pagetitle' => 'Writer',
            'maintitle' => 'The Writer',
            'writer' => Writer::showWriter($id)
        ]);  
    }
}
