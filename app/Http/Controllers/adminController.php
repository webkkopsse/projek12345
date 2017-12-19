<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class adminController extends Controller
{
  public function dashboard()
  {
    return view('blogs/create');
  }
}
