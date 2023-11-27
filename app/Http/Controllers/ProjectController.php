<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function project()
    {
        return view('project', [
            'pagetitle' => 'My Project',
            'maintitle' => 'My Projects',
            'projects' => Project::allData()
        ]);
    }

    public function show($code)
    {
        return view('showproject', [
            'pagetitle' => 'Detail Project',
            'maintitle' => 'Detail Project',
            'pro' => Project::dataWithCode($code)
        ]);
    }

    public function menu()
    {
        return view('menu', [
            "pagetitle" => "AFL1",
            "maintitle" => "Menu",
            'menus' => Menu::allData()
        ]);
    }
}
