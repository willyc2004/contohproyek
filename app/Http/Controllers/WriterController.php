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
            'writers' => Writer::all()
        ]);
    }

    public function showWriter(Writer $writer) {

        //tanpa route model binding
        // $writer::find(1)->with('books')->get();

        //menggunakan route model binding
        // $writer->load('books');

        return view('show', [
            'pagetitle' => 'Writer',
            'maintitle' => 'The Writer',
            'writer' => $writer
        ]);
    }
}
