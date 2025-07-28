<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portfolio;

class PortfolioController extends Controller
{
    public function showportfolio()
{
    $ports = Portfolio::orderBy('created_at', 'desc')->paginate(5); // Or Post::all()
    return view('portfolio', compact('ports'));

}
}
