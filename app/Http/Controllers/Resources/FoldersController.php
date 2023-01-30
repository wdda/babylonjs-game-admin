<?php

namespace App\Http\Controllers\Resources;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class FoldersController extends Controller
{
    public function index(): Factory|View|Application
    {
        return view('resources.files.index');
    }

    public function create(): Factory|View|Application
    {
        return view('resources.files.create');
    }
}
