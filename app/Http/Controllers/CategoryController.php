<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
class CategoryController extends Controller
{
    public function index()

    {
    	$data = Category::paginate(2);
    	return view('Category.index', compact('data')) ;   }

    
}
