<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\File;

class FileController extends Controller
{
    public function show($id)
    {
        return File::find($id);
    }
}
