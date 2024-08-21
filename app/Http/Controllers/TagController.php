<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function __Invoke(Tag $tag)
    {

        return view('results', ['jobs' => $tag->jobs]);
    }
}
