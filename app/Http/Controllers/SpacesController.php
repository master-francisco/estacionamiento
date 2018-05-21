<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Space;
class SpacesController extends Controller
{

    public function getSpaces()
    {
        $space = Space::orderBy('created_at', 'asc')->get();
        return view('user.apartado', ['space' => $space]);
    }

}
