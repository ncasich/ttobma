<?php

namespace App\Http\Controllers\Videos;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VideosController extends Controller
{
    public function index(Request $request)
    {
        return view('videos.index');
    }
}
